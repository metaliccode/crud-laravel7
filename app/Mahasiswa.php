<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //membuat aturan nama tabel sendiri -> mahasiswas X
    protected $table = 'mahasiswa';
}
