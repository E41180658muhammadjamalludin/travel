<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
class UserController extends Controller
{
    public function index(){
      $user = DB::table('users')->get();
      return view('user.show', ['user' => $user]);
    }

    public function create(){
      return view('user.create');
    }
    public function proses(Request $request):RedirectResponse{
      $validated = $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'akses' => 'required'
      ]);
      $hashed = Hash::make($request->password, [
       'rounds' => 12,
      ]);
     DB::table('users')->insert([
       'name'        => $request->nama,
       'email'       => $request->email,
       'password'    => $hashed,
       'level'       => $request->akses
     ]);
     Alert::success('Hore!', 'Berhasil Input Data');
     return redirect('/user');
    }
    public function edit($id){
      $user = DB::table('users')->where('id',$id)->get();
      return view('user.edit', ['user' => $user]);
    }
    public function update(Request $request):RedirectResponse{
      $validated = $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'akses' => 'required'
      ]);
     if(empty($request->password)){
       DB::table('users')
       ->where('id',$request->id)
       ->update([
         'name'        => $request->nama,
         'email'       => $request->email,
         'level'       => $request->akses
       ]);
     }else{
       $hashed = Hash::make($request->password, [
        'rounds' => 12,
       ]);
       DB::table('users')
       ->where('id',$request->id)
       ->update([
         'name'        => $request->nama,
         'email'       => $request->email,
         'password'    => $hashed,
         'level'       => $request->akses
       ]);
     }
     Alert::success('Hore!', 'Berhasil Edit Data');
     return redirect('/user');
    }

    public function delete($id){
     DB::table('users')
     ->where('id',$id)
     ->delete();
     Alert::success('Hore!', 'Berhasil Delete Data');
     return redirect('/user');
    }

}
