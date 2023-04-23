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
        Schema::create('career_path_characteristic', function (Blueprint $table) {
            $table->increments('id_career_path_characteristic');
            $table->unsignedInteger('id_career_path');
            $table->unsignedInteger('id_characteristic');
            $table->timestamps();
            $table->foreign('id_career_path')->references('id_career_path')->on('career_path')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_characteristic')->references('id_characteristic')->on('characteristic')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('career_path_characteristic')->insert([
            [
                'id_career_path' => 1,
                'id_characteristic' => 5,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 1,
                'id_characteristic' => 7,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 1,
                'id_characteristic' => 8,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 2,
                'id_characteristic' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 3,
                'id_characteristic' => 9,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 4,
                'id_characteristic' => 4,
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
        Schema::dropIfExists('career_path_characteristic');
    }
};
