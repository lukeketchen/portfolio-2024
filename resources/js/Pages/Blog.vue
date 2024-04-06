<script setup>
import {defineProps} from "vue";
import BlogComponent from "@/Components/Blog/BlogComponent.vue";

const props = defineProps({
  blogId: Number,
});
</script>

<template>
  <BlogComponent />
</template>