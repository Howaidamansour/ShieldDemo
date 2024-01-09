<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'content',
        'auther_id'
    ]; 

    protected $casts =[ 
        'name' => 'json',
        'content' =>'json'
    ];

    public function auther () {
        return $this->belongsTO(User::class);
    }
}
