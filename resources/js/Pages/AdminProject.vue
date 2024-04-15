<script setup>
import {defineProps} from "vue";
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import AdminProjectComponent from "@/Components/Admin/Projects/AdminProjectComponent.vue";

const props = defineProps({
  projectId: {
    type: String,
    required: true
  }
});

</script>

<template>
  <Head title="Project" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Project</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:p-4">
          <AdminProjectComponent :project-id="projectId" />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>