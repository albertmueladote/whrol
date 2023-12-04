<template>
    <div class="section section-4">
        <section-four-left></section-four-left>
        <section-four-mid></section-four-mid>
        <section-four-right></section-four-right>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
.section-4 {
    height: 26rem;
    .talents_list {
        height: 270px;
        width: 389px;
        position: absolute;
        top: 75px;
        left: 63px;
        overflow-y: auto;
        .talent {
            width: 372px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid black;
            min-height: 22px;
            .talent_name {
                height: 22px;
                width: 135px;
            }
            .talent_level {
                left: 135px;
                width: 50px;
            }
            .talent_description {
                position: relative;
                left: 185px;
                width: 187px;
                height: auto;
                font-size: 1rem;
                padding: 5px;
            }
        }
    }
}
</style>
