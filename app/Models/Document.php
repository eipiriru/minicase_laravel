<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'mime',
        'pegawai_id',
    ];

    public function pegawai(){
    	return $this->belongsTo('App\Models\Pegawai');
    }
}
