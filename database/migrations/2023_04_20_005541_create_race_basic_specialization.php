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
        Schema::create('race_basic_specialization', function (Blueprint $table) {
            $table->increments('id_race_basic_specialization');
            $table->unsignedInteger('id_race');
            $table->unsignedInteger('id_basic_specialization');
            $table->timestamps();
            $table->foreign('id_race')->references('id_race')->on('race')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_basic_specialization')->references('id_basic_specialization')->on('basic_specialization')->onDelete('cascade')->onUpdate('cascade');
        });

         DB::table('race_basic_specialization')->insert([
            [
                'id_race' => 1,
                'id_basic_specialization' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_basic_specialization' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_basic_specialization' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 4,
                'id_basic_specialization' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 4,
                'id_basic_specialization' => 14,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 5,
                'id_basic_specialization' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 5,
                'id_basic_specialization' => 14,
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
        Schema::dropIfExists('race_basic_specialization');
    }
};
