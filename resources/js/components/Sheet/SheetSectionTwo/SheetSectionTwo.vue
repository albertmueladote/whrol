<template>
    <div class="section section-2">
        <sheet-section-two-left></sheet-section-two-left>
        <sheet-section-two-mid :sheet="sheet"></sheet-section-two-mid>
        <sheet-section-two-right></sheet-section-two-right>
    </div>
</template>

<script>
export default {
    name: "SheetSectionTwo",
    props: {
        sheet: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss">
.section-2 {
    height: 10rem;
}
</style>
