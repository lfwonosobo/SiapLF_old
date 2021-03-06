<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model {

  /*
    protected $table = 'tbl_jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = array('nama_jurusan', 'tahun_ajaran');
    public $timestamps = false;

    public function siswa() {
        return $this->hasMany('App\Models\Siswa');
    }

    public function absensi() {
        return $this->hasMany('App\Models\Absensi');
    }

    public function scopeDropdownjurusan($query) {
        $data = array();
        $eselon = $query->select(array('id_jurusan', 'nama_jurusan'))->get();
        if (count($eselon) > 0) {
            foreach ($eselon as $ese) {
                $data[] = array('id' => $ese->id_jurusan, 'label' => $ese->nama_jurusan);
            }
        }
        return $data;
    }
*/
    protected $table = 'tbl_jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = array('jurusan', 'tahun_ajaran');
    public $timestamps = false;

    public function siswa() {
        return $this->hasMany('App\Models\Siswa');
    }


    public function scopeDropdownJurusan($query) {
        $data = array();
        $eselon = $query->select(array('id_jurusan', 'jurusan'))->get();
        if (count($eselon) > 0) {
            foreach ($eselon as $ese) {
                $data[] = array('id' => $ese->id_jurusan, 'label' => $ese->jurusan);
            }
        }
        return $data;
    }
}
