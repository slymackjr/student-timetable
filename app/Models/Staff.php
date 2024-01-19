<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Staff extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'staff';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'email';

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

    protected $fillable = [
        'name',
        'staff_id',
        'job_title',
        'staff_department',
        'staff_faculty',
        'gender',
        'email',
        'password',
    ];

    protected $casts = [
        'id' => 'int',
        'staff_id' => 'string',
        'job_title' => 'string',
        'staff_department' => 'string',
        'staff_faculty' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'password' => 'string',
    ];

    public $timestamps = false;

    public static $rules = [
        'name' => 'required',
        'staff_id' => 'required|unique:staff,staff_id',
        'email' => 'required|email|unique:staff,email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'gender' => 'required',
        'staff_department' => 'required',
        'staff_faculty' => 'required',
        'job_title' => 'required',
        // Add more rules as needed
    ];
}
