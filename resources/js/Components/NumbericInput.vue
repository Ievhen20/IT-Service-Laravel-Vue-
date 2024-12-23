<script setup>
import { ref, onMounted } from 'vue';

const modelValue = defineModel({
  type: [String, Number], // Accept both strings and numbers
  required: true,
});

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute('autofocus')) {
    input.value.focus();
  }
});

defineExpose({
  focus: () => input.value.focus(),
});
</script>

<template>
  <input class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)" type="number" ref="input" />
</template>