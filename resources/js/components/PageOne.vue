<template>
    <div class="container-new page page-1">
        <section-one
            ref="sectionOne"
            :raceSelected="raceSelected"
            :categorySelected="categorySelected"
        ></section-one>
        <section-two></section-two>
        <section-three></section-three>
        <section-four></section-four>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.page-1 {
    background-image: url("/assets/img/player-1.jpg");
}
</style>
