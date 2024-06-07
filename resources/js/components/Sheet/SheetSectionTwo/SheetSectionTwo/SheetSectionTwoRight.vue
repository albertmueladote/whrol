<template>
    <div class="buttons-right buttons-right-2"></div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        ...mapMutations("Character", []),
    },
    computed: {
        ...mapState("Character", []),
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
