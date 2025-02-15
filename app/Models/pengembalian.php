<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengembalian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pengembalians';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'pinjam_id', 'tgl_kembali', 'denda'];

    public function pinjam(): BelongsTo
    {
        return $this->belongsTo(pinjam::class);
    }
}
