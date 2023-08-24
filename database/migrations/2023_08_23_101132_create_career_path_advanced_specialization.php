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
        Schema::create('career_path_advanced_specialization', function (Blueprint $table) {
            $table->increments('id_career_path_advanced_specialization');
            $table->unsignedInteger('id_career_path');
            $table->unsignedInteger('id_advanced_ability');
            $table->unsignedInteger('id_advanced_specialization')->nullable();
            $table->timestamps();
            $table->foreign('id_career_path', 'cp_as_fk_career_path')->references('id_career_path')->on('career_path')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_advanced_ability', 'cp_as_fk_advanced_ability')->references('id_advanced_ability')->on('advanced_ability')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_advanced_specialization', 'cp_as_fk_advanced_specialization')->references('id_advanced_specialization')->on('advanced_specialization')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('career_path_advanced_specialization')->insert([
            [
                'id_career_path' => 1,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 1,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 1,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 96,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 2,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 2,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 4,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 65,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 73,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 99,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 6,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 6,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 88,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 7,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 9,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 9,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 10,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 10,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 10,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 11,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 11,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 12,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 14,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 14,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 74,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 14,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 14,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 99,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 16,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 17,
                'id_advanced_ability' => 4,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 17,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 43,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 17,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 94,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 18,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 18,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 19,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 20,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 20,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 21,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 21,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 21,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 75,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 21,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 93,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 22,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 22,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 23,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 41,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 23,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 24,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 24,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 25,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 96,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 26,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 76,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 26,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 77,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 26,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 78,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 27,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 27,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 28,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 28,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 29,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 96,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 31,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 32,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 32,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 33,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 79,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 33,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 36,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 37,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 38,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 38,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 39,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 41,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 41,
                'id_advanced_ability' => 3,
                'id_advanced_specialization' => 21,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 42,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 43,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 46,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 46,
                'id_advanced_ability' => 20,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 47,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 48,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 50,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 51,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 52,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 55,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 55,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 55,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 58,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 58,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 50,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 58,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 59,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 59,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 60,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 62,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 63,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 64,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 65,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 43,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 65,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 65,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 66,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 77,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 66,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 80,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 66,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 67,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 67,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 94,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 67,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 69,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 70,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 72,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 92,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 74,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 75,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 76,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 76,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 77,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 77,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 78,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 78,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 56,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 81,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 82,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 83,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 56,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 84,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 84,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 81,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 85,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 77,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 85,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 86,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 87,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 73,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 87,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 99,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 90,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 57,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 90,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 82,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 91,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 75,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 91,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 90,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 94,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 96,
                'id_advanced_ability' => 4,
                'id_advanced_specialization' => 24,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 96,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 98,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 98,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 83,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 99,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 99,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 101,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 101,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 102,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 103,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 103,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 104,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 105,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 106,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 106,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 72,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 108,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 110,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 111,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 112,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 112,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 114,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 115,
                'id_advanced_ability' => 3,
                'id_advanced_specialization' => 19,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 116,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 117,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 118,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 120,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 121,
                'id_advanced_ability' => 2,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 121,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 122,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 122,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 123,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 123,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 124,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 127,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 129,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 84,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 129,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 130,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 131,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 132,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 58,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 132,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 134,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 135,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 135,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 136,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 138,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 139,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 140,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 141,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 142,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 142,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 118,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 143,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 143,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 144,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 147,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 148,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 149,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 150,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 151,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 152,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 153,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 96,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 154,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 154,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 156,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 157,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 42,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 157,
                'id_advanced_ability' => 20,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 158,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 160,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 161,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 43,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 162,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 77,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 163,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 121,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 164,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 164,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 94,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 166,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 167,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 167,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 168,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 171,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 171,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 53,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 171,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 172,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 174,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 174,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 176,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 97,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 178,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 53,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 178,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 179,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 182,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 99,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 183,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 92,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 184,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 75,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 185,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 186,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 187,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 188,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 188,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 190,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 53,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 190,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 85,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 191,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 191,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 192,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 194,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 195,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 86,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 198,
                'id_advanced_ability' => 9,
                'id_advanced_specialization' => 59,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 198,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 199,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 200,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 204,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 126,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 206,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 206,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 208,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 210,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 211,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 67,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 214,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 214,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 214,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 214,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 216,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 217,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 217,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 218,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 219,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 127,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 219,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 223,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 224,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 225,
                'id_advanced_ability' => 2,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 225,
                'id_advanced_ability' => 20,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 226,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 226,
                'id_advanced_ability' => 2,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 226,
                'id_advanced_ability' => 20,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 227,
                'id_advanced_ability' => 3,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 227,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 229,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 230,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 230,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 129,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 231,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 231,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 234,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 234,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 236,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 89,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 237,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 238,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 238,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 239,
                'id_advanced_ability' => 5,
                'id_advanced_specialization' => 32,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 239,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 239,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 130,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 241,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 131,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 242,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 242,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 242,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 97,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 243,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 243,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 96,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 245,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 247,
                'id_advanced_ability' => 1,
                'id_advanced_specialization' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 248,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 97,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 250,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 254,
                'id_advanced_ability' => 12,
                'id_advanced_specialization' => 87,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 255,
                'id_advanced_ability' => 7,
                'id_advanced_specialization' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 256,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 132,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 256,
                'id_advanced_ability' => 16,
                'id_advanced_specialization' => 98,
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
        Schema::dropIfExists('career_path_advanced_specialization');
    }
};