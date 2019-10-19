<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kategori extends Model
{
    Use SoftDeletes;

    protected $table = "kategori";
    //protected $fillable = ['kategori_adi', 'slug'];
    protected  $guarded = [];
    const CREATED_AT = 'olusturulmaTarihi';
    const UPDATED_AT =  'guncellemeTarihi';
   // const DELETED_AT = 'silinmeTarihi';
}
