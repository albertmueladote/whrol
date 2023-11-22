<template>
    <div class="sheet sheet-5">
        <div class="next" @click="previousPage"></div>
        <div class="armors">
            <div class="armor" v-for="(armor, index) in armors" :key="index">
                <input
                    type="text"
                    class="armor_name"
                    :name="'armor_name_' + transformIndex(index)"
                    :value="armor.name"
                    disabled
                />
                <input
                    type="text"
                    class="armor_location"
                    :name="'armor_location_' + transformIndex(index)"
                    :value="armor.location"
                    disabled
                />
                <input
                    type="text"
                    class="armor_load"
                    :name="'armor_load_' + transformIndex(index)"
                    :value="armor.imp"
                    disabled
                />
                <input
                    type="text"
                    class="armor_armor"
                    :name="'armor_armor_' + transformIndex(index)"
                    :value="armor.armor"
                    disabled
                />
                <input
                    type="text"
                    class="armor_properties"
                    :name="'armor_properties' + transformIndex(index)"
                    :value="armor.properties"
                    disabled
                />
            </div>
        </div>
        <div class="total_armor">
            <input name="head_armor" type="text" :value="armor.head" />
            <input
                name="main_hand_armor"
                type="text"
                :value="armor.main_hand"
            />
            <input
                name="secondary_hand_armor"
                type="text"
                :value="armor.secondary_hand"
            />
            <input name="body_armor" type="text" :value="armor.body" />
            <input
                name="right_leg_armor"
                type="text"
                :value="armor.right_leg"
            />
            <input name="left_leg_armor" type="text" :value="armor.left_leg" />
            <input name="shield_armor" type="text" :value="armor.shield" />
        </div>
        <div class="items">
            <div class="item" v-for="(item, index) in items" :key="index">
                <input type="text" class="name" :name="'name_'" disabled />
                <input type="text" class="imp" :name="'imp_'" disabled />
            </div>
        </div>
        <div class="psycology">
            <textarea name="psycology"></textarea>
        </div>
        <div class="notes">
            <textarea name="notes"></textarea>
        </div>
        <div class="wealth">
            <input
                type="text"
                class="penny"
                name="penny"
                :value="wealth.penny"
                v-if="visibleProfession"
                :class="{ invisible: !visibleProfession }"
                disabled
            />
            <input
                type="text"
                class="shilling"
                name="shilling"
                :value="wealth.shilling"
                v-if="visibleProfession"
                :class="{ invisible: !visibleProfession }"
                disabled
            />
            <input
                type="text"
                class="crown"
                name="crown"
                :value="wealth.crown"
                v-if="visibleProfession"
                :class="{ invisible: !visibleProfession }"
                disabled
            />
        </div>
        <div class="load">
            <input
                type="text"
                name="weapons"
                :value="load.weapons"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="armors"
                :value="load.armors"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="items"
                :value="load.items"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="max_load"
                :value="load.max_load"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="total"
                :value="load.total"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
        </div>
        <div class="wounds">
            <input
                type="text"
                name="bf"
                :value="wounds.bf"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="br"
                :value="wounds.br"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="bv"
                :value="wounds.bv"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="robust"
                :value="wounds.robust"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="wounds"
                :value="wounds.wounds"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
            <input
                type="text"
                name="total"
                :value="wounds.total"
                v-if="visibleRace"
                :class="{ invisible: !visibleRace }"
                disabled
            />
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
    methods: {
        previousPage() {
            $(".page-1").show();
            $(".page-2").hide();
        },
    },
    computed: {
        ...mapState("Character", [
            "armor",
            "items",
            "wealth",
            "load",
            "wounds",
            "race",
            "profession",
        ]),
        visibleRace() {
            return this.race !== "0";
        },
        visibleProfession() {
            return this.profession !== "0";
        },
    },
};
</script>

<style lang="scss">
.next {
    position: absolute;
    width: 100px;
    height: 100px;
    right: 0;
    &::before {
        content: "";
        position: absolute;
        right: 0px;
        top: 0px;
        width: 0;
        height: 0;
        background: linear-gradient(
            45deg,
            white 45%,
            #aaa 50%,
            #ccc 60%,
            white
        );
        transition-duration: 0.3s;
    }

    &:hover::before {
        width: 100px;
        height: 100px;
        cursor: pointer;
    }
}
.armors {
    position: absolute;
    width: 505px;
    height: 108px;
    top: 129px;
    left: 80px;
    .armor {
        .armor_name {
            width: 144px;
        }
        .armor_location {
            left: 144px;
            width: 93px;
        }
        .armor_load {
            left: 237px;
            width: 31px;
        }
        .armor_armor {
            left: 268px;
            width: 47px;
        }
        .armor_properties {
            left: 315px;
            width: 189px;
        }
    }
}

.total_armor {
    position: absolute;
    width: 215px;
    height: 305px;
    top: 120px;
    left: 616px;
    input {
        font-size: 1.5rem;
    }
    input[name="head_armor"] {
        top: 5px;
        left: 5px;
        width: 29px;
        height: 29px;
    }
    input[name="main_hand_armor"] {
        top: 92px;
        left: 5px;
        width: 29px;
        height: 29px;
    }
    input[name="secondary_hand_armor"] {
        top: 42px;
        left: 175px;
        width: 29px;
        height: 29px;
    }
    input[name="body_armor"] {
        top: 134px;
        left: 175px;
        width: 29px;
        height: 29px;
    }
    input[name="right_leg_armor"] {
        top: 187px;
        left: 5px;
        width: 29px;
        height: 29px;
    }
    input[name="left_leg_armor"] {
        top: 240px;
        left: 175px;
        width: 29px;
        height: 29px;
    }
    input[name="shield_armor"] {
        top: 260px;
        left: 5px;
        width: 29px;
        height: 29px;
    }
}

.items {
    position: absolute;
    width: 245px;
    height: 330px;
    top: 308px;
    left: 80px;
    .item {
        .name {
            width: 208px;
        }
        .imp {
            left: 208px;
            width: 34px;
        }
    }
}

.psycology {
    position: absolute;
    width: 246px;
    height: 79px;
    top: 280px;
    left: 340px;
    textarea[name="psycology"] {
        resize: none;
        width: 100%;
        height: 100%;
        line-height: 22.5px;
    }
}

.notes {
    position: absolute;
    width: 246px;
    height: 60px;
    top: 395px;
    left: 340px;
    textarea[name="notes"] {
        resize: none;
        width: 100%;
        height: 100%;
        line-height: 22.5px;
    }
}

.wealth {
    position: absolute;
    width: 60px;
    height: 140px;
    top: 497px;
    left: 391px;
    input {
        font-size: 1.5rem;
        width: 100%;
    }
    input[name="penny"] {
        height: 48px;
    }
    input[name="shilling"] {
        top: 48px;
        height: 46px;
    }
    input[name="crown"] {
        top: 94px;
        height: 46px;
    }
}

.load {
    position: absolute;
    width: 52px;
    height: 140px;
    top: 497px;
    left: 535px;
    input {
        font-size: 1.5rem;
        width: 100%;
    }
    input[name="weapons"] {
        height: 29px;
    }
    input[name="armors"] {
        top: 29px;
        height: 29px;
    }
    input[name="items"] {
        top: 57px;
        height: 27px;
    }
    input[name="max_load"] {
        top: 84px;
        height: 29px;
    }
    input[name="total"] {
        top: 113px;
        height: 27px;
    }
}

.wounds {
    position: absolute;
    width: 182px;
    height: 140px;
    top: 497px;
    left: 661px;
    input {
        font-size: 1.5rem;
    }
    input[name="bf"] {
        width: 30px;
        height: 29px;
    }
    input[name="br"] {
        top: 29px;
        width: 30px;
        height: 29px;
    }
    input[name="bv"] {
        top: 57px;
        width: 30px;
        height: 29px;
    }
    input[name="robust"] {
        top: 85px;
        width: 30px;
        height: 27px;
    }
    input[name="wounds"] {
        top: 110px;
        width: 30px;
        height: 28px;
    }
    input[name="total"] {
        left: 30px;
        width: 151px;
        height: 100%;
    }
}
</style>
