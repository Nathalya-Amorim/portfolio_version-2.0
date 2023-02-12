<template>
    <section id="contact-main" class="order-3 contact-anchor">
        <h2 class="hidden">Contact section</h2>
        <h3>&lt;contact me&gt;</h3>
        <section id="form-section">
            <h2 class="hidden">Form section</h2>
            <div class="row">
                <div class="col-md-8 mb-20">
                    <span>
                        You got a question or purpose, or just want to <br>say “hello”? Go ahead. I will be happy to
                        answer you.
                    </span>
                    <span class="info info-success" ref="info-success-box">
                        <!-- A success message will be displayed here after the form response. -->
                    </span>
                    <span class="info info-error" ref="info-error-box">
                        <!-- An error message will be displayed here after the form response. -->
                    </span>
                </div>
                <div class="social-links col-md-4">
                    <h2 class="hidden">Contact contacts</h2>
                    <span>Feeling social? Find me on these online spaces too!</span>
                    <ul class="mt-20">
                        <li><a href="https://www.instagram.com/nathalyamorim87/"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/nathalya-menezes-0b1a37130/"><i
                                    class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://discord.com/users/930501284149227550"><i
                                    class="fa-brands fa-discord"></i></a>
                        </li>
                    </ul>
                </div>
                <form action="mail/send.php" method="POST" id="mail-form" ref="mail-form" class="col-md-8">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="firstname">&lt;first name&gt; *</label>
                            <input ref="firstname" class="form-control" type="text" id="firstname" name="firstname"
                                required="required" placeholder="Enter your first name">
                        </div>

                        <div class="form-group col-6">
                            <label for="lastname">&lt;last name&gt; *</label>
                            <input ref="lastname" class="form-control" type="text" id="lastname" name="lastname"
                                required placeholder="Enter your last name">
                        </div>

                        <div class="form-group col-6">
                            <label for="email">&lt;email&gt; *</label>
                            <input ref="email" class="form-control" type="email" id="email" name="email" required
                                placeholder="Enter your email">
                        </div>

                        <div class="form-group col-6">
                            <label for="phone">&lt;your phone&gt;</label>
                            <input ref="phone" class="form-control" type="tel" id="phone" name="phone"
                                placeholder="Enter you phone">
                        </div>

                        <div class="form-group col-12">
                            <label for="message">&lt;your message&gt; *</label>
                            <textarea ref="message" class="form-control" name="message" id="message" cols="30" rows="1"
                                placeholder="Hi, I am beginning a new business, and I need a website for our project..."></textarea>
                        </div>

                        <div class="col-4 submit-contact-btn">
                            <input @click.prevent="processMail" ref="btn-submit-contact" type="submit" class="btn"
                                value="SAY HELLO">
                        </div>
                    </div>

                </form>
            </div>
        </section>
        <h3>&lt;/contact me&gt;</h3>
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
}

#form-section {
    width: 100%;
    flex-direction: row;

    form {
        div {

            textarea,
            input[type="text"],
            input[type="email"],
            input[type="tel"] {
                background: transparent;
                color: #fff;
                border-top: 0px;
                border-left: 0px;
                border-right: 0px;
                border-color: #FFF;
            }
        }

        .submit-contact-btn {
            input {
                width: 200px;
            }
        }
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