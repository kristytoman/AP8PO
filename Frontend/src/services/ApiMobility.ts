import axios from "axios";
import Api from "./Api";

export default {
  async createMobility(data: unknown) {
    return await axios
      .post(Api.getUrl("/api/mobility"), data)
      .then((response) => {
        return response.data;
      })
      .catch((error) => {
        return error.data;
      });
  },
};
