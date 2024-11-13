<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PekerjaanModel extends Model
{
    //
     protected  $table  = 'pekerjaan';
    protected $primaryKey ='id';
    protected $fillable = ['id','id_peserta', 'C1', 'C2', 'C3','C4','C5',];
    public $timestamps = false;

    // Relasi ke PesertaModel
    public function peserta()
    {
        return $this->belongsTo(PesertaModel::class, 'id_peserta', 'id');
    }

    // Relasi ke SubKriteriaModel
    public function subkriteria()
    {
        return $this->belongsTo(SubKriteriaModel::class, 'id_kategori', 'id');
    }

}