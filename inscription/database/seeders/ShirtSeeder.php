<?php

namespace Database\Seeders;

use App\Models\Shirt;
use Illuminate\Database\Seeder;

class ShirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $row = new Shirt();
        $row->size = "XL";
        $row->quantity_in = 20;
        $row->quantity_out = 0;
        $row->status = 1;
        $row->save();
        
        $row = new Shirt();
        $row->size = "L";
        $row->quantity_in = 20;
        $row->quantity_out = 0;
        $row->status = 0;
        $row->save();
        
        $row = new Shirt();
        $row->size = "M";
        $row->quantity_in = 20;
        $row->quantity_out = 0;
        $row->status = 1;
        $row->save();
        
        $row = new Shirt();
        $row->size = "S";
        $row->quantity_in = 20;
        $row->quantity_out = 5;
        $row->status = 1;
        $row->save();

        $row = new Shirt();
        $row->size = "XS";
        $row->quantity_in = 20;
        $row->quantity_out = 0;
        $row->status = 1;
        $row->save();
    }
}
