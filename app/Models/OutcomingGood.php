<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutcomingGood extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'office_id', 'qty', 'outcoming_date', 'note'];

    public function item()
    {
        return $this->hasOne(Item::class, 'id', 'item_id');
    }

    public function office()
    {
        return $this->hasOne(Office::class, 'id', 'office_id');
    }
}
