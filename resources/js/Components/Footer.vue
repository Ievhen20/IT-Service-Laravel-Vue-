<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-1 gap-12 w-full bg-white py-16 px-[15.5%]">
    <div class="grid grid-cols-2 md:grid-cols-2 gap-12 justify-between">
      <div>
        <div class="flex pb-[20px]">
          <img src="/assets/Image/default-logo.png" class="w-[80px] object-contain md:w-[5.2vw]" />
          <h1 class="text-[32px] text-[#1B1646] md:text-[2.5vw]">CREATIVE</h1>
        </div>
        <div>
          <div class="flex flex-row justify-center align-center mt-4">
            <div class="w-[20%] m-auto text-center">
              <span><i class="fas fa-map-marker-alt text-[24px] text-[#FC7952]"></i></span>
            </div>
            <h4 class="flex-1 text-[#3F4B4B]">Envato Pty Ltd, 13/2 Elizabeth St Melbourne VIC 3000, Australia</h4>
          </div>
          <div class="flex flex-row justify-center align-center mt-4">
            <div class="w-[20%] m-auto text-center">
              <span><i class="fas fa-mobile-alt text-[24px] text-[#FC7952]"></i></span>
            </div>
            <h4 class="flex-1 text-[#3F4B4B] text-[#1B1646]">(+01) 123 456 7890</h4>
          </div>
          <div class="flex flex-row justify-center align-center mt-4">
            <div class="w-[20%] m-auto text-center">
              <span><i class="fas fa-envelope text-[24px] text-[#FC7952]"></i></span>
            </div>
            <h4 class="flex-1 text-[#3F4B4B] text-[#1B1646]">help@creative.com</h4>
          </div>
        </div>
      </div>
      <div class="grid">
        <div class="text-left px-4">
          <h4 class="pb-[20px] pt-[20px] m-auto text-[#1B1646]">About Us</h4>
          <p class="mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis
            non accumsan in, tempor dictum neque.</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      <div class="text-left">
        <h4 class="pb-[20px] pt-[20px] m-auto text-[#1B1646]">Company</h4>
        <ul class="list-none mt-[24px] mx-[0]">
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>About</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Contact Us
          </li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Blog</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Culture</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Jobs</li>
        </ul>
      </div>
      <div class="text-left">
        <h4 class="pb-[20px] pt-[20px] m-auto text-[#1B1646]">Support</h4>
        <ul class="list-none mt-[24px] mx-[0]">
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Getting
            started</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Chat our
            support
          </li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Help center
          </li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Service
            status</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Report a blog
          </li>
        </ul>
      </div>
      <div class="text-left">
        <h4 class="pb-[20px] pt-[20px] m-auto text-[#1B1646]">Service</h4>
        <ul class="list-none mt-[24px] mx-[0]">
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Pricing</li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Sales and
            Refunds
          </li>
          <li><span class="px-3"><i class="fas fa-check-square text-[20px] mt-3 text-[#FC7952]"></i></span>Blog</li>
        </ul>
      </div>
    </div>
  </div>
</template>
<!-- <template>
  <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-16 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <div class="flex items-center gap-4 pb-6">
          <img src="/assets/Image/default-logo.png" class="w-16 object-contain" alt="Creative Logo" />
          <h1 class="text-3xl md:text-4xl font-bold text-[#1B1646]">CREATIVE</h1>
        </div>
        <div class="space-y-6">
          <div class="flex items-center gap-4">
            <i class="fas fa-map-marker-alt text-2xl text-[#FC7952]"></i>
            <p class="text-sm md:text-base text-[#3F4B4B]">
              Envato Pty Ltd, 13/2 Elizabeth St Melbourne VIC 3000, Australia
            </p>
          </div>
          <div class="flex items-center gap-4">
            <i class="fas fa-mobile-alt text-2xl text-[#FC7952]"></i>
            <p class="text-sm md:text-base text-[#1B1646]">(+01) 123 456 7890</p>
          </div>
          <div class="flex items-center gap-4">
            <i class="fas fa-envelope text-2xl text-[#FC7952]"></i>
            <p class="text-sm md:text-base text-[#1B1646]">help@creative.com</p>
          </div>
        </div>
      </div>

      <div>
        <h4 class="text-lg md:text-xl font-bold text-[#1B1646] pb-4">About Us</h4>
        <p class="text-sm md:text-base text-[#3F4B4B] leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non accumsan in,
          tempor dictum neque.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
      <div>
        <h4 class="text-lg md:text-xl font-bold text-[#1B1646] pb-4">About Us</h4>
        <p class="text-sm md:text-base text-[#3F4B4B] leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non accumsan in,
          tempor dictum neque.
        </p>
      </div>
      <div>
        <h4 class="text-lg md:text-xl font-bold text-[#1B1646] pb-4">Our Services</h4>
        <p class="text-sm md:text-base text-[#3F4B4B] leading-relaxed">
          Suspendisse potenti. Phasellus eu lorem et felis posuere convallis non non libero.
        </p>
      </div>
      <div>
        <h4 class="text-lg md:text-xl font-bold text-[#1B1646] pb-4">Contact Us</h4>
        <p class="text-sm md:text-base text-[#3F4B4B] leading-relaxed">
          Get in touch with us for collaboration or inquiries. We’re happy to help!
        </p>
      </div>
    </div>
  </div>
</template> -->
