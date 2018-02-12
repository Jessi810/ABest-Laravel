<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('admina');
        $user->save();
        $user->roles()->attach(Role::where('name', '=', 'Super Admin')->first());
    }
}
