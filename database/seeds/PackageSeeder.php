<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $package = new Package;
            $package->name = $faker->sentence(3);
            $package->description = $faker->paragraph();
            $package->destination = $faker->country();
            $package->price = $faker->numberBetween(1000, 3500);
            $package->image_url = $faker->imageUrl(640, 480, 'packages', true,'travel_packages', true);
            $package->save();
        }
    }
}
