<style scoped></style>
<template>
    <Master>
        <div>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0">
                        <span class="text-gradient d-inline">Resume</span>
                    </h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <experience></experience>
                        <!-- Education Section-->
                        <education></education>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <skill></skill>
                        <language></language>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from "../layout/master.vue";
import Experience from "../components/experience.vue";
import Education from "../components/education.vue";
import Skill from "../components/skill.vue";
import language from "../components/language.vue";
</script>
