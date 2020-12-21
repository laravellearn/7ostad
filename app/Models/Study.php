<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;
    protected $fillable = ['name','status'];

    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
