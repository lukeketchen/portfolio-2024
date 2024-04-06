<script setup>
import {defineProps} from "vue";

const props = defineProps({
  articleId: {
    type: Number,
    required: true
  }
})
</script>

<template>
  <div>
    <h1>Article {{ articleId }}</h1>
  </div>

</template>

<style scoped>

</style>