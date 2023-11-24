<template>
    <div class="faqs">
        <div class="column-1">
            <div class="block block-1">
                <h3>Armaduras</h3>
                Las armaduras que llevas puestas. <br />
                Las propiedades están explicadas en el lado derecho de la
                hoja.<br />
                Cuando te golpeen en una parte del cuerpo que cubra tu armadura,
                el daño se reduce en un punto por cada punto de armadura que
                cubra la parte golpeada.<br />
                Ten en cuenta que si llevas una armadura guardada en lugar de
                equipada, su impedimento de duplica.
            </div>
            <div class="subcolumn-1">
                <div class="block block-2">
                    <h3>Enseres</h3>
                    Los objetos que llevas encima junto a su descripción y al
                    peso.
                </div>
            </div>
            <div class="subcolumn-2">
                <div class="block block-3">
                    <h3>Psicología</h3>
                    Un resumen de la actitud de tu personaje, manías o detalles
                    relevantes de su forma de ser.
                </div>
                <div class="block block-4">
                    <h3>Notas</h3>
                    Aquí puedes anotar lo que quieras, normalmente datos
                    importantes que te ayudarán en la aventura actual. Solo
                    puede utilizarse en el caso de tener el talento "Leer y
                    escribir"
                </div>
                <div class="block block-5">
                    <h3>Riqueza</h3>
                    Tu dinero:<br />
                    - P: Peniques de cobre.<br />
                    - C: Chelines de plata.<br />
                    - CO: Coronas de oro<br />
                    <hr />
                    El sistema es decimal.
                </div>
                <div class="block block-6">
                    <h3>Carga</h3>
                    Esto determina la carga total que puedes cargar y vemos un
                    desglose de la carga actual que llevas y la que aún podrías
                    cargar.
                </div>
            </div>
        </div>
        <div class="column-2">
            <div class="block block-7">
                <h3>Puntos de armadura</h3>
                Aquí puedes ver el total de puntos de armadura que hay en cada
                parte del cuerpo, está determinado por las armaduras que llevas
                equipadas en el apartado Armaduras.
            </div>
            <div class="block block-8">
                <h3>Heridas</h3>
                Aquí puedes ver el total de heridas que tienes y un desglose de
                donde sale esa vida:<br />
                - BF: Bonificación de fuerza.<br />
                - BR: Bonificación de resistencia.<br />
                - BV: Bonificación de voluntad.<br />
                - Recio: El nivel del talento recio, que aumenta la vida
                máxima.<br />
                - Heridas: Las heridas totales, la suma del resto de
                atributos.<br />
                - A la derecha podemos ver el daño recibido actualmente.
            </div>
        </div>
    </div>
</template>

<style lang="scss">
.section-5 {
    .column-1 {
        width: 65%;
        height: 100%;
        display: inline-block;
        vertical-align: top;
        .block-1 {
            width: 100%;
            height: 37%;
        }
        .subcolumn-1 {
            height: 62%;
            width: 56%;
            display: inline-block;
            vertical-align: top;
            .block-2 {
                height: 100%;
                width: 100%;
            }
        }
        .subcolumn-2 {
            width: 44%;
            height: 62%;
            display: inline-block;
            vertical-align: top;
            .block-3 {
                width: 100%;
                height: 27%;
            }
            .block-4 {
                width: 100%;
                height: 27%;
            }
            .block-5 {
                width: 47%;
                height: 46%;
                display: inline-block;
                vertical-align: top;
            }
            .block-6 {
                width: 53%;
                height: 46%;
                display: inline-block;
                vertical-align: top;
            }
        }
    }
    .column-2 {
        width: 35%;
        height: 100%;
        display: inline-block;
        vertical-align: top;
        .block-7 {
            width: 100%;
            height: 70%;
        }
        .block-8 {
            width: 100%;
            height: 29%;
        }
    }
}
</style>
