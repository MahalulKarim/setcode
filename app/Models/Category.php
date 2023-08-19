<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Category extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'icon',
        'name',
    ];
    public function tutorial()
    {
        return $this->hasOne(Tutorial::class,'category_id');
    }

}
