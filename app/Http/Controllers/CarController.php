<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Http\RedirectResponse;
class CarController extends Controller
{
  public function index(){
    $car = DB::table('cars')->get();
    return view('car.show', ['car' => $car]);
  }

  public function create(){
    return view('car.create');
  }
  public function proses(Request $request):RedirectResponse{
    $validated = $request->validate([
      'plat_nomor' => 'required',
      'merek' => 'required',
      'type' => 'required'
    ]);
   DB::table('cars')->insert([
     'plat_nomor'  => $request->plat_nomor,
     'merek'       => $request->merek,
     'type'        => $request->type
   ]);
   Alert::success('Hore!', 'Berhasil Input Data');
   return redirect('/car');
  }
  public function edit($id){
    $car = DB::table('cars')->where('id',$id)->get();
    return view('car.edit', ['car' => $car]);
  }
  public function update(Request $request):RedirectResponse{
    $validated = $request->validate([
      'plat_nomor' => 'required',
      'merek' => 'required',
      'type' => 'required'
    ]);
     DB::table('cars')
     ->where('id',$request->id)
     ->update([
       'plat_nomor'  => $request->plat_nomor,
       'merek'       => $request->merek,
       'type'        => $request->type
     ]);

   Alert::success('Hore!', 'Berhasil Edit Data');
   return redirect('/car');
  }

  public function delete($id){
   DB::table('cars')
   ->where('id',$id)
   ->delete();
   Alert::success('Hore!', 'Berhasil Delete Data');
   return redirect('/car');
  }
}
