<template>
    <section id="social-section" class="order-3">
        <h2 class="hidden">Social links</h2>
        <div class="social-container">
            <!-- Social icons-->
            <a href="https://www.instagram.com/nathalyamorim87/" target="_blank" rel="noopener noreferrer">
                <span class="social">
                    <i class="fa-brands fa-instagram"></i>
                </span>
            </a>
            <a href="https://www.linkedin.com/in/nathalya-menezes-0b1a37130/" target="_blank" rel="noopener noreferrer">
                <span class="social">
                    <i class="fa-brands fa-linkedin-in"></i>
                </span>
            </a>

            <a href="https://github.com/Nathalya-Amorim" target="_blank" rel="noopener noreferrer">
                <span class="social">
                    <i class="fa-brands fa-github"></i>
                </span>
            </a>
            <div class="vertical-line"></div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'SocialWidget'
}
</script>

<style lang="scss">
#social-section {

    @include desktop {
        display: flex;
        position: sticky;
        bottom: 10px;
        left: 10px;
        width: 30px;

        .social-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 50px;

            .vertical-line {
                border-top: 0px;
                border-bottom: 0px;
                border-left: 3px solid;
                border-right: 0px;
                height: 100px;
                margin: auto;
            }
        }

        .social {
            background-color: $color-social-primary;
            display: inline-block;
            padding: 5px;
            font-size: 1.6em;
            width: 35px;
            transition: all ease-in-out .3s;
            color: $white;
        }


        .social:hover {
            -webkit-box-shadow: 0px 0px 20px 2px $color-button-primary;
            box-shadow: 0px 0px 20px 2px $color-button-primary;
        }
    }

}
</style>