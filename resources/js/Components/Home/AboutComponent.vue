<script setup>

import {ref} from "vue";
import CurrentMusicComponent from "@/Components/Home/CurrentMusicComponent.vue";

const images = ref([
  new URL(`/public/images/photography/coast__drone_view_Luke_ketchen.jpg`, import.meta.url).href,
  new URL(`/public/images/photography/day8photo.jpg`, import.meta.url).href,
  new URL(`/public/images/DJI_0036-Edit.jpg`, import.meta.url).href,
]);

</script>

<template>
  <div id="about" class="my-56">
    <div class="flex">
      <div class="w-1/2 flex items-center text-xl font-bold font-serif">
        About
      </div>
      <div class="w-1/2 flex justify-center">
        <div class="relative w-full h-44">
          <div class="absolute top-0 left-1/2 -rotate-12 transform -translate-x-24">
            <img :src="images[0]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
          <div class="absolute top-0 left-1/2 rotate-12 transform translate-x-24">
            <img :src="images[1]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
          <div class="absolute top-0 left-1/2">
            <img :src="images[2]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
        </div>
      </div>
    </div>
    <div class="my-4">
      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis
      lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac,
      vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
      mus. Donec ullamcorper nulla non metus auctor fringilla.
    </div>
    <CurrentMusicComponent />
  </div>
</template>
