 <template>
 <div class="w-full hover:shadow-lg border-gray-400 border-2 rounded-md mt-5 bg-white">
                          <div class="flex flex-wrap items-center p-5">
                           <div class="w-full mb-5"><h2 class="text-xl">{{ title }}</h2></div>
                           <div class="w-full mb-5"><p> {{ textIntro }}</p>
                          </div>
                          <div class="w-full md:w-3/12 flex justify-start gap-x-2 mb-5">
                          <a href="#" class="flex items-center gap-x-1 ">
                             <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
</svg>
                         <span>
                             {{ likes }}
                         </span>
                          </a>
                          <a href="#" class="flex items-center gap-x-2">
                             <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
</svg>
                         <span>
                             {{ comments }}
                         </span>
                          </a>
                          </div>
                          <div class="w-full md:w-9/12">
                             <a class="b-gray-700 border-2 rounded-md px-5 py-2 hover:bg-gray-100 float-right" href="#">Tag</a>
                          </div>
                          <div class="w-full md:w-4/12">
                            <a href="#" class="overflow-hidden rounded-full">
                            <img v-bind:src="imageUrl" v-bind:alt="author">
                            </a>
                          </div>
                          <div class="w-full md:w-4/12">
                             <span>Posted At: {{ date }}</span>
                          </div>
                          <div class="w-full md:w-4/12">
                             <span>{{ author }}</span>
                          </div>
                          </div>
                       </div> 
</template>

<script>
// import defineComponent from vue;
export default {
    name: 'ForumThumb',
    props: {
        id: Number,
        title: String,
        textIntro: String,
        likes: Number,
        author: String,
        comments: Number,
        date: String,
        imageUrl: String,
    },
    setup() {
        
    },
}
</script>