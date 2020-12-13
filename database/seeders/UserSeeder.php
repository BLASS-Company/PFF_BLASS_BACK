<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $user= new User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("passwordadmin");
        $user->admin = 1;
        $user->save();

        //2
        $user= new User;
        $user->name = "robert";
        $user->email = "robert@gmail.com";
        $user->password = bcrypt("password");
        $user->admin = 0;
        $user->save();

        //3
        $user= new User;
        $user->name = "jean";
        $user->email = "jean@gmail.com";
        $user->password = bcrypt("password");
        $user->save();
    }
}
