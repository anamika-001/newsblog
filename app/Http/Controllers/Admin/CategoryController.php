<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddCategory;

class CategoryController extends Controller
{
    public function index(){
        return view('Admin.category.addcategory');
    }

    public function store(Request $request)
    {
        
        $this->validate($request,
        [
        'title'=>'required|min:2|max:20',
       
        ]);

        $addcategory = new AddCategory();
        $addcategory->title=$request['title'];
        $addcategory->description=$request['description'];
        $addcategory->save();
        return redirect()->back()->with('success','category created successfully.');
    }


    public function show()
    {
        $categories=AddCategory::all();
        return view('Admin.category.viewCategory',['categories'=>$categories]);
        
    }
    public function edit($id)
    {
        $categories=AddCategory::where('id',  '=', $id)->first();
        return view('Admin.category.editcategory',['categories'=>$categories]);
        
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
        
        AddCategory::where('id', '=', $id)->update([
        'title' => $request->title??'',
        'description' => $request->description??''
         ]);
         return redirect()->back()->with('success', 'Updated Successfully');
    }

    
    public function destroy($id) {
        
        $data =AddCategory::where('id','=',$id)->delete();
        if($data){
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
    }

}
