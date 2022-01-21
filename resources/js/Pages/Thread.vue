<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Thread Name
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container mx-auto flex flex-col mt-3 p-5">
                     <!-- forum thumb -->
                       <!-- <ForumThumb v-for="item in ForumArticles" :key="item.id"
                       :title="item.forumTitle"
                       :textIntro="item.nText"
                       :likes="item.nLikes"
                       :nAuthor="item.nAuthor"
                       :comments="item.nComments"
                       :date="item.nDate"
                       :imageUrl="item.nImgUrl"
                       /> -->
                       <div class="w-full shadow-md border-gray-400 rounded-md mt-5 bg-white">
                          <div class="flex flex-wrap items-center p-5">
                           <div class="w-2/12 p-2 flex flex-col mb-5 border-r-2 border-gray-400">
                            <div class="w-full">
                            <a href="#" class="overflow-hidden rounded-full">
                            <img v-bind:src="imageUrl" v-bind:alt="author">
                            </a>
                          <div class="w-full">
                             <span>author</span>
                          </div>
                          <div>
                            <a href="#">Message</a>
                          </div>
                          </div>
                           </div>
                           <div class="w-10/12 p-2 mb-5">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam incidunt quibusdam, assumenda itaque repellendus iusto porro facilis enim corporis officia eos at voluptatem suscipit commodi ipsam tempore est culpa aliquid.</p>
                            <div class="w-full">
                             <span>Posted At: date</span>
                          </div>
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
    import ForumThumb from '@/forum/ForumThumb.vue'
    //import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout
        },
  
    })
</script>