<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['name','status','book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
