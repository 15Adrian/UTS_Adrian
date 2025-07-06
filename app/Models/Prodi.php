<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['nama', 'fakultas'];
    
    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
