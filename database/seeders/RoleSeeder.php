<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = DB::table('roles')->insertGetId([
            'slug' => 'admin',
            'name' => 'Administrador',
        ]);

        $admin_list = ['dvdfreitas', 'candido_silva'];

        foreach ($admin_list as $user) {
            $user = User::where('username', $user)->first();
            if ($user) {
                DB::table('role_user')->insert([
                    'role_id' => $admin_id,
                    'user_id' => $user->id,
                ]);
            } else {
                dd("O utilizador $user não existe.");
            }
        }        
        
        
        $volunteer_id = DB::table('roles')->insertGetId([
            'slug' => 'volunteer',
            'name' => 'Voluntário',
        ]);

        $volunteer_list = ['anna_betty'];

        foreach ($volunteer_list as $user) {
            $user = User::where('username', $volunteer_list)->first();
            if ($user) {
                DB::table('role_user')->insert([
                    'role_id' => $volunteer_id,
                    'user_id' => $user->id,
                ]);
            } else {
                dd("O utilizador $user não existe.");
            }
        }

        $manager_id = DB::table('roles')->insertGetId([
            'slug' => 'manager',
            'name' => 'Gestor',
        ]);
    
        $manager_list = ['cino'];

        foreach ($manager_list as $user) {
            $user = User::where('username', $manager_list)->first();
            if ($user) {
                DB::table('role_user')->insert([
                    'role_id' => $manager_id,
                    'user_id' => $user->id,
                ]);
            } else {
                dd("O utilizador $user não existe.");
            }
        }
    }
}
