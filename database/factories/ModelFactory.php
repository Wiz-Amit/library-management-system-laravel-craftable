<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Book::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->sentence,
        'price' => $faker->randomNumber(5),
        'rack_no' => $faker->sentence,
        'edition' => $faker->sentence,
        'count' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Book::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->sentence,
        'price' => $faker->randomNumber(5),
        'count' => $faker->sentence,
        'rack_no' => $faker->sentence,
        'edition' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Member::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Member::class, static function (Faker\Generator $faker) {
    return [
        'type' => $faker->sentence,
        'name' => $faker->firstName,
        'phone' => $faker->sentence,
        'email' => $faker->email,
        'address_l1' => $faker->sentence,
        'address_l2' => $faker->sentence,
        'expiry' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Transaction::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Transaction::class, static function (Faker\Generator $faker) {
    return [
        'expiry' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Transaction::class, static function (Faker\Generator $faker) {
    return [
        'book_id' => $faker->sentence,
        'members_id' => $faker->sentence,
        'admin_user_id' => $faker->sentence,
        'expiry' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Transaction::class, static function (Faker\Generator $faker) {
    return [
        'book_id' => $faker->sentence,
        'member_id' => $faker->sentence,
        'admin_user_id' => $faker->sentence,
        'expiry' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
