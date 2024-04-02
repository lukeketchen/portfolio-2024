<script setup>
import {Head, Link} from '@inertiajs/vue3';
import Layout from "@/Layouts/Layout.vue";

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
  <Layout>
    <div class="max-w-2xl mx-auto text-center py-16 text-xl border rounded shadow">
      Coming Soon
    </div>

  </Layout>
</template>
