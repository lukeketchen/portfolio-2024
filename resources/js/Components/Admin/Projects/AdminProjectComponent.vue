<script setup>
import {computed, onMounted, ref} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";
import {marked} from "marked";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
  projectId: {
    type: String,
    required: true
  }
});

const project = ref({
  is_active: false,
});
const loading = ref(false);
const showOutput = ref(false);

function getProject() {
  loading.value = true;
  axios.get(`/admin/admin-projects/${props.projectId}`)
      .then(response => {
        project.value = response.data.data;
        project.value.is_active = project.value.status === 'active';
        loading.value = false;
      })
      .catch(error => {
        console.log(error);
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
        })
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

const markdownInputToHtml = computed(() => {
  return marked(project.value.content);
});

</script>

<template>
  <div v-if="!loading">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-gray-400 opacity-40 font-bold">
        Project
      </h1>
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
    <div>
      <TextInput v-model="project.description" required label="Description" placeholder="Description" />
    </div>

    <div class="grid grid-cols-2 gap-4 mt-8">
      <div>
        <TextInput v-model="project.image_url" label="Image URL" placeholder="Image URL" />
      </div>
      <div>
        <TextInput v-model="project.github_url" label="Github URL" placeholder="Github URL" />
      </div>
      <div>
        <TextInput v-model="project.demo_url" label="Demo URL" placeholder="Demo URL" />
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
</template>