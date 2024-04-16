<script setup>
import {onMounted, ref} from "vue";

const observatoryWeather = ref(null);

function getObservations() {
  axios
      .get(`/forecasts`)
      .then((response) => {
        observatoryWeather.value = response.data.data;
      })
      .catch((error) => {
        console.log(error);
      });
}

onMounted(() => {
  getObservations();
});


</script>

<template>
  <div class="text-center font-serif" v-if="observatoryWeather">
    <div>
      This is the weather today where I live
    </div>
    <div>Top of {{ observatoryWeather.temp_high }}°c</div>
    <div>{{ observatoryWeather.short_text }}</div>
    <a href="/project/2" class="text-green-600">
      Learn More
    </a>
  </div>
</template>
