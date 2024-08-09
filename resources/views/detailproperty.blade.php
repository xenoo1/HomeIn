<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/PropertyDetailsPageDeskto.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" />
</head>

<body>
    <div class="property-details-page-deskto">
        <div class="main">
            <div class="header3">
                <div class="banner3">
                    <img class="abstract-design-icon13" alt=""
                        src="{{ asset('images/abstract-design.svg') }}" />
                </div>
                <header class="header-content">
                    <div class="navigation-bar3">
                        <div class="nav-links">
                            <div class="home3">
                                <img class="symbol-icon6" alt="" src="{{ asset('images/symbol.svg') }}" />
                            </div>
                        </div>
                        <div class="nav-actions">
                            <nav class="nav-buttons1">
                                <div class="nav-button-links">
                                    <div class="text-button17">Home</div>
                                </div>
                                <div class="nav-button-links">
                                    <div class="text-button18">About Us</div>
                                </div>
                                <div class="button51">
                                    <div class="login-label">Properties</div>
                                </div>
                                <div class="nav-button-links">
                                    <div class="text-button19">Services</div>
                                </div>
                            </nav>
                        </div>
                        <button class="button52">
                            <div class="signup-label">Contact Us</div>
                        </button>
                    </div>
                </header>
            </div>
        </div>
        <main class="page-content">
            <section class="content-wrapper">
                <div class="main-content">
                    <div class="content-header">
                        <div class="container65">

                            <div class="sub-container31">
                                <h2 class="heading52">{{ $property->nama_property }}</h2>
                                <div class="container66">
                                    <img class="icon77" alt="" src="{{ asset('images/icon-16.svg') }}" />
                                    <div class="address">{{ $property->alamat }}</div>
                                </div>
                            </div>
                            <div class="text-container15">
                                <div class="heading53">Harga</div>
                                <div class="summary">IDR {{ $property->harga }}</div>
                            </div>
                        </div>
                        <div class="gallery1">
                            <div class="container67">
                                <div class="images-container">
                                    @foreach (File::files(public_path('galery')) as $file)
                                        <img class="image-icon9" loading="lazy"
                                            alt="{{ pathinfo($file->getFilename(), PATHINFO_FILENAME) }}"
                                            src="{{ asset('galery/' . $file->getFilename()) }}" />
                                    @endforeach
                                </div>
                                <div class="images-container1">
                                    @foreach (File::files(public_path('galery')) as $file)
                                        <img class="image-icon18"
                                            alt="{{ pathinfo($file->getFilename(), PATHINFO_FILENAME) }}"
                                            src="{{ asset('galery/' . $file->getFilename()) }}" />
                                    @endforeach
                                </div>
                                <div class="slider-controls">
                                    <div class="buttons-container3">
                                        <div class="button53">
                                            <img class="message-content-icon" alt=""
                                                src="{{ asset('images/icon-12.svg') }}" />
                                        </div>
                                        <div class="indicators">
                                            <div class="indicators-container">
                                                <div class="shape5"></div>
                                                <div class="shape6"></div>
                                                <div class="shape6"></div>
                                                <div class="shape6"></div>
                                                <div class="shape6"></div>
                                                <div class="shape6"></div>
                                            </div>
                                        </div>
                                        <div class="button54">
                                            <img class="message-content-icon" alt=""
                                                src="{{ asset('images/icon-13.svg') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="images-container1">
                                <div class="container68">
                                    <div class="text-container16">
                                        <div class="heading54">Deskripsi</div>
                                        <div class="paragraph34">
                                            {{ $property->deskripsi }}
                                        </div>
                                    </div>
                                    <div class="sub-container33">
                                        <div class="container69">
                                            <div class="sub-container34">
                                                <img class="icon77" alt=""
                                                    src="{{ asset('images/icon-41.svg') }}" />

                                                <div class="heading55">Kamar Tidur</div>
                                            </div>
                                            <div class="amenity-details">{{ $property->kamar_tidur }}</div>
                                        </div>
                                        <div class="line5"></div>
                                        <div class="container69">
                                            <div class="sub-container34">
                                                <img class="icon77" alt=""
                                                    src="{{ asset('images/icon-52.svg') }}" />

                                                <div class="heading55">Kamar Mandi</div>
                                            </div>
                                            <div class="amenity-details">{{ $property->kamar_mandi }}</div>
                                        </div>
                                        <div class="line5"></div>
                                        <div class="container69">
                                            <div class="sub-container34">
                                                <img class="icon77" alt=""
                                                    src="{{ asset('images/icon-61.svg') }}" />

                                                <div class="heading55">Luas</div>
                                            </div>
                                            <div class="amenity-details">{{ $property->luas }}</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="owner-details-parent">
                    <div class="owner-details">
                        <div class="owner-message">
                            <img class="message-content-icon" loading="lazy" alt=""
                                src="{{ asset('images/frame-3186.svg') }}" />

                            <div class="message-actions">
                                <div class="message-buttons">
                                    <img class="message-button-primary" loading="lazy" alt=""
                                        src="{{ asset('images/frame-3187.svg') }}" />

                                    <img class="message-button-secondary" loading="lazy" alt=""
                                        src="{{ asset('images/frame-3188.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="owner-info">
                            <h1 class="heading59">Inquire About {{ $property->nama_property }}</h1>
                        </div>
                        <div class="owner-info1">
                            <div class="paragraph35">
                                Interested in this property? Fill out the form below, and our
                                real estate experts will get back to you with more details,
                                including scheduling a viewing and answering any questions you
                                may have.
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-elements1">
                                <div class="container78">
                                    <div class="sub-container38">
                                        <div class="heading60">ID</div>
                                        <div class="input-field25">
                                            <input type="hidden" name="property_id" value="{{ $property->id }}">
                                        </div>
                                    </div>
                                    <div class="sub-container38">
                                        <div class="heading60">Nama</div>
                                        <div class="input-field25">
                                            <input class="name-placeholder" id="nama" name="nama"
                                                placeholder="masukkan nama anda" type="text" required />
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="container78">
                                    <div class="sub-container38">
                                        <div class="heading60">Email</div>
                                        <div class="input-field25">
                                            <input class="name-placeholder" id="email" name="email"
                                                placeholder="masukkan email anda" type="email" required />
                                        </div>
                                    </div>
                                    <div class="sub-container38">
                                        <div class="heading60">No Hp</div>
                                        <div class="input-field25">
                                            <input class="name-placeholder" id="no_hp" name="no_hp"
                                                placeholder="masukkan nomor hp" type="integer" required />
                                        </div>
                                    </div>
                                    <div class="sub-container38">
                                        <div class="heading60">Alamat</div>
                                        <div class="input-field25">
                                            <input class="name-placeholder" id="alamat" name="alamat"
                                                placeholder="masukkan alamat anda" type="text" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-container42">
                                </div>
                            </div>
                            <div class="frame-parent28">
                                <button class="button55" type="submit" formaction="{{ route('customers.store') }}">
                                    <div class="text70">Send Your Message</div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content-wrapper-inner">
                    <div class="footer-top2">
                        <div class="footer-navigation">
                            <div class="footer-links">
                                <div class="owner-message">
                                    <img class="message-content-icon" alt=""
                                        src="{{ asset('images/frame-3186.svg') }}" />
                                    <div class="message-actions">
                                        <div class="message-buttons">
                                            <img class="message-button-primary" alt=""
                                                src="{{ asset('images/frame-3187.svg') }}" />

                                            <img class="message-button-secondary" alt=""
                                                src="{{ asset('images/frame-3188.svg') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="owner-info">
                                    <h1 class="heading59">Frequently Asked Questions</h1>
                                </div>
                            </div>
                            <div class="owner-info1">
                                <div class="footer-description">
                                    <div class="description-content">
                                        <div class="heading53">
                                            Find answers to common questions about Estatein's
                                            services, property listings, and the real estate
                                            process. We're here to provide clarity and assist you
                                            every step of the way.
                                        </div>
                                    </div>
                                    <button class="button60">
                                        <div class="text98">View All FAQ’s</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container100">
                            <div class="images-container1">
                                <div class="card20">
                                    <div class="heading93">
                                        How do I search for properties on Estatein?
                                    </div>
                                    <div class="paragraph38">
                                        Learn how to use our user-friendly search tools to find
                                        properties that match your criteria.
                                    </div>
                                    <button class="button60">
                                        <div class="button-label3">Read More</div>
                                    </button>
                                </div>
                                <div class="card20">
                                    <div class="heading93">
                                        What documents do I need to sell my property through
                                        Estatein?
                                    </div>
                                    <div class="paragraph38">
                                        Find out about the necessary documentation for listing
                                        your property with us.
                                    </div>
                                    <button class="button60">
                                        <div class="button-label3">Read More</div>
                                    </button>
                                </div>
                                <div class="card20">
                                    <div class="heading95">
                                        <p class="how-can-i">
                                            How can I contact an Estatein agent?
                                        </p>
                                    </div>
                                    <div class="paragraph38">
                                        Discover the different ways you can get in touch with our
                                        experienced agents.
                                    </div>
                                    <button class="button60">
                                        <div class="button-label3">Read More</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div class="cta3">
            <img class="abstract-design-icon14" alt="" src="{{ asset('images/abstract-design-1.svg') }}" />

            <h1 class="heading96">Start Your Real Estate Journey Today</h1>
            <div class="paragraph41">
                Your dream property is just a click away. Whether you're looking for a
                new home, a strategic investment, or expert real estate advice,
                Estatein is here to assist you every step of the way. Take the first
                step towards your real estate goals and explore our available
                properties or get in touch with our team for personalized assistance.
            </div>
            <div class="button-container1">
                <img class="abstract-design-icon15" alt=""
                    src="{{ asset('images/abstract-design-2.svg') }}" />

                <button class="button66">
                    <div class="button-label4">Explore Properties</div>
                </button>
            </div>
        </div>
        <footer class="page-footer">
            <div class="footer-info">
                <div class="footer-details">
                    <div class="footer-branding">
                        <img class="symbol-icon6" alt="" src="{{ asset('images/symbol.svg') }}" />

                        <div class="home-label">
                            <img class="text-icon6" alt="" src="{{ asset('images/text.svg') }}" />
                        </div>
                    </div>
                    <div class="input-feild3">
                        <div class="signup-field">
                            <img class="icon92" alt="" src="{{ asset('images/icon-21.svg') }}" />
                        </div>
                        <input class="placeholder7" placeholder="Enter Your Email" type="text" />

                        <img class="icon93" alt="" src="{{ asset('images/icon-22.svg') }}" />
                    </div>
                </div>
                <div class="footer-link-container3">
                    <div class="column15">
                        <div class="home4">Home</div>
                        <div class="link-container15">
                            <div class="link63">Hero Section</div>
                            <div class="link64">Features</div>
                            <div class="link65">Properties</div>
                            <div class="link66">Testimonials</div>
                            <div class="link67">FAQ’s</div>
                        </div>
                    </div>
                    <div class="column15">
                        <div class="about-us3">About Us</div>
                        <div class="link-container15">
                            <div class="link68">Our Story</div>
                            <div class="link69">Our Works</div>
                            <div class="link70">How It Works</div>
                            <div class="link71">Our Team</div>
                            <div class="link72">Our Clients</div>
                        </div>
                    </div>
                    <div class="column15">
                        <div class="properties3">Properties</div>
                        <div class="link-container15">
                            <div class="link73">Portfolio</div>
                            <div class="link74">Categories</div>
                        </div>
                    </div>
                    <div class="column15">
                        <div class="services3">Services</div>
                        <div class="link-container15">
                            <div class="link75">Valuation Mastery</div>
                            <div class="link75">Strategic Marketing</div>
                            <div class="link75">Negotiation Wizardry</div>
                            <div class="link78">Closing Success</div>
                            <div class="link75">Property Management</div>
                        </div>
                    </div>
                    <div class="column15">
                        <div class="contact-us3">Contact Us</div>
                        <div class="link-container15">
                            <div class="link80">Contact Form</div>
                            <div class="link81">Our Offices</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container102">
            <div class="copyright">
                <div class="copyright-links">
                    <div class="link75">@2023 Estatein. All Rights Reserved.</div>
                    <div class="link75">Terms & Conditions</div>
                </div>
            </div>
            <div class="buttons-container4">
                <div class="button67">
                    <img class="icon77" alt="" src="{{ asset('images/icon-23.svg') }}" />
                </div>
                <div class="button67">
                    <img class="icon77" alt="" src="{{ asset('images/icon-24.svg') }}" />
                </div>
                <div class="button67">
                    <img class="icon77" alt="" src="{{ asset('images/icon-25.svg') }}" />
                </div>
                <div class="button67">
                    <img class="icon77" alt="" src="{{ asset('images/icon-26.svg') }}" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
