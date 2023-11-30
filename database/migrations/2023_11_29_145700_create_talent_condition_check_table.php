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
        Schema::create('talent_condition_check', function (Blueprint $table) {
            $table->increments('id_talent_condition_check');
            $table->unsignedInteger('id_talent');
            $table->text('condition');
            $table->timestamps();

            $table->foreign('id_talent')->references('id_talent')->on('talent')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('talent_condition_check')->insert([
            [
                'id_talent' => 1,
                'condition' => 'Atletismo cuando huyes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 2,
                'condition' => 'Carisma animal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 3,
                'condition' => 'Canalización (cualquiera)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 4,
                'condition' => 'Chequeos sociales para influenciar a un superior',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 5,
                'condition' => 'Cuerpo a cuerpo cuando fuerces o rompas objetos inanimados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 8,
                'condition' => 'Intimidar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 9,
                'condition' => 'Oficio (cualquiera)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 10,
                'condition' => 'Cualquier Chequeo Prolongado de Oficio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 11,
                'condition' => 'Arte (cualquiera)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 12,
                'condition' => 'Cuerpo a cuerpo al hacer ataques adicionales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 14,
                'condition' => 'Chequeos de Carisma para influenciar a quienes atraes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 15,
                'condition' => 'Chequeos de Aguante para resistir el hambre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 16,
                'condition' => 'Chequeos de Navegar para embarcaciones fluviales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 19,
                'condition' => 'Oficio (boticario)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 21,
                'condition' => 'Nadar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 22,
                'condition' => 'Remar y Nadar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 23,
                'condition' => 'Atletismo cuando caes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 24,
                'condition' => 'Cuerpo a cuerpo en un Asalto en el que Cargues',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 25,
                'condition' => 'Carisma cuando hablas de tu causa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 27,
                'condition' => 'Chequeos de Sanar fuera de asaltos de combate; es decir, cuando tienes tiempo para hacerlo de forma ‘apropiada’.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 28,
                'condition' => 'Cualquier Chequeo para detectar los Vientos de la Magia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 29,
                'condition' => 'Cuerpo a cuerpo cuando luchas en combate cercano o entras en el mismo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 30,
                'condition' => 'Esquivar en entornos estrechos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 32,
                'condition' => 'Chequeos de Interpretar y de Agilidad cuando contorsionarse puede resultar de ayuda.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 33,
                'condition' => 'Cuerpo a cuerpo cuando te defiendes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 34,
                'condition' => 'Chequeos de Atletismo relativos a Correr',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 39,
                'condition' => 'Chequeos de Frialdad para eliminar Estados de Quebrantado.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 40,
                'condition' => 'Chequeos de Cuerpo a cuerpo relativos a este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 41,
                'condition' => 'Inteligencia (desfalcar)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 42,
                'condition' => 'Chequeos de Intuición para detectar artefactos mágicos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 43,
                'condition' => 'Hablar idioma (magia) al lanzar un hechizo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 44,
                'condition' => 'Chequeos de Carisma al debatir y discutir',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 45,
                'condition' => 'Animar (actuar) cuando aparentas ser otra persona',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 48,
                'condition' => 'A distancia cuando llevas a cabo un Disparo rápido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 50,
                'condition' => 'Atletismo para Distraer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 51,
                'condition' => 'Sabiduría académica (boticario)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 52,
                'condition' => 'Cuerpo a cuerpo o A distancia al atacar con dos armas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 53,
                'condition' => ' Chequeos de Cuerpo a cuerpo cuando estás junto a un aliado que también está Entrenado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 54,
                'condition' => 'Todos los llevados a cabo para resistir el mareo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 55,
                'condition' => 'Chequeos de esquivar montando a caballo, Montar (caballo)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 56,
                'condition' => 'Chequeos de Movimiento silencioso en un entorno Rural',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 57,
                'condition' => 'Escalar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 58,
                'condition' => 'Cualquier Chequeo para defenderse con un escudo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 60,
                'condition' => 'Chequeos de Esquivar para activar este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 61,
                'condition' => 'Carisma y Cotilleo (grupo social)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 62,
                'condition' => 'Jugar o Prestidigitación cuando juegas a dados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 63,
                'condition' => 'Chequeos de Percepción para divisar trampas, Poner trampas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 64,
                'condition' => 'Cuerpo a cuerpo (esgrima) para Fintar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 65,
                'condition' => 'Cualquiera para resistirse a los Poderes Ruinosos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 66,
                'condition' => 'Chequeos de Fuerza al levantar pesos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 67,
                'condition' => 'A distancia (distancia larga o extrema)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 68,
                'condition' => 'Chequeos de Cuerpo a cuerpo cuando estás en Furia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 69,
                'condition' => 'Jugar y Prestidigitación al jugar a cartas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 71,
                'condition' => 'Movimiento silencioso (urbano)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 72,
                'condition' => 'Tasar, Jugar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 73,
                'condition' => 'Cuerpo a cuerpo cuando te defiendes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 74,
                'condition' => 'Chequeos de Cuerpo a cuerpo cuando propinas un Golpe conmocionador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 76,
                'condition' => 'Chequeos de Iniciativa relativos a este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 79,
                'condition' => 'Cuerpo a cuerpo para Golpear el filo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 80,
                'condition' => 'Chequeos de Cotilleo con viajeros',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 82,
                'condition' => 'Cualquier Chequeo de Sabiduría académica relativo a asuntos fluviales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 84,
                'condition' => ': Chequeos de Animar (actuar) para apoyar tus identidades secretas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 85,
                'condition' => ' Chequeos de Animar (actuar) donde los acentos son importantes.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 86,
                'condition' => ' Chequeos de Frialdad para resistir el pánico a la Pólvora negra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 89,
                'condition' => 'Mando durante la guerra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 90,
                'condition' => 'Investigar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 91,
                'condition' => 'Frialdad para oponerse al Intimidar, Miedo y Terror de tu Enemigo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 92,
                'condition' => 'Chequeos de Inteligencia relativos a este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 94,
                'condition' => 'Montar (caballo) en combate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 95,
                'condition' => 'Carisma en Fiestas, Cotilleo en Fiestas, Consumir alcohol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 96,
                'condition' => 'Chequeos de Investigar y de Leer y escribir donde la velocidad de lectura es importante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 97,
                'condition' => 'Chequeos de Percepción relativos a este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 100,
                'condition' => 'Chequeos de Mando en tiempo de guerra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 101,
                'condition' => 'Hablar idioma (todos)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 102,
                'condition' => 'Navegar (cualquier navío capaz de navegar por alta mar)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 107,
                'condition' => 'Chequeos de Oficio para reparar objetos rotos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 108,
                'condition' => 'Chequeos de Conducir o de Montar cuando huyes o corres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 109,
                'condition' => 'Prestidigitación, Cuerpo a cuerpo (pelea) para tocar a un oponente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 114,
                'condition' => 'Regatear',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 115,
                'condition' => 'Tasar para establecer el valor de unas monedas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 118,
                'condition' => 'Voluntad (resistir grupo)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 119,
                'condition' => 'Cualquier Chequeo para detectar alborotadores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 121,
                'condition' => 'Carisma cuando mientes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 123,
                'condition' => 'Orientación',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 124,
                'condition' => 'Carisma para Parlotear',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 125,
                'condition' => 'Carisma (mendigar)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 126,
                'condition' => 'Cuerpo a cuerpo (pelea)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 128,
                'condition' => 'Percepción durante el combate cuerpo a cuerpo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 129,
                'condition' => 'Cualquier Chequeo que implique pescar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 132,
                'condition' => 'Chequeos de Navegar o de Remar mientras recorres aguas inseguras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 134,
                'condition' => 'Mando',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 135,
                'condition' => 'Sanar durante los Asaltos de combate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 138,
                'condition' => 'Chequeos de Aguante para no quedar Aturdido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 139,
                'condition' => 'Chequeos de Movimiento silencioso cuando estás bajo tierra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 144,
                'condition' => 'Todos los utilizados para resistirse a la Amenaza asociada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 149,
                'condition' => 'Sabiduría académica (Saber elegido)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 151,
                'condition' => 'Cualquier Chequeo influenciado por tu Estatus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 152,
                'condition' => 'Percepción (sentido)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 153,
                'condition' => 'Chequeos de Intuición para detectar a los hechicero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 154,
                'condition' => 'Chequeos de Intuición que implican tu Sexto sentido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 155,
                'condition' => 'Movimiento silencioso si estás a plena vista    ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 156,
                'condition' => 'Sobornar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 157,
                'condition' => 'Cualquier Chequeo que implique hacer un Seguimiento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 159,
                'condition' => 'Chequeos de Aguante para soportar las adversidades',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 160,
                'condition' => 'Animar (cantar), Hablar idioma (idiomas tonales, como el eltharin, el catayano y el de la magia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 161,
                'condition' => 'Cualquier Chequeo de Sabiduría académica que tenga que ver con detalles locales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 163,
                'condition' => 'Chequeos de Percepción en condiciones de poca luz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 164,
                'condition' => 'Chequeos de Intuición cuando estás en terreno sagrado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 165,
                'condition' => 'Cualquier Chequeo para seguir rastros o capturar caza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 166,
                'condition' => 'Chequeos de Frialdad para enfrentarse a Intimidar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_talent' => 167,
                'condition' => 'Chequeos de Atletismo para atravesar el Terreno',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent_condition_check');
    }
};