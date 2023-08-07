<template>
    <div class="buttons-right buttons-right-1">
        <div></div>
        <div></div>
        <div></div>
        <div
            v-if="visibleChooseEyes"
            :class="{ invisible: !visibleChooseEyes }"
        >
            <select name="hairs" @change="onHairSelected">
                <option value="0">-Selecciona color-</option>
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
        ...mapMutations("Character", ["updateEyes"]),
        onHairSelected(event) {
            this.updateEyes({
                id_eye: event.target.value,
                name: event.target.selectedOptions[0].text,
            });
        },
    },
    computed: {
        ...mapState("Character", ["eyes", "choose_eyes"]),
        visibleChooseEyes() {
            return this.eyes == "1";
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
            margin: 28px auto;
            font-size: 1rem;
        }
    }
}
</style>
