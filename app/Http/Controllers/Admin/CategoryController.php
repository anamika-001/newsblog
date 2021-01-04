<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddCategory;
use File;

class CategoryController extends Controller
{
    public function index(){
        return view('Admin.category.addcategory');
    }

    public function store(Request $request)
    {
        
        $this->validate($request,
        [
        'title'=>'required',
        'category_url'=>'required',
        ]);

        $addcategory = new AddCategory();
        $addcategory->title=$request['title'];
        $addcategory->description=$request['description'];
        $addcategory->category_url=$request['category_url'];
        $addcategory->save();
        $destinationPath=base_path().'\resources\views\news_web';
        
        
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
        'description' => $request->description??'',
        'category_url'=> $request->category_url??'',
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
