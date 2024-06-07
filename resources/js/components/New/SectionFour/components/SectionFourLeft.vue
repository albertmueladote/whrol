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
        <div class="choose_talent">
            <select
                v-for="(choose, index) in talents.choose"
                :key="index"
                @change="chooseTalent(index, $event)"
            >
                <option value="0">-Selecciona talento-</option>
                <option
                    v-for="option in choose"
                    :key="option"
                    :value="option.id_talent"
                >
                    {{ option.name }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import { getRandomTalentsFromAPI } from "./../../../../services/sectionOne.services";
export default {
    methods: {
        ...mapMutations("Character", [
            "updateRandomTalents",
            "updateChooseTalent",
        ]),
        async randomTalents() {
            const randomTalentsFromAPI = await getRandomTalentsFromAPI(
                this.talents.random_n
            );
            this.updateRandomTalents(randomTalentsFromAPI);
        },
        chooseTalent(group, event) {
            this.updateChooseTalent({
                group: group,
                talent: event.target.value,
            });
        },
    },
    computed: {
        ...mapState("Character", ["talents"]),
        visibleButtons() {
            return this.talents.random_n > 0;
        },
    },
};
</script>
<style lang="scss">
.buttons-left-4 {
    .random_talents {
        margin-top: 150px !important;
    }
    .choose_talent {
        margin-top: 20px !important;
        font-size: 1rem;
        select {
            font-family: ancient;
            width: 100%;
            margin-top: 10px !important;
        }
    }
}
</style>
