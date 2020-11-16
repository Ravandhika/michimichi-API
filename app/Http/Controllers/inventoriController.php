<?php
namespace App\Http\Controllers;

use App\inventoriModel;
use Illuminate\Http\Request;

class inventoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getall(){
        $inventori = inventoriModel::all();
        return response($data);
    }
    public function getbyid($id){
        $inventori = inventoriModel::where('id',$id)->get();
        return response ($inventori);
    }
    public function save(Request $request){
        $inventori = new inventoriModel();
        $inventori->barang = $request->input('barang');
        $inventori->deskripsi_barang = $request->input('deskripsi_barang');
        $inventori->tipe = $request->input('tipe');
        $inventori->gender = $request->input('gender');
        $inventori->harga = $request->input('harga');
        $inventori->gambar = $request->input('gambar');

        $inventori->save();
    
        return response('Berhasil Menambah Data');
    }
    public function update(Request $request, $id){
        $inventori = new inventoriModel();
        $inventori->barang = $request->input('barang');
        $inventori->deskripsi_barang = $request->input('deskripsi_barang');
        $inventori->tipe = $request->input('tipe');
        $inventori->gender = $request->input('gender');
        $inventori->harga = $request->input('harga');
        $inventori->gambar = $request->input('gambar');
        $inventori->save();
    
        return response('Berhasil Merubah Data');
    }
    
    public function delete($id){
        $inventori = inventoriModel::where('id',$id)->first();
        $inventori->delete();
    
        return response('Berhasil Menghapus Data');
    }
}