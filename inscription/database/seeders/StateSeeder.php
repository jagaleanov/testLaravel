<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $row = new State();
        $row->name = 'ANTIOQUIA';
        $row->save();

        $row = new State();
        $row->name = 'ATLÁNTICO';
        $row->save();

        $row = new State();
        $row->name = 'BOGOTÁ, D.C.';
        $row->save();

        $row = new State();
        $row->name = 'BOLÍVAR';
        $row->save();

        $row = new State();
        $row->name = 'BOYACÁ';
        $row->save();

        $row = new State();
        $row->name = 'CALDAS';
        $row->save();

        $row = new State();
        $row->name = 'CAQUETÁ';
        $row->save();

        $row = new State();
        $row->name = 'CAUCA';
        $row->save();

        $row = new State();
        $row->name = 'CESAR';
        $row->save();

        $row = new State();
        $row->name = 'CÓRDOBA';
        $row->save();

        $row = new State();
        $row->name = 'CUNDINAMARCA';
        $row->save();

        $row = new State();
        $row->name = 'CHOCÓ';
        $row->save();

        $row = new State();
        $row->name = 'HUILA';
        $row->save();

        $row = new State();
        $row->name = 'LA GUAJIRA';
        $row->save();

        $row = new State();
        $row->name = 'MAGDALENA';
        $row->save();

        $row = new State();
        $row->name = 'META';
        $row->save();

        $row = new State();
        $row->name = 'NARIÑO';
        $row->save();

        $row = new State();
        $row->name = 'NORTE DE SANTANDER';
        $row->save();

        $row = new State();
        $row->name = 'QUINDÍO';
        $row->save();

        $row = new State();
        $row->name = 'RISARALDA';
        $row->save();

        $row = new State();
        $row->name = 'SANTANDER';
        $row->save();

        $row = new State();
        $row->name = 'SUCRE';
        $row->save();

        $row = new State();
        $row->name = 'TOLIMA';
        $row->save();

        $row = new State();
        $row->name = 'VALLE DEL CAUCA';
        $row->save();

        $row = new State();
        $row->name = 'ARAUCA';
        $row->save();

        $row = new State();
        $row->name = 'CASANARE';
        $row->save();

        $row = new State();
        $row->name = 'PUTUMAYO';
        $row->save();

        $row = new State();
        $row->name = 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA';
        $row->save();

        $row = new State();
        $row->name = 'AMAZONAS';
        $row->save();

        $row = new State();
        $row->name = 'GUAINÍA';
        $row->save();

        $row = new State();
        $row->name = 'GUAVIARE';
        $row->save();

        $row = new State();
        $row->name = 'VAUPÉS';
        $row->save();

        $row = new State();
        $row->name = 'VICHADA';
        $row->save();
    }
}
