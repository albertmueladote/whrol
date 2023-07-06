<template>
    <div class="sheet sheet-1">
        <div class="next"></div>
        <input
            type="text"
            maxlength="40"
            name="name"
            onkeydown="return /[a-z ]/i.test(event.key)"
            onblur="if (this.value == '') {this.value = '';}"
        />
        <select name="races" @change="raceSelected">
            <option v-for="(race, index) in races" :key="index" :value="index">
                {{ race }}
            </option>
        </select>
        <select
            name="category"
            @change="categorySelected"
            :class="{ invisible: !visible }"
        >
            <option
                v-for="(category, index) in categories"
                :key="index"
                :value="index"
            >
                {{ category }}
            </option>
        </select>
        <select name="profession" :class="{ invisible: !visible }"></select>
        <input type="text" name="estate" disabled />
        <input type="text" name="previous_professions" disabled />
        <input type="text" name="status" disabled />
        <input type="text" name="age" :value="age" disabled />
        <input type="text" name="height" :value="height" disabled />
        <input type="text" name="hair" :value="hair" disabled />
        <input type="text" name="eyes" :value="eyes" disabled />
    </div>
</template>

<script>
export default {
    mounted() {
        this.visible = false;
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
        return {
            races,
            categories,
            visible: false,
        };
    },
    props: {
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
        raceSelected: {
            type: Function,
        },
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
