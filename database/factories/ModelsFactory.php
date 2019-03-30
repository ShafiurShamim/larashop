<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->unique()->word;
    return [
        'name' => $name,
        'slug' => str_slug($name)
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'unit_price' => $faker->numberBetween(100, 1000),
        'quantity_in_stock' => $faker->numberBetween(10, 100),
        'details' => $faker->sentence,
        'description' => $faker->text,
        'category_id' => function () {
            return factory(\App\Category::class)->create()->id;
        },
    ];
});
$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'phone' => $faker->e164PhoneNumber(),
        'address' => $faker->streetAddress(),
        'city' => $faker->city(),
    ];
});

$factory->define(App\Shipper::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'customer_id' => function () {
            return factory(\App\Customer::class)->create()->id;
        },
        'comments' => $faker->sentence(),
        'shipper_id' => function () {
            return factory(\App\Shipper::class)->create()->id;
        },
    ];
});

$factory->define(App\OrderItem::class, function (Faker $faker) {
    $productFactory = factory(\App\Product::class)->create();
    return [
        'order_id' => function () {
            return factory(\App\Order::class)->create()->id;
        },
        'product_id' => $productFactory->id,
        'unit_price' => $productFactory->unit_price,
        'quantity' => $faker->numberBetween(1, 10),
    ];
});
