<?php

namespace Database\Seeders;

use App\Models\Inscription;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Inscription();
        $row->runner_id = 1;
        $row->category = "category";
        $row->total = "50000";
        $row->phase_id = 1;
        $row->promocode_id = null;
        $row->shirt_id = null;
        $row->resp_stamp = null;
        $row->conf_stamp = null;
        $row->pol_id = null;
        $row->pol_status = null;
        $row->payment_method = null;
        $row->payment_method_type = null;
        $row->authorization_code = null;
        $row->save();
    }
}
