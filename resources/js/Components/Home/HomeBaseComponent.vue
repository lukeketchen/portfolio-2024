<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {ref} from "vue";

// make a list of things i know


const profileImage = ref(new URL(`/public/images/profile pic 2019.png`, import.meta.url).href);


</script>

<template>
  <div class="flex">
    <div class="w-1/2">
      <div class="text-xs">Hi, my name is</div>
      <div class="text-[100px] font-code -ml-2">Luke Ketchen</div>
      <div class="text-[30px] mb48">I am a backend / full-stack developer</div>
      <div class="max-w-xl">
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
      <div class="rounded-full relative h-72 w-72">
        <div class="bg-[#238D76] border-2 border-gray-600 absolute rounded-full -bottom-24 left-0 w-full h-full"></div>
        <div class="absolute top-0 left-0">
          <img :src="profileImage" alt="profile picture" class="rounded-full h-96 w-96 object-cover ">
        </div>
      </div>
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
          <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5 fill-slate-900 mr-2">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path>
          </svg>
          PHP
        </li>
        <li class="flex items-center">
          <img src="https://laravel.com/img/logomark.min.svg" alt="profile picture" class="h-5 w-5 mr-2">
          Laravel
        </li>
        <li class="flex items-center">
          <img src="https://www.vhv.rs/dpng/d/313-3133777_javascript-transparent-background-svg-hd-png-download.png" alt="profile picture" class="h-5 w-5 mr-2">
          Javascript
        </li>
        <li class="flex items-center">
          <img src="https://v2.vuejs.org/images/logo.svg" alt="profile picture" class="h-5 w-5 mr-2">
          Vue.js
        </li>
        <li class="flex items-center">
          <img src="https://external-content.duckduckgo.com/ip3/jquery.com.ico" alt="profile picture" class="h-5 w-5 mr-2">
          Jquery
        </li>
        <li class="flex items-center">
          <img src="https://www.svgrepo.com/show/509966/git.svg" alt="profile picture" class="h-5 w-5 mr-2">
          Git
        </li>
        <li class="flex items-center">
          <img src="https://duckduckgo.com/i/cfe43ab1b22cefb4.png" alt="profile picture" class="h-5 w-5 mr-2">
          MYSQL
        </li>
        <li class="flex items-center">
          <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="profile picture" class="h-5 w-5 mr-2">
          Tailwind
        </li>
        <li class="flex items-center">
          <img src="https://vectorified.com/images/css-icon-37.png" alt="profile picture" class="h-5 w-5 mr-2">
          Css
        </li>
        <li class="flex items-center">
          <img src="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_scss_icon_130176.png" alt="profile picture" class="h-5 w-5 mr-2">
          SCSS
        </li>
        <li class="flex items-center">
          <img src="https://cdn.iconscout.com/icon/free/png-512/linux-17-570099.png" alt="profile picture" class="h-5 w-5 mr-2">
          Linux
        </li>
        <li class="flex items-center">
          <img src="https://cdn.freebiesupply.com/logos/large/2x/vim-logo-png-transparent.png" alt="profile picture" class="h-5 w-5 mr-2">
          Vim
        </li>
      </ul>
    </div>
  </div>
</template>

<style scoped>

</style>