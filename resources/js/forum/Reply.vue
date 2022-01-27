<template>
     <div class="w-full shadow-md border-gray-400 rounded-md mt-5 bg-white" v-bind:data-url="id">
                          <div class="flex flex-wrap items-center p-5">
                           <div class="w-2/12 p-2 flex flex-col mb-5 border-r-2 border-gray-400">
                            <div class="w-full">
                            <a href="#" class="overflow-hidden rounded-full">
                            <img v-bind:src="imageUrl" v-bind:alt="author">
                            </a>
                          <div class="w-full">
                             <span>{{ author }}</span>
                          </div>
                          <div>
                            <a href="#">Message</a>
                          </div>
                          </div>
                           </div>
                           <div class="w-10/12 p-2 mb-5">
                               <div class="w-11/12 mx-auto p-5 mb-4 bg-gray-400" v-if="textReply">
                                 <p class="text-gray-900">
                                       {{ textReply }}
                                 </p>
                               </div>
                               <p>{{ postText }}</p>
                            <div class="w-full">
                             <span>Posted At: {{ datePosted }}</span>
                          </div>
                          </div>
               

                          </div>
                       </div> 
</template>

<script>
export default {
    name: 'Reply',
    props: {
        id: Number,
        postText: String,
        textReply: String,
        author: String,
        datePosted: String,
        imageUrl: String,
},
setup() {
    
},
}
</script>