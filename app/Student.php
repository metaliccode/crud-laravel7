<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    //yang boleh diisi 
    protected $fillable = ['nama', 'photo', 'nip', 'email', 'jurusan'];
    // yang tidak boleh diisi
    // protected $guarded = 'id';

    public function getPhotoAttribute($value)
    {
        // return url('storage/' . $value);
        return url('uploads/' . $value);
    }
}
