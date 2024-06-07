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
    getHairFromAPI,
    getEyesFromAPI,
} from "./../../../../services/sectionOne.services";
export default {
    props: {},
    methods: {
        ...mapMutations("Character", [
            "updateAge",
            "updateHeight",
            "updateHair",
            "updateEyes",
            "updateChooseEyes",
        ]),
        async randomAge() {
            const ageFromAPI = await getAgeFromAPI(this.currentRace);
            this.updateAge(ageFromAPI);
            this.modified("age");
        },
        async randomHeight() {
            const heightFromAPI = await getHeightFromAPI(this.currentRace);
            this.updateHeight(heightFromAPI);
            this.modified("height");
        },
        async randomHair() {
            const hairFromAPI = await getHairFromAPI(this.currentRace);
            this.updateHair(hairFromAPI);
            this.modified("hair");
        },
        async randomEyes() {
            const eyesFromAPI = await getEyesFromAPI(this.currentRace);
            this.updateEyes(eyesFromAPI);
            this.modified("eyes");
        },
        modified(name) {
            var inputElements = $("input[name='" + name + "']");
            inputElements.addClass("modified");
            setTimeout(function () {
                inputElements.removeClass("modified");
            }, 2000);
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
        currentHair() {
            return this.hair;
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
