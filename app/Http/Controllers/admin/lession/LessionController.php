<?php

namespace App\Http\Controllers\admin\lession;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Company;
use App\Unit;
use Illuminate\Validation\Rule;
use App\PurchaseItem;
use App\SalesItems;
use Auth;
use App\Youtube;

class LessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('company')->get();
        return view('admin.lession.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::get();     
        return view('admin.lession.create')->with(compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
             ]); 
        $data = request()->except(['_token','_method']);
		$insert1 = array('company_id'=>$data['company_id'],'name'=>$data['name'], 'description'=>$data['description']);
        $insert =  Product::insertGetId($insert1);
		foreach($data['youtube'] as $va=>$key){
			Youtube::insert(['product_id'=>$insert,'youtube'=>$key]);
		}
        return redirect('admin/lessions');
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
        $data =  Product::with('youtube')->where('id',$id)->first();
        $company = Company::get();      
        return view('admin.lession.edit')->with(compact('data','company'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
          ]
           );

        $data = request()->except(['_token','_method']);
		$insert1 = array('company_id'=>$data['company_id'],'name'=>$data['name'], 'description'=>$data['description']);
        Product::where('id', $id)->update($insert1);
		Youtube::where('product_id', $id)->delete();
		foreach($data['youtube'] as $va=>$key){
			Youtube::insert(['product_id'=>$id,'youtube'=>$key]);
		}
        return redirect('admin/lessions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect('admin/lessions');
    }

}
