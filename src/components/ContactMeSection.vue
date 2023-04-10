<script setup>
import axios from 'axios';
</script >
<template>
    <section id="contact-main" class="order-3 contact-anchor">
        <h2 class="hidden">Contact section</h2>
        <h3 v-if="hideSocial == false">&lt;contact me&gt;</h3>
        <section id="form-section">
            <h2 class="hidden">Form section</h2>
            <div class="row">
                <div :class="{ 'col-md-8 mb-20': hideSocial == false, 'col-md-12 mb-20': hideSocial == true }"
                    data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500" data-aos-delay="500">
                    <span>
                        Hey, it's great to see you! If you've got a burning question, a brilliant idea, or just some
                        thoughts to share, I'm all ears. Let's dive in and discover what we can create together!
                    </span>
                </div>
                <div v-if="hideSocial == false" class="social-links col-md-4" data-aos="fade-left" data-aos-ease="ease"
                    data-aos-duration="500" data-aos-delay="500">
                    <h2 class="hidden">Contact contacts</h2>
                    <span>Feeling social? Find me on these online spaces too!</span>
                    <ul class="mt-20">
                        <li><a href="https://www.instagram.com/nathalyamorim87/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/nathalya-menezes-design/"><i
                                    class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://discord.com/users/930501284149227550"><i class="fa-brands fa-discord"></i></a>
                        </li>
                    </ul>
                </div>
                <div v-if="successMsg != '' || errorMsg != ''" class="col-12 mb-4">
                    <span v-if="successMsg != ''" class="info info-success" ref="info-success-box">
                        {{ successMsg }}
                    </span>
                    <span v-if="errorMsg != ''" class="info info-error" ref="info-error-box">
                        {{ errorMsg }}
                    </span>
                </div>

                <form @submit.prevent="processMail"
                    :class="{ 'col-md-8': hideSocial == false, 'col-md-12 mt-4': hideSocial == true }">
                    <div class="form-row" data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500"
                        data-aos-delay="500">
                        <div class="form-group col-6">
                            <!-- <label for="firstname">First Name*</label> -->
                            <input v-model="formData.firstname" class="form-control" type="text" id="firstname"
                                name="firstname" required="required" placeholder="First Name">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="lastname">Last Name *</label> -->
                            <input v-model="formData.lastname" class="form-control" type="text" id="lastname"
                                name="lastname" required placeholder="Last Name">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="email">Email*</label> -->
                            <input v-model="formData.email" class="form-control" type="email" id="email" name="email"
                                required placeholder="Email">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="phone">Phone</label> -->
                            <input v-model="formData.phone" class="form-control" type="tel" id="phone" name="phone"
                                placeholder="Phone">
                        </div>

                        <div class="form-group col-12">
                            <!-- <label for="message"> Message* </label> -->
                            <textarea v-model="formData.message" class="form-control" name="message" id="message" cols="30"
                                rows="5" placeholder="Message*"></textarea>
                        </div>

                        <div class="col-4 submit-contact-btn">
                            <input type="submit" class="btn" value="SAY HELLO" :disabled="submitted">
                        </div>
                    </div>

                </form>
            </div>
        </section>

    </section>
</template >

<script>
export default {
    name: 'ContactMeSection',
    data() {
        return {
            formData: {
                firstname: '',
                lastname: '',
                email: '',
                message: '',
                subject: ''
            },
            errorMsg: '',
            successMsg: '',
            loading: false,
            submitted: false
        }
    },
    props: {
        hideSocial: {
            type: Boolean,
            default: false
        }
    },
    methods: {
        processMail(event) {
            this.loading = true;

            if (!this.formData.firstname || !this.formData.lastname || !this.formData.message || !this.formData.email) {
                this.errorMsg = 'Please fill all required fields.';
                this.loading = false;
                this.successMsg = '';
            } else {
                axios.post('/includes/mail/mail.php', this.formData)
                    .then(res => {
                        this.loading = false;
                        this.submitted = true;
                        this.successMsg = res.data.message;
                        this.errorMsg = '';
                    })
                    .catch(err => {
                        this.loading = false;
                        this.submitted = false;
                        this.errorMsg = err.data;
                        this.successMsg = '';
                    });
            }
        }
    }
}
</script>


<style lang="scss">
#contact-main {
    flex-direction: row;

    h3 {
        width: 100%;
        margin-bottom: 30px;
    }

    span {
        font-size: 1.0em;
        font-weight: 500;
    }
}

#form-section {
    width: 100%;
    flex-direction: row;
    font-family: $font-lexend;
    ;

    form {
        div {

            textarea,
            input[type="text"],
            input[type="email"],
            input[type="tel"] {
                // background: transparent;
                background-color: #212d3c;
                color: #fff;
                border-color: rgb(255, 255, 255, 0.0);
            }


        }

        .submit-contact-btn {
            input {
                width: 200px;
                font-weight: 600;
            }
        }

        label {
            font-size: 1.0em;
        }
    }

    .submit-contact-btn {
        padding-top: 30px;
        padding-bottom: 15px;
    }

    .social-links {
        width: 100%;
        padding-top: 20px;

        @include tablet {
            width: 30%;
            padding-left: 50px;
            padding-top: 0px;
        }

        ul {
            padding: 0px;
        }
    }

    // .info.info-error {
    //     // display: none;
    // }

    // .info.info-success {
    //     // display: none;
    // }

    span {
        line-height: 1.7em;
    }

    ul li {
        display: inline;
        margin-right: 10px;
    }

    ul li a:hover {
        color: $pink;
        background-color: transparent;
    }

    ul li a {
        display: inline;
        color: $white;
        font-size: 1.5em;
        transition: all ease-in-out .3s;
    }

    .error {
        border-color: $pink !important;
    }

    .form-control {
        border-radius: 0rem !important;
    }

    .mt-20 {
        margin-top: 20px;
    }
}
</style>