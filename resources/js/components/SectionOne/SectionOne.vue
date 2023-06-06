<template>
	<div class="section section-1">
        <section-one-left :randomAge="randomAge" :randomHeight="randomHeight" :randomHair="randomHair" :randomEyes="randomEyes"></section-one-left>
        <section-one-mid :age="age" :height="height" :hair="hair" :eyes="eyes" :raceSelected="raceSelected"></section-one-mid>
        <section-one-right></section-one-right>
    </div>
</template>

<script>
  export default {
    data() {
        return {
          age: null,
          height: null,
          hair: '',
          eyes: '',
        };
      },
    methods: {
        randomAge() {
          this.age = Math.floor(Math.random() * 100) + 1;
        },
        randomHeight() {
          this.height = Math.floor(Math.random() * 210) + 150;
        },
        randomHair() {
          let hair = ['negro', 'castaño', 'rubio'];
          this.hair = hair[Math.floor(Math.random() * 3)];
        },
        randomEyes() {
          let eyes = ['negro', 'azul', 'verde'];
          this.eyes = eyes[Math.floor(Math.random() * 3)];
        },
        raceSelected(event) {
          const id_race = event.target.value;
          if (id_race !== 0)
          {
            
          }
        },
    },
  }
</script>