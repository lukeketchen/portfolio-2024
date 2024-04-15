<script setup>

import {defineProps, onMounted, ref, computed} from "vue";
import {marked} from "marked";

const props = defineProps({
  projectId: String,
  required: true
});

const loading = ref(true);
const project = ref({});
const markdown = ref("# Hello World");

function getProject() {
  axios.get(`/projects/${props.projectId}`)
      .then(response => {
        console.log(response.data.data)
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
const markdownInputToHtml = computed(() => { return marked(markdown.value)});


</script>

<template>
  <div v-if="!loading">
    <div class="rounded-xl">
      <img :src="'/storage/images/'+project.image_url"
           v-if="project.image_url !== null"
           alt="Project Image"
           class="w-full h-auto object-cover rounded-xl">
    </div>
    <h1>{{ project.title }}</h1>
    <h2>{{ project.description }}</h2>
    <div v-html="markdownToHtml">
    </div>
    <!--    <textarea v-model="markdown"-->
    <!--              class="mt-6 border-t-2">-->
    <!--  </textarea>-->
    <!--    <div v-html="markdownInputToHtml"></div>-->
  </div>
</template>