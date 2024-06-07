<template>
    <div class="sheet sheet-2">
        <section-two-faqs></section-two-faqs>
        <input type="text" name="ha_ini" :value="sheet.ha_ini" disabled />
        <input type="text" name="hp_ini" :value="sheet.hp_ini" disabled />
        <input type="text" name="f_ini" :value="sheet.f_ini" disabled />
        <input type="text" name="r_ini" :value="sheet.r_ini" disabled />
        <input type="text" name="ini_ini" :value="sheet.ini_ini" disabled />
        <input type="text" name="ag_ini" :value="sheet.ag_ini" disabled />
        <input type="text" name="des_ini" :value="sheet.des_ini" disabled />
        <input type="text" name="i_ini" :value="sheet.i_ini" disabled />
        <input type="text" name="v_ini" :value="sheet.v_ini" disabled />
        <input type="text" name="em_ini" :value="sheet.em_ini" disabled />
        <input type="text" name="ha_imp" :value="sheet.ha_imp" disabled />
        <input type="text" name="hp_imp" :value="sheet.hp_imp" disabled />
        <input type="text" name="f_imp" :value="sheet.f_imp" disabled />
        <input type="text" name="r_imp" :value="sheet.r_imp" disabled />
        <input type="text" name="ini_imp" :value="sheet.ini_imp" disabled />
        <input type="text" name="ag_imp" :value="sheet.ag_imp" disabled />
        <input type="text" name="des_imp" :value="sheet.des_imp" disabled />
        <input type="text" name="i_imp" :value="sheet.i_imp" disabled />
        <input type="text" name="v_imp" :value="sheet.v_imp" disabled />
        <input type="text" name="em_imp" :value="sheet.em_imp" disabled />
        <div class="ha_total" @click="diceCharacteristics('ha_total')">
            {{ sheet.ha_ini + sheet.ha_imp }}
        </div>
        <input
            type="text"
            name="hp_total"
            :value="sheet.hp_ini + sheet.hp_imp"
            disabled
        />
        <input
            type="text"
            name="f_total"
            :value="sheet.f_ini + sheet.f_imp"
            disabled
        />
        <input
            type="text"
            name="r_total"
            :value="sheet.r_ini + sheet.r_imp"
            disabled
        />
        <input
            type="text"
            name="ini_total"
            :value="sheet.ini_ini + sheet.ini_imp"
            disabled
        />
        <input
            type="text"
            name="ag_total"
            :value="sheet.ag_ini + sheet.ag_imp"
            disabled
        />
        <input
            type="text"
            name="des_total"
            :value="sheet.des_ini + sheet.des_imp"
            disabled
        />
        <input
            type="text"
            name="i_total"
            :value="sheet.i_ini + sheet.i_imp"
            disabled
        />
        <input
            type="text"
            name="v_total"
            :value="sheet.v_ini + sheet.v_imp"
            disabled
        />
        <input
            type="text"
            name="em_total"
            :value="sheet.em_ini + sheet.em_imp"
            disabled
        />
        <input type="text" name="destiny" :value="sheet.destiny" disabled />
        <input type="text" name="fortune" :value="sheet.fortune" disabled />
        <input
            type="text"
            name="resilience"
            :value="sheet.resilience"
            disabled
        />
        <input
            type="text"
            name="resolution"
            :value="sheet.resolution"
            disabled
        />
        <input
            type="text"
            name="motivation"
            maxlength="10"
            :value="sheet.motivation"
        />
        <input
            type="text"
            name="exp_actual"
            :value="sheet.exp_actual"
            disabled
        />
        <input type="text" name="exp_spent" :value="sheet.exp_spent" disabled />
        <input type="text" name="exp_total" :value="sheet.exp_total" disabled />
        <input type="text" name="movement" :value="sheet.movement" disabled />
        <input type="text" name="walk" :value="sheet.walk" disabled />
        <input type="text" name="run" :value="sheet.run" disabled />
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {} from "./../../../../services/sectionOne.services";
export default {
    mounted() {},
    methods: {
        ...mapMutations("Character", []),
        diceCharacteristics(char) {
            console.log(char);
        },
    },
    computed: {
        ...mapState("Character", []),
    },
    data() {},
    name: "SheetSectionTwoMid",
    props: {
        sheet: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss">
input[name="ha_ini"] {
    top: 58px;
    left: 142px;
    width: 28px;
    height: 29px !important;
}

input[name="hp_ini"] {
    top: 58px;
    left: 170px;
    width: 28px;
    height: 29px !important;
}

input[name="f_ini"] {
    top: 58px;
    left: 198px;
    width: 28px;
    height: 29px !important;
}

input[name="r_ini"] {
    top: 58px;
    left: 226px;
    width: 28px;
    height: 29px !important;
}

input[name="ini_ini"] {
    top: 58px;
    left: 254px;
    width: 28px;
    height: 29px !important;
}

input[name="ag_ini"] {
    top: 58px;
    left: 282px;
    width: 28px;
    height: 29px !important;
}

input[name="des_ini"] {
    top: 58px;
    left: 310px;
    width: 28px;
    height: 29px !important;
}

input[name="i_ini"] {
    top: 58px;
    left: 338px;
    width: 28px;
    height: 29px !important;
}

input[name="v_ini"] {
    top: 58px;
    left: 366px;
    width: 28px;
    height: 29px !important;
}

input[name="em_ini"] {
    top: 58px;
    left: 394px;
    width: 28px;
    height: 29px !important;
}

input[name="ha_imp"] {
    top: 88px;
    left: 143px;
    width: 26px;
    height: 28px !important;
}

input[name="hp_imp"] {
    top: 88px;
    left: 171px;
    width: 26px;
    height: 28px !important;
}

input[name="f_imp"] {
    top: 88px;
    left: 199px;
    width: 26px;
    height: 28px !important;
}

input[name="r_imp"] {
    top: 88px;
    left: 227px;
    width: 26px;
    height: 28px !important;
}

input[name="ini_imp"] {
    top: 88px;
    left: 255px;
    width: 26px;
    height: 28px !important;
}

input[name="ag_imp"] {
    top: 88px;
    left: 283px;
    width: 26px;
    height: 28px !important;
}

input[name="des_imp"] {
    top: 88px;
    left: 311px;
    width: 26px;
    height: 28px !important;
}

input[name="i_imp"] {
    top: 88px;
    left: 339px;
    width: 26px;
    height: 28px !important;
}

input[name="v_imp"] {
    top: 88px;
    left: 367px;
    width: 26px;
    height: 28px !important;
}

input[name="em_imp"] {
    top: 88px;
    left: 395px;
    width: 26px;
    height: 28px !important;
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

.ha_total {
    position: absolute;
    text-align: center;
    top: 117px;
    left: 142px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

.ha_total:hover {
    border: 1px solid black;
}

input[name="hp_total"] {
    top: 117px;
    left: 170px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="hp_total"]:hover {
    border: 1px solid black;
}

input[name="f_total"] {
    top: 117px;
    left: 198px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="f_total"]:hover {
    border: 1px solid black;
}

input[name="r_total"] {
    top: 117px;
    left: 226px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="r_total"]:hover {
    border: 1px solid black;
}

input[name="ini_total"] {
    top: 117px;
    left: 254px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="ini_total"]:hover {
    border: 1px solid black;
}

input[name="ag_total"] {
    top: 117px;
    left: 282px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="ag_total"]:hover {
    border: 1px solid black;
}

input[name="des_total"] {
    top: 117px;
    left: 310px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="des_total"]:hover {
    border: 1px solid black;
}

input[name="i_total"] {
    top: 117px;
    left: 338px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="i_total"]:hover {
    border: 1px solid black;
}

input[name="v_total"] {
    top: 117px;
    left: 366px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="v_total"]:hover {
    border: 1px solid black;
}

input[name="em_total"] {
    top: 117px;
    left: 394px;
    width: 28px;
    height: 29px !important;
    cursor: pointer;
}

input[name="em_total"]:hover {
    border: 1px solid black;
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
