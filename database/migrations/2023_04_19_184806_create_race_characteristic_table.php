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
        Schema::create('race_characteristic', function (Blueprint $table) {
            $table->increments('id_race_characteristic');
            $table->unsignedInteger('id_race');
            $table->unsignedInteger('id_characteristic');
            $table->unsignedInteger('value');
            $table->timestamps();

            $table->foreign('id_race')->references('id_race')->on('race')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_characteristic')->references('id_characteristic')->on('characteristic')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('race_characteristic')->insert([
            ['id_race' => 1, 'id_characteristic' => 1, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 2, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 3, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 4, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 5, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 6, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 7, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 8, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 9, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 1, 'id_characteristic' => 10, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 1, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 2, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 3, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 4, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 5, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 6, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 7, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 8, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 9, 'value' => 40, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 2, 'id_characteristic' => 10, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 1, 'value' => 10, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 2, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 3, 'value' => 10, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 4, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 5, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 6, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 7, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 8, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 9, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 3, 'id_characteristic' => 10, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 1, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 2, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 3, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 4, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 5, 'value' => 40, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 6, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 7, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 8, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 9, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 4, 'id_characteristic' => 10, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 1, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 2, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 3, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 4, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 5, 'value' => 40, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 6, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 7, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 8, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 9, 'value' => 30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_race' => 5, 'id_characteristic' => 10, 'value' => 20, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_characteristic');
    }
};
