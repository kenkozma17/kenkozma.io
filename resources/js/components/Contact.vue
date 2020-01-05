<template>
    <section class="contact">
        <div class="wrapper">
            <form id="form" @submit.prevent="submitContactForm">
                <div class="container">
                    <h2>Get in touch</h2>
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
            </form>
        </div>
    </section>
</template>

<script>
    const axios = require('axios');
    module.exports = {
        data: function () {
            return {

            }
        },
        methods: {
            submitContactForm() {
                let form = $('form');
                let data = this.getFormData(form);

                axios.post('/contact', {
                    data: data
                }).then(function (response) {
                    console.log(response);
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
