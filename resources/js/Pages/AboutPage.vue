
<template>


        <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div v-for="(about,index) in aboutData" :key="index" class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">{{ about.title }}</p>
                                <p class="text-muted">{{ about.details }}</p>
                                <div v-for="(social,index) in socialData" :key="index" class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" :href="social.facebookLink"><i class="bi bi-facebook"></i></a>
                                    <a class="text-gradient" :href="social.linkedinLink"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" :href="social.githubLink"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
    

</template>

<script setup>
import { ref,onMounted } from 'vue';
import axios from 'axios';

const aboutData = ref({});
onMounted(async()=>{
    try{
        const response = await axios.get('/aboutDate');
        aboutData.value = response.data;

    }
    catch (error) {
        console.error("Error fetching projects:", error);   
    }
})

const socialData = ref([]);

onMounted(async()=>{
    try{
        const response = await axios.get('/socialData');
        socialData.value = response.data;
    }
    catch($e){
        console.log($e); 
    }
})






</script>