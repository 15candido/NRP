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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slog');
            $table->string('title');
            $table->text('abstract');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('title')->unique();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('visions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('title')->unique();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('valeus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('title')->unique();
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('motivations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('title')->unique();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
