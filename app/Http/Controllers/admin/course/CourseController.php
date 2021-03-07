<?php

namespace App\Http\Controllers\admin\course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::get();
        return view('admin.course.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'name' => 'required|unique:companies',
            'logo' => 'required',
           
        ]); 
        //return $request->file;
        $fileName = time().'.'.$request->logo->extension();  
        $request->logo->move(public_path('uploads'), $fileName);
        $data = request()->all();
        $data = request()->except(['_token','_method']);
        $data['logo'] =  $fileName;
        Company::insert($data);
        return redirect('admin/course');
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
        $data = Company::where('id', $id)->first();
        return view('admin.course.edit')->with('data', $data);
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
            'name' => 'required|unique:companies,name,'.$id        
           
        ]); 
        $data =  request()->except(['_token','_method']);
        if(!isset($request->uploadedName )) {
            $validatedData = $request->validate([
                'logo' => 'required',
            ]); 
           // return $request;
            $fileName = time().'.'.$request->logo->extension();  
            $request->logo->move(public_path('uploads'), $fileName);
            $data['logo'] =  $fileName;
        } else {
              unset($data['uploadedName']);
              unset($data['logo']);
        }
       // return $data;
        $company = Company::where('id', $id)->update($data);
        return redirect('admin/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { //return 5;
        Company::where('id', $id)->delete();
        return redirect('admin/course');
    }
}
