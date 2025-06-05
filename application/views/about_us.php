<link href="<?php echo base_url(); ?>/assets/css/home.css" rel="stylesheet">
<style>
    .bold {
        font-weight: 700;

    }

    .section {
        padding: 40px 0;
    }

    .about-img:hover {
        width: 80% !important;
        transition: transform 2.2s;
    }

    .card {
        min-height: 150px;
    }

    .progress-xs {
        height: 10px;
    }

    .progress-label {
        padding-bottom: 15px;
    }



    .mobd {
        display: none;
    }

    @media screen and (max-width:991px) {
        .desk {
            display: none;
        }

        .mobd {
            display: block;
        }

    }

    .section-heading {
        font-size: 36px;
        font-family: "Lato", sans-serif;
        margin-bottom: 30px;
        font-weight: 300;
        color: #4f4f4f !important;
    }

    .content-section p.featurdpara {
        font-size: 24px;
        margin-bottom: 30px;
        color: #000000 !important;
    }

    .hd {
        font-size: 38px;
        margin-bottom: 20px;
        line-height: 1.5;
        color: #454545;
        font-weight: normal;
        font-family: 'tintacoated-regular';
        text-transform: capitalize
    }

    /* Popup container */
    .popup {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 5%;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.7);
        /* Black w/ opacity */
    }

    /* Popup content */
    .popup-content {
        background-color: #fefefe;
        margin: auto;
        overflow: hidden;
        border: 1px solid #888;
        width: 80%;

        z-index: 9999999;
        border-radius: 20px;
    }

    /* Close button */
    .close {
        color: #aaa;
        float: right;
        margin-right: 30px;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .sses .row {
        margin-top: 20px;
    }

    .cstm-key-popup .member_profile {
        display: flex;
        flex-wrap: wrap;
        width: 100%;

    }

    .cstm-key-popup .member_profile .member_profile_left {
        background-color: #eef3fd;
        width: 35%;
        text-align: center;
        padding: 30px;
    }

    .cstm-key-popup .member_profile .member_profile_right {
        background-color: #093e34;
        width: 65%;
        padding: 40px;
    }

    @media (max-width:680px) {
        .popup-content {
            overflow: hidden;
            width: 91%;
            max-height: 85vh;
            overflow-y: scroll;
            z-index: 9999999;
        }

        .cstm_key_people h4 {
            font-size: 20px !important;
            text-align: center !important;
        }

        .cstm_key_people h5 {
            font-size: 16px !important;

        }

        .cstm-key-popup .member_profile {
            display: block;
            flex-wrap: wrap;
            width: 100%;

        }

        .cstm-key-popup .member_profile_left h1 {
            font-size: 22px !important;
        }
.hd{
    font-size: 24px!important;
}
        .cstm-key-popup .member_profile .member_profile_left {
            background-color: #eef3fd;
            width: 100%;
            text-align: center;
            padding: 30px;
        }

        .cstm-key-popup .member_profile .member_profile_right {
            background-color: #093e34;
            width: 100%;
            padding: 40px;
        }
    }



    .cstm-key-popup .member_profile_left a {
        color: #093e34;
        text-decoration: none;
        font-weight: 600;
    }

    .cstm-key-popup .member_profile_right p {
        color: #fff;
        font-weight: 100;
        font-size: 18px;
        line-height: 28px;
        margin-bottom: 30px;
        text-align: justify;
    }

    .cstm-key-popup .member_profile_left a {
        color: #093e34;
        text-decoration: none;
        font-weight: 600;
    }

    .cstm-key-popup .member_profile_left .list-inline li:first-child {
        margin-left: 0;
    }

    .cstm-key-popup .member_profile_left .list-inline {
        margin: 12px 0;
    }

    .cstm-key-popup .member_profile_left h1 {
        color: rgba(9, 62, 52);
        font-size: 30px;
        line-height: 30px;
        margin-bottom: 7px;
        margin-top: 35px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .cstm-key-popup .member_profile_left img {
        width: 100%;
    }

    .fusion-builder-row {
        position: relative;
        z-index: 2;
    }

    .fusion-builder-row h1 {
        font-weight: 600;
        font-size: 50px;
        color: #fff;
        padding-bottom: 20px;
    }

    .fusion-text {
        color: white;
        text-align: center;
        padding: 20px;
    }

    .cstm_key_people .member_txt {
        color: #fff;
        background-color: rgba(9, 62, 52, .65);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        min-height: 64px;
        padding: 10px 12px 10px;
        transition: .4s ease-in-out;
    }

    .member_txt h5 {
        margin-bottom: 0;
    }

    b {
        font-size: 24px;
    }

    .cstm_key_people img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -moz-filter: grayscale(100%);
    }
</style>
<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<div id="popup1" class="popup cstm-key-popup">
    <span class="close">&times;</span>
    <div class="popup-content">
        <div class="member_profile clearfix">
            <!-- Left Side -->
            <div class="member_profile_left">
                <figure>
                    <img src="<?php echo base_url(); ?>assets/chanderjeet.jpg">
                </figure>
                <h1>Mr. Chanderjeet Pathak</h1>
                <p><b>Chairman</b></p>

                <ul class="social-icons list-inline d-none">
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Left Side -->
            <!-- Right Side -->
            <div class="member_profile_right">
                <div class="at-above-post addthis_tool" data-url=""></div>
                <p>Mr. Chanderjeet Pathak, Chairman of Divyansh Group, is a visionary leader with over three
                    decades of experience in the construction and real estate industry. An engineering graduate
                    from IP University, he began his career in 1993 as a Class A civil contractor, successfully
                    delivering numerous prestigious projects with a strong focus on quality and efficiency. <br><br> Building on his early success, Mr. Pathak transitioned into real estate development, driven by a
                    passion for creating not just structures, but thriving communities. His forward-thinking approach,
                    combined with a deep technical understanding, has helped Divyansh Group evolve into a
                    trusted name known for superior craftsmanship, timely delivery, and a client-first philosophy. <br><br>Mr. Pathak’s leadership is grounded in the principles of integrity, perseverance, and innovation.
                    Under his guidance, Divyansh has delivered landmark projects that blend functionality with
                    aesthetic excellence, earning accolades and the enduring trust of clients, partners, and
                    stakeholders.

                    <br><br>
                    Today, as Chairman, Mr. Chanderjeet Pathak continues to steer Divyansh Group towards new
                    horizons, embracing technological advancements, sustainable practices, and a relentless
                    commitment to building spaces that inspire and uplift lives.
                </p>
                <div class="at-below-post addthis_tool" data-url=""></div>
                <!-- AddThis Share Buttons generic via filter on the_content -->
            </div>
            <!-- Right Side -->
        </div>

    </div>
</div>
<div id="popup2" class="popup cstm-key-popup">
    <span class="close">&times;</span>
    <div class="popup-content">
        <div class="member_profile clearfix">
            <!-- Left Side -->
            <div class="member_profile_left">
                <figure>
                    <img src="<?php echo base_url(); ?>assets/shivansh.jpg">
                </figure>
                <h1>Mr. Shivansh Pathak</h1>
                <p><b>Director</b></p>

                <ul class="social-icons list-inline d-none">
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Left Side -->
            <!-- Right Side -->
            <div class="member_profile_right">
                <div class="at-above-post addthis_tool" data-url=""></div>
                <p>Mr. Shivansh Pathak, Director at Divyansh Group, represents the dynamic new generation of
                    leadership, blending the Group’s legacy of quality construction with a strong focus on innovation
                    and modern development practices. </p>

                <p>Since taking charge of several independent and mid-scale projects, Shivansh has made
                    immense contributions to the Group’s growth. He has established a proven track record for
                    timely project delivery while maintaining the highest standards of craftsmanship and excellence.
                    His meticulous attention to detail, forward-thinking approach, and commitment to operational
                    efficiency have brought fresh momentum to Divyansh’s ongoing expansion.</p>

                <p>A strong advocate for technological transformation, Shivansh has been instrumental in
                    integrating modern technologies into project planning, execution, and client services. His vision
                    is to enhance project functionality, construction quality, and customer experience by leveraging
                    innovative techniques and smart solutions, positioning Divyansh Group at the forefront of
                    contemporary real estate development.</p>
                <p>
                    Currently, Shivansh is leading key projects, including group housing developments and luxury
                    floor residences, ensuring that each project reflects a perfect synergy of functionality, aesthetics,
                    and technological advancement. </p>
                <p>With a passion for excellence and an eye on the future, Mr. Shivansh Pathak continues to drive
                    Divyansh Group towards new heights, reinforcing its commitment to building spaces that inspire,
                    enrich, and endure. </p>
                <div class="at-below-post addthis_tool" data-url=""></div>
                <!-- AddThis Share Buttons generic via filter on the_content -->
            </div>
            <!-- Right Side -->
        </div>

    </div>
</div>
<div id="popup3" class="popup cstm-key-popup">
    <span class="close">&times;</span>
    <div class="popup-content">
        <div class="member_profile clearfix">
            <!-- Left Side -->
            <div class="member_profile_left">
                <figure>
                    <img src="<?php echo base_url(); ?>assets/aakash.jpg">
                </figure>
                <h1>Mr. Aakash Pathak</h1>
                <p><b>Director</b></p>

                <ul class="social-icons list-inline d-none">
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Left Side -->
            <!-- Right Side -->
            <div class="member_profile_right">
                <div class="at-above-post addthis_tool" data-url=""></div>
                <p>Mr. Aakash Pathak, Director at Divyansh Group, is a key pillar of the organization's continued
                    growth and success. With a background in civil engineering, he brings deep technical expertise,
                    strategic insight, and an unwavering commitment to quality across every project he undertakes. </p>

                <p>Since joining Divyansh Group, Akash has played an integral role in delivering a series of
                    successful projects, consistently ensuring world-class craftsmanship, timely execution, and
                    exemplary construction standards. His meticulous approach to project management and
                    dedication to operational excellence have significantly contributed to enhancing the Group’s
                    reputation for reliability and superior quality. </p>

                <p>Akash’s leadership has been particularly impactful in spearheading individual unit projects in
                    Indirapuram, where he has overseen the seamless execution of residential developments,
                    focusing on both functional design and aesthetic appeal. His emphasis on precision, client
                    satisfaction, and innovation has been instrumental in strengthening Divyansh Group’s standing
                    in a highly competitive market.</p>
                <p>With a strong commitment to advancing the Group’s legacy while embracing modern
                    construction practices, Mr. Aakash Pathak continues to drive Divyansh’s vision forward —
                    building spaces that embody excellence, trust, and timeless value</p>
                <div class="at-below-post addthis_tool" data-url=""></div>
                <!-- AddThis Share Buttons generic via filter on the_content -->
            </div>
            <!-- Right Side -->
        </div>

    </div>
</div>
<div id="popup4" class="popup cstm-key-popup">
    <span class="close">&times;</span>
    <div class="popup-content">
        <div class="member_profile clearfix">
            <!-- Left Side -->
            <div class="member_profile_left">
                <figure>
                    <img src="<?php echo base_url(); ?>assets/kshitiz.jpg">
                </figure>
                <h1>Mr. Kshitiz Pathak</h1>
                <p><b>Director</b></p>

                <ul class="social-icons list-inline d-none">
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Left Side -->
            <!-- Right Side -->
            <div class="member_profile_right">
                <div class="at-above-post addthis_tool" data-url=""></div>
                <p>Mr. Kshitiz Pathak, Director at Divyansh Group, is a vital force behind the company's remarkable
                    growth, particularly in the domain of group housing developments. With a strong academic
                    background in engineering, he brings technical expertise, strategic planning capabilities, and a
                    deep commitment to quality execution.</p>
                <p>As the head of the Group's group housing projects, Kshitiz has led the successful delivery of
                    thousands of homes, turning the dreams of countless families into reality. His meticulous
                    attention to detail, operational discipline, and client-centric approach have ensured that every
                    project meets the highest standards of design, construction quality, and timely delivery. </p>

                <p>Kshitiz’s leadership is marked by professionalism, precision, and passion. His deep
                    understanding of the residential market, combined with his ability to manage large-scale
                    developments seamlessly, has played a critical role in establishing Divyansh Group as a trusted
                    name for those seeking their dream homes. </p>
                <p>With a vision rooted in excellence and a drive to continuously raise the bar, Mr. Kshitiz Pathak
                    continues to lead Divyansh’s group housing initiatives, contributing significantly to building
                    thriving communities and shaping a better urban living experience.</p>
                <div class="at-below-post addthis_tool" data-url=""></div>
                <!-- AddThis Share Buttons generic via filter on the_content -->
            </div>
            <!-- Right Side -->
        </div>

    </div>
</div>
<div class="mainimg" style="position: relative;background:black;">
    <img src="<?php echo base_url(); ?>assets/img/abb.jpg" alt="" width="100%" style="    opacity: 0.4;">
    <div class="over" style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
        <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">About Us</span></h1>
    </div>
</div>

<section class="content-section">
    <div class="container">
        <h2 class="section-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">About Divyansh Group </h2>
        <p class="featurdpara wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            Divyansh Group is a premier real estate development company
            headquartered in the Delhi NCR region, celebrated for its forward-thinking
            approach, uncompromising quality standards, and commitment to
            creating lasting value.
        </p>
        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            Founded in 1993, Divyansh Group has spent over three decades shaping
            the urban landscape of Delhi NCR with <span class="bold">landmark residential
                developments</span> that seamlessly blend <span class="bold">contemporary design, superior
                craftsmanship, and thoughtful community planning.</span> Guided by a
            vision to go beyond the conventional idea of construction, we believe in
            building not just homes, but <span class="bold">vibrant, thriving communities</span> where
            comfort, sustainability, and luxury converge to create elevated living
            experiences.

        </p>
        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            Over the years, Divyansh Group has delivered a diverse portfolio of
            projects, ranging from luxury floors and independent units to large-scale
            group housing societies. Each project reflects our core philosophy of
            <span class="bold">precision, innovation, and customer-centricity,</span> with an unwavering
            focus on quality execution and timely delivery.
        </p>
        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            With a strong presence across key locations such as <span class="bold">Ghaziabad, Noida,
                Indirapuram, and other parts of Delhi NCR,</span> Divyansh Group has built a
            reputation as a developer synonymous with <span class="bold">trust, transparency, and
                excellence.</span> Our deep-rooted relationships with customers, partners, and
            stakeholders stand as a testament to our ethical practices and consistent
            pursuit of perfection.
        </p>
        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            As we continue to grow and expand, we remain dedicated to <span class="bold">embracing
                technological advancements, adopting sustainable building
                practices, and elevating lifestyle standards</span> for the modern
            homeowner. At Divyansh Group, every project is a step toward creating
            spaces that inspire pride, foster community, and endure the test of time.
        </p>

    </div>
</section>
<section class="bg-blue counter-section">
    <div class="container">
        <ul class="impactlist aboutcounter" id="counter">
            <li>
                <span>
                    <span class="count percent" data-count="4.6">4.6</span>
                    +
                    <small>
                        Million sq. m space already delivered
                    </small>
                </span>
            </li>
            <li>
                <span>
                    <span class="count percent" data-count="3.7">3.7</span>
                    +
                    <small>
                        Million sq. m under construction
                    </small>
                </span>
            </li>
            <li class="counterchange">
                <span class="showbefore">
                    <span class="count percent" data-count="4000">4000</span>
                    +
                    <small>
                        Happy Customers
                    </small>
                </span>



            </li>
            <li>
                <span>
                    <span class="count percent" data-count="30">30</span>
                    +
                    <small>
                        Years of legacy
                    </small>
                </span>
            </li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="text-center">
                    <h1 class="hd hd1 mb-0 aos-init aos-animate" data-aos="fade-up">
                        To date, Divyansh Group has delivered six iconic projects across Delhi NCR, and several more
                        are in progress – each contributing to the transformation of city skylines and the enrichment of
                        community life.
                    </h1>
                    <!--<h1 class="hd hd1 " data-aos="fade-up">Your private oasis awaits</h1>-->
                    <!--<p data-aos="fade-up">In the 80’s, Trehan Iris was one of the first few developers of the capital. After building many landmarks for the government of India, Mr JK Trehan went on to develop and change the skyline of Delhi building over 100 projects across the most discerning locations of New Delhi. Each residence is a masterpiece, made for you to enjoy the tranquillity of your own space.</p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color:#e2f3f0 ;" id="core">
    <div class="container mt-md-0 mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center pb-3" style="font-weight: 500;">Core Values </h1>
                <p class="text-center">Our work is guided by a set of core values that define who we are and shape every project we
                    undertake:
                </p>
            </div>
        </div>
        <div class="row mt-md-5 mt-3 justify-content-between" style="align-items: center;">

            <div class="col-md-6 mt-md-0 mt-3 pb-3">
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"> <span class="bold">Community Living:</span> We design developments that foster a sense of community,
                        encouraging social interaction and a supportive neighborhood atmosphere. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"> <span class="bold">Comfort & Luxury:</span> Every project is built with residents’ comfort in mind, offering
                        modern amenities and a touch of luxury that enhances everyday living. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Uncompromising Quality: </span>From architecture through construction, we adhere to
                        the highest quality standards, ensuring durability and excellence in every structure.</div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Sustainability:</span> We incorporate eco-friendly practices and green building concepts,
                        aiming for developments that are not only beautiful but also gentle on the environment. </div>
                </div>



            </div>
            <div class="col-md-6 mt-md-0 mt-3 pb-3">
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Creative Design: </span>Innovation in design is a hallmark of our projects – we embrace
                        creative architectural concepts to deliver homes that are both aesthetically pleasing and
                        functionally efficient. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Timely Delivery:</span> We respect our customers’ time and investment by ensuring
                        projects are completed and delivered as promised, without unnecessary delays. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Trust & Transparency:</span> Honesty and integrity form the bedrock of our customer
                        relationships. We prioritize transparency at every step, building trust that lasts well beyond the
                        handover of keys. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Stability & Excellence:</span> We strive for excellence in all aspects of our work and
                        maintain financial and structural stability in our projects, providing peace of mind to buyers and
                        partners alike.</div>
                </div>

            </div>
        </div>
    </div>
</section>
<section style="">
    <div class="container mt-md-0 mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center pb-3" style="font-weight: 500;">Our Commitment </h1>
                <p class="text-center">At Divyansh Group, we are committed to upholding the highest standards of craftsmanship,
                    innovation, and customer service. When you choose us, you can expect:
                </p>
            </div>
        </div>
        <div class="row mt-md-5 mt-3 justify-content-between" style="align-items: center;">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="assets/vision.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6 mt-md-0 mt-3 pb-3">
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold"> Quality Craftsmanship:</span> Meticulous attention to detail in construction and finishing,
                        ensuring each home we build is robust, safe, and built to last. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"> <span class="bold">Design Innovation:</span> Cutting-edge designs and thoughtful layouts that maximize
                        space, natural light, and functionality, providing a modern lifestyle experience in every project. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Timely Delivery: </span>Professional project management that guarantees on-schedule
                        completion and handover, so you can move into your new home as planned. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">After-Sales Service: </span>Responsive post-possession support and maintenance,
                        because our relationship with customers continues even after delivery. Your comfort and
                        satisfaction remain our priority. </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1 col-1" style="margin-top: -5px;padding-right: 0px;text-align: end;"><span><i
                                class="bi bi-check" style="font-size:25px;"></i></span></div>
                    <div class="col-md-11 col-11 text-start"><span class="bold">Customer Satisfaction: </span>A customer-centric approach at every step – from the first
                        inquiry to the final handover – ensuring that each buyer’s experience is smooth, transparent,
                        and rewarding. </div>
                </div>



            </div>

        </div>
    </div>
</section>
<section style="background-color: #E7EEF3;" id="team">
    <div class="container mt-md-5 mt-2 pump">

        <h1 class="foot text-center" style="font-weight: 500;   ">Meet Our Experts</h1>



        <div class="row mt-md-5 mt-md-3 mt-5 cstm_key_people  ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
            <h4 class="mb-4 p-0" style="font-weight: 700; text-transform: uppercase;">Managing Partner
            </h4>
            <div class="col-md-4 col-6  mt-3" style="cursor: pointer;">
                <div style="position: relative;" class="partner" data-popup="popup1">
                    <img src="<?php echo base_url(); ?>assets/chanderjeet.jpg" alt="" width="100%">
                    <div class="member_txt">
                        <h5> Mr. Chanderjeet Pathak </h5>
                        <span>Chairman</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-md-5 mt-4 cstm_key_people ml-0 mr-0" style="width: 100%;margin-left:0;margin-right:0;">
            <h4 class="mb-4 p-0" style="font-weight: 700;text-transform: uppercase;">Designated Partners

            </h4>

            <div class="col-md-4 col-6 mt-3" style="cursor: pointer;">
                <div style="position: relative;" class="partner" data-popup="popup3">
                    <img src="<?php echo base_url(); ?>assets/aakash.jpg" alt="" width="100%">
                    <div class="member_txt">
                        <h5>Mr. Aakash Pathak </h5>
                        <span>Director</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3" style="cursor: pointer;">
                <div style="position: relative;" class="partner" data-popup="popup4">
                    <img src="<?php echo base_url(); ?>assets/kshitiz.jpg" alt="" width="100%">
                    <div class="member_txt">
                        <h5>Mr. Kshitiz Pathak</h5>
                        <span>Director</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3" style="cursor: pointer;">
                <div style="position: relative;" class="partner" data-popup="popup2">
                    <img src="<?php echo base_url(); ?>assets/shivansh.jpg" alt="" width="100%">
                    <div class="member_txt">
                        <h5>Mr. Shivansh Pathak</h5>
                        <span>Director</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<script>
    // Get all buttons that open a popup
    var buttons = document.querySelectorAll(".partner");

    // Attach click event listeners to each button
    buttons.forEach(function(button) {
        button.onclick = function() {
            var popupId = this.getAttribute("data-popup");
            var popup = document.getElementById(popupId);
            popup.style.display = "block";
        }
    });

    // Get all close elements
    var closes = document.querySelectorAll(".close");

    // Attach click event listeners to each close element
    closes.forEach(function(close) {
        close.onclick = function() {
            var popup = this.closest(".popup");
            popup.style.display = "none";
        }
    });

    // Close popup when clicking outside of it
    window.onclick = function(event) {
        var popups = document.querySelectorAll(".popup");
        popups.forEach(function(popup) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        });
    }
</script>