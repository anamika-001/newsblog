<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddState;

class StateController extends Controller
{
    
    public function index(){
        return view('Admin.State.addState');
    }

   
    public function store(Request $request)
    { 
        $this->validate($request,
        [
        'state_name'=>'required',
        
        ]);

        $addstate = new AddState();
        $addstate->state_name=$request['state_name'];
        $addstate->description=$request['description'];
        $addstate->save();
        return redirect()->back()->with('success', 'created Successfully');;
    }

    public function show()
    {
        return view('Admin.state.viewState',['states'=>AddState::all()]);
        
    }
    
    public function edit($id)
    {
        $details = AddState::where('id',  '=', $id)->first();
        return view('Admin.state.editstate', compact('details'));
        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
        'state_name'=>'required',
        
        ]);

        AddState::where('id', '=', $id)->update([
            'state_name' => $request->state_name??'',
            'description' => $request->description??''
             ]);
             return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function destroy($id) {
       
        $data =AddState::where('id','=',$id)->delete();
        if($data){
            return redirect()->back()->with('success', 'Deleted Successfully');
        }
    }

}
