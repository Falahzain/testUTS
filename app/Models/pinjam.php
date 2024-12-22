<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class pinjam extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='pinjams';
    protected $primarykey='id';
    protected $fillable= ['id', 'buku_id', 'user_id', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function buku(): BelongsTo 
    {
        return $this->belongsTo(Buku::class);
    }
}
