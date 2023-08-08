const state = {name: '', race: '0', category: '0', profession: '0', career_path_status: '', age: '', height: '', hair: '', hair_text: '', eyes: '', eyes_text: '', choose_eyes: '', ha_ini: '', hp_ini: '', f_ini: '', r_ini: '', ini_ini: '', ag_ini: '', des_ini: '', i_ini: '', v_ini: '', em_ini: '', ha_imp: '', hp_imp: '', f_imp: '', r_imp: '', ini_imp: '', ag_imp: '', des_imp: '', i_imp: '', v_imp: '', em_imp: '', ha_total: '', hp_total: '', f_total: '', r_total: '', ini_total: '', ag_total: '', des_total: '', i_total: '', v_total: '', em_total: '', destiny: '', fortune: '', resilience: '', resolution: '', motivation: '', extra: '', exp_actual: '0', exp_spent: '0', exp_total: '0', movement: '', walk: '', run: ''};
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
            state[item.abbreviation.toLowerCase() + '_ini'] = item.pivot.value;
        })
        mutations.updateTotalChar(state);
        state.destiny = newRaceTraits.destiny;
        state.fortune = newRaceTraits.destiny;
        state.resilience = newRaceTraits.resilience;
        state.resolution = newRaceTraits.resilience;
        state.extra = newRaceTraits.extra;
        state.movement = newRaceTraits.movement;
        state.walk = state.movement * 2;
        state.run = state.walk * 2;
    },
    resetRace() {
        state.ha_ini = '0';
        state.hp_ini = '0';
        state.f_ini = '0';
        state.r_ini = '0';
        state.ini_ini = '0';
        state.ag_ini = '0';
        state.des_ini = '0';
        state.i_ini = '0';
        state.v_ini = '0';
        state.em_ini = '0';
        state.destiny = '0';
        state.fortune = '0';
        state.resilience = '0';
        state.resolution = '0';
        state.extra = '0';
        state.movement = '0';
        state.walk = '0';
        state.run = '0';
    },
    updateRandomChar(state, newRandomChar) {
        newRandomChar.forEach((item, index) => {
            state[item.abbreviation.toLowerCase() + '_imp'] = item.value;
        });
        mutations.updateTotalChar(state);
    },
    updateTotalChar(state) {
        state.ha_total = state.ha_ini + state.ha_imp;
        state.hp_total = state.hp_ini + state.hp_imp;
        state.f_total = state.f_ini + state.f_imp;
        state.r_total = state.r_ini + state.r_imp;
        state.ini_total = state.ini_ini + state.ini_imp;
        state.ag_total = state.ag_ini + state.ag_imp;
        state.des_total = state.des_ini + state.des_imp;
        state.i_total = state.i_ini + state.i_imp;
        state.v_total = state.v_ini + state.v_imp;
        state.em_total = state.em_ini + state.em_imp;
    },
};  

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}