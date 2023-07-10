<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([    
            'name' => 'David Freitas',
            'username' => 'dvdfreitas',
            'email' => 'dvdfreitas@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);

        DB::table('users')->insert([    
            'name' => 'Cândido Silva',
            'username' => 'candido_silva',  
            'email' => 'candido.da.silva.ca@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);

        DB::table('users')->insert([    
            'name' => 'Alcina',
            'username' => 'cino',  
            'email' => 'alcina@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);

        DB::table('users')->insert([    
            'name' => 'Anna Betty',
            'username' => 'anna_betty',  
            'email' => 'anna@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);

    }
}
