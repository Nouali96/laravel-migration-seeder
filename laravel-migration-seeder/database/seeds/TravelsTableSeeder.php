<?php

use App\Travel;
use App\travels;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new travels();

        $travel->name = 'Viaggio per Barcellona';
        $travel->description = 'sdfsfdsfsdfsdfsdfsdfsdfsddfsfsfdfsdfsdfsfsdfsfsfdsfsdfsddffsdfsdfsdfsf';
        $travel->price = 500;
        $travel->departure = 'Bergamo, Napoli, Milano';
        $travel->where = 'Barcellona';
        $travel->when = '2022-08-10 12:00:00';
        $travel->duration = '3 notti';
        $travel->promotion = 20.00;

        $travel->save();
    }
}
