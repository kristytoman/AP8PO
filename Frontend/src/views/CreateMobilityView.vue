<script setup lang="ts">
import TheMobilityCreateForm from "@/components/TheMobilityCreateForm.vue";
</script>

<template>
  <main>
    <the-mobility-create-form />
  </main>
</template>

<style>
.textInput {
  outline: none;
  @apply text-gray-800 text-sm
  border-gray-600
  rounded-lg block w-full p-2.5 my-2
  dark:focus-visible:border-gray-400 dark:focus-visible:border
  dark:bg-gray-700 dark:text-gray-400;
}

label {
  @apply block mb-2 text-base font-medium text-gray-700 dark:text-gray-400;
}
</style>
