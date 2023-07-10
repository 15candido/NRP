<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager_role_id = Role::where('slug', 'manager')->first()->id;        

        $warehouse_manager_ability_id = DB::table('abilities')->insertGetId([
            'name' => 'Gestor de Armazém',
            'slug' => 'warehouse_manager',
        ]);

        DB::table('ability_role')->insert([
            'role_id' => $manager_role_id,
            'ability_id' => $warehouse_manager_ability_id,
        ]);        

        $list_volunteers_ability_id = DB::table('abilities')->insertGetId([
            'name' => 'Listar voluntários',
            'slug' => 'list_volunteers',
        ]);        

        $volunteer_role_id = Role::where('slug', 'volunteer')->first()->id;        

        DB::table('ability_role')->insert([
            'role_id' => $volunteer_role_id,
            'ability_id' => $list_volunteers_ability_id,
        ]);

        DB::table('ability_role')->insert([
            'role_id' => $manager_role_id,
            'ability_id' => $list_volunteers_ability_id,
        ]);
    }
}
