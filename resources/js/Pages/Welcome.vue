<script setup>
import { Head, Link } from '@inertiajs/vue3';
import '@fortawesome/fontawesome-free/css/all.css';
import Footer from '@/Components/Footer.vue';

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});

</script>

<template>

  <Head title="Welcome" />
  <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <section class="relative flex flex-row justify-between selection:bg-[#FF2D20] selection:text-white">
      <section class="flex justify-between w-full text-center py-2 px-[10%] bg-[#282E67] text-white">
        <p>Welcome Expert Laravel-Vue-Tailwind CSS Development Team</p>
        <ul class="flex flex-row gap-3">
          <li>
            <Link href="#"><i class="fab fa-facebook"></i></Link>
          </li>
          <li>
            <Link href="#"><i class="fab fa-twitter"></i></Link>
          </li>
          <li>
            <Link href="#"><i class="fab fa-instagram"></i></Link>
          </li>
          <li>
            <Link href="#"><i class="fab fa-linkedin"></i></Link>
          </li>
          <li>
            <Link href="#"><i class="fab fa-youtube"></i></Link>
          </li>
        </ul>
      </section>
    </section>
    <section class="align-center w-full px-[12%] text-black">
      <div class="flex justify-between">
        <nav v-if="canLogin" class="-mx-3 flex flex-1">
          <Link v-if="$page.props.auth.user" :href="route('dashboard')"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          Dashboard
          </Link>

          <template v-else>
            <div class="flex flex-row w-full justify-between py-8 align-center">
              <div class="flex justify-center align-center">
                <img src="/assets/Image/logo.png" class="w-[8vw]" />
              </div>
              <div class="my-auto">
                <Link :href="route('login')"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
                </Link>
              </div>
            </div>
          </template>
        </nav>
      </div>
    </section>
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
    <section class="w-full bg-[#ffffcc] pt-[16vw] pb-12 clip-polygon-1 z-10 lg:pt-[12vw]">
      <div class="text-[#1B1646] w-[35%] m-auto text-center">
        <h1 class="text-[18px] font-[1000] sm:text-[2.6vw]">Let’s Check Our Scientific</h1>
        <h2 class="text-[2.4vw] px-2 hover:cursor-pointer">
          Digital Marketing Solutions
        </h2>
      </div>
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-center px-[10%] py-4 w-full mx-auto text-center">
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fa-chart-line"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Digital Analytics</h1>
          <h6 class="px-[10%]">We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more <span class="hover:mx-50px">-></span></Link>
        </div>
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fas fa-bullhorn"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Digital Marketing</h1>
          <h6>We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more -></Link>
        </div>
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fas fa-envelope"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Email Marketing</h1>
          <h6>We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more -></Link>
        </div>
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fas fa-robot"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Email Marketing</h1>
          <h6>We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more -></Link>
        </div>
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fas fa-share-alt"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Email Marketing</h1>
          <h6>We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more -></Link>
        </div>
        <div class="w-full bg-white p-4 rounded-[12px]">
          <div class="w-full m-auto flex justify-center aligh-center">
            <div
              class="relative w-[90px] h-[90px] bg-orange-500 text-white text-[2rem] pt-[15px] rounded-[50%] hover:bg-gray-500 transition-bg duration-500 cursor-pointer ">
              <span><i class="fas fas fa-key"></i></span>
              <div class="absolute bg-green-500 w-[24px] h-[24px] rounded-[50%] right-[0px] top-[4px] border-[4px]">
              </div>
            </div>
          </div>
          <h1 class="text-[24px] mt-[32px] mb-[12px] text-black font-bold">Email Marketing</h1>
          <h6>We use the latest technologies it voluptatem accusantium do loremque laudantium.</h6>
          <Link href="#">Read more -></Link>
        </div>0
      </div>
    </section>
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
    <section>
      <div class="w-full flex justify-center px-[10%] pb-8">
        <div class="w-full lg:w-[45%]">
          <h4 class="text-[#7D8CFF]">Planning On Developing A Product</h4>
          <h1 class="text-[#1b1642] text-[3rem]">Popular Features That Your</h1>
          <h2 class="text-[#1b1642] text-[3.2rem] font-bold DM-Sans">Business Needs</h2>
          <p class="py-8">
            
          </p>
          <!-- Feature List -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 w-full">
            <h4 class="flex items-center">
              <span class="px-3"><i class="fas fa-check-square text-[20px] text-[#FC7952]"></i></span>
              Integrations
            </h4>
            <h4 class="flex items-center">
              <span class="px-3"><i class="fas fa-check-square text-[20px] text-[#FC7952]"></i></span>
              Automations
            </h4>
            <h4 class="flex items-center">
              <span class="px-3"><i class="fas fa-check-square text-[20px] text-[#FC7952]"></i></span>
              Reporting
            </h4>
            <h4 class="flex items-center">
              <span class="px-3"><i class="fas fa-check-square text-[20px] text-[#FC7952]"></i></span>
              Insights
            </h4>
          </div>
          <div class="relative my-12">
            <button
              class="relative w-[50%] bg-[#1B1646] px-6 py-1.5 text-white rounded-md overflow-hidden group hover:bg-[#7D8CFF] focus:bg-[#7D8CFF]">
              <!-- Default Text -->
              <span
                class="block relative transition-transform duration-300 group-hover:-translate-y-full group-focus:-translate-y-full">
                VIEW ALL FEATURES
              </span>
              <!-- New Text -->
              <span
                class="block absolute text-center transition-transform duration-300 group-hover:translate-y-0 text-white group-focus:translate-y-0">
                VIEW ALL FEATURES
              </span>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-[55%]">
          <div class="m-auto px-8">
            <img src="/assets/Image/work-graph.png" />
          </div>
        </div>
      </div>
    </section>
    <section class="w-full bg-[#282E67]">
      <div class="flex justify-center"
        style="background-image: url('/assets/Image/linear_bg.png'); background-size: 23%; background-position: center; background-repeat: repeat;">
        <div class="flex flex-col lg:flex-row pt-[60px] items-center lg:items-start">
          <!-- Image Container -->
          <div class="relative lg:top-[70px] right-[10%] lg:w-1/3 w-full flex justify-center lg:justify-start">
            <img src="/assets/Image/member-1.png" class="max-w-[800px] w-full lg:w-auto" alt="Member Image" />
          </div>
          <!-- Text Container -->
          <div class="pl-[10%] py-[40px] lg:pt-[120px] lg:w-2/3 w-full text-center lg:text-left">
            <div>
              <h5 class="text-white text-lg font-semibold">Achievement</h5>
              <h1 class="text-white text-2xl lg:text-5xl font-bold mt-2">
                Products Successfully Launched
              </h1>
              <h1 class="text-white text-2xl lg:text-5xl font-bold">
                in the previous 12 months
              </h1>
            </div>
            <div class="flex mt-[50px]">
              <span
                class="relative flex justify-center items-center w-[90px] h-[90px] rounded-full bg-yellow-500 outline outline-1 outline-white animate-outline-animation">
              </span>
              <div
                class="absolute flex justify-center items-center w-[90px] h-[90px] rounded-full bg-yellow-500 z-1000">
                <div class="m-auto p-auto"><span><i class="fas fa-play text-white text-[22px]"></i></span></div>
              </div>
              <h4 class="my-auto py-auto ml-[24px] text-white font-bold">Play Intro Video</h4>
            </div>
            <div class="flex flex-wrap justify-around align-center">
              <div class="flex justify-between align-center">
                <div
                  class="flex items-center justify-center w-12 h-12 rounded-full bg-transparent border-[3px] border-orange-500 my-auto">
                  <i class="fas fa-arrow-up  text-orange-500 text-[28px]"></i>
                </div>
                <div class="pl-4 text-white">
                  <h4 class="text-[48px] font-bold">93%</h4>
                  <h4 class="text-16px">Increase In Monthly</h4>
                </div>
              </div>
              <div class="flex justify-between align-center">
                <div
                  class="flex items-center justify-center w-12 h-12 rounded-full bg-transparent border-[3px] border-orange-500 my-auto">
                  <i class="fas fa-arrow-up  text-orange-500 text-[28px]"></i>
                </div>
                <div class="pl-4 text-white">
                  <h4 class="text-[48px] font-bold">50K</h4>
                  <h4 class="text-16px">Revenue generated</h4>
                </div>
              </div>
              <div class="flex justify-between align-center">
                <div
                  class="flex items-center justify-center w-12 h-12 rounded-full bg-transparent border-[3px] border-orange-500 my-auto">
                  <i class="fas fa-arrow-up  text-orange-500 text-[28px]"></i>
                </div>
                <div class="pl-4 text-white">
                  <h4 class="text-[48px] font-bold">57K</h4>
                  <h4 class="text-16px">Total Downloads</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <Footer />
  </div>
</template>
