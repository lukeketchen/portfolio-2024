<script setup>
import {defineProps} from "vue";
import ProjectComponent from "@/Components/Projects/ProjectComponent.vue";

const props = defineProps({
  projectId: Number,
});
</script>

<template>
  <ProjectComponent :project-id="projectId" />
</template>
