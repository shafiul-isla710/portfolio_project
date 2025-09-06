<template>
    <section>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="text-primary fw-bolder mb-0">Experience</h2>
            <!-- Download resume button-->
            <!-- Note: Set the link href target to a PDF file within your project-->
            <a class="btn btn-primary px-4 py-3" href="#!">
                <div class="d-inline-block bi bi-download me-2"></div>
                Download Resume
            </a>
        </div>
        <!-- Experience Card 1-->
        <div v-for="(experienceItem, index) in experience" :key="index">
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <div class="row align-items-center gx-5">
                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                            <div class="bg-light p-4 rounded-4">
                                <div class="text-primary fw-bolder mb-2">
                                    {{ experienceItem.duration }}
                                </div>
                                <div class="small fw-bolder">{{ experienceItem.designation }}</div>
                                <div class="small text-muted">
                                    {{ experienceItem.title }}
                                </div>
                                <div class="small text-muted">
                                    Los Angeles, CA
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                {{ experienceItem.details }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const experience = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get("/experienceData");
        experience.value = response.data;
    } catch (error) {
        console.error("Error fetching experience data:", error);
    }
});
console.log(experience.value);
</script>
