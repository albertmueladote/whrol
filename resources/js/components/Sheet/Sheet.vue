<template>
    <sheet-page-one :sheet="sheet"></sheet-page-one>
</template>

<script>
export default {
    name: "Sheet",
    props: {
        sheet: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss">
@font-face {
    font-family: ancient;
    src: url("/fonts/jancient.ttf") format("truetype");
}

.container-sheet {
    justify-content: center;
    width: 1320px;
    margin: 0 auto;
    background-size: 920px 1160px;
    background-repeat: no-repeat;
    background-position: center top;
    height: 90vh;

    &.settings {
        height: auto;
        margin-bottom: 10px;
        button {
            margin-left: 5px;
            width: 15%;
            font-size: 1.2rem;
        }
    }

    .faqs {
        font-size: 1.1rem;
        background-color: #f7f7f7;
        opacity: 0.8;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 10;
        display: none;
        color: transparent;
        transition: opacity 0.5s ease-in-out, color 0.5s ease-in-out;
        &:hover {
            opacity: 1;
            color: initial;
            .block {
                overflow: auto;
            }
        }
        .block {
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 10px;
            overflow: hidden;
        }
    }

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
        transition: box-shadow 0.5s ease-in-out;
        :focus {
            border: none;
            outline: none;
        }
        &.modified {
            box-shadow: inset 0 0 10px red;
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
