<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habitat;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitat::create([
            'img_path' => 'tundra',
            'bg_img' => 'tundra-bg',
            'name' => 'Tundra',
            'desc' => 'Tundra is the part of the polar habitat that is on land and not covered in ice, found mostly in the
            north. The tundra looks snowy and lifeless in winter, but in the summer months the snow melts and
            reveals grassy meadows and small quick growing shrubs. The growing season is too short for trees.
            Reindeer and wolves are just two of the animals that call the tundra home.',
            'animals' => 'Arctic foxes, Polar bears, Gray wolves, Caribou, Snow geese and so many other'
        ]);

        Habitat::create([
            'img_path' => 'polar',
            'bg_img' => 'polar-bg',
            'name' => 'Polar',
            'desc' => 'Polar habitats are extremely cold. Forming at the highest latitudes on Earth, they receive
            very little energy from the sun in the summer and virtually none in the winter. The main
            difference between the North and South Pole is the presence of land and water. The South
            Pole is land surrounded by sea; the North Pole is a sea surrounded by land.',
            'animals' => 'Penguins, Leopard seals, Whales, and so many other'
        ]);

        Habitat::create([
            'img_path' => 'grassland',
            'bg_img' => 'grassland-bg',
            'name' => 'Grassland',
            'desc' => 'Grassland grow under conditions that are warm enough to support plant life
            but too dry for trees, and not so dry that a desert forms. The important parts of
            the grass plants are below the soil surface which protects all but the grass stems
            from excessive conditions of heat, cold or dryness.',
            'animals' => 'Tanzania, Kenya, Maryland, Caribou, Zebra, Cheetahs, Lions and so many other'
        ]);

        Habitat::create([
            'img_path' => 'deserts',
            'bg_img' => 'deserts-bg',
            'name' => 'Deserts',
            'desc' => 'Deserts form in the driest places on Earth. Although many of them are hot like the
            Sahara or the Atacama they don’t have to be. Cold dry places are also deserts such as
            the Gobi desert in western China and Antarctica. Water is absolutely essential to life as
            we know it. The plants and animals that survive in these places need to be able to get
            by on minimal quantities of liquid water.',
            'animals' => ' Lizards, Geckos, Toads, Jackrabbits, Camels, Snakes, Spiders, Meerkats, and so many other'
        ]);

        Habitat::create([
            'img_path' => 'tropical-rainforest',
            'bg_img' => 'tropical-rainforest-bg',
            'name' => 'Tropical Rainforest',
            'desc' => 'Tropical Rainforest have the perfect conditions to support plants on land – they are warm, bright, and wet.
            They form near the equator where sunlight is most plentiful on Earth and only in places that receive regular,
            almost daily rains. The largest continuous rainforest is the Amazon in South America. The Congo rainforest in subSaharan Africa is also quite large. There are rainforests on the islands in the Indo-Pacific such as Borneo, New Guinea and Indonesia.',
            'animals' => 'Jaguars, Ocelots, Kinkajous, Lemurs, Agouti and so many other'
        ]);
    }
}
