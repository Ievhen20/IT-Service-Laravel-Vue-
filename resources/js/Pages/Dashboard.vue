<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue';
</script>

<template>

  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            You're logged in!
            Please contact with our IT  company for your successful project.
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </AuthenticatedLayout>
</template>
