<script setup>

import Layout from "@/Layouts/Layout.vue";
import CurrentWeatherComponent from "@/Components/Home/CurrentWeatherComponent.vue";
import AboutComponent from "@/Components/Home/AboutComponent.vue";
import PortfolioComponent from "@/Components/Home/PortfolioComponent.vue";
import ContactComponent from "@/Components/Home/ContactComponent.vue";
import TestimonialsComponent from "@/Components/Home/TestimonialsComponent.vue";
import ResumeComponent from "@/Components/Home/ResumeComponent.vue";
import FooterComponent from "@/Components/FooterComponent.vue";
import HomeBaseComponent from "@/Components/Home/HomeBaseComponent.vue";
</script>

<template>

  <Layout>
    <template #underHeader>
      <div class="flex justify-end pr-2 md:pr-12">
        <CurrentWeatherComponent />
      </div>
    </template>

    <template #default>
      <div class="md:px-16">
        <HomeBaseComponent />
        <AboutComponent />
        <PortfolioComponent />
        <ContactComponent />
        <TestimonialsComponent />
        <ResumeComponent />
      </div>
      <FooterComponent />
    </template>

  </Layout>
</template>