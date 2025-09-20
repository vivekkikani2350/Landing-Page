<?php

/**
 * Template Name: Front Page
 */

get_header();
?>

<main class="magnifico-main">
        <!-- Hero Section Start -->
        <section class="magnifico-hero_border">
            <div class="container position-relative">
                <div class="flex justify-content-between align-items-center gap-80">
                    <!-- col 1 -->
                    <div class="width-50 hero-text-content">
                        <div class="flex flex-direction-column gap-24">
                            <div class="magnifico-hero_title fade-up-animation">
                                Team projects, done well
                            </div>
                            <div class="magnifico-p fade-up-animation animation-delay-200">
                                The only platform that gives your team all the tools needed to work together on their
                                awesome projects.
                            </div>
                            <div class="flex justify-content-between align-items-center gap-24 magnifico-email fade-up-animation animation-delay-400">
                                <div class="input-box flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="20" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g
                                            transform="matrix(1.0899999999999994,0,0,1.0899999999999994,-1.0799999999999947,-1.0799999999999947)">
                                            <g data-name="Layer 2">
                                                <path
                                                    d="M19 20.5H5a4.004 4.004 0 0 1-4-4v-9a4.004 4.004 0 0 1 4-4h14a4.004 4.004 0 0 1 4 4v9a4.004 4.004 0 0 1-4 4zM5 5.5a2.002 2.002 0 0 0-2 2v9a2.002 2.002 0 0 0 2 2h14a2.002 2.002 0 0 0 2-2v-9a2.002 2.002 0 0 0-2-2z"
                                                    fill="#94a3b8" opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M12 13.434a4.993 4.993 0 0 1-3.07-1.055L2.386 7.29A1 1 0 0 1 3.614 5.71l6.544 5.09a2.995 2.995 0 0 0 3.684 0l6.544-5.09a1 1 0 0 1 1.228 1.58l-6.544 5.09A4.996 4.996 0 0 1 12 13.433z"
                                                    fill="#94a3b8" opacity="1" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <input type="email" placeholder="Enter work email">
                                </div>
                                <button class="magnifico-submit btn-pulse" type="submit">
                                    Sign Up Free
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                            <path
                                                d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="magnifico-hero_partens flex justify-content-between align-items-center gap-24 fade-up-animation animation-delay-600">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_partner_1.png" alt="Partner Logo" class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_partner_2.png" alt="magnifico_partner_2" class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_partner_3.png" alt="magnifico_partner_3" class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_partner_4.png" alt="magnifico_partner_4" class="partner-logo">
                            </div>
                        </div>
                    </div>
                    <!-- col 2 -->
                    <div class="width-50 position-relative hero-image-content">
                        <div class="hero-main-image slide-in-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_hero.png" alt="magnifico_hero">
                            <a href="#" class="play-button-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_icon.png" class="position-absolute magnifico-play_icon pulse-animation" alt="magnifico_icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_icon_1.png" class="position-absolute magnifico_icon_1 floating-animation" alt="magnifico_icom_1">
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Enjoy your Start -->
        <section class="section-animate">
            <div class="container position-relative">
                <div class="flex justify-content-between align-items-center gap-80">
                    <!-- col 1 -->
                    <div class="width-50">
                        <div class="flex justify-content-between gap-24 images-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_auout1.png" class="magnifico_auout_1 mag-init slide-up" alt="magnifico_auout">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_auout2.png" class="magnifico_auout_2 mag-init slide-down" alt="magnifico_auout">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_auout3.png" class="magnifico_auout_3 mag-init slide-up" alt="magnifico_auout">
                        </div>
                    </div>
                    <!-- col 2 -->
                    <div class="width-50 content-animate">
                        <div class="flex flex-direction-column gap-24">
                            <div class="magnifico-title slide-in-text">
                                Enjoy your time working
                            </div>
                            <div class="magnifico-p slide-in-text animation-delay-200">
                                Etiam condimentum duis molestie malesuada volutpat pellentesque sed. Ornare suspendisse
                                ut ac neque lobortis sed tincidunt. Mi tempus quis massa tellus imperdiet aenean nulla
                                id.
                            </div>
                            <div class="magnifico-link_button slide-in-text animation-delay-400">
                                <a href="" class="link-hover-animation">
                                    See how it helped others
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                            <path
                                                d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_icon_2.png"
                        class="position-absolute magnifico_icon_2 rotate-animation"
                        alt="magnifico_icon_2">
                </div>
            </div>
        </section>
        <!-- Enjoy your End -->

        <!-- Get all the Start -->
        <section class="section-animate">
            <div class="container">
                <div class="flex justify-content-between align-items-center gap-80">
                    <!-- col 1 -->
                    <div class="width-50 content-animate">
                        <div class="flex flex-direction-column gap-24">
                            <div class="magnifico-title slide-in-text">
                                Get all the tools your team needs
                            </div>
                            <div class="magnifico-p slide-in-text animation-delay-200">
                                Egestas fringilla aliquam leo, habitasse arcu varius lorem elit. Neque pellentesque
                                donec et tellus ac varius tortor, bibendum. Nulla felis ac turpis at amet. Purus
                                malesuada placerat arcu at enim elit in accumsan.
                            </div>
                            <div class="magnifico-link_button slide-in-text animation-delay-400">
                                <a href="" class="link-hover-animation">
                                    Check the tools
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                            <path
                                                d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- col 2 -->
                    <div class="width-40 tool-image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_tool.png" alt="magnifico_tool" class="scale-animation">
                    </div>
                </div>
            </div>
        </section>
        <!-- Get all End -->

        <!-- Problems solved section start -->
        <section class="section-animate">
            <div class="container">
                <div class="problem-bg zoom-in-animation">
                    <div class="flex justify-content-end align-items-center gap-80">
                        <div class="width-50 flex flex-direction-column gap-24">
                            <div class="problem-title slide-in-text">
                                Problems come and get solved with ease
                            </div>
                            <div class="problem-p slide-in-text animation-delay-200">
                                Egestas fringilla aliquam leo, habitasse arcu varius lorem elit. Neque pellentesque
                                donec et tellus ac varius tortor, bibendum. Nulla felis ac turpis at amet. Purus
                                malesuada placerat arcu at enim elit in accumsan.
                            </div>
                            <div class="problem-link_button slide-in-text animation-delay-400">
                                <a href="" class="link-hover-animation">
                                    Improve workflow
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                            <path
                                                d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Problems solved section End -->

        <!-- Improve Workflow Start -->
        <section class="position-relative section-animate">
            <div class="container">
                <div class="flex justify-content-between align-items-center gap-80">
                    <!-- col 1 -->
                    <div class="width-50 content-animate">
                        <div class="flex flex-direction-column gap-24">
                            <div class="magnifico-title slide-in-text">
                                Improve workflow
                            </div>

                            <div class="magnifico-tab_workflow slide-in-text animation-delay-200">
                                <!-- Tab Navigation -->
                                <div class="tab-container">
                                    <div class="tab active tab-animation" onclick="showContent('research')">Research</div>
                                    <div class="tab tab-animation" onclick="showContent('plan')">Plan</div>
                                    <div class="tab tab-animation" onclick="showContent('design')">Design</div>
                                </div>

                                <!-- Tab Content -->
                                <div id="research" class="tab-content active tab-content-animation">
                                    <div class="magnifico-p">
                                        Egestas fringilla aliquam leo, habitasse arcu varius lorem elit. Neque
                                        pellentesque
                                        donec et tellus ac varius tortor, bibendum. Nulla felis ac turpis at amet. Purus
                                        malesuada placerat arcu at enim elit in accumsan.
                                    </div>
                                    <div class="magnifico-link_button">
                                        <a href="" class="link-hover-animation">
                                            Check the tools
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0"
                                                y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g
                                                    transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                                    <path
                                                        d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                    <path
                                                        d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div id="plan" class="tab-content tab-content-animation">
                                    <div class="magnifico-p">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that
                                        it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content
                                        here, content here', making it look like readable English. sometimes on purpose
                                        (injected humour and the like).
                                    </div>
                                    <div class="magnifico-link_button">
                                        <a href="" class="link-hover-animation">
                                            Check the tools
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0"
                                                y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g
                                                    transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                                    <path
                                                        d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                    <path
                                                        d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div id="design" class="tab-content tab-content-animation">
                                    <div class="magnifico-p">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for 'lorem ipsum' will uncover many web sites
                                        still
                                        in their infancy. Various versions have evolved over the years, sometimes by
                                        accident.
                                    </div>
                                    <div class="magnifico-link_button">
                                        <a href="" class="link-hover-animation">
                                            Check the tools
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0"
                                                y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" class="">
                                                <g
                                                    transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                                    <path
                                                        d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                    <path
                                                        d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col 2 -->
                    <div class="width-50 position-relative workflow-image-container">
                        <div class="slide-in-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_work_flow.png" alt="magnifico_work_flow">
                            <a href="#" class="play-button-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_icon.png" class="position-absolute magnifico-play_icon pulse-animation" alt="magnifico_icon">
                            </a>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magnifico_icon_1.png" class="position-absolute magnifico_icon_1 floating-animation" alt="magnifico_icom_1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Improve Workflow End -->

        <!-- Join community section start -->
        <section class="section-animate">
            <div class="container join_community">
                <div class="join_community-bg zoom-in-animation">
                    <div class="width-100">
                        <div class="flex flex-direction-column text-align-center gap-24">
                            <div class="join_community-title slide-in-text">
                                Join the community today
                            </div>
                            <div class="join_community-p slide-in-text animation-delay-200">
                                Egestas fringilla aliquam leo, habitasse arcu varius lorem elit. Neque pellentesque
                                donec et tellus ac varius tortor, bibendum. Nulla felis ac turpis at amet. Purus
                                malesuada placerat arcu at enim elit in accumsan.
                            </div>
                            <div class="join_community-link_button flex justify-content-center slide-in-text animation-delay-400">
                                <a href="" class="cta-button-animation">
                                    Sign Up Free
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" x="0" y="0"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g transform="matrix(1.4,0,0,1.4,-102.40012817382842,-102.3999206542972)">
                                            <path
                                                d="M398.5 281h-298c-13.81 0-25-11.19-25-25s11.19-25 25-25h298c13.81 0 25 11.19 25 25s-11.19 25-25 25z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M284.01 399.25a24.96 24.96 0 0 1-18.34-8c-9.39-10.12-8.79-25.94 1.33-35.33l107.47-99.67-110.72-99.94c-10.25-9.25-11.06-25.06-1.81-35.31s25.06-11.06 35.31-1.81l131 118.25c5.21 4.7 8.2 11.37 8.25 18.39s-2.85 13.73-8 18.5L301 392.58a24.917 24.917 0 0 1-16.99 6.67z"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Join community section End -->
    </main>

<?php get_footer(); ?>