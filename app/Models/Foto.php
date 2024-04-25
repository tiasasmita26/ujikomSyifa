<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Foto extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function album()
    {
        return $this->hasMany(Album::class, 'AlbumID', 'AlbumID');
    } 

    protected $table = 'fotos';
    protected $primaryKey = 'FotoID';
    protected $fillable = [
        'JudulFoto',
        'DeskripsiFoto',
        'LokasiFile',
        'AlbumID',
    ]; 
    
    public function foto(): BelongsTo 
    {
        return $this->belongsTo(Album::class, 'AlbumID');
    }
}
