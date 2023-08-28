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
                'name' => 'pistola ballesta',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 10,
                'name' => 'lanzar',
                'id_advanced_ability' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 11,
                'name' => 'acrobacias',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 12,
                'name' => 'baile',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 13,
                'name' => 'funambulismo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 14,
                'name' => 'malabarismo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 15,
                'name' => 'mimo',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 16,
                'name' => 'payasadas',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 17,
                'name' => 'tragafuegos',
                'id_advanced_ability' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 18,
                'name' => 'caballo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 19,
                'name' => 'palomo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 20,
                'name' => 'pegaso',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 21,
                'name' => 'perro',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 22,
                'name' => 'semigrifo',
                'id_advanced_ability' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 23,
                'name' => 'aqshy',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 24,
                'name' => 'azyr',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 25,
                'name' => 'chamon',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 26,
                'name' => 'dhar',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 27,
                'name' => 'ghur',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 28,
                'name' => 'ghyran',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 29,
                'name' => 'hysh',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 30,
                'name' => 'shyish',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 31,
                'name' => 'ulgu',
                'id_advanced_ability' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 32,
                'name' => 'caballo',
                'id_advanced_ability' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 33,
                'name' => 'albionés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 34,
                'name' => 'asambleario',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 35,
                'name' => 'bretoniano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 36,
                'name' => 'chillonés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 37,
                'name' => 'eltharin',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 38,
                'name' => 'estaliano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 39,
                'name' => 'gospodarinyi',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 40,
                'name' => 'grumbarth',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 41,
                'name' => 'khazalid',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 42,
                'name' => 'lengua de batalla',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 43,
                'name' => 'lengua de la magia',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 44,
                'name' => 'lengua de los ladrones',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 45,
                'name' => 'nórdico',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 46,
                'name' => 'reiklandés',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 47,
                'name' => 'tileano',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 48,
                'name' => 'tierras desoladas',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 49,
                'name' => 'viejomundano clásico',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 50,
                'name' => 'gremio',
                'id_advanced_ability' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 51,
                'name' => 'batidor',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 52,
                'name' => 'gremio',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 53,
                'name' => 'ladrón',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 54,
                'name' => 'orden Gris',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 55,
                'name' => 'vagabundo',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 56,
                'name' => 'cazador',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 57,
                'name' => 'minero',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 58,
                'name' => 'orden de caballería',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 59,
                'name' => 'contrabandista',
                'id_advanced_ability' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 60,
                'name' => 'carabela',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 61,
                'name' => 'coca',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 62,
                'name' => 'fragata',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 63,
                'name' => 'gabarra',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 64,
                'name' => 'navío lobo',
                'id_advanced_ability' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 65,
                'name' => 'boticario',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 66,
                'name' => 'calígrafo',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 67,
                'name' => 'carpintero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 68,
                'name' => 'cerero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 69,
                'name' => 'cocinero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 70,
                'name' => 'curtidor',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 71,
                'name' => 'embalsamador',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 72,
                'name' => 'herrero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 73,
                'name' => 'envenenador',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 74,
                'name' => 'barbero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 75,
                'name' => 'ingeniero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 76,
                'name' => 'cervecero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 77,
                'name' => 'herbolario',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 78,
                'name' => 'vinatero',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 79,
                'name' => 'imprenta',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 80,
                'name' => 'amuletos',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 81,
                'name' => 'cartógrafo',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 82,
                'name' => 'explosivos',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 83,
                'name' => 'suministros de arte',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 84,
                'name' => 'herrador',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 85,
                'name' => 'grabador',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 86,
                'name' => 'constructor de botes',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 87,
                'name' => 'manitas',
                'id_advanced_ability' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 88,
                'name' => 'ciencias',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 89,
                'name' => 'derecho',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 90,
                'name' => 'geología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 91,
                'name' => 'heráldica',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 92,
                'name' => 'historia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 93,
                'name' => 'ingeniería',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 94,
                'name' => 'magia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 95,
                'name' => 'metalurgia',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 96,
                'name' => 'teología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 97,
                'name' => 'Imperio',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 98,
                'name' => 'local',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 99,
                'name' => 'medicina',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 100,
                'name' => 'plantas',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 101,
                'name' => 'química',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 102,
                'name' => 'anatomía',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 103,
                'name' => 'nobles',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 104,
                'name' => 'guerra',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 105,
                'name' => 'política',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 106,
                'name' => 'venenos',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 107,
                'name' => 'folclore',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 108,
                'name' => 'hierbas',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 109,
                'name' => 'espíritus',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 110,
                'name' => 'genealogía',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 111,
                'name' => 'bestias',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 112,
                'name' => 'local',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 113,
                'name' => 'astrología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 114,
                'name' => 'profecía',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 115,
                'name' => 'arte',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 116,
                'name' => 'etiqueta',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 117,
                'name' => 'troles',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 118,
                'name' => 'gigantes',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 119,
                'name' => 'dragones',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 120,
                'name' => 'caos',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 121,
                'name' => 'magia oscura',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 122,
                'name' => 'demonología',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 123,
                'name' => 'derecho',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 124,
                'name' => 'arte',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 125,
                'name' => 'vías fluviales',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 126,
                'name' => 'impuestos',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 127,
                'name' => 'naufragios',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 128,
                'name' => 'tortura',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 129,
                'name' => 'brujas',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 130,
                'name' => 'carreteras',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 131,
                'name' => 'sigmar',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 132,
                'name' => 'geografía',
                'id_advanced_ability' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 133,
                'name' => 'clavicémbalo',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 134,
                'name' => 'cuerno',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 135,
                'name' => 'gaita',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 136,
                'name' => 'laúd',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 137,
                'name' => 'violín',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 138,
                'name' => 'tambor',
                'id_advanced_ability' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_specialization' => 139,
                'name' => 'pífano',
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