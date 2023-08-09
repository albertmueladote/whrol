<template>
    <div class="buttons-right buttons-right-2">
        <div
            class="content_buttons"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <div class="destiny_up">
                <button class="btn btn-primary" @click="destinyUp">
                    Destino +
                </button>
            </div>
            <div class="destiny_down">
                <button class="btn btn-primary" @click="destinyDown">
                    Destino -
                </button>
            </div>
            <div class="resilience_up">
                <button class="btn btn-primary" @click="resilienceUp">
                    Resilien. +
                </button>
            </div>
            <div class="resilience_down">
                <button class="btn btn-primary" @click="resilienceDown">
                    Resilien. -
                </button>
            </div>
        </div>
        <div
            class="content_info"
            v-if="visibleButtons"
            :class="{ invisible: !visibleButtons }"
        >
            <div class="extra_points">{{ extra }}</div>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        ...mapMutations("Character", [
            "updateDestinyUp",
            "updateDestinyDown",
            "updateResilienceUp",
            "updateResilienceDown",
        ]),
        destinyUp() {
            this.updateDestinyUp();
        },
        destinyDown() {
            this.updateDestinyDown();
        },
        resilienceUp() {
            this.updateResilienceUp();
        },
        resilienceDown() {
            this.updateResilienceDown();
        },
    },
    computed: {
        ...mapState("Character", ["race", "extra"]),
        visibleButtons() {
            return this.race !== "0";
        },
    },
};
</script>

<style lang="scss">
.buttons-right-2 {
    .content_buttons,
    .content_info {
        display: inline-block;
        vertical-align: top;
    }
    .content_buttons {
        width: 100% !important;
        margin-left: 5px !important;
        div {
            height: 25%;
            width: 50%;
            display: inline-block;
            vertical-align: top;
            margin-bottom: 1px;
            button {
                width: 99%;
                margin: 0 auto;
            }
        }
    }

    .content_info {
        width: 100% !important;
        margin-left: 5px !important;
        .extra_points {
            border: 1px solid black;
            width: 38px;
            margin: 5px auto;
            border-radius: 10px;
            text-align: center;
            line-height: 45px;
            font-size: 2rem;
        }
    }
}
</style>
