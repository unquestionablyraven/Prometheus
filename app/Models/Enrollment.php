<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'course_variant_id',
        'user_id',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var string[]
     */
    protected $with = [
        'student',
    ];

    public function courseVariant()
    {
        return $this->belongsTo(CourseVariant::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
