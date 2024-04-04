<script setup>
import {Head, Link} from '@inertiajs/vue3';
import HomeComponent from "@/Components/Home/HomeComponent.vue";

defineProps({
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});

</script>

<template>
  <Head title="Welcome" />

  <HomeComponent />
</template>
