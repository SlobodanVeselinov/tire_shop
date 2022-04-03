<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TyreSize;

class TyreSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sizes = [
            '145/70R13',
            '155/65R13',
            '155/70R13',
            '155/80R13',
            '165/65R13',
            '165/70R13',
            '165/75R13',
            '165/80R13',
            '175/17R13',
            '175/60R13',
            '175/65R13',
            '175/70R13',
            '175/75R13',
            '185/60R13',
            '185/65R13',
            '185/70R13',
            '205/60R13',
            '155/55R14',
            '155/65R14',
            '155/70R14',
            '165/55R14',
            '165/60R14',
            '165/65R14',
            '165/70R14',
            '175/60R14',
            '175/65R14',
            '175/70R14',
            '175/75R14',
            '175/80R14',
            '185/10R14',
            '185/55R14',
            '185/60R14',
            '185/65R14',
            '185/70R14',
            '185/75R14',
            '185/80R14',
            '195/45R14',
            '195/60R14',
            '195/65R14',
            '195/70R14',
            '195/75R14',
            '195/80R14',
            '205/12.5R14',
            '205/60R14',
            '205/70R14',
            '205/75R14',
            '215/70R14',
            '215/75R14',
            '225/60R14',
            '235/60R14',
            '245/50R14',
            '245/60R14',
            '125/80R15',
            '145/65R15',
            '155/60R15',
            '165/50R15',
            '165/60R15',
            '165/65R15',
            '175/50R15',
            '175/55R15',
            '175/60R15',
            '175/65R15',
            '175/80R15',
            '185/0R15',
            '185/55R15',
            '185/60R15',
            '185/65R15',
            '185/70R15',
            '195/45R15',
            '195/50R15',
            '195/55R15',
            '195/60R15',
            '195/65R15',
            '195/70R15',
            '195/75R15',
            '195/80R15',
            '195/82R15',
            '195/85R15',
            '205/50R15',
            '205/55R15',
            '205/60R15',
            '205/65R15',
            '205/70R15',
            '205/75R15',
            '215/0R15',
            '215/60R15',
            '215/65R15',
            '215/70R15',
            '215/75R15',
            '215/80R15',
            '225/45R15',
            '225/50R15',
            '225/60R15',
            '225/70R15',
            '225/75R15',
            '235/60R15',
            '235/70R15',
            '235/75R15',
            '245/60R15',
            '255/60R15',
            '255/70R15',
            '265/50R15',
            '265/70R15',
            '265/75R15',
            '275/60R15',
            '295/50R15',
            '115/70R16',
            '125/80R16',
            '125/85R16',
            '125/90R16',
            '135/90R16',
            '145/90R16',
            '175/55R16',
            '175/60R16',
            '175/75R16',
            '175/80R16',
            '185/50R16',
            '185/55R16',
            '185/60R16',
            '185/75R16',
            '185/85R16',
            '195/40R16',
            '195/45R16',
            '195/50R16',
            '195/55R16',
            '195/60R16',
            '195/65R16',
            '195/75R16',
            '195/85R16',
            '205/10R16',
            '205/20R16',
            '205/40R16',
            '205/45R16',
            '205/50R16',
            '205/55R16',
            '205/60R16',
            '205/65R16',
            '205/70R16',
            '205/75R16',
            '205/80R16',
            '205/85R16',
            '215/35R16',
            '215/40R16',
            '215/45R16',
            '215/50R16',
            '215/55R16',
            '215/60R16',
            '215/65R16',
            '215/70R16',
            '215/75R16',
            '215/80R16',
            '215/85R16',
            '225/40R16',
            '225/45R16',
            '225/50R16',
            '225/55R16',
            '225/60R16',
            '225/65R16',
            '225/70R16',
            '225/75R16',
            '225/95R16',
            '235/60R16',
            '235/65R16',
            '235/70R16',
            '235/75R16',
            '235/85R16',
            '245/45R16',
            '245/50R16',
            '245/70R16',
            '245/75R16',
            '255/55R16',
            '255/65R16',
            '255/70R16',
            '255/85R16',
            '265/70R16',
            '265/75R16',
            '275/60R16',
            '275/70R16',
            '285/65R16',
            '285/75R16',
            '295/75R16',
            '305/70R16',
            '315/75R16',
            '125/70R17',
            '135/80R17',
            '135/90R17',
            '155/70R17',
            '155/90R17',
            '165/40R17',
            '165/70R17',
            '165/80R17',
            '165/90R17',
            '185/80R17',
            '195/40R17',
            '195/45R17',
            '205/40R17',
            '205/45R17',
            '205/50R17',
            '205/55R17',
            '205/70R17',
            '215/35R17',
            '215/40R17',
            '215/45R17',
            '215/50R17',
            '215/55R17',
            '215/60R17',
            '215/65R17',
            '215/70R17',
            '225/35R17',
            '225/45R17',
            '225/50R17',
            '225/55R17',
            '225/60R17',
            '225/65R17',
            '225/70R17',
            '225/90R17',
            '235/40R17',
            '235/45R17',
            '235/50R17',
            '235/55R17',
            '235/60R17',
            '235/65R17',
            '235/70R17',
            '235/75R17',
            '235/80R17',
            '245/35R17',
            '245/40R17',
            '245/45R17',
            '245/50R17',
            '245/55R17',
            '245/65R17',
            '245/70R17',
            '245/75R17',
            '255/40R17',
            '255/45R17',
            '255/55R17',
            '255/60R17',
            '255/65R17',
            '255/70R17',
            '255/75R17',
            '265/40R17',
            '265/60R17',
            '265/65R17',
            '265/70R17',
            '275/35R17',
            '275/40R17',
'            275/50R17',
            '275/55R17',
            '275/60R17',
            '275/65R17',
            '275/70R17',
            '285/35R17',
            '285/40R17',
            '285/60R17',
            '285/65R17',
            '285/70R17',
            '285/75R17',
            '295/70R17',
            '305/65R17',
            '305/70R17',
            '315/35R17',
            '315/70R17',
            '335/35R17',
            '125/60R18',
            '125/70R18',
            '135/80R18',
            '145/45R18',
            '155/85R18',
            '155/90R18',
            '195/60R18',
            '205/40R18',
            '205/45R18',
            '215/35R18',
            '215/40R18',
            '215/45R18',
            '215/50R18',
            '215/55R18',
            '225/35R18',
            '225/40R18',
            '225/45R18',
            '225/50R18',
            '225/55R18',
            '225/60R18',
            '225/65R18',
            '235/35R18',
            '235/40R18',
            '235/45R18',
            '235/50R18',
            '235/55R18',
            '235/60R18',
            '235/65R18',
            '245/35R18',
            '245/40R18',
            '245/45R18',
            '245/50R18',
            '245/60R18',
            '245/65R18',
            '255/30R18',
            '255/35R18',
            '255/40R18',
            '255/45R18',
            '255/55R18',
            '255/60R18',
            '255/65R18',
            '255/70R18',
            '265/35R18',
            '265/40R18',
            '265/45R18',
            '265/60R18',
            '265/65R18',
            '265/70R18',
            '275/35R18',
            '275/40R18',
            '275/45R18',
            '275/60R18',
            '275/65R18',
            '275/70R18',
            '285/30R18',
            '285/35R18',
            '285/40R18',
            '285/50R18',
            '285/55R18',
            '285/60R18',
            '285/65R18',
            '285/70R18',
            '285/75R18',
            '295/30R18',
            '295/35R18',
            '295/45R18',
            '295/65R18',
            '295/70R18',
            '305/30R18',
            '305/60R18',
            '305/65R18',
            '305/70R18',
            '315/30R18',
            '325/65R18',
            '33/12.5R18',
            '33/125R18',
            '335/30R18',
            '35/12.5R18',
            '37/12.5R18',
            '37/13.5R18',
            '38/15.5R18',
            '125/70R19',
            '135/70R19',
            '145/80R19',
            '155/70R19',
            '155/80R19',
            '175/60R19',
            '175/80R19',
            '205/55R19',
            '215/35R19',
            '225/35R19',
            '225/40R19',
            '225/45R19',
            '225/55R19',
            '235/30R19',
            '235/35R19',
            '235/40R19',
            '235/45R19',
            '235/50R19',
            '235/55R19',
            '235/65R19',
            '245/30R19',
            '245/35R19',
            '245/40R19',
            '245/45R19',
            '245/50R19',
            '245/55R19',
            '255/30R19',
            '255/35R19',
            '255/40R19',
            '255/45R19',
            '255/50R19',
            '255/55R19',
            '255/60R19',
            '255/65R19',
            '265/30R19',
            '265/35R19',
            '265/40R19',
            '265/45R19',
            '265/50R19',
            '265/55R19',
            '275/30R19',
            '275/35R19',
            '275/40R19',
            '275/45R19',
            '275/50R19',
            '275/55R19',
            '285/30R19',
            '285/35R19',
            '285/40R19',
            '285/45R19',
            '295/25R19',
            '295/30R19',
            '295/35R19',
            '295/40R19',
            '295/45R19',
            '305/30R19',
            '305/35R19',
            '315/25R19',
            '315/30R19',
            '325/30R19',
            '345/30R19',
            '355/30R19',
            '145/60R20',
            '155/60R20',
            '175/55R20',
            '195/50R20',
            '215/45R20',
            '225/30R20',
            '225/35R20',
            '225/40R20',
            '235/30R20',
            '235/35R20',
            '235/40R20',
            '235/45R20',
            '235/50R20',
            '235/55R20',
            '245/30R20',
            '245/35R20',
            '245/40R20',
            '245/45R20',
            '245/50R20',
            '255/30R20',
            '255/35R20',
            '255/40R20',
            '255/45R20',
            '255/50R20',
            '255/55R20',
            '255/60R20',
            '265/30R20',
            '265/35R20',
            '265/40R20',
            '265/45R20',
            '265/50R20',
            '265/60R20',
            '275/30R20',
            '275/35R20',
            '275/40R20',
            '275/45R20',
            '275/50R20',
            '275/55R20',
            '275/60R20',
            '275/65R20',
            '285/25R20',
            '285/30R20',
            '285/35R20',
            '285/40R20',
            '285/45R20',
            '285/50R20',
            '285/55R20',
            '285/60R20',
            '285/65R20',
            '295/25R20',
            '295/30R20',
            '295/35R20',
            '295/40R20',
            '295/45R20',
            '295/55R20',
            '295/60R20',
            '295/65R20',
            '305/25R20',
            '305/30R20',
            '305/35R20',
            '305/40R20',
            '305/45R20',
            '305/50R20',
            '305/55R20',
            '315/30R20',
            '315/35R20',
            '325/25R20',
            '325/30R20',
            '325/35R20',
            '325/60R20',
            '33/12.5R20',
            '33/125R20',
            '335/25R20',
            '335/30R20',
            '345/30R20',
            '35/12.5R20',
            '35/13.5R20',
            '37/12.5R20',
            '37/13.5R20',
            '225/30R21',
            '235/45R21',
            '245/30R21',
            '245/35R21',
            '245/40R21',
            '245/45R21',
            '255/30R21',
            '255/35R21',
            '255/40R21',
            '255/50R21',
            '265/30R21',
            '265/35R21',
            '265/40R21',
            '265/45R21',
            '275/30R21',
            '275/35R21',
            '275/40R21',
            '275/45R21',
            '275/50R21',
            '285/30R21',
            '285/35R21',
            '285/40R21',
            '285/45R21',
            '295/25R21',
            '295/30R21',
            '295/35R21',
            '295/40R21',
            '305/25R21',
            '305/30R21',
            '305/35R21',
            '315/30R21',
            '315/35R21',
            '315/40R21',
            '325/25R21',
            '325/30R21',
            '355/25R21',
            '11/11R22',
            '225/30R22',
            '235/30R22',
            '245/30R22',
            '255/30R22',
            '255/35R22',
            '255/40R22',
            '265/30R22',
            '265/35R22',
            '265/40R22',
            '275/25R22',
            '275/35R22',
            '275/40R22',
            '275/45R22',
            '275/50R22',
            '285/25R22',
            '285/30R22',
            '285/35R22',
            '285/40R22',
            '285/45R22',
            '295/25R22',
            '295/30R22',
            '295/35R22',
            '295/40R22',
            '295/80R22',
            '305/30R22',
            '305/35R22',
            '305/40R22',
            '305/45R22',
            '315/25R22',
            '315/30R22',
            '315/35R22',
            '315/80R22',
            '325/35R22',
            '325/40R22',
            '325/50R22',
            '325/55R22',
            '33/12.5R22',
            '335/25R22',
            '35/12.5R22',
            '37/13.5R22',
            '385/65R22',
            '425/65R22',
            '148/14R22.5',
            '255/70R22.5',
            '275/70R22.5',
            '275/80R22.5',
            '295/80R22.5',
            '305/70R22.5',
            '315/70R22.5',
            '315/80R22.5',
            '385/65R22.5',
            '425/65R22.5',
            '275/40R23',
            '285/35R23',
            '285/40R23',
            '295/35R23',
            '305/30R23',
            '305/35R23',
            '315/25R23',
            '325/35R23',
            '245/30R24',
            '255/30R24',
            '275/25R24',
            '275/30R24',
            '285/40R24',
            '295/35R24',
            '295/40R24',
            '305/35R24',
            '325/45R24',
            '345/50R24'
        ];

        for ($item=0; $item < count($sizes); $item++) {
            foreach ($sizes as $size) {
                $size = new TyreSize;
                $size->value = $sizes[$item];
                $size->save();
                $item+=1;
            }
        }
    }
}