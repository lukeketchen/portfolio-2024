<script setup>

import {ref} from 'vue';

const resume = ref([
  {
    title: 'Education',
    year: '2000 - 2004',
    description: 'Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  },
  {
    title: 'Experience',
    year: '2004 - 2006',
    description: 'Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  }
]);

</script>

<template>
  <div id="resume" class="my-56">
    <div class="font-serif text-xl">
      Resume
    </div>
    <div class="mt-8">
      <div v-for="(item, index) in resume"
           :key="item.title"
           class="relative border-black pl-8 pb-8"
           :class="{'border-l' : index !== (resume.length - 1)}">
        <div class="bg-blue-200 border border-black rounded-full w-8 h-8 absolute left-0 top-0 transform -translate-x-1/2 ">
        </div>
        <div class="text-lg font-bold">
          {{ item.title }}
        </div>
        <div class="text-sm text-gray-500">
          {{ item.year }}
        </div>
        <div class="text-sm">
          {{ item.description }}
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>