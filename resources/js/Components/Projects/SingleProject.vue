<script setup>

import {defineProps, onMounted, ref} from "vue";

const props = defineProps({
  projectId: Number,
});

const project = ref({});

function getProject() {
  axios.get(`/api/projects/${props.projectId}`)
      .then(response => {
        console.log(response.data)
        project.value = response.data.data;
      })
      .catch(error => {
        console.log(error);
      });
}

onMounted(() => {
  getProject();
});

</script>

<template>
  <div>
    <div>
      Project
      {{ projectId }}
    </div>
    <div>
      <h1>{{ project.title }}</h1>
      <p>{{ project.description }}</p>
      <img :src="project.image_url" alt="Project Image">
    </div>
  </div>
</template>

<style scoped>

</style>