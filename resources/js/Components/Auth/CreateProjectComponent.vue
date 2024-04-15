<script setup>
import {onMounted, ref} from "vue";

const projects = ref(null)

function getProjects() {
  axios.get('/admin/projects')
      .then(response => {
        console.log(response.data);
        projects.value = response.data;
      })
      .catch(error => {
        console.log(error);
        swal({
          title: "oh no!",
          text: error.message,
          icon: "error",
        });
      });
}

onMounted(() => {
  getProjects();
});

</script>

<template>
  <div>
    <h1>Create Project</h1>

    <pre>{{ projects }}</pre>
  </div>
</template>

<style scoped>

</style>