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
            <div class="dice dice_1" @click="takeDice('dice_1')">
                {{ dice_1 }}
            </div>
            <div class="dice dice_2" @click="takeDice('dice_2')">
                {{ dice_2 }}
            </div>
            <div class="dice dice_3" @click="takeDice('dice_3')">
                {{ dice_3 }}
            </div>
            <div class="dice dice_4" @click="takeDice('dice_4')">
                {{ dice_4 }}
            </div>
            <div class="dice dice_5" @click="takeDice('dice_5')">
                {{ dice_5 }}
            </div>
            <div class="dice dice_6" @click="takeDice('dice_6')">
                {{ dice_6 }}
            </div>
            <div class="dice dice_7" @click="takeDice('dice_7')">
                {{ dice_7 }}
            </div>
            <div class="dice dice_8" @click="takeDice('dice_8')">
                {{ dice_8 }}
            </div>
            <div class="dice dice_9" @click="takeDice('dice_9')">
                {{ dice_9 }}
            </div>
            <div class="dice dice_10" @click="takeDice('dice_10')">
                {{ dice_10 }}
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
} from "./../../../services/sectionOne.services";
export default {
    props: {},
    methods: {
        ...mapMutations("Character", ["updateRandomChar", "updateTotalChar"]),
        ...mapMutations("Helper", ["updateThrowDice"]),
        async randomChar() {
            const randomCharFromAPI = await getRandomCharFromAPI();
            this.updateRandomChar(randomCharFromAPI);
            this.updateTotalChar();
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
    },
    computed: {
        ...mapState("Helper", [
            "dice_1",
            "dice_2",
            "dice_3",
            "dice_4",
            "dice_5",
            "dice_6",
            "dice_7",
            "dice_8",
            "dice_9",
            "dice_10",
            "current_value",
            "current_class",
        ]),
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
