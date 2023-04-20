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
        Schema::create('profession', function (Blueprint $table) {
            $table->increments('id_profession');
            $table->unsignedInteger('id_class');
            $table->string('name', 100)->nullable();
            $table->timestamps();
            $table->foreign('id_class')->references('id_class')->on('class')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('profession')->insert([
            [
                'id_profession' => 1,
                'id_class' => 1,
                'name' => 'Abogado',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 2,
                'id_class' => 1,
                'name' => 'Boticario',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 3,
                'id_class' => 1,
                'name' => 'Erudito',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 4,
                'id_class' => 1,
                'name' => 'Físico',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 5,
                'id_class' => 1,
                'name' => 'Hechicero',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 6,
                'id_class' => 1,
                'name' => 'Ingeniero',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 7,
                'id_class' => 1,
                'name' => 'Monja',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 8,
                'id_class' => 1,
                'name' => 'Sacerdote',
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 9,
                'id_class' => 2,
                'name' => 'Alborotador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 10,
                'id_class' => 2,
                'name' => 'Artesano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 11,
                'id_class' => 2,
                'name' => 'Cazarratas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 12,
                'id_class' => 2,
                'name' => 'Ciudadano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 13,
                'id_class' => 2,
                'name' => 'Investigador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 14,
                'id_class' => 2,
                'name' => 'Mendigo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 15,
                'id_class' => 2,
                'name' => 'Mercader',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 16,
                'id_class' => 2,
                'name' => 'Vigilante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 17,
                'id_class' => 3,
                'name' => 'Adivino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 18,
                'id_class' => 3,
                'name' => 'Aldeano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 19,
                'id_class' => 3,
                'name' => 'Alguacil',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 20,
                'id_class' => 3,
                'name' => 'Cazador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 21,
                'id_class' => 3,
                'name' => 'Explorador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 22,
                'id_class' => 3,
                'name' => 'Herbolario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 23,
                'id_class' => 3,
                'name' => 'Minero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 24,
                'id_class' => 3,
                'name' => 'Místico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 25,
                'id_class' => 4,
                'name' => 'Artista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 26,
                'id_class' => 4,
                'name' => 'Asesor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 27,
                'id_class' => 4,
                'name' => 'Duelista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 28,
                'id_class' => 4,
                'name' => 'Emisario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 29,
                'id_class' => 4,
                'name' => 'Espía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 30,
                'id_class' => 4,
                'name' => 'Guarda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 31,
                'id_class' => 4,
                'name' => 'Noble',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 32,
                'id_class' => 4,
                'name' => 'Sirviente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 33,
                'id_class' => 5,
                'name' => 'Caballero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 34,
                'id_class' => 5,
                'name' => 'Guardia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 35,
                'id_class' => 5,
                'name' => 'Guerrero de foso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 36,
                'id_class' => 5,
                'name' => 'Matador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 37,
                'id_class' => 5,
                'name' => 'Protagonista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 38,
                'id_class' => 5,
                'name' => 'Retire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 39,
                'id_class' => 5,
                'name' => 'Sacerdote guerrero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 40,
                'id_class' => 5,
                'name' => 'Soldado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 41,
                'id_class' => 6,
                'name' => 'Brujo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 42,
                'id_class' => 6,
                'name' => 'Chalán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 43,
                'id_class' => 6,
                'name' => 'Charlatán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 44,
                'id_class' => 6,
                'name' => 'Forajido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 45,
                'id_class' => 6,
                'name' => 'Ladrón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 46,
                'id_class' => 6,
                'name' => 'Ladrón de tumbas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 47,
                'id_class' => 6,
                'name' => 'Pandillero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 48,
                'id_class' => 6,
                'name' => 'Perista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_profession' => 49,
                'id_class' => 7,
                'name' => 'Barquero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 50,
                'id_class' => 7,
                'name' => 'Contrabandista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 51,
                'id_class' => 7,
                'name' => 'Estibador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 52,
                'id_class' => 7,
                'name' => 'Guardián del río',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 53,
                'id_class' => 7,
                'name' => 'Marino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 54,
                'id_class' => 7,
                'name' => 'Mujer del río',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 55,
                'id_class' => 7,
                'name' => 'Práctico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 56,
                'id_class' => 7,
                'name' => 'Raquero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 57, 
                'id_class' => 8, 
                'name' => 'Animador', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 58, 
                'id_class' => 8, 
                'name' => 'Cazador de brujas', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 59, 
                'id_class' => 8, 
                'name' => 'Cazarrecompensas', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 60, 
                'id_class' => 8, 
                'name' => 'Cochero', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 61, 
                'id_class' => 8, 
                'name' => 'Flagelante', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 62, 
                'id_class' => 8, 
                'name' => 'Guarda de caminos', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 63, 
                'id_class' => 8, 
                'name' => 'Mensajero', 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_profession' => 64, 
                'id_class' => 8, 
                'name' => 'Vendedor ambulante', 
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
        Schema::dropIfExists('profession');
    }
};
