<?php

namespace Database\Seeders;

use App\Models\Phase;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Phase();
        $row->date_in = "2020-10-10 10:10:10";
        $row->name = "Fase 1";
        $row->value = 50000;
        $row->status = 1;
        $row->save();
    }
}
