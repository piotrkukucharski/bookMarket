<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
return [
    'id' => $index + 1,
    'name' => $faker->company,
    'url' => $faker->domainName,
];
