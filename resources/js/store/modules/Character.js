const state = {name: '', race: '0', category: '0', profession: '0', career_path_status: '', age: {}, height: {}, hair: {}, eyes: {},  characteristics_ini: {}, characteristics_imp: {}, characteristics_total: {}, total_destiny: '', destiny: '', fortune: '', total_resilience: '', resilience: '', resolution: '', motivation: '', extra: '', exp_actual: '0', exp_spent: '0', exp_total: '0', movement: '', walk: '', run: '', basic_abilities: {race: {}, career_path: {}, list: {}}, advanced_abilities: {race: {}, career_path: {}, list: {}}, basic_specializations: {race: {}, career_path: {}, list: {}}, advanced_specializations: {race: {}, career_path: {}, list: {}}, armor:{head:0, main_hand:0, secondary_hand:0, body:0, right_leg:0, left_leg:0, shield:0}, items:{}, wealth: {penny:0, shilling:0, crown:0}, load: {weapons:0, armors:0, items:0, max_load:0, total:0}, wounds:{bf:0, br:0, bv:0, robust:0, wounds:0, total: 0}};
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
        if(newAge.id_age == 0){
            state.age.id_age = 0;
            state.age.age = '';
        } else {
            state.age.id_age = newAge;
            state.age.age = newAge;
        }
    },
    updateHeight(state, newHeight) {
        if(newHeight.id_height == 0){
            state.height.id_height = 0;
            state.height.height = '';
        } else {
            state.height.id_height = newHeight;
            state.height.height = newHeight;
        }
    },
    updateHair(state, newHair) {
        if(newHair.id_hair == 0) {
            state.hair.id_hair = 0;
            state.hair.hair = '';
        } else {
            state.hair.id_hair = newHair.id_hair;
            state.hair.hair = newHair.name;
        }
    },
    updateEyes(state, newEyes) {
        if(newEyes.id_eyes == 0) {
            state.eyes.id_eyes = 0;
            state.eyes.eyes = '';
        } else {
            state.eyes.id_eyes = newEyes.id_eye;
            state.eyes.eyes = newEyes.name;
        }
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
        mutations.updateWounds(state);
        mutations.updateLoad(state);
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
            if (state.basic_abilities.race.hasOwnProperty(item.name)) {
                state.basic_abilities.race[item.name] += 1;
            } else {
                state.basic_abilities.race[item.name] = 1;
            }
        });
        mutations.basicAbilitiesList(state);
    },
    updateCareerPathBasicAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.basic_abilities.career_path.hasOwnProperty(item.name)) {
                state.basic_abilities.career_path[item.name] += 1;
            } else {
                state.basic_abilities.career_path[item.name] = 1;
            }
        });
        mutations.basicAbilitiesList(state);
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
    updateRaceAdvancedAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.advanced_abilities.race.hasOwnProperty(item.name)) {
                state.advanced_abilities.race[item.name]['level'] += 1;
            } else {
                state.advanced_abilities.race[item.name] = {};
                state.advanced_abilities.race[item.name]['name'] = item.name;
                state.advanced_abilities.race[item.name]['characteristic_name'] = item.characteristic.abbreviation.toLowerCase();
                state.advanced_abilities.race[item.name]['characteristic_label'] = item.characteristic.abbreviation;
                state.advanced_abilities.race[item.name]['level'] = 1;
            }
        });
        mutations.advancedAbilitiesList(state);
    },
    updateCareerPathAdvancedAbilities(state, newAbilities){
        newAbilities.forEach((item, index) => {
            if (state.advanced_abilities.career_path.hasOwnProperty(item.name)) {
                state.advanced_abilities.career_path[item.name]['level'] += 1;
            } else {
                state.advanced_abilities.career_path[item.name] = {};
                state.advanced_abilities.career_path[item.name]['name'] = item.name;
                state.advanced_abilities.career_path[item.name]['characteristic_name'] = item.characteristic.abbreviation.toLowerCase();
                state.advanced_abilities.career_path[item.name]['characteristic_label'] = item.characteristic.abbreviation;
                state.advanced_abilities.career_path[item.name]['level'] = 1;
            }
        });
        mutations.advancedAbilitiesList(state);
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
                    state.advanced_specializations.race[new_key][items[cont].id_advanced_specialization] = items[cont].name;
                }
            }
        }
        mutations.advancedSpecializationsList(state);
    }, 
    updateCareerPathAdvancedSpecializations(state, newAdvancedSpecializations) {
        for (const key in newAdvancedSpecializations) {
            var new_key = key.normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .toLowerCase()
            .replace(/\s+/g, "_");
            const items = newAdvancedSpecializations[key];
            if (!state.advanced_specializations.career_path.hasOwnProperty(new_key)) {
                state.advanced_specializations.career_path[new_key] = {};
            }
            for (const cont in items) {
                if (!state.advanced_specializations.career_path[new_key].hasOwnProperty(items[cont].name)) {
                    state.advanced_specializations.career_path[new_key][items[cont].id_advanced_specialization] = items[cont].name;
                }
            }
         }
         mutations.advancedSpecializationsList(state);
    },
    resetRaceBasicAbilities(state) {
        state.basic_abilities.race = {};
        mutations.basicAbilitiesList(state);
    },
    resetCareerPathBasicAbilities(state) {
        state.basic_abilities.career_path = {};
        mutations.basicAbilitiesList(state);
    },
    resetRaceBasicSpecializations(state) {
        state.basic_specializations.race = {};
        mutations.basicSpecializationsList(state);
    },
    resetCareerPathBasicSpecializations(state) {
        state.basic_specializations.career_path = {};
        mutations.basicSpecializationsList(state);
    },
    resetRaceAdvancedAbilities(state) {
        state.advanced_abilities.race = {};
        mutations.advancedAbilitiesList(state);
    },
    resetCareerPathAdvancedAbilities(state) {
        state.advanced_abilities.career_path = {};
        mutations.advancedAbilitiesList(state);
    },
    resetRaceAdvancedSpecializations(state) {
        state.advanced_specializations.race = {};
        mutations.advancedSpecializationsList(state);
    },
    resetCareerPathAdvancedSpecializations(state) {
        state.advanced_specializations.career_path = {};
        mutations.advancedSpecializationsList(state);
    },
    basicAbilitiesList(state) {
        state.basic_abilities.list = {};
        for (const key in state.basic_abilities.race) {
            for (const index in state.basic_abilities.race[key]) {
                if(!state.basic_abilities.list.hasOwnProperty(key)) {
                    state.basic_abilities.list[key] = {};
                }
                if(!state.basic_abilities.list[key].hasOwnProperty(state.basic_abilities.race[key][index])) {
                    state.basic_abilities.list[key][state.basic_abilities.race[key][index]] = 0;
                }
                state.basic_abilities.list[key][state.basic_abilities.race[key][index]]++;
            }
        }
        for (const key in state.basic_abilities.career_path) {
            for (const index in state.basic_abilities.career_path[key]) {
                if(!state.basic_abilities.list.hasOwnProperty(key)) {
                    state.basic_abilities.list[key] = {};
                }
                if(!state.basic_abilities.list[key].hasOwnProperty(state.basic_abilities.career_path[key][index])) {
                    state.basic_abilities.list[key][state.basic_abilities.career_path[key][index]] = 0;
                }
                state.basic_abilities.list[key][state.basic_abilities.career_path[key][index]]++;
            }
        }
    },
    advancedAbilitiesList(state) {
        state.advanced_abilities.list = {};
        for (const key in state.advanced_abilities.race) {
            if(!state.advanced_abilities.list.hasOwnProperty(key)) {
                state.advanced_abilities.list[key] = {};
            }
            state.advanced_abilities.list[key] = state.advanced_abilities.race[key];
        }
        for (const key in state.advanced_abilities.career_path) {
            if(!state.advanced_abilities.list.hasOwnProperty(key)) {
                state.advanced_abilities.list[key] = {};
            }
            state.advanced_abilities.list[key] = state.advanced_abilities.career_path[key];
        }
    },
    basicSpecializationsList(state) {
        state.basic_specializations.list = {};
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
    },
    advancedSpecializationsList(state) {
        state.advanced_specializations.list = {};
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
    },
    updateWounds(state) {
        state.wounds.bf = Math.floor((state.characteristics_total.f % 100) / 10);
        state.wounds.br = Math.floor((state.characteristics_total.r % 100) / 10);
        state.wounds.bv = Math.floor((state.characteristics_total.v % 100) / 10);
        if(state.race == 0) {
            state.wounds.wounds = 0;
        } else if( state.race == 3) {
            state.wounds.wounds = (state.wounds.br * 2) + state.wounds.bv;
        } else {
            state.wounds.wounds = state.wounds.bf + (state.wounds.br * 2) + state.wounds.bv;
        }
        if(state.wounds.robust > 0) {
            state.wounds.wounds = state.wounds.wounds + (state.wounds.br * state.wounds.robust);
        }
    },
    updateLoad(state) {
        state.load.weapons = 0;
        state.load.armors = 0;
        state.load.items = 0;
        state.load.max_load = Math.floor((state.characteristics_total.f % 100) / 10) + Math.floor((state.characteristics_total.r % 100) / 10);
        state.load.total = state.load.max_load - state.load.weapons - state.load.armors - state.load.items;
    },
    resetWealth() {
        state.wealth.penny = 0;
        state.wealth.shilling = 0;
        state.wealth.crown = 0;
    },
    randomWealth(state) {
        const career_path_status = state.career_path_status.split(' ');
        const status = career_path_status[0];
        const level = career_path_status[1];
        switch (status) {
            case 'Bronce':
                state.wealth.penny = Math.floor(Math.random() * ((level*10*2) - (level * 2) + 1)) + (level * 2);
                break;
            case 'Plata':
                state.wealth.shilling = Math.floor(Math.random() * ((level*10) - level + 1)) + level;
                break;
            case 'Oro':
                state.wealth.crown = level;
                break;
            default:
                break;
        }
    }
};  
 
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}