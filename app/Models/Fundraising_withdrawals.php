<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraising_withdrawals extends Model
{
    use HasFactory;

    public function fundraising()
    {
        return $this->belongsTo(Fundraising::class);
    }

    public function fundraiser()
    {
        return $this->belongsTo(Fundraiser::class);
    }

}
