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
        Schema::create('object_property', function (Blueprint $table) {
            $table->increments('id_object_property');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('object_property')->insert([
            [
                'id_object_property' => 1,
                'name' => 'Bueno',
                'description' => 'Meticulosamente fabricado para ser agradable a la vista. Esta Cualidad es un signo de Estatus social, y se puede aplicar en múltiples ocasiones. Cuanto mayor es la cualidad, más impresionante parece',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 2,
                'name' => 'Duradero',
                'description' => 'Laboriosamente fabricado utilizando materiales fuertes, el objeto puede soportar tantos puntos de Daño como su puntuación de Duradero antes de sufrir ningún negativo y tiene derecho a una tirada de salvación de 9 o más en 1d10 contra la ruptura debida a cosas como Atrapaespadas. Esta Cualidad se puede aplicar en múltiples ocasiones. Cada vez que se aplica, la tirada de salvación mejora en 1 (por ejemplo, de 9 o más a 8 o más)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 3,
                'name' => 'Ligero',
                'description' => 'Astutamente fabricado para ser fácil de llevar. Reduce en 1 los puntos de Impedimenta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 4,
                'name' => 'Práctico',
                'description' => 'Expertamente fabricado con la utilidad en mente. Un Chequeo fallido utilizando este objeto obtiene +1 NE. Si el objeto es una pieza de armadura, todo penalizador por llevarla se reduce en un nivel (por ejemplo, de -30 a -20)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 5,
                'name' => 'Chapucero',
                'description' => 'Fabricado apresuradamente por un aficionado o un estafador. El objeto se rompe cuando se usa en cualquier Chequeo fallido en el que sale un doble. Similarmente, las armaduras Chapuceras se rompen si sufren algún impacto Crítico en una Ubicación de impacto que protegen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 6,
                'name' => 'Engorroso',
                'description' => 'Un diseño raro, torpemente ejecutado. Aumenta en +1 la Impedimenta (las baratijas pequeñas normalmente no pueden tener este efecto). La ropa y las armaduras Engorrosas tienen Imp. 1 incluso cuando se llevan puestas, y los penalizadores a la Fatiga por armadura se doblan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 7,
                'name' => 'Feo',
                'description' => 'Fabricados sin ninguna consideración estética, los objetos Feos atraen la atención negativa y los Chequeos de Carisma relacionados con ellos podrían incluso sufrir un penalizador -10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_object_property' => 8,
                'name' => 'Poco fiable',
                'description' => 'Fabricado sin prestar atención a la funcionalidad, un Chequeo fallido utilizando este objeto sufre -1 NE. Además, los penalizadores por llevar armadura Poco fiable se doblan',
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
        Schema::dropIfExists('object_property');
    }
};