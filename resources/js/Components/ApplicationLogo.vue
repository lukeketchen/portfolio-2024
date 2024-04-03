<script setup>
function getImageUrl(name) {
  return new URL(`/public/images/${name}`, import.meta.url).href
}
const logo = getImageUrl("freelancerPic.png");

</script>

<template>
  <img :src="logo"  alt="icon" class="w-auto h-16"/>
</template>
