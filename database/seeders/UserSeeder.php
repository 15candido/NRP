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
            'email' => 'dvdfreitas@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);
        
        DB::table('users')->insert([    
            'name' => 'Cândido Silva',  
            'email' => 'candido.da.silva.ca@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),   
        ]);
        
    }
}
