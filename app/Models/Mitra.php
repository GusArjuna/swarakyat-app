<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    /** @use HasFactory<\Database\Factories\MitraFactory> */
    use HasFactory;

    protected $fillable=[
        'name',
        'url',
        'category',
        'join',
    ];

    public function portofolio(){
        return $this->hasMany(portofolio::class);
    }
}
