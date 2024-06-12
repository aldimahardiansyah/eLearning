<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'nim',
        'major',
        'class',
        'course_id'
    ];

    /**
     * Laravel relationship:
     * 1. One to One:
     *  - hasOne()       = digunakan pada tabel yang menitipkan id
     *  - belongsTo()    = digunakan pada tabel yang memiliki id dari tabel lain
     * 2. One to Many:
     * - hasMany()       = digunakan pada tabel yang menitipkan id
     * - belongsToMany() = digunakan pada tabel yang memiliki id dari tabel lain
     */

    // relasi ke model Course (1 student memiliki 1 course / 1 to 1)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
