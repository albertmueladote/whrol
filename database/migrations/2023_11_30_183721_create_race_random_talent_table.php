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
        Schema::create('race_random_talent', function (Blueprint $table) {
            $table->increments('id_race_random_talent');
            $table->unsignedInteger('id_race');
            $table->integer('random_talents');
            $table->timestamps();

            $table->foreign('id_race')->references('id_race')->on('race')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('race_random_talent')->insert([
            [
                'id_race' => 1,
                'random_talents' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_race' => 3,
                'random_talents' => 2,
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
        Schema::dropIfExists('race_random_talent');
    }
};