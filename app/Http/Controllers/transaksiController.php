<?php

namespace App\Http\Controllers;

use App\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
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
        $data = TransaksiModel::all();
        return response($data);
    }
    public function getbyid($id){
        $data = TransaksiModel::where('id',$id)->get();
        return response ($data);
    }
    public function save(Request $request){
        $data = new transaksiModel();
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->kurir = $request->input('kurir');
        $data->kota = $request->input('kota');
        $data->Kecamatan = $request->input('kecamatan');
        $data->kode_pos = $request->input('kode_pos');
        $data->no_tlp = $request->input('no_tlp');
        $data->email = $request->input('email');
        $data->barang = $request->input('barang');
        $data->status = $request->input('status');

        $data->save();
    
        return response('Berhasil Menambah Data');
    }
    public function update(Request $request, $id){
        $data = TransaksiModel::where('id',$id)->first();
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->kurir = $request->input('kurir');
        $data->kota = $request->input('kota');
        $data->Kecamatan = $request->input('kecamatan');
        $data->kode_pos = $request->input('kode_pos');
        $data->no_tlp = $request->input('no_tlp');
        $data->email = $request->input('email');
        $data->barang = $request->input('barang');
        $data->status = $request->input('status');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    
    public function delete($id){
        $data = TransaksiModel::where('id',$id)->first();
        $data->delete();
    
        return response('Berhasil Menghapus Data');
    }
}
