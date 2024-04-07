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
      <!--      <div class="w-1/2 flex items-center text-xl font-bold font-serif">-->
      <!--        About-->
      <!--      </div>-->
      <div class="w-full flex justify-center">
        <div class="relative w-full h-44">
          <div class="absolute top-0 left-1/2 -rotate-12 transform -translate-x-72">
            <img :src="images[0]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
          <div class="absolute top-0 left-1/2 rotate-12 transform translate-x-32">
            <img :src="images[1]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
          <div class="absolute top-0 left-1/2 transform -translate-x-1/2">
            <img :src="images[2]" alt="Placeholder Image" class="w-44 h-auto" />
          </div>
        </div>
      </div>
    </div>
    <div class="my-4 text-lg font-code text-center">
      <div>
        I'm Luke Ketchen, a software developer, photographer, remote pilot and electrician based in the Australia.
      </div>
      <div>
        I have a passion for creating, building and learning new things.
      </div>
      <div>
        I like efficiency, experimenting with new technologies is my jam.
      </div>
      <div>
        I haven't touched a light switch in years. Smart home for the win.
      </div>
      <div>
        Also I am heading to space one day. I'll keep you posted.
      </div>

    </div>
    <CurrentMusicComponent />
  </div>
</template>
