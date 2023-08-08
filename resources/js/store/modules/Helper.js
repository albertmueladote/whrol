const state = {dice_1: '', dice_2: '', dice_3: '', dice_4: '', dice_5: '', dice_6: '', dice_7: '', dice_8: '', dice_9: '', dice_10: ''};
const getters = {};
const actions = {};
const mutations = {
    updateThrowDice(state, newThrowDice) {
        var cont = 1;
        newThrowDice.forEach((item, index) => {
            state['dice_' + cont] = item.value;
            cont++;
        });
    },
};  

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}