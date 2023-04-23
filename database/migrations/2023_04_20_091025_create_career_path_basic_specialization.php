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
        Schema::create('career_path_basic_specialization', function (Blueprint $table) {
            $table->increments('id_career_path_basic_specialization');
            $table->unsignedInteger('id_career_path');
            $table->unsignedInteger('id_basic_specialization');
            $table->timestamps();
            $table->foreign('id_career_path')->references('id_career_path')->on('career_path')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_basic_specialization')->references('id_basic_specialization')->on('basic_specialization')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('id_career_path_basic_specialization')->insert([
            [
                'id_career_path' => 3,
                'id_basic_specialization' => 28,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 3,
                'id_basic_specialization' => 29,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ]
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_path_basic_specialization');
    }
};
