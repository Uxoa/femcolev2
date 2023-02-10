<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $name
 * @property $grades_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Grade $grade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'name' => 'required',
		'grades_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','academicYear','quarter','grades_id','exam1','exam2','exam3'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grade()
    {
        return $this->hasOne('App\Models\Grade', 'id', 'grades_id');
    }
    

}
