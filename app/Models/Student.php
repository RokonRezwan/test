<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'class',
        'class_roll',
        'details',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id');
    }
}
