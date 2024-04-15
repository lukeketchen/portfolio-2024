<script setup>

import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
  <div id="contact" class="my-56 grid grid-cols-2">
    <div>
      <div class=" w-3/4 mx-auto h-full flex items-center justify-center">
        <ApplicationLogo class="h-full" />
      </div>
    </div>
    <div class="flex items-center justify-center text-center">
      <div>
        <div class="font-serif text-xl">Let's Talk</div>
        <div class="text-sm">Easiest point of contact is email</div>
        <div class="my-4 flex flex-col font-code">
          <a href="mailto:luke.ketchen@gmail.com" class="text-blue-500">
            luke.ketchen@gmail.com
          </a>
          <a href="https://www.linkedin.com/in/luke-ketchen-706882107/" target="_blank" class="text-blue-500">
            LinkedIn
          </a>
          <a href="https://github.com/lukeketchen" target="_blank" class="text-blue-500">
            GitHub
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>