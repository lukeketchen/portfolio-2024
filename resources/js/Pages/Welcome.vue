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
    <template #underHeader>
      <div class="flex justify-end pr-2 md:pr-12 text-center font-serif">
        <div>
          <div>Its 28˚c where I am today.</div>
          <div>I got this from an api</div>
          <button class="text-green-600">
            Learn More
          </button>
        </div>
      </div>
    </template>

    <template #default>
      <div class="max-w-2xl mx-auto text-center py-16 text-xl border rounded shadow">
        Coming Soon - Staging
      </div>
    </template>

  </Layout>
</template>
