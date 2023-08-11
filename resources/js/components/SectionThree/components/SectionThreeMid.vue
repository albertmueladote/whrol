<template>
    <div class="sheet sheet-3">
        <input
            type="text"
            name="endurance"
            :value="characteristics_total.r"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="art"
            :value="characteristics_total.des"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="athletics"
            :value="characteristics_total.ag"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="calm"
            :value="characteristics_total.v"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="charisma"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="animal_charisma"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="melee"
            :value="characteristics_total.ha"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="close_combat"
            :value="characteristics_total.ha"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="drive"
            :value="characteristics_total.ag"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="to_drink_alcohol"
            :value="characteristics_total.r"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="gossip"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="entertain"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />

        <input
            type="text"
            name="climb"
            :value="characteristics_total.f"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="endurance_imp"
            :value="
                (race_basic_abilities.endurance || '') +
                (career_path_basic_abilities.endurance || '')
            "
            disabled
        />
        <input
            type="text"
            name="art_imp"
            :value="
                (race_basic_abilities.art || '') +
                (career_path_basic_abilities.art || '')
            "
            disabled
        />
        <input
            type="text"
            name="athletics_imp"
            :value="
                (race_basic_abilities.athletics || '') +
                (career_path_basic_abilities.athletics || '')
            "
            disabled
        />
        <input
            type="text"
            name="calm_imp"
            :value="
                (race_basic_abilities.calm || '') +
                (career_path_basic_abilities.calm || '')
            "
            disabled
        />
        <input
            type="text"
            name="charisma_imp"
            :value="
                (race_basic_abilities.charisma || '') +
                (career_path_basic_abilities.charisma || '')
            "
            disabled
        />
        <input
            type="text"
            name="animal_charisma_imp"
            :value="
                (race_basic_abilities.animal_charisma || '') +
                (career_path_basic_abilities.animal_charisma || '')
            "
            disabled
        />
        <input
            type="text"
            name="melee_imp"
            :value="
                (race_basic_abilities.melee || '') +
                (career_path_basic_abilities.melee || '')
            "
            disabled
        />
        <input
            type="text"
            name="close_combat_imp"
            :value="
                (race_basic_abilities.close_combat || '') +
                (career_path_basic_abilities.close_combat || '')
            "
            disabled
        />
        <input
            type="text"
            name="drive_imp"
            :value="
                (race_basic_abilities.drive || '') +
                (career_path_basic_abilities.drive || '')
            "
            disabled
        />
        <input
            type="text"
            name="to_drink_alcohol_imp"
            :value="
                (race_basic_abilities.to_drink_alcohol || '') +
                (career_path_basic_abilities.to_drink_alcohol || '')
            "
            disabled
        />
        <input
            type="text"
            name="gossip_imp"
            :value="
                (race_basic_abilities.gossip || '') +
                (career_path_basic_abilities.gossip || '')
            "
            disabled
        />
        <input
            type="text"
            name="entertain_imp"
            :value="
                (race_basic_abilities.entertain || '') +
                (career_path_basic_abilities.entertain || '')
            "
            disabled
        />
        <input
            type="text"
            name="climb_imp"
            :value="
                (race_basic_abilities.climb || '') +
                (career_path_basic_abilities.climb || '')
            "
            disabled
        />
        <input
            type="text"
            name="endurance_hab"
            :value="basic_specializations.list.endurance"
            disabled
        />
        <input
            type="text"
            name="art_hab"
            :value="basic_specializations.list.art"
            disabled
        />
        <input
            type="text"
            name="athletics_hab"
            :value="basic_specializations.list.athletics"
            disabled
        />
        <input
            type="text"
            name="calm_hab"
            :value="basic_specializations.list.calm"
            disabled
        />
        <input
            type="text"
            name="charisma_hab"
            :value="basic_specializations.list.charisma"
            disabled
        />
        <input
            type="text"
            name="animal_charisma_hab"
            :value="basic_specializations.list.animal_charisma"
            disabled
        />
        <input
            type="text"
            name="melee_hab"
            :value="basic_specializations.list.melee"
            disabled
        />
        <input
            type="text"
            name="close_combat_hab"
            :value="basic_specializations.list.close_combat"
            disabled
        />
        <input
            type="text"
            name="drive_hab"
            :value="basic_specializations.list.drive"
            disabled
        />
        <input
            type="text"
            name="to_drink_alcohol_hab"
            :value="basic_specializations.list.to_drink_alcohol"
            disabled
        />
        <input
            type="text"
            name="gossip_hab"
            :value="basic_specializations.list.gossip"
            disabled
        />
        <input
            type="text"
            name="entertain_hab"
            :value="basic_specializations.list.entertain"
            disabled
        />
        <input
            type="text"
            name="climb_hab"
            :value="basic_specializations.list.climb"
            disabled
        />
        <input
            type="text"
            name="dodge"
            :value="characteristics_total.ag"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="intimidate"
            :value="characteristics_total.f"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="intuition"
            :value="characteristics_total.ini"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="play"
            :value="characteristics_total.i"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="leadership"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="mount"
            :value="characteristics_total.ag"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="orientation"
            :value="characteristics_total.ini"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="perception"
            :value="characteristics_total.ini"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="bargain"
            :value="characteristics_total.em"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="row"
            :value="characteristics_total.f"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="stealth"
            :value="characteristics_total.ag"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="bribe"
            :value="characteristics_total.em"
            ata-value="0"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="survival"
            :value="characteristics_total.ini"
            v-if="visibleCharacteristics"
            :class="{ invisible: !visibleCharacteristics }"
            disabled
        />
        <input
            type="text"
            name="dodge_imp"
            :value="
                (race_basic_abilities.dodge || '') +
                (career_path_basic_abilities.dodge || '')
            "
            disabled
        />
        <input
            type="text"
            name="intimidate_imp"
            :value="
                (race_basic_abilities.intimidate || '') +
                (career_path_basic_abilities.intimidate || '')
            "
            disabled
        />
        <input
            type="text"
            name="intuition_imp"
            :value="
                (race_basic_abilities.intuition || '') +
                (career_path_basic_abilities.intuition || '')
            "
            disabled
        />
        <input
            type="text"
            name="play_imp"
            :value="
                (race_basic_abilities.play || '') +
                (career_path_basic_abilities.play || '')
            "
            disabled
        />
        <input
            type="text"
            name="leadership_imp"
            :value="
                (race_basic_abilities.leadership || '') +
                (career_path_basic_abilities.leadership || '')
            "
            disabled
        />
        <input
            type="text"
            name="mount_imp"
            :value="
                (race_basic_abilities.mount || '') +
                (career_path_basic_abilities.mount || '')
            "
            disabled
        />
        <input
            type="text"
            name="orientation_imp"
            :value="
                (race_basic_abilities.orientation || '') +
                (career_path_basic_abilities.orientation || '')
            "
            disabled
        />
        <input
            type="text"
            name="perception_imp"
            :value="
                (race_basic_abilities.perception || '') +
                (career_path_basic_abilities.perception || '')
            "
            disabled
        />
        <input
            type="text"
            name="bargain_imp"
            :value="
                (race_basic_abilities.bargain || '') +
                (career_path_basic_abilities.bargain || '')
            "
            disabled
        />
        <input
            type="text"
            name="row_imp"
            :value="
                (race_basic_abilities.row || '') +
                (career_path_basic_abilities.row || '')
            "
            disabled
        />
        <input
            type="text"
            name="stealth_imp"
            :value="
                (race_basic_abilities.stealth || '') +
                (career_path_basic_abilities.stealth || '')
            "
            disabled
        />
        <input
            type="text"
            name="bribe_imp"
            :value="
                (race_basic_abilities.bribe || '') +
                (career_path_basic_abilities.bribe || '')
            "
            disabled
        />
        <input
            type="text"
            name="survival_imp"
            :value="
                (race_basic_abilities.survival || '') +
                (career_path_basic_abilities.survival || '')
            "
            disabled
        />
        <input
            type="text"
            name="dodge_hab"
            :value="basic_specializations.list.doddge"
            disabled
        />
        <input
            type="text"
            name="intimidate_hab"
            :value="basic_specializations.list.intimidate"
            disabled
        />
        <input
            type="text"
            name="intuition_hab"
            :value="basic_specializations.list.intuition"
            disabled
        />
        <input
            type="text"
            name="play_hab"
            :value="basic_specializations.list.play"
            disabled
        />
        <input
            type="text"
            name="leadership_hab"
            :value="basic_specializations.list.leadership"
            disabled
        />
        <input
            type="text"
            name="mount_hab"
            :value="basic_specializations.list.mount"
            disabled
        />
        <input
            type="text"
            name="orientation_hab"
            :value="basic_specializations.list.orientation"
            disabled
        />
        <input
            type="text"
            name="perception_hab"
            :value="basic_specializations.list.perception"
            disabled
        />
        <input
            type="text"
            name="bargain_hab"
            :value="basic_specializations.list.bargain"
            disabled
        />
        <input
            type="text"
            name="row_hab"
            :value="basic_specializations.list.row"
            disabled
        />
        <input
            type="text"
            name="stealth_hab"
            :value="basic_specializations.list.stealth"
            disabled
        />
        <input
            type="text"
            name="bribe_hab"
            :value="basic_specializations.list.bribe"
            disabled
        />
        <input
            type="text"
            name="survival_hab"
            :value="basic_specializations.list.survival"
            disabled
        />
        <div class="advanced_skills_list">
            <div class="advanced_skill">
                <input
                    type="text"
                    class="advanced_skills_name"
                    name="advanced_skills_name_1"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_skills_characteristics"
                    name="advanced_skills_characteristics_1"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_skills_characteristics_level"
                    name="advanced_skills_characteristics_level_1"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_skills_imp"
                    name="advanced_skills_imp_1"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_skills_hab"
                    name="advanced_skills_hab_1"
                    disabled
                />
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    computed: {
        ...mapState("Character", [
            "race",
            "characteristics_total",
            "race_basic_abilities",
            "career_path_basic_abilities",
            "basic_specializations",
            "characteristics_total",
        ]),
        visibleCharacteristics() {
            return this.race !== "0";
        },
        specializationsCareerpath() {
            return this.basic_specializations.career_path;
        },
        specializationsRace() {
            return this.basic_specializations.race;
        },
        characteristicsTotal() {
            return this.characteristics_total;
        },
    },
};
</script>

