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
import { saveWithApi } from "./../services/sectionOne.services";
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
    },
};
</script>
<style lang="scss"></style>
