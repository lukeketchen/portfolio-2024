<script setup>
import {defineProps} from "vue";
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({
  articleId: {
    type: Number,
    required: true
  }
})
</script>

<template>
  <Layout>
    <template #default>
      <h1>Article</h1>

      <div>
        Article {{ articleId }}
      </div>
    </template>
  </Layout>
</template>

<style scoped>

</style>