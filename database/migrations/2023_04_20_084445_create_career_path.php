<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_path', function (Blueprint $table) {
            $table->increments('id_career_path');
            $table->unsignedInteger('id_profession');
            $table->integer('level');
            $table->string('name', 100);
            $table->string('status_range');
            $table->integer('status_level');
            $table->timestamps();
            $table->foreign('id_profession')->references('id_profession')->on('profession')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('career_path')->insert([
            [
                'id_career_path' => 1,
                'id_profession' => 1,
                'level' => 1,
                'name' => 'Alumno de abogacía',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 2,
                'id_profession' => 1,
                'level' => 2,
                'name' => 'Abogado',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 3,
                'id_profession' => 1,
                'level' => 3,
                'name' => 'Jurista',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 4,
                'id_profession' => 1,
                'level' => 4,
                'name' => 'Juez',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_path');
    }
};
