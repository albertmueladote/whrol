import { createStore } from 'vuex'
import CharacterModule from './modules/Character';

// Create a new store instance.
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
    Character: CharacterModule, // Asegúrate de tener el módulo Character importado y definido correctamente.
  }
})