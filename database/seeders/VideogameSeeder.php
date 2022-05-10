<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\videogame;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrVideogames = [
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
            [
                "name"          => "Red Dead Redemption",
                "genre"         => "non lo so",
                "year"   => "2020-10-02"
            ],
        ];

        foreach ($arrVideogames as $videogameData) {
            $videogame = new Videogame();
            $videogame->fill($videogameData);
            $videogame->save();  
        }
    }
}
