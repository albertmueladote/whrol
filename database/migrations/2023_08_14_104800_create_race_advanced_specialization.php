<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('race_advanced_specialization', function (Blueprint $table) {
            $table->increments('id_race_advanced_specialization');
            $table->unsignedInteger('id_race');
            $table->unsignedInteger('id_advanced_ability');
            $table->unsignedInteger('id_advanced_specialization')->nullable();
            $table->timestamps();
            $table->foreign('id_race')->references('id_race')->on('race')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_advanced_ability')->references('id_advanced_ability')->on('advanced_ability')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_advanced_specialization')->references('id_advanced_specialization')->on('advanced_specialization')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('race_advanced_specialization')->insert([
            [
                'id_race' => 1,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 1,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 32,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 1,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 45,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 1,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 75,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 38,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 68,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 2,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 73,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 3,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 31,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 3,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 75,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 3,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 4,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 4,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 34,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 5,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_race' => 5,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 34,
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
        Schema::dropIfExists('race_basic_specialization');
    }
};