import axios from "axios";

export async function getRacesFromAPI() {
  try {
    const response = await axios.post("/races");
    return response.data.races;
  } catch (error) {
    console.error("Error al obtener las razas:", error);
    return [];
  }
}

export async function getCategoriesFromAPI() {
    try {
      const response = await axios.post("/categories");
      return response.data.categories;
    } catch (error) {
      console.error("Error al obtener las categorías:", error);
      return [];
    }
}

export async function getProfessionsFromAPI(id_race, id_category) {
    try {
        const response = await axios.post("/professions", null, {
        params: {
            id_race: id_race,
            id_category: id_category,
        },
      });
      return response.data.professions;
    } catch (error) {
      console.error("Error al obtener las profesiones:", error);
      return [];
    }
}

export async function getAgeFromAPI(id_race) {
    try {
        const response = await axios.post("/age", null, {
        params: {
            id_race: id_race
        },
      });
      return response.data;
    } catch (error) {
      console.error("Error al obtener la edad:", error);
      return [];
    }
}

export async function getHeightFromAPI(id_race) {
    try {
        const response = await axios.post("/height", null, {
        params: {
            id_race: id_race
        },
      });
      return response.data;
    } catch (error) {
      console.error("Error al obtener la altura:", error);
      return [];
    }
}