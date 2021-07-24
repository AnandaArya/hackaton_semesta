<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    //
    protected $table = 'vaksins';
    protected $fillable = ['id', 'jenis', 'dosis', 'gambar', 'stok', 'deksripsi'];
}
