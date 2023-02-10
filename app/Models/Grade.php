<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 *
 * @property $id
 * @property $subject
 * @property $created_at
 * @property $updated_at
 *
 * @property Student[] $students
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grade extends Model
{
    
    static $rules = [
		'subject' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subject'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'grades_id', 'id');
    }
    

}
