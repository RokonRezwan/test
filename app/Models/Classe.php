<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
    ];


    public function student()
    {
        return $this->belongsTo(Student::class, 'class');
    }
    
}
