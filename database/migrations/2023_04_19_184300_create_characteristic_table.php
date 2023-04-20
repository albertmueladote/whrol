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
        Schema::create('characteristic', function (Blueprint $table) {
            $table->increments('id_characteristic');
            $table->string('name', 50);
            $table->string('abbreviation', 10);
            $table->timestamps();
        });

        DB::table('characteristic')->insert([
            ['id_characteristic' => 1, 'name' => 'Habilidad de armas', 'abbreviation' => 'HA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 2, 'name' => 'Habilidad de proyectiles', 'abbreviation' => 'HP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 3, 'name' => 'Fuerza', 'abbreviation' => 'F', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 4, 'name' => 'Resistencia', 'abbreviation' => 'R', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 5, 'name' => 'Iniciativa', 'abbreviation' => 'Ini', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 6, 'name' => 'Agilidad', 'abbreviation' => 'Ag', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 7, 'name' => 'Destreza', 'abbreviation' => 'Des', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 8, 'name' => 'Inteligencia', 'abbreviation' => 'I', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 9, 'name' => 'Voluntad', 'abbreviation' => 'V', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id_characteristic' => 10, 'name' => 'Empatía', 'abbreviation' => 'Em', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteristic');
    }
};