<style lang="scss">
input[name="endurance"] {
    top: 56px;
    left: 222px;
    width: 34px;
}

input[name="art"] {
    top: 78px;
    left: 222px;
    width: 34px;
}

input[name="athletics"] {
    top: 100px;
    left: 222px;
    width: 34px;
}

input[name="calm"] {
    top: 122px;
    left: 222px;
    width: 34px;
}

input[name="charisma"] {
    top: 144px;
    left: 222px;
    width: 34px;
}

input[name="animal_charisma"] {
    top: 165px;
    left: 222px;
    width: 34px;
}

input[name="melee"] {
    top: 187px;
    left: 222px;
    width: 34px;
}

input[name="close_combat"] {
    top: 209px;
    left: 222px;
    width: 34px;
}

input[name="drive"] {
    top: 231px;
    left: 222px;
    width: 34px;
}

input[name="to_drink_alcohol"] {
    top: 253px;
    left: 222px;
    width: 34px;
}

input[name="gossip"] {
    top: 275px;
    left: 222px;
    width: 34px;
}

input[name="entertain"] {
    top: 297px;
    left: 222px;
    width: 34px;
}

input[name="climb"] {
    top: 317px;
    left: 222px;
    width: 34px;
}

input[name="endurance_imp"] {
    top: 56px;
    left: 255px;
    width: 28px;
}

