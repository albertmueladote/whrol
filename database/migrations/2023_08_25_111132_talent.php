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
        Schema::create('talent', function (Blueprint $table) {
            $table->increments('id_talent');
            $table->unsignedInteger('name');
            $table->text('descriptions');
            $table->timestamps();
        });

        DB::table('talent')->insert([
            [
                'id_talent' => 1,
                'name' => '¡A correr!',
                'description' => 'Cuando tu vida peligra, eres capaz de impresionantes ráfagas de velocidad. Tu Atributo de Movimiento cuenta como 1 punto más cuando Huye',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 2,
                'name' => 'Afinidad Animal',
                'description' => 'Los animales salvajes se sienten cómodos en tu presencia, y a menudo siguen tu ejemplo. Todas las criaturas con el Rasgo Bestial no entrenadas para ser beligerantes se mostrarán automáticamente como porque sientan dolor, sean atacadas, sean extremadamente agresivas de forma natural o tengan cerca a sus crías.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 3,
                'name' => 'Afinidad con el Aethyr',
                'description' => 'Tu experiencia, tu talento o tu entrenamiento te permiten manipular de forma más segura los Vientos de la Magia. No sufres una Disfunción mágica si sacas un doble en un Chequeo con éxito de Canalización.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 4,
                'name' => 'Alentador',
                'description' => 'Chequeos sociales para influenciar a un superior Sabes qué decir y cuándo hacerlo para causar el máximo impacto a tus superiores. Cuando utilizas con éxito una Habilidad social para influenciar a quienes tienen un nivel de Estatus superior al tuyo, puedes elegir entre utilizar los NE obtenidos con el dado y el número obtenido en el dado de unidades. Así, una tirada con éxito de 46 se podría utilizar para +6 NE',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 5,
                'name' => 'Allanamiento de morada',
                'description' => 'Eres un experto en echar puertas abajo rápidamente y en entrar en sitios a la fuerza. Puedes sumar +1 Daño por cada nivel en este talento al determinar el daño contra objetos inanimados como ventanas, arcones, puertas y objetos similares.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 6,
                'name' => 'Alma pura',
                'description' => 'Tu alma es pura, y por lo tanto muy resistente a las depredaciones del Caos. Puedes anotarte tantos puntos de Corrupción Chequear para ver si te has corrompido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 7,
                'name' => 'Ambidiestro',
                'description' => 'Puedes utilizar tu mano torpe mucho mejor que la mayoría de personas, o bien por entrenamiento o por talento innato. Sólo sufres un penalizador -10 a los Chequeos que se basan tan solo en no sufres penalizador alguno.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 8,
                'name' => 'Amenazador',
                'description' => 'Tienes una presencia imponente. Cuando utilizas la Habilidad Intimidar, obtienes un bonificador al NE igual a tus niveles de Amenazador.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 9,
                'name' => 'Artesano (oficio)',
                'description' => 'Tienes un auténtico talento creativo. Suma la Habilidad de Oficio asociada a cualquier Carrera en la que entras. Si dicha Habilidad de Oficio ya está en tu Carrera, en lugar de ello puedes comprarla a razón de 5 PX menos por Avance',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 10,
                'name' => 'Artesano maestro (oficio)',
                'description' => ' cualquier Chequeo Prolongado de Oficio Eres excepcionalmente hábil en tu Oficio. Reduces en tantos puntos como tu nivel de Artesano maestro el NE requerido de cualquier Chequeo Prolongado utilizando tu Habilidad de Oficio.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 11,
                'name' => 'Artista',
                'description' => 'Tienes un talento natural para el arte, y eres capaz de hacer bocetos precisos con solo el tiempo y los materiales adecuados. Esta capacidad tiene unos cuantos usos en el juego, que van desde crear pasquines de ‘Se busca’ a esbozar diarios precisos, además de beneficios puntuales a determinar por el DJ. Además, añade Arte (cualquiera) a cualquier Carrera en la que entras; si ya está en la misma, puedes adquirir la Habilidad a razón de 5 PX menos por Avance.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 12,
                'name' => 'Asalto furioso',
                'description' => 'Tus golpes se suceden con rapidez, lloviendo sobre tus oponentes con la furia de Ulric. Una vez por Asalto, si aciertas a un oponente en combate cerrado, puedes gastar de inmediato una Ventaja o tu Movimiento para hacer un ataque adicional (suponiendo que aún te quede por hacer tu Movimiento).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 13,
                'name' => 'Aterrador',
                'description' => 'Cualquiera en sus cabales se lo piensa dos veces antes de acercarse a ti. Si quieres, tienes un Índice de Miedo de 1. Suma +1 a esta cifra cada vez adicional que adquieres este talento.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 14,
                'name' => 'Atractivo',
                'description' => 'Ya se trate de tu penetrante mirada, de tu recia estructura o quizá de la forma en que haces brillar tus perfectos dientes, sabes cómo aprovechar al máximo lo que los dioses te han concedido. Cuando utilizas con éxito el Carisma para influenciar a los que se ven atraídos hacia ti, puedes elegir entre usar los NE obtenidos o el número obtenido en tu dado de unidades. Así, una tirada con éxito de 38 se podría utilizar para +8 NE',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 15,
                'name' => 'Ayunador',
                'description' => 'Estás acostumbrado a sobrevivir con menos, y sabes cómo resistir los malos tiempos. Puedes subsistir con la mitad de comida necesaria sin ningún penalizador (aparte de tener mucha hambre), y sólo necesitas hacer un Chequeo de Inanición cada 3 días y no cada 2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 16,
                'name' => 'Barquero',
                'description' => 'Eres un navegante fluvial con experiencia y estás muy versado en las embarcaciones fluviales. Puedes ignorar todos los negativos a tus Chequeos cuando estas a bordo de una gabarra, derivados de aguas revueltas, embarcaciones que se mueven, suelo inseguro y cosas parecidas. Además, cuentas como dos barqueros para el mínimo de tripulantes necesarios para pilotar una embarcación de río.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 17,
                'name' => 'Bendición (Saber divino)',
                'description' => 'Uno de los dioses vela por ti, y ello te permite potenciar las más sencillas plegarias. Ahora puedes desplegar las Bendiciones de tu dios. En circunstancias normales, sólo puedes adquirir el Talento Bendición (Saber divino) una vez.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 18,
                'name' => 'Bien equipado',
                'description' => 'Estás acostumbrado a anticiparte a las necesidades, tanto de los emás como de ti mismo. Durante tantas veces por sesión como tu nivel de Bien equipado, puedes sacar de tu mochila (o similar) el accesorio requerido para la situación actual en tanto en cuanto su Impedimenta sea 0, puedas haberlo comprado recientemente y no abuse demasiado de la credibilidad. Podría tratarse de cualquier cosa, desde una petaca de licor para fortificar a un camarada herido hasta una flauta dulce que necesita un animador de paso. Siempre que hagas esto, deberás restar de tu bolsillo el coste del objeto proporcionando, representando el dinero gastado previamente.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 19,
                'name' => 'Boticario',
                'description' => 'Tienes una gran habilidad en farmacia, y eres mucho más capaz que otros de elaborar píldoras, pomadas, ungüentos, óleos, cremas y muchas cosas más. Puedes invertir los dados de cualquier Chequeo fallido de Oficio (boticario) si esto te permite tener éxito en el mismo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 20,
                'name' => '¡Brujo!',
                'description' => 'Has aprendido magia mediante prueba y error. Añade Hablar idioma (magia) a cualquier Carrera en la que entras; si la Habilidad ya está en dicha Carrera, puedes comprarla a razón de 5 PX menos por Avance. Además, puedes gastar 1 punto de Resiliencia para lanzar de inmediato cualquier hechizo como si fuera uno de tus hechizos de Saber arcano; también memorizas instantáneamente el hechizo como uno de tus hechizos de Saber arcano al coste de 0 PX. Puedes hacerlo tantas veces como tu nivel en este Talento.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 21,
                'name' => 'Buen nadador',
                'description' => 'Eres un nadador excepcionalmente bueno, y estás acostumbrado a contener el aliento un buen rato bajo el agua. Obtienes un bonificador igual a tu nivel en Buen nadador a tu Bonificador por Resistencia a efectos de contener el aliento.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 22,
                'name' => 'Buenas espaldas',
                'description' => 'Tienes la espalda fuerte, y estás acostumbrado a trabajar duro. Puedes sumar tus niveles en Buenas espaldas a tu NE en cualquier Chequeo Enfrentado de Fuerza y puedes llevar tantos puntos de Impedimenta adicionales en forma de accesorios como tu nivel de Buenas espaldas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 23,
                'name' => 'Caer como los gatos',
                'description' => 'Eres ágil y equilibrado como un gato, y eres capaz de caer distancias mucho mayores que mucha otra gente sin sufrir daño. Siempre que caes, intentas un Chequeo de Atletismo. Si tienes éxito, reduces la distancia caída en una yarda, +1 yarda adicional por cada +1 NE obtenido, a efectos de calcular el daño.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 24,
                'name' => 'Carga bersérker',
                'description' => 'Cuerpo a cuerpo en un Asalto en el que Cargues Te lanzas contra tus enemigos con un abandono imprudente, utilizando la fuerza de tu carga para añadir peso a tus golpes. Cuando Cargas, sumas +1 al Daño a todos los ataques Cuerpo a cuerpo por cada nivel que tienes en este talento.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 25,
                'name' => 'Celo ferviente',
                'description' => 'Cuando hablas de tu causa, caso o religión, tus palabras se llenan
                de pasión y de un celo ferviente. Puedes doblar tu Empatía a
                efectos de determinar el número de gente influenciada por tu
                nivel de Orador cuando hablas de tu causa.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 26,
                'name' => 'Cerebro',
                'description' => 'Te has ganado un aire de respetabilidad a pesar de tus nefarias costumbres. Puedes ignorar la pérdida de Estatus debido al Talento Delincuente. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 27,
                'name' => 'Cirugía',
                'description' => 'Eres un cirujano, capaz de abrir y cerrar la carne para curar a otros. Puedes tratar cualquier Herida crítica en la que se indica que necesita Cirugía. También puedes usarla para resolver problemas internos mediante un Chequeo Prolongado Desafiante (+0) de Sanar con un NE objetivo determinado por el DJ (por lo general entre 5 y 10) dependiendo de la dificultad de la operación. Esto causa 1d10 heridas y 1 Estado de Sangrando por Chequeo, lo que significa que la cirugía tiene una buena probabilidad de matar al paciente si el cirujano no es cuidadoso. Después de la cirugía, el paciente debe conseguir un Chequeo Normal (+20) de Aguante o sufrir una Infección leve.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 28,
                'name' => 'Clarividencia',
                'description' => 'Puedes percibir los cambiantes Vientos de la Magia que surgen de las Puertas del Caos que están en los polos del mundo. Ahora dispones de la Videncia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 29,
                'name' => 'Combate cercano',
                'description' => 'Eres hábil en acercarte mucho a un oponente. No sufres penalizador alguno por luchar contra un oponente que tiene un arma de mayor alcance que la tuya. Además, si utilizas las reglas opcionales del combate cercano, obtienes un bonificador +10 al impacto contra tu oponente.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 30,
                'name' => 'Combate cerrado',
                'description' => 'Has aprendido a sacar el máximo partido de los combates en lugares reducidos. Ignoras los penalizadores al Cuerpo a cuerpo que causan los espacios confinados como por ejemplo los túneles, la línea del frente, las trincheras y cosas similares, y puedes utilizar tu Habilidad de Esquivar, incluso si normalmente no se te permitiría debido a la falta de espacio.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 31,
                'name' => 'Condenado',
                'description' => 'A la edad de 10 años, un sacerdote de Morr de los denominados Presagiadores te llevó aparte para predecir tu muerte en un ritual de mayoría de edad cargado de incienso denominado la Condena. De acuerdo con tu DJ, construid una Condena adecuada. Si tu personaje muere de una forma que encaja con tu Condena, tu siguiente personaje obtiene un bonificador de la mitad de los PX totales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 32,
                'name' => 'Contorsionista',
                'description' => 'Puedes retorcer y manipular tu cuerpo de muchas formas aparentemente antinaturales. Esto te permite deslizarte a través de espacios increíblemente estrechos y doblar tu cuerpo de formas extrañas, lo que concede beneficios determinados por el DJ, posiblemente combinados con un Chequeo con éxito de Agilidad. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 33,
                'name' => 'Contraataque',
                'description' => 'Recordando que ‘la mejor defensa es un buen ataque’ respondes a un ataque que te hacen con un contraataque relampagueante. Si tu arma tiene la cualidad Rápida, puedes causar Daño cuando te atacan, como si fuera tu Acción. Puedes Contraatacar tantos ataques por asalto como tu nivel en Contraataque.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 34,
                'name' => 'Corredor',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 35,
                'name' => 'Eres un buen corredor. Tu Atributo de Movimiento cuenta como 1 punto superior cuando Corres.',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 36,
                'name' => 'Cortés',
                'description' => 'Obtienes un bonificador +5 permanente a tu Característica inicial de Empatía (esto no cuenta contra tus Avances).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 37,
                'name' => 'Decidido',
                'description' => 'Eres el epítome de la determinación y de la resolución. Suma tu nivel en Decidido a tu reserva máxima de Resolución. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 38,
                'name' => 'Dedos ágiles',
                'description' => 'Obtienes un bonificador +5 permanente a tu Destreza inicial (esto no cuenta contra tus Avances).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 39,
                'name' => 'Delincuente',
                'description' => 'Eres un delincuente activo que obtiene dinero de fuentes ilícitas, y que no siempre actúa de forma discreta. A efectos de conseguir dinero, o bien en forma de Ganar dinero durante el juego o bien llevando a cabo una Empresa de Salario. A causa de tu naturaleza obviamente delictiva, los demás te consideran de un Estatus inferior al suyo, a menos que también dispongan del Talento Delincuente, en cuyo caso el Estatus se compara de la forma habitual; quizá llevas tatuajes de bandas, tienes un aspecto huidizo o un aspecto tosco, a elección tuya. Debido a ello, las fuerzas de la ley locales siempre sospechan de ti y de tus motivaciones, lo que no hace más que empeorar cuantas más veces has adquirido este Talento, con las implicaciones exactas determinadas por el DJ. Los delincuentes que carecen del Talento ganan significativamente menos, pero no es obvio que sean del tipo que acostumbra a infringir la ley, por lo que mantienen su Estatus. Con el consentimiento del DJ, puedes gastar PX para eliminar niveles del Talento Delincuente por el mismo coste en PX que te costó comprarlos.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 40,
                'name' => 'Denodado',
                'description' => 'No importa lo mal que te vayan las cosas, siempre pareces volver a por más. Puedes intentar un Chequeo de Frialdad para eliminar 1 Estado de Quebrantado al final de cada uno de tus Turnos, así como al final de un Asalto.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 41,
                'name' => 'Desarmar',
                'description' => 'Eres capaz de desarmar a un oponente con un cuidadoso giro de la muñeca o un golpe bien apuntado a su mano. Como acción, puedes intentar un Chequeo Enfrentado de Cuerpo a cuerpo/Cuerpo a cuerpo. Si ganas, tu oponente pierde un arma empuñada, que sale despedida 1d10 pies en una dirección aleatoria (los efectos subsiguientes los determinará el DJ). Si ganas por 2 NE, puedes decidir tú lo lejos que va a parar el arma, en lugar de tirando dados; si ganas por 4 NE, también puedes elegir la dirección en la que sale el arma; si ganas por 6 NE o más, puedes hacerte con el arma de tu oponente si tienes una mano libre, atrapándola en el aire con un floreo. Este Talento es inútil si tu oponente va desarmado o si es de un Tamaño mayor que tú.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 42,
                'name' => 'Desfalcar',
                'description' => 'Eres hábil en sisar dinero a tus jefes sin ser detectado. Siempre que obtienes dinero con Ganar dinero (durante el juego o llevando a cabo una Empresa de Salario) puedes intentar un Chequeo Enfrentado de Inteligencia contra tu jefe (suponiendo que lo tengas). Si ganas, sisas 2d10 + NE peniques de bronce, 1d10 + NE chelines de plata o bien 1 + NE coronas de oro (dependiendo del tamaño del negocio, que determinará el DJ) sin ser detectado. Si tu jefe gana por 6 NE o más, consigues el dinero, pero tu desfalco es detectado; lo que sucede después queda a discreción del DJ. Cualquier otro resultado significa que has fracasado a la hora de embolsarte dinero.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 43,
                'name' => 'Detectar artefacto',
                'description' => 'Eres capaz de notar cuándo hay magia en un artefacto. Puedes intentar un Chequeo de Intuición por cada artefacto mágico tocado. Si tienes éxito, notas que el objeto es mágico; además, cada NE proporciona también una regla especial específica de las que utiliza el objeto, si las hay. Normalmente, sólo puedes intentar este Chequeo una vez por artefacto tocado.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 44,
                'name' => 'Dicción instintiva',
                'description' => 'Comprendes de forma instintiva el idioma de la Magia, y eres capaz de articular rápidamente las frases más complejas sin equivocarte. No sufres una Disfunción mágica si sacas un doble en un Chequeo con éxito de Hablar idioma (magia).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 45,
                'name' => 'Discutidor',
                'description' => 'Estás acostumbrado a discutir tus posiciones y a ganar las
                discusiones. Si consigues un Chequeo de Carisma para debatir
                con un oponente, puedes elegir, o bien utilizar el NE que has
                obtenido o el número que te ha salido en el dado de unidades. Así,
                una tirada con éxito de 24 se podría utilizar para +4 NE.
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 46,
                'name' => 'Disfraz',
                'description' => 'Eres un experto en adoptar la apariencia y los manierismos de otros. Con tan sólo cambios de postura, de expresión facial y un uso cuidadoso de las ropas apropiadas, ya no pareces ser tú mismo sin necesidad de utilizar material de disfraz.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 47,
                'name' => 'Disparo certero',
                'description' => 'Siempre aciertas a un oponente entre los ojos… o en cualquier otra parte a la que apuntas. En lugar de invertir los dados para determinar en qué Ubicación de impacto aciertas con tus armas a distancia, puedes simplemente elegirla.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 48,
                'name' => 'Disparo infalible',
                'description' => 'Eres un tirador excepcional y sabes dónde disparar a un enemigo para causar el máximo de daño. Infliges tu nivel de Disparo infalible en Daño adicional con todas las armas a distancia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 49,
                'name' => 'Disparo rápido',
                'description' => 'Si dispones de un arma a distancia cargada, puedes dispararla fuera del Orden de Iniciativa normal antes de que cualquier otro combatiente reaccione en el Asalto siguiente. Tiras para impactar utilizando los modificadores normales. Utilizar Disparo rápido requiere a la vez tu Acción y tu Movimiento para el siguiente turno, y contarán como gastados cuando llegue. Si dos o más personajes utilizan Disparo rápido, quien ha adquirido más veces el Talento va primero. Si más de un personaje ha adquirido Disparo rápido un número igual de veces, los disparos de todos ellos son simultáneos y se deben resolver al mismo tiempo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 50,
                'name' => 'Disparo seguro',
                'description' => 'Sabes cómo encontrar los puntos débiles en la armadura de un objetivo. Cuando aciertas a un objetivo con un arma A distancia, puedes ignorar tantos puntos de Armadura como tu nivel de Disparo seguro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 51,
                'name' => 'Distraer',
                'description' => 'Estás entrenado en movimientos sencillos para distraer o sobresaltar a tu oponente, desviando su atención de tus verdaderas intenciones. Puedes utilizar tu Movimiento para llevar a cabo una Distracción. Esto se resuelve mediante un Chequeo Enfrentado de Atletismo/Frialdad. Si ganas, tu oponente no puede obtener Ventaja alguna hasta el final del siguiente Asalto.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 52,
                'name' => 'Elaborar',
                'description' => 'Tienes habilidad en elaborar pociones, filtros y bebedizos a la carrera. Puedes llevar a cabo una Empresa de Artesanía gratuita para utilizar Sabiduría académica (boticario) sin necesidad de un Taller. Las demás Empresas de Artesanía utilizan las reglas normales.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 53,
                'name' => 'Empuñar dos armas',
                'description' => 'Cuando empuñas dos armas, puedes atacar con ambas como tu Acción. Tira para impacto con el arma que empuñas en tu mano principal. Si aciertas, determina el Daño de la forma habitual, pero recuerda la tirada de dado, puesto que la usarás de nuevo. Si el primer golpe impacta, una vez se resuelve, el arma de tu mano secundaria ("mano torpe") puede entonces tomar como objetivo a un oponente disponible a tu elección, utilizando la misma tirada de dado del primer golpe, pero invertida. Así pues, si sacaste 34 al impacto con la primera arma, usarás 43 para impactar con la segunda. Recuerda modificar esta segunda tirada con tu penalizador por mano torpe (-20 a menos que dispongas del Talento Ambidiestro). Este segundo ataque es Enfrentado a una nueva tirada de defensa, y el daño que causa se calcula de la forma habitual. La única excepción a lo antedicho es que saques un Crítico en tu primer golpe. En ese caso, utiliza la tirada de la Tabla de Críticos como tirada del segundo ataque. Así pues, si conseguiste un crítico a la cabeza y sacaste un 56 en la Tabla de Críticos para una Herida grave en el  Ojo, tu segundo ataque tendrá un valor de impacto de 56. Si eliges atacar con las dos armas, todas tus tiradas defensivas hasta el inicio de tu siguiente Turno sufrirán un penalizador -10. No obtienes Ventaja cuando atacas con éxito o hieres a un oponente cuando empuñas dos armas si no aciertas con ambos ataques',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 54,
                'name' => 'Entrenado',
                'description' => 'Se te ha entrenado para luchar hombro con hombro con otros soldados. Si un enemigo te hace perder Ventaja cuando estás junto a un aliado activo que también tiene el Talento Entrenado, puedes conservar 1 punto de Ventaja perdido por cada vez que has adquirido el Talento Entrenado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 55,
                'name' => 'Equilibrio en cubierta',
                'description' => 'Estas acostumbrado al movimiento ondulante de los océanos, y es muy poco probable que te marees, incluso en las peores tormentas. En condiciones de mar normales, no necesitas hacer un Chequeo para ver si te mareas. En otras ocasiones (como por ejemplo una tormenta, o un ataque de mareo mágicamente inducido) puedes ignorar cualquier penalizador a los Chequeos para evitar el mareo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 56,
                'name' => 'Equitación acrobática',
                'description' => 'Eres capaz de increíbles muestras de agilidad a caballo. Puedes utilizar cualquiera de tus Habilidades de Interpretar y tu Habilidad de Esquivar no modificada cuando montas a caballo. Además, cuando vas montado, puedes llevar a cabo tu Movimiento al inicio del Asalto en lugar de en tu Turno. ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 57,
                'name' => 'Errante',
                'description' => 'Te encuentras como en casa recorriendo los lugares más salvajes. Cuando utilizas Movimiento silencioso en un entorno rural, los que te rodean no tienen derecho a Chequeos de Percepción pasiva para detectarte; sólo pueden divisarte si están específicamente de vigilancia o buscando espías ocultos.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 58,
                'name' => 'Escalador',
                'description' => 'Eres un escalador excepcional. Puedes intentar escalar superficies aparentemente imposibles como fortificaciones, paredes de hielo, muros enlucidos y cosas similares, ignorando cualquier penalizador a los Chequeos de Escalar derivado de la dificultad de la superficie implicada.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 59,
                'name' => 'Escudero',
                'description' => 'Eres hábil utilizando un escudo para hacer moverse a otros en combate y así sacar partido de una situación desesperada. Cuando utilizas un Escudo para defenderte, obtienes tanta Ventaja como niveles tienes en Escudero si pierdes el Chequeo Enfrentado.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 60,
                'name' => 'Espabilado',
                'description' => 'Obtienes un bonificador +5 permanente a tu Característica de
                Inteligencia inicial (esto no cuenta contra tus Avances).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 61,
                'name' => 'Esquivador',
                'description' => 'Eres hábil en moverte a donde las armas enemigas no llegan. Si utilizas Esquivar para defenderte contra un ataque y ganas el Chequeo Enfrentado, te puedes mover hasta 2 yardas mientras te apartas de un salto, y ya no se te considera Trabado. Ninguno de tus oponentes obtiene un Ataque gratuito cuando lo haces.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 62,
                'name' => 'Etiqueta (grupo social)',
                'description' => 'Podrás mezclarte socialmente con el grupo elegido mientras vayas vestido de la forma adecuada y actúes con propiedad. Los grupos sociales de ejemplo para este Talento son: delincuentes, sectarios, agremiados, nobles, eruditos, sirvientes y soldados. Si no tienes el Talento, quienes sí lo tienen notarán tu incomodidad en un entorno poco familiar. Esto afecta principalmente a la interpretación del personaje, pero si el DJ lo decide puede suponer una bonificación a los Chequeos de Empatía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 63,
                'name' => 'Experto en dados',
                'description' => 'Eres un maestro con los dados, y toda afirmación de que haces trampas está claramente equivocada. Cuando utilizas con éxito Jugar o Prestidigitación en una partida de dados, puedes elegir entre utilizar los NE obtenidos con la tirada de dado o el número que ha salido en el dado de las unidades. Así, una tirada con éxito de 06 se podría utilizar para +6 NE. Si utilizáis cualquier juego de dados de la vida real para representar los juegos de dados de la partida, tiras siempre tantos dados adicionales como tu nivel de Experto en dados y eliges los mejores resultados.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 64,
                'name' => 'Experto en trampas',
                'description' => 'Eres hábil en divisar y utilizar trampas. Puedes llevar a cabo un Chequeo de Percepción para divisar trampas automáticamente sin tener que informar de tus intenciones al DJ; sin embargo, éste podría preferir llevar a cabo algunos de dichos Chequeos por tu cuenta en privado.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 65,
                'name' => 'Fintador',
                'description' => 'Has entrenado cómo llevar a cabo ataques falsos en combate cerrado para engañar a tu oponente. Ahora puedes llevar a cabo una Finta como Acción contra cualquier oponente que utiliza un arma. Esto se resuelve mediante un Chequeo Enfrentado de Cuerpo a cuerpo (esgrima)/Cuerpo a cuerpo. Si ganas y atacas al mismo oponente antes del final del siguiente Asalto, puedes añadir el NE de tu Finta a tu tirada de ataque.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 66,
                'name' => 'Flagelante',
                'description' => 'Has dedicado tu dolor al servicio de tu dios. Cada día, debes invertir media campana (media hora) rezando mientras mantienes un número de Heridas sufridas igual a tu nivel de Flagelante. Hasta la siguiente vez que duermes, si dispones el Talento Furia puedes entrar inmediatamente en Furia sin hacer Chequeo alguno. El Talento Furia se añade a la lista de Talentos de cualquier Carrera en la que estás. Si te olvidas de flagelarte en un día determinado, o permites que tu castigada carne se cure, no puedes gastar Resiliencia ni Resolución hasta que te flagelas de nuevo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 67,
                'name' => 'Francotirador',
                'description' => 'La distancia no importa para tu puntería, y puedes acertar tanto a objetivos lejanos como a cercanos. No sufres penalizador alguno por disparar a alcance Largo, y sólo la mitad de los penalizadores por alcance Extremo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 68,
                'name' => 'Frenesí',
                'description' => 'Eres más capaz de controlar tu Furia en combate. Puedes acabar tu Furia mediante un Chequeo con éxito de Frialdad al final del asalto.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 69,
                'name' => 'Fullero',
                'description' => 'Estás acostumbrado a jugar y a ganar a las cartas, aunque tus métodos pueden implicar alguna que otra trampa. Cuando utilizas con éxito Jugar o Prestidigitación al jugar a cartas, puedes elegir o bien utilizar el NE obtenido, o el número que ha salido en el dado de las unidades. Así, una tirada con éxito de 28 se podría utilizar para +8 NE. Si juegas una partida real de cartas para representar lo que está sucediendo en la partida, puedes obtener un número de cartas adicionales por mano igual a tu nivel de Fullero, y luego descartar las que te sobren hasta tener una mano de la cantidad apropiada antes de cada ronda de juego.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 70,
                'name' => 'Furia',
                'description' => 'Puedes entrar en Furia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 71,
                'name' => 'Gato callejero',
                'description' => 'Te sientes como en casa en los callejones sombríos. Al utilizar Movimiento silencioso (urbano), puedes invertir los dados de  cualquier Chequeo fallido si eso te representa un éxito.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 72,
                'name' => 'Genio aritmético',
                'description' => 'Tienes un don para el cálculo y puedes encontrar con facilidad la solución a muchos problemas matemáticos. Puedes utilizar una simple calculadora para representar de lo que es capaz tu PJ a la hora de calcular mentalmente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 73,
                'name' => 'Giro',
                'description' => 'Chequeos: Cuerpo a cuerpo cuando te defiendes Estás acostumbrado a los combates desesperados, y eres capaz de convertir en Ventaja incluso la más terrible de las circunstancias. Si ganas un Chequeo Enfrentado de Cuerpo a cuerpo, en lugar de obtener +1 Ventaja, puedes llevarte toda la Ventaja actual de tu oponente. Si lo haces, no causas Daño alguno, incluso si es tu Turno en ese Asalto.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 74,
                'name' => 'Golpe conmocionador',
                'description' => 'Sabes dónde pegar a un oponente para tumbarlo rápido. Ignoras el penalizador de ‘Golpe apuntado’ para atacar la Ubicación de impacto Cabeza utilizando un arma cuerpo a cuerpo con la Cualidad Contundente. Además, para ti todas las armas improvisadas cuentan como si tuvieran la Cualidad Contundente.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 75,
                'name' => 'Golpe cuidadoso',
                'description' => 'Tienes habilidad en golpear a tu enemigo exactamente donde quieres, ya sea a distancia o en cuerpo a cuerpo. Puedes modificar el resultado de tu Ubicación de impacto en ± 10 por cada vez que tienes este talento. Así que, si tuvieras este Talento dos veces e impactaras en la Ubicación de impacto 34 (brazo derecho), podrías modificar hacia abajo hasta 14 (brazo izquierdo) o hacia arriba hasta 54 (cuerpo).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 76,
                'name' => 'Golpe de reacción',
                'description' => 'Tus reacciones rápidas te han permitido abatir a muchos oponentes antes de que hayan conseguido siquiera blandir sus armas. Cuando alguien Carga contra ti, puedes intentar de inmediato un Chequeo Desafiante (+0) de Iniciativa para obtener un Ataque gratuito inmediato fuera de la secuencia normal del turno. Este ataque se resolverá con cualquier arma que empuñes en tu mano principal. Podrás llevar a cabo tantos Golpes de reacción en un Asalto como niveles tengas en este Talento, pero sólo podrás atacar una vez a cada individuo que cargue contra ti.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 77,
                'name' => 'Golpe letal',
                'description' => 'Eres un experto en golpear las áreas más vulnerables de tus enemigos. Infliges tu nivel de Golpe letal en forma de Heridas adicionales cuando causas una Herida Crítica.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 78,
                'name' => 'Golpe poderoso',
                'description' => '¡Sabes cómo pegar duro! Aplicas tu nivel de Golpe poderoso en forma de Daño adicional con las armas cuerpo a cuerpo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 79,
                'name' => 'Te han entrenado para propinar golpes controlados al arma de tu oponente, creando una abertura para un ataque, o simplemente evitando un ataque inminente. Como acción, puedes elegir Golpear el filo antes de tirar los dados. Haz un Chequeo de Cuerpo a cuerpo; si tienes éxito, tu oponente se anota -1 Ventaja y un -1 adicional por cada NE que consigues. Este Chequeo no es Enfrentado. Este talento no tiene utilidad si tu oponente no va armado o si su Tamaño es mayor que el tuyo.',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 80,
                'name' => 'Gregario',
                'description' => 'Te gusta hablar con otra gente y parece que a ellos les gusta hablar contigo. Puedes invertir cualquier Chequeo fallido de cotilleo si esto permite que el Chequeo tenga éxito.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 81,
                'name' => 'Guerrero nato',
                'description' => 'Obtienes un bonificador +5 permanente a tu Característica de Habilidad de arma inicial (no cuenta como Avances).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 82,
                'name' => 'Guía fluvial',
                'description' => 'Conoces todos los trucos de navegar por ríos peligrosos. No necesitas hacer un Chequeo para atravesar tramos peligrosos de un río a menos que la Dificultad para hacerlo sea -10 o inferior; tienes éxito de forma automática en todos los Chequeos más fáciles que eso. Además, si dispones de la Habilidad Sabiduría académica (local) apropiada, nunca necesitas hacer Chequeos para navegar por aguas peligrosas; se supone que dominas la ruta por completo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 83,
                'name' => 'Hechicero de guerra',
                'description' => 'Estás entrenado para lanzar magia en el fragor del combate. En tu turno, puedes lanzar un hechizo con un Número de Lanzamiento de 5 o menos de forma gratuita sin utilizar tu Acción. Sin embargo, si lo haces, no puedes lanzar otro hechizo ese turno.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 84,
                'name' => 'Identidad secreta',
                'description' => 'Mantienes una identidad secreta que te permite parecer más rico (o quizás más pobre) de lo que realmente eres. Con permiso del DJ, elige cualquier Carrera. Mientras vayas adecuadamente vestido, podrás utilizar el Estatus social de la Carrera elegida de la que te disfraces como si fuera tuyo a efectos de modificar los Chequeos de Empatía, pudiendo incluso ignorar el Talento Delincuente. Sin embargo, mantener dicha identidad requiere Chequeos de Animar (actuar) cuando te encuentras con quienes son capaces de reconocer tu falsedad. Puedes crear una nueva Identidad secreta por cada nivel que tienes en este Talento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 85,
                'name' => 'Imitador',
                'description' => 'Tienes buen oído para los acentos y los dialectos, y los puedes reproducir de forma precisa. Puedes reproducir cualquier acento con el que has estado en contacto por lo menos un día mediante un Chequeo de Iniciativa; este Chequeo se puede intentar una vez al día. Una vez lo consigues, siempre puedes limitar el acento y los lugareños creen que eres uno de ellos.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 86,
                'name' => 'Imperturbable',
                'description' => 'Eres un veterano curtido, que ha sobrevivido a más de una ráfaga de disparos procedentes de armas de Pólvora negra. Tan sólo necesitas llevar a cabo un Chequeo de Frialdad para resistirte al estado de Quebrantado si resultas herido con éxito por un arma de Pólvora negra, no si simplemente te disparan con ella.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 87,
                'name' => 'Implacable',
                'description' => 'Cuesta bastante acabar contigo. Puedes ignorar las Heridas perdidas debido a un Estado de Sangrando. Cada nivel en este Talento te permite ignorar las Heridas perdidas debido a un Estado de Sangrando adicional.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 88,
                'name' => 'Incansable',
                'description' => 'Cuando has fijado tu mente en un objetivo, no hay nada que nadie pueda hacer para impedirte llegar al mismo. Si usas Ventaja al Destrabarte, puedes guardar un número de Ventajas igual a tu nivel de Incansable. Además, puedes utilizar Ventaja para Destrabarte, incluso si tu Ventaja es menor que la de los oponentes.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 89,
                'name' => 'Inspirador',
                'description' => 'Tus palabras de aliento y tus súplicas pueden cambiar el curso de una batalla. Consulta la tabla siguiente para ver a cuánta gente puedes ahora influenciar con tu Habilidad de Mando en tiempo de guerra.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 90,
                'name' => 'Intelectual',
                'description' => 'Te sientes tan en casa en una biblioteca como un marino en el mar o un granjero en sus tierras. Al Investigar, puedes invertir los dados de cualquier Chequeo fallido si esto te reporta un éxito.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 91,
                'name' => 'Intrépido (enemigo)',
                'description' => 'Eres, o bien lo suficientemente valiente o lo suficientemente insensato como para que el miedo a ciertos enemigos se haya convertido en un recuerdo lejano. Mediante un único Chequeo Normal (+20%) de Frialdad, puedes ignorar cualquier efecto de Intimidar, Miedo o Terror por parte del enemigo especificado cuando te encuentras con él. Los enemigos típicos incluyen hombres bestia, pieles verdes, forajidos, vampiros, vigilantes y brujas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => 92,
                'name' => 'Intrigante',
                'description' => 'Eres un maestro de la política y ves conspiraciones en cada esquina. Una vez por sesión de juego, puedes formular una pregunta al DJ relativa a una situación política o a una red enmarañada de conexiones sociales; éste llevará a cabo en secreto un Chequeo de Inteligencia y te proporcionará algunas observaciones sobre la situación basadas en tu NE',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_talent' => ,
                'name' => '',
                'description' => '',
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
        Schema::dropIfExists('talent');
    }
};