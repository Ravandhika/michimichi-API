<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoriModel extends Model
{
    protected $table = 'inventori';
    protected $fillable = ['barang',
                          'deskripsi_barang',
                          'tipe',
                          'gender',
                          'harga',
                          'gambar',];
}