input[name="art_imp"] {
    top: 78px;
    left: 255px;
    width: 28px;
}

input[name="athletics_imp"] {
    top: 100px;
    left: 255px;
    width: 28px;
}

input[name="calm_imp"] {
    top: 122px;
    left: 255px;
    width: 28px;
}

input[name="charisma_imp"] {
    top: 144px;
    left: 255px;
    width: 28px;
}

input[name="animal_charisma_imp"] {
    top: 165px;
    left: 255px;
    width: 28px;
}

input[name="melee_imp"] {
    top: 187px;
    left: 255px;
    width: 28px;
}

input[name="close_combat_imp"] {
    top: 209px;
    left: 255px;
    width: 28px;
}

input[name="drive_imp"] {
    top: 231px;
    left: 255px;
    width: 28px;
}

input[name="to_drink_alcohol_imp"] {
    top: 253px;
    left: 255px;
    width: 28px;
}

input[name="gossip_imp"] {
    top: 275px;
    left: 255px;
    width: 28px;
}

input[name="entertain_imp"] {
    top: 297px;
    left: 255px;
    width: 28px;
}

input[name="climb_imp"] {
    top: 317px;
    left: 255px;
    width: 28px;
}

input[name="endurance_hab"] {
    top: 56px;
    left: 282px;
    width: 44px;
}

input[name="art_hab"] {
    top: 78px;
    left: 282px;
    width: 44px;
}

input[name="athletics_hab"] {
    top: 100px;
    left: 282px;
    width: 44px;
}

input[name="calm_hab"] {
    top: 122px;
    left: 282px;
    width: 44px;
}

input[name="charisma_hab"] {
    top: 144px;
    left: 282px;
    width: 44px;
}

input[name="animal_charisma_hab"] {
    top: 165px;
    left: 282px;
    width: 44px;
}

input[name="melee_hab"] {
    top: 187px;
    left: 282px;
    width: 44px;
}

input[name="close_combat_hab"] {
    top: 209px;
    left: 282px;
    width: 44px;
}

input[name="drive_hab"] {
    top: 231px;
    left: 282px;
    width: 44px;
}

input[name="to_drink_alcohol_hab"] {
    top: 253px;
    left: 282px;
    width: 44px;
}

input[name="gossip_hab"] {
    top: 275px;
    left: 282px;
    width: 44px;
}

input[name="entertain_hab"] {
    top: 297px;
    left: 282px;
    width: 44px;
}

