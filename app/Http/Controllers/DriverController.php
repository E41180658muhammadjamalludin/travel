<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Http\RedirectResponse;
class DriverController extends Controller
{
  public function index(){
    $driver = DB::table('drivers')
              ->join('users','drivers.user_id','=','users.id')
              ->join('cars','drivers.mobil_id','=','cars.id')
              ->get();
    return view('driver.show', ['driver' => $driver]);
  }

  public function create(){
    $mobil = DB::table('cars')->get();
    $karyawan = DB::table('users')->where('level','2')->get();
    return view('driver.create',['mobil' => $mobil, 'karyawan' => $karyawan]);
  }
  public function proses(Request $request):RedirectResponse{
    $validated = $request->validate([
      'karyawan' => 'required',
      'mobil' => 'required'
    ]);
   DB::table('drivers')->insert([
     'user_id'  => $request->karyawan,
     'mobil_id' => $request->mobil
   ]);
   Alert::success('Hore!', 'Berhasil Input Data');
   return redirect('/driver');
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
