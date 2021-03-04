<html lang="<?= str_replace('_', '-', $app['translator']->getLocale()) ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->script('theme' , 'theme:app/bundle/app.js') ?>
    </head>
    <body>
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-xlarge" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item">Hello World</a>
                </div>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="uk-active"><a>Anasayfa</a></li>
                        <li><a>Hakkımızda</a></li>
                        <li><a>Neler Yaparız</a></li>
                        <li><a>Projelerimiz</a></li>
                        <li><a>Haberler</a></li>
                        <li><a>İletişim</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-item uk-grid">
                        <li>
                            <a class="uk-button uk-button-primary uk-button-large">
                                <span uk-icon="file-pdf"></span>
                                Web Siteni Analiz Et
                            </a>
                        </li>
                        <li><a class="uk-link-text" uk-icon="more-vertical"></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="uk-flex uk-flex-middle uk-flex-center uk-background-cover" data-src="<?= $view->url()->getStatic('theme:assets/images/hero.svg') ?>" uk-height-viewport="offset-bottom: 20" uk-img>
            <div class="uk-section uk-section-large">
                <div class="uk-container uk-container-large uk-text-center">
                    <h1 class="uk-heading-xlarge uk-text-center tm-letter-spacing-large uk-text-light">HELLO <span class="uk-text-bold tm-text-background" data-src="<?= $view->url()->getStatic('theme:assets/images/text-pattern.svg') ?>" uk-img>WORLD</span></h1>
                    <div class="uk-flex uk-flex-center uk-margin-medium">
                        <p class="uk-width-2xlarge@m uk-text-light tm-letter-spacing">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut aliquam veritatis amet expedita ullam sapiente blanditiis enim perspiciatis quasi numquam.</p>
                    </div>
                    <ul class="uk-margin uk-flex-middle uk-child-width-1-4@m" uk-grid>
                        <li>
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/brands/google.svg') ?>" width="100" uk-img>
                        </li>
                        <li>
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/brands/yandex.svg') ?>" width="100" uk-img>
                        </li>
                        <li>
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/brands/bing.svg') ?>" width="100" uk-img>
                        </li>
                        <li>
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/brands/greencheap.svg') ?>" width="150" uk-img>
                        </li>
                    </ul>
                    <ul class="uk-margin-large uk-flex-center" uk-grid>
                        <li>
                            <a class="uk-button uk-button-secondary uk-button-large">
                                <span uk-icon="thumbnails"></span>
                                Get Started
                            </a>
                        </li>
                        <li>
                            <a class="uk-button uk-button-muted uk-button-large">
                                <span uk-icon="microphone"></span>
                                Documentation
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-xlarge uk-padding-remove-bottom uk-background-cover uk-background-position-bottom" data-src="<?= $view->url()->getStatic('theme:assets/images/home-section1.svg') ?>" uk-img>
            <div class="uk-container uk-container-large">
                <h2 class="uk-text-light uk-text-uppercase tm-letter-spacing-large">We Are Best In</h2>
                <p class="uk-text-muted uk-width-2xlarge tm-letter-spacing">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In labore, optio voluptates esse explicabo tenetur laudantium temporibus at porro? Provident?
                </p>

                <div class="uk-margin-large uk-child-width-1-3@m uk-grid-large" uk-grid>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80" uk-img>
                        <h3 class="tm-letter-spacing">Multi-carriers in one app</h3>
                        <p class="uk-text-muted tm-letter-spacing uk-text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque accusantium dolor tempora molestias culpa sed perspiciatis temporibus ea harum?</p>
                    </div>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image2.svg') ?>" width="80" uk-img>
                        <h3 class="tm-letter-spacing">Multi-carriers in one app</h3>
                        <p class="uk-text-muted tm-letter-spacing uk-text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque accusantium dolor tempora molestias culpa sed perspiciatis temporibus ea harum?</p>
                    </div>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image3.svg') ?>" width="80" uk-img>
                        <h3 class="tm-letter-spacing">Multi-carriers in one app</h3>
                        <p class="uk-text-muted tm-letter-spacing uk-text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque accusantium dolor tempora molestias culpa sed perspiciatis temporibus ea harum?</p>
                    </div>
                </div>

                <hr class="uk-width-2xlarge@m">
            </div>
        </section>

        <section class="uk-section uk-section-large uk-background-cover uk-background-position-bottom" data-src="<?= $view->url()->getStatic('theme:assets/images/home-section3.svg') ?>" uk-img>
            <div class="uk-container uk-container-large">
                <h2 class="uk-text-light uk-text-uppercase tm-letter-spacing-large">Our top features</h2>
                <p class="uk-text-muted uk-width-2xlarge tm-letter-spacing">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In labore, optio voluptates esse explicabo tenetur laudantium temporibus at porro? Provident?
                </p>

                <div class="uk-margin-large uk-child-width-1-3@m uk-grid-large" uk-grid>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80%" uk-img>
                    </div>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image2.svg') ?>" width="80" uk-img>
                        <h3 class="tm-letter-spacing">Multi-carriers in one app</h3>
                        <p class="uk-text-muted tm-letter-spacing uk-text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque accusantium dolor tempora molestias culpa sed perspiciatis temporibus ea harum?</p>
                    </div>
                    <div>
                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image3.svg') ?>" width="80" uk-img>
                        <h3 class="tm-letter-spacing">Multi-carriers in one app</h3>
                        <p class="uk-text-muted tm-letter-spacing uk-text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque accusantium dolor tempora molestias culpa sed perspiciatis temporibus ea harum?</p>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="uk-section uk-section-large uk-padding-remove-bottom uk-background-cover uk-background-position-bottom" data-src="<?= $view->url()->getStatic('theme:assets/images/home-section2.svg') ?>" uk-img>
            <div class="uk-container uk-container-large">
                <h2 class="uk-text-light uk-text-uppercase tm-letter-spacing-large">last BLOG</h2>
                <p class="uk-text-muted uk-width-2xlarge tm-letter-spacing">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In labore, optio voluptates esse explicabo tenetur laudantium temporibus at porro? Provident?
                </p>
            </div>
            <div class="uk-container uk-container-large uk-margin-large-top">
                <div class="uk-margin-large uk-child-width-1-3@m uk-grid-collapse uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-padding-small">
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80%" uk-img>
                        </div>
                    </div>
                    <div>
                        <div class="tm-background-secondary uk-padding">
                            <ul class="uk-list tm-list-large">
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image2.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image3.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="tm-background-secondary uk-padding">
                            <ul class="uk-list tm-list-large">
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image3.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image2.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                                <li class="uk-flex uk-flex-middle">
                                    <div>
                                        <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80%" uk-img>
                                    </div>
                                    <div class="uk-margin-left">
                                        <a class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                        <span class="uk-display-block uk-text-small">by <a>Ynswtf</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?= $view->render('content') ?>

        <section class="uk-section-large uk-position-relative">
            <div class="uk-section uk-section-secondary tm-background-secondary uk-section-large">
                <div class="uk-container uk-container-large">
                    <div class="uk-flex-middle uk-grid-large uk-grid-match" uk-grid>
                        <div class="uk-width-medium">
                            
                        </div>
                        <div class="uk-width-expand">
                            <h2 class="uk-text-light uk-text-uppercase uk-text-center tm-letter-spacing-large">Lorem ipsum dolor sit amet</h2>
                            <div class="uk-flex uk-flex-center uk-margin-large">
                                <div>
                                    <div class="uk-child-width-1-4@m uk-flex-middle" uk-grid>
                                        <div class="uk-text-center">
                                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/technology/docker.svg') ?>" width="60%" uk-img>
                                        </div>
                                        <div class="uk-text-center">
                                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/technology/symfony.svg') ?>" width="60%" uk-img>
                                        </div>
                                        <div class="uk-text-center">
                                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/technology/vuejs.svg') ?>" width="60%" uk-img>
                                        </div>
                                        <div class="uk-text-center">
                                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/technology/webpack.svg') ?>" width="60%" uk-img>
                                        </div>
                                    </div>

                                    <p class="uk-margin-large-top uk-text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet libero a metus mollis, sit amet porta ipsum porttitor. Nunc mollis a ligula at mattis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium">
                            <div class="uk-card uk-card-muted uk-card-body uk-box-shadow-medium uk-card-small uk-text-center tm-card-circle-radius">
                                <img data-src="<?= $view->url()->getStatic('theme:assets/images/circle-chart2.svg') ?>" width="100%" uk-img>
                                <h3 class="uk-text-light uk-margin-small">lorem ipsum dolor</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-container uk-container-large uk-section-large uk-padding-remove-bottom">
                <div class="uk-grid-large" uk-grid>
                    <div class="uk-width-medium@m">
                        <div class="tm-circle-position uk-card uk-card-default uk-card-body uk-card-small uk-text-center tm-card-circle-radius">
                            <img data-src="<?= $view->url()->getStatic('theme:assets/images/circle-chart.svg') ?>" width="100%" uk-img>
                            <h3 class="uk-text-light uk-margin-small">page speed</h3>
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                        <div class="uk-child-width-1-2@m" uk-grid>
                            <div>
                                <div class="uk-panel">
                                    <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image1.svg') ?>" width="80" uk-img>
                                    <h2 class="tm-letter-spacing uk-h3 uk-margin-small">Lorem ipsum dolor sit amet.</h2>
                                    <p class="uk-text-muted uk-text-justify uk-margin-small">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum architecto id mollitia error consequatur molestias provident, incidunt iste inventore voluptas aperiam doloremque cumque quas optio 
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel">
                                    <img data-src="<?= $view->url()->getStatic('theme:assets/images/compact/compact-image2.svg') ?>" width="80" uk-img>
                                    <h2 class="tm-letter-spacing uk-h3 uk-margin-small">Lorem ipsum dolor sit amet.</h2>
                                    <p class="uk-text-muted uk-text-justify uk-margin-small">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum architecto id mollitia error consequatur molestias provident, incidunt iste inventore voluptas aperiam doloremque cumque quas optio 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="uk-section uk-section-secondary uk-section-medium tm-background-secondary">
            <div class="uk-container uk-container-large">
                <div class="uk-child-width-1-4@m uk-grid-large" uk-grid>
                    <div>
                        <div class="uk-panel">
                            <h2>Hello World</h2>
                            <p class="uk-text-justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident soluta aut, vitae assumenda rem aperiam maiores nisi consectetur mollitia sit!
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4>Suspendisse congue</h4>
                        <ul class="uk-margin-top uk-nav uk-nav-default tm-nav-default">
                            <li><a>Home</a></li>
                            <li><a>About Us</a></li>
                            <li><a>Services</a></li>
                            <li><a>Projects</a></li>
                            <li><a>News</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Suspendisse congue</h4>
                        <ul class="uk-margin-top uk-nav uk-nav-default tm-nav-default">
                            <li><a>Home</a></li>
                            <li><a>About Us</a></li>
                            <li><a>Services</a></li>
                            <li><a>Projects</a></li>
                            <li><a>News</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Suspendisse congue</h4>
                        <div class="uk-margin-top">
                            <div class="uk-inline">
                                <a class="tm-form-icon-muted uk-form-icon uk-form-icon-flip" uk-icon="icon:arrow-right;ratio:1.5"></a>
                                <input type="text" class="uk-input uk-form-width-large uk-form-blank tm-form-blank" placeholder="Mail Adresiniz">
                            </div>
                            <p class="uk-text-right">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="uk-flex uk-flex-right">
                                <ul class="uk-iconnav tm-iconnav-padding">
                                    <li><a uk-icon="facebook"></a></li>
                                    <li><a uk-icon="twitter"></a></li>
                                    <li><a uk-icon="instagram"></a></li>
                                    <li><a uk-icon="github"></a></li>
                                    <li><a uk-icon="youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </body>
</html>
