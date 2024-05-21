<x-guest-layout>
    @include('components.hero')
      
    <div class="bg-indigo-700">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
          <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your productivity.<br>Start using our app today.</h2>
            <p class="max-w-xl mx-auto mt-6 text-lg leading-8 text-indigo-200">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
            <div class="flex items-center justify-center mt-10 gap-x-6">
              <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
              <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
      </div>
     @include('components.features')

     <div class="py-24 bg-gray-900 sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-2xl mx-auto lg:max-w-none">
            <div class="text-center">
              <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Trusted by creators worldwide</h2>
              <p class="mt-4 text-lg leading-8 text-gray-300">Lorem ipsum dolor sit amet consect adipisicing possimus.</p>
            </div>
            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Creators on the platform</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">8,000+</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Flat platform fee</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">3%</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Uptime guarantee</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">99.9%</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Paid out to creators</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">$70M</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>

      <div class="py-24 bg-white sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
          </div>
          <div class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-16 auto-rows-fr sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
              <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
              <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
              <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
      
              <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
                <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                <div class="flex items-center -ml-4 gap-x-4">
                  <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                    <circle cx="1" cy="1" r="1" />
                  </svg>
                  <div class="flex gap-x-2.5">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-none w-6 h-6 rounded-full bg-white/10">
                    Michael Foster
                  </div>
                </div>
              </div>
              <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
            </article>
      
            <!-- More posts... -->
          </div>
        </div>
      </div>

      
      
      <div class="py-24 bg-gray-900 sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-2xl mx-auto lg:max-w-none">
            <div class="text-center">
              <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Trusted by creators worldwide</h2>
              <p class="mt-4 text-lg leading-8 text-gray-300">Lorem ipsum dolor sit amet consect adipisicing possimus.</p>
            </div>
            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Creators on the platform</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">8,000+</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Flat platform fee</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">3%</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Uptime guarantee</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">99.9%</dd>
              </div>
              <div class="flex flex-col p-8 bg-white/5">
                <dt class="text-sm font-semibold leading-6 text-gray-300">Paid out to creators</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-white">$70M</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>

      
      <div class="relative pt-24 pb-32 bg-white isolate sm:pt-32">
        <div class="absolute inset-x-0 overflow-hidden -translate-y-1/2 top-1/2 -z-10 transform-gpu opacity-30 blur-3xl" aria-hidden="true">
          <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute inset-x-0 top-0 flex pt-32 overflow-hidden opacity-25 -z-10 transform-gpu blur-3xl sm:pt-40 xl:justify-end" aria-hidden="true">
          <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-xl mx-auto text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We have worked with thousands of amazing people</p>
          </div>
          <div class="grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 mx-auto mt-16 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
            <figure class="bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
              <blockquote class="p-6 text-lg font-semibold leading-7 tracking-tight text-gray-900 sm:p-12 sm:text-xl sm:leading-8">
                <p>“Integer id nunc sit semper purus. Bibendum at lacus ut arcu blandit montes vitae auctor libero. Hac condimentum dignissim nibh vulputate ut nunc. Amet nibh orci mi venenatis blandit vel et proin. Non hendrerit in vel ac diam.”</p>
              </blockquote>
              <figcaption class="flex flex-wrap items-center px-6 py-4 border-t gap-x-4 gap-y-4 border-gray-900/10 sm:flex-nowrap">
                <img class="flex-none w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80" alt="">
                <div class="flex-auto">
                  <div class="font-semibold">Brenna Goyette</div>
                  <div class="text-gray-600">@brennagoyette</div>
                </div>
                <img class="flex-none w-auto h-10" src="https://tailwindui.com/img/logos/savvycal-logo-gray-900.svg" alt="">
              </figcaption>
            </figure>
            <div class="space-y-8 xl:contents xl:space-y-0">
              <div class="space-y-8 xl:row-span-2">
                <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                  <blockquote class="text-gray-900">
                    <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                  </blockquote>
                  <figcaption class="flex items-center mt-6 gap-x-4">
                    <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div>
                      <div class="font-semibold">Leslie Alexander</div>
                      <div class="text-gray-600">@lesliealexander</div>
                    </div>
                  </figcaption>
                </figure>
      
                <!-- More testimonials... -->
              </div>
              <div class="space-y-8 xl:row-start-1">
                <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                  <blockquote class="text-gray-900">
                    <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut officia rem nulla blanditiis.”</p>
                  </blockquote>
                  <figcaption class="flex items-center mt-6 gap-x-4">
                    <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div>
                      <div class="font-semibold">Lindsay Walton</div>
                      <div class="text-gray-600">@lindsaywalton</div>
                    </div>
                  </figcaption>
                </figure>
      
                <!-- More testimonials... -->
              </div>
            </div>
            <div class="space-y-8 xl:contents xl:space-y-0">
              <div class="space-y-8 xl:row-start-1">
                <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                  <blockquote class="text-gray-900">
                    <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
                  </blockquote>
                  <figcaption class="flex items-center mt-6 gap-x-4">
                    <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div>
                      <div class="font-semibold">Tom Cook</div>
                      <div class="text-gray-600">@tomcook</div>
                    </div>
                  </figcaption>
                </figure>
                
      
                <!-- More testimonials... -->
              </div>
              <div class="space-y-8 xl:row-span-2">
                <figure class="p-6 bg-white shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                  <blockquote class="text-gray-900">
                    <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt excepturi rerum voluptatem minus harum.”</p>
                  </blockquote>
                  <figcaption class="flex items-center mt-6 gap-x-4">
                    <img class="w-10 h-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div>
                      <div class="font-semibold">Leonard Krasner</div>
                      <div class="text-gray-600">@leonardkrasner</div>
                    </div>
                  </figcaption>
                </figure>
      
                <!-- More testimonials... -->
              </div>
            </div>
          </div>
        </div>
      </div>
      
    

    </x-guest-layout>