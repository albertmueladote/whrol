import { createStore } from 'vuex'
import CharacterModule from './modules/Character';
import HelperModule from './modules/Helper';

export const store = createStore({
  state: {

  },
  mutations: {
    
  },
  actions: {

  },
  getters: {

  },
  modules: {
    Character: CharacterModule,
    Helper: HelperModule,
  }
})