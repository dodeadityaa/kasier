<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangModel extends Model
{
    protected $table = 'barang';
    protected $fillable = ['*'];
    protected $dates = ['created_at', 'updated_at'];

    public function kategoriModels()
    {
        return $this->belongsTo(kategoriModel::class, 'id_kategori');
    }
}
