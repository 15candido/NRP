<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();            
            $table->timestamps();
        });

        Schema::create('role_user', function (Blueprint $table) {            
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');            
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');            
            $table->timestamps();

            $table->primary(['user_id']);            
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
