<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'examinations';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'exam_id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_id',
        'course_id',
        'exam_date',
        'day_of_week',
        'start_time',
        'end_time',
        'exam_location',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'exam_id' => 'string',
        'course_id' => 'integer',
        'exam_date' => 'string',
        'day_of_week' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'exam_location' => 'string',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
