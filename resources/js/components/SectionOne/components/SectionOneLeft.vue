<template>
    <div class="buttons-left buttons-left-1">
        <div class="random_age" :class="{ invisible: !race }">
            <button @click="randomAge" class="btn btn-primary">
                Edad aleatoria
            </button>
        </div>
        <div class="random_height" :class="{ invisible: !race }">
            <button @click="randomHeight" class="btn btn-primary">
                Altura aleatoria
            </button>
        </div>
        <div class="random_hair" :class="{ invisible: !race }">
            <button @click="randomHair" class="btn btn-primary">
                Pelo aleatorio
            </button>
        </div>
        <div class="random_eyes" :class="{ invisible: !race }">
            <button @click="randomEyes" class="btn btn-primary">
                Ojos aleatorios
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        randomAge: {
            type: Function,
        },
        randomHeight: {
            type: Function,
        },
        randomHair: {
            type: Function,
        },
        randomEyes: {
            type: Function,
        },
    },
    methods: {
        randomAge() {
            this.age = Math.floor(Math.random() * 100) + 1;
        },
        randomHeight() {
            this.height = Math.floor(Math.random() * 210) + 150;
        },
        randomHair() {
            let hair = ["negro", "castaño", "rubio"];
            this.hair = hair[Math.floor(Math.random() * 3)];
        },
        randomEyes() {
            let eyes = ["negro", "azul", "verde"];
            this.eyes = eyes[Math.floor(Math.random() * 3)];
        },
    },
};
</script>

<style lang="scss">
.buttons-left-1 {
    div {
        height: 25%;
        button {
            margin-top: 11.35px;
        }
    }
}
</style>
