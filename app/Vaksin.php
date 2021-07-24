<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    //
    protected $table = ['id', 'jenis', 'dosis', 'gambar', 'stok', 'deksripsi'];
}
