

<template>
    <!-- Languages list-->
    <div class="mb-0">
        <div class="d-flex align-items-center mb-4">
            <div
                class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"
            >
                <i class="bi bi-code-slash"></i>
            </div>
            <h3 class="fw-bolder mb-0">
                <span class="text-gradient d-inline">Languages</span>
            </h3>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-4">
            <div v-for="(language,index) in languages" :key="index" class="col mb-4 mb-md-3">
                <div
                    class="d-flex align-items-center bg-light rounded-4 p-3 h-100"
                >
                    {{ language.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import { ref, onMounted } from "vue";
import axios from "axios";

const languages = ref([]);
onMounted(async ()=>{
    try{

        const response = await axios.get('/languageData');
        languages.value = response.data;
        
    }
    catch (error) {
        console.error("Error fetching languages data:", error);
    }
})


</script>
