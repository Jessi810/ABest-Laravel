<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'Default';
        $role->save();

        $role = new Role();
        $role->name = 'Super Admin';    // God Among Admins!
        $role->save();
    }
}
