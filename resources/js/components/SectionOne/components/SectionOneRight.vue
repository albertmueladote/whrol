<template>
    <div class="buttons-right buttons-right-1">
        <div v-if="raceSelected" :class="{ invisible: !raceSelected }">
            <select name="ages" @change="onAgeSelected" v-model="selectedAge">
                <option value="0">-Selecciona edad-</option>
                <option
                    v-for="ageOption in choose_ages"
                    :key="ageOption"
                    :value="ageOption"
                >
                    {{ ageOption }}
                </option>
            </select>
        </div>
        <div v-if="raceSelected" :class="{ invisible: !raceSelected }">
            <select
                name="heights"
                @change="onHeightSelected"
                v-model="selectedHeight"
            >
                <option value="0">-Selecciona altura-</option>
                <option
                    v-for="heightOption in choose_heights"
                    :key="heightOption"
                    :value="heightOption"
                >
                    {{ heightOption }}
                </option>
            </select>
        </div>
        <div v-if="raceSelected" :class="{ invisible: !raceSelected }">
            <select
                name="hairs"
                @change="onHairSelected"
                v-model="selectedHair"
            >
                <option value="0">-Selecciona pelo-</option>
                <option
                    v-for="hairOption in choose_hairs"
                    :key="hairOption.id_hair"
                    :value="hairOption.id_hair"
                >
                    {{ hairOption.name }}
                </option>
            </select>
        </div>
        <div v-if="raceSelected" :class="{ invisible: !raceSelected }">
            <select name="eyes" @change="onEyesSelected" v-model="selectedEyes">
                <option value="0">-Selecciona ojos-</option>
                <option
                    v-for="eyeOption in choose_eyes"
                    :key="eyeOption.id_eye"
                    :value="eyeOption.id_eye"
                >
                    {{ eyeOption.name }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        ...mapMutations("Character", [
            "updateEyes",
            "updateHair",
            "updateHeight",
            "updateAge",
        ]),
        onEyesSelected(event) {
            this.updateEyes({
                id_eye: event.target.value,
                name: event.target.selectedOptions[0].text,
            });
        },
        onHairSelected(event) {
            this.updateHair({
                id_hair: event.target.value,
                name: event.target.selectedOptions[0].text,
            });
        },
        onHeightSelected(event) {
            this.updateHeight(event.target.value);
        },
        onAgeSelected(event) {
            this.updateAge(event.target.value);
        },
    },
    computed: {
        ...mapState("Character", [
            "age",
            "height",
            "hair",
            "eyes",
            "choose_eyes",
            "race",
            "choose_hairs",
            "choose_heights",
            "choose_ages",
        ]),
        raceSelected() {
            return this.race !== "0";
        },
        selectedAge: {
            get() {
                return this.age.id_age;
            },
        },
        selectedHeight: {
            get() {
                return this.height.id_height;
            },
        },
        selectedHair: {
            get() {
                return this.hair.id_hair;
            },
        },
        selectedEyes: {
            get() {
                return this.eyes.id_eyes;
            },
        },
    },
};
</script>

<style lang="scss">
.buttons-right-1 {
    div {
        height: 25%;
        select {
            font-family: ancient;
            width: 90%;
            margin: 11px auto;
            font-size: 1rem;
        }
    }
}
</style>
