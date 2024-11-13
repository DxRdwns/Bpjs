<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKriteriaModel extends Model
{
    //
    protected  $table  = 'subkriteria';
    protected $primaryKey ='id';
    protected $fillable = ['id','nama_subkriteria','nilai_subkriteria','id_kategori'];
    public $timestamps = false;

     // Relasi ke PekerjaanModel
    public function pekerjaan()
    {
        return $this->hasMany(PekerjaanModel::class, 'id_kategori', 'id');
    }

}