<template>
    <section id="contact-main" class="order-3 contact-anchor">
        <h2 class="hidden">Contact section</h2>
        <h3>&lt;contact me&gt;</h3>
        <section id="form-section">
            <h2 class="hidden">Form section</h2>
            <div class="row">
                <div class="col-md-8 mb-20" data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500"
                    data-aos-delay="500">
                    <span>
                        You got a question or purpose, or just want to say “hello”? <br>Go ahead. I will be happy to
                        answer you.
                    </span>
                    <span class="info info-success" ref="info-success-box">
                        <!-- A success message will be displayed here after the form response. -->
                    </span>
                    <span class="info info-error" ref="info-error-box">
                        <!-- An error message will be displayed here after the form response. -->
                    </span>
                </div>
                <div class="social-links col-md-4" data-aos="fade-left" data-aos-ease="ease" data-aos-duration="500"
                    data-aos-delay="500">
                    <h2 class="hidden">Contact contacts</h2>
                    <span>Feeling social? Find me on these online spaces too!</span>
                    <ul class="mt-20">
                        <li><a href="https://www.instagram.com/nathalyamorim87/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/nathalya-menezes-0b1a37130/"><i
                                    class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://discord.com/users/930501284149227550"><i class="fa-brands fa-discord"></i></a>
                        </li>
                    </ul>
                </div>
                <form action="/includes/mail/mail.php" method="POST" id="mail-form" ref="mail-form" class="col-md-8">
                    <div class="form-row" data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500"
                        data-aos-delay="500">
                        <div class="form-group col-6">
                            <!-- <label for="firstname">First Name*</label> -->
                            <input ref="firstname" class="form-control" type="text" id="firstname" name="firstname"
                                required="required" placeholder="First Name">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="lastname">Last Name *</label> -->
                            <input ref="lastname" class="form-control" type="text" id="lastname" name="lastname" required
                                placeholder="Last Name">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="email">Email*</label> -->
                            <input ref="email" class="form-control" type="email" id="email" name="email" required
                                placeholder="Email">
                        </div>

                        <div class="form-group col-6">
                            <!-- <label for="phone">Phone</label> -->
                            <input ref="phone" class="form-control" type="tel" id="phone" name="phone" placeholder="Phone">
                        </div>

                        <div class="form-group col-12">
                            <!-- <label for="message"> Message* </label> -->
                            <textarea ref="message" class="form-control" name="message" id="message" cols="30" rows="1"
                                placeholder="Message*"></textarea>
                        </div>

                        <div class="col-4 submit-contact-btn">
                            <input @click.prevent="processMail" ref="btn-submit-contact" type="submit" class="btn"
                                value="SAY HELLO">
                        </div>
                    </div>

                </form>
            </div>
        </section>

    </section>
</template>

<script>
export default {
    name: 'ContactMeSection'
}
</script>


<style lang="scss">
#contact-main {
    flex-direction: row;

    h3 {
        width: 100%;
        margin-bottom: 20px;
    }

    span {
        font-size: 1.1em;
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
                background: transparent;
                color: #fff;
                border-color: rgb(255, 255, 255, 0.5);
            }


        }

        .submit-contact-btn {
            input {
                width: 200px;

            }
        }

        label {
            font-size: 1.1em;
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

    .info.info-error {
        display: none;
    }

    .info.info-success {
        display: none;
    }

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