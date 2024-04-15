<script setup>

import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ArticlesComponent from "@/Components/Admin/ArticlesComponent.vue";
</script>

<template>
  <Head title="Articles" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Articles</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:p-4">
          <ArticlesComponent />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<style scoped>

</style>