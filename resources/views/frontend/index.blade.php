<x-frontend-layout>
    <x-slot name="title">Nest Ventures Ltd</x-slot>
    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <div class="header-area two">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                <a href="#">House 10, Main Road, Block C, Banasree, Rampura, Dhaka 1219</a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:info@nestventuresltd.com"><span
                                        class="__cf_email__" {{-- data-cfemail="a3cbc6cfcfcce3c5cacdcccd8dc0ccce" --}}>info@nestventuresltd.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="right">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Navbar -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                            {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Blog <i class="bx bx-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        </ul>
                        <div class="side-nav">
                            {{-- <div class="language">
                            <select>
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                            </select>
                        </div> --}}
                            <a class="consultant-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSdjPTkGtXlkLI_WG3Sd2sp135XObuunj_aw_3F4E8SCrtKsJA/viewform?usp=sf_link">
                                Apply for Investment
                            </a>
                            <a class="consultant-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSd-uAweHxyxWVwspVksTLp32pEt2QIJJ2lHzz3WtAQwOA6zcg/viewform?usp=sf_link">
                                Apply as Investor
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="banner-area-two">
        <div class="banner-slider-two owl-theme owl-carousel">

            <div class="banner-item banner-bg-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <span>Your Financial Status Is Good Hands</span>
                                <h1>Financial Assistance With True Purpose</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. ipsum suspendisse ultrices gravida.
                                    Risus commodo </p>
                                <div class="banner-btn-area">
                                    <a class="common-btn two" href="contact.html">
                                        Contact Us
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-item banner-bg-three">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <span>Your Partner in Entrepreneurial Success</span>
                                <h1>Innovate, Invest, and Grow with NEST</h1>
                                <p>At NEST, we empower entrepreneurs to reach their goals with comprehensive training, expert consultancy, strategic networking, and valuable investment opportunities. Partner with us to transform your vision into reality and elevate your business to new heights.</p>
                                <div class="banner-btn-area">
                                    <a class="common-btn two" href="contact.html">
                                        Contact Us
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Banner -->

    <!-- About -->
    <div class="about-area-two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title two">
                            <span class="sub-title">About Company</span>
                            <h2>We Help Entrepreneurs To Achieve Their Desire Goals</h2>
                        </div>
                        <p class="about-p">At NEST, we empower entrepreneurs to achieve their desired goals through comprehensive training, expert consultancy, strategic networking, and valuable investment opportunities. Join us to turn your vision into reality and take your business to the next level.</p>
                        <ul>
                            <li>
                                <i class="flaticon-bar-chart"></i>
                                <h3>Investment Support</h3>
                                <p>NEST Ventures Limited offers impact investment to new entrepreneurs and SMEs, fueling their growth and success. We provide the financial support needed to transform innovative ideas into thriving businesses, making a positive impact on the community and economy. Partner with us to turn your entrepreneurial vision into reality.</p>
                            </li>
                            <li>
                                <i class="flaticon-consulting"></i>
                                <h3>Business Consultancy Support</h3>
                                <p>NEST Ventures Limited offers expert business consultancy to new entrepreneurs and SMEs, guiding you through every step of your business journey. Our tailored advice and strategies help you overcome challenges and achieve sustainable growth. Partner with us for the expertise you need to succeed.</p>
                            </li>
                        </ul>
                        <a class="common-btn two" href="about.html">
                            Read More
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/about/about4.jpg" alt="About">
                        <img src="assets/img/about-shape6.png" alt="Shape">
                        <img src="assets/img/about-shape7.png" alt="Shape">
                        <img src="assets/img/about-shape8.png" alt="Shape">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Projects -->
    <section class="projects-area pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Empowering Diverse Industries</span>
                <h2>NEST Ventures Fuels Growth and Innovation</h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/projects/projects1.jpg" alt="Projects">
                        <div class="inner">
                            <h3>
                                <a href="project-details.html">Technology (Robotics & AI)</a>
                            </h3>
                            <a class="projects-btn" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/projects/projects2.jpg" alt="Projects">
                        <div class="inner">
                            <h3>
                                <a href="project-details.html">Green Production</a>
                            </h3>
                            <a class="projects-btn" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/projects/projects3.jpg" alt="Projects">
                        <div class="inner">
                            <h3>
                                <a href="project-details.html">Manufacturing</a>
                            </h3>
                            <a class="projects-btn" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/projects/projects4.jpg" alt="Projects">
                        <div class="inner">
                            <h3>
                                <a href="project-details.html">Service</a>
                            </h3>
                            <a class="projects-btn" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Projects -->

    <!-- Services -->
    <section class="services-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Services</span>
                <h2>Exceptional NEST Services</h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services1.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Financial Support & Consultancy</a>
                            </h3>
                            <p>Choose NEST for expert financial support and consultancy designed specifically for SMEs and new entrepreneurs. We offer customized advice and strategic planning to help you build a strong financial foundation and drive your business forward. Partner with NEST to turn your entrepreneurial vision into reality.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services2.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Mentorship & Guidance</a>
                            </h3>
                            <p>Discover expert mentorship and tailored guidance for SMEs and new entrepreneurs with NEST. Our dedicated team offers personalized strategies and insights to navigate challenges and unlock opportunities. Trust NEST to be your ally on the path to business success.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services3.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Business Plan & Strategy</a>
                            </h3>
                            <p>NEST specializes in providing comprehensive support for SMEs and new entrepreneurs in formulating effective business plans and strategies. With our proven expertise and hands-on approach, we empower you to chart a clear path towards your business goals. Partner with NEST to turn your vision into a strategic reality.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services4.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Marketing & Branding Assistance</a>
                            </h3>
                            <p>NEST provides expert marketing and branding assistance to SMEs and new entrepreneurs, helping you build a strong brand identity and effectively reach your audience. With our personalized strategies and innovative approaches, we empower you to differentiate your business and achieve marketing success. Partner with NEST to elevate your brand to new heights.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services5.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Networking Opportunities</a>
                            </h3>
                            <p>Elevate your business connections with NEST's exclusive networking opportunities designed for SMEs and new entrepreneurs. From industry meetups to networking events, our platform facilitates meaningful connections with like-minded professionals and potential partners. Join NEST and expand your network to propel your business forward.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services6.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Technology Support</a>
                            </h3>
                            <p>NEST offers comprehensive technology support tailored for SMEs and new entrepreneurs, empowering you with the tools and resources to thrive in the digital age. From IT infrastructure to software solutions, our expert team provides personalized assistance to help you harness technology for business success. Trust NEST to be your partner in leveraging technology to drive innovation and efficiency.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services6.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Legal Support</a>
                            </h3>
                            <p>Transform your business with NEST's legal support tailored specifically for SMEs and new entrepreneurs. Our experienced attorneys offer practical solutions and strategic advice to help you overcome legal hurdles and achieve your business goals. With NEST by your side, you can navigate the complexities of the legal system with ease and focus on building a successful enterprise.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item-two">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/services/services6.jpg" alt="Services">
                        </div>
                        <div class="bottom">
                            <h3>
                                <a href="service-details.html">Emotional Support</a>
                            </h3>
                            <p>NEST goes beyond business support by offering empathetic emotional support for SMEs and new entrepreneurs. Our compassionate team provides a safe space to share your concerns and offers encouragement to help you overcome obstacles with resilience. With NEST, you're not just building a business; you're fostering your mental strength for enduring success.</p>
                            <div class="services-btn">
                                <i class='bx bx-right-arrow-alt'></i>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Projects -->
    <section class="projects-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Strength</span>
                <h2>Empowering Your Business with NEST</h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item-two">
                        <img src="assets/img/project-shape1.png" alt="Shape">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/projects/project-shape2.png" alt="Shape">
                        <i class="flaticon-goal icon"></i>
                        <h3>
                            <a href="project-details.html">Fast Executions</a>
                        </h3>
                        <p>NEST specializes in the fast execution of investment support for SMEs and new entrepreneurs. With our streamlined processes and expert guidance, you can quickly secure the resources you need to fuel your business growth and stay ahead of the competition.</p>
                        <a class="projects-btn" href="project-details.html">
                            Read More
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item-two">
                        <img src="assets/img/project-shape1.png" alt="Shape">
                        <img src="assets/img/project-shape2.png" alt="Shape">
                        <i class="flaticon-support icon"></i>
                        <h3>
                            <a href="project-details.html">Guide & Support</a>
                        </h3>
                        <p>NEST provides tailored guidance and support for SMEs and new entrepreneurs, assisting you every step of the way in your investment journey. Our experienced professionals are committed to helping you achieve your business goals with personalized strategies and expert advice.</p>
                        <a class="projects-btn" href="project-details.html">
                            Read More
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item-two">
                        <img src="assets/img/project-shape1.png" alt="Shape">
                        <img src="assets/img/project-shape2.png" alt="Shape">
                        <i class="flaticon-investment-insurance icon"></i>
                        <h3>
                            <a href="project-details.html">Financial Secure</a>
                        </h3>
                        <p>NEST provides robust investment support to SMEs and new entrepreneurs, prioritizing your financial security. With our personalized advice and strategic planning, we help you build a solid financial foundation for long-term success and peace of mind.</p>
                        <a class="projects-btn" href="project-details.html">
                            Read More
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="projects-item-two">
                        <img src="assets/img/project-shape1.png" alt="Shape">
                        <img src="assets/img/project-shape2.png" alt="Shape">
                        <i class="flaticon-refinancing icon"></i>
                        <h3>
                            <a href="project-details.html">Refinancing</a>
                        </h3>
                        <p>NEST specializes in providing refinancing support for SMEs and new entrepreneurs. Our dedicated team helps you restructure existing debt, improving cash flow and financial stability so you can focus on expanding your business with greater confidence.</p>
                        <a class="projects-btn" href="project-details.html">
                            Read More
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Projects -->

    <!-- Counter -->
    <div class="counter-area ptb-100">
        <div class="container">
            <div class="counter-wrap">
                <div class="counter-shape">
                    <img src="assets/img/counter-shape1.png" alt="Shape">
                    <img src="assets/img/counter-shape2.png" alt="Shape">
                </div>
                <div class="row">

                    <div class="col-6 col-sm-6 col-lg-4">
                        <div class="counter-item">
                            <i class="flaticon-project-management"></i>
                            <h3>
                                <span class="odometer" data-count="10000000">00</span>
                            </h3>
                            <p>Financed</p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-4">
                        <div class="counter-item">
                            <i class="flaticon-like"></i>
                            <h3>
                                <span class="odometer" data-count="15">00</span>
                            </h3>
                            <p>Projects</p>
                        </div>
                    </div>

                    {{-- <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item">
                            <i class="flaticon-trophy"></i>
                            <h3>
                                <span class="odometer" data-count="6421">00</span>
                            </h3>
                            <p>International Awards</p>
                        </div>
                    </div> --}}

                    <div class="col-6 col-sm-6 col-lg-4">
                        <div class="counter-item right-border">
                            <i class="flaticon-team"></i>
                            <h3>
                                <span class="odometer" data-count="20">00</span>
                            </h3>
                            <p>Team Members</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->

    <!-- Video -->
    <div class="video-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="video-item">
                    <div class="video-wrap">
                        <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                    <span>Watch Our Latest Video For Better Innovation</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video -->

    <!-- Works -->
    <div class="works-area-two ptb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="works-img">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/works-shape1.png" alt="Shape">
                        <img src="https://templates.envytheme.com/finon/default/assets/img/works-main.png" alt="Works">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="works-content">
                        <div class="section-title two">
                            <span class="sub-title">Working Process</span>
                            <h2>How Does NEST Work</h2>
                            <p>These steps ensure a comprehensive and structured approach from the initial application to the final disbursement of investment funds, fostering a successful partnership between NEST and the business.</p>
                        </div>
                        <ul>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Application Submission</h3>
                                <p>SMEs and entrepreneurs submit their investment application to NEST, including all required documents and financial statements</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Initial Assessment</h3>
                                <p>NEST reviews the application to ensure it meets the basic eligibility criteria and gathers initial insights into the business's financial health and needs.</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Due Diligence</h3>
                                <p>Conduct a thorough analysis of the applicant's financial status, business model, market position, and growth potential. This may include financial audits, market research, and risk assessment.</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Proposal Development</h3>
                                <p>Based on the due diligence findings, NEST develops a tailored investment proposal outlining the terms, conditions, and structure of the investment</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Approval Process</h3>
                                <p>The investment proposal is reviewed by NEST’s investment committee or relevant authority for final approval. This step may involve negotiations and adjustments based on feedback from both parties</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Agreement Signing</h3>
                                <p>Once approved, a formal investment agreement is drafted and signed by NEST and the applicant, detailing all terms, conditions, and responsibilities</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Funds Disbursement</h3>
                                <p>Upon agreement execution, NEST disburses the investment funds to the applicant. The disbursement process is managed efficiently to ensure timely availability of funds for the business’s needs.</p>
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                <h3>Ongoing Monitoring and Support</h3>
                                <p>After disbursement, NEST continues to monitor the investment, providing ongoing support and guidance to ensure the business achieves its growth objectives and meets the agreed-upon milestones.</p>
                            </li>
                        </ul>
                        <a class="common-btn two" href="#">
                            Learn More
                            <span></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Works -->

    <!-- Book -->
    <div class="book-area pb-100">
        <div class="container">
            <div class="book-content">
                <div class="book-shape">
                    <img src="assets/img/book-shape3.png" alt="Shape">
                    <img src="assets/img/book-shape4.png" alt="Shape">
                </div>
                <h2>Are You Ready? Book Appointment Now</h2>
                <p>Get your Quote or Call <a href="tel:+8809696232337">(096) 96232337</a>, <a href="tel:+8801913511188">(880) 1913 511 188</a></p>
                <a class="common-btn" href="#">Apply as Investor<span></span></a>
                <a class="common-btn" href="#">Apply for Investment<span></span></a>
            </div>
        </div>
    </div>
    <!-- End Book -->

    <!-- Testimonials -->
    <section class="testimonials-area-two ptb-100">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Testimonials</span>
                <h2>What Our Clients Says</h2>
            </div>
            <div class="testimonials-slider owl-theme owl-carousel">

                <div class="testimonials-item">
                    <h2>NEST has been an invaluable partner in our entrepreneurial journey. Beyond providing the financial backing we needed, their consultancy and additional support were crucial in shaping our business strategy and navigating challenges along the way. They truly go above and beyond to ensure their clients' success</h2>
                    {{-- <img src="https://templates.envytheme.com/finon/default/assets/img/testimonials-thumb1.jpg" alt="Testimonials"> --}}
                    {{-- <h3>Aliza Trupa</h3>
                    <span>CEO of Finance & Banking</span>
                    <i class='bx bxs-quote-alt-left bx-flip-horizontal'></i> --}}
                </div>
                
                <div class="testimonials-item">
                    <h2>Starting a business can be overwhelming, but NEST's mental support services have been a lifeline. Their compassionate team offers not just financial investment but also emotional support, helping us stay motivated and resilient through tough times. NEST genuinely cares about our well-being and success.</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST stands out as more than just an investment provider – they are genuine partners invested in our success. Their technology support has been crucial, helping us implement cutting-edge solutions that enhance our operational efficiency and competitive edge. We're grateful for their holistic approach to supporting entrepreneurs like us.</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST's networking support has opened doors we never thought possible. Their extensive network of industry contacts and curated events have connected us with potential partners and mentors who have been instrumental in our growth. With NEST, we feel part of a thriving entrepreneurial community.</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST's commitment to our success is evident through their comprehensive training support. The workshops and training programs they offer have equipped us with the skills and knowledge needed to navigate the business landscape effectively. Their investment in our development has been key to our progress</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST provides a unique blend of financial, consultancy, mental, technology, networking, and training support that has been pivotal for our SME. Their holistic approach ensures we have all the resources and guidance needed to thrive. Partnering with NEST has been a transformative experience for our business</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST provides a unique blend of financial, consultancy, mental, technology, networking, and training support that has been pivotal for our SME. Their holistic approach ensures we have all the resources and guidance needed to thrive. Partnering with NEST has been a transformative experience for our business</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST has been a phenomenal partner for our startup. They didn't just provide the financial backing we needed, but their consultancy, mental support, and technology assistance were game-changers for us. Their team was always there to offer guidance and encouragement, helping us stay motivated and focused. The tech support they provided ensured our operations ran smoothly and efficiently</h2>
                </div>
                <div class="testimonials-item">
                    <h2>Partnering with NEST has been the best decision for our business. Their holistic approach to support goes beyond finance – their consultancy services helped us refine our business model, while their mental support kept our team resilient through tough times. The networking opportunities and training sessions they offered connected us with industry leaders and equipped us with the skills needed to thrive</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST truly understands the challenges faced by new entrepreneurs. They provided comprehensive support, from financial investment and expert consultancy to mental and emotional support, which was crucial for our well-being. Their technology support streamlined our operations, and the networking events introduced us to valuable industry contacts. The training programs offered were insightful and directly contributed to our growth</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST has been an all-encompassing support system for our SME. Beyond financial investment, their consultancy and mental support helped us navigate the stresses of entrepreneurship. Their technology support was instrumental in upgrading our systems, and the networking opportunities they provided opened doors to new partnerships. The training sessions were tailored to our needs, enhancing our team's capabilities</h2>
                </div>
                <div class="testimonials-item">
                    <h2>NEST is more than just an investment provider – they are a partner in every sense. They offered not only the funds we needed but also essential consultancy, mental support, and technology assistance. Their networking events connected us with key industry players, and the training programs were invaluable in building our team's expertise. We couldn't have asked for a better ally in our business journey</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- Blog -->
    <section class="blog-area two pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Latest News</span>
                <h2>Latest News From Blog</h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/blog/blog1.jpg" alt="Blog">
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-user'></i>
                                    by
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    27 November, 2020
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Financial planning is the best invest for corporate
                                    business</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/blog/blog2.jpg" alt="Blog">
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-user'></i>
                                    by
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    28 November, 2020
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Largest demand partnership building with agency</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <img src="https://templates.envytheme.com/finon/default/assets/img/blog/blog3.jpg" alt="Blog">
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-user'></i>
                                    by
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    29 November, 2020
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">How to become top conference for business growth</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Logo -->
    <div class="logo-area ptb-100">
        <div class="container">
            <div class="logo-slider owl-theme owl-carousel">

                <div class="logo-item">
                    <img src="https://templates.envytheme.com/finon/default/assets/img/logo/logo1.png" alt="Logo">
                </div>

                <div class="logo-item">
                    <img src="https://templates.envytheme.com/finon/default/assets/img/logo/logo2.png" alt="Logo">
                </div>

                <div class="logo-item">
                    <img src="https://templates.envytheme.com/finon/default/assets/img/logo/logo3.png" alt="Logo">
                </div>

                <div class="logo-item">
                    <img src="https://templates.envytheme.com/finon/default/assets/img/logo/logo4.png" alt="Logo">
                </div>

                <div class="logo-item">
                    <img src="https://templates.envytheme.com/finon/default/assets/img/logo/logo5.png" alt="Logo">
                </div>

            </div>
        </div>
    </div>
    <!-- End Logo -->

    <!-- Footer -->
    <footer class="footer-area two pt-100 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="logo" href="index.html">
                                <img src="assets/img/logo-nestventuresltd.png" alt="Logo">
                            </a>
                            <p>At NEST, we empower entrepreneurs to reach their goals with comprehensive training, expert consultancy, strategic networking, and valuable investment opportunities. Partner with us to transform your vision into reality and elevate your business to new heights.p>
                            <ul>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <span>Phone:</span>
                                    <a href="tel:+8809696232337">(880) 9696 232 337</a>
                                    <a href="tel:+8809696232337">(880) 1913 511 188</a>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <span>Email:</span>
                                    <a href="mailto:info@nestventuresltd.com"><span
                                            class="__cf_email__"{{--  data-cfemail="1b737e7777745b7d7275747535787476" --}}>info@nestventuresltd.com</span></a>
                                </li>
                                <li>
                                    <i class='bx bx-current-location'></i>
                                    <span>Address:</span>
                                    <a href="#">House 10, Main Road, Block C, Banasree, Rampura, Dhaka 1219</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="projects.html">Projects</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <h3>Newsletter</h3>
                        <div class="footer-newsletter">
                            <p>Accusamus et iusto odio quas molestias except.</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter email address"
                                    name="EMAIL" required autocomplete="off">

                                <button class="btn common-btn" type="submit">
                                    Subscribe
                                    <span></span>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>What We Do</h3>
                            <ul>
                                <li>
                                    <a href="about.html">Financial Advice</a>
                                </li>
                                <li>
                                    <a href="services.html">Planning Strategies</a>
                                </li>
                                <li>
                                    <a href="projects.html">Investment Trending</a>
                                </li>
                                <li>
                                    <a href="faq.html">Wealth Commitment</a>
                                </li>
                                <li>
                                    <a href="blog.html">Our Services</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">States Element</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area two">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright ©2021 Nest. Designed By <a title="Developer: www.asifulmamun.info.bd" href="https://easysheba.com/" target="_blank">EasySheba</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- Go Top -->
    <div class="go-top">
        <i class='bx bxs-up-arrow'></i>
        <i class='bx bxs-up-arrow'></i>
    </div>
    <!-- End Go Top -->

</x-frontend-layout>
