<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;
use App\Models\Satuan;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
$factory->define(Barang::class, function (Faker $faker) {
    return [
        'kode_barang' => $faker->unique()->randomNumber(5),
        'nama_barang' => $faker->word,
        'harga_barang' => $faker->randomFloat(2, 1000, 10000),
        'deskripsi_barang' => $faker->sentence,
        'satuan_id' => Satuan::inRandomOrder()->first()->id,
    ];
});
