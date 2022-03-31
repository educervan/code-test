<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            [ 'text' => "BAJA CULTURE IN CONTEMPORARY DESIGN"],
            [ 'text' => "EXPRESSING THE AUTHENTICITY OF CABO DEL SOL"],
            [ 'text' => "Mar a Cielo is Cabo Del Sol newest real estate offering. The architecture, interiors, and landscapes of Mar a Cielo interpret Cabo Del Sol through a modern lens. From the outside in, every residence reflects the warm, luxurious climate and natural beauty of the sun-drenched Baja peninsula. Unlike many Los Cabos properties, Mar a Cielo is not branded. There are no restrictions on owner usage or prescribed property management; homeowners are free to use and rent their homes however they wish"],
            [ 'text' => "COME HOME TO UNFORGETTABLE MOMENTS"],
            [ 'text' => "INTIMATE REAL ESTATE, FULLY-FURNISHED FOR MODERN LIVING"],
            [ 'text' => "Mar a Cielo is a special release of 36 modern homes. The two- and three-bedroom residences feature open floorplans and oversized windows framing views of the ever-changing sea. Generous outdoor spaces invite relaxation, and family gatherings that become lasting memories. Days unfold in harmony with nature. Thoughtful design brings the colors, textures, and traditions of Baja into each and every home."],
        ]);
    }
}
