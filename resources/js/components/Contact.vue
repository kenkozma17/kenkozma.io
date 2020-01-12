<template>
    <section class="contact" id="contact">
        <div class="wrapper">
            <form id="form" @submit.prevent="submitContactForm">
                <div class="initial-screen container" data-aos="fade-up">
                    <h2 class="title">Get in touch.</h2>
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="John Mayor">
                    </div>
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="you@website.com">
                    </div>
                    <div class="field">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject">
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" rows="5"></textarea>
                    </div>
                    <div class="submit-field">
                        <button type="submit" class="submit-btn">Send It!</button>
                    </div>
                </div>
                <div class="success-screen">
                    <div class="gif">
                        <img src="/gif/Ramos.gif">
                    </div>
                    <div class="message">
                        <h2>Thank you for reaching out! <br /> I will get back to you as soon as I can!</h2>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>

    const axios = require('axios');
    module.exports = {
        data: function () {
            return {
                validation: [],
            }
        },
        methods: {
            submitContactForm() {
                let form = $('form'), validation = '', data = this.getFormData(form);

                let self = this;
                axios.post('/contact', {
                    data: data
                }).then(function (response) {
                    if(response.data.submission) {
                        $('.success-screen').addClass('show');
                        $('input, textarea').val('').removeClass('error');
                        setTimeout(function() {
                            $('.success-screen').removeClass('show');
                        }, 10000);
                    } else {
                        validation = Object.keys(response.data.validation);
                        $('input, textarea').removeClass('error');
                        validation.forEach((item) => {
                            $('input[name="' + item + '"], textarea[name="' + item + '"]').addClass('error');
                        });
                    }
                }).catch(function (error) {
                    console.log(error);
                })
            },
            /** Maps name and value key pair in JSON Object */
            getFormData(form) {
                let unindexedArray = form.serializeArray();
                let indexedArray = {};

                $.map(unindexedArray, function(n){
                    indexedArray[n['name']] = n['value'];
                });

                return indexedArray;
            }
        }
    }
</script>
