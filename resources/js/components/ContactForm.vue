

<template>

      <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" @submit.prevent="SubmitData" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" v-model="form.fullName" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                   
                                        
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" v-model="form.email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                        
                                        
                                        
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" v-model="form.phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                       
                                        
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" v-model="form.message"  id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required">
                                            
                                        </textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                        
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <Loader></Loader>
            </section>

</template>

<script setup>

import { useForm,usePage } from '@inertiajs/vue3';
import Swal from 'sweetalert2'
import Loader from './loader.vue';


const page = usePage();

const form = useForm({
    fullName:'',
    email:'',
    phone:'',
    message:''
})
 
 const SubmitData = async () =>{
    
   await  form.post('/contact',{
        onSuccess:()=>{
            if(page.props.flash.status === true){
                Swal.fire({
                    icon: 'success',
                    title: page.props.flash.message,
                    showConfirmButton: false,
                    timer: 2000
                })
                form.reset();
            }
            else{
                Swal.fire({
                    icon: 'error',
                    title: page.props.flash.message,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        }
     })

}




</script>