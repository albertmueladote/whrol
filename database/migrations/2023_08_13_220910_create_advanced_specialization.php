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
        Schema::create('advanced_specialization', function (Blueprint $table) {
            $table->increments('id_advanced_specialization');
            $table->string('name', 100);
            $table->unsignedInteger('id_advanced_ability');
            $table->timestamps();

            $table->foreign('id_advanced_ability')->references('id_advanced_ability')->on('advanced_ability')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('advanced_specialization')->insert([
            [
                'id_advanced_specialization' => 1,
                'name' => 'arco',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 2,
                'name' => 'arrojadizas',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 3,
                'name' => 'ballesta',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 4,
                'name' => 'enmarañar',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 5,
                'name' => 'explosivos',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 6,
                'name' => 'honda',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 7,
                'name' => 'ingeniería',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 8,
                'name' => 'pólvora negra',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 9,
                'name' => 'acrobacias',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 10,
                'name' => 'baile',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 11,
                'name' => 'funambulismo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 12,
                'name' => 'malabarismo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 13,
                'name' => 'mimo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 14,
                'name' => 'payasadas',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 15,
                'name' => 'tragafuegos',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 16,
                'name' => 'caballo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 17,
                'name' => 'palomo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 18,
                'name' => 'pegaso',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 19,
                'name' => 'perro',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 20,
                'name' => 'semigrifo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 21,
                'name' => 'aqshy',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 22,
                'name' => 'azyr',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 23,
                'name' => 'chamon',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 24,
                'name' => 'dhar',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 25,
                'name' => 'ghur',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 26,
                'name' => 'ghyran',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 27,
                'name' => 'hysh',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 28,
                'name' => 'shyish',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 29,
                'name' => 'ulgu',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 30,
                'name' => 'albionés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 31,
                'name' => 'asambleario',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 32,
                'name' => 'bretoniano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 33,
                'name' => 'chillonés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 34,
                'name' => 'eltharin',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 35,
                'name' => 'estaliano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 36,
                'name' => 'gospodarinyi',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 37,
                'name' => 'grumbarth',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 38,
                'name' => 'khazalid',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 39,
                'name' => 'lengua de batalla',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 40,
                'name' => 'lengua de la magia',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 41,
                'name' => 'lengua de los ladrones',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 42,
                'name' => 'nórdico',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 43,
                'name' => 'reiklandés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 44,
                'name' => 'tileano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 45,
                'name' => 'tierras desoladas',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 46,
                'name' => 'viejomundano clásico',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 47,
                'name' => 'batidor',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 48,
                'name' => 'gremio',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 49,
                'name' => 'gremio',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 50,
                'name' => 'ladrón',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 51,
                'name' => 'orden Gris',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 52,
                'name' => 'vagabundo',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 53,
                'name' => 'carabela',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 54,
                'name' => 'coca',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 55,
                'name' => 'fragata',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 56,
                'name' => 'gabarra',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 57,
                'name' => 'navío lobo',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 58,
                'name' => 'boticario',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 59,
                'name' => 'calígrafo',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 60,
                'name' => 'carpintero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 61,
                'name' => 'cerero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 62,
                'name' => 'cocinero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 63,
                'name' => 'curtidor',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 64,
                'name' => 'embalsamador',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 65,
                'name' => 'herrero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 66,
                'name' => 'ciencias',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 67,
                'name' => 'derecho',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 68,
                'name' => 'geología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 69,
                'name' => 'heráldica',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 70,
                'name' => 'historia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 71,
                'name' => 'ingeniería',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 72,
                'name' => 'magia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 73,
                'name' => 'metalurgia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 74,
                'name' => 'teología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 75,
                'name' => 'reikland',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 76,
                'name' => 'clavicémbalo',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 77,
                'name' => 'cuerno',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 78,
                'name' => 'gaita',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 79,
                'name' => 'laúd',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 80,
                'name' => 'violín',
                'id_advanced_ability' => 20,
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
        Schema::dropIfExists('advanced_specialization');
    }
};