<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Authenticatable
{
    protected $guarded = 'id';
    protected $table = 'siswa';


    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function normalisasi()
    {
        return $this->belongsTo(Normalisasi::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function datanilai()
    {
        return $this->belongsTo(DataNilai::class);
    }
    public function datanilaii()
    {
        return $this->hasMany(DataNilai::class);
    }

}