<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    /** @use HasFactory<\Database\Factories\SzavakFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable=[
        'angol',
        'magyar',
        'temaId'
    ];

    public function szavak(){
        return $this->belongsTo(tema::class,'id','temaId');
    }
}
