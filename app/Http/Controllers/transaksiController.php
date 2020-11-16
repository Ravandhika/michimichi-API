<?php
namespace App\Http\Controllers;

use App\transaksiModel;
use Illuminate\Http\Request;

class transaksiController extends Controller
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
        $transaksi = transaksiModel::all();
        return response($data);
    }
    public function getbyid($id){
        $transaksi = transaksiModel::where('id',$id)->get();
        return response ($transaksi);
    }
    public function save(Request $request){
        $transaksi = new transaksiModel();
        $transaksi->nama = $request->input('nama');
        $transaksi->alamat = $request->input('alamat');
        $transaksi->kurir = $request->input('kurir');
        $transaksi->kota = $request->input('kota');
        $transaksi->Kecamatan = $request->input('kecamatan');
        $transaksi->kode_pos = $request->input('kode_pos');
        $transaksi->no_tlp = $request->input('no_tlp');
        $transaksi->email = $request->input('email');
        $transaksi->barang = $request->input('barang');
        $transaksi->status = $request->input('status');

        $transaksi->save();
    
        return response('Berhasil Menambah Data');
    }
    public function update(Request $request, $id){
        $transaksi = transaksiModel::where('id',$id)->first();
        $transaksi->nama = $request->input('nama');
        $transaksi->alamat = $request->input('alamat');
        $transaksi->kurir = $request->input('kurir');
        $transaksi->kota = $request->input('kota');
        $transaksi->Kecamatan = $request->input('kecamatan');
        $transaksi->kode_pos = $request->input('kode_pos');
        $transaksi->no_tlp = $request->input('no_tlp');
        $transaksi->email = $request->input('email');
        $transaksi->barang = $request->input('barang');
        $transaksi->status = $request->input('status');
        $transaksi->save();
    
        return response('Berhasil Merubah Data');
    }
    
    public function delete($id){
        $transaksi = transaksiModel::where('id',$id)->first();
        $transaksi->delete();
    
        return response('Berhasil Menghapus Data');
    }
}