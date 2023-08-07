<template>
    <page-one
        ref="page-one"
        :raceSelected="raceSelected"
        :categorySelected="categorySelected"
    ></page-one>
    <page-two></page-two>
</template>

<script>
export default {
    name: "page",
    mounted() {},
};
</script>

<style lang="scss">
@font-face {
    font-family: ancient;
    src: url("/fonts/jancient.ttf") format("truetype");
}

.container-new {
    justify-content: center;
    width: 1320px;
    margin: 0 auto;
    background-size: 920px 1160px;
    background-repeat: no-repeat;
    background-position: center top;
    height: 90vh;

    .section {
        width: 100%;
    }

    input,
    select,
    textarea {
        background-color: transparent;
        border: none;
        text-align: center;
        padding-top: 5px;
        font-size: 1rem;
        :focus {
            border: none;
            outline: none;
        }
    }

    .buttons-left,
    .sheet,
    .buttons-right {
        vertical-align: top;
        display: inline-block;
        height: 100%;
    }

    .buttons-left,
    .buttons-right {
        min-width: 200px;
        max-width: 200px;
        div {
            width: 90%;
            margin: 0 auto;
            button {
                width: 100%;
            }
        }
    }

    .sheet {
        max-width: 920px;
        min-width: 920px;
        position: relative;
        font-family: "ancient", sans-serif !important;
        font-size: 1.3rem !important;
        input,
        select {
            position: absolute;
            height: 22px;
        }
        textarea {
            position: absolute;
        }
    }
}
</style>
