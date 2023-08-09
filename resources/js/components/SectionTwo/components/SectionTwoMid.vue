<template>
    <div class="sheet sheet-2">
        <input
            type="text"
            name="ha_ini"
            :value="ha_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="hp_ini"
            :value="hp_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="f_ini"
            :value="f_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="r_ini"
            :value="r_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="ini_ini"
            :value="ini_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="ag_ini"
            :value="ag_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="des_ini"
            :value="des_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="i_ini"
            :value="i_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="v_ini"
            :value="v_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="em_ini"
            :value="em_ini"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="ha_imp"
            :value="ha_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'ha')"
        />
        <input
            type="text"
            name="hp_imp"
            :value="hp_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'hp')"
        />
        <input
            type="text"
            name="f_imp"
            :value="f_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'f')"
        />
        <input
            type="text"
            name="r_imp"
            :value="r_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'r')"
        />
        <input
            type="text"
            name="ini_imp"
            :value="ini_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'ini')"
        />
        <input
            type="text"
            name="ag_imp"
            :value="ag_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'ag')"
        />
        <input
            type="text"
            name="des_imp"
            :value="des_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'des')"
        />
        <input
            type="text"
            name="i_imp"
            :value="i_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'i')"
        />
        <input
            type="text"
            name="v_imp"
            :value="v_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'v')"
        />
        <input
            type="text"
            :value="em_imp"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            name="em_imp"
            maxlength="2"
            onkeydown="if (event.key === 'Tab' || event.key === 'Backspace' || /[0-9]/.test(event.key)) return true; else event.preventDefault();"
            onblur="if (this.value == '') {this.value = '';}"
            @input="updateTotal($event, 'em')"
        />
        <input
            type="text"
            name="ha_total"
            :value="ha_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="hp_total"
            :value="hp_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="f_total"
            :value="f_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="r_total"
            :value="r_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="ini_total"
            :value="ini_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="ag_total"
            :value="ag_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="des_total"
            :value="des_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="i_total"
            :value="i_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="v_total"
            :value="v_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="em_total"
            :value="em_total"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="destiny"
            :value="destiny"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="fortune"
            :value="fortune"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="resilience"
            :value="resilience"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="resolution"
            :value="resolution"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="motivation"
            maxlength="10"
            v-if="visibleRace"
            onkeydown="return /[a-záéíóúüÁÉÍÓÚÜñÑ ]/i.test(event.key)"
            onblur="if (this.value == '') {this.value = '';}"
            @input="onMotivationInput"
            :class="{ invisible: !visibleRace }"
        />
        <input type="text" name="exp_actual" :value="exp_actual" disabled />
        <input type="text" name="exp_spent" :value="exp_spent" disabled />
        <input type="text" name="exp_total" :value="exp_total" disabled />
        <input
            type="text"
            name="movement"
            :value="movement"
            v-if="visibleRace"
            :class="{ invisible: !visibleRace }"
            disabled
        />
        <input
            type="text"
            name="walk"
            :value="walk"
            v-if="visibleRace"
            disabled
        />
        <input
            type="text"
            name="run"
            :value="run"
            v-if="visibleRace"
            disabled
        />
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        ...mapMutations("Character", [
            "updateMotivation",
            "updateChar",
            "updateTotalChar",
        ]),
        onMotivationInput(event) {
            const newMotivation = event.target.value;
            this.updateMotivation(newMotivation);
        },
        updateTotal($event, char) {
            this.updateChar({ char: char, value: $event.target.value });
            this.updateTotalChar();
        },
    },
    computed: {
        ...mapState("Character", [
            "race",
            "ha_ini",
            "hp_ini",
            "f_ini",
            "r_ini",
            "ini_ini",
            "ag_ini",
            "des_ini",
            "i_ini",
            "v_ini",
            "em_ini",
            "ha_imp",
            "hp_imp",
            "f_imp",
            "r_imp",
            "ini_imp",
            "ag_imp",
            "des_imp",
            "i_imp",
            "v_imp",
            "em_imp",
            "ha_total",
            "hp_total",
            "f_total",
            "r_total",
            "ini_total",
            "ag_total",
            "des_total",
            "i_total",
            "v_total",
            "em_total",
            "destiny",
            "fortune",
            "resilience",
            "resolution",
            "exp_actual",
            "exp_spent",
            "exp_total",
            "movement",
            "walk",
            "run",
        ]),
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
        ]),
        visibleRace() {
            return this.race !== "0";
        },
    },
    data() {},
};
</script>

<style lang="scss">
input[name="ha_ini"] {
    top: 58px;
    left: 142px;
    width: 28px;
    height: 29px;
}

