<template>
    <div class="faqs">
        <div class="column-1">
            <div class="block-1">
                <h3>Características</h3>
                Aquí tenemos las carácterísticas básicas de nuestro personaje.
                <br />
                Las iniciales corresponden a la raza elegida. Las mejoras son
                los aumentos que aplicaremos nosotros al crear el personaje,
                personalizándolo o al subir de nivel durante la partida. <br />
                Actuales es el resultado de la suma de las otras dos filas.
                <br />
                <hr />
                - HA: Habilidad de armas. Lo bueno que eres manejando armas
                cuerpo a cuerpo y la facilidad para golpear a un enemigo. <br />
                <hr />
                - HP: Habilidad de proyectiles. Lo bueno que eres manejando
                armas a distancia y la facilidad para acertar con ellas. <br />
                <hr />
                - F: Fuerza. Tu fuerza física. La potencia con la que golpeas,
                también influye en tu capacidad de cargar cosas, la vida máxima.
                <br />
                <hr />
                - R: Resistencia. Tu resistencia física. La capacidad para
                resistir golpes, también influye en tu capacidad de cargar
                cosas, la vida máxima o resistir heridas y/o enfermedades.<br />
                <hr />
                - I: Iniciativa. Tus reflejos o tiempo de reacción. Influye en
                que turno tienes durante un combate.<br />
                <hr />
                - Ag: Agilidad. Tu agilidad física. Tu capacidad para proezas
                atléticas y tu velocidad.<br />
                <hr />
                - Des: Destreza. Tu habilidad manual para realizar trabajos,
                desde oficios artesanales a juegos de manos con cartas.<br />
                <hr />
                - Int: Inteligencia. La capacidad de deducir cosas o resolver
                misterios. También se usa para lanzar hechizos.<br />
                <hr />
                - V: Voluntad. La capacidad de influir sicológicamente en otros
                o de resistir las influencias sicológicas. También se usa para
                lanzar plegarias.<br />
                <hr />
                - Em: Empatía. La capacidad de caer bien a otros y determina
                como otros te ven. Tu ropa y aspecto influyen. <br />
                <hr />
            </div>
        </div>
        <div class="column-2">
            <div class="block-2">
                <h3>Fortuna y Resilencia</h3>
                - La fortuna nos permite sobrevivir a situaciones que nos
                matarían. En lugar de morir, perdemos un punto de fortuna y nos
                salvamos por los pelos de la muerte segura.<br />
                - El destino indica cuantos puntos de fortuna nos quedan.<br />
                <hr />
                - La resilencia es suerte en menor medida. Después de una tirada
                de dados, podemos gastart un punto de resilencia para volver a
                tirar los dados.<br />
                - La resolución indica cuantos puntos de resilencia nos quedan.
                Se reinician al principio de cada aventura.<br />
                <hr />
                - La motivación es una palabra que define nuestras motivaciones,
                si actuamos en función a ellas durante la partida, podríamos
                ganar puntos de resolución adicionales.
            </div>
            <div class="block-3">
                <h3>Experiencia</h3>
                La experiencia que ganaremos durante la partida.
            </div>
            <div class="block-4">
                <h3>Movimiento</h3>
                Lo que nos movemos en cada turno durante un combate.<br />
                Determinado por la raza.<br />
                - Si andamos, podremos realizar una acción.<br />
                - Si corremos, no podremos realizar una acción.
            </div>
        </div>
    </div>
</template>

<style lang="scss">
.section-2 {
    .column-1 {
        width: 47%;
        display: inline-block;
        vertical-align: top;
        height: 100%;
        .block-1 {
            height: 100%;
            overflow-y: auto;
        }
    }
    .column-2 {
        width: 53%;
        display: inline-block;
        vertical-align: top;
        height: 100%;
        .block-2 {
            width: 62%;
            height: 55%;
            overflow-y: auto;
            display: inline-block;
            vertical-align: top;
        }
        .block-3 {
            width: 38%;
            height: 55%;
            display: inline-block;
            vertical-align: top;
        }
        .block-4 {
            width: 100%;
            height: 55%;
            overflow-y: auto;
            display: inline-block;
            vertical-align: top;
        }
    }
}
</style>
