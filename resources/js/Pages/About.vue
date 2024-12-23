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
    <section class="w-full">
      <div class="px-[10%] py-[8vw]">
        <div class="flex flex-wrap justify-between m-auto">
          <div class="w-full px-12 lg:w-[60%]">
            <div class="text-left">
              <h4 class="text-[#7D8CFF]">Achievement</h4>
              <!-- Inspiration Comes Only During Work. -->
              <h1 class="text-[#1b1642] text-[2.6rem]">Products Successfully Launched</h1>
              <h2 class="text-[#1b1642] text-[3.2rem] font-bold DM-Sans">In The Previous 12 Months</h2>
            </div>
            <div class="relative my-auto pr-8 flex justify-center align-center">
              <img src="/assets/Image/developers.png" class="rounded-lg m-auto" />
              <span
                class="absolute top-[8vw] flex justify-center items-center w-[90px] h-[90px] rounded-full bg-[#7D8CFF] outline outline-1 outline-white animate-outline-animation">
              </span>
              <div
                class="absolute top-[8vw] flex justify-center items-center w-[90px] h-[90px] rounded-full bg-[#7D8CFF] cursor-pointer z-1000">
                <div class="m-auto p-auto"><span><i class="fas fa-play text-white text-[22px]"></i></span></div>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-[40%]">
            <div class="inspiration">
              <h4 class="text-[#7D8CFF]">The work we do willingly</h4>
              <!-- Inspiration Comes Only During Work. -->
              <h1 class="text-[#1b1642] text-[3rem]">Inspiration Comes Only</h1>
              <h2 class="text-[#1b1642] text-[3.2rem] font-bold DM-Sans">During Work.</h2>
              <p class="py-8">This letter expresses our sincere gratitude for the excellent work that your company has
                done.
                I would
                like
                to note the high professionalism of the entire team, the ability to work with the customer, taking into
                account all his wishes.
              </p>
              <div class="relative w-[90%] mt-[3vw] mb-[30px]">
                <h4 class="border-b-[4px] border-[#7D8CFF]">Project delivered on time</h4>
                <span
                  class="tooltip absolute text-white text-[12px] right-[0] bottom-[10px] px-4 py-1 bg-[#112257]">90%</span>
                <span
                  class="absolute right-[10px] bottom-[2px] w-0 h-0 border-l-[10px] border-r-[8px] border-t-[8px] border-l-transparent border-r-transparent border-t-[#112257]">
                </span>
              </div>
              <div class="relative w-[45%] mt-[3vw]">
                <h4 class="border-b-[4px] border-[#7D8CFF]">Availability</h4>
                <span
                  class="tooltip absolute text-white text-[12px] right-[0] bottom-[10px] px-4 py-1 bg-[#112257]">35%</span>
                <span
                  class="absolute right-[10px] bottom-[2px] w-0 h-0 border-l-[10px] border-r-[8px] border-t-[8px] border-l-transparent border-r-transparent border-t-[#112257]">
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
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
