<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'class_id';

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
        'class_id',
        'module_id',
        'module_name',
        'course_id',
        'course_year',
        'course_group',
        'lecturer_name',
        'day_of_week',
        'start_time',
        'end_time',
        'room_name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' =>'string',
        'module_id' => 'string',
        'module_name' => 'string',
        'course_id' => 'string',
        'course_year' => 'string',
        'course_group' => 'string',
        'lecturer_name' => 'string',
        'day_of_week' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'room_name' => 'string',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static $rules = [
        'module' => 'required',
        'lecturer' => 'required',
        'week_day' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'venue' => 'required',
    ];
}
