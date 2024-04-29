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
        Schema::create('category_container', function (Blueprint $table) {
            $table->increments('id_category_container');
            $table->string('id_category');
            $table->integer('id_container');
            $table->timestamps();
        });

        DB::table('category_container')->insert([
            [
                'id_category_container' => 1,
                'id_category' => 1,
                'id_container' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_category_container' => 2,
                'id_category' => 2,
                'id_container' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_category_container' => 4,
                'id_category' => 4,
                'id_container' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_category_container' => 5,
                'id_category' => 5,
                'id_container' => 13,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_category_container' => 6,
                'id_category' => 6,
                'id_container' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_category_container' => 7,
                'id_category' => 7,
                'id_container' => 2,
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
        Schema::dropIfExists('category_container');
    }
};