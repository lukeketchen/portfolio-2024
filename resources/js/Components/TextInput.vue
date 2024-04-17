<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel({
  type: String,
  required: true,
});

const props = defineProps({
  placeholder: String,
  label: String,
  required: {
    type: Boolean,
    default: false,
  },
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
  <input
      class="border-b border-x-0 border-t-0 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm w-full"
      :class="{'mt-4' : !model}, {'border-red-500' : required && !model}"
      :placeholder="placeholder"
      v-model="model"
      ref="input"
  />
</template>
