<script setup>
import {computed, onMounted, ref} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";
import {marked} from "marked";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Modal from "@/Components/Modal.vue";

const props = defineProps({
  projectId: {
    type: String,
    required: true
  }
});

const project = ref({
  title: '',
  short_description: '',
  description: '',
  content: '',
  image_url: '',
  github_url: '',
  demo_url: '',
  technologies: '',
  duration: '',
  framework: 'laravel',
  is_active: false,
});
const loading = ref(false);
const showOutput = ref(false);
const showModal = ref(false);

function getProject() {
  loading.value = true;
  axios.get(`/admin/admin-projects/${props.projectId}`)
      .then(response => {
        project.value = response.data.data;
        project.value.is_active = project.value.status === 'active';
        loading.value = false;
      })
      .catch(error => {
        swal({
          title: "oh no!",
          text: error.message,
          icon: "error",
        });
      });
}

onMounted(() => {
  getProject();
});

function saveProject() {
  axios.put(`/admin/admin-projects/${project.value.id}`, project.value)
      .then(response => {
        swal({
          title: "Success!",
          text: "Project saved successfully",
          icon: "success",
          timer: 500,
        })
        getProject();
      })
      .catch(error => {
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
        swal({
          title: "Success!",
          text: "Project deleted successfully",
          icon: "success",
          timer: 500,
        })

        window.location.href = '/admin/projects';
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

const markdownInputToHtml = computed(() => {
  return marked(project.value.content);
});

function setProjectImage(event) {
  const data = new FormData();
  data.append('image_file', event.target.files[0]);
  data.append('project_id', project.value.id);

  axios.post(`/admin/admin-project-image-uploader`, data).then(response => {
    showModal.value = false;

    swal({
      title: "Success!",
      text: "Project image added successfully",
      icon: "success",
      timer: 500,
      buttons: false,
    })

    getProject();

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
        Project
      </h1>
      <div>
        <a :href="'/project/' + project.id"
           class="mr-4"
           target="_blank">
          View Project
        </a>
        <SecondaryButton @click="deleteProject">
          Delete Project
        </SecondaryButton>
        <PrimaryButton class=" ml-4"
                       @click="saveProject">
          Save Project
        </PrimaryButton>
      </div>
    </div>

    <div class="flex justify-end">
      <div class="flex">
        <div>
          set Active
        </div>
        <div class="ml-2">
          <input type="checkbox" v-model="project.is_active">
        </div>
      </div>
    </div>
    <div class="flex gap-4">
      <div class="w-1/2">
        <TextInput v-model="project.title" required label="Title" placeholder="Title" />
      </div>
      <div class="w-1/2">
        <TextInput v-model="project.short_description" required label="Short Description" placeholder="Short Description" />
      </div>
    </div>
    <div class="my-4">
      <TextInput v-model="project.description" required label="Description" placeholder="Description" />
    </div>

    <div class="grid grid-cols-2 gap-4 mt-8">
      <div>
        <div>
          <img :src="project.image_url" alt="Project Image" class="w-32 h-32 object-cover rounded-lg" />
        </div>
        <PrimaryButton class="my-4"
                       @click="showModal = true">
          Change Image
        </PrimaryButton>
      </div>
      <div>
        <div class="my-4">
          <TextInput v-model="project.github_url" label="Github URL" placeholder="Github URL" />
        </div>
        <div class="my-4">
          <TextInput v-model="project.demo_url" label="Demo URL" placeholder="Demo URL" />
        </div>
      </div>
      <div>
        <TextInput v-model="project.technologies" label="Technologies" placeholder="Technologies" />
      </div>
      <div>
        <TextInput v-model="project.duration" label="Duration" placeholder="Duration" />
      </div>
      <div>
        <TextInput v-model="project.framework" label="Framework" placeholder="Framework" />
      </div>
    </div>
    <div class="my-8">
      <TextAreaInput v-model="project.content"
                     placeholder="# Heading"
                     label="Content"
                     required
                     text-class="h-56" />
      <div class="uppercase opacity-20 font-bold mt-4" v-if="project.content !== ''">Output</div>
      <PrimaryButton @click="showOutput = true">
        Show Output
      </PrimaryButton>
      <div v-html="markdownInputToHtml"
           v-if="showOutput"
           class="border border-2 rounded-lg border-blue-300 p-4"></div>
    </div>

    <div class="flex justify-end">
      <div>
        <SecondaryButton @click="deleteProject">
          Delete Project
        </SecondaryButton>
        <PrimaryButton class=" ml-4"
                       @click="saveProject">
          Save Project
        </PrimaryButton>
      </div>
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