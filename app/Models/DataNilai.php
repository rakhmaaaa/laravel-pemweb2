<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    protected $guarded = 'id';
    protected $table = 'datanilai';
    protected $fillable = ['siswa_id','nilai_rapot', 'nilai_hadir', 'ekstrakulikuler', 'organisasi', 'tingkah_laku'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    public function datanilai()
    {
        return $this->hasMany(DataNilai::class);
    }
}
