<style scoped>
.homePage {
    height: 80vh;
}
</style>
<template>
    <Master>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0">
                        <span class="text-gradient d-inline">Projects</span>
                    </h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div v-for="(project,index) in projects" :key="index" class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div
                            class="card overflow-hidden shadow rounded-4 border-0 mb-5"
                        >
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">
                                            {{ project.title }}
                                        </h2>
                                        <p>
                                           {{ project.details }}
                                        </p>
                                    </div>
                                    <img
                                        class="img-fluid"
                                        src="https://dummyimage.com/300x400/343a40/6c757d"
                                        alt="..."
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">
                        Let's build something together
                    </h2>
                    <Link
                        class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder"
                        href="/contact-page"
                        >Contact me</Link
                    >
                </div>
            </div>
        </section>
    </Master>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Master from "../layout/master.vue";
import axios from "axios";
import { ref, onMounted } from "vue";

// Fetch projects data from the API
const projects = ref([]);

onMounted(async()=>{
    try{
        const response = await axios.get('/projectData');
        projects.value = response.data;

    }
    catch (error) {
        console.error("Error fetching projects:", error);
    }
})

console.log(projects);




</script>
