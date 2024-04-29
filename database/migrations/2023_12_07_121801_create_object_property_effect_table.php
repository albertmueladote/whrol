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
        Schema::create('object_property_modify', function (Blueprint $table) {
            $table->increments('id_object_property_modify');
            $table->unsignedInteger('id_object_property');
            $table->string('attribute');
            $table->string('modify');
            $table->timestamps();

            $table->foreign('id_object_property')->references('id_object_property')->on('object_property')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('object_property_modify')->insert([
            [
                'id_object_property_modify' => 1,
                'id_object_property' => 3,
                'attribute' => 'imp',
                'modify' => -1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property_modify' => 2,
                'id_object_property' => 6,
                'attribute' => 'imp',
                'modify' => 1,
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
        Schema::dropIfExists('object_property_c');
    }
};