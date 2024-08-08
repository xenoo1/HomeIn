<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/PropertiesPageDesktop.css') }}">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap">
  </head>
  <body>
    <div class="properties-page-desktop">
      <section class="header">
        <div class="banner">
          <img
            class="abstract-design-icon"
            alt=""
            src="images/abstract-design.svg"
          />
        </div>
        <header class="frame-parent">
          
          <div class="navigation-bar">
            <div class="navigation-bar-inner">
              <div class="symbol-parent">
                <img
                  class="symbol-icon"
                  loading="lazy"
                  alt=""
                  src="images/symbol.svg"
                />

                <div class="text-wrapper">
                  <img
                    class="text-icon"
                    loading="lazy"
                    alt=""
                    src="images/text.svg"
                  />
                </div>
              </div>
            </div>
            <div class="navigation-bar-child">
              <nav class="frame-nav">
                <div class="text-button-wrapper">
                  <div class="text-button1">Home</div>
                </div>
                <div class="text-button-wrapper">
                  <div class="text-button2">About Us</div>
                </div>
                <div class="text-button-wrapper">
                  <div class="text-button3">Properties</div>
                </div>
                <div class="text-button-wrapper">
                  <div class="text-button4">Services</div>
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
              <div class="heading-wrapper">
                <h1 class="heading1">Discover a World of Possibilities</h1>
              </div>
            </div>
            <div class="paragraph-wrapper">
              <div class="paragraph1">
                Our portfolio of properties is as diverse as your dreams.
                Explore the following categories to find the perfect property
                that resonates with your vision of home
              </div>
            </div>
          </div>
          <div class="cards-container">
            <div class="sub-container1">
              <div class="items-container">
                {{-- property 1 --}}
                <div class="cards-container">
                  @foreach($properties as $property)
                      <div class="card">
                          <img
                              class="image-icon"
                              loading="lazy"
                              alt=""
                              src="{{ $property->image_url }}" // assume you have an image_url column in your database
                          />
                          <div class="container8">
                              <div class="sub-container2">
                                  <div class="text-container1">
                                      <div class="text10">{{ $property->lokasi }}</div>
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
                                      <div class="text11">Price</div>
                                      <div class="number">IDR {{ $property->harga }}</div>
                                  </div>
                                  <button class="button9">
                                      <div class="text12">View Property Details</div>
                                  </button>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
                {{-- <div class="card">
                  <img
                    class="image-icon"
                    alt=""
                    src="./images/image-1@2x.png"
                  />

                  <div class="container8">
                    <div class="sub-container2">
                      <div class="text-container1">
                        <div class="text10">
                          Urban Oasis - Life in the Heart of the City
                        </div>
                      </div>
                      <div class="text-container2">
                        <div class="heading2">Metropolitan Haven</div>
                        <div class="paragraph2">
                          <span
                            >Immerse yourself in the energy of the city. This
                            modern apartment in the heart...
                          </span>
                          <span class="read-more">Read More</span>
                        </div>
                      </div>
                    </div>
                    <div class="sub-container3">
                      <div class="text-container6">
                        <div class="text11">Price</div>
                        <div class="number1">$650,000</div>
                      </div>
                      <button class="button10">
                        <div class="text12">View Property Details</div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <img
                    class="image-icon"
                    alt=""
                    src="./images/image-2@2x.png"
                  />

                  <div class="container8">
                    <div class="sub-container2">
                      <div class="text-container1">
                        <div class="text10">
                          Countryside Charm - Escape to Nature's Embrace
                        </div>
                      </div>
                      <div class="text-container2">
                        <div class="heading2">Rustic Retreat Cottage</div>
                        <div class="paragraph2">
                          <span
                            >Find tranquility in the countryside. This charming
                            cottage is nestled amidst rolling hills...
                          </span>
                          <span class="read-more">Read More</span>
                        </div>
                      </div>
                    </div>
                    <div class="sub-container3">
                      <div class="text-container9">
                        <div class="text11">Price</div>
                        <div class="number2">$350,000</div>
                      </div>
                      <button class="button10">
                        <div class="text12">View Property Details</div>
                      </button>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="cta-wrapper">
        <div class="cta">
          <img
            class="abstract-design-icon1"
            alt=""
            src="./images/abstract-design-1.svg"
          />

          <h1 class="heading17">Start Your Real Estate Journey Today</h1>
          <div class="paragraph6">
            Your dream property is just a click away. Whether you're looking for
            a new home, a strategic investment, or expert real estate advice,
            Estatein is here to assist you every step of the way. Take the first
            step towards your real estate goals and explore our available
            properties or get in touch with our team for personalized
            assistance.
          </div>
          <div class="abstract-design-parent">
            <img
              class="abstract-design-icon2"
              alt=""
              src="./images/abstract-design-2.svg"
            />

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
              <input
                class="input-feild-child"
                placeholder="Enter Your Email"
                type="text"
              />

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
