<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtarget extends Model
{
    use HasFactory;
    protected $fillable = ['book_id','target_id','topic_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function target()
    {
        return $this->belongsTo(Target::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
