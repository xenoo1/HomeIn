<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/PropertiesPageDesktop.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap">
</head>

<body>
    <div class="properties-page-desktop">
        <section class="header">
            <div class="banner">
                <img class="abstract-design-icon" alt="" src="images/abstract-design.svg" />
            </div>
            <header class="frame-parent">

                <div class="navigation-bar">
                    <div class="navigation-bar-inner">
                        <div class="symbol-parent">
                            <img class="symbol-icon" loading="lazy" alt="" src="images/symbol.svg" />

                            <div class="text-wrapper">
                                <img class="text-icon" loading="lazy" alt="" src="images/text.svg" />
                            </div>
                        </div>
                    </div>
                    <div class="navigation-bar-child">
                        <nav class="frame-nav">
                            <div class="text-button-wrapper">
                                <a href="{{ route('landingpage') }}">
                                    <div class="text-button1">Home</div>
                                </a>
                            </div>
                            <div class="text-button-wrapper">
                                <a href="{{ route('property') }}">
                                    <div class="text-button3">Properties</div>
                                </a>
                            </div>
                            <div class="text-button-wrapper">
                                <a href="{{ route('services') }}">
                                    <div class="text-button4">Services</div>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <button class="button2">
                        <div class="text2">Contact Us</div>
                    </button>
                </div>
            </header>
        </section>
        {{-- filter pencarian property --}}
        {{-- <section class="container-wrapper">
        <div class="container">
          <div class="text-container">
            <h1 class="heading">Find Your Dream Property</h1>
            <div class="paragraph">
              Welcome to Estatein, where your dream property awaits in every
              corner of our beautiful world. Explore our curated selection of
              properties, each offering a unique story and a chance to redefine
              your life. With categories to suit every dreamer, your journey
            </div>
          </div>
          <div class="sub-container">
            <div class="container1">
              <div class="input-field">
                <div class="text3">Search For A Property</div>
                <button class="button3">
                  <img class="icon" alt="" src="./images/icon-1.svg" />

                  <div class="text4">Find Property</div>
                </button>
              </div>
            </div>
            <div class="container2">
              <div class="input-field1">
                <div class="container3">
                  <img class="icon" alt="" src="./images/icon-2.svg" />

                  <div class="line"></div>
                  <div class="text5">Location</div>
                </div>
                <div class="button4">
                  <img class="icon" alt="" src="./images/icon-3.svg" />
                </div>
              </div>
              <div class="input-field1">
                <div class="container3">
                  <img class="icon" alt="" src="./images/icon-4.svg" />

                  <div class="line"></div>
                  <div class="text5">Property Type</div>
                </div>
                <div class="button4">
                  <img class="icon" alt="" src="./images/icon-3.svg" />
                </div>
              </div>
              <div class="input-field1">
                <div class="container3">
                  <img class="icon" alt="" src="./images/icon-6.svg" />

                  <div class="line"></div>
                  <div class="text5">Pricing Range</div>
                </div>
                <div class="button4">
                  <img class="icon" alt="" src="./images/icon-3.svg" />
                </div>
              </div>
              <div class="input-field1">
                <div class="container3">
                  <img class="icon" alt="" src="./images/icon-8.svg" />

                  <div class="line"></div>
                  <div class="text5">Property Size</div>
                </div>
                <div class="button4">
                  <img class="icon" alt="" src="./images/icon-3.svg" />
                </div>
              </div>
              <div class="input-field1">
                <div class="container3">
                  <input class="icon10" type="checkbox" />

                  <div class="line"></div>
                  <div class="text5">Build Year</div>
                </div>
                <div class="button4">
                  <img class="icon" alt="" src="./images/icon-3.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        </section> --}}
        <section class="properties-page-desktop-inner">
            <div class="frame-div">
                <div class="frame-parent1">
                    <div class="frame-parent2">
                        <div class="frame-parent3">
                            <div class="frame-wrapper1">
                                <div class="frame-parent4">
                                </div>
                            </div>
                        </div>
                        <div class="heading-wrapper">
                            <h1 class="heading1">Temukan Property Anda Yang Sesuai dengan Impian Anda</h1>
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <div class="paragraph1">
                            Portofolio properti kami beragam sesuai impian Anda.
                            Temukan properti yang sempurna
                            yang selaras dengan visi Anda tentang rumah
                        </div>
                    </div>
                </div>
                <div class="cards-container">
                    <div class="sub-container1">
                        <div class="items-container">
                            {{-- property 1 --}}
                            <div class="cards-container">
                                @foreach ($properties as $property)
                                    <div class="card">
                                        @php
                                        $files = File::files(public_path('galery'));
                                        $firstFile = !empty($files) ? $files[0] : null;
                                        @endphp
                                        
                                        @if ($firstFile)
                                            <img class="image-icon" loading="lazy" 
                                                alt="{{ pathinfo($firstFile->getFilename(), PATHINFO_FILENAME) }}" 
                                                src="{{ asset('galery/' . $firstFile->getFilename()) }}" />
                                        @else
                                            <p>No images found in the gallery.</p>
                                        @endif
                                        <div class="container8">
                                            <div class="sub-container2">
                                                <div class="text-container1">
                                                    <div class="text10">{{ $property->alamat }}</div>
                                                </div>
                                                <div class="text-container2">
                                                    <div class="heading2">{{ $property->nama_property }}</div>
                                                    <div class="paragraph2">
                                                        <span>{{ $property->deskripsi }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub-container3">
                                                <div class="text-container3">
                                                    <div class="text11">Harga</div>
                                                    <div class="number">IDR {{ $property->harga }}</div>
                                                </div>
                                                <a href="{{ route('detailproperty', $property) }}">
                                                    <button class="button9">
                                                        <div class="text12">View Property Details</div>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-wrapper">
            <div class="cta">
                <img class="abstract-design-icon1" alt="" src="./images/abstract-design-1.svg" />

                <h1 class="heading17">Mulailah Perjalanan Real Estate Anda Sekarang</h1>
                <div class="paragraph6">
                    Properti impian Anda hanya dengan sekali klik. Apakah Anda sedang mencari
                    rumah baru, investasi strategis, atau saran ahli real estate,
                    Estatein siap membantu Anda di setiap langkah. Ambil yang pertama
                    melangkah menuju tujuan real estat Anda dan jelajahi ketersediaan kami
                    properti atau hubungi tim kami untuk personalisasi
                    pendampingan.
                </div>
                <div class="abstract-design-parent">
                    <img class="abstract-design-icon2" alt="" src="./images/abstract-design-2.svg" />

                    <button class="button15">
                        <div class="text12">Explore Properties</div>
                    </button>
                </div>
            </div>
        </section>
        <footer class="properties-page-desktop-child">
            <div class="frame-parent10">
                <div class="frame-parent11">
                    <div class="symbol-group">
                        <img class="symbol-icon" alt="" src="./images/symbol.svg" />

                        <div class="text-wrapper">
                            <img class="text-icon" alt="" src="./images/text.svg" />
                        </div>
                    </div>
                    <div class="input-feild">
                        <div class="icon-wrapper">
                            <img class="icon21" alt="" src="./images/icon-21.svg" />
                        </div>
                        <input class="input-feild-child" placeholder="Enter Your Email" type="text" />

                        <img class="icon22" alt="" src="./images/icon-22.svg" />
                    </div>
                </div>
                <div class="footer-link-container">
                    <div class="column">
                        <div class="home">Home</div>
                        <div class="link-container">
                            <div class="link">Hero Section</div>
                            <div class="link1">Features</div>
                            <div class="link2">Properties</div>
                            <div class="link3">Testimonials</div>
                            <div class="link4">FAQ’s</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="about-us">About Us</div>
                        <div class="link-container">
                            <div class="link5">Our Story</div>
                            <div class="link6">Our Works</div>
                            <div class="link7">How It Works</div>
                            <div class="link8">Our Team</div>
                            <div class="link9">Our Clients</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="properties">Properties</div>
                        <div class="link-container">
                            <div class="link10">Portfolio</div>
                            <div class="link11">Categories</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="services">Services</div>
                        <div class="link-container">
                            <div class="link12">Valuation Mastery</div>
                            <div class="link12">Strategic Marketing</div>
                            <div class="link12">Negotiation Wizardry</div>
                            <div class="link15">Closing Success</div>
                            <div class="link12">Property Management</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="contact-us">Contact Us</div>
                        <div class="link-container">
                            <div class="link17">Contact Form</div>
                            <div class="link18">Our Offices</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="container14">
            <div class="container-inner">
                <div class="link-parent">
                    <div class="link12">@2023 Estatein. All Rights Reserved.</div>
                    <div class="link12">Terms & Conditions</div>
                </div>
            </div>
            <div class="buttons-container">
                <div class="button16">
                    <img class="icon" alt="" src="./images/icon-23.svg" />
                </div>
                <div class="button16">
                    <img class="icon" alt="" src="./images/icon-24.svg" />
                </div>
                <div class="button16">
                    <img class="icon" alt="" src="./images/icon-25.svg" />
                </div>
                <div class="button16">
                    <img class="icon" alt="" src="./images/icon-26.svg" />
                </div>
            </div>
        </section>
    </div>
</body>

</html>
