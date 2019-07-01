<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'schoolCode',
        'name',
        'city',
        'regionalEducationManagement',
        'dailyJourney',
        'elementarySchool',
        'highSchool',
        'decree',
        'decree_observation',
        'fundationYear',
        'transitionYear'
        ];

    public function getResults($name = null){
        if(!$name)
            return $this->get();

        return $this->where('name', 'LIKE', "%{$name}%")->get();
    }
}
