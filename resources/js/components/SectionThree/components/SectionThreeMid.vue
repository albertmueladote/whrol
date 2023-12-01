<template>
    <div class="sheet sheet-3">
        <section-three-faqs></section-three-faqs>
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
                basic_specializations.list.endurance &&
                Object.values(basic_specializations.list.endurance)[0]
                    ? Object.values(basic_specializations.list.endurance)[0]
                    : (basic_abilities.race.endurance || '') +
                      (basic_abilities.career_path.endurance || '')
            "
            disabled
        />
        <input
            type="text"
            name="art_imp"
            :value="
                basic_specializations.list.art &&
                Object.values(basic_specializations.list.art)[0]
                    ? Object.values(basic_specializations.list.art)[0]
                    : (basic_abilities.race.art || '') +
                      (basic_abilities.career_path.art || '')
            "
            disabled
        />
        <input
            type="text"
            name="athletics_imp"
            :value="
                basic_specializations.list.athletics &&
                Object.values(basic_specializations.list.athletics)[0]
                    ? Object.values(basic_specializations.list.athletics)[0]
                    : (basic_abilities.race.athletics || '') +
                      (basic_abilities.career_path.athletics || '')
            "
            disabled
        />
        <input
            type="text"
            name="calm_imp"
            :value="
                basic_specializations.list.calm &&
                Object.values(basic_specializations.list.calm)[0]
                    ? Object.values(basic_specializations.list.calm)[0]
                    : (basic_abilities.race.calm || '') +
                      (basic_abilities.career_path.calm || '')
            "
            disabled
        />
        <input
            type="text"
            name="charisma_imp"
            :value="
                basic_specializations.list.charisma &&
                Object.values(basic_specializations.list.charisma)[0]
                    ? Object.values(basic_specializations.list.charisma)[0]
                    : (basic_abilities.race.charisma || '') +
                      (basic_abilities.career_path.charisma || '')
            "
            disabled
        />
        <input
            type="text"
            name="animal_charisma_imp"
            :value="
                basic_specializations.list.animal_charisma &&
                Object.values(basic_specializations.list.animal_charisma)[0]
                    ? Object.values(
                          basic_specializations.list.animal_charisma
                      )[0]
                    : (basic_abilities.race.animal_charisma || '') +
                      (basic_abilities.career_path.animal_charisma || '')
            "
            disabled
        />
        <input
            type="text"
            name="melee_imp"
            :value="
                basic_specializations.list.melee &&
                Object.values(basic_specializations.list.melee)[0]
                    ? Object.values(basic_specializations.list.melee)[0]
                    : (basic_abilities.race.melee || '') +
                      (basic_abilities.career_path.melee || '')
            "
            disabled
        />
        <input
            type="text"
            name="close_combat_imp"
            :value="
                basic_specializations.list.close_combat &&
                Object.values(basic_specializations.list.close_combat)[0]
                    ? Object.values(basic_specializations.list.close_combat)[0]
                    : (basic_abilities.race.close_combat || '') +
                      (basic_abilities.career_path.close_combat || '')
            "
            disabled
        />
        <input
            type="text"
            name="drive_imp"
            :value="
                basic_specializations.list.drive &&
                Object.values(basic_specializations.list.drive)[0]
                    ? Object.values(basic_specializations.list.drive)[0]
                    : (basic_abilities.race.drive || '') +
                      (basic_abilities.career_path.drive || '')
            "
            disabled
        />
        <input
            type="text"
            name="to_drink_alcohol_imp"
            :value="
                basic_specializations.list.to_drink_alcohol &&
                Object.values(basic_specializations.list.to_drink_alcohol)[0]
                    ? Object.values(
                          basic_specializations.list.to_drink_alcohol
                      )[0]
                    : (basic_abilities.race.to_drink_alcohol || '') +
                      (basic_abilities.career_path.to_drink_alcohol || '')
            "
            disabled
        />
        <input
            type="text"
            name="gossip_imp"
            :value="
                basic_specializations.list.gossip &&
                Object.values(basic_specializations.list.gossip)[0]
                    ? Object.values(basic_specializations.list.gossip)[0]
                    : (basic_abilities.race.gossip || '') +
                      (basic_abilities.career_path.gossip || '')
            "
            disabled
        />
        <input
            type="text"
            name="entertain_imp"
            :value="
                basic_specializations.list.entertain &&
                Object.values(basic_specializations.list.entertain)[0]
                    ? Object.values(basic_specializations.list.entertain)[0]
                    : (basic_abilities.race.entertain || '') +
                      (basic_abilities.career_path.entertain || '')
            "
            disabled
        />
        <input
            type="text"
            name="climb_imp"
            :value="
                basic_specializations.list.climb &&
                Object.values(basic_specializations.list.climb)[0]
                    ? Object.values(basic_specializations.list.climb)[0]
                    : (basic_abilities.race.climb || '') +
                      (basic_abilities.career_path.climb || '')
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
                basic_specializations.list.dodge &&
                Object.values(basic_specializations.list.dodge)[0]
                    ? Object.values(basic_specializations.list.dodge)[0]
                    : (basic_abilities.race.dodge || '') +
                      (basic_abilities.career_path.dodge || '')
            "
            disabled
        />
        <input
            type="text"
            name="intimidate_imp"
            :value="
                basic_specializations.list.intimidate &&
                Object.values(basic_specializations.list.intimidate)[0]
                    ? Object.values(basic_specializations.list.intimidate)[0]
                    : (basic_abilities.race.intimidate || '') +
                      (basic_abilities.career_path.intimidate || '')
            "
            disabled
        />
        <input
            type="text"
            name="intuition_imp"
            :value="
                basic_specializations.list.intuition &&
                Object.values(basic_specializations.list.intuition)[0]
                    ? Object.values(basic_specializations.list.intuition)[0]
                    : (basic_abilities.race.intuition || '') +
                      (basic_abilities.career_path.intuition || '')
            "
            disabled
        />
        <input
            type="text"
            name="play_imp"
            :value="
                basic_specializations.list.play &&
                Object.values(basic_specializations.list.play)[0]
                    ? Object.values(basic_specializations.list.play)[0]
                    : (basic_abilities.race.play || '') +
                      (basic_abilities.career_path.play || '')
            "
            disabled
        />
        <input
            type="text"
            name="leadership_imp"
            :value="
                basic_specializations.list.leadership &&
                Object.values(basic_specializations.list.leadership)[0]
                    ? Object.values(basic_specializations.list.leadership)[0]
                    : (basic_abilities.race.leadership || '') +
                      (basic_abilities.career_path.leadership || '')
            "
            disabled
        />
        <input
            type="text"
            name="mount_imp"
            :value="
                basic_specializations.list.mount &&
                Object.values(basic_specializations.list.mount)[0]
                    ? Object.values(basic_specializations.list.mount)[0]
                    : (basic_abilities.race.mount || '') +
                      (basic_abilities.career_path.mount || '')
            "
            disabled
        />
        <input
            type="text"
            name="orientation_imp"
            :value="
                basic_specializations.list.orientation &&
                Object.values(basic_specializations.list.orientation)[0]
                    ? Object.values(basic_specializations.list.orientation)[0]
                    : (basic_abilities.race.orientation || '') +
                      (basic_abilities.career_path.orientation || '')
            "
            disabled
        />
        <input
            type="text"
            name="perception_imp"
            :value="
                basic_specializations.list.perception &&
                Object.values(basic_specializations.list.perception)[0]
                    ? Object.values(basic_specializations.list.perception)[0]
                    : (basic_abilities.race.perception || '') +
                      (basic_abilities.career_path.perception || '')
            "
            disabled
        />
        <input
            type="text"
            name="bargain_imp"
            :value="
                basic_specializations.list.bargain &&
                Object.values(basic_specializations.list.bargain)[0]
                    ? Object.values(basic_specializations.list.bargain)[0]
                    : (basic_abilities.race.bargain || '') +
                      (basic_abilities.career_path.bargain || '')
            "
            disabled
        />
        <input
            type="text"
            name="row_imp"
            :value="
                basic_specializations.list.row &&
                Object.values(basic_specializations.list.row)[0]
                    ? Object.values(basic_specializations.list.row)[0]
                    : (basic_abilities.race.row || '') +
                      (basic_abilities.career_path.row || '')
            "
            disabled
        />
        <input
            type="text"
            name="stealth_imp"
            :value="
                basic_specializations.list.stealth &&
                Object.values(basic_specializations.list.stealth)[0]
                    ? Object.values(basic_specializations.list.stealth)[0]
                    : (basic_abilities.race.stealth || '') +
                      (basic_abilities.career_path.stealth || '')
            "
            disabled
        />
        <input
            type="text"
            name="bribe_imp"
            :value="
                basic_specializations.list.bribe &&
                Object.values(basic_specializations.list.bribe)[0]
                    ? Object.values(basic_specializations.list.bribe)[0]
                    : (basic_abilities.race.bribe || '') +
                      (basic_abilities.career_path.bribe || '')
            "
            disabled
        />
        <input
            type="text"
            name="survival_imp"
            :value="
                basic_specializations.list.survival &&
                Object.values(basic_specializations.list.survival)[0]
                    ? Object.values(basic_specializations.list.survival)[0]
                    : (basic_abilities.race.survival || '') +
                      (basic_abilities.career_path.survival || '')
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
                v-for="(advanced_ability, index) in advanced_abilities.list"
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
                    class="advanced_characteristics"
                    :name="'advanced_characteristics_' + transformIndex(index)"
                    :value="advanced_ability.characteristic_label"
                    disabled
                />
                <input
                    type="text"
                    class="advanced_characteristics_level"
                    :name="
                        'advanced_characteristics_level_' +
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
                <div class="length">{{ arrayLength(index) }}</div>
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
import SectionThree from "../SectionThree.vue";
export default {
    components: { SectionThree },
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
        arrayLength(index) {
            const transformedIndex = this.transformIndex(index);
            const obj = this.advanced_specializations.list[transformedIndex];
            return obj ? "(" + Object.keys(obj).length + ")" : "";
        },
    },
    computed: {
        ...mapState(
            "Character",
            [
                "race",
                "profession",
                "characteristics_total",
                "basic_abilities",
                "basic_specializations",
                "characteristics_total",
                "advanced_abilities",
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
    width: 255px;
    height: 283px;
    overflow-y: auto;
    overflow-x: hidden;
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

.advanced_characteristics_list .advanced_characteristics {
    left: 106px;
    width: 39px;
    height: 22px;
}

.advanced_characteristics_list .advanced_characteristics_level {
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
    left: 222px;
    width: 37px;
    height: 22px;
}

select:not(:has(option[value]:not([value=""]))) {
    display: none;
}

.length {
    position: absolute;
    left: 208px;
    top: 10p;
    height: 22px;
    font-size: 1rem;
}
</style>
