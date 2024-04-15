<script setup>

import {ref} from "vue";
import CreateProjectComponent from "@/Components/Admin/Projects/CreateProjectComponent.vue";
import ProjectsListComponent from "@/Components/Admin/Projects/ProjectsListComponent.vue";

const viewType = ref({
  list: true,
  new: false
});

function setViewType(type) {
  console.log(type)

  if (type === 'list') {
    viewType.value.list = true;
    viewType.value.new = false;
  } else {
    viewType.value.list = false;
    viewType.value.new = true;
  }
}
</script>

<template>
  <div class="grid grid-cols-2 text-center">
    <button class="p-4"
            :class="viewType.list ? 'border-x border-t' : 'border-b'"
            @click="setViewType('list')">
      List
    </button>
    <button class="p-4"
            :class="viewType.new ? 'border-x border-t' : 'border-b'"
            @click="setViewType('new')">
      Create New
    </button>
  </div>

  <CreateProjectComponent v-if="viewType.new" />
  <ProjectsListComponent v-if="viewType.list" />
</template>
