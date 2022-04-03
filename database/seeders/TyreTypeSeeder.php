<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TyreType;

class TyreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Summer',
            'Winter',
            'All-Season'            
        ];

        for ($item=0; $item < count($types); $item++) {
            foreach ($types as $type) {
                $type = new TyreType;
                $type->name = $types[$item];
                $type->save();
                $item+=1;
            }
        }
    }
}
