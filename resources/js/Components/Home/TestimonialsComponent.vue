<script setup>
import {ref} from 'vue'

const testimonials = ref([
  {
    name: 'Chloe Waddell',
    company: 'The Hippie Whippy',
    testimonial: 'Luke has created a very functional and aesthetic website for my business. He was professional, and always happy to take our ideas on board. We are so happy with the website and would highly recommend Luke for others looking for this service.',
    logo: new URL(`/public/images/the-hippie-whippy-logo.png`, import.meta.url).href,
  },
])

</script>

<template>
  <div id="testimonials" class="my-56">
    <div class="flex gap-16 mt-24">
      <div v-for="testimonial in testimonials" :key="testimonial.name" class="px-8 pb-4 pt-16 border border-black rounded-xl relative">
        <div class="absolute -top-12 left-1/2">
          <img :src="testimonial.logo" alt="Testimonial" width="150" height="150" class="transform -translate-x-1/2 w-24 h-24 mx-auto">
        </div>
        <div class="text-center">
          <div class="text-xl font-serif font-bold">
            {{ testimonial.name }}
          </div>
          <div class="text-lg font-serif">
            {{ testimonial.company }}
          </div>
          <div class="text-lg font-serif">
            {{ testimonial.testimonial }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>