<template>
    <div class="buttons-left buttons-left-1">
        <div class="random_age"><button @click="randomAge" class="btn btn-primary" disabled>Selecciona raza</button></div>
        <div class="random_height"><button @click="randomHeight" class="btn btn-primary" disabled>Selecciona raza</button></div>
        <div class="random_hair"><button @click="randomHair" class="btn btn-primary" disabled>Selecciona raza</button></div>
        <div class="random_eyes"><button @click="randomEyes" class="btn btn-primary" disabled>Selecciona raza</button></div>
    </div>      
</template>

<script>
	export default {
		props: {
            randomAge: {
				type: Function,
			},
            randomHeight: {
				type: Function,
			},
            randomHair: {
				type: Function,
			},
            randomEyes: {
				type: Function,
			},
        },
	}
</script>