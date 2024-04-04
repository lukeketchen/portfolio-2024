<script setup>

import {defineProps} from "vue";
import CurrentWeatherComponent from "@/Components/Home/CurrentWeatherComponent.vue";
import Layout from "@/Layouts/Layout.vue";
import SingleProject from "@/Components/Projects/SingleProject.vue";
import FooterComponent from "@/Components/FooterComponent.vue";

const props = defineProps({
  projectId: Number,
});

</script>

<template>
  <Layout>
    <template #underHeader>
      <div class="flex justify-end pr-2 md:pr-12">
        <CurrentWeatherComponent />
      </div>
    </template>

    <template #default>
      <SingleProject :project-id="projectId" />
      <FooterComponent />
    </template>

  </Layout>
</template>

<style scoped>

</style>