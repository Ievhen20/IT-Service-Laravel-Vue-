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
          <section class="relative w-full py-5 px-[14%] m-auto">
            <div class="parent flex flex-col flex-nowrap gap-8 pt-[20px] px-4 lg:flex-row justify-center align-center">
              <!-- Left Section -->
              <div class="child w-[50%] text-left md:w-[100%] flex flex-col justify-center sm:text-center">
                <p
                  class="bg-[#D0D8FC] px-4 py-2 text-nowrap rounded-sm min-w-[270px] max-w-[270px] text-center sm:text-left text-wrap">
                  For Marketing and Creative Teams
                </p>
                <div class="text-wrap text-[6vw] sm:text-[3vw] text-[#1b1642] text-center sm:text-left">
                  We Create digitals
                </div>
                <div class="text-wrap text-[6vw] sm:text-[3vw] text-[#1b1642] font-bold text-center sm:text-left">
                  products that matter
                </div>
                <p class="text-[15px] text-center sm:text-left mt-4">
                  <!-- Contented continued any happiness instantly objection yet her allowance. Use correct day new brought
                  tedious.
                  Kept easy or sons my it done. -->
                  Welcome to GrowSun, where expertise meets innovation! We specialize in crafting cutting-edge web solutions
                  tailored to elevate your business.
                  From dynamic websites to scalable applications, trust us to bring your digital vision to life.
                </p>
                <div class="flex justify-center sm:justify-start gap-4 mt-8">
                  <button class="bg-[#7D8CFF] text-white px-6 py-3 rounded-sm">
                    TRY FOR FREE
                  </button>
                  <button class="bg-[#112257] text-white px-6 py-3 rounded-sm">
                    LEARN MORE
                  </button>
                </div>
              </div>

              <!-- Right Section -->
              <div class="w-[50%] relative sm:w-full">
                <img src="/assets/Image/team.png" class="object-cover w-full h-auto rounded-lg" alt="Team" />
                <div class="absolute bottom-0 w-full bg-gradient-to-b from-transparent to-white via-transparent h-[50vh]">
                </div>
              </div>
            </div>

            <div
              class="relative top-[8vw] flex justify-center align-center gap-2 w-[94%] h-[138px] m-auto bg-white rounded-lg shadow-custom z-20">
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/bidfire.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/replit.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/chatbot.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/consider.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/xtreme.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div class="w-[13%] m-auto">
                <img src="/assets/Image/slack.png" class="opacity-50 hover:opacity-100 transition-opacity duration-300" />
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <Footer />
  </AuthenticatedLayout>
</template>
