<template>
    <div class="sheet sheet-1">
        <div class="next"></div>
        <input type="text" maxlength="40" name="name" onkeydown="return /[a-z ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}">
        <select name="races" @change="raceSelected">
            <option v-for="(race, index) in races" :key="index" :value="index">
                {{ race }}
            </option>
        </select>
        <select name="category">
		    <option v-for="(category, index) in categories" :key="index" :value="index">
			    {{ category }}
		    </option>
	    </select>
        <input type="text" name="profession" value="Selecciona clase" disabled>
        <input type="text" name="estate" disabled>
        <input type="text" name="previous_professions" disabled>
        <input type="text" name="status" disabled>
        <input type="text" name="age" :value="age" disabled>
        <input type="text" name="height" :value="height" disabled>
        <input type="text" name="hair" :value="hair" disabled>
        <input type="text" name="eyes" :value="eyes" disabled>
    </div>
</template>

<script>
	export default {
        data() {
			var races = {0:"-Selecciona raza-", 1:"Humano",2:"Enano",3:"Halfing",4:"Alto elfo",5:"Elfo silvano"}
			var categories = {0:"-Selecciona clase-", 1:"Académicos",2:"Burgueses",3:"Campesinos",4:"Cortesanos",5:"Guerreros",6:"Pícaros",7:"Ribereños",8:"Rurales"}
            return {
				races,
                categories,
			}
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
	}
</script>