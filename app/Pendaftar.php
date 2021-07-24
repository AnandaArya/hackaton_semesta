<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    //
    protected $table = 'pendaftars';
    protected $fillable = ['nama', 'tgl_lahir', 'alamat', 'gambar', 'nik', 'no_hp', 'pekerjaan', 'tgl_vaksin', 'id_vaksin', 'status'];

}
