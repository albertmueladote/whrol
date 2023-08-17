const state = {name: '', race: '0', category: '0', profession: '0', career_path_status: '', age: '', height: '', hair: '', hair_text: '', eyes: '', eyes_text: '', choose_eyes: '', characteristics_ini: {}, characteristics_imp: {}, characteristics_total: {}, total_destiny: '', destiny: '', fortune: '', total_resilience: '', resilience: '', resolution: '', motivation: '', extra: '', exp_actual: '0', exp_spent: '0', exp_total: '0', movement: '', walk: '', run: '', race_basic_abilities: {}, race_advanced_abilities: {}, career_path_basic_abilities: {}, basic_specializations: {race: {}, career_path: {}, list: {}}, advanced_specializations: {race: {}, career_path: {}, list: {}}};
const getters = {};
const actions = {};
const mutations = {
    updateName(state, newName) {
        state.name = newName
    },
    updateRace(state, newRace) {
        state.race = newRace;
    },
    updateCategory(state, newCategory) {
        state.category = newCategory;
    },
    updateProfession(state, newProfession) {
        state.profession = newProfession;
    },
    updateCareerPathStatus(state, newCareerPathStatus) {
        state.career_path_status = newCareerPathStatus;
    },
    updateAge(state, newAge) {
        state.age = newAge;
    },
    updateHeight(state, newHeight) {
        state.height = newHeight;
    },
    updateHair(state, newHair) {
        state.hair = newHair.id_hair;
        state.hair_text = newHair.name;
    },
    updateEyes(state, newEyes) {
        state.eyes = newEyes.id_eye;
        state.eyes_text = newEyes.name;
    },
    updateChooseEyes(state, newEyes) {
        state.choose_eyes = newEyes;
    },
    updateMotivation(state, newMotivation) {
        state.motivation = newMotivation;
    },
    updateRaceTraits(state, newRaceTraits) {
        newRaceTraits.car.forEach((item, index) => {
            state.characteristics_ini[item.abbreviation.toLowerCase()] = item.pivot.value;
        })
        mutations.updateTotalChar(state);
        state.total_destiny = newRaceTraits.destiny;
        state.destiny = newRaceTraits.destiny;
        state.fortune = newRaceTraits.destiny;
        state.total_resilience = newRaceTraits.resilience;
        state.resilience = newRaceTraits.resilience;
        state.resolution = newRaceTraits.resilience;
        state.extra = newRaceTraits.extra;
        state.movement = newRaceTraits.movement;
        state.walk = state.movement * 2;
        state.run = state.walk * 2;
    },
    resetRaceTraits(state)
    {
        state.characteristics_ini = {};
        state.characteristics_imp = {};
        state.characteristics_total = {};
        state.total_destiny = '';
        state.destiny = '';
        state.fortune = '';
        state.total_resilience = '';
        state.resilience = '';
        state.resolution = '';
        state.extra = '';
        state.movement = '';
        state.walk = '';
        state.run = '';
    },
    updateRandomChar(state, newRandomChar) {
        newRandomChar.forEach((item, index) => {
            state.characteristics_imp[item.abbreviation.toLowerCase()] = parseInt(item.value);
        });
        mutations.updateTotalChar(state);
    },
    updateChar(state, newChar) {
        state.characteristics_imp[newChar.char.toLowerCase()] = newChar.value;
        mutations.updateTotalChar(state);
    },
    updateTotalChar(state) {
        for (const index in state.characteristics_ini) {
            var value_imp = 0;
            if (state.characteristics_imp.hasOwnProperty(index)) {
                if(state.characteristics_imp[index] == '')
                {
                    value_imp = 0;
                } else {
                    value_imp = state.characteristics_imp[index];
                }
            }
            state.characteristics_total[index] = state.characteristics_ini[index] + parseInt(value_imp);
        };
    },
    updateDestinyUp(state){
        if(state.extra > 0)
        {
            state.destiny++;
            state.fortune++;
            state.extra--;
        }   
    },
    updateDestinyDown(state){
        if(state.destiny > state.total_destiny)
        {
            state.destiny--;
            state.fortune--;
            state.extra++;
        }   
    },
    updateResilienceUp(state){
        if(state.extra > 0)
        {
            state.resilience++;
            state.resolution++;
            state.extra--;
        }   
    },
    updateResilienceDown(state){
        if(state.resilience > state.total_resilience)
        {
            state.resilience--;
            state.resolution--;
            state.extra++;
        }   
    },
    updateRaceBasicAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.race_basic_abilities.hasOwnProperty(item.name)) {
                state.race_basic_abilities[item.name] += 1;
            } else {
                state.race_basic_abilities[item.name] = 1;
            }
        });
    },
    resetRaceBasicAbilities(state) {
        state.race_basic_abilities = {};
    },
    updateRaceAdvancedAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.race_advanced_abilities.hasOwnProperty(item.name)) {
                state.race_advanced_abilities[item.name]['level'] += 1;
            } else {
                state.race_advanced_abilities[item.name] = {};
                state.race_advanced_abilities[item.name]['characteristic_name'] = item.characteristic.abbreviation.toLowerCase();
                state.race_advanced_abilities[item.name]['characteristic_label'] = item.characteristic.abbreviation;
                state.race_advanced_abilities[item.name]['level'] = 1;
            }
        });
    },
    resetRaceAdvancedAbilities(state) {
        state.race_advanced_abilities = {};
    },
    updateCareerPathBasicAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.career_path_basic_abilities.hasOwnProperty(item.name)) {
                state.career_path_basic_abilities[item.name] += 1;
            } else {
                state.career_path_basic_abilities[item.name] = 1;
            }
        });
    },
    resetCareerPathBasicAbilities(state) {
        state.career_path_basic_abilities = {};
    },
    updateCareerPathBasicSpecializations(state, newBasicSpecializations) {
        for (const key in newBasicSpecializations) {
            const items = newBasicSpecializations[key];
            if (!state.basic_specializations.career_path.hasOwnProperty(key)) {
                state.basic_specializations.career_path[key] = {};
            }
            for (const cont in items) {
                if (!state.basic_specializations.career_path[key].hasOwnProperty(items[cont].name)) {
                    state.basic_specializations.career_path[key][items[cont].id_basic_specialization] = items[cont].name;
                }
            }
         }
         mutations.basicSpecializationsList(state);
    },
    resetCareerPathBasicSpecializations(state) {
        state.basic_specializations.career_path = {};
        mutations.basicSpecializationsList(state);
    },
    updateRaceBasicSpecializations(state, newBasicSpecializations) {
        for (const key in newBasicSpecializations) {
            const items = newBasicSpecializations[key];
            if (!state.basic_specializations.race.hasOwnProperty(key)) {
                state.basic_specializations.race[key] = {};
            }
            for (const cont in items) {
                if (!state.basic_specializations.race[key].hasOwnProperty(items[cont].name)) {
                    state.basic_specializations.race[key][items[cont].id_basic_specialization] = items[cont].name;
                }
            }
        }
        mutations.basicSpecializationsList(state);
    },
    resetRaceBasicSpecializations(state) {
        state.basic_specializations.race = {};
        mutations.basicSpecializationsList(state);
    },
    updateRaceAdvancedSpecializations(state, newAdvancedSpecializations) {
        for (const key in newAdvancedSpecializations) {
            var new_key = key.normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .toLowerCase()
            .replace(/\s+/g, "_");
            const items = newAdvancedSpecializations[key];
            if (!state.advanced_specializations.race.hasOwnProperty(new_key)) {
                state.advanced_specializations.race[new_key] = {};
            }
            for (const cont in items) {
                if (!state.advanced_specializations.race[new_key].hasOwnProperty(items[cont].name)) {
                    state.advanced_specializations.race[new_key][items[cont].id_basic_specialization] = items[cont].name;
                }
            }
        }
        mutations.advancedSpecializationsList(state);
    },
    resetRaceAdvancedSpecializations(state) {
        state.advanced_specializations.race = {};
        mutations.advancedSpecializationsList(state);
    },
    basicSpecializationsList(state) {
        state.basic_specializations.list = {};
        for (const key in state.basic_specializations.career_path) {
            for (const index in state.basic_specializations.career_path[key]) {
                if(!state.basic_specializations.list.hasOwnProperty(key)) {
                    state.basic_specializations.list[key] = {};
                }
                if(!state.basic_specializations.list[key].hasOwnProperty(state.basic_specializations.career_path[key][index])) {
                    state.basic_specializations.list[key][state.basic_specializations.career_path[key][index]] = 0;
                }
                state.basic_specializations.list[key][state.basic_specializations.career_path[key][index]]++;
            }
        }
        for (const key in state.basic_specializations.race) {
            for (const index in state.basic_specializations.race[key]) {
                if(!state.basic_specializations.list.hasOwnProperty(key)) {
                    state.basic_specializations.list[key] = {};
                }
                if(!state.basic_specializations.list[key].hasOwnProperty(state.basic_specializations.race[key][index])) {
                    state.basic_specializations.list[key][state.basic_specializations.race[key][index]] = 0;
                }
                state.basic_specializations.list[key][state.basic_specializations.race[key][index]]++;
            }
        }
    },
    advancedSpecializationsList(state) {
        state.advanced_specializations.list = {};
        for (const key in state.advanced_specializations.career_path) {
            for (const index in state.advanced_specializations.career_path[key]) {
                if(!state.advanced_specializations.list.hasOwnProperty(key)) {
                    state.advanced_specializations.list[key] = {};
                }
                if(!state.advanced_specializations.list[key].hasOwnProperty(state.advanced_specializations.career_path[key][index])) {
                    state.advanced_specializations.list[key][state.advanced_specializations.career_path[key][index]] = 0;
                }
                state.advanced_specializations.list[key][state.advanced_specializations.career_path[key][index]]++;
            }
        }
        for (const key in state.advanced_specializations.race) {
            for (const index in state.advanced_specializations.race[key]) {
                if(!state.advanced_specializations.list.hasOwnProperty(key)) {
                    state.advanced_specializations.list[key] = {};
                }
                if(!state.advanced_specializations.list[key].hasOwnProperty(state.advanced_specializations.race[key][index])) {
                    state.advanced_specializations.list[key][state.advanced_specializations.race[key][index]] = 0;
                }
                state.advanced_specializations.list[key][state.advanced_specializations.race[key][index]]++;
            }
        }
    },
};  

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}