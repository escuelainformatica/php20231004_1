<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    use HasFactory;
    public $table="Album";
    public $primaryKey="AlbumId";
    public $fillable=["Title","ArtistId"];
    public $timestamps=false;

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class,'ArtistId','ArtistId');
    }
}
