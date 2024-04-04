<script setup>

import {defineProps} from "vue";

const props = defineProps({
  projectId: Number,
});


</script>

<template>
  <div>
    <div>
      Project Id
      {{ projectId }}
    </div>
  </div>
</template>

<style scoped>

</style>