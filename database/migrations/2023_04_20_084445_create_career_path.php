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
        Schema::create('career_path', function (Blueprint $table) {
            $table->increments('id_career_path');
            $table->unsignedInteger('id_profession');
            $table->integer('level');
            $table->string('name', 100);
            $table->string('status_range');
            $table->integer('status_level');
            $table->timestamps();
            $table->foreign('id_profession')->references('id_profession')->on('profession')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('career_path')->insert([
            [
                'id_career_path' => 1,
                'id_profession' => 1,
                'level' => 1,
                'name' => 'Alumno de abogacía',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 2,
                'id_profession' => 1,
                'level' => 2,
                'name' => 'Abogado',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 3,
                'id_profession' => 1,
                'level' => 3,
                'name' => 'Jurista',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 4,
                'id_profession' => 1,
                'level' => 4,
                'name' => 'Juez',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 5,
                'id_profession' => 2,
                'level' => 1,
                'name' => 'Aprendiz de boticario',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 6,
                'id_profession' => 2,
                'level' => 2,
                'name' => 'Boticario',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 7,
                'id_profession' => 2,
                'level' => 3,
                'name' => 'Boticario maestro',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 8,
                'id_profession' => 2,
                'level' => 4,
                'name' => 'Boticario general',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 9,
                'id_profession' => 3,
                'level' => 1,
                'name' => 'Alumno',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 10,
                'id_profession' => 3,
                'level' => 2,
                'name' => 'Erudito',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 11,
                'id_profession' => 3,
                'level' => 3,
                'name' => 'Miembro',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 12,
                'id_profession' => 3,
                'level' => 4,
                'name' => 'Profesor',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 13,
                'id_profession' => 4,
                'level' => 1,
                'name' => 'Aprendiz de físico',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 14,
                'id_profession' => 4,
                'level' => 2,
                'name' => 'Físico',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 15,
                'id_profession' => 4,
                'level' => 3,
                'name' => 'Doktor',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 16,
                'id_profession' => 4,
                'level' => 4,
                'name' => 'Físico de la corte',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 17,
                'id_profession' => 5,
                'level' => 1,
                'name' => 'Aprendiz de hechicero',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 18,
                'id_profession' => 5,
                'level' => 2,
                'name' => 'Hechicero',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 19,
                'id_profession' => 5,
                'level' => 3,
                'name' => 'Maestro hechicero',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 20,
                'id_profession' => 5,
                'level' => 4,
                'name' => 'Señor de los hechiceros',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 21,
                'id_profession' => 6,
                'level' => 1,
                'name' => 'Alumno de ingenieria',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 22,
                'id_profession' => 6,
                'level' => 2,
                'name' => 'Ingeniero',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 23,
                'id_profession' => 6,
                'level' => 3,
                'name' => 'Maestro ingeniero',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 24,
                'id_profession' => 6,
                'level' => 4,
                'name' => 'Ingeniero certificado',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 25,
                'id_profession' => 7,
                'level' => 1,
                'name' => 'Novicia',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 26,
                'id_profession' => 7,
                'level' => 2,
                'name' => 'Monja',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 27,
                'id_profession' => 7,
                'level' => 3,
                'name' => 'Abadesa',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 28,
                'id_profession' => 7,
                'level' => 4,
                'name' => 'Priora general',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 29,
                'id_profession' => 8,
                'level' => 1,
                'name' => 'Iniciado',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 30,
                'id_profession' => 8,
                'level' => 2,
                'name' => 'Sacerdote',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 31,
                'id_profession' => 8,
                'level' => 3,
                'name' => 'Sumo sacerdote',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 32,
                'id_profession' => 8,
                'level' => 4,
                'name' => 'Lector',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 33,
                'id_profession' => 9,
                'level' => 1,
                'name' => 'Panfletero',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 34,
                'id_profession' => 9,
                'level' => 2,
                'name' => 'Alborotador',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 35,
                'id_profession' => 9,
                'level' => 3,
                'name' => 'Amotinador',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 36,
                'id_profession' => 9,
                'level' => 4,
                'name' => 'Demagogo',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 37,
                'id_profession' => 10,
                'level' => 1,
                'name' => 'Aprendiz de artesano',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 38,
                'id_profession' => 10,
                'level' => 2,
                'name' => 'Artesano',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 39,
                'id_profession' => 10,
                'level' => 3,
                'name' => 'Maestro artesano',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 40,
                'id_profession' => 10,
                'level' => 4,
                'name' => 'Maestro del gremio',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 41,
                'id_profession' => 11,
                'level' => 1,
                'name' => 'Atrapador de ratas',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 42,
                'id_profession' => 11,
                'level' => 2,
                'name' => 'Cazarratas',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 43,
                'id_profession' => 11,
                'level' => 3,
                'name' => 'Alcantarillero',
                'status_range' => 'Plata 2',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 44,
                'id_profession' => 11,
                'level' => 4,
                'name' => 'Exterminador',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 45,
                'id_profession' => 12,
                'level' => 1,
                'name' => 'Oficinista',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 46,
                'id_profession' => 12,
                'level' => 2,
                'name' => 'Ciudadano',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 47,
                'id_profession' => 12,
                'level' => 3,
                'name' => 'Concejal',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 48,
                'id_profession' => 12,
                'level' => 4,
                'name' => 'Burgomaestre',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 49,
                'id_profession' => 13,
                'level' => 1,
                'name' => 'Sabueso',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 50,
                'id_profession' => 13,
                'level' => 2,
                'name' => 'Investigador',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 51,
                'id_profession' => 13,
                'level' => 3,
                'name' => 'Maestro investigador',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 52,
                'id_profession' => 13,
                'level' => 4,
                'name' => 'Detective',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 53,
                'id_profession' => 14,
                'level' => 1,
                'name' => 'Pobre',
                'status_range' => 'Bronce',
                'status_level' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 54,
                'id_profession' => 14,
                'level' => 2,
                'name' => 'Mendigo',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 55,
                'id_profession' => 14,
                'level' => 3,
                'name' => 'Maestro mendigo',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 56,
                'id_profession' => 14,
                'level' => 4,
                'name' => 'Rey de los mendigos',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 57,
                'id_profession' => 15,
                'level' => 1,
                'name' => 'Comerciante',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 58,
                'id_profession' => 15,
                'level' => 2,
                'name' => 'Mercader',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 59,
                'id_profession' => 15,
                'level' => 3,
                'name' => 'Maestro mercader',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 60,
                'id_profession' => 15,
                'level' => 4,
                'name' => 'Príncipe mercader',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 61,
                'id_profession' => 16,
                'level' => 1,
                'name' => 'Recluta de la guardia',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 62,
                'id_profession' => 16,
                'level' => 2,
                'name' => 'Vigilante',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 63,
                'id_profession' => 16,
                'level' => 3,
                'name' => 'Sargento de la guardia',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 64,
                'id_profession' => 16,
                'level' => 4,
                'name' => 'Capitán de la guardia',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 65,
                'id_profession' => 17,
                'level' => 1,
                'name' => 'Aprendiz de adivino',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 66,
                'id_profession' => 17,
                'level' => 2,
                'name' => 'Adivino',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 67,
                'id_profession' => 17,
                'level' => 3,
                'name' => 'Maestro adivino',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 68,
                'id_profession' => 17,
                'level' => 4,
                'name' => 'Sabio adivino',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 69,
                'id_profession' => 18,
                'level' => 1,
                'name' => 'Lugareño',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 70,
                'id_profession' => 18,
                'level' => 2,
                'name' => 'Aldeano',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 71,
                'id_profession' => 18,
                'level' => 3,
                'name' => 'Edil',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 72,
                'id_profession' => 18,
                'level' => 4,
                'name' => 'Anciano del poblado',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 73,
                'id_profession' => 19,
                'level' => 1,
                'name' => 'Recaudador de impuestos',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 74,
                'id_profession' => 19,
                'level' => 2,
                'name' => 'Alguacil',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 75,
                'id_profession' => 19,
                'level' => 3,
                'name' => 'Comisario',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 76,
                'id_profession' => 19,
                'level' => 4,
                'name' => 'Magistrado',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 77,
                'id_profession' => 20,
                'level' => 1,
                'name' => 'Trampero',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 78,
                'id_profession' => 20,
                'level' => 2,
                'name' => 'Cazador',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 79,
                'id_profession' => 20,
                'level' => 3,
                'name' => 'Rastreador',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 80,
                'id_profession' => 20,
                'level' => 4,
                'name' => 'Montero mayor',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 81,
                'id_profession' => 21,
                'level' => 1,
                'name' => 'Guía',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 82,
                'id_profession' => 21,
                'level' => 2,
                'name' => 'Explorador',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 83,
                'id_profession' => 21,
                'level' => 3,
                'name' => 'Batidor',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 84,
                'id_profession' => 21,
                'level' => 4,
                'name' => 'Expedicionario',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 85,
                'id_profession' => 22,
                'level' => 1,
                'name' => 'Recolector de hierbas',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 86,
                'id_profession' => 22,
                'level' => 2,
                'name' => 'Herbolario',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 87,
                'id_profession' => 22,
                'level' => 3,
                'name' => 'Maestro de las hierbas',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 88,
                'id_profession' => 22,
                'level' => 4,
                'name' => 'Sabio de las hierbas',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 89,
                'id_profession' => 23,
                'level' => 1,
                'name' => 'Prospector',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 90,
                'id_profession' => 23,
                'level' => 2,
                'name' => 'Minero',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 91,
                'id_profession' => 23,
                'level' => 3,
                'name' => 'Maestro minero',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 92,
                'id_profession' => 23,
                'level' => 4,
                'name' => 'Capataz de la mina',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 93,
                'id_profession' => 24,
                'level' => 1,
                'name' => 'Pitoniso',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 94,
                'id_profession' => 24,
                'level' => 2,
                'name' => 'Místico',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 95,
                'id_profession' => 24,
                'level' => 3,
                'name' => 'Sabio',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 96,
                'id_profession' => 24,
                'level' => 4,
                'name' => 'Vidente',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 97,
                'id_profession' => 25,
                'level' => 1,
                'name' => 'Aprendiz de artista',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 98,
                'id_profession' => 25,
                'level' => 2,
                'name' => 'Artista',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 99,
                'id_profession' => 25,
                'level' => 3,
                'name' => 'Artista magistral',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 100,
                'id_profession' => 25,
                'level' => 4,
                'name' => 'Maestro',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 101,
                'id_profession' => 26,
                'level' => 1,
                'name' => 'Asistente',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 102,
                'id_profession' => 26,
                'level' => 2,
                'name' => 'Asesor',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 103,
                'id_profession' => 26,
                'level' => 3,
                'name' => 'Consejero',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 104,
                'id_profession' => 26,
                'level' => 4,
                'name' => 'Canciller',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 105,
                'id_profession' => 27,
                'level' => 1,
                'name' => 'Esgrimista',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 106,
                'id_profession' => 27,
                'level' => 2,
                'name' => 'Duelista',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 107,
                'id_profession' => 27,
                'level' => 3,
                'name' => 'Maestro duelista',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 108,
                'id_profession' => 27,
                'level' => 4,
                'name' => 'Campeón judicial',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 109,
                'id_profession' => 28,
                'level' => 1,
                'name' => 'Heraldo',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 110,
                'id_profession' => 28,
                'level' => 2,
                'name' => 'Emisario',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 111,
                'id_profession' => 28,
                'level' => 3,
                'name' => 'Diplomático',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 112,
                'id_profession' => 28,
                'level' => 4,
                'name' => 'Embajador',
                'status_range' => 'Oro',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 113,
                'id_profession' => 29,
                'level' => 1,
                'name' => 'Informador',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 114,
                'id_profession' => 29,
                'level' => 2,
                'name' => 'Espía',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 115,
                'id_profession' => 29,
                'level' => 3,
                'name' => 'Agente',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 116,
                'id_profession' => 29,
                'level' => 4,
                'name' => 'Maestro de espías',
                'status_range' => 'Oro',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 117,
                'id_profession' => 30,
                'level' => 1,
                'name' => 'Custodio',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 118,
                'id_profession' => 30,
                'level' => 2,
                'name' => 'Guarda',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 119,
                'id_profession' => 30,
                'level' => 3,
                'name' => 'Senescal',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 120,
                'id_profession' => 30,
                'level' => 4,
                'name' => 'Gibernador',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 121,
                'id_profession' => 31,
                'level' => 1,
                'name' => 'Vástago',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 122,
                'id_profession' => 31,
                'level' => 2,
                'name' => 'Noble',
                'status_range' => 'Oro',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 123,
                'id_profession' => 31,
                'level' => 3,
                'name' => 'Magnate',
                'status_range' => 'Oro',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 124,
                'id_profession' => 31,
                'level' => 4,
                'name' => 'Señor noble',
                'status_range' => 'Oro',
                'status_level' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 125,
                'id_profession' => 32,
                'level' => 1,
                'name' => 'Doméstico',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 126,
                'id_profession' => 32,
                'level' => 2,
                'name' => 'Sirviente',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 127,
                'id_profession' => 32,
                'level' => 3,
                'name' => 'Empleado',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 128,
                'id_profession' => 32,
                'level' => 4,
                'name' => 'Mayordomo',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 129,
                'id_profession' => 33,
                'level' => 1,
                'name' => 'Escudero',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 130,
                'id_profession' => 33,
                'level' => 2,
                'name' => 'Caballero',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 131,
                'id_profession' => 33,
                'level' => 3,
                'name' => 'Primer caballero',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 132,
                'id_profession' => 33,
                'level' => 4,
                'name' => 'Caballero del Círculo Interior',
                'status_range' => 'Oro',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 133,
                'id_profession' => 34,
                'level' => 1,
                'name' => 'Centinela',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 134,
                'id_profession' => 34,
                'level' => 2,
                'name' => 'Guardia',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 135,
                'id_profession' => 34,
                'level' => 3,
                'name' => 'Guardia de honor',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 136,
                'id_profession' => 34,
                'level' => 4,
                'name' => 'Oficial de la guardia',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 137,
                'id_profession' => 35,
                'level' => 1,
                'name' => 'Pugilista',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 138,
                'id_profession' => 35,
                'level' => 2,
                'name' => 'Guerrero de foso',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 139,
                'id_profession' => 35,
                'level' => 3,
                'name' => 'Campeón de foso',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 140,
                'id_profession' => 35,
                'level' => 4,
                'name' => 'Leyenda de los fosos',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 141,
                'id_profession' => 36,
                'level' => 1,
                'name' => 'Matatroles',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 142,
                'id_profession' => 36,
                'level' => 2,
                'name' => 'Matagigantes',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 143,
                'id_profession' => 36,
                'level' => 3,
                'name' => 'Matadragones',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 144,
                'id_profession' => 36,
                'level' => 4,
                'name' => 'Matademonios',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 145,
                'id_profession' => 37,
                'level' => 1,
                'name' => 'Fanfarrón',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 146,
                'id_profession' => 37,
                'level' => 2,
                'name' => 'Protagonista',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 147,
                'id_profession' => 37,
                'level' => 3,
                'name' => 'Sicario',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 148,
                'id_profession' => 37,
                'level' => 4,
                'name' => 'Asesino',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 149,
                'id_profession' => 38,
                'level' => 1,
                'name' => 'Jinete',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 150,
                'id_profession' => 38,
                'level' => 2,
                'name' => 'Reitre',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 151,
                'id_profession' => 38,
                'level' => 3,
                'name' => 'Sargento de caballería',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 152,
                'id_profession' => 38,
                'level' => 4,
                'name' => 'Oficial de caballería',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 153,
                'id_profession' => 39,
                'level' => 1,
                'name' => 'Novicio',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 154,
                'id_profession' => 39,
                'level' => 2,
                'name' => 'Sacerdote guerrero',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 155,
                'id_profession' => 39,
                'level' => 3,
                'name' => 'Sacerdote sargento',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 156,
                'id_profession' => 39,
                'level' => 4,
                'name' => 'Sacerdote capitán',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 157,
                'id_profession' => 40,
                'level' => 1,
                'name' => 'Recluta',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 158,
                'id_profession' => 40,
                'level' => 2,
                'name' => 'Soldado',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 159,
                'id_profession' => 40,
                'level' => 3,
                'name' => 'Sargento',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 160,
                'id_profession' => 40,
                'level' => 4,
                'name' => 'Oficial',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 161,
                'id_profession' => 41,
                'level' => 1,
                'name' => 'Maldecidor',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 162,
                'id_profession' => 41,
                'level' => 2,
                'name' => 'Brujo',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 163,
                'id_profession' => 41,
                'level' => 3,
                'name' => 'Fatídico',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 164,
                'id_profession' => 41,
                'level' => 4,
                'name' => 'Nigromante',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 165,
                'id_profession' => 42,
                'level' => 1,
                'name' => 'Embaucador',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 166,
                'id_profession' => 42,
                'level' => 2,
                'name' => 'Chalán',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 167,
                'id_profession' => 42,
                'level' => 3,
                'name' => 'Procurador',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 168,
                'id_profession' => 42,
                'level' => 4,
                'name' => 'Cabecilla',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 169,
                'id_profession' => 43,
                'level' => 1,
                'name' => 'Timador',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 170,
                'id_profession' => 43,
                'level' => 2,
                'name' => 'Charlatán',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 171,
                'id_profession' => 43,
                'level' => 3,
                'name' => 'Estafador',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 172,
                'id_profession' => 43,
                'level' => 4,
                'name' => 'Canalla',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 173,
                'id_profession' => 44,
                'level' => 1,
                'name' => 'Bandolero',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 174,
                'id_profession' => 44,
                'level' => 2,
                'name' => 'Forajido',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 175,
                'id_profession' => 44,
                'level' => 3,
                'name' => 'Jefe de forajidos',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 176,
                'id_profession' => 44,
                'level' => 4,
                'name' => 'Rey de los bandidos',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 177,
                'id_profession' => 45,
                'level' => 1,
                'name' => 'Merodeador',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 178,
                'id_profession' => 45,
                'level' => 2,
                'name' => 'Ladrón',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 179,
                'id_profession' => 45,
                'level' => 3,
                'name' => 'Maestro ladrón',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 180,
                'id_profession' => 45,
                'level' => 4,
                'name' => 'Ratero',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 181,
                'id_profession' => 46,
                'level' => 1,
                'name' => 'Ladrón de cuerpos',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 182,
                'id_profession' => 46,
                'level' => 2,
                'name' => 'Ladrón de tumbas',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 183,
                'id_profession' => 46,
                'level' => 3,
                'name' => 'Ladrón de sepulturas',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 184,
                'id_profession' => 46,
                'level' => 4,
                'name' => 'Buscador de tesoros',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 185,
                'id_profession' => 47,
                'level' => 1,
                'name' => 'Matón',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 186,
                'id_profession' => 47,
                'level' => 2,
                'name' => 'Pandillero',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 187,
                'id_profession' => 47,
                'level' => 3,
                'name' => 'Jefe de banda',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 188,
                'id_profession' => 47,
                'level' => 4,
                'name' => 'Señor del crimen',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 189,
                'id_profession' => 48,
                'level' => 1,
                'name' => 'Receptador',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 190,
                'id_profession' => 48,
                'level' => 2,
                'name' => 'Perista',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 191,
                'id_profession' => 48,
                'level' => 3,
                'name' => 'Maestro perista',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 192,
                'id_profession' => 48,
                'level' => 4,
                'name' => 'Estraperlista',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 193,
                'id_profession' => 49,
                'level' => 1,
                'name' => 'Botero',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 194,
                'id_profession' => 49,
                'level' => 2,
                'name' => 'Barquero',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 195,
                'id_profession' => 49,
                'level' => 3,
                'name' => 'Contramaestre',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 196,
                'id_profession' => 49,
                'level' => 4,
                'name' => 'Capitán de barcaza',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 197,
                'id_profession' => 50,
                'level' => 1,
                'name' => 'Traficante',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 198,
                'id_profession' => 50,
                'level' => 2,
                'name' => 'Contrabandista',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 199,
                'id_profession' => 50,
                'level' => 3,
                'name' => 'Maestro contrabandista',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 200,
                'id_profession' => 50,
                'level' => 4,
                'name' => 'Rey de los contrabandistas',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 201,
                'id_profession' => 51,
                'level' => 1,
                'name' => 'Cargador',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 202,
                'id_profession' => 51,
                'level' => 2,
                'name' => 'Estibador',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 203,
                'id_profession' => 51,
                'level' => 3,
                'name' => 'Capataz',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 204,
                'id_profession' => 51,
                'level' => 4,
                'name' => 'Maestro de los muelles',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 205,
                'id_profession' => 52,
                'level' => 1,
                'name' => 'Recluta fluvial',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 206,
                'id_profession' => 52,
                'level' => 2,
                'name' => 'Guardián del río',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 207,
                'id_profession' => 52,
                'level' => 3,
                'name' => 'Espada de a bordo',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 208,
                'id_profession' => 52,
                'level' => 4,
                'name' => 'Maestro espada de a bordo',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 209,
                'id_profession' => 53,
                'level' => 1,
                'name' => 'Marinero de tierra',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 210,
                'id_profession' => 53,
                'level' => 2,
                'name' => 'Marino',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 211,
                'id_profession' => 53,
                'level' => 3,
                'name' => 'Contramaestre',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 212,
                'id_profession' => 53,
                'level' => 4,
                'name' => 'Capitán de navío',
                'status_range' => 'Oro',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 213,
                'id_profession' => 54,
                'level' => 1,
                'name' => 'Bacaladilla',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 214,
                'id_profession' => 54,
                'level' => 2,
                'name' => 'Mujer del río',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 215,
                'id_profession' => 54,
                'level' => 3,
                'name' => 'Sabia del río',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 216,
                'id_profession' => 54,
                'level' => 4,
                'name' => 'Anciana del río',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 217,
                'id_profession' => 55,
                'level' => 1,
                'name' => 'Guía fluvial',
                'status_range' => 'Cobre',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 218,
                'id_profession' => 55,
                'level' => 2,
                'name' => 'Prático',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 219,
                'id_profession' => 55,
                'level' => 3,
                'name' => 'Piloto',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 220,
                'id_profession' => 55,
                'level' => 4,
                'name' => 'Maestro piloto',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 221,
                'id_profession' => 56,
                'level' => 1,
                'name' => 'Carroñero',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 222,
                'id_profession' => 56,
                'level' => 2,
                'name' => 'Raquero',
                'status_range' => 'Bronce',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 223,
                'id_profession' => 56,
                'level' => 3,
                'name' => 'Pirata fluvial',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 224,
                'id_profession' => 56,
                'level' => 4,
                'name' => 'Capitán de raqueros',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 225,
                'id_profession' => 57,
                'level' => 1,
                'name' => 'Músico callejero',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 226,
                'id_profession' => 57,
                'level' => 2,
                'name' => 'Animador',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 227,
                'id_profession' => 57,
                'level' => 3,
                'name' => 'Trovador',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 228,
                'id_profession' => 57,
                'level' => 4,
                'name' => 'Líder de troupe',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 229,
                'id_profession' => 58,
                'level' => 1,
                'name' => 'Interrogador',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 230,
                'id_profession' => 58,
                'level' => 2,
                'name' => 'Cazador de brujas',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 231,
                'id_profession' => 58,
                'level' => 3,
                'name' => 'Inquisidor',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 232,
                'id_profession' => 58,
                'level' => 4,
                'name' => 'Cazador de brujas general',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 233,
                'id_profession' => 59,
                'level' => 1,
                'name' => 'Cazaladrones',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 234,
                'id_profession' => 59,
                'level' => 2,
                'name' => 'Cazarrecompensas',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 235,
                'id_profession' => 59,
                'level' => 3,
                'name' => 'Cazarrecompensas maestro',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 236,
                'id_profession' => 59,
                'level' => 4,
                'name' => 'Cazarrecompensas general',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 237,
                'id_profession' => 60,
                'level' => 1,
                'name' => 'Postillón',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 238,
                'id_profession' => 60,
                'level' => 2,
                'name' => 'Cochero',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 239,
                'id_profession' => 60,
                'level' => 3,
                'name' => 'Maestro de diligenciias',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 240,
                'id_profession' => 60,
                'level' => 4,
                'name' => 'Maestro de la ruta',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 241,
                'id_profession' => 61,
                'level' => 1,
                'name' => 'Zelote',
                'status_range' => 'Bronce',
                'status_level' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 242,
                'id_profession' => 61,
                'level' => 2,
                'name' => 'Flagelante',
                'status_range' => 'Bronce',
                'status_level' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 243,
                'id_profession' => 61,
                'level' => 3,
                'name' => 'Penitente',
                'status_range' => 'Bronce',
                'status_level' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 244,
                'id_profession' => 61,
                'level' => 4,
                'name' => 'Profeta de la perdición',
                'status_range' => 'Bronce',
                'status_level' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 245,
                'id_profession' => 62,
                'level' => 1,
                'name' => 'Peajero',
                'status_range' => 'Bronce',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 246,
                'id_profession' => 62,
                'level' => 2,
                'name' => 'Guardia de caminos',
                'status_range' => 'Plata',
                'status_level' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 247,
                'id_profession' => 62,
                'level' => 3,
                'name' => 'Sargento de caminos',
                'status_range' => 'Plata',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 248,
                'id_profession' => 62,
                'level' => 4,
                'name' => 'Capitán de caminos',
                'status_range' => 'Oro',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 249,
                'id_profession' => 63,
                'level' => 1,
                'name' => 'Corredor',
                'status_range' => 'Bronce',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 250,
                'id_profession' => 63,
                'level' => 2,
                'name' => 'Mensajero',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 251,
                'id_profession' => 63,
                'level' => 3,
                'name' => 'Correo',
                'status_range' => 'Plata',
                'status_level' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 252,
                'id_profession' => 63,
                'level' => 4,
                'name' => 'Capitán de correos',
                'status_range' => 'Plata',
                'status_level' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 253,
                'id_profession' => 64,
                'level' => 1,
                'name' => 'Vagabundo',
                'status_range' => 'Bronce',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 254,
                'id_profession' => 64,
                'level' => 2,
                'name' => 'Vendedor ambulante',
                'status_range' => 'Bronce',
                'status_level' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 255,
                'id_profession' => 64,
                'level' => 3,
                'name' => 'Maestro vendedor ambulante',
                'status_range' => 'Plata',
                'status_level' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_career_path' => 256,
                'id_profession' => 64,
                'level' => 4,
                'name' => 'Mercader ambulante',
                'status_range' => 'Plata',
                'status_level' => 3,
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
        Schema::dropIfExists('career_path');
    }
};
