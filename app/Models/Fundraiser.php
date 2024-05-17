<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraiser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fundraising()
    {
        return $this->hasMany(Fundraising::class);
    }

    public function fundraising_withdrawals()
    {
        return $this->hasMany(Fundraising_withdrawals::class);
    }

}
