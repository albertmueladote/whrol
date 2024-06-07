<template>
    <div class="section section-1">
        <sheet-section-one-left ref="sectionOneLeft"></sheet-section-one-left>
        <sheet-section-one-mid
            :sheet="sheet"
            ref="sectionOneMid"
        ></sheet-section-one-mid>
        <sheet-section-one-right
            ref="sectionOneRight"
        ></sheet-section-one-right>
    </div>
</template>

<script>
export default {
    name: "SheetSectionOne",
    props: {
        sheet: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style lang="scss">
.section-1 {
    height: 15rem;
}
</style>
