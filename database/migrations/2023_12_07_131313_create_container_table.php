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
        Schema::create('container', function (Blueprint $table) {
            $table->increments('id_container');
            $table->string('name');
            $table->integer('imp');
            $table->integer('imp_inside');
            $table->string('availability');
            $table->string('price');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('container')->insert([
            [
                'id_container' => 1,
                'name' => 'Alforjas',
                'imp' => 4,
                'imp_inside' => 8,
                'availability' => 'Común',
                'price' => '18cp',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 2,
                'name' => 'Bandolera',
                'imp' => 1,
                'imp_inside' => 2,
                'availability' => 'Común',
                'price' => '1cp',
                'description' => 'Cuenta cómo ‘puesta’ cuando la llevas al hombro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 3,
                'name' => 'Barril',
                'imp' => 6,
                'imp_inside' => 12,
                'availability' => 'Común',
                'price' => '8cp',
                'description' => 'Capacidad: 32 galones de líquido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 4,
                'name' => 'Barrilete',
                'imp' => 2,
                'imp_inside' => 4,
                'availability' => 'Común',
                'price' => '3cp',
                'description' => 'Capacidad: 10 galones de líquido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 5,
                'name' => 'Bolsa',
                'imp' => 0,
                'imp_inside' => 1,
                'availability' => 'Común',
                'price' => '4p',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 6,
                'name' => 'Cantimplora',
                'imp' => 1,
                'imp_inside' => 1,
                'availability' => 'Común',
                'price' => '1cp',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 7,
                'name' => 'Estuche de pergaminos',
                'imp' => 0,
                'imp_inside' => 0,
                'availability' => 'Raro',
                'price' => '16cp',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 8,
                'name' => 'Frasco',
                'imp' => 0,
                'imp_inside' => 0,
                'availability' => '',
                'price' => '5cp',
                'description' => 'Capacidad: 1 pinta de líquido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 9,
                'name' => 'Jarra',
                'imp' => 1,
                'imp_inside' => 1,
                'availability' => 'Común',
                'price' => '3cp',
                'description' => 'Capacidad: 1 galón de líquido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 10,
                'name' => 'Mochila',
                'imp' => 2,
                'imp_inside' => 4,
                'availability' => 'Común',
                'price' => '4cp',
                'description' => 'Cuenta cómo "puesta" cuando la llevas a la espalda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 11,
                'name' => 'Odre',
                'imp' => 1,
                'imp_inside' => 1,
                'availability' => 'Común',
                'price' => '1cp',
                'description' => 'Capacidad: 1 galón de líquido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 12,
                'name' => 'Pichel de peltre',
                'imp' => 0,
                'imp_inside' => 0,
                'availability' => 'Común',
                'price' => '4cp',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 13,
                'name' => 'Saco',
                'imp' => 2,
                'imp_inside' => 4,
                'availability' => 'Común',
                'price' => '1cp',
                'description' => 'Requiere una mano para llevarlo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_container' => 14,
                'name' => 'Saco grande',
                'imp' => 3,
                'imp_inside' => 6,
                'availability' => 'Común',
                'price' => '1cp',
                'description' => 'Requiere una mano para llevarlo (o las dos manos si está lleno).',
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
        Schema::dropIfExists('container');
    }
};