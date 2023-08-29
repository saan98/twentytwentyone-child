<?php
/*
Template Name: Social Media Marketing Template
*/


get_header();
?>
<style>
.services-top__left--heading {
    font-size: 48px;
    line-height: normal;
    font-family: 'Comfortaa', sans-serif;
    font-weight: 700;
    color: #202124;
    text-transform: capitalize;
}

.services-top__left--text {
    font-size: 24px;
    line-height: 37px;
    font-family: 'Comfortaa', sans-serif;
    font-weight: 300;
    color: #202124;
    margin-top: 30px;
}

.services-top__left .bottom-outside {
    margin-bottom: 30px;
    margin-top: 65px;
    display: inline-block;
    /* margin-top: 3rem; */
    max-width: 23rem;
    width: 100%;
    border: 2px solid #F78078;
    padding: 4px;
    border-radius: 30px;
    position: relative;
    transition: all 0.2s;
}

.services-top__left .bottom-outside a {
    font-size: 18px;
    line-height: normal;
    font-family: 'Comfortaa', sans-serif;
    font-weight: 700;
    background-color: #F78078;
    color: #ffffff;
    text-align: left;
    padding: 1.5rem 2rem;
    border-radius: 30px;
    display: block;
}

.services-middle__right--heading {
    font-size: var(--global--section--heading--fs);
    line-height: var(--global--section--heading--line-height);
    font-family: 'Comfortaa', sans-serif;
    font-weight: 700;
    color: #202124;
    text-transform: capitalize;
}
</style>

<section class="services-top">
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-md-1 order-sm-3">
                <div class="services-top__left">
                    <h4 class="services-top__left--heading">
                        Social media marketing strategy Toronto
                    </h4>
                    <p class="services-top__left--text">
                        We are Qode Social
                    </p>

                    <div class="bottom-outside">
                        <a href="#">Let’s Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 order-md-2 order-sm-1 services-top--center-image">
                <div class="services-top__center">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/webp/services-top-center.webp"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/services-top-center.png"
                            class="services-top__center--image">
                    </picture>
                </div>
            </div>
            <div class="col-md-5 col-sm-9 order-md-3 order-sm-2 services-top--right-image">
                <div class="services-top__right">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/webp/services-top-right.webp"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/services-top-right.png"
                            class="services-top__right--image">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-7 services-middle--flexing">
                <div class="services-middle__left">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/webp/services-middle.webp"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/services/webp/services-middle.png"
                            class="services-middle__left--image">
                    </picture>
                </div>
            </div>
            <div class="col-md-5 services-middle--flexing">
                <div class="services-middle__right">
                    <h4 class="services-middle__right--heading">
                        Social media strategy
                    </h4>
                    <ul>
                        <li>Tone</li>
                        <li>Demographic</li>
                        <li>Location</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="services-bottom__content">
                    <h4 class="services-bottom__content--heading">
                        Toronto social media company
                    </h4>

                    <p class="services-bottom__content--text">
                        Qode Social is the social media division of larger marketing agency, Qode Media. Qode Media is a
                        digital marketing agency that specializes in SEO and graphic design, and has now expanded to
                        meet the needs of a growing digital landscape. Qode Social is led by seasoned social media
                        marketing experts who are committed to developing a community around your business, polishing
                        your branding, and determining a concrete social media strategy. Quality takes time, and we want
                        to make sure that your social media is 100% reflective of how you wish to be perceived by the
                        public.
                        <br />
                        Consider it the driving force of your online presence. Qode Social can offer you community
                        building, account growth, ad analysis, Facebook and Instagram support, and more. We provide
                        proper access to an active consumer demographic, and a lifejacket to swim in the digital age. If
                        you’re not on social media, you’re not relevant. And hey, we can help with that. Knowing how to
                        set up your social pages is one thing, but maintenance is another. We will be with you every
                        step of the way. We can help you get you verified, design size-relative images for Facebook,
                        Twitter, and LinkedIn cover photos, set up promotions and contests, schedule content, and more.
                        Consider us your social media consultants of choice.
                        <br /><br />
                        What sets us apart as Toronto Social Media Marketing Company? We like numbers. We can show you
                        quantifiable results through social media analytics, and we can help you set and reach realistic
                        goals for both vanity metrics and traffic for your business. Contact us today to chat about how
                        we can create a Toronto social media marketing strategy for you. It’s time to sink or swim.
                    </p>

                    <div class="bottom-outside">
                        <a href="#">Let’s Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/sections/socialMediaContentCreation');?>

<?php get_template_part('template-parts/home-best-plan');?>

<?php get_footer(); ?>