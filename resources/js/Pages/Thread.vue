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
                     <!-- Reply thumb -->
                       <Reply v-for="item in ForumItems" :key="item.id"
                       :postText="item.nText"
                       :textReply="item.nTextReply"
                       :author="item.nAuthor"
                       :datePosted="item.nDate"
                       :imageUrl="item.nImgUrl"
                       />
                    <!-- end reply thumb -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Reply from '@/forum/Reply.vue'
    //import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Reply,
        },
         data() {
            return {
                ForumItems: [
                    { id: 1, nText: 'lorem ipsum dolir sit', nAuthor: 'Author 1',  nDate: '1 Febuary', nImgUrl: '#' },
                     { id: 2, nText: 'lorem ipsum dolor sit', nTextReply: 'reply text', nAuthor: 'Author 2',  nDate: '2 Febuary', nImgUrl: '#' }
                ]
            }
        }
  
    })
</script>