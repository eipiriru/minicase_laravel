<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "pegawai";
    protected $fillable = [
        'name',
        'alamat',
        'pekerjaan',
        'tgl_lahir',
    ];
    protected $dates = ['deleted_at'];
    
    public function documents(){
    	return $this->hasMany('App\Models\Document');
    }
}
