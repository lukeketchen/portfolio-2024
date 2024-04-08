<script setup>

import {ref} from 'vue';

const resume = ref([
  {
    title: 'OK200',
    subTitle: 'Federation University, Ballarat',
    year: '2022 - Current',
    description: 'We build custom apps for clients from scratch. Laravel and Vue.js are used on most web based applications. We also maintain and update existing apps.',
  },
  {
    title: 'Full stack developer',
    subTitle: 'Efront',
    year: '2021 - 2022',
    description: 'Very fast-paced web agency pumping out the WordPress sites and maintenance.',
  },
  {
    title: 'Lead Full stack developer',
    subTitle: 'Tigmo',
    year: '2020 - 2021',
    description: 'Wordpress websites built from scratch.',
  },
  {
    title: 'Business Owner / Web Developer',
    subTitle: 'Ketch Labs',
    year: '2017 - Current',
    description: 'Multiple framework websites made for customers.',
  },
  {
    title: 'Electrician',
    subTitle: 'Self Employed',
    year: '2016 - 2020',
    description: 'Ran my own business as an Electrician.',
  },
  {
    title: 'Student',
    subTitle: 'Federation University',
    year: '2015 - 2016',
    description: '',
  },
  {
    title: 'Electrician',
    subTitle: 'Multiple locations',
    year: '2004 - 2015',
    description: 'From year 10 onwards I worked as an Electrician.',
  }
]);

const education = ref([
  {
    title: 'IT Computer Games and Digital Media',
    subTitle: 'Federation University, Ballarat',
    year: '2015 - 2016',
    description: 'When I went to university to study Computer Games and Digital Media I would always receive high grades. The main reason for this is because I am very passionate about tech and gadgets and loved learning how to code.',
  },
  {
    title: 'Electrotechnology',
    subTitle: 'SMB, Ballarat',
    year: '2004 - 2007',
    description: 'This was my electrical apprenticeship. I started working The day after I finished high school at the end of year 10.',
  }
]);

</script>

<template>
  <div id="resume" class="mt-56">
    <div class="font-serif text-xl">
      Resume
    </div>
    <div class="mt-8">
      <div v-for="(item, index) in resume"
           :key="item.title"
           class="relative border-blue-300 pl-8 pb-8"
           :class="{'border-l-2' : index !== (resume.length - 1)}">
        <div class="bg-blue-300 rounded-full border-2 border-blue-100 w-8 h-8 absolute left-0 top-0 transform -translate-x-1/2 "></div>
        <div class="bg-blue-400 border-2 border-green-400 rounded-full w-4 h-4 absolute left-0 top-2 transform -translate-x-1/2 "></div>
        <div class="text-lg font-bold">
          {{ item.title }}
        </div>
        <div class="text-sm text-gray-500">
          {{ item.subTitle }}
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

  <div id="education" class="my-24">
    <div class="font-serif text-xl">
      Education
    </div>
    <div class="mt-8">
      <div v-for="(item, index) in education"
           :key="item.title"
           class="relative border-blue-300 pl-8 pb-8"
           :class="{'border-l-2' : index !== (education.length - 1)}">
        <div class="bg-blue-300 rounded-full border-2 border-blue-100 w-8 h-8 absolute left-0 top-0 transform -translate-x-1/2 "></div>
        <div class="bg-blue-400 border-2 border-green-400 rounded-full w-4 h-4 absolute left-0 top-2 transform -translate-x-1/2 "></div>
        <div class="text-lg font-bold">
          {{ item.title }}
        </div>
        <div class="text-sm text-gray-500">
          {{ item.subTitle }}
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

  <div class="mb-56 mt-24">
    <div class="font-serif text-xl mb-8">
      Awards
    </div>
    <div class="border-4 border-blue-300 p-4 rounded text-gray-600 text-center">
      During my first semester at university, I received an invitation to join the Golden Key Society in recognition of my high academic achievements across all subjects. Being invited to join this prestigious international organization was
      a humbling experience that inspired me to continue striving for academic excellence throughout my university journey.
    </div>
  </div>
</template>

<style scoped>

</style>