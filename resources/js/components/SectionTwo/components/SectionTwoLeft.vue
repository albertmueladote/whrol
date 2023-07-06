<template>
	<div class="buttons-left buttons-left-2">
        <div class="random_roll"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
        <div class="random_characteristics"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
        <div class="roll_characteristics">
            <div class="roll_ha"></div>
            <div class="roll_hp"></div>
            <div class="roll_f"></div>
            <div class="roll_r"></div>
            <div class="roll_ini"></div>
            <div class="roll_ag"></div>
            <div class="roll_des"></div>
            <div class="roll_i"></div>
            <div class="roll_v"></div>
            <div class="roll_em"></div>
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
    export default {

    }
</script>

<style lang="scss">
    .buttons-left-2 {
        div{
            height: 30%;
        }
        .roll_characteristics {
            margin-top: 10px;
            div {
                width: 20%;
                //height: 30%;
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
        }
    }
</style>