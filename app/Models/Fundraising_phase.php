<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraising_phase extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fundraising()
    {
        return $this->belongsTo(Fundraising::class);
    }

}
