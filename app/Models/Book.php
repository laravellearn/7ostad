<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    
    protected $fillable = ['name','status','color','group_id'];

    public function lessongroup()
    {
        return $this->belongsTo(Lessongroup::class,'group_id');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
