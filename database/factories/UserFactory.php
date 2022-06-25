<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User\User::class, function (Faker $faker) {

    $random = rand(38,99);
    $depth = $faker->randomElement(['CSE', 'EEE', 'BUA', 'LAW']);
    $year = $faker->randomElement(['2017', '2018', '2019']);
    $stId = '151'.(string)rand(1,9).(string)rand(1,9).(string)rand(1,9).(string)rand(1,9).(string)rand(1,9).(string)rand(1,9).(string)rand(1,9);


    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'uniStudentId' => $stId,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$xoolJUZ5CpgPspAjnQt//ufafJocUEkm2BVMee0e6bhV.1yekkiea', // secret
        'department' => $depth,
        'university_batch' => (string)$random,
        'graduation_year' => $year,

        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Message\Message::class, function (Faker $faker) {
    do{
        $from = rand(1, 30);
        $to = rand(1, 30);
    }while($from === $to);

    return [
        'from' => $from,
        'to' => $to,
        'text' => $faker->sentence,
    ];
});


$factory->define(App\Models\Post\Post::class, function (Faker $faker) {

    $user_id = rand(1, 30);
    $cat_id = rand(1,10);

    return [
        'user_id' => $user_id,
        'cat_id' => $cat_id,
        'title' => $faker->sentence,
        'body' => $faker->sentence,
    ];
});