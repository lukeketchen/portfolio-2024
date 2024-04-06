<script setup>

import ArticleComponent from "@/Components/Blog/ArticleComponent.vue";
import {defineProps} from "vue";

const props = defineProps({
  articleId: {
    type: Number,
    required: true
  }
})

</script>

<template>
  <ArticleComponent :article-id="articleId" />
</template>