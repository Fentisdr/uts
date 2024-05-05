<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Satuan;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satuan = Satuan::factory()->create();

    Barang::factory()->create([
        'satuan_id' => $satuan->id,
    ]);

    Barang::factory(9)->create();
    }
}
