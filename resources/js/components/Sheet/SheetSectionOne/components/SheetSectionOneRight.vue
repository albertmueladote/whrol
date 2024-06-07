<template>
    <div class="buttons-right buttons-right-1"></div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        ...mapMutations("Character", []),
    },
    computed: {
        ...mapState("Character", []),
        raceSelected() {
            return this.race !== "0";
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
            font-size: 1.1rem;
        }
    }
}
</style>
