<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen bg-amber-50">
    <div class="py-4 px-1 md:px-10 flex justify-between">
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
        <Link href="/" class="text-lg">About</Link>
        <Link href="/" class="text-lg">Portfolio</Link>
        <Link href="/" class="text-lg">Contact</Link>
        <Link href="/" class="text-lg">Resume</Link>
      </div>
    </div>
    <slot name="underHeader" />

    <div
        class="w-full mt-6 px-6 py-4 overflow-hidden sm:rounded-lg"
    >
      <slot />
    </div>
  </div>
</template>
