<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EscapeRooms;
// use Illuminate\Support\Facades\DB;

class EscapeRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room1= new EscapeRooms;
        $room1->localName="Izurun";
        $room1->phone="684154451";
        $room1->level="2";
        $room1->price="40-60€";
        $room1->portalNum="14";
        $room1->street="Calle Autonomía";
        $room1->postalCode="20006";
        $room1->city="San Sebastián ";
        $room1->province="Gipuzkoa";
        $room1->save();

        $room2= new EscapeRooms;
        $room2->localName="Coco Room";
        $room2->phone="665787236";
        $room2->level="1";
        $room2->price="18€";
        $room2->portalNum="47";
        $room2->street="Av.Sabino Arana";
        $room2->postalCode="40485";
        $room2->city="Bilbao";
        $room2->province="Bizkaia";
        $room2->save();

        $room2= new EscapeRooms;
        $room2->localName="Escapeleku";
        $room2->phone="688742122";
        $room2->level="2";
        $room2->price="60-100€";
        $room2->portalNum="9";
        $room2->street=" C/Eskalmendi";
        $room2->postalCode="01013";
        $room2->city="Vitoria - Gasteiz";
        $room2->province="Araba";
        $room2->save();
    }
}