<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyClothing;

class MyClothingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clothes = [
            [
                'brand' => 'Nike',
                'color' => 'black',
                'details' => 'rib knit trimming at collar and arm opening sleeveless',
            ],
            [
                'brand' => 'Adidas',
                'color' => 'blue',
                'details' => 'breathable mesh outer with lining inside',
            ],
            [
                'brand' => 'Drew',
                'color' => 'white',
                'details' => 'fits true to size with a drop shoulder',
            ],
            [
                'brand' => 'Shein',
                'color' => 'gray',
                'details' => 'rib cuff and waistband',
            ],
            ];
            foreach($clothes as $m){
                MyClothing::create($m);
            }
    }
}
