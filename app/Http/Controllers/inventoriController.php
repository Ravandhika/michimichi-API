<?php

namespace App\Http\Controllers;

use App\InventoriModel;
use Illuminate\Http\Request;

class InventoriController extends Controller
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
        $data = InventoriModel::all();
        return response($data);
    }
    public function getbyid($id){
        $data = InventoriModel::where('id',$id)->get();
        return response ($data);
    }
    public function save(Request $request){
        $data = new InventoriModel();
        
        $data->barang = $request->input('barang');
        $data->deskripsi_barang = $request->input('deskripsi_barang');
        $data->tipe = $request->input('tipe');
        $data->gender = $request->input('gender');
        $data->harga = $request->input('harga');
        $data->gambar = $request->input('gambar');
        $data->save();
    
        return response('Berhasil Menambah Data');
    }
    public function update(Request $request, $id){
        $data = InventoriModel::where('id',$id)->first();
        $data->barang = $request->input('barang');
        $data->deskripsi_barang = $request->input('deskripsi_barang');
        $data->tipe = $request->input('tipe');
        $data->gender = $request->input('gender');
        $data->harga = $request->input('harga');
        $data->gambar = $request->input('gambar');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    
    public function delete($id){
        $data = InventoriModel::where('id',$id)->first();
        $data->delete();
    
        return response('Berhasil Menghapus Data');
    }
}
