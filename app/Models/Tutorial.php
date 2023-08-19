<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Tutorial extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'desc',
        'image',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
