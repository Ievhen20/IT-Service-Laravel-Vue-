<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

  <Head title="About" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        About Our Expert Developers & Teams
      </h2>
    </template>
    <section>
      <h1>Our IT Service Company is always here and offer the top-notch technologies and SKills</h1>
      
    </section>
  </AuthenticatedLayout>
</template>

<script>
export default {
  props: {
    users: Array,
  }
}
</script>
