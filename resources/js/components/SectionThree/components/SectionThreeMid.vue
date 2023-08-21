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
        <select name="endurance_hab">
            <option
                v-for="(value, index) in basic_specializations.list.endurance"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="art_hab">
            <option
                v-for="(value, index) in basic_specializations.list.art"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="athletics_hab">
            <option
                v-for="(value, index) in basic_specializations.list.athletics"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="calm_hab">
            <option
                v-for="(value, index) in basic_specializations.list.calm"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="charisma_hab">
            <option
                v-for="(value, index) in basic_specializations.list.charisma"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="animal_charisma_hab">
            <option
                v-for="(value, index) in basic_specializations.list
                    .animal_charisma"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="melee_hab" @change="updateInputValue">
            <option
                v-for="(value, index) in basic_specializations.list.melee"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="close_combat_hab">
            <option
                v-for="(value, index) in basic_specializations.list
                    .close_combat"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="drive_hab">
            <option
                v-for="(value, index) in basic_specializations.drive"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="to_drink_alcohol_hab">
            <option
                v-for="(value, index) in basic_specializations.list
                    .to_drink_alcohol"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="gossip_hab">
            <option
                v-for="(value, index) in basic_specializations.list.gossip"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="entertain_hab">
            <option
                v-for="(value, index) in basic_specializations.list.entertain"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="climb_hab">
            <option
                v-for="(value, index) in basic_specializations.list.climb"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
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
        <select name="dodge_hab">
            <option
                v-for="(value, index) in basic_specializations.list.dodge"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="intimidate_hab">
            <option
                v-for="(value, index) in basic_specializations.list.intimidate"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="intuition_hab">
            <option
                v-for="(value, index) in basic_specializations.list.intuition"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="play_hab">
            <option
                v-for="(value, index) in basic_specializations.list.play"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="leadership_hab">
            <option
                v-for="(value, index) in basic_specializations.list.leadership"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="mount_hab">
            <option
                v-for="(value, index) in basic_specializations.list.mount"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="orientation_hab">
            <option
                v-for="(value, index) in basic_specializations.list.orientation"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="perception_hab">
            <option
                v-for="(value, index) in basic_specializations.list.perception"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="bargain_hab">
            <option
                v-for="(value, index) in basic_specializations.list.bargain"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="row_hab">
            <option
                v-for="(value, index) in basic_specializations.list.row"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="stealth_hab">
            <option
                v-for="(value, index) in basic_specializations.list.stealth"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="bribe_hab">
            <option
                v-for="(value, index) in basic_specializations.list.bribe"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <select name="survival_hab">
            <option
                v-for="(value, index) in basic_specializations.list.survival"
                :key="index"
                :value="value"
            >
                {{ index }}
            </option>
        </select>
        <div class="advanced_characteristics_list">
            <div
                class="advanced_characteristic"
                v-for="(advanced_ability, index) in race_advanced_abilities"
                :key="index"
            >
                <input
                    type="text"
                    class="advanced_characteristics_name"
                    :name="
                        'advanced_characteristics_name_' + transformIndex(index)
                    "
                    :value="index"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_characteristics_characteristics"
                    :name="
                        'advanced_characteristics_characteristics_' +
                        transformIndex(index)
                    "
                    :value="advanced_ability.characteristic_label"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_characteristics_characteristics_level"
                    :name="
                        'advanced_characteristics_characteristics_level_' +
                        transformIndex(index)
                    "
                    :value="
                        characteristics_total[
                            advanced_ability.characteristic_name
                        ]
                    "
                    disabled
                />
                <input
                    type="text"
                    class="advanced_characteristics_imp"
                    :name="
                        'advanced_characteristics_' +
                        transformIndex(index) +
                        '_imp'
                    "
                    :value="advanced_ability.level"
                    disabled
                />
                <select
                    class="advanced_characteristics_hab"
                    :name="
                        'advanced_characteristics_' +
                        transformIndex(index) +
                        '_hab'
                    "
                >
                    <option
                        v-for="(value, index) in advanced_specializations.list[
                            transformIndex(index)
                        ]"
                        :key="index"
                        :value="value"
                    >
                        {{ index }}
                    </option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import { ref, onMounted, onUnmounted, getCurrentInstance } from "vue";
