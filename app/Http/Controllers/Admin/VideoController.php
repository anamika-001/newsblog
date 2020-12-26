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
        'video_title'=>'required|min:2|max:20',
       
        ]);
        
        $addvideo = new Video();
        $addvideo->video_title=$request->video_title;
        $addvideo->video_link=$request->video_link;
        $addvideo->save();
        return redirect()->back();
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
        'video_title' => $request->video_title??'',
        'video_link' => $request->video_link??''
         ]);
         return redirect()->back()->with('message', 'Updated Successfully');
    }

    
    public function destroy($id) {
        
        $data =addvideo::where('id','=',$id)->delete();
        if($data){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }
    }
}