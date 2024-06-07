<template>
    <div class="sheet sheet-1">
        <section-one-faqs></section-one-faqs>
        <div class="next" @click="nextPage"></div>
        <input type="text" name="name" disabled :value="sheet.name" />
        <input type="text" name="races" disabled :value="sheet.race.name" />
        <input
            type="text"
            name="category"
            disabled
            :value="sheet.category.name"
        />
        <input
            type="text"
            name="profession"
            disabled
            :value="sheet.career_path.name"
        />
        <input type="text" name="estate" disabled />
        <input type="text" name="previous_professions" disabled />
        <input
            type="text"
            name="career_path_status"
            :value="sheet.status"
            disabled
        />
        <input type="text" name="age" :value="sheet.age" disabled />
        <input type="text" name="height" :value="sheet.height" disabled />
        <input type="text" name="hair" :value="sheet.hair.name" disabled />
        <input type="text" name="eyes" :value="sheet.eyes.name" disabled />
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {} from "./../../../../services/sectionOne.services";
export default {
    mounted() {},
    methods: {
        ...mapMutations("Character", []),
    },
    computed: {
        ...mapState("Character", []),
    },
    data() {},
    name: "SheetSectionOneMid",
    props: {
        sheet: {
            type: Object,
            required: true,
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

input[name="races"] {
    top: 141px;
    left: 506px;
    width: 147px;
}

input[name="category"] {
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

input[name="career_path_status"] {
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
