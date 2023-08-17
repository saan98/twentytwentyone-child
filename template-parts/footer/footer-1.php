<!--FOOTER1-->
<section class="footer-newsletter">
    <div class="container footer-content-newsletter py-5">
        <div class="row g-3">
            <div class="col-lg-10 col-md-12">
                <div class="display-5 footer-1-title">
                    <?php echo get_theme_mod('footer_newsletter_title', 'you’ve come so far.'); ?></div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer-1-text fs-6">
                    <?php echo wpautop(get_theme_mod('footer_newsletter_text', 'So why not join our crew of airsoft nutheads for monthly promotions, updates, and tips? Nothing can go wrong')); ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 my-md-2 py-md-2 g-5">
                <form class="d-lg-flex flex-wrap gap-5 footer-1-form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">YOUR EMAIL</label>
                        <input type="email" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">YOUR NAME</label>
                        <input type="password" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputPassword1" />
                    </div>
                    <button type="submit" class="btn hero-card-btn btn-primary mt-3 ps-2">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- 
<section class="footer-newsletter">
    <div class="container footer-content-newsletter py-5">
        <div class="row g-3">
            <div class="col-lg-10 col-md-12">
                <div class="display-5 footer-1-title">you’ve come so far.</div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer-1-text fs-6">So why not join our crew of airsoft nutheads for monthly promotions,
                    updates and tips?
                    <span class="d-lg-block">Nothing can go wrong</span>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 my-md-2 py-md-2 g-5">
                <form class="d-lg-flex flex-wrap gap-5 footer-1-form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">YOUR EMAIL</label>
                        <input type="email" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">YOUR NAME</label>
                        <input type="password" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputPassword1" />
                    </div>
                    <button type="submit" class="btn hero-card-btn btn-primary mt-3 ps-2">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> -->