const state = {dices: {dice_1: '', dice_2: '', dice_3: '', dice_4: '', dice_5: '', dice_6: '', dice_7: '', dice_8: '', dice_9: '', dice_10: ''}, choose_eyes: {}, choose_hairs: {}, choose_heights: {}, choose_ages: {},};
const getters = {};
const actions = {};
const mutations = {
    updateThrowDice(state, newThrowDice) {
        var cont = 1;
        newThrowDice.forEach((item, index) => {
            state.dices['dice_' + cont] = item.value;
            cont++;
        });
    },
    updateChooseEyes(state, newEyes) {
        state.choose_eyes = newEyes;
    },
    updateChooseHairs(state, newHairs) {
        state.choose_hairs = newHairs;
    },
    updateChooseHeights(state, newHeights) {
        state.choose_heights = newHeights;
    },
    updateChooseAges(state, newAges) {
        state.choose_ages = newAges;
    },
};  

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}