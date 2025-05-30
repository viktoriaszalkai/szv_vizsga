<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    /** @use HasFactory<\Database\Factories\TemaFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable=[
        'temanev'
    ];

    public function tema(){
        return $this->hasMany(szavak::class,'temaId','id');
    }
}
