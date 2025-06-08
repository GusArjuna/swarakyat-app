<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceDetailFactory> */
    use HasFactory;

    protected $fillable=[
        'name',
        'url',
        'price',
        'description',
        'service_id',
    ];

    public function service(){
        return $this->belongsTo(service::class);
    }
}
