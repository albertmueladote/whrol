<template>
    <div class="container-new settings">
        <div class="buttons-left"></div>
        <div class="sheet">
            <button class="btn btn-primary" @click="faqs">Instrucciones</button>
            <button class="btn btn-primary">Guardar</button>
        </div>
        <div class="buttons-right"></div>
    </div>
</template>

<script>
export default {
    methods: {
        faqs() {
            $(".faqs").toggle();
        },
    },
};
</script>
<style lang="scss"></style>
