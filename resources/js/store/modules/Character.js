const state = {name: '', race: '0', category: '0', profession: '0', age: '0', height: '0', hair: '', eyes: ''};
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
    updateAge(state, newAge) {
        state.age = newAge;
    },
    updateHeight(state, newHeight) {
        state.height = newHeight;
    },
    updateHair(state, newHair) {
        state.hair = newHair;
    },
    updateEyes(state, newEyes) {
        state.eyes = newEyes;
    },
    updateName(state, newName) {
        state.name = newName;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}