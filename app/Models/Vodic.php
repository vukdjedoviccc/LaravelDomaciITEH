<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agencija;
use App\Models\Putovanje;

class Vodic extends Model
{
    use HasFactory;

    public function agencija()
    {
        return $this->belongsTo(Agencija::class);
    }

    public function putovanja()
    {
        return $this->hasMany(Putovanje::class);
    }
}