input[name="hp_ini"] {
    top: 58px;
    left: 170px;
    width: 28px;
    height: 29px;
}

input[name="f_ini"] {
    top: 58px;
    left: 198px;
    width: 28px;
    height: 29px;
}

input[name="r_ini"] {
    top: 58px;
    left: 226px;
    width: 28px;
    height: 29px;
}

input[name="ini_ini"] {
    top: 58px;
    left: 254px;
    width: 28px;
    height: 29px;
}

input[name="ag_ini"] {
    top: 58px;
    left: 282px;
    width: 28px;
    height: 29px;
}

input[name="des_ini"] {
    top: 58px;
    left: 310px;
    width: 28px;
    height: 29px;
}

input[name="i_ini"] {
    top: 58px;
    left: 338px;
    width: 28px;
    height: 29px;
}

input[name="v_ini"] {
    top: 58px;
    left: 366px;
    width: 28px;
    height: 29px;
}

input[name="em_ini"] {
    top: 58px;
    left: 394px;
    width: 28px;
    height: 29px;
}

input[name="ha_imp"] {
    top: 88px;
    left: 142px;
    width: 28px;
    height: 29px !important;
}

input[name="hp_imp"] {
    top: 88px;
    left: 170px;
    width: 28px;
    height: 29px !important;
}

input[name="f_imp"] {
    top: 88px;
    left: 198px;
    width: 28px;
    height: 29px !important;
}

input[name="r_imp"] {
    top: 88px;
    left: 226px;
    width: 28px;
    height: 29px !important;
}

input[name="ini_imp"] {
    top: 88px;
    left: 254px;
    width: 28px;
    height: 29px !important;
}

input[name="ag_imp"] {
    top: 88px;
    left: 282px;
    width: 28px;
    height: 29px !important;
}

input[name="des_imp"] {
    top: 88px;
    left: 310px;
    width: 28px;
    height: 29px !important;
}

input[name="i_imp"] {
    top: 88px;
    left: 338px;
    width: 28px;
    height: 29px !important;
}

input[name="v_imp"] {
    top: 88px;
    left: 366px;
    width: 28px;
    height: 29px !important;
}

input[name="em_imp"] {
    top: 88px;
    left: 394px;
    width: 28px;
    height: 29px !important;
}

input.imp_1 {
    background-color: green;
}

input.imp_2 {
    background-color: #664937ed;
}

input.imp_3 {
    background-color: #e5efef;
}

input.imp_4 {
    background-color: #ffe201;
}

input[name="ha_total"] {
    top: 117px;
    left: 142px;
    width: 28px;
    height: 29px;
}

input[name="hp_total"] {
    top: 117px;
    left: 170px;
    width: 28px;
    height: 29px;
}

input[name="f_total"] {
    top: 117px;
    left: 198px;
    width: 28px;
    height: 29px;
}

input[name="r_total"] {
    top: 117px;
    left: 226px;
    width: 28px;
    height: 29px;
}

input[name="ini_total"] {
    top: 117px;
    left: 254px;
    width: 28px;
    height: 29px;
}

input[name="ag_total"] {
    top: 117px;
    left: 282px;
    width: 28px;
    height: 29px;
}

input[name="des_total"] {
    top: 117px;
    left: 310px;
    width: 28px;
    height: 29px;
}

input[name="i_total"] {
    top: 117px;
    left: 338px;
    width: 28px;
    height: 29px;
}

input[name="v_total"] {
    top: 117px;
    left: 366px;
    width: 28px;
    height: 29px;
}

input[name="em_total"] {
    top: 117px;
    left: 394px;
    width: 28px;
    height: 29px;
}

input[name="destiny"] {
    left: 490px;
    top: 35px;
    width: 27px;
}

input[name="fortune"] {
    left: 490px;
    top: 56px;
    width: 27px;
}

input[name="resilience"] {
    left: 537px;
    top: 56px;
    width: 52px;
}

input[name="resolution"] {
    left: 588px;
    top: 56px;
    width: 58px;
}

input[name="motivation"] {
    left: 645px;
    top: 56px;
    width: 57px;
}

input[name="exp_actual"] {
    left: 721px;
    top: 56px;
    width: 43px;
}

input[name="exp_spent"] {
    left: 765px;
    top: 56px;
    width: 43px;
}

input[name="exp_total"] {
    left: 807px;
    top: 56px;
    width: 43px;
}

input[name="movement"] {
    top: 125px;
    left: 530px;
    width: 52px;
}

input[name="walk"] {
    top: 125px;
    left: 659px;
    width: 52px;
}

input[name="run"] {
    top: 125px;
    left: 788px;
    width: 52px;
}
</style>
