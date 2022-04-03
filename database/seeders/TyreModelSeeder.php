<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TyreModel;

class TyreModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = [
            'Avon',
            'Bridgestone',
            'Continental',
            'Cooper',
            'Dunlop',
            'Firestone',
            'Goodyear',
            'Hankook',
            'Michelin',
            'Pirelli',
            'Uniroyal',
            'Yokohama',
            'BFGoodrich',
            'Crossleader',
            'Fulda',
            'Kelly',
            'Kumho',
            'Marshal',
            'Nankang',
            'Rotalla',
            'Toyo',
            'Vredestein',
            'Alliance',
            'Anchee',
            'Annaite',
            'Antares',
            'Aoteli',
            'Aplus',
            'Aptany',
            'Arivo',
            'Atlas',
            'Austone',
            'Autogreen',
            'Barum',
            'Boto',
            'Cavallis',
            'Centara',
            'Charmhoo',
            'CityStar',
            'Comforser',
            'Compasal',
            'Compass',
            'Debica',
            'Delinte',
            'Delmax',
            'Doublestar',
            'Durable',
            'Durun',
            'Ecovision',
            'Eternity',
            'Farroad',
            'Firemax',
            'Fortuna',
            'Freetour',
            'Fronway',
            'Fulda',
            'Fullrun',
            'Goalstar',
            'Goform',
            'Goldshield',
            'Goldway',
            'Goodride',
            'Gopro',
            'Gowind',
            'Gremax',
            'Grenlander',
            'Habilead',
            'Haida',
            'Headway',
            'Hifly',
            'Hilo',
            'Horizon',
            'I-Link',
            'Ilink',
            'Imperial',
            'Infinity',
            'Invovic',
            'Journey',
            'Joyroad',
            'Keter',
            'Lanvigator',
            'Laufenn',
            'Linglong',
            'Luistone',
            'Luxxan',
            'Massimo',
            'Maxtrek',
            'Minerva',
            'Minnell',
            'Nereus',
            'Nordexx',
            'Opals',
            'Ovation',
            'Petlas',
            'Powertrac',
            'Premiorri',
            'Rapid',
            'Roadclaw',
            'Roadcruza',
            'Roadking',
            'Roadmarch',
            'Rockblade',
            'Routeway',
            'Rydanz',
            'Saetta',
            'Saferich',
            'Sailun',
            'Sailwin',
            'Sava',
            'Sportiva',
            'Sunny',
            'Superia',
            'Three',
            'Tomason',
            'Torque',
            'Tigar',
            'Tracmax',
            'Trazano',
            'Triangle',
            'Tristar',
            'TyreSavings',
            'Vinmax',
            'Wanli',
            'Westlake',
            'Wideway',
            'Winrun',
            'Yatone',
            'Zmax'
        ];

        for ($item=0; $item < count($models); $item++) {
            foreach ($models as $model) {
                $model = new TyreModel;
                $model->name = $models[$item];
                $model->save();
                $item+=1;
            }
        }
    }
}
