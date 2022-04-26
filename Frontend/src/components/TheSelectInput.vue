<template>
  <div class="flex-auto flex flex-col w-full">
    <div class="flex flex-col items-center relative" @click="onSelectTriggered">
      <div class="relative w-full">
        <div
          class="my-2 bg-white p-1 flex border border-gray-200 rounded dark:bg-gray-700 border-gray-600 dark:focus-visible:border-gray-400 dark:focus-visible:border"
        >
          <div class="flex flex-auto flex-wrap"></div>
          <input
            :value="selectedValue"
            class="p-1 px-2 appearance-none outline-none w-full text-gray-800 dark:bg-gray-700 dark:text-gray-400"
          />
          <div>
            <button
              class="cursor-pointer w-6 h-full flex items-center text-gray-400 outline-none focus:outline-none"
              @click="onCrossButtonTriggered"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="100%"
                height="100%"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x w-4 h-4"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>
          <div
            class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200"
          >
            <button
              class="cursor-pointer w-6 h-6 text-gray-400 outline-none focus:outline-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="100%"
                height="100%"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-chevron-up w-4 h-4"
                :style="closeListButtonPoints"
              >
                <polyline points="18 15 12 9 6 15"></polyline>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div
        class="absolute top-100 drop-shadow-2xl z-40 w-full left-0 rounded max-h-select overflow-y-auto dark:bg-gray-600 dark:text-gray-400"
        v-show="isListVisible"
      >
        <div
          class="border-solid border border-gray-400 flex drop-shadow-2xl flex-col w-full"
        >
          <div
            class="cursor-pointer w-full dark:bg-gray-700 dark:text-gray-300 rounded-t border-b hover:bg-teal-100"
            style=""
            v-for="(element, index) in list"
            :key="index"
            @click="onValueSelected(element)"
          >
            <span
              class="flex w-full items-center p-2 pl-2 border-transparent bg-white border-l-2 relative dark:bg-gray-600 hover:bg-teal-600 hover:text-teal-100 hover:border-teal-600"
            >
              <span class="w-full items-center flex">
                <span
                  v-if="element === selectedValue"
                  class="mx-2 leading-6 text-teal-400"
                >
                  <span>{{ element }}</span>
                </span>
                <span v-else class="mx-2 leading-6">{{ element }}</span>
              </span>
            </span>
          </div>
          <span
            class="flex pointer cursor-pointer w-full items-center p-2 pl-2 border-transparent bg-white border-l-2 relative dark:bg-gray-700 hover:bg-teal-600 hover:text-teal-100 hover:border-teal-600"
          >
            <span class="w-full items-center flex">
              <span class="mx-2 leading-6">Add new element</span>
            </span>
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "TheSelectInput",
  data() {
    return {
      isListVisible: false,
      closeListButtonPoints: "",
      selectedValue: "",
    };
  },
  methods: {
    onSelectTriggered() {
      this.isListVisible = !this.isListVisible;
      if (this.closeListButtonPoints === "") {
        this.closeListButtonPoints = "transform: scale(1,-1)";
      } else {
        this.closeListButtonPoints = "";
      }
    },
    onCrossButtonTriggered() {
      this.selectedValue = "";
    },
    onValueSelected(value: string) {
      this.selectedValue = value;
    },
  },
  props: {
    list: {
      type: Array,
    },
  },
});
</script>

<style scoped>
.top-100 {
  top: 100%;
}

.max-h-select {
  max-height: 300px;
}
</style>
