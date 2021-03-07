<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\PurchaseItem;
use App\SalesItems;
use App\customerTape;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Auth::user()->isAdmin() ) {
            $products = Product::with('company', 'unit')->get();
            foreach($products as $va=>$key) {
               $key->total_qty =  PurchaseItem::where('product_id', $key->id)->sum('qty');
               $key->out_qty =  SalesItems::where('product_id', $key->id)->where('assigned_by', Auth::user()->id)->sum('qty');
               $key->avilable_qty =  $key->total_qty - $key->out_qty;
            }
            return view('reports.index')->with(compact('products'));
        }  else if ( Auth::user()->isDistributor() ) {
            $products = Product::with('company', 'unit')->get();
            foreach($products as $va=>$key) {
               $key->total_qty =  SalesItems::where('product_id', $key->id)->where('user_id', Auth::user()->id)->sum('qty');
               $key->out_qty =  SalesItems::where('product_id', $key->id)->where('assigned_by', Auth::user()->id)->sum('qty');
               $key->avilable_qty =  $key->total_qty - $key->out_qty;
            }
            return view('reports.index')->with(compact('products'));
        } else if ( Auth::user()->isDealer() ) {
            $products = Product::with('company', 'unit')->get();
            foreach($products as $va=>$key) {
               $key->total_qty =  SalesItems::where('product_id', $key->id)->where('user_id', Auth::user()->id)->sum('qty');
               $key->out_qty =  customerTape::where('product_id', $key->id)->where('user_id', Auth::user()->id)->sum('qty');
               $key->avilable_qty =  $key->total_qty - $key->out_qty;
            }
            return view('reports.index')->with(compact('products'));
        }
        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
