<script setup>

import {onMounted, ref} from "vue";

const projects = ref(null)

function getProjects() {
  axios.get('/admin/admin-projects')
      .then(response => {
        projects.value = response.data;
      })
      .catch(error => {
        swal({
          title: "oh no!",
          text: error.message,
          icon: "error",
        });
      });
}

onMounted(() => {
  getProjects();
});
</script>

<template>
  <div class="flex flex-col">
    <a :href="'/admin/project/' + project.id"
       v-for="(project, index) in projects.data"
       v-if="projects !== null"
       class="w-full flex justify-between p-4 hover:bg-blue-200"
       :class="{'bg-gray-200' : index % 2 === 1}">
      <div class="flex justify-between w-full">
        <div>
          <div>
            {{ project.title }}
          </div>
          <div>
            {{ project.short_description }}
          </div>
        </div>
        <div>
          {{ project.status }}
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
      </svg>

    </a>
  </div>
</template>