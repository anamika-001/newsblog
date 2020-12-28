<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{
    public function index(){
        return view('Admin.video.addvideo');
    }

    public function store(Request $request)
    {
        
        $this->validate($request,
        [
        'video_title'=>'required',
       
        ]);
        
        $addvideo = new Video();
        $addvideo->Video_title=$request->video_title;
        $addvideo->Video_link=$request->video_link;
        $addvideo->save();
        return redirect()->back()->with('success', 'Created Successfully');;
    }


    public function show()
    {
        $videos=Video::all();
        
        return view('Admin.video.viewvideo',['videos'=>$videos]);
        
    }
    public function edit($id)
    {
        $videos=Video::where('id',  '=', $id)->first();
        
        return view('Admin.video.editvideo',['videos'=>$videos]);
        
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
        
       Video::where('id', '=', $id)->update([
        'Video_title' => $request->video_title??'',
        'Video_link' => $request->video_link??''
         ]);
         return redirect()->back()->with('success', 'Updated Successfully');
    }

    
    public function destroy($id) {
        
        $data =Video::where('id','=',$id)->delete();
        if($data){
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
    }
}
