<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'description'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
