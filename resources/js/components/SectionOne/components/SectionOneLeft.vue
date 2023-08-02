<template>
    <div class="buttons-left buttons-left-1">
        <div
            class="random_age"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <button
                @click="randomAge"
                class="btn btn-primary"
                v-if="visibleButtons"
                :class="{ invisible: !visibleButtons }"
            >
                Edad aleatoria
            </button>
        </div>
        <div
            class="random_height"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <button @click="randomHeight" class="btn btn-primary">
                Altura aleatoria
            </button>
        </div>
        <div
            class="random_hair"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <button @click="randomHair" class="btn btn-primary">
                Pelo aleatorio
            </button>
        </div>
        <div
            class="random_eyes"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <button @click="randomEyes" class="btn btn-primary">
                Ojos aleatorios
            </button>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {
    getAgeFromAPI,
    getHeightFromAPI,
} from "./../../../services/sectionOne.services";
export default {
    props: {},
    methods: {
        ...mapMutations("Character", [
            "updateAge",
            "updateHeight",
            "updateHair",
            "updateEyes",
        ]),
        async randomAge() {
            const ageFromAPI = await getAgeFromAPI(this.currentRace);
            this.updateAge(ageFromAPI);
        },
        async randomHeight() {
            const heightFromAPI = await getHeightFromAPI(this.currentRace);
            this.updateHeight(heightFromAPI);
        },
        randomHair() {
            let hair = ["negro", "castaño", "rubio"];
            this.updateHair(hair[Math.floor(Math.random() * 3)]);
        },
        randomEyes() {
            let eyes = ["negro", "azul", "verde"];
            this.updateEyes(eyes[Math.floor(Math.random() * 3)]);
        },
    },
    computed: {
        ...mapState("Character", ["race", "age", "height", "hair", "eyes"]),
        visibleButtons() {
            return this.race !== "0";
        },
        currentRace() {
            return this.race;
        },
        currentHeight() {
            return this.height;
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
