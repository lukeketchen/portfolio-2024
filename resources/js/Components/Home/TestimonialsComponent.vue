<script setup>
import {ref} from 'vue'

const testimonials = ref([
  {
    name: 'John Doe',
    title: 'CEO',
    company: 'Company A',
    testimonial: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum aliquam. Nullam nec nunc nec nunc.',
    logo: 'https://via.placeholder.com/150'
  },
  {
    name: 'Jane Doe',
    title: 'CTO',
    company: 'Company B',
    testimonial: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum aliquam. Nullam nec nunc nec nunc.',
    logo: 'https://via.placeholder.com/150'
  },
  {
    name: 'John Smith',
    title: 'CFO',
    company: 'Company C',
    testimonial: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien fermentum aliquam. Nullam nec nunc nec nunc.',
    logo: 'https://via.placeholder.com/150'
  }
])

</script>

<template>
  <div id="testimonials" class="my-56">
    <div class="text-center font-serif text-xl">
      Testimonials
    </div>
    <div class="flex gap-16 mt-24">
      <div v-for="testimonial in testimonials" :key="testimonial.name" class="px-8 pb-4 pt-16 border border-black rounded-xl relative">
        <div class="absolute -top-12 left-1/2">
          <img :src="testimonial.logo" alt="Testimonial" width="150" height="150" class="rounded-full transform -translate-x-1/2 w-24 h-24 mx-auto border border-black">
        </div>
        <div class="text-center">
          <div class="text-xl font-serif font-bold">
            {{ testimonial.name }}
          </div>
          <div class="text-lg font-serif">
            {{ testimonial.title }}, {{ testimonial.company }}
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