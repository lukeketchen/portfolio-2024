<script setup>
import {computed, onMounted, ref} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";
import {marked} from "marked";
import Modal from "@/Components/Modal.vue";

const loading = ref(false);
const showModal = ref(false);

const newProject = ref({
  title: '',
  short_description: '',
  description: '',
  content: '',
  image_url: null,
  github_url: '',
  demo_url: '',
  technologies: '',
  duration: '',
  framework: 'laravel',
  is_active: false,
  image_file: null
})

function createProject() {
  axios.post('/admin/admin-projects', newProject.value)
      .then(response => {
        swal({
          title: "Success!",
          text: "Project created successfully",
          icon: "success",
          timer: 500,
          buttons: false,
        })
        newProject.value.id = response.data.data.id;

        console.log('RESPONSE')
        console.log(response.data.data.id)

        showModal.value = true;
      })
      .catch(error => {
        swal({
          title: "oh no!",
          text: error.message,
          icon: "error",
        });
      });
}

function clearProject() {
  newProject.value = {
    title: '', // Required
    short_description: '', // Required
    description: '', // Required
    content: '', // Required
    image_url: null,
    github_url: null,
    demo_url: null,
    technologies: '',
    duration: '',
    framework: 'laravel',
    is_active: false
  }
}

const markdownInputToHtml = computed(() => {
  return !loading.value ? marked(newProject.value.content) : '';
});

function setProjectImage(event) {
  const data = new FormData();
  data.append('image_file', event.target.files[0]);
  data.append('project_id', newProject.value.id);

  axios.post(`/admin/admin-project-image-uploader`, data).then(response => {
    swal({
      title: "Success!",
      text: "Project image added successfully",
      icon: "success",
      timer: 500,
      buttons: false,
    })

    window.location.href = '/admin/project/' + newProject.value.id;
  }).catch(error => {
    swal({
      title: "oh no!",
      text: error.message,
      icon: "error",
    })
  })
}

</script>

<template>
  <div v-if="!loading">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-gray-400 opacity-40 font-bold">
        Create Project
      </h1>
      <PrimaryButton class=""
                     @click="createProject">
        Create Project
      </PrimaryButton>
    </div>

    <div class="flex justify-end">
      <div class="flex">
        <div>
          set Active
        </div>
        <div class="ml-2">
          <input type="checkbox" v-model="newProject.is_active">
        </div>
      </div>
    </div>
    <div class="flex gap-4">
      <div class="w-1/2">
        <TextInput v-model="newProject.title" required label="Title" placeholder="Title" />
      </div>
      <div class="w-1/2">
        <TextInput v-model="newProject.short_description" required label="Short Description" placeholder="Short Description" />
      </div>
    </div>
    <div>
      <TextInput v-model="newProject.description" required label="Description" placeholder="Description" />
    </div>

    <div class="grid grid-cols-2 gap-4 mt-8">
      <div>
        <TextInput v-model="newProject.github_url" label="Github URL" placeholder="Github URL" />
      </div>
      <div>
        <TextInput v-model="newProject.demo_url" label="Demo URL" placeholder="Demo URL" />
      </div>
      <div>
        <TextInput v-model="newProject.technologies" label="Technologies" placeholder="Technologies" />
      </div>
      <div>
        <TextInput v-model="newProject.duration" label="Duration" placeholder="Duration" />
      </div>
      <div>
        <TextInput v-model="newProject.framework" label="Framework" placeholder="Framework" />
      </div>
    </div>
    <div class="my-8">
      <TextAreaInput v-model="newProject.content"
                     placeholder="# Heading"
                     label="Content"
                     required
                     text-class="h-56" />
      <div class="uppercase opacity-20 font-bold mt-4" v-if="newProject.content !== ''">Output</div>
      <div v-html="markdownInputToHtml"
           v-if="newProject.content !== '' && !loading"
           class="border border-2 rounded-lg border-blue-300 p-4"></div>
    </div>

    <div class="flex justify-end">
      <PrimaryButton class=""
                     @click="createProject">
        Create Project
      </PrimaryButton>
    </div>
  </div>

  <Modal :show="showModal"
         :closeable="false"
         @close="showModal = false">
    <div class="p-8 relative">
      <h1 class="text-2xl font-bold text-gray-400 opacity-50">
        Add Image
      </h1>
      <p>
        Select an image to upload
      </p>

      <input type="file" @change="setProjectImage" accept="image/*" />
    </div>
  </Modal>
</template>