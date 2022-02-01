<template>
     <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Thread
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container mx-auto flex flex-col mt-3 p-5">
                <!-- Form for creating forum post -->
                <h1 class="text-lg">Create A Thread</h1>
                <a href="#" title="Read the rules" class="text-sm mb-5">Be Sure to read the rules before posting</a> 
                <form class="w-full flex flex-col items-start" :disabled="threadForm.processing" @submit.prevent="threadForm.post('/forum')">
                <label for="thread-title" >Thread Title</label>
                <input type="text" name="thread-title" placeholder="Write your title here" class="py-4 px-3 mb-4 w-full rounded-md shadow-inner focus:shadow-sm" v-model="threadForm.thread_title">
                <span class="text-sm text-red-700" v-if="threadForm.errors.thread_title">{{ threadForm.errors.thread_title }}</span>
                <label for="thread-text">Thread Text</label>
                <textarea type="text" name="thread-post" v-model="threadForm.thread_body" placeholder="What did you see in nature today..." class="py-4 px-3 mb-4 w-full min-h-[290px] rounded-md shadow-inner focus:shadow-sm" />
                <span class="text-sm text-red-700" v-if="threadForm.errors.thread_body">{{ threadForm.errors.thread_body }}</span>
                <select class="py-4 px-3 mb-4 rounded-md shadow-innerfocus shadow-sm min-w-[75px]" name="thread-tag" id="thread-tag">
                    <option value="Birds">Birds</option>
                    <option value="Marsupials">Marsupials</option>
                    <option value="Mammals">Mammals</option>
                    <option value="Insects">Insects</option>
                </select>
                <button type="submit" value="Create Thread" class="py-4 px-3 mb-4 rounded-md bg-green-700 hover:bg-green-500 text-white">Create Thread</button>
                </form>
                <!-- End Form -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { useForm } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        AppLayout,
    },
    setup() {
        const threadForm = useForm({
            thread_title: '',
            thread_body: '',
            thread_tag: '',
        });


    return { threadForm };
    },
    methods: {
        test() {
            console.log(this.test);
        }
    },
  
})
</script>