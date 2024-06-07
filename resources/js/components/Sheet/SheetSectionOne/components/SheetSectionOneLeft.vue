<template>
    <div class="buttons-left buttons-left-1"></div>
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
.buttons-left-1 {
    div {
        height: 25%;
        button {
            margin-top: 11.35px;
        }
    }
}
</style>
