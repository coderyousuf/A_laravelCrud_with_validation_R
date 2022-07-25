<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testModel;
use DB;

class testController extends Controller
{
  public function mainView(){
    $data=array();
    $data['qr']=testModel::get();
    echo view("main", $data);
  }
  public function add(){
    echo view("add");
  }
  public function store(Request $request){
    $dat=$request->all();
    testModel::create($dat);
    return redirect('/');
  }
  public function destroy($id){
    $usuf=testModel::find($id);
    $usuf->delete();
    return redirect('/');
  }
  public function update_form($id){
    $data['qr']=testModel::find($id);
    echo view('update_form', $data);
  }
  public function modify(Request $request){
        $id=$request->id;
        $vi=$request->all();
        $data=testModel::find($id);
        dd($data);
        // $data->update($vi);
        // return redirect('/');
    }
}
