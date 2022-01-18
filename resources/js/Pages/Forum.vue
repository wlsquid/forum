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
                       <ForumThumb v-for="item in ForumArticles" :key="item.id"
                       :title="item.forumTitle"
                       :textIntro="item.nText"
                       :likes="item.nLikes"
                       :nAuthor="item.nAuthor"
                       :comments="item.nComments"
                       :date="item.nDate"
                       :imageUrl="item.nImgUrl"
                       />
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
            AppLayout,
            ForumThumb
        },
        data() {
            return {
                ForumArticles: [
                    { id: 1, forumTitle: 'f 1', nText: 'ft 1', nLikes: 1, nAuthor: 'Author 1', nComments: 1, nDate: '1 Febuary', nImgUrl: '#' },
                     { id: 2, forumTitle: 'f 2', nText: 'ft 2', nLikes: 2, nAuthor: 'Author 2', nComments: 2, nDate: '2 Febuary', nImgUrl: '#' }
                ]
            }
        }
    })
</script>
