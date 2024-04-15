<script setup>
import {defineProps} from "vue";
import ProjectComponent from "@/Components/Projects/ProjectComponent.vue";

const props = defineProps({
  projectId: String,
  required: true
});
</script>

<template>
  <ProjectComponent :project-id="projectId" />
</template>
