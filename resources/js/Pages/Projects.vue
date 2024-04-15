<script setup>

import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ProjectComponent from "@/Components/Admin/Projects/ProjectsComponent.vue";
</script>

<template>
  <Head title="Projects" />

  <AuthenticatedLayout>
    <template #header>
      <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Projects</h2>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:p-4">
          <ProjectComponent />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>