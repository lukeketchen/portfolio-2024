<script setup>
import {computed, onMounted, ref} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";
import {marked} from "marked";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
  project: {
    type: Object,
    required: false
  }
});
const existingProject = ref(false);
const loading = ref(false);

onMounted(() => {
  if (props.project) {
    newProject.value = props.project;
    existingProject.value = true;
  }
});

const newProject = ref({
  title: '',
  short_description: '',
  description: '',
  content: '',
  image_url: null,
  github_url: null,
  demo_url: null,
  technologies: '',
  duration: '',
  framework: 'laravel',
  is_active: false
})

function createProject() {
  axios.post('/admin/admin-projects', newProject.value)
      .then(response => {
        swal({
          title: "Success!",
          text: "Project created successfully",
          icon: "success",
        })
        clearProject();
      })
      .catch(error => {
        swal({
          title: "oh no!",
          text: error.message,
          icon: "error",
        });
      });
}

function getProject() {
  loading.value = true;
  axios.get(`/admin/admin-projects/${newProject.value.id}`)
      .then(response => {
        console.log(response.data);
        newProject.value = response.data;
        loading.value = false;
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

function saveProject() {
  axios.put(`/admin/admin-projects/${newProject.value.id}`, newProject.value)
      .then(response => {
        getProject();
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

function deleteProject() {
  axios.delete(`/admin/admin-projects/${newProject.value.id}`)
      .then(response => {
        clearProject();
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

</script>

<template>
  <div v-if="!loading">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-gray-400 opacity-40 font-bold">
        Create Project
      </h1>
      <div v-if="existingProject">
        <SecondaryButton @click="deleteProject">
          Delete Project
        </SecondaryButton>
        <PrimaryButton class=" ml-4"
                       @click="saveProject">
          Save Project
        </PrimaryButton>
      </div>
      <PrimaryButton class=""
                     v-else
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
        <TextInput v-model="newProject.image_url" label="Image URL" placeholder="Image URL" />
      </div>
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
      <div v-if="existingProject">
        <SecondaryButton @click="deleteProject">
          Delete Project
        </SecondaryButton>
        <PrimaryButton class=" ml-4"
                       @click="saveProject">
          Save Project
        </PrimaryButton>
      </div>
      <PrimaryButton class=""
                     v-else
                     @click="createProject">
        Create Project
      </PrimaryButton>
    </div>
  </div>
</template>