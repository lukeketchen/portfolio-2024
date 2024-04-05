<script setup>

import {Link} from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
  <div id="top" class="py-4 px-1 md:px-10 flex justify-between">
    <div>
      <Link href="/" class="flex items-center">
        <div class="font-serif text-lg font-bold">
          Luke ketchen
        </div>
        <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
      </Link>
    </div>
    <div class="flex items-center gap-8">
      <Link href="/" class="text-lg">Home</Link>
      <Link href="/#about" class="text-lg">About</Link>
      <Link href="/#portfolio" class="text-lg">Portfolio</Link>
      <Link href="/#contact" class="text-lg">Contact</Link>
      <Link href="/#resume" class="text-lg">Resume</Link>
      <Link href="/blog" class="text-lg font-serif flex">"Talking Rubbish"
        <div class="w-5 ml-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
          </svg>
        </div>
      </Link>
    </div>
  </div>
</template>

<style scoped>

</style>