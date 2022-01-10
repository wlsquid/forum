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
                    <div class="container mx-auto flex flex-col mt-11">
                       <div class="border-b-2 px-5 border-b-gray-800 flex justify-center items-center">
                        <div class="w-4/12">
                          Threads: 1,200
                        </div>
                        <div class="w-4/12">
                          Sort By: <select>
                              <option value="newest"></option>
                              <option value="most commented"></option>
                              <option value="most liked"></option>
                          </select>
                        </div>
                        <div class="w-4/12">

                        </div>
                       </div>
                    </div>
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
