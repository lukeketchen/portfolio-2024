<script setup>
import {onMounted, ref} from 'vue';

const projects = ref({});

function getProjects() {
  axios.get('/projects')
      .then(response => {
        projects.value = response.data.data;
      })
      .catch(error => {
        swal({
          title: "oh no!",
          text: "Unable to fetch projects",
          icon: "error",
        });
        console.log(error);
      });
}

onMounted(() => {
  getProjects();
});

</script>

<template>
  <div id="portfolio" class="my-56">
    <div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a :href="'/project/' + project.id" v-for="project in projects" :key="project.title" class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img :src="project.image_url" alt="portfolio" class="w-full h-56 object-cover">
          <div class="p-4">
            <div class="font-bold text-xl mb-2">{{ project.title }}</div>
            <p class="text-gray-700 text-base">{{ project.short_description }}</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>
