<template>
    <div class="section section-1">
        <section-one-left
            ref="sectionOneLeft"
            :randomAge="randomAge"
            :randomHeight="randomHeight"
            :randomHair="randomHair"
            :randomEyes="randomEyes"
        ></section-one-left>
        <section-one-mid
            ref="sectionOneMid"
            :age="age"
            :height="height"
            :hair="hair"
            :eyes="eyes"
            :raceSelected="raceSelected"
            :categorySelected="categorySelected"
        ></section-one-mid>
        <section-one-right ref="sectionOneRight"></section-one-right>
    </div>
</template>

<script>
export default {
    data() {
        return {
            age: null,
            height: null,
            hair: "",
            eyes: "",
        };
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
.section-1 {
    height: 15rem;
}
</style>
