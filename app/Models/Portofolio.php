<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    /** @use HasFactory<\Database\Factories\PortofolioFactory> */
    use HasFactory;

    protected $fillable=[
        'name',
        'url',
        'description',
        'service_detail_id',
        'client_id',
        'mitra_id',
    ];

    public function serviceDetail(){
        return $this->belongsTo(serviceDetail::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function mitra(){
        return $this->belongsTo(Mitra::class);
    }
}
