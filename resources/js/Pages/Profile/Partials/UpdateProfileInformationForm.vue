<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});

const user = usePage().props.auth.user;

const form = useForm({
  name: user.name,
  email: user.email,
  avatar: null,
});

const avatarPreview = ref(
  user.fileName ? `/storage/${user.fileName}` : '/assets/default.png'
);

const handleFileChange = (event) => {
  const file = event.target.files[0];
  form.avatar = file;

  if (file) {
    const reader = new FileReader();
    reader.onload = (e) => {
      avatarPreview.value = e.target.result;
    };
    reader.readAsDataURL(file);
  }
};

const onSubmit = () => {
  form.post(route('profile.update'));
};
</script>

<template>
  <section>
    <header>
      <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>
      <p class="mt-1 text-sm text-gray-600">
        Update your account's profile information and email address.
      </p>
    </header>

    <form @submit.prevent="onSubmit" class="mt-6 space-y-6">
      <!-- Avatar Upload Section -->
      <div class="flex flex-col items-center sm:flex-row sm:items-start sm:gap-6">
        <div class="flex justify-center w-32 h-32 relative">
          <img :src="avatarPreview"
            class="changable w-full h-full object-cover rounded-lg border-2 border-gray-300 transition-transform duration-300 hover:scale-105"
            alt="User Avatar" />
        </div>
        <div class="mt-8 sm:mt-0 sm:flex-1">
          <label for="avatar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Change Avatar
          </label>
          <input type="file" id="avatar" name="avatar" @change="handleFileChange"
            class="block w-full text-sm text-gray-900 border border-blue-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
          <InputError class="mt-2" :message="form.errors.avatar" />
        </div>
      </div>

      <div>
        <InputLabel for="name" value="Name" />
        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus
          autocomplete="name" />
        <InputError class="mt-2" :message="form.errors.name" />
      </div>

      <div>
        <InputLabel for="email" value="Email" />
        <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
          autocomplete="username" />
        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <div v-if="mustVerifyEmail && user.email_verified_at === null">
        <p class="mt-2 text-sm text-gray-800">
          Your email address is unverified.
          <Link :href="route('verification.send')" method="post" as="button"
            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Click here to re-send the verification email.
          </Link>
        </p>
        <div v-show="status === 'verification-link-sent'" class="mt-2 text-sm font-medium text-green-600">
          A new verification link has been sent to your email address.
        </div>
      </div>

      <div class="flex items-center gap-4">
        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
        <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
          leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
          <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
            Saved.
          </p>
        </Transition>
      </div>
    </form>
  </section>
</template>
