<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
    protected $table = 'sub_materis';

    protected $fillable = [
        'materi_id',
        'judul',
        'ringkasan'
    ];

    public function content()
    {
        return $this->hasOne(MateriContent::class, 'sub_materi_id');
    }
}
