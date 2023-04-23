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
        Schema::create('basic_specialization', function (Blueprint $table) {
            $table->increments('id_basic_specialization');
            $table->string('name', 100);
            $table->integer('id_basic_ability');
            $table->timestamps();
        });

        DB::table('basic_specialization')->insert([
            [
                'id_basic_specialization' => 1,
                'name' => 'actuar',
                'id_basic_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 2,
                'name' => 'cantar',
                'id_basic_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 3,
                'name' => 'comedia',
                'id_basic_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 4,
                'name' => 'relatar',
                'id_basic_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 5,
                'name' => 'cartografía',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 6,
                'name' => 'escultura',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 7,
                'name' => 'grabado',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 8,
                'name' => 'mosaico',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 9,
                'name' => 'pintura',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 10,
                'name' => 'tatuajes',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 11,
                'name' => 'tejido',
                'id_basic_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 12,
                'name' => 'arma a dos manos',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 13,
                'name' => 'arma de asta',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 14,
                'name' => 'básico',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 15,
                'name' => 'caballería',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 16,
                'name' => 'esgrima',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 17,
                'name' => 'mayales',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 18,
                'name' => 'parada',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 19,
                'name' => 'pelea',
                'id_basic_ability' => 10,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 20,
                'name' => 'caballo',
                'id_basic_ability' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 21,
                'name' => 'gran lobo',
                'id_basic_ability' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 22,
                'name' => 'grifo',
                'id_basic_ability' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 23,
                'name' => 'pegaso',
                'id_basic_ability' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 24,
                'name' => 'semigrifo',
                'id_basic_ability' => 18,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 25,
                'name' => 'rural',
                'id_basic_ability' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 26,
                'name' => 'subterráneo',
                'id_basic_ability' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 27,
                'name' => 'urbano',
                'id_basic_ability' => 19,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 28,
                'name' => 'discursos',
                'id_basic_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_specialization' => 29,
                'name' => 'escritura',
                'id_basic_ability' => 3,
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
        Schema::dropIfExists('basic_specialization');
    }
};
