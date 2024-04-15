<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel({
  type: String,
  required: true,
});

const props = defineProps({
  placeholder: String,
  label: String,
  textClass: String,
  required: Boolean,
});

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute('autofocus')) {
    input.value.focus();
  }
});

defineExpose({focus: () => input.value.focus()});
</script>

<template>
  <div class="text-xs" v-if="model">{{ label }}</div>
  <textarea
      class="border-gray-200 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
      :class="textClass , {'border-red-500' : required && !model}"
      v-model="model"
      :placeholder="placeholder"
      ref="input"
  />
</template>
