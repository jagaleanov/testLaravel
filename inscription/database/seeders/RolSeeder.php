<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Rol();
        $row->key = "admin";
        $row->name = "Administrador";
        $row->save();
        
        $row = new Rol();
        $row->key = "registered";
        $row->name = "Registrado";
        $row->save();
    }
}
