<template>
    <div class="sheet sheet-1">
        <div class="next"></div>
        <input
            type="text"
            maxlength="40"
            name="name"
            onkeydown="return /[a-z ]/i.test(event.key)"
            onblur="if (this.value == '') {this.value = '';}"
            @input="onNameInput"
            :value="name"
        />
        <select name="races" @change="onRaceSelected">
            <option v-for="(race, index) in races" :key="index" :value="index">
                {{ race }}
            </option>
        </select>
        <select
            name="category"
            @change="onCategorySelected"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
        >
            <option
                v-for="(category, index) in categories"
                :key="index"
                :value="index"
            >
                {{ category }}
            </option>
        </select>
        <select
            name="profession"
            @change="onProfessionSelected"
            v-if="visibleProfession"
            :class="{ invisible: !visibleProfession }"
        >
            <option
                v-for="(profession, index) in professions"
                :key="index"
                :value="index"
            >
                {{ profession }}
            </option>
        </select>
        <input
            type="text"
            name="estate"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="previous_professions"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="status"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="age"
            :value="age"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="height"
            :value="height"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="hair"
            :value="hair"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
        <input
            type="text"
            name="eyes"
            :value="eyes"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
            disabled
        />
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    mounted() {},
    methods: {
        ...mapMutations("Character", [
            "updateName",
            "updateRace",
            "updateCategory",
            "updateProfession",
            "updateAge",
            "updateHeight",
            "updateHair",
            "updateEyes",
        ]),
        onRaceSelected(event) {
            this.updateRace(event.target.value);
            this.updateProfession("0");
            this.updateAge("0");
            this.updateHeight("0");
            this.updateHair("");
            this.updateEyes("");
            if (this.currentRace === "0") {
                this.visibleCategory = false;
                this.visibleProfession = false;
            } else {
                if (this.currentCategory !== "0") {
                    this.visibleProfession = true;
                    this.selectedProfession = 0;
                } else {
                    this.visibleProfession = false;
                }
                this.visibleCategory = true;
            }
        },
        onCategorySelected(event) {
            this.updateCategory(event.target.value);
            if (this.currentCategory === "0") {
                this.visibleProfession = false;
            } else {
                this.visibleProfession = true;
            }
        },
        onProfessionSelected(event) {
            this.updateProfession(event.target.value);
        },
        onNameInput(event) {
            const newName = event.target.value;
            this.updateName(newName);
        },
    },
    computed: {
        ...mapState("Character", [
            "name",
            "race",
            "category",
            "profession",
            "age",
            "height",
            "hair",
            "eyes",
        ]),
        currentName() {
            return this.name;
        },
        currentRace() {
            return this.race;
        },
        currentCategory() {
            return this.category;
        },
        currentProfession() {
            return this.profession;
        },
        currentAge() {
            return this.age;
        },
        currentHeight() {
            return this.height;
        },
        currentHair() {
            return this.hair;
        },
        currentEyes() {
            return this.eyes;
        },
    },
    data() {
        var races = {
            0: "-Selecciona raza-",
            1: "Humano",
            2: "Enano",
            3: "Halfing",
            4: "Alto elfo",
            5: "Elfo silvano",
        };
        var categories = {
            0: "-Selecciona clase-",
            1: "Académicos",
            2: "Burgueses",
            3: "Campesinos",
            4: "Cortesanos",
            5: "Guerreros",
            6: "Pícaros",
            7: "Ribereños",
            8: "Rurales",
        };
        var professions = {
            0: "-Selecciona professión-",
            1: "professión 1",
            2: "professión 2",
            3: "professión 3",
        };
        return {
            races,
            categories,
            professions,
            visibleCategory: false,
            visibleProfession: false,
        };
    },
    props: {
        /*
        age: {
            type: Number,
            default: null,
        },
        height: {
            type: Number,
            default: null,
        },
        hair: {
            type: String,
            default: null,
        },
        eyes: {
            type: String,
            default: null,
        },
        */
    },
};
</script>

<style lang="scss">
.next {
    position: absolute;
    width: 100px;
    height: 100px;
    right: 0;
    &::before {
        content: "";
        position: absolute;
        right: 0px;
        top: 0px;
        width: 0;
        height: 0;
        background: linear-gradient(
            45deg,
            white 45%,
            #aaa 50%,
            #ccc 60%,
            white
        );
        transition-duration: 0.3s;
    }

    &:hover::before {
        width: 100px;
        height: 100px;
        cursor: pointer;
    }
}

input[name="name"] {
    top: 141px;
    left: 134px;
    width: 321px;
}

select[name="races"] {
    top: 141px;
    left: 506px;
    width: 147px;
}

select[name="category"] {
    top: 141px;
    left: 695px;
    width: 143px;
}

input[name="profession"],
select[name="profession"] {
    top: 164px;
    left: 135px;
    width: 323px;
}

input[name="estate"] {
    top: 164px;
    left: 525px;
    width: 314px;
}

input[name="previous_professions"] {
    top: 184px;
    left: 202px;
    width: 454px;
}

input[name="status"] {
    top: 184px;
    left: 703px;
    width: 136px;
}

input[name="age"] {
    top: 209px;
    left: 113px;
    width: 158px;
}

input[name="height"] {
    top: 209px;
    left: 315px;
    width: 141px;
}

input[name="hair"] {
    top: 209px;
    left: 542px;
    width: 112px;
}

input[name="eyes"] {
    top: 209px;
    left: 739px;
    width: 100px;
}
</style>
