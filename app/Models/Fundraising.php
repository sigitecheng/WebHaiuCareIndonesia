<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraising extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fundraiser()
    {
        return $this->belongsTo(Fundraiser::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function donatur()
    {
        return $this->belongsTo(Donatur::class);
    }

    public function fundraiising_phase()
    {
        return $this->hasMany(Fundraising_phase::class);
    }
}
