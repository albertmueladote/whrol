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
        Schema::create('race_choose_talent', function (Blueprint $table) {
            $table->increments('id_race_choose_talent');
            $table->unsignedInteger('id_race');
            $table->unsignedInteger('id_talent');
            $table->integer('group');
            $table->timestamps();

            $table->foreign('id_race')->references('id_race')->on('race')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_talent')->references('id_talent')->on('talent')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('race_choose_talent')->insert([
            [
                'id_race' => 1,
                'id_talent' => 35,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 1,
                'random_talents' => 59,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 2,
                'random_talents' => 36,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 2,
                'random_talents' => 146,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 2,
                'random_talents' => 88,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 2,
                'random_talents' => 98,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 4,
                'random_talents' => 28,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 4,
                'random_talents' => 154,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 4,
                'random_talents' => 59,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 4,
                'random_talents' => 150,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 5,
                'random_talents' => 28,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 5,
                'random_talents' => 141,
                'group' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 5,
                'random_talents' => 98,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 5,
                'random_talents' => 113,
                'group' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_choose_talent');
    }
};