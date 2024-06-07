<template>
    <div class="container-sheet page page-1">
        <sheet-section-one :sheet="sheet"></sheet-section-one>
        <sheet-section-two :sheet="sheet"></sheet-section-two>
    </div>
</template>

<script>
export default {
    name: "SheetPageOne",
    props: {
        sheet: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss">
.page-1 {
    background-image: url("/assets/img/player-1.jpg");
}
</style>
