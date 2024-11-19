<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaModel extends Model
{
    //
     protected  $table  = 'peserta';
    protected $primaryKey ='id';
    protected $fillable = ['id','nama_peserta', 'id_bpjs','email','phone','addres','C1','C2','C3','C4','C5','hasil','quality'];
    public $timestamps = false;

     // Relasi ke PekerjaanModel
    public function pekerjaan()
    {
        return $this->hasMany(PekerjaanModel::class, 'id_peserta', 'id');
    }
}