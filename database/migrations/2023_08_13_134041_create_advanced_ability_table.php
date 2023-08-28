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
        Schema::create('advanced_ability', function (Blueprint $table) {
            $table->increments('id_advanced_ability');
            $table->string('name', 100);
            $table->unsignedInteger('id_characteristic');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_characteristic')->references('id_characteristic')->on('characteristic')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('advanced_ability')->insert([
            [
                'id_advanced_ability' => 1,
                'name' => 'A distancia',
                'id_characteristic' => 2,
                'description' => 'Si bien cualquiera puede tirar una piedra utilizando simplemente su Habilidad de proyectiles, hacen falta entrenamiento y práctica para utilizar armas como arcos y pistolas. Cada Especialización A distancia es específica para un grupo de armas a distancia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 2,
                'name' => 'Actuar',
                'id_characteristic' => 6,
                'description' => 'Has aprendido un arte físicamente exigente, quizá como forma de ganarte la vida, quizá como artista callejero o como componente de una feria ambulante. Un uso con éxito de la Habilidad Actuar te permite entretener a todos los parroquianos que están suficientemente cerca como para verte y oírte; el NE indica lo bien que lo has hecho. En combate, ciertas especializaciones físicas de Actuar te pueden conceder alguna ventaja. Con permiso de tu DJ, Actuar (acrobacias) se puede utilizar en vez de Esquivar. Otras Habilidades de Actuar pueden resultar útiles para distraer a tus enemigos, concediéndote quizá una Ventaja si se te puede ocurrir una forma creativa de hacerlo. Y algunas habilidades de Actuar se pueden utilizar directamente como armas si dispones de los accesorios adecuados, ¡como por ejemplo Actuar (tragafuegos)!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 3,
                'name' => 'Adiestrar Animales',
                'id_characteristic' => 8,
                'description' => 'Adiestrar animales representa tu comprensión de un tipo de animal en particular y tu capacidad para entrenarlo. Un uso con éxito de la Habilidad te permite identificar las aptitudes Adiestradas que tiene un animal que pertenece a tu Especialización. La Habilidad Adiestrar animales también te permite elegir la Empresa Adiestrar animales entre aventuras. En combate, un Chequeo con éxito Enfrentado de Adiestrar animales/Voluntad te permite intimidar a un solo animal que pertenece a tu Especialización; causas Miedo en el animal objetivo hasta el final de tu siguiente turno. Cuando causas Miedo de esta forma, puedes utilizar subsiguientemente tu Habilidad de Adiestrar animal en lugar de Cuerpo a cuerpo cuando te defiendes contra tu objetivo; con la aprobación de tu DJ también puedes usar Adiestrar animal para atacar a tu objetivo impartiendo órdenes específicas.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 4,
                'name' => 'Canalización',
                'id_characteristic' => 9,
                'description' => 'La habilidad Canalización mide tu capacidad para llamar y controlar a los diversos Vientos de la Magia y solamente se utiliza mediante las reglas de magia. La canalización es una habilidad especial que a la vez es de Grupo, permitiendo Especializaciones, y no lo es para quienes no han sido adecuadamente entrenados para canalizar magia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 5,
                'name' => 'Criar animales',
                'id_characteristic' => 8,
                'description' => 'La Habilidad Criar animales te permite atender y cuidar animales, así como curarlos si caen enfermos o resultan heridos. Tener un solo Avance en Criar animales significa que puedes mantenerlos lo suficientemente sanos sin tener que Chequear. También puedes hacer un Chequeo de Criar animales para identificar y resolver problemas de estos como por ejemplo: Detectar una enfermedad, Entender las razones tras un malhumor o malestar, Preparar al animal para ser exhibido, Detener un estado de Sangrando, Sanar tantas Heridas como tu Bonificador por Inteligencia + NE, Determinar la calidad del animal, etc. En combate, puedes calibrar a un animal enemigo con un Chequeo de Criar animales. Si tienes éxito, todos a quienes informas y tú obtenéis un +10 al impacto al atacar a dicho animal (o a cualquiera que lo usa como montura) hasta el final de tu siguiente turno, al divisar unos arreos mal apretados, una cojera de una antigua herida o cualquiera otra debilidad o vulnerabilidad. Criar animales sólo puede proporcionar un máximo de +10 al impacto por animal, no importa cuántos Chequeos se hagan en busca de debilidades.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 6,
                'name' => 'Forzar cerraduras',
                'id_characteristic' => 7,
                'description' => 'Conoces los mecanismos de las cerraduras y cómo abrirlas sin la llave. Forzar una cerradura es a menudo un Chequeo Prolongado, en el que el número requerido de NE para abrir la cerradura depende de la complejidad de la misma.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 7,
                'name' => 'Hablar idioma',
                'id_characteristic' => 8,
                'description' => 'La Habilidad de Hablar un idioma te concede acceso a idiomas adicionales además de tu lengua natal. Se supone que todos los personajes son capaces de hablar el reiklandés (el idioma del Imperio) y su lengua nativa (si tu personaje tiene una diferente al reiklandés), sin tener que llevar a cabo Chequeo alguno. Si tu partida no está ambientada en el Imperio, reemplaza el reiklandés por el idioma local. Si tienes una Habilidad de Hablar idioma, en general eres capaz de hacerte entender en dicho idioma, o de entender conceptos sencillos. Se te pedirá que Chequees tu Habilidad de Hablar idioma cuando tengas que transmitir un concepto particularmente difícil, o se emplee un dialecto o vocabulario oscuro.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 8,
                'name' => 'Investigar',
                'id_characteristic' => 5,
                'description' => 'Lo fácil que te resulta extraer conocimientos útiles y frecuentemente oscuros de bibliotecas y otros depósitos de información similares. Investigar requiere que dispongas del talento Leer y Escribir. Tener simplemente la Habilidad de Investigar indica que puedes encontrar información directa de una biblioteca bien indexada sin llevar a cabo un Chequeo, si dispones de tiempo suficiente. Si buscas información específica y menos conocida, o tienes prisa, se te requerirá llevar a cabo un Chequeo Prolongado de Investigar, cuya Dificultad vendrá modificada por el tamaño de la biblioteca, y el NE objetivo dependerá de lo oscuro que sea el tema. Investigar apenas tiene uso en combate, excepto quizá para ayudarte a encontrar un manual útil sobre técnicas de manejo de la espada.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 9,
                'name' => 'Lengua secreta',
                'id_characteristic' => 8,
                'description' => 'Te han enseñado el uso de marcas clandestinas, que sólo son inteligibles para los miembros de un selecto grupo. Hay todo tipo de razones por las que alguien querría dejar un mensaje secreto: un vagabundo podría querer indicar qué propietarios de casas son más proclives a dar limosna, un ladrón podría señalar debilidades o posibles objetivos, mientras que un explorador podría querer prevenir a otros de que en las cercanías se encuentra el cubil de un monstruo peligroso. Esta Habilidad no suele requerir de muchos Chequeos y si la tienes puedes descifrar cualquier signo apropiado cuando lo ves. Pero si los signos han sido alterados, se han desgastado o si tienes poco tiempo, lo más probable es que se te requiera un Chequeo. La mayor parte de los mensajes son muy simples, sin más de tres palabras.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 10,
                'name' => 'Nadar',
                'id_characteristic' => 3,
                'description' => 'Tu capacidad para nadar en agua sin ahogarte. Si dispones de la Habilidad Nadar, se supone automáticamente que eres capaz de nadar libremente sin Chequeo alguno. Pero si te encuentras en corrientes fuertes, vas a la carrera o huyes de un tiburón de grandes dimensiones enviado por Stromfels, el Dios del Ahogamiento, se te requerirá un Chequeo. Éste puede verse modificado por el estado del agua, o por lo impedido que estés por tus ropas, tu armadura y otros accesorios. Nadar sólo se utiliza en combate si estás luchando en el agua, donde reemplaza a Habilidades como Atletismo para gobernar el Movimiento. Si se requieren velocidades exactas, nadas a la mitad de tu Movimiento.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 11,
                'name' => 'Navegar',
                'id_characteristic' => 6,
                'description' => 'Tu capacidad para hacer funcionar y maniobrar un bajel de vela, incluyendo saber hacer nudos, manejar el timón, calcular la fuerza del viento y más. Suponiendo que dispongas de una tripulación suficiente y entrenada para tu embarcación, sólo tendrás que utilizar la Habilidad de Navegar cuando debas forzar la nave, o bien haciendo una carrera, sorteando bajíos particularmente peligrosos, luchando contra el mal tiempo o dificultades similares. Navegar con viento suave o pilotar un navío río abajo no requiere Chequeo alguno para quienes tienen esta Habilidad. La Habilidad también se puede utilizar para actividades relacionadas con la náutica, como atar nudos o atar a otros con nudos. Comoquiera que dirigir una nave no es tan diferente de dirigir otra, disponer de cualquier Habilidad de Navegar hace que todas las demás Especialidades de Navegar sean Habilidades Básicas para ti.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 12,
                'name' => 'Oficio',
                'id_characteristic' => 7,
                'description' => 'La mayor parte de la gente en Reikland practica un oficio; incluso los aventureros a menudo tienen una carrera más fiable o respetable a la que recurrir entre episodios de excitación de los que ponen los pelos de punta y aflojan las tripas. La Habilidad Oficio representa tu capacidad para crear algo o proporcionar un servicio, así como tu conocimiento del saber relevante que rodea a tu oficio. Disponer de la Habilidad es suficiente para llevar a cabo de forma automática las tareas asociadas a tu Oficio, suponiendo que tengas los recursos y las herramientas adecuados. Tan solo te hace falta Chequear tu Habilidad de Oficio si buscas crear algo rápidamente, si las condiciones son adversas o si buscas inventar o crear un objeto de gran calidad. A menudo los Chequeos de Oficio de este tipo son Prolongados, con el NE y el tiempo dependiendo del tamaño o de la escala de lo que se quiere conseguir; preparar una comida rápida con Oficio (cocinero) para impresionar a un señor local implicará mucho menos tiempo que construir un buque de guerra con Oficio (carpintero naval). También podrías llevar a cabo un Chequeo de Oficio como si fuera de Sabiduría académica para determinar información relevante al Oficio en cuestión. En semejantes circunstancias, el DJ podría preferir el uso de la Inteligencia a la Destreza como característica base, aunque a menudo esto se ignora para no complicar el juego. Si bien la mayoría de Habilidades de Oficio tienen poca función en el combate, hay tantas como Oficios, y algunas podrían ser útiles dependiendo de las circunstancias. Por ejemplo, un Chequeo con éxito de Oficio (boticario) podría ser útil si estás luchando en una botica al permitirte identificar algunos productos químicos astringentes que lanzar contra tus enemigos. La Habilidad Oficio también se utiliza para llevar a cabo una Empresa de Artesanía.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 13,
                'name' => 'Poner trampas',
                'id_characteristic' => 7,
                'description' => 'Desde un simple lazo o una trampa para osos, hasta ingenios más espectaculares como el Desgarrador de Ladrones de Von Grizzel, es poco probable que los personajes se aventuren mucho tiempo por el Viejo Mundo sin encontrarse con alguna trampa. La Habilidad Poner trampas mide tu aptitud para colocar y desactivar trampas de todo tipo. Se supone que cualquiera con esta Habilidad es capaz de activar y desactivar trampas si se le da tiempo suficiente. Sólo se suele requerir un Chequeo si se intenta utilizar la Habilidad rápidamente o bajo presión, o si la trampa es especialmente compleja. Colocar o desactivar la mayoría de trampas requiere un Chequeo Normal (+20) de Poner trampas, pero los artilugios más complicados pueden requerir un Chequeo Prolongado, requiriendo varios NE a lo largo de múltiples asaltos.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 14,
                'name' => 'Prestidigitación',
                'id_characteristic' => 7,
                'description' => 'Te permite vaciar bolsillos, esconder objetos en la palma de la mano y llevar a cabo trucos menores de prestidigitación, así como hacer trampas en juegos de azar. Esta habilidad funciona típicamente Enfrentada a la Percepción de tu objetivo; un éxito significa que has conseguido esconder el objeto, vaciar el bolsillo o intercambiar las cartas, mientras que un Éxito Marginal (+0 a +1) podría sugerir que tu nefaria actividad ha despertado sospechas en tu oponente. También puedes utilizar la Prestidigitación para ‘ayudar’ a tu Habilidad de Jugar en los juegos de azar apropiados. Antes de cada mano (o similar, dependiendo del juego de que se trate) puedes intentar un Chequeo de Prestidigitación (que será Enfrentado si hay quien sospecha). Si tienes éxito, puedes invertir los dados de tu Chequeo de Jugar para dicho asalto si ello te proporciona un Éxito. Si fallas, tus oponentes no se quedarán cruzados de brazos... La Prestidigitación y el combate no se suelen mezclar, aunque los jugadores con inventiva pueden ser capaces de conjurar una impresionante distracción (si el DJ lo aprueba), obteniendo quizá Ventaja al hacer que una daga aparezca de la nada, sorprendiendo a un enemigo supersticioso.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 15,
                'name' => 'Rezar',
                'id_characteristic' => 10,
                'description' => 'Tu capacidad para invocar o comunicarte de alguna otra forma con un dios. En combate, y si tu DJ lo estima oportuno considerando las circunstancias y tu fe, puedes usar la habilidad de Rezar para meditar y centrar tu mente. Cada asalto que pasas rezando en combate (y consiguiendo un Chequeo de Rezar) te concede +1 Ventaja. De esta forma puedes obtener Ventajas adicionales, hasta un máximo de tu Bonificador por Empatía. Además, si tus enemigos entienden tu idioma y reconocen (y temen) a tu dios, el DJ puede permitirte usar Rezar en lugar de Intimidar.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 16,
                'name' => 'Sabiduría académica',
                'id_characteristic' => 8,
                'description' => 'Tener una habilidad de Sabiduría académica significa que has recibido una educación formal o que has aprendido de alguna otra forma una rama de conocimiento especializado. Hacerlo supone que tienes una amplia comprensión de dicho conocimiento y que no te hace falta un Chequeo para que el DJ te proporcione hechos relevantes. Si buscas información específica y menos conocida, tendrás que hacer un Chequeo de Sabiduría académica, modificado por lo oscura que sea la información, con el NE indicando cuánto detalle recuerdas. En combate, un Chequeo con éxito de Sabiduría académica te puede conceder +1 Ventaja si resulta apropiado (con la aprobación de tu DJ). Por ejemplo, Sabiduría académica (Geología) te puede resultar beneficioso si estás luchando en una caverna rocosa, y Sabiduría académica (Ingeniería) te puede ayudar si te enfrentas a un enemigo armado de un artilugio mecánico complejo. Puedes continuar acumulando Ventaja en turnos subsiguientes, si las circunstancias son adecuadas (a determinar por el DJ) y no se te interrumpe; por este método puedes obtener una Ventaja máxima igual a tu Bonificador por Inteligencia.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 17,
                'name' => 'Sanar',
                'id_characteristic' => 8,
                'description' => 'Has sido adiestrado para ocuparte de heridas y de enfermedades. Un Chequeo con éxito de Sanar te permite hacer una de las siguientes cosas: Diagnosticar una indisposición, infección o enfermedad, Tratar una enfermedad, Curar tantas heridas como tu Bonificador por Inteligencia + NE (Nota: un paciente sólo puede beneficiarse de una tirada de Sanar después de cada encuentro). Si se utilizan líquidos estériles o emplastos y vendajes apropiados, la herida no se infectará, Detener 1 Estado de Sangrando, donde cada uno de los NE permite eliminar 1 Estado adicional de Sangrando. Un Chequeo fallido de Sanar puede causar Heridas potencialmente (en lugar de curarlas) si tu Bonificador por Inteligencia + NE suma menos de 0. Con un Fracaso Asombroso, tu paciente contrae también una Infección leve. Si se administra a alguien que tiene una enfermedad, un Chequeo con éxito de Sanar también asegura que tú no contraes dicha enfermedad ese día. Cada NE impedirá también que un personaje adicional con el que se encuentre el paciente ese día contraiga la enfermedad. Por cada día completo que el paciente pase descansando bajo tus cuidados, la duración de la enfermedad se reducirá en 1, hasta un mínimo de 1. Para más información, consulta Enfermedades e Infecciones en el Capítulo 5: Reglas. Ciertas heridas requieren Cirugía. Tu DJ puede aplicar modificadores a los Chequeos de Sanar para reflejar la virulencia de la enfermedad, la adecuación de los Estados y los materiales, o la tensión de las circunstancias. Si curas durante el combate, es probable que los Chequeos sean Desafiantes (+0) como mínimo.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 18,
                'name' => 'Seguir rastros',
                'id_characteristic' => 5,
                'description' => 'Tu capacidad de seguir sutiles huellas dejadas por los demás. Seguir rastros se utiliza para seguir pistas difíciles a través de las tierras salvajes. Esta habilidad no se utiliza para seguir un juego de huellas de pisadas en la nieve (eso lo cubre un sencillo Chequeo de Percepción); Seguir rastros implica un conocimiento y una consciencia más profundos, utilizados para reconocer los sutiles signos del paso de una presa. También puedes intentar ocultar tu rastro, en cuyo caso utiliza tu Habilidad de Seguir rastros para Enfrentarla al Chequeo de Seguir rastros de tu perseguidor. A menudo hace falta un Chequeo Prolongado de Seguir rastros para conseguir tu objetivo, con la Dificultad modificada por lo recientes que son las huellas y lo adecuado que es el terreno: la tierra húmeda delata el paso mejor que un suelo de piedra. El DJ también puede utilizar las reglas de Perseguir para determinar si consigues seguir el rastro de una presa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 19,
                'name' => 'Tasar',
                'id_characteristic' => 5,
                'description' => 'Te permite determinar el valor de artefactos raros, mercancías poco usuales y obras de arte. Se supone que todo el mundo conoce el valor relativo de las mercancías comunes, pero un uso con éxito de Tasar te permite identificar el valor de los objetos curiosos y únicos. Un Chequeo con éxito de Tasar también te puede alertar de si la mercancía (o la moneda) que estás estudiando es falsa; este Chequeo por lo general será Enfrentado al NE del falsificador en su Chequeo de Arte o de Oficio. Tu DJ puede aplicar modificadores basados en lo raro u oscuro que el objeto es, o en la experiencia o trasfondo particulares de tu personaje.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_advanced_ability' => 20,
                'name' => 'Tocar',
                'id_characteristic' => 7,
                'description' => 'Tu capacidad para interpretar música con un instrumento, es de esperar que lo suficientemente bien como para impresionar a otros. Un Chequeo con éxito de Tocar te permite entretener a los que están lo suficientemente cerca como para verte y oírte; el NE indica la calidad de la obra interpretada.',
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
        Schema::dropIfExists('advanced_ability');
    }
};