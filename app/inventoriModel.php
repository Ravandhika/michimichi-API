<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMahasiswa extends Model
{
    protected $table = 'inventory';
    protected $fillable = ['barang',
                          'deskripsi_barang',
                          'tipe',
                          'gender',
                          'harga',
                          'gambar',];
}