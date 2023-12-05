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
        Schema::create('talent_characteristic', function (Blueprint $table) {
            $table->increments('id_talent_characteristic');
            $table->unsignedInteger('id_talent');
            $table->unsignedInteger('id_characteristic');
            $table->integer('increment');
            $table->timestamps();

            $table->foreign('id_talent')->references('id_talent')->on('talent')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_characteristic')->references('id_characteristic')->on('characteristic')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('talent_characteristic')->insert([
            [
                'id_talent' => 35,
                'id_characteristic' => 10,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 37,
                'id_characteristic' => 7,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 59,
                'id_characteristic' => 8,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 81,
                'id_characteristic' => 1,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 112,
                'id_characteristic' => 3,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 113,
                'id_characteristic' => 4,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 137,
                'id_characteristic' => 2,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 143,
                'id_characteristic' => 6,
                'increment' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 150,
                'id_characteristic' => 9,
                'increment' => 5,
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
        Schema::dropIfExists('talent_characteristic');
    }
};