export default {
    methods: {
        transformIndex(index) {
            const newKey = index
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .toLowerCase()
                .replace(/\s+/g, "_");

            return newKey;
        },
        updateInputValue(event) {
            const input = event.target.name.replace(/_hab$/, "");
            document.querySelector(`[name="${input}_imp"]`).value =
                event.target.value;
        },
        checkDropdowns() {
            const dropdowns = this.$el.querySelectorAll("select");

            dropdowns.forEach((dropdown) => {
                if (dropdown.options.length > 0) {
                    const selectedOption =
                        dropdown.options[dropdown.selectedIndex];
                    this.updateInputValueInCheck(
                        dropdown.name,
                        selectedOption.value
                    );
                }
            });
        },
        updateInputValueInCheck(name, value) {
            const input = name.replace(/_hab$/, "");
            document.querySelector(`[name="${input}_imp"]`).value = value;
        },
    },
    computed: {
        ...mapState(
            "Character",
            [
                "race",
                "profession",
                "characteristics_total",
                "race_basic_abilities",
                "career_path_basic_abilities",
                "basic_specializations",
                "characteristics_total",
                "race_advanced_abilities",
                "advanced_specializations",
                "getAdvancedSpecializations",
            ],
            {
                basicSpecializationsList: (state) =>
                    state.Character.basic_specializations.list,
            }
        ),
        visibleCharacteristics() {
            return this.race !== "0";
        },
        specializationsCareerpath() {
            return this.basic_specializations.career_path;
        },
        characteristicsTotal() {
            return this.characteristics_total;
        },
    },
    watch: {},
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

select[name="endurance_hab"] {
    top: 56px;
    left: 282px;
    width: 57px;
}

select[name="art_hab"] {
    top: 78px;
    left: 282px;
    width: 57px;
}

select[name="athletics_hab"] {
    top: 100px;
    left: 282px;
    width: 57px;
}

select[name="calm_hab"] {
    top: 122px;
    left: 282px;
    width: 57px;
}

select[name="charisma_hab"] {
    top: 144px;
    left: 282px;
    width: 57px;
}

select[name="animal_charisma_hab"] {
    top: 165px;
    left: 282px;
    width: 57px;
}

select[name="melee_hab"] {
    top: 187px;
    left: 282px;
    width: 57px;
}

select[name="close_combat_hab"] {
    top: 209px;
    left: 282px;
    width: 57px;
}

select[name="drive_hab"] {
    top: 231px;
    left: 282px;
    width: 57px;
}

select[name="to_drink_alcohol_hab"] {
    top: 253px;
    left: 282px;
    width: 57px;
}

select[name="gossip_hab"] {
    top: 275px;
    left: 282px;
    width: 57px;
}

select[name="entertain_hab"] {
    top: 297px;
    left: 282px;
    width: 57px;
}

select[name="climb_hab"] {
    top: 317px;
    left: 282px;
    width: 57px;
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

select[name="dodge_hab"] {
    top: 56px;
    left: 543px;
    width: 57px;
}

select[name="intimidate_hab"] {
    top: 78px;
    left: 543px;
    width: 57px;
}

select[name="intuition_hab"] {
    top: 100px;
    left: 543px;
    width: 57px;
}

select[name="play_hab"] {
    top: 122px;
    left: 543px;
    width: 57px;
}

select[name="leadership_hab"] {
    top: 144px;
    left: 543px;
    width: 57px;
}

select[name="mount_hab"] {
    top: 165px;
    left: 543px;
    width: 57px;
}

select[name="orientation_hab"] {
    top: 187px;
    left: 543px;
    width: 57px;
}

select[name="perception_hab"] {
    top: 209px;
    left: 543px;
    width: 57px;
}

select[name="bargain_hab"] {
    top: 231px;
    left: 543px;
    width: 57px;
}

select[name="row_hab"] {
    top: 253px;
    left: 543px;
    width: 57px;
}

select[name="stealth_hab"] {
    top: 275px;
    left: 543px;
    width: 57px;
}

select[name="bribe_hab"] {
    top: 297px;
    left: 543px;
    width: 57px;
}

select[name="survival_hab"] {
    top: 317px;
    left: 543px;
    width: 57px;
}

.advanced_characteristics_list {
    position: absolute;
    top: 56px;
    left: 598px;
    width: 244px;
    height: 283px;
}

.advanced_characteristics_list .advanced_characteristic {
    height: 22px;
    border-bottom: 1px solid black;
}

.advanced_characteristics_list
    .advanced_characteristic
    .advanced_characteristics_name {
    height: 22px;
    width: 105px;
}

.advanced_characteristics_list .advanced_characteristics_characteristics {
    left: 106px;
    width: 39px;
    height: 22px;
}

.advanced_characteristics_list .advanced_characteristics_characteristics_level {
    left: 145px;
    width: 34px;
    height: 22px;
}

.advanced_characteristics_list
    .advanced_characteristic
    .advanced_characteristics_imp {
    left: 179px;
    width: 27px;
    height: 22px;
}

.advanced_characteristics_list
    .advanced_characteristic
    .advanced_characteristics_hab {
    left: 206px;
    width: 63px;
    height: 22px;
}
</style>
