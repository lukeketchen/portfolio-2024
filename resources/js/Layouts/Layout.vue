<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
import HeaderComponent from "@/Components/HeaderComponent.vue";
</script>

<template>
  <div class="min-h-screen bg-amber-50 md:max-w-7xl md:mx-auto">
    <HeaderComponent />
    <slot name="underHeader" />

    <div class="w-full mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
      <slot />
    </div>
  </div>
</template>
