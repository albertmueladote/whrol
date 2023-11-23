<template>
    <div class="sheet sheet-4">
        <section-four-faqs></section-four-faqs>
        <div class="talents_list">
            <div class="talent">
                <input
                    type="text"
                    class="talent_name"
                    name="talent_name_1"
                    disabled
                />
                <input
                    type="text"
                    class="talent_level"
                    data-value="0"
                    name="talent_level_1"
                    disabled
                />
                <input
                    type="text"
                    class="talent_description"
                    name="talent_description_1"
                    disabled
                />
            </div>
        </div>
        <textarea name="self_short_ambitions"></textarea>
        <textarea name="self_long_ambitions"></textarea>
        <input name="group_name" disabled />
        <textarea name="group_short_ambitions" disabled></textarea>
        <textarea name="group_long_ambitions" disabled></textarea>
        <textarea name="group_members" disabled></textarea>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss">
textarea[name="self_short_ambitions"] {
    top: 33px;
    left: 499px;
    width: 358px;
    height: 53px;
    resize: none;
    overflow-y: auto;
    text-align: left;
}

textarea[name="self_long_ambitions"] {
    top: 85px;
    left: 499px;
    width: 358px;
    height: 53px;
    resize: none;
    overflow-y: auto;
    text-align: left;
}

input[name="group_name"] {
    left: 554px;
    top: 185px;
    width: 286px;
}

textarea[name="group_short_ambitions"] {
    top: 209px;
    left: 554px;
    width: 286px;
    height: 50px;
}

textarea[name="group_long_ambitions"] {
    top: 260px;
    left: 554px;
    width: 286px;
    height: 50px;
}

textarea[name="group_members"] {
    top: 310px;
    left: 554px;
    width: 286px;
    height: 42px;
}
</style>
