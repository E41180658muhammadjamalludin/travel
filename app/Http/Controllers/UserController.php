<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index(){
      $user = DB::table('user')->get();
      return view('user.show', ['user' => $user]);
    }

    public function create(){
      $user = DB::table('user')->get();
      return view('user.create', ['user' => $user]);
    }
    public function proses(Request $request){
     DB::table('user')->insert([
       'nama'        => $request->nama,
       'email'       => $request->email,
       'password'    => $request->password,
       'level'       => $request->akses
     ]);
     return redirect('/user');
    }
    public function edit($id){
      $user = DB::table('user')->where('id',$id)->get();
      return view('user.edit', ['user' => $user]);
    }
    public function update(Request $request){
     DB::table('user')
     ->where('id',$request->id)
     ->update([
       'nama'        => $request->nama,
       'email'       => $request->email,
       'password'    => $request->password,
       'level'       => $request->akses
     ]);
     return redirect('/user');
    }

    public function delete($id){
     DB::table('user')
     ->where('id',$id)
     ->delete();
     return redirect('/user');
    }

}
