<template>
    <div class="container-new settings">
        <div class="buttons-left"></div>
        <div class="sheet">
            <button class="btn btn-primary" @click="faqs">Instrucciones</button>
            <button class="btn btn-primary" @click="background">
                Transfondo
            </button>
            <button class="btn btn-primary" @click="save">Guardar</button>
        </div>
        <div class="buttons-right"></div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import { saveWithApi } from "./../../services/sectionOne.services";
export default {
    methods: {
        ...mapMutations("Character", ["getData"]),
        faqs() {
            $(".faqs").toggle();
        },
        background() {
            $(".background").toggleClass("visible");
        },
        async save() {
            await saveWithApi({
                name: this.currentName,
                id_race: this.currentRace,
                id_category: this.currentCategory,
                id_career_path: this.currentProfession,
                status: this.currentCareerPathStatus,
                age: this.currentAge,
                height: this.currentHeight,
                id_hair: this.currentHair,
                id_eyes: this.currentEyes,
                ini: this.currentCharacteristicsIni,
                imp: this.currentCharacteristicsImp,
                destiny: this.currentDestiny,
                fortune: this.currentFortune,
                resilience: this.currentResilience,
                resolution: this.currentResolution,
                motivation: this.currentMotivation,
                exp_actual: 0,
                exp_spent: 0,
                exp_total: 0,
                movement: this.currentMovement,
                walk: this.currentWalk,
                run: this.currentRun,
            });
        },
    },
    computed: {
        ...mapState("Character", [
            "name",
            "race",
            "category",
            "profession",
            "career_path_status",
            "age",
            "height",
            "hair",
            "eyes",
            "characteristics_ini",
            "characteristics_imp",
            "destiny",
            "fortune",
            "resilience",
            "resolution",
            "motivation",
            "movement",
            "walk",
            "run",
        ]),
        currentName() {
            return this.name;
        },
        currentRace() {
            return this.race;
        },
        currentCategory() {
            return this.category;
        },
        currentProfession() {
            return this.profession;
        },
        currentCareerPathStatus() {
            return this.career_path_status;
        },
        currentAge() {
            return this.age.id_age;
        },
        currentHeight() {
            return this.height.id_height;
        },
        currentHair() {
            return this.hair.id_hair;
        },
        currentEyes() {
            return this.eyes.id_eyes;
        },
        currentCharacteristicsIni() {
            return this.characteristics_ini;
        },
        currentCharacteristicsImp() {
            return this.characteristics_imp;
        },
        currentDestiny() {
            return this.destiny;
        },
        currentFortune() {
            return this.fortune;
        },
        currentResilience() {
            return this.resilience;
        },
        currentResolution() {
            return this.resolution;
        },
        currentMotivation() {
            return this.motivation;
        },
        currentMovement() {
            return this.movement;
        },
        currentWalk() {
            return this.walk;
        },
        currentRun() {
            return this.run;
        },
    },
};
</script>
<style lang="scss"></style>
