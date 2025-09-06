<template>
    <section>
        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
        <!-- Education Card 1-->
        <div v-for="(educationItem, index) in education" :key="index">
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <div class="row align-items-center gx-5">
                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                            <div class="bg-light p-4 rounded-4">
                                <div class="text-secondary fw-bolder mb-2">
                                    {{ educationItem.duration }}
                                </div>
                                <div class="mb-2">
                                    <div class="small fw-bolder">
                                        {{ educationItem.institutionName }}
                                    </div>
                                    <div class="small text-muted">
                                       {{ educationItem.field }}
                                    </div>
                                </div>
                                <div class="fst-italic">
                                    <div class="small text-muted">Master's</div>
                                    <div class="small text-muted">
                                        Web Development
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                {{ educationItem.details }}
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
const education = ref([]);
onMounted(async () => {
    try {
        const response = await axios.get("/educationData");
        education.value = response.data;
    } catch (error) {
        console.error("Error fetching education data:", error);
    }
});
console.log(education);
</script>
