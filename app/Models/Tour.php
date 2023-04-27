<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $fillable =[
        'nama',
        'detail',
        'harga',
        'jumlahorang',
        'diskon',
        'hargatotal',
        'jumlah_hari',
        'image'

    ];
    
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}