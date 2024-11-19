<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    //
     protected  $table  = 'kriteria';
    protected $primaryKey ='id';
    protected $fillable = ['id','nama_kriteria','kode_kriteria','nilai_kriteria'];
    public $timestamps = false;


    public function subkriteria()
    {
        return $this->hasMany(SubKriteriaModel::class, 'id_kategori', 'id');
    }
}