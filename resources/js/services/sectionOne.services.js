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

export async function getHairFromAPI(id_race) {
  try {
      const response = await axios.post("/hair", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener el pelo:", error);
    return [];
  }
}

export async function getEyesFromAPI(id_race) {
  try {
      const response = await axios.post("/eyes", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los ojos:", error);
    return [];
  }
}

export async function getProfessionFromAPI(id_profession) {
  try {
      const response = await axios.post("/profession", null, {
      params: {
          id_profession: id_profession
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener el estatus social:", error);
    return [];
  }
}

export async function getChooseEyesFromAPI(id_race) {
  try {
      const response = await axios.post("/choose_eyes", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los colores de ojos:", error);
    return [];
  }
}

export async function getChooseHairsFromAPI(id_race) {
  try {
      const response = await axios.post("/choose_hairs", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los colores de pelos:", error);
    return [];
  }
}

export async function getChooseHeightsFromAPI(id_race) {
  try {
      const response = await axios.post("/choose_heights", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las alturas:", error);
    return [];
  }
}

export async function getChooseAgesFromAPI(id_race) {
  try {
      const response = await axios.post("/choose_ages", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las edades:", error);
    return [];
  }
}

export async function getRaceTraitsFromAPI(id_race) {
  try {
      const response = await axios.post("/race", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las características:", error);
    return [];
  }
}

export async function getRandomCharFromAPI() {
  try {
    const response = await axios.post("/random_characteristics", null, {});
    return response.data;
  } catch (error) {
    console.error("Error al obtener las características:", error);
    return [];
  }
}

export async function getThrowDiceFromAPI() {
  try {
    const response = await axios.post("/throw_dice", null, {});
    return response.data;
  } catch (error) {
    console.error("Error al obtener las características:", error);
    return [];
  }
}

export async function getRaceBasicAbilitiesFromAPI(id_race) {
  try {
    const response = await axios.post("/race_basic_abilities", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las habilidades básicas raciales:", error);
    return [];
  }
}

export async function getRaceAdvancedAbilitiesFromAPI(id_race) {
  try {
    const response = await axios.post("/race_advanced_abilities", null, {
      params: {
          id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las habilidades avanzadas raciales:", error);
    return [];
  }
}

export async function getCareerPathBasicAbilitiesFromAPI(id_profession) {
  try {
    const response = await axios.post("/career_path_basic_abilities", null, {
      params: {
          id_profession: id_profession
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las habilidades básicas de profesión:", error);
    return [];
  }
}

export async function getCareerPathAdvancedAbilitiesFromAPI(id_profession) {
  try {
    const response = await axios.post("/career_path_advanced_abilities", null, {
      params: {
        id_profession: id_profession
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener las habilidades avanzadas de profesión:", error);
    return [];
  }
}

export async function getRaceTalentsFromAPI(id_race) {
  try {
    const response = await axios.post("/race_talents", null, {
      params: {
        id_race: id_race
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los talentos de raza:", error);
    return [];
  }
}

export async function getRandomTalentsFromAPI(random_talents_n) {
  try {
    const response = await axios.post("/random_talents", null, {
      params: {
        random_talents_n: random_talents_n
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los talentos aleatorios:", error);
    return [];
  }
}

export async function getCareerPathTalentsFromAPI(id_profession) {
  try {
    const response = await axios.post("/career_path_talents", null, {
      params: {
        id_profession: id_profession
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al obtener los talentos de profesión:", error);
    return [];
  }
}

export async function saveWithApi(sheet) {
  try {
    const response = await axios.post("/save", null, {
      params: {
        sheet: sheet
      },
    });
    return response.data;
  } catch (error) {
    console.error("Error al guardar los datos:", error);
    return [];
  }
}