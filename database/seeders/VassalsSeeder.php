<?php

namespace Database\Seeders;

use App\Models\Vassal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VassalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vassal::create([
            'name' => '酒井忠次',
        ]);
        Vassal::create([
            'name' => '本多忠勝',
        ]);
        Vassal::create([
            'name' => '井伊直政',
        ]);
    }
}
