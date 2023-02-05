<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['*'];
    protected $dates = ['created_at', 'updated_at'];
}
