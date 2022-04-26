<template>
  <div>
    <div class="relative w-full mb-4">
      <label for="university">University:</label>
      <the-select-input :list="[]" />
      <span class="error-message">{{ universityIdError }}</span>
    </div>

    <div class="flex flex-row space-x-2">
      <div class="w-full mb-4">
        <span>
          <label for="arrival">Arrival</label>
          <input
            type="date"
            id="arrival"
            name="arrival"
            :class="arrivalInputClass"
            v-model="arrival"
          />
        </span>
        <span class="error-message">{{ arrivalError }}</span>
      </div>
      <div class="w-full mb-4">
        <span>
          <label for="departure">Departure</label>
          <input
            type="date"
            id="departure"
            name="departure"
            :class="departureInputClass"
            v-model="departure"
          />
        </span>
        <span class="error-message">{{ departureError }}</span>
      </div>
    </div>
    <div class="w-full mb-4">
      <label for="student">Student:</label>
      <input
        type="text"
        id="student"
        name="student"
        :class="studentInputClass"
        v-model="studentId"
      />
      <span class="error-message">{{ studentIdError }}</span>
    </div>

    <button class="submit" @click="onSubmit">Submit</button>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import ApiMobility from "@/services/ApiMobility";
import TheSelectInput from "@/components/TheSelectInput.vue";

export default defineComponent({
  name: "TheMobilityCreateForm",
  components: { TheSelectInput },
  data() {
    return {
      universityId: "",
      universityIdError: "",
      studentId: "",
      studentIdError: "",
      departure: "",
      departureError: "",
      arrival: "",
      arrivalError: "",
    };
  },
  computed: {
    universityInputClass() {
      if (this.universityIdError === "") {
        return "textInput";
      }
      return "invalidTextInput";
    },
    studentInputClass() {
      if (this.studentIdError === "") {
        return "textInput";
      }
      return "invalidTextInput";
    },
    departureInputClass() {
      if (this.departureError === "") {
        return "textInput";
      }
      return "invalidTextInput";
    },
    arrivalInputClass() {
      if (this.arrivalError === "") {
        return "textInput";
      }
      return "invalidTextInput";
    },
  },
  methods: {
    onSubmit: async function (): Promise<void> {
      this.universityIdError = "";
      this.studentIdError = "";
      this.departureError = "";
      this.arrivalError = "";
      let response = await ApiMobility.createMobility({
        university_id: this.universityId,
        student_id: this.studentId,
        departure: this.departure,
        arrival: this.arrival,
      });
      console.log(response);
      if (response.success === false && response.code === 422) {
        if (response.data.university_id) {
          this.universityIdError = response.data.university_id[0];
        }
        if (response.data.student_id) {
          this.studentIdError = response.data.student_id[0];
        }
        if (response.data.departure) {
          this.departureError = response.data.departure[0];
        }
        if (response.data.arrival) {
          this.arrivalError = response.data.arrival[0];
        }
      }
    },
  },
});
</script>

<style scoped>
.submit {
  @apply border border-4 border-emerald-700 bg-emerald-600
  text-emerald-100 rounded-md px-4 py-1 my-2 transition
  duration-500 hover:ease-out
  hover:bg-emerald-700 cursor-pointer dark:bg-emerald-600
  focus:ease-in;
}

.invalidTextInput {
  @apply bg-red-50
  border border-red-500
  text-red-900 placeholder-red-700 text-sm
  rounded-lg
  focus:ring-red-500 focus:border-red-500 mb-1
  block w-full p-2.5
  dark:bg-red-900 dark:border-red-500 dark:text-red-300;
}

.error-message {
  @apply dark:text-red-500;
}
</style>