input[name="climb_hab"] {
    top: 317px;
    left: 282px;
    width: 44px;
}

input[name="dodge"] {
    top: 56px;
    left: 483px;
    width: 34px;
}

input[name="intimidate"] {
    top: 78px;
    left: 483px;
    width: 34px;
}

input[name="intuition"] {
    top: 100px;
    left: 483px;
    width: 34px;
}

input[name="play"] {
    top: 122px;
    left: 483px;
    width: 34px;
}

input[name="leadership"] {
    top: 144px;
    left: 483px;
    width: 34px;
}

input[name="mount"] {
    top: 165px;
    left: 483px;
    width: 34px;
}

input[name="orientation"] {
    top: 187px;
    left: 483px;
    width: 34px;
}

input[name="perception"] {
    top: 209px;
    left: 483px;
    width: 34px;
}

input[name="bargain"] {
    top: 231px;
    left: 483px;
    width: 34px;
}

input[name="row"] {
    top: 253px;
    left: 483px;
    width: 34px;
}

input[name="stealth"] {
    top: 275px;
    left: 483px;
    width: 34px;
}

input[name="bribe"] {
    top: 297px;
    left: 483px;
    width: 34px;
}

input[name="survival"] {
    top: 317px;
    left: 483px;
    width: 34px;
}

input[name="dodge_imp"] {
    top: 56px;
    left: 516px;
    width: 28px;
}

input[name="intimidate_imp"] {
    top: 78px;
    left: 516px;
    width: 28px;
}

input[name="intuition_imp"] {
    top: 100px;
    left: 516px;
    width: 28px;
}

input[name="play_imp"] {
    top: 122px;
    left: 516px;
    width: 28px;
}

input[name="leadership_imp"] {
    top: 144px;
    left: 516px;
    width: 28px;
}

input[name="mount_imp"] {
    top: 165px;
    left: 516px;
    width: 28px;
}

input[name="orientation_imp"] {
    top: 187px;
    left: 516px;
    width: 28px;
}

input[name="perception_imp"] {
    top: 209px;
    left: 516px;
    width: 28px;
}

input[name="bargain_imp"] {
    top: 231px;
    left: 516px;
    width: 28px;
}

input[name="row_imp"] {
    top: 253px;
    left: 516px;
    width: 28px;
}

input[name="stealth_imp"] {
    top: 275px;
    left: 516px;
    width: 28px;
}

input[name="bribe_imp"] {
    top: 297px;
    left: 516px;
    width: 28px;
}

input[name="survival_imp"] {
    top: 317px;
    left: 516px;
    width: 28px;
}

input[name="dodge_hab"] {
    top: 56px;
    left: 543px;
    width: 44px;
}

input[name="intimidate_hab"] {
    top: 78px;
    left: 543px;
    width: 44px;
}

input[name="intuition_hab"] {
    top: 100px;
    left: 543px;
    width: 44px;
}

input[name="play_hab"] {
    top: 122px;
    left: 543px;
    width: 44px;
}

input[name="leadership_hab"] {
    top: 144px;
    left: 543px;
    width: 44px;
}

input[name="mount_hab"] {
    top: 165px;
    left: 543px;
    width: 44px;
}

input[name="orientation_hab"] {
    top: 187px;
    left: 543px;
    width: 44px;
}

input[name="perception_hab"] {
    top: 209px;
    left: 543px;
    width: 44px;
}

input[name="bargain_hab"] {
    top: 231px;
    left: 543px;
    width: 44px;
}

input[name="row_hab"] {
    top: 253px;
    left: 543px;
    width: 44px;
}

input[name="stealth_hab"] {
    top: 275px;
    left: 543px;
    width: 44px;
}

input[name="bribe_hab"] {
    top: 297px;
    left: 543px;
    width: 44px;
}

input[name="survival_hab"] {
    top: 317px;
    left: 543px;
    width: 44px;
}

.advanced_skills_list {
    position: absolute;
    top: 56px;
    left: 598px;
    width: 271px;
    height: 283px;
    overflow-y: auto;
}

.advanced_skills_list .advanced_skill {
    height: 22px;
}

.advanced_skills_list .advanced_skill .advanced_skills_name {
    height: 22px;
    width: 105px;
}

.advanced_skills_list .advanced_skill .advanced_skills_characteristics {
    left: 106px;
    width: 39px;
    height: 22px;
}

.advanced_skills_list .advanced_skill .advanced_skills_characteristics_level {
    left: 145px;
    width: 34px;
    height: 22px;
}

.advanced_skills_list .advanced_skill .advanced_skills_imp {
    left: 179px;
    width: 27px;
    height: 22px;
}

.advanced_skills_list .advanced_skill .advanced_skills_hab {
    left: 206px;
    width: 47px;
    height: 22px;
}
</style>
