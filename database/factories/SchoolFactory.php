<?php

use Faker\Generator as Faker;
use App\Models\School;

$factory->define(School::class, function (Faker $faker) {
    return [
        'schoolCode' => '',
        'name'                          => $faker->unique()->word,
        'city'                          => $faker->unique()->word,
        'regionalEducationManagement'   => 1,
        'dailyJourney'                  => 'Integral',
        'elementarySchool'              => 'NÃO',
        'highSchool'                    => 'SIM',
        'decree'                        => $faker->sentence(),
        'decree_observation'            => null,
        'fundationYear'                 => '2018',
        'transitionYear'                => '2018'
    ];
});
