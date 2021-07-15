<?php

namespace Database\Seeders;

use App\Models\Runner;
use Illuminate\Database\Seeder;

class RunnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Runner();
        $row->id = 1;
        $row->document_number = "80101608";
        $row->document_type = "CC";
        $row->email = 'eldelaprogramacion@gmail.com';
        $row->name = 'Jorge';
        $row->last_name = 'Galeano';
        $row->birthdate = "1984-01-08";
        $row->gender = "M";
        $row->country= "Colombia";
        $row->state = "Bogotá";
        $row->city = "Bogotá DC";
        $row->address = "mi casa";
        $row->eps = "compensar";
        $row->blood = "O+";
        $row->phone = "3164541444";
        $row->save();
    }
}
