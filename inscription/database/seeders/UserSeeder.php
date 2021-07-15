<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new User();
        $row->name = 'Jorge';
        $row->email = 'eldelaprogramacion@gmail.com';
        $row->password = '$2y$10$X81mgT.dn7iDdEp5U9X/0eEWlDcu.ZzNL7R..yZ.ZRYqRdWjRlGJO';
        $row->rol_id = 1;
        $row->email_verified_at = null;
        $row->remember_token = null;
        $row->save();
    }
}
