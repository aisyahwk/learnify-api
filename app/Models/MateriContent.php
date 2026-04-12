<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriContent extends Model
{
    protected $fillable = ['sub_materi_id', 'isi', 'contoh_code'];

    public function subMateri(){
        return $this->belongsTo(SubMateri::class, 'sub_materi_id');
    }
}
