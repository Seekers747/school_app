<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description',
        'teacher_id',
    ];
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
