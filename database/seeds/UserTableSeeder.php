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
        $user->name = 'Jessi';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('admina');
        $user->save();
        $user->roles()->attach(Role::where('name', '=', 'Administrator')->first());
    }
}
