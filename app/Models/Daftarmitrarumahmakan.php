<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Daftarmitrarumahmakan extends Model
{
    // use HasFactory;
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function lokasimakangratis()
    {
        return $this->hasMany(Lokasimakangratis::class);
    }
}
