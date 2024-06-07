<template>
    <div class="buttons-left buttons-left-2">
        <div>
            Para lanzar el dado a partir de una característica, pincha en la
            característica en cuestión en la fila "Actuales"
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {} from "./../../../../services/sectionOne.services";
export default {
    props: {},
    methods: {
        ...mapMutations("Character", []),
    },
    computed: {
        ...mapState("Character", []),
    },
};
</script>

<style lang="scss">
.buttons-left-2 {
    div {
        height: auto;
        margin-top: 15% !important;
    }
}
</style>
