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
    </div>
  </div>
</template>

<style scoped>

</style>