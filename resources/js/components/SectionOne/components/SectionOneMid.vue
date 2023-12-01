<template>
    <div class="sheet sheet-1">
        <section-one-faqs></section-one-faqs>
        <div class="next" @click="nextPage"></div>
        <input
            type="text"
            maxlength="40"
            name="name"
            onkeydown="return /[a-záéíóúüÁÉÍÓÚÜñÑ ]/i.test(event.key)"
            onblur="if (this.value == '') {this.value = '';}"
            @input="onNameInput"
            :value="name"
        />
        <select name="races" @change="onRaceSelected">
            <option v-for="(race, index) in races" :key="index" :value="index">
                {{ race }}
            </option>
        </select>
        <select
            name="category"
            @change="onCategorySelected"
            v-if="visibleCategory"
            :class="{ invisible: !visibleCategory }"
        >
            <option
                v-for="(category, index) in categories"
                :key="index"
                :value="index"
            >
                {{ category }}
            </option>
        </select>
        <select
            name="profession"
            @change="onProfessionSelected"
            v-if="visibleProfession"
            :class="{ invisible: !visibleProfession }"
        >
            <option
                v-for="(profession, index) in professions"
                :key="index"
                :value="index"
            >
                {{ profession }}
            </option>
        </select>
        <input type="text" name="estate" disabled />
        <input type="text" name="previous_professions" disabled />
        <input
            type="text"
            name="career_path_status"
            :value="career_path_status"
            disabled
        />
        <input type="text" name="age" :value="age.age" disabled />
        <input type="text" name="height" :value="height.height" disabled />
        <input type="text" name="hair" :value="hair.hair" disabled />
        <input type="text" name="eyes" :value="eyes.eyes" disabled />
    </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import {
    getRacesFromAPI,
    getChooseEyesFromAPI,
    getChooseHairsFromAPI,
    getChooseHeightsFromAPI,
    getChooseAgesFromAPI,
    getCategoriesFromAPI,
    getProfessionsFromAPI,
    getProfessionFromAPI,
    getRaceTraitsFromAPI,
    getRaceBasicAbilitiesFromAPI,
    getCareerPathBasicAbilitiesFromAPI,
    getRandomCharFromAPI,
    getRaceAdvancedAbilitiesFromAPI,
    getCareerPathAdvancedAbilitiesFromAPI,
    getRaceTalentsFromAPI,
} from "./../../../services/sectionOne.services";
export default {
    mounted() {
        this.loadRaces();
        this.loadCategories();
    },
    methods: {
        ...mapMutations("Character", [
            "updateName",
            "updateRace",
            "updateCategory",
            "updateProfession",
            "updateCareerPathStatus",
            "updateAge",
            "updateHeight",
            "updateHair",
            "updateEyes",
            "updateRaceTraits",
            "updateRaceBasicAbilities",
            "resetRaceBasicAbilities",
            "updateCareerPathBasicAbilities",
            "updateCareerPathAdvancedAbilities",
            "resetCareerPathBasicAbilities",
            "resetCareerPathAdvancedAbilities",
            "updateRandomChar",
            "resetRaceTraits",
            "updateCareerPathBasicSpecializations",
            "resetCareerPathBasicSpecializations",
            "resetRaceTalents",
            "resetRaceChooseTalents",
            "resetRandomTalents",
            "updateRaceBasicSpecializations",
            "resetRaceBasicSpecializations",
            "updateRaceAdvancedAbilities",
            "resetRaceAdvancedAbilities",
            "updateRaceAdvancedSpecializations",
            "updateCareerPathAdvancedSpecializations",
            "updateRaceTalents",
            "resetRaceAdvancedSpecializations",
            "resetCareerPathAdvancedSpecializations",
            "resetWealth",
            "randomWealth",
        ]),
        ...mapMutations("Helper", [
            "updateChooseEyes",
            "updateChooseHairs",
            "updateChooseHeights",
            "updateChooseAges",
        ]),
        nextPage() {
            $(".page-1").hide();
            $(".page-2").show();
        },
        onRaceSelected(event) {
            this.updateRace(event.target.value);
            this.updateProfession("0");
            this.updateCareerPathStatus("0");
            this.updateAge({ id_age: 0, age: 0 });
            this.updateHeight({ id_height: 0, height: "" });
            this.updateHair({ id_hair: 0, hair: "" });
            this.updateEyes({ id_eyes: 0, eyes: "" });
            this.resetRaceBasicAbilities();
            this.resetCareerPathBasicAbilities();
            this.resetRaceAdvancedAbilities();
            this.resetRaceBasicSpecializations();
            this.resetCareerPathAdvancedAbilities();
            this.resetRaceAdvancedSpecializations();
            this.resetCareerPathBasicSpecializations();
            this.resetRaceTalents();
            this.resetRaceChooseTalents();
            this.resetRandomTalents();
            this.loadProfessions();
            this.resetRaceTraits();
            this.resetWealth();
            if (this.currentRace === "0") {
                this.updateCategory("0");
                this.visibleCategory = false;
                this.visibleProfession = false;
            } else {
                if (this.currentCategory !== "0") {
                    this.visibleProfession = true;
                    this.selectedProfession = 0;
                    if (this.currentProfession !== "0") {
                        this.loadCareerPathBasicAbilities();
                        this.loadCareerPathAdvancedAbilities();
                    }
                } else {
                    this.visibleProfession = false;
                }
                this.visibleCategory = true;
                this.loadRaceBasicAbilities();
                this.loadRaceAdvancedAbilities();
                this.loadRaceTalents();
                this.loadRaceTraits();
                this.eyesChoose();
                this.hairsChoose();
                this.heightsChoose();
                this.agesChoose();
            }
        },
        async eyesChoose() {
            const eyes = await getChooseEyesFromAPI(this.currentRace);
            this.updateChooseEyes(eyes);
        },
        async hairsChoose() {
            const hairs = await getChooseHairsFromAPI(this.currentRace);
            this.updateChooseHairs(hairs);
        },
        async heightsChoose() {
            const hairs = await getChooseHeightsFromAPI(this.currentRace);
            this.updateChooseHeights(hairs);
        },
        async agesChoose() {
            const ages = await getChooseAgesFromAPI(this.currentRace);
            this.updateChooseAges(ages);
        },
        onCategorySelected(event) {
            this.updateCategory(event.target.value);
            this.updateProfession("0");
            this.loadProfessions();
            this.updateCareerPathStatus("");
            this.resetCareerPathBasicAbilities();
            this.resetCareerPathBasicSpecializations();
            this.resetCareerPathAdvancedAbilities();
            this.resetWealth();
            if (this.currentCategory === "0") {
                this.visibleProfession = false;
            } else {
                this.visibleProfession = true;
            }
        },
        onProfessionSelected(event) {
            this.updateProfession(event.target.value);
            this.loadProfession();
            this.resetCareerPathBasicAbilities();
            this.resetCareerPathBasicSpecializations();
            this.resetCareerPathAdvancedSpecializations();
            this.resetCareerPathAdvancedAbilities();
            this.resetWealth();
            if (this.currentProfession !== "0") {
                this.loadCareerPathBasicAbilities();
                this.loadCareerPathAdvancedAbilities();
            }
        },
        onNameInput(event) {
            const newName = event.target.value;
            this.updateName(newName);
        },
        async loadRaces() {
            const racesFromAPI = await getRacesFromAPI();
            const racesObject = racesFromAPI.reduce((acc, race) => {
                acc[race.id_race] = race.name;
                return acc;
            }, {});

            this.races = {
                0: "-Selecciona raza-",
                ...racesObject,
            };
        },
        async loadCategories() {
            const categoriesFromAPI = await getCategoriesFromAPI();
            const categoriesObject = categoriesFromAPI.reduce(
                (acc, category) => {
                    acc[category.id_category] = category.name;
                    return acc;
                },
                {}
            );

            this.categories = {
                0: "-Selecciona clase-",
                ...categoriesObject,
            };
        },
        async loadProfessions() {
            const professionsFromAPI = await getProfessionsFromAPI(
                this.currentRace,
                this.currentCategory
            );
            const professionsObject = professionsFromAPI.reduce(
                (acc, profession) => {
                    acc[profession.id_profession] = profession.name;
                    return acc;
                },
                {}
            );

            this.professions = {
                0: "-Selecciona profesión-",
                ...professionsObject,
            };
        },
        async loadProfession() {
            const career_path_statusFromAPI = await getProfessionFromAPI(
                this.currentProfession
            );
            this.updateCareerPathStatus(career_path_statusFromAPI.status);
            this.randomWealth();
            var cont = 1;
            const inputs = document.querySelectorAll("input");
            inputs.forEach((input) => {
                input.classList.remove("imp_1", "imp_2", "imp_3", "imp_4");
            });
            career_path_statusFromAPI.characteristics.forEach(
                (career_path, career_path_index) => {
                    career_path.characteristics.forEach(
                        (characteristic, characteristic_index) => {
                            document
                                .querySelector(
                                    `input[name="${characteristic.abbreviation.toLowerCase()}_imp"]`
                                )
                                .classList.add("imp_" + cont);
                        }
                    );
                    cont++;
                }
            );
        },
        async loadRamdomChars() {
            const randomChars = await getRandomCharFromAPI();
            this.updateRandomChar(randomChars);
        },
        async loadRaceTraits() {
            const race = await getRaceTraitsFromAPI(this.currentRace);
            this.updateRaceTraits(race);
        },
        async loadRaceBasicAbilities() {
            const race_basic_abilities = await getRaceBasicAbilitiesFromAPI(
                this.currentRace
            );
            this.updateRaceBasicAbilities(race_basic_abilities.basic_abilities);
            this.updateRaceBasicSpecializations(
                race_basic_abilities.basic_specializations
            );
        },
        async loadCareerPathBasicAbilities() {
            const career_path_basic_abilities =
                await getCareerPathBasicAbilitiesFromAPI(
                    this.currentProfession
                );
            this.updateCareerPathBasicAbilities(
                career_path_basic_abilities.basic_abilities
            );
            this.updateCareerPathBasicSpecializations(
                career_path_basic_abilities.basic_specializations
            );
        },
        async loadRaceAdvancedAbilities() {
            const race_advanced_abilities =
                await getRaceAdvancedAbilitiesFromAPI(this.currentRace);
            this.updateRaceAdvancedAbilities(
                race_advanced_abilities.advanced_abilities
            );
            this.updateRaceAdvancedSpecializations(
                race_advanced_abilities.advanced_specializations
            );
        },
        async loadCareerPathAdvancedAbilities() {
            const career_path_advanced_abilities =
                await getCareerPathAdvancedAbilitiesFromAPI(
                    this.currentProfession
                );
            this.updateCareerPathAdvancedAbilities(
                career_path_advanced_abilities.advanced_abilities
            );
            this.updateCareerPathAdvancedSpecializations(
                career_path_advanced_abilities.advanced_specializations
            );
        },
        async loadRaceTalents() {
            const race_talents = await getRaceTalentsFromAPI(this.currentRace);
            this.updateRaceTalents(race_talents);
        },
    },
    computed: {
        ...mapState("Character", [
            "name",
            "race",
            "category",
            "profession",
            "career_path_status",
            "age",
            "height",
            "hair",
            "eyes",
        ]),
        currentName() {
            return this.name;
        },
        currentRace() {
            return this.race;
        },
        currentCategory() {
            return this.category;
        },
        currentProfession() {
            return this.profession;
        },
        currentCareerPathStatus() {
            return this.career_path_status;
        },
        currentAge() {
            return this.age;
        },
        currentHeight() {
            return this.height;
        },
        currentHair() {
            return this.hair_text;
        },
        currentEyes() {
            return this.eyes_text;
        },
    },
    data() {
        var races = {};
        var categories = {};
        var professions = {};
        return {
            races,
            categories,
            professions,
            visibleCategory: false,
            visibleProfession: false,
            visibleChooseEyes: false,
        };
    },
    props: {},
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

input[name="name"] {
    top: 141px;
    left: 134px;
    width: 321px;
}

select[name="races"] {
    top: 141px;
    left: 506px;
    width: 147px;
}

select[name="category"] {
    top: 141px;
    left: 695px;
    width: 143px;
}

input[name="profession"],
select[name="profession"] {
    top: 164px;
    left: 135px;
    width: 323px;
}

input[name="estate"] {
    top: 164px;
    left: 525px;
    width: 314px;
}

input[name="previous_professions"] {
    top: 184px;
    left: 202px;
    width: 454px;
}

input[name="career_path_status"] {
    top: 184px;
    left: 703px;
    width: 136px;
}

input[name="age"] {
    top: 209px;
    left: 113px;
    width: 158px;
}

input[name="height"] {
    top: 209px;
    left: 315px;
    width: 141px;
}

input[name="hair"] {
    top: 209px;
    left: 542px;
    width: 112px;
}

input[name="eyes"] {
    top: 209px;
    left: 739px;
    width: 100px;
}
</style>
