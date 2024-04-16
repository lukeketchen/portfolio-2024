<script setup>

import {defineProps} from "vue";
import Layout from "@/Layouts/Layout.vue";
import SingleProject from "@/Components/Projects/SingleProject.vue";
import FooterComponent from "@/Components/FooterComponent.vue";

const props = defineProps({
  projectId: String,
  required: true
});

</script>

<template>
  <Layout>

    <template #default>
      <SingleProject :project-id="projectId" />
      <FooterComponent />
    </template>

  </Layout>
</template>

<style scoped>

</style>