<template>
    <div class="buttons-left buttons-left-2">
        <div class="random_roll">
            <button
                @click="randomChar"
                class="btn btn-primary"
                v-if="visibleButtons"
                :class="{ invisible: !visibleButtons }"
            >
                Car. aleatorias
            </button>
        </div>
        <div class="random_characteristics">
            <button
                @click="throwDice"
                class="btn btn-primary"
                v-if="visibleButtons"
                :class="{ invisible: !visibleButtons }"
            >
                Lanzar dados
            </button>
        </div>
        <div
            class="roll_characteristics"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <div
                v-for="(value, key) in dices"
                :key="key"
                :class="'dice_ ' + key"
                @click="takeDice(key)"
            >
                {{ value }}
            </div>
        </div>
        <div class="career_characteristics">
            <div class="career_characteristics-1 career-1"></div>
            <div class="career_characteristics-2 career-2"></div>
            <div class="career_characteristics-3 career-3"></div>
            <div class="career_characteristics-4 career-4"></div>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {
    getRandomCharFromAPI,
    getThrowDiceFromAPI,
} from "./../../../../services/sectionOne.services";
export default {
    props: {},
    methods: {
        ...mapMutations("Character", ["updateRandomChar", "updateTotalChar"]),
        ...mapMutations("Helper", ["updateThrowDice"]),
        async randomChar() {
            const randomCharFromAPI = await getRandomCharFromAPI();
            this.updateRandomChar(randomCharFromAPI);
            this.updateTotalChar();
            this.modified("ha_imp");
            this.modified("hp_imp");
            this.modified("f_imp");
            this.modified("r_imp");
            this.modified("ini_imp");
            this.modified("ag_imp");
            this.modified("des_imp");
            this.modified("i_imp");
            this.modified("v_imp");
            this.modified("em_imp");
        },
        async throwDice() {
            const throwDiceFromAPI = await getThrowDiceFromAPI();
            this.updateThrowDice(throwDiceFromAPI);
            const diceElements = document.querySelectorAll(".dice");
            diceElements.forEach((element) => {
                element.classList.remove("taked");
            });
        },
        takeDice(divClass) {
            document.querySelector(`.${divClass}`).classList.add("taked");
        },
        modified(name) {
            var inputElements = $("input[name='" + name + "']");
            inputElements.addClass("modified");
            setTimeout(function () {
                inputElements.removeClass("modified");
            }, 2000);
        },
    },
    computed: {
        ...mapState("Helper", ["dices", "current_value", "current_class"]),
        ...mapState("Character", ["race"]),
        visibleButtons() {
            return this.race !== "0";
        },
    },
};
</script>

<style lang="scss">
.buttons-left-2 {
    div {
        height: 30%;
    }
    .roll_characteristics {
        margin-top: 10px;
        div {
            width: 20%;
            height: 48%;
            display: inline-block;
            vertical-align: top;
            text-align: center;
            cursor: pointer;
            button {
                margin-top: 10px;
            }
            &.used {
                background-color: #e27d7d;
            }
        }
        .taked {
            border: 1px solid black;
        }
    }
}
</style>
