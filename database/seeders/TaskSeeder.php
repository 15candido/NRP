<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tasks')->insert([
            'name' => 'volutários',
            'slug' => 'volunteer',
            'description' => 'Permite ao utilizador gerir as informações sobre os voluntários e as atividades neste âmbito.',
        ]);
        
    }
}
