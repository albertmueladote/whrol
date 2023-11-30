<template>
    <div class="buttons-left buttons-left-4">
        <div
            class="random_talents"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <button
                @click="randomTalents"
                class="btn btn-primary"
                v-if="visibleButtons"
                :class="{ invisible: !visibleButtons }"
            >
                Talentos aleatorios
            </button>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";

export default {
    methods: {
        ...mapMutations("Character", [""]),
        async randomTalents() {},
    },
    computed: {
        ...mapState("Character", ["talents"]),
        visibleButtons() {
            return this.talents.random > 0;
        },
    },
};
</script>
