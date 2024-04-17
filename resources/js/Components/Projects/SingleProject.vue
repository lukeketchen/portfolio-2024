<script setup>

import {defineProps, onMounted, ref, computed} from "vue";
import {marked} from "marked";

const props = defineProps({
  projectId: {
    type: String,
    required: true,
  },
});

const loading = ref(true);
const project = ref({});

function getProject() {
  axios.get(`/projects/${props.projectId}`)
      .then(response => {
        project.value = response.data.data;
        loading.value = false;
      })
      .catch(error => {
        console.log(error);
      });
}

onMounted(() => {
  getProject();
});

const markdownToHtml = computed(() => { return project.value.content ? marked(project.value.content) : ''});
</script>

<template>
  <div v-if="!loading">
    <div class="rounded-xl"
         v-if="project.image_url !== null">
      <img :src="project.image_url"
           alt="Project Image"
           class="w-full h-auto object-cover rounded-xl">
    </div>
    <h1>{{ project.title }}</h1>
    <h2>{{ project.description }}</h2>
    <div v-html="markdownToHtml">
    </div>
  </div>
</template>