<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
	$listPostID = Post::pluck('id');
	$listUserID = User::pluck('id');
    return [
        'content' => $faker->sentence,
        'post_id' => $faker->randomElement($listPostID),
        'user_id' => $faker->randomElement($listUserID)
    ];
});
