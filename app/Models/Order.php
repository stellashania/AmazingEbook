<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['account_id', 'ebook_id', 'order_date'];

    public function ebooks()
    {
        return $this->belongsTo(Ebook::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
