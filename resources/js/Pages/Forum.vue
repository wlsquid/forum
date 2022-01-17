<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Forum
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container mx-auto flex flex-col my-4">
                       <div class="border-b-0 px-5 border-b-gray-800 flex-wrap flex justify-center items-center">
                        <div class="w-full md:w-2/12">
                          Threads: 1,200
                        </div>
                        <div class="w-full md:w-6/12 flex items center">
                          <label class="mr-2 py-2"> Sort By: </label> <select name="sort-by-forum" id="sort-by-forum">
                              <option value="newest">Newest</option>
                              <option value="most-commented">Most Commented</option>
                              <option value="most-liked">Most Liked</option>
                          </select>
                         <label class="mr-2 ml-2 py-2"> Tag Filter: </label><select name="tag-filter" id="tag-filter-forum">
                              <option value="Birds">Birds</option>
                              <option value="Marsupials">Marsupials</option>
                              <option value="Mammals">Mammals</option>
                              <option value="Insects">Insects</option>
                         </select>
                        </div>
                        <div class=" w-full w-4/12">
                            <a class="px-5 py-3 bg-green-700 float-right rounded-md text-white" href="#">Create Thread</a>
                        </div>
                       </div>

                    </div>
                    
                </div>
                <div class="container mx-auto flex flex-col mt-3 p-5">
                     <!-- forum thumb -->
                       <div class="w-full hover:shadow-lg border-gray-400 border-2 rounded-md bg-white">
                          <div class="flex flex-wrap items-center p-5">
                           <div class="w-100 mb-5"><h2 class="text-xl">Title</h2></div>
                           <div class="w-100 mb-5"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. S
                               it, et? Asperiores voluptas eum aliquid saepe cu
                               lpa commodi veniam! Voluptate suscipit corporis repellat accusamus eos ipsam ullam itaq
                               ue dolore at excepturi?</p>
                          </div>
                          <div class="w-full md:w-3/12 flex justify-start gap-x-2 mb-5">
                          <a href="#" class="flex items-center gap-x-1 ">
                             <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
</svg>
                         <span>
                             0
                         </span>
                          </a>
                          <a href="#" class="flex items-center gap-x-2">
                             <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
</svg>
                         <span>
                             0  
                         </span>
                          </a>
                          </div>
                          <div class="w-full md:w-9/12">
                             <a class="b-gray-700 border-2 rounded-md px-5 py-2 hover:bg-gray-100 float-right" href="#">Tag</a>
                          </div>
                          <div class="w-full md:w-4/12">
                            <a href="#" class="overflow-hidden rounded-full">
                            <img src="" alt="">
                            </a>
                          </div>
                          <div class="w-full md:w-4/12">
                             <span>Posted At: 12th febuary 2021</span>
                          </div>
                          <div class="w-full md:w-4/12">
                             <span></span>
                          </div>
                          </div>
                       </div>
                       <!-- end forum thumb -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    //import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout
        },
    })
</script>
