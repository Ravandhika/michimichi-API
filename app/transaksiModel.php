<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['nama',
                          'alamat',
                          'kurir',
                          'kota',
                          'kecamatan',
                          'kode_pos',
                          'no_tlp',
                          'email',
                          'barang',
                          'notes',
                          'status'];
}