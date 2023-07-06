<template>
	<div class="buttons-right buttons-right-2">
        <div class="content_buttons">
            <div class="destiny_up"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="destiny_down"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="resilience_up"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="resilience_down"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
        </div>
        <div class="content_info">
            <div class="extra_points" data-points="0" data-wasted-resilience="0" data-wasted-destiny="0"></div>
        </div>
    </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss">
    .buttons-right-2 {
        .content_buttons, .content_info{
            display: inline-block;
            vertical-align: top;
            height: 100%;
        }
        .content_buttons {
            width: 87%;
            margin: initial;
            div {
                height: 25%;
                margin-top: 0.5px;
            }
        }

        .content_info{
            width: 13%;
            margin: initial;
            .extra_points {
                border: 1px solid black;
                width: 38px;
                width: 38px;
                margin-top: 57px;
                border-radius: 10px;
                text-align: center;
                line-height: 45px;
                font-size: 2rem;
                margin-left: 5px;
            }
        }
    }
</style>