<script setup>


// make a list of things i know


import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
  <div class="flex">
    <div class="w-1/2">
      <div class="text-xs">Hi, my name is</div>
      <div class="text-[100px] font-code">Luke Ketchen</div>
      <div class="text-[30px] mb48">I am a backend / full-stack developer</div>
      <div class="">
        I am chasing my dream career after switching from Electrician at
        age 30 with visions of becoming a wizard behind the keyboard.
      </div>
      <div class="mt-8">
        <PrimaryButton>
          Download Resume
        </PrimaryButton>
      </div>
    </div>
    <div class="w-1/2 flex items-center justify-center">
      <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-56 w-56">
    </div>
  </div>
  <div class="mt-24">
    <div class="flex mb-4">
      <div class="text-xs">
        I have experience in the following areas
      </div>
      <div class="flex h-4 ml-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
          <path strokeLinecap="round" strokeLinejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
      </div>
    </div>
    <div class="w-1/3">
      <ul class="flex flex-wrap gap-4">
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          PHP
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Laravel
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Javascript
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Vue.js
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Jquery
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Git
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          MYSQL
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Tailwind
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Css
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          SCSS
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Linux
        </li>
        <li class="flex items-center">
          <img src="https://via.placeholder.com/150" alt="profile picture" class="rounded-full h-5 w-5 mr-2">
          Vim
        </li>
      </ul>
    </div>
  </div>
</template>

<style scoped>

</style>