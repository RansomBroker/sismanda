<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_office'];

    public function office()
    {
        return $this->hasOne(Office::class, 'id', 'id_office');
    }
}
