<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fundraising_phase extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function fundraising()
    {
        return $this->belongsTo(Fundraising::class);
    }

}
