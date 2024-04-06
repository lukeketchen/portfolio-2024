<script setup>
import {onMounted, ref} from 'vue';

const projects = ref([
  {
    id: 1,
    title: 'Project 1',
    description: 'Project 1 Description',
    image: 'https://via.placeholder.com/150',
  },
  {
    id: 2,
    title: 'Project 2',
    description: 'Project 2 Description',
    image: 'https://via.placeholder.com/150',
  },
  {
    id: 3,
    title: 'Project 3',
    description: 'Project 3 Description',
    image: 'https://via.placeholder.com/150',
  },
  {
    id: 4,
    title: 'Project 4',
    description: 'Project 4 Description',
    image: 'https://via.placeholder.com/150',
  },
  {
    id: 5,
    title: 'Project 5',
    description: 'Project 5 Description',
    image: 'https://via.placeholder.com/150',
  },
  {
    id: 6,
    title: 'Project 6',
    description: 'Project 6 Description',
    image: 'https://via.placeholder.com/150',
  },
]);

function getProjects() {
  axios.get('/api/projects')
      .then(response => {
        console.log(response.data)
        projects.value = response.data.data;
      })
      .catch(error => {
        console.log(error);
      });
}

onMounted(() => {
  getProjects();
});

</script>

<template>
  <div id="portfolio" class="my-56">
    <div class="text-xl font-bold font-serif mb-4">
      Portfolio
    </div>
    <div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a :href="'/project/' + project.id" v-for="project in projects" :key="project.title" class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img :src="project.image_url" alt="portfolio" class="w-full h-56 object-cover">
          <div class="p-4">
            <div class="font-bold text-xl mb-2">{{ project.title }}</div>
            <p class="text-gray-700 text-base">{{ project.description }}</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>
