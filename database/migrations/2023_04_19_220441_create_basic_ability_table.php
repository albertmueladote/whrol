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
        Schema::create('basic_ability', function (Blueprint $table) {
            $table->increments('id_basic_ability');
            $table->string('name', 100);
            $table->string('label', 100);
            $table->unsignedInteger('id_characteristic');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_characteristic')->references('id_characteristic')->on('characteristic')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('basic_ability')->insert([
            [
                'id_basic_ability' => 1,
                'name' => 'endurance',
                'label' => 'Aguante',
                'id_characteristic' => 4,
                'description' => 'La Habilidad Aguante se utiliza cuando tienes que sobreponerte a dificultades, resistir privaciones, sentarte sin moverte durante largos períodos de tiempo o sobrevivir en entornos hostiles. En particular, el Aguante se Chequea para resistir o recuperarse de diversos Estados y te ayuda a recuperar Heridas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 2,
                'name' => 'entertain',
                'label' => 'Entretener',
                'id_characteristic' => 10,
                'description' => 'Te permite deleitar a las multitudes mediante la palabra hablada, quizás cantando, actuando o incluso explicando unos cuantos chistes. Un uso con éxito de la Habilidad Animar significa que has animado a los parroquianos que están lo suficientemente cerca de ti como para oírte; el NE indica lo bien que lo has hecho. En combate es poco probable que Animar sea muy útil, aunque se te puede ocurrir una forma interesante de utilizar Animar (actuar) para confundir o engañar a tus oponentes.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 3,
                'name' => 'art',
                'label' => 'Arte',
                'id_characteristic' => 7,
                'description' => 'Creas obras de arte en el medio por ti elegido. Carecer de acceso a las Herramientas del oficio apropiadas impone un penalizador a tu Chequeo. El NE conseguido determina la calidad del objeto final. Para obras de arte complicadas o grandes se puede requerir un Chequeo Prolongado. La Habilidad Arte tiene poco uso en combate, pero los bustos de mármol son unas armas improvisadas maravillosas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 4,
                'name' => 'athletics',
                'label' => 'Atletismo',
                'id_characteristic' => 6,
                'description' => 'Tu capacidad de correr, saltar y moverte con rapidez o elegancia, y para llevar a cabo cualquier actividad física en general.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 5,
                'name' => 'charisma',
                'label' => 'Carisma',
                'id_characteristic' => 10,
                'description' => 'El Carisma hace que la gente tenga una idea favorable de ti, de tus opiniones y de las acciones que propones. Conseguir un Chequeo Enfrentado de Carisma/Frialdad te permite influenciar el comportamiento de uno o más objetivos, hasta un número máximo igual a tu Bonificador por Empatía + NE, que afecta primero a quienes tienen la Voluntad más baja. Si un objetivo es proclive a tu Carisma, el Chequeo no es Enfrentado. Tu DJ te puede permitir el uso del Carisma en Combate si cree que tus enemigos pueden ser susceptibles a que ruegues por tu vida o seas capaz de presentar argumentos persuasivos para detener la violencia (¡aunque te deseamos suerte si quieres utilizar el Carisma con un goblin!)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 6,
                'name' => 'animal_charisma',
                'label' => 'Carisma animal',
                'id_characteristic' => 9,
                'description' => 'Es tu aptitud para hacer amistad con los animales, calmarlos rápidamente o subyugarlos. Conseguir un Chequeo de Carisma animal te permite influenciar el comportamiento de uno o más animales, hasta un máximo de tu Bonificador por Voluntad + NE. Si los animales objetivo son dóciles por naturaleza, este Chequeo podría ser no enfrentado, pero en general será Enfrentado a la Voluntad del objetivo. En combate, puedes utilizar Carisma animal al enfrentarte con animales. Si tienes éxito, ningún objetivo afectado te ataca en ese asalto y obtienes +1 Ventaja. Puedes repetirlo en asaltos sucesivos hasta que decides dejar de hacerlo o fallas un Chequeo de Carisma, tras lo cual el instinto de la criatura toma el control y ya no puedes influenciarla.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 7,
                'name' => 'drive',
                'label' => 'Conducir',
                'id_characteristic' => 6,
                'description' => 'Conducir te permitirá guiar vehículos (los más comunes, simples carretas y torpes diligencias, por no mencionar algunas de las creaciones más ‘experimentales’ de los Ingenieros Imperiales) por los caminos del Imperio con tan pocos incidentes como te sea posible. En circunstancias normales, si tienes la Habilidad no te hacen falta Chequeos. Si las condiciones son menos que ideales (quizás la carretera está en mal estado o el tiempo es inclemente) se puede necesitar un Chequeo de Conducir. Si no tienes la Habilidad de Conducir, se te puede requerir un Chequeo incluso para las maniobras más básicas. Un Fracaso Asombroso (-6) en un Chequeo de Conducir significa que algo malo te sucede. Tira en la tabla siguiente: 1-2 Se rompe un arnés: un caballo (o equivalente) se suelta de sus ataduras; reduce la velocidad de forma apropiada. 3-5 El carruaje sufre una sacudida: los pasajeros sufren 1 Herida y los cargamentos frágiles podrían resultar dañados. 6-8 e rompe una rueda: haz un Chequeo de Conducir cada asalto para evitar Estrellarte. Los vehículos de dos ruedas a los que se les rompe una rueda se Estrellan de inmediato. 9-10  Se rompe un eje: el vehículo pierde el control y se Estrella',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 8,
                'name' => 'to_drink_alcohol',
                'label' => 'Beber alcohol',
                'id_characteristic' => 4,
                'description' => 'Tu capacidad para soportar el alcohol sin dejar que nuble tu juicio o te deje inconsciente. Después de cada bebida alcohólica haz un Chequeo de Consumir alcohol, modificado por la potencia de la bebida. Por cada Chequeo que falles, sufrirás un penalizador -10 a HA, HP, Ag, Des e I, hasta un máximo de -30 por Característica. Una vez hayas fallado tantos Chequeos como tu Bonificador por Resistencia estarás borracho como una cuba. Tras no beber durante una hora, haz un Chequeo Desafiante (+0) de Consumir alcohol. Los efectos de estar borracho se pasan al cabo de tantas horas como 10 - NE, y al cabo de ese tiempo se pierden todos los modificadores a las características debidos a estar borracho. Una vez se pasan todos los efectos, haz otro Chequeo Desafiante (+0) de Consumir alcohol. Ahora tienes resaca, que es un Estado de Fatiga que no se puede eliminar hasta que pasan tantas horas como 5 - NE. Puedes gastar 1 punto de Resolución para ignorar los modificadores negativos de estar borracho hasta el final del siguiente asalto. Tira en la siguiente tabla para ver lo que sucede: 1-2 ‘¡El valor de Marienburgo!’: obtienes un 
                    bonificador +20 a tu habilidad Frialdad. 3-4 ‘¡Eresh mi mejjor amigo!’: ignora todos los Prejuicios y Animosidades existentes. 5-6  ‘¿Por qué se mueve todo?’: en tu 
                    turno puedes, o bien Mover, o bien llevar a cabo una Acción, pero no ambas cosas. 7-8 ‘¡Puedo con todos vosotros!’: obtienes Animosidad (¡todo el mundo!). 9-10 ‘¿Cómo
                    he llegado hasta aquí?’: despiertas al día siguiente con una resaca enorme y pocos recuerdos de lo sucedido. El DJ y otros personajes serán capaces de informarte de lo
                    que sucedió durante los embarazosos huecos de tu memoria, si investigas. Consigue un Chequeo de Consumir alcohol o también sufrirás 1 Estado de Envenenado.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 9,
                'name' => 'gossip',
                'label' => 'Cotillear',
                'id_characteristic' => 10,
                'description' => 'Puedes averiguar rápidamente las noticias más interesantes y útiles, y extender rumores propios. Un Chequeo con éxito de Cotilleo significa que has encontrado un fragmento de información útil, que el DJ te puede proporcionar, acerca de la zona en la que estás. Cada NE, o bien te ofrece un fragmento adicional de información o la probabilidad de extender un rumor a tantos individuos como tu Bonificador por Empatía. El tiempo que requiere un Chequeo de Cotilleo depende de lo cautelosos que son los jugadores y de lo bulliciosa que es la zona, a determinar por el DJ. Es poco probable que Cotilleo vea mucho uso en combate, pero si se junta que tu atacante es local y que conoces algo realmente jugoso...',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 10,
                'name' => 'melee',
                'label' => 'Cuerpo a cuerpo',
                'id_characteristic' => 1,
                'description' => 'La Habilidad Cuerpo a cuerpo representa un entrenamiento específico en un solo tipo de armas de combate cerrado. Cada Especialización en Cuerpo a cuerpo indica un entrenamiento en el uso de una clase de arma específica. Si no dispones de la Especialización correcta para un arma que quieres usar, consulta en el Capítulo 11: Guía del consumidor la entrada del arma adecuada para ver los penalizadores que sufres. Consulta el Capítulo 5: Reglas para más detalles acerca del combate y de cómo usar la Habilidad Cuerpo a cuerpo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 11,
                'name' => 'climb',
                'label' => 'Escalar',
                'id_characteristic' => 3,
                'description' => 'La aptitud para ascender por superficies empinadas o verticales. Si el tiempo no apremia y escalar es relativamente fácil, se supone que todo el que tenga esta Habilidad será capaz de escalar una altura razonablemente pequeña. Para cualquier otra escalada, consulta la pág. 165, que también se ocupa de Escalar en combate. Te puedes ver incluso escalando a oponentes grandes, aunque la prudencia de hacerlo es sumamente discutible.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 12,
                'name' => 'dodge',
                'label' => 'Esquivar',
                'id_characteristic' => 6,
                'description' => 'Esquivar es la capacidad de evitar cosas agachándote, tirándote al suelo y moviéndote rápidamente, y se usa extensamente para apartarte del camino de unas piedras que caen, evitar la trayectoria de las armas, sortear trampas inesperadas y cosas similares. En combate, Esquivar se suele usar para resistir ataques o evitar daño.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 13,
                'name' => 'calm',
                'label' => 'Calma',
                'id_characteristic' => 9,
                'description' => 'La Frialdad te permite permanecer tranquilo cuando estás bajo presión, resistir el miedo cuando te enfrentas al horror y aferrarte a tus convicciones. La Frialdad se suele usar para resistir a otras Habilidades (Carisma, Intimidar y parecidas), pero también se puede requerir que hagas un Chequeo de Frialdad al enfrentarte con algo que te intenta obligar a hacer algo que no quieres. La Frialdad es también la Habilidad principal utilizada para limitar la Psicología.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 14,
                'name' => 'intimidate',
                'label' => 'Intimidar',
                'id_characteristic' => 3,
                'description' => 'Te permite coaccionar o asustar a criaturas inteligentes. La forma precisa de iniciar un Chequeo de Intimidar depende del contexto: si bien va generalmente acompañado de una amenaza abierta, a veces basta con una sutil implicación o incluso una mirada. Intimidar es casi siempre una Habilidad Enfrentada a la Frialdad de tu objetivo; si tienes éxito, puedes intimidar tantos objetivos como tu Bonificador por Fuerza + NE. Cada uno reaccionará a Intimidar basándose en su personalidad individual y en el éxito que hayas tenido al amenazarlo pero, en todos los casos, retrocederá, se saldrá del paso sin hacerte frente o, alternativamente, aceptará que el combate es la única forma de resolver el incidente y preparará sus armas.
                    En combate, causas Miedo a todos los objetivos Intimidados. También puedes utilizar tu Habilidad de Intimidar en lugar de Cuerpo a cuerpo cuando te defiendes contra quienes tienen miedo de ti, haciendo que los Intimidados se retiren del área simplemente mediante tu voluntad y tu actitud. Además, con la aprobación de tu DJ, podrías utilizar Intimidar para ‘atacar’ a dichos objetivos, dándoles órdenes específicas del tipo ‘tirad las armas’ o ‘¡largaos de aquí!’. Sin embargo, si fallas en cualquiera de estos Chequeos de Intimidar subsiguientes, ya no Intimidas (o causas Miedo) en los oponentes afectados. Con permiso de tu DJ, puedes intentar Intimidarles de nuevo en un Asalto posterior, pero eso implicará un modificador negativo puesto que es menos probable que te teman una vez hayan calibrado que lo tuyo es mera bravuconería.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 15,
                'name' => 'intuition',
                'label' => 'Intuición',
                'id_characteristic' => 5,
                'description' => 'La Habilidad Intuición te permite hacerte una idea de lo que te rodea, lo que te lleva a darte cuenta de cuándo algo anda mal, además de permitirte adivinar si te están escondiendo algo. Un uso con éxito de la Habilidad Intuición te proporciona información sutil o implícita relativa a tu entorno, determinada por tu DJ. Puede tratarse de información del tipo saber que alguien se cree lo que está diciendo, cuál es la actitud general hacia el noble local o si los motivos de los lugareños solícitos son tan puros como parecen. Si alguien intenta activamente ocultar sus intenciones, puede resistir a tu Intuición con Frialdad o Animar (actuar).En combate, se puede utilizar un Chequeo con éxito de Intuición para concederte +1 Ventaja mientras sopesas el entorno y tus oponentes. Podrás continuar acumulando Ventaja en turnos subsiguientes mientras seas capaz de observar a tus objetivos sin ser interrumpido (es decir, sin ser atacado); de esta forma puedes obtener una ventaja máxima igual a tu Bonificador por Inteligencia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 16,
                'name' => 'play',
                'label' => 'Jugar',
                'id_characteristic' => 8,
                'description' => 'Te permite calcular la probabilidad de que una apuesta resulte ganadora, así como participar con éxito en diversos juegos de azar. Para representar una partida de un juego de azar, todos los jugadores llevan a cabo un Chequeo de Jugar (aplicando cualquier modificador apropiado debido a la familiaridad con dicho juego) y el jugador con el NE más alto gana. En caso de empate, los jugadores con puntuación menor son descartados y los que quedan hacen un nuevo Chequeo de Jugar, repitiendo el proceso hasta tener un ganador.Si quieres influenciar la partida mediante mecánicas menos honestas, consulta Prestidigitación.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 17,
                'name' => 'leadership',
                'label' => 'Liderazgo',
                'id_characteristic' => 10,
                'description' => 'Una medida de tu capacidad para dirigir a otros y ganarte su respeto. Si bien en la mayoría de casos se asocia con situaciones marciales, un líder resuelto puede organizar rápidamente la actuación contra un incendio o a otra calamidad parecida, y los nobles utilizan frecuentemente esta Habilidad para dar órdenes a sus subordinados.Un Chequeo con éxito de Mando te permite dar órdenes a tantos objetivos como tu Bonificador por Empatía más NE. Si los objetivos son subordinados naturales tuyos (un noble dando órdenes a sus siervos, o un sargento dando órdenes a sus tropas), las órdenes no suelen tener oposición. Si no existe jerarquía natural alguna, o si la orden es particularmente desafiante (como por ejemplo ordenar a tus soldados cargar de frente contra una hidra) el Chequeo es Enfrentado a la Frialdad de tu objetivo. En combate, puedes utilizar Mando para animar a tus subordinados. Un Chequeo con éxito de Mando confiere un bonificador +10 a todos los Chequeos de Psicología hasta el final del siguiente asalto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 18,
                'name' => 'mount',
                'label' => 'Montar',
                'id_characteristic' => 6,
                'description' => 'Lo competente que eres montando un tipo de animales en particular; Montar (caballo), por ejemplo, te permite montar caballos, mulas, asnos y similares. Sólo tienes que llevar a cabo un Chequeo si haces algo que se sale de lo ordinario, como correr, hacer doma clásica, atravesar terreno peligroso o cargar al combate. De lo contrario, si tienes por lo menos un Avance en la Habilidad, se supone que eres capaz de ir por ahí sin necesidad de un Chequeo. Si vas a caballo, te mueves utilizando la estadística de Movimiento del mismo; si quieres correr, saltar o pasar por encima de algo, utilizas tu Habilidad de Montar, no el Atletismo. Si corres hacia algún lugar se te puede requerir un Chequeo Prolongado de Montar, donde el NE objetivo depende de la longitud del viaje, y el número de Chequeos indica cuánto tardas en llegar. Un Chequeo de Montar puede verse modificado por las condiciones ambientales y por el temperamento de tu montura. Para más información sobre monturas, consulta el Capítulo 12: Bestiario. La Habilidad de Montar se puede utilizar extensamente en combate.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 19,
                'name' => 'stealth',
                'label' => 'Movimiento silencioso',
                'id_characteristic' => 6,
                'description' => 'Te permite deslizarte en silencio y ocultarte en las sombras con más facilidad que la mayoría. El Movimiento silencioso suele ser Enfrentado a la Habilidad de Percepción de un oponente, y los Chequeos serán modificados según lo oscura o lo bien oculta que esté tu ruta, así como lo discretamente que vayas vestido. Un Fracaso Impresionante o Asombroso en un Chequeo de Movimiento silencioso es muy probable que atraiga la atención inmediata de los enemigos a los que intentabas evitar. El Movimiento silencioso tiene muchas aplicaciones potenciales en combate, sobre todo para ocultarse en preparación a una Emboscada o bien para rodear a un oponente y poderlo atacar desde atrás. Por supuesto, también puedes utilizar la Habilidad para huir de un conflicto sin ser visto.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 20,
                'name' => 'orientation',
                'label' => 'Orientación',
                'id_characteristic' => 5,
                'description' => 'La Orientación te permite circular sin problemas por las tierras salvajes utilizando puntos de referencia, cuerpos celestes o mapas. Tener la Habilidad de Orientación significa que sabes aproximadamente dónde estás, y puedes encontrar el camino entre puntos de referencia conocidos sin necesidad de Chequeo. Sólo se requiere un Chequeo si estás desorientado o te alejas bastante de los senderos más frecuentados, y un éxito te muestra la dirección correcta o te permite evitar contratiempos. Si te orientas en un viaje largo, tu DJ te puede pedir un Chequeo Prolongado de Orientación, modificado por las condiciones actuales, los puntos de referencia visibles y el acceso a información geográfica fiable. El NE requerido para el éxito depende de lo lejos que está el destino, y cada Chequeo representa entre una hora y un día de viaje, dependiendo de la naturaleza del mismo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 21,
                'name' => 'perception',
                'label' => 'Percepción',
                'id_characteristic' => 5,
                'description' => 'Tu capacidad para detectar cosas con los sentidos: vista, oído, olfato, tacto y gusto, así como cualesquiera otros que puedas tener, IVcomo sentidos mágicos o no humanos. Tu DJ puede pedir un Chequeo de Percepción para detectar algo, como un movimiento tras los árboles, la presencia de una trampa o que alguien te sigue, modificado por lo fácil que es darse cuenta de ello. La Percepción también se utiliza para resistir intentos de ocultar cosas mediante Habilidades del tipo Prestidigitación o Movimiento silencioso.La Percepción tiene múltiples usos en combate, los más comunes para darse cuenta de detalles importantes más allá de lo inmediatamente obvio acerca del entorno circundante y tus oponentes, a determinar por el DJ.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 22,
                'name' => 'bargain',
                'label' => 'Regatear',
                'id_characteristic' => 10,
                'description' => 'Regatear te permite conseguir mejores tratos cuando negocias con los demás. En general, se utiliza para ver si consigues o no hacer un buen trato, y lo más común es que sea un Chequeo Enfrentado de Regatear. Específicamente, se puede utilizar mientras compras para obtener mejores precios.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 23,
                'name' => 'row',
                'label' => 'Remar',
                'id_characteristic' => 3,
                'description' => 'Tu pericia en empuñar un remo y mover un bote a través de las aguas. La Habilidad de Remar sólo se suele utilizar cuando se hacen carreras, cuando se atraviesan unos rápidos, cuando se evita desesperadamente a un pulpo de los lodazales o cualquier otra proeza similar, inusual o peligrosa. Se supone que todo el que tiene esta Habilidad es capaz de remar en un estanque o en un río de aguas lentas, sin necesidad de un Chequeo. Quienes carecen de la misma tienen que hacer un Chequeo para cualquier maniobra, excepto las más sencillas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 24,
                'name' => 'bribe',
                'label' => 'Sobornar',
                'id_characteristic' => 10,
                'description' => 'Tu capacidad para juzgar la probabilidad de que una persona acepte un soborno y cuál es la mejor manera de ofrecerlo para que lo acepte. Un Chequeo de Sobornar con éxito te informa de si un objetivo puede ser sobornado. Si es así, tu DJ determinará en secreto el precio de su cooperación utilizando la capacidad de Ganar dinero del objetivo, incrementando la cantidad según su honradez habitual y el riesgo que corre al aceptar el soborno. Después tienes que intentar adivinar la cantidad objetivo y el DJ te dirá si el precio es mayor, menor o igual. Cada NE de tu Chequeo inicial de Sobornar te concede una oportunidad de adivinar. Al final de este proceso, determinas cuánto dinero tienes que ofrecer, basándote en lo que has averiguado. En combate, puedes usar el Soborno como se indica más arriba para intentar que se detenga la pelea, pero trata el Chequeo como Difícil (-20), debido a la tensión del momento. Si tu objetivo no es susceptible, si no tienes para el soborno, o si tus enemigos no hablan tu idioma, tus patéticos intentos de sobornarlos están condenados al fracaso. Por supuesto, si tienen superioridad numérica, ¿qué les impide quedarse con todo tu dinero?',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_basic_ability' => 25,
                'name' => 'survival',
                'label' => 'Supervivencia',
                'id_characteristic' => 8,
                'description' => 'La Habilidad de Supervivencia se utiliza para sobrevivir en las tierras salvajes, incluyendo saber pescar, cazar, forrajear, encender fuego y construir refugios. Los viajeros expertos tienen la habilidad de interpretar los preludios de las inclemencias del tiempo, así como de encontrar el rastro de diversas bestias peligrosas. Al acampar, haz un Chequeo de Supervivencia modificado por la dureza de las condiciones: por ejemplo, un Chequeo es Desafiante (+0) si llueve, y Difícil (-20) en mitad de una tormenta. Un Chequeo con éxito indica que puedes conseguir sustento y abrigo para pasar la noche. Cada NE te permite conseguirlo para otro personaje más. Si el Chequeo falla, tienes que llevar a cabo un Chequeo Desafiante (+0) de Aguante o sufrir 1 Estado de Fatigado. Si sufres un Fracaso asombroso, algo malo ha sucedido (a determinar por el DJ); ¿quizá tu campamento haya sido atacado por la noche?
                        Cuando peleas en las tierras salvajes, puedes llevar a cabo un Chequeo de Supervivencia para obtener +1 Ventaja, de la misma forma que con la Intuición, hasta una Ventaja máxima igual a tu Bonificador por Inteligencia, indicando que descubres un terreno traicionero o ventajoso que podéis usar en vuestro beneficio.',
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
        Schema::dropIfExists('basic_abilites');
    }
};