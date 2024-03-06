<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta http-equiv="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="-1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="/images/logo.png" />

    <title>Edu-Hope Scholarship | Nepal | SMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- main style -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">

    <!-- Jquery -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K87J39N');
    </script>
    <!-- End Google Tag Manager -->


    <!-- <script type="text/javascript" src="/assets/js/config.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="{{asset('jsfile/main.js')}}"></script>



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K87J39N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- You write code for this content block in another file -->


    <header role="main-menu" class="front">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="nav-content container-xxl">
                <div>
                    <a class="nav-logo" href="/" id="menu_logo">
                        <img class="nav-logo-img img-fluid" src="{{ asset('./Images/Logo.png') }}" alt="Fuse AI Logo" />
                    </a>
                    <a class="nav-logo" href="/" id="menu_logo-fill">
                        <img class="nav-logo-img img-fluid logo-fill" src="{{ asset('./Images/Logo.png') }}"
                            alt="Fuse AI Logo" />
                    </a>
                    <div class="powered-by">Powered by <a target="_blank"
                            href="https://github.com/rayxrayy/Schlorship-Management-System">Edu-Hope</a></div>
                </div>
                <button class="navbar-toggler" id="menu_toggle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="nav-list white">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Programs
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item all-programs Secondary" href="">Explore All
                                            Programs
                                            <svg xmlns="" width="16" height="16" fill="currentColor"
                                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="">Schlorship</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Life
                                            Counceling</a></li>
                                    <li><a class="dropdown-item" href="">Internship
                                            Oppurtunities</a></li>
                                    <li><a class="dropdown-item" href="">Work
                                            with Companies</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-school" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown-school">
                                    <li><a class="dropdown-item" href="">Nepal</a></li>
                                    <li><a class="dropdown-item" href="">Latin America</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link" id="menu_lectures">College
                                    Partners</a></li>
                            <li class="nav-item"><a href="" class="nav-link" id="menu_faqs">Reviews</a></li>
                            <li class="nav-item"><a href="/blade" class="nav-link" id="menu_insights">Blog</a></li>
                            <li class="nav-item">
                                @if (Route::has('login'))

                                @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link nav-btn"
                                    id="menu_apply-aiFellowship">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" style=""></a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link nav-btn"
                                    style="background: linear-gradient(#595bd4, #595bd4);"
                                    id="menu_apply-aiFellowship">Get Started</a>
                                @endif
                                @endauth

                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <main class="ai-fellowship-page">


        <div id="sticky-social" style="display:none">
            <ul class="social">
                <li class="fb">
                    <a href="https://www.facebook.com/heraldcollegektm/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7.61" height="16.37" viewBox="0 0 7.61 16.37">
                            <g id="Group_11148" data-name="Group 11148" transform="translate(-9.84 -5.46)">
                                <path id="Path_8933" data-name="Path 8933"
                                    d="M11.51,13.71v7.91a.211.211,0,0,0,.21.21h2.94a.211.211,0,0,0,.21-.21V13.58H17a.208.208,0,0,0,.21-.19l.2-2.42a.2.2,0,0,0-.21-.22H14.87V9.03a.734.734,0,0,1,.73-.73h1.64a.211.211,0,0,0,.21-.21V5.67a.211.211,0,0,0-.21-.21H14.47a2.949,2.949,0,0,0-2.95,2.95v2.33H10.05a.211.211,0,0,0-.21.21v2.42a.211.211,0,0,0,.21.21h1.47v.13Z"
                                    fill="#fff" fill-rule="evenodd" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.39" height="13.75" viewBox="0 0 14.39 13.75">
                            <g id="Group_11151" data-name="Group 11151" transform="translate(-37.39 -6.25)">
                                <path id="Path_8939" data-name="Path 8939"
                                    d="M51.78,14.68v5.09a.226.226,0,0,1-.23.23H48.92a.226.226,0,0,1-.23-.23V15.04c0-1.24-.44-2.1-1.56-2.1a1.678,1.678,0,0,0-1.58,1.13,2.131,2.131,0,0,0-.1.75v4.95a.226.226,0,0,1-.23.23H42.6a.226.226,0,0,1-.23-.23c.01-1.26.03-7.37.01-8.81a.226.226,0,0,1,.23-.23h2.62a.226.226,0,0,1,.23.23v1.09c-.01.01-.01.02-.02.03h.02v-.03a3.062,3.062,0,0,1,2.78-1.53c2.02-.01,3.54,1.32,3.54,4.16ZM37.81,20h2.63a.226.226,0,0,0,.23-.23V10.96a.226.226,0,0,0-.23-.23H37.81a.226.226,0,0,0-.23.23v8.81A.239.239,0,0,0,37.81,20Z"
                                    fill="#fff" />
                                <circle id="Ellipse_1068" data-name="Ellipse 1068" cx="1.65" cy="1.65" r="1.65"
                                    transform="translate(37.39 6.25)" fill="#fff" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/Ray284445941" target="_blank">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="28" fill="#0A0A0A" />
                            <g clip-path="url(#clip0_995_773)">
                                <mask id="mask0_995_773" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="12"
                                    y="12" width="32" height="33">
                                    <path d="M44 12H12V44.72H44V12Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_995_773)">
                                    <path
                                        d="M31.0443 25.8476L42.9571 12H40.1341L29.7903 24.0237L21.5287 12H12L24.4931 30.1819L12 44.7032H14.8231L25.7464 32.0058L34.4713 44.7032H44L31.0437 25.8476H31.0443ZM27.1777 30.3421L25.9119 28.5316L15.8403 14.1252H20.1764L28.3043 25.7516L29.5701 27.5621L40.1355 42.6747H35.7994L27.1777 30.3428V30.3421Z"
                                        fill="white" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_995_773">
                                    <rect width="32" height="32.72" fill="white" transform="translate(12 12)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/ray_basnet/" target="_blank">
                        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>
                <div class="my-2">Join us</div>
                <li class="whatsapp">
                    <a href="https://chat.whatsapp.com/Foy6VEMp6RBCzMXUTVCSzq" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <rect x="0" y="0" rx="0" ry="0" width="90" height="90"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(42,181,64); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 17.609 44.751 c -0.002 4.846 1.265 9.577 3.671 13.747 l -3.902 14.248 l 14.582 -3.823 c 4.018 2.191 8.541 3.346 13.144 3.347 h 0.012 c 15.159 0 27.5 -12.337 27.506 -27.497 c 0.003 -7.348 -2.856 -14.256 -8.049 -19.454 c -5.194 -5.197 -12.099 -8.061 -19.457 -8.064 C 29.954 17.255 17.615 29.589 17.609 44.751 M 26.292 57.779 l -0.544 -0.865 c -2.289 -3.639 -3.497 -7.845 -3.495 -12.163 c 0.005 -12.601 10.26 -22.853 22.871 -22.853 c 6.107 0.002 11.846 2.383 16.163 6.703 c 4.317 4.32 6.692 10.062 6.69 16.169 c -0.006 12.602 -10.261 22.855 -22.862 22.855 h -0.009 c -4.103 -0.002 -8.127 -1.104 -11.636 -3.186 l -0.835 -0.495 l -8.653 2.269 L 26.292 57.779 z M 45.116 72.27 L 45.116 72.27 L 45.116 72.27 C 45.115 72.27 45.115 72.27 45.116 72.27"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 38.241 33.255 c -0.515 -1.145 -1.057 -1.167 -1.546 -1.188 c -0.401 -0.017 -0.859 -0.016 -1.317 -0.016 c -0.458 0 -1.203 0.172 -1.833 0.86 c -0.63 0.688 -2.406 2.35 -2.406 5.732 c 0 3.382 2.463 6.649 2.806 7.108 c 0.344 0.458 4.755 7.619 11.74 10.374 c 5.806 2.289 6.987 1.834 8.247 1.719 c 1.26 -0.114 4.066 -1.662 4.639 -3.267 c 0.573 -1.605 0.573 -2.98 0.401 -3.267 c -0.172 -0.286 -0.63 -0.458 -1.317 -0.802 c -0.688 -0.344 -4.066 -2.007 -4.696 -2.236 c -0.63 -0.229 -1.088 -0.343 -1.547 0.345 c -0.458 0.687 -1.774 2.235 -2.176 2.693 c -0.401 0.459 -0.802 0.517 -1.489 0.173 c -0.688 -0.345 -2.901 -1.07 -5.527 -3.411 c -2.043 -1.822 -3.422 -4.071 -3.824 -4.759 c -0.401 -0.687 -0.043 -1.06 0.302 -1.402 c 0.309 -0.308 0.688 -0.802 1.031 -1.204 c 0.343 -0.401 0.457 -0.688 0.686 -1.146 c 0.229 -0.459 0.115 -0.86 -0.057 -1.204 C 40.188 38.012 38.852 34.613 38.241 33.255"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="viber">
                    <a href="https://invite.viber.com/?g=GqoxOOjJYFIKYiptnXem_KkC1astbTyF&lang=en" target="_blank">
                        <svg fill="none" height="92" viewBox="0 0 92 92" width="92" xmlns="http://www.w3.org/2000/svg">
                            <path d="m0 0h91.5618v91.5618h-91.5618z" fill="#8755a7" />
                            <g fill="#fff">
                                <path
                                    d="m35.0952 64.4983c0-.7675 0-1.535 0-2.3025.0054-.0314.0043-.0636-.0033-.0945s-.0215-.06-.0409-.0854-.0438-.0466-.0718-.0622c-.0279-.0157-.0589-.0255-.0908-.0288-1.9199-.5404-3.6919-1.5032-5.184-2.8165-1.0872-.98-1.9924-2.1413-2.6744-3.4313-.9613-1.8633-1.601-3.8729-1.8927-5.9455-.3614-2.5999-.487-5.2267-.3751-7.8488.0246-1.2224.0876-2.431.2279-3.6535.2235-2.323.815-4.5966 1.7525-6.7374 1.1576-2.6321 3.2578-4.7463 5.8955-5.9351 1.7968-.8147 3.6871-1.4095 5.6292-1.7712 1.9044-.3574 3.8326-.5768 5.7693-.6564 1.7457-.0611 3.4934-.0356 5.2366.0764 2.4948.1044 4.9671.5138 7.3606 1.219 1.7746.5069 3.4628 1.2736 5.0088 2.2748 1.5063 1.0245 2.7245 2.4121 3.5401 4.032.9588 1.892 1.6106 3.9219 1.9313 6.015.2083 1.2427.3453 2.4961.4101 3.7542.0911 1.5593.0806 3.1256.021 4.678s-.1928 3.0596-.3855 4.5807c-.2437 2.2831-.952 4.4936-2.0821 6.4978-1.4709 2.5355-3.8272 4.4501-6.6245 5.383-1.9128.6637-3.8878 1.136-5.8956 1.41-1.4686.2014-2.9407.3473-4.4199.4063-1.1321.0521-2.2642.0382-3.3964.0209-.6414 0-1.2793-.0626-1.9173-.1181-.0626-.0117-.1273-.0048-.1859.02-.0587.0247-.1086.0661-.1435.1189-1.2899 1.535-2.6288 3.0284-3.9783 4.5147-.2458.2712-.5304.5052-.8447.6946-.2063.1341-.4416.2183-.6868.2457s-.4935-.0026-.7248-.0878-.4391-.2231-.6067-.4025c-.1676-.1795-.2903-.3955-.3581-.6305-.1336-.4178-.1999-.8538-.1963-1.292-.0035-.6876-.0035-1.3648-.0035-2.042zm1.5597 2.9137.1648-.1528 2.9267-3.2193c1.1263-1.2387 2.2514-2.4785 3.3754-3.7195.0552-.0757.1298-.1355.216-.1734.0862-.0378.181-.0523.2747-.0419.382.0382.7641.0521 1.1497.0555 1.3319 0 2.6638 0 3.9957-.0937 1.2093-.0938 2.415-.2397 3.6138-.4272 1.2906-.2226 2.5683-.5136 3.8275-.8717 2.8041-.7467 4.9737-2.3442 6.3372-4.9315.8049-1.5907 1.3098-3.3138 1.4896-5.0843.2131-1.6688.3406-3.3472.3821-5.0287.0621-2.1124-.0835-4.2258-.4347-6.3103-.2435-1.5102-.6817-2.9832-1.3038-4.3828-.7922-1.7364-1.9138-3.1742-3.6418-4.098-2.6498-1.4169-5.517-2.049-8.4718-2.372-.8377-.0903-1.6754-.1389-2.5166-.1701-1.7225-.088-3.4486-.0787-5.17.0277-1.238.0911-2.4693.2558-3.6873.4932-1.7913.3235-3.5241.9087-5.142 1.7364-.9379.4696-1.7888 1.0931-2.5166 1.8441-1.1796 1.3063-2.0448 2.8606-2.5307 4.5461-.5763 1.9629-.8909 3.992-.9358 6.0358-.1128 2.0438-.087 4.0928.0771 6.1332.1021 1.2142.3073 2.4178.6134 3.5979.4554 1.839 1.3389 3.5469 2.5797 4.987 1.3397 1.4693 3.0711 2.5336 4.9947 3.0701.2419.0729.3506.1563.3506.4271-.0211 1.0002 0 2.0004 0 3.0006z" />
                                <path
                                    d="m34.2021 36.3926c-.0245-.7606.3926-1.3128.8973-1.8094.6657-.6318 1.3991-1.1897 2.1872-1.6635.3593-.2196.7866-.3033 1.2033-.2356.4166.0676.7946.282 1.0645.6037.9535.9931 1.8069 2.076 2.5481 3.2333.3671.5205.6443 1.098.8202 1.7086.0703.2383.0749.4909.0133.7316-.0617.2406-.1873.4605-.3638.6367-.4043.3933-.8353.7588-1.2898 1.094-.2291.1809-.3994.4245-.4897.7005-.0904.276-.0969.5723-.0186.8519.2807 1.313.9169 2.5255 1.8402 3.5076 1.1219 1.3571 2.5675 2.4158 4.2061 3.0805.4026.2051.8639.2676 1.3074.1771.2428-.0657.4586-.2054.6169-.3994.2453-.3091.5117-.6078.7325-.9377.2864-.4115.7237-.696 1.2187-.7926.495-.0967 1.0086.0021 1.4311.2751 1.1882.6831 2.3099 1.4736 3.3509 2.3616.2453.2084.5012.4098.7466.6217.2903.2193.4999.527.5968.8758s.0756.7194-.0606 1.0551c-.2165.5644-.5322 1.0865-.9323 1.5419-.4973.6848-1.1306 1.2616-1.8612 1.6948-.3492.2032-.7416.3226-1.1458.3485-.4041.0259-.8088-.0423-1.1816-.1991-2.8358-1.1313-5.4856-2.6752-7.8618-4.5808-2.3242-1.8958-4.3554-4.1189-6.0288-6.5985-1.408-2.0527-2.5281-4.2853-3.3298-6.6367-.0853-.2844-.1555-.573-.2103-.8647-.0156-.1268-.0179-.2548-.007-.382z" />
                                <path
                                    d="m46.3033 32.6973c2.3727.0435 4.6547.9106 6.4482 2.4503s2.9847 3.6542 3.366 5.9749c.1535.8438.2356 1.6988.2454 2.5561 0 .2014-.0526.3473-.2699.3681s-.2734-.1632-.2734-.3473c.0326-1.7341-.3267-3.4535-1.0515-5.0322-.6104-1.2972-1.5146-2.4375-2.6423-3.3319-1.1277-.8945-2.4485-1.5192-3.8596-1.8254-.7461-.1711-1.509-.2596-2.2748-.2639-.0746.0013-.149-.0081-.2208-.0278-.0612-.0171-.1133-.057-.1454-.1115-.032-.0544-.0415-.119-.0264-.1802.0005-.029.0067-.0577.0185-.0843.0117-.0266.0287-.0506.0499-.0707.0212-.02.0462-.0357.0736-.046.0274-.0104.0566-.0152.0858-.0143.1578-.0209.319-.0139.4767-.0139z" />
                                <path
                                    d="m53.0695 42.1157c-.0118-.9649-.2516-1.9135-.7002-2.7699s-1.0935-1.5968-1.883-2.1616c-.9215-.6414-1.9927-1.0394-3.1125-1.1565-.1893-.0243-.3786-.0347-.5714-.0556-.1927-.0208-.3084-.1007-.2909-.2952.0175-.1944.1402-.2639.3505-.25 3.1055.1875 5.7483 1.9274 6.5615 5.1676.1487.6248.2229 1.2647.2208 1.9067v.1736c0 .1736-.1121.2883-.2839.2848-.0381-.0013-.0755-.0102-.11-.0263s-.0653-.039-.0905-.0673c-.0253-.0282-.0445-.0613-.0564-.0972-.0119-.0358-.0163-.0737-.013-.1114-.028-.1632-.021-.3299-.021-.5417z" />
                                <path
                                    d="m47.6285 38.2467c1.7035.1146 2.8917.9412 3.2177 2.7367.0395.23.0676.4618.0841.6945 0 .1876-.0421.3473-.2488.3473-.2068 0-.2769-.1389-.284-.3473-.0019-.6882-.2159-1.3595-.6133-1.9239-.4177-.5113-1.0174-.8444-1.6755-.9308-.1471-.0272-.2957-.0458-.4451-.0555-.2454 0-.3821-.1216-.3505-.3091.0315-.1876.1787-.2223.3154-.2119z" />
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <section class="ai-nepal-top pt-5 mb-3">
            <article class="container-xxl py-5 py-lg-0">
                <div class="row align-items-center pt-5 pt-lg-0 min-vh-100">
                    <div class="col-xl-6 col-lg-6 text-white">
                        <h1 class="">Edu-Hope<br> Yearly Scholarship 2024</h1>
                        <div class="d-flex justify-content-center ps-4">
                            <img src="images/latin-illustration.svg" class="img-fluid" width="165" height="auto"
                                alt="illustration" />
                            <h2 class="">Nepal</h2>
                        </div>
                        <div class="fs-5 fw-semibold mt-3 col-lg-8">A comprehensive Full-Scholarship to help you
                            in
                            advancing your career to the next level.</div>
                        <div class="d-flex py-4 gap-4 justify-content-center justify-content-lg-start">
                            <a class="btn fill-button" role="button" aria-disabled="true" id="apply_button_top"
                                href="">Apply Now</span></a>

                        </div>

                        <div
                            class="d-flex align-items-center justify-content-center justify-content-lg-start mt-5 pt-xl-5">
                            <div class="pe-2">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M32.3086 33.3867H35.3086C35.7598 33.3867 36.0586 33.0879 36.0586 32.6367V29.6367C36.0586 29.1855 35.7598 28.8867 35.3086 28.8867H32.3086C31.8574 28.8867 31.5586 29.1855 31.5586 29.6367V32.6367C31.5586 33.0879 31.8574 33.3867 32.3086 33.3867ZM39.8086 33.3867H42.8086C43.2598 33.3867 43.5586 33.0879 43.5586 32.6367V29.6367C43.5586 29.1855 43.2598 28.8867 42.8086 28.8867H39.8086C39.3574 28.8867 39.0586 29.1855 39.0586 29.6367V32.6367C39.0586 33.0879 39.3574 33.3867 39.8086 33.3867ZM24.8086 33.3867H27.8086C28.2598 33.3867 28.5586 33.0879 28.5586 32.6367V29.6367C28.5586 29.1855 28.2598 28.8867 27.8086 28.8867H24.8086C24.3574 28.8867 24.0586 29.1855 24.0586 29.6367V32.6367C24.0586 33.0879 24.3574 33.3867 24.8086 33.3867ZM39.8086 44.0508H42.8086C43.2598 44.0508 43.5586 43.752 43.5586 43.3008V40.3008C43.5586 39.8496 43.2598 39.5508 42.8086 39.5508H39.8086C39.3574 39.5508 39.0586 39.8496 39.0586 40.3008V43.3008C39.0586 43.752 39.3574 44.0508 39.8086 44.0508ZM32.3086 44.0508H35.3086C35.7598 44.0508 36.0586 43.752 36.0586 43.3008V40.3008C36.0586 39.8496 35.7598 39.5508 35.3086 39.5508H32.3086C31.8574 39.5508 31.5586 39.8496 31.5586 40.3008V43.3008C31.5586 43.752 31.8574 44.0508 32.3086 44.0508ZM17.3086 44.0508H20.3086C20.7598 44.0508 21.0586 43.752 21.0586 43.3008V40.3008C21.0586 39.8496 20.7598 39.5508 20.3086 39.5508H17.3086C16.8574 39.5508 16.5586 39.8496 16.5586 40.3008V43.3008C16.5586 43.752 16.8574 44.0508 17.3086 44.0508ZM17.3086 33.3867H20.3086C20.7598 33.3867 21.0586 33.0879 21.0586 32.6367V29.6367C21.0586 29.1855 20.7598 28.8867 20.3086 28.8867H17.3086C16.8574 28.8867 16.5586 29.1855 16.5586 29.6367V32.6367C16.5586 33.0879 16.8574 33.3867 17.3086 33.3867ZM24.8086 44.0508H27.8086C28.2598 44.0508 28.5586 43.752 28.5586 43.3008V40.3008C28.5586 39.8496 28.2598 39.5508 27.8086 39.5508H24.8086C24.3574 39.5508 24.0586 39.8496 24.0586 40.3008V43.3008C24.0586 43.752 24.3574 44.0508 24.8086 44.0508Z"
                                        fill="white" />
                                    <path
                                        d="M47.0508 52.793H12.832C9.92578 52.793 7.55859 50.4258 7.55859 47.5195V15.2344C7.55859 12.3281 9.92578 9.96094 12.832 9.96094H47.0508C49.957 9.96094 52.3242 12.3281 52.3242 15.2344V47.5195C52.3242 50.4258 49.957 52.793 47.0508 52.793ZM12.832 13.4766C11.8652 13.4766 11.0742 14.2676 11.0742 15.2344V47.5195C11.0742 48.4863 11.8652 49.2773 12.832 49.2773H47.0508C48.0176 49.2773 48.8086 48.4863 48.8086 47.5195V15.2344C48.8086 14.2676 48.0176 13.4766 47.0508 13.4766H12.832Z"
                                        fill="white" />
                                    <path
                                        d="M10.3711 19.7461H49.5117V23.2617H10.3711V19.7461ZM20.0391 16.1719C19.0664 16.1719 18.2812 15.3867 18.2812 14.4141V9.08203C18.2812 8.10937 19.0664 7.32422 20.0391 7.32422C21.0117 7.32422 21.7969 8.10937 21.7969 9.08203V14.4141C21.7969 15.3867 21.0117 16.1719 20.0391 16.1719ZM38.9648 16.1719C37.9922 16.1719 37.207 15.3867 37.207 14.4141V9.08203C37.207 8.10937 37.9922 7.32422 38.9648 7.32422C39.9375 7.32422 40.7227 8.10937 40.7227 9.08203V14.4141C40.7227 15.3867 39.9375 16.1719 38.9648 16.1719Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="border-end border-light pe-3">
                                <div class="small">Application deadline:</div>
                                <div class="fs-4 lh-sm">March 10 2024</div>
                            </div>
                            <div class="ps-3">
                                <div class="small">Class starts on:</div>
                                <div class="fs-4 lh-sm">April 8 2024</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="wistia-container">
                            <script src="https://fast.wistia.com/embed/medias/6tryb3sph8.jsonp" async></script>
                            <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                            <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                <div class="wistia_responsive_wrapper"
                                    style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                    <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/j-Qb3HpJ_GQ?ab_channel=HeraldCollegeKathmandu"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>


                        <div class="my-4 program__info d-xl-flex justify-content-between">
                            <div class="info">
                                <img src="/images/12.png" class="img-fluid" width="147" height="auto"
                                    alt="AI Fellowship" />
                                <ul class="">
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="9.5" fill="#00C95E" stroke="white" />
                                            <path
                                                d="M5.76923 9.61538L8.32076 12.5314C8.39694 12.6185 8.53089 12.6229 8.6127 12.5411L14.2308 6.92307"
                                                stroke="white" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <span class="ms-2">Full scholarship</span>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="9.5" fill="#00C95E" stroke="white" />
                                            <path
                                                d="M5.76923 9.61538L8.32076 12.5314C8.39694 12.6185 8.53089 12.6229 8.6127 12.5411L14.2308 6.92307"
                                                stroke="white" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <span class="ms-2">Job placement opportunities</span>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="9.5" fill="#00C95E" stroke="white" />
                                            <path
                                                d="M5.76923 9.61538L8.32076 12.5314C8.39694 12.6185 8.53089 12.6229 8.6127 12.5411L14.2308 6.92307"
                                                stroke="white" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <span class="ms-2"> Certification and Reviews</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="country">
                                <div class="display-4 text-primary fw-bold">100+</div>
                                <span class="fw-bold">Qualified Students who got selected</span> on different colleges
                                and courses
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section role="sections" id="sections-nav" class="programs-sticky-top d-none d-lg-block">
            <div class="container-xxl mt-1">
                <nav
                    class="sections-nav fellowship-nepal d-flex bg-white justify-content-between align-items-center gap-2 py-2 rounded-2">
                    <a class="h6 ai-section-titles" href="#section-about">About</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-course">Scholorship overview</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-syllabus">Courses</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-benefit">Colleges</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-journey">Schlorship journey</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-prerequisites">Prerequisites</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-whychooseus">Why this scholarship</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-team">Leaders</a>
                    <div class="vr opacity-25"></div>
                    <a class="h6 ai-section-titles" href="#section-faqs">FAQs</a>
                    <div class="vr opacity-25"></div>
                    <a class="btn fill-button text-white py-2 lh-sm"
                        style="background: linear-gradient(#595bd4, #595bd4);" role="button" aria-disabled="true"
                        id="apply_button_tab-menu" href="{{ route('register') }}">Get Started</span></a>
                </nav>
            </div>
        </section>

        <section id="section-about" class="ai-fellowship--program py-5 overflow-visible">
            <article class="container-xxl">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="text-primary fs-4 fw-bold mb-4">Hear what our fellows have to say about the program
                        </div>
                        <div class="wistia-container">
                            <script src="https://fast.wistia.com/embed/medias/6tryb3sph8.jsonp" async></script>
                            <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                            <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                <div class="wistia_responsive_wrapper"
                                    style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                    <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/Jis-X7nOdWM?ab_channel=IslingtonCollege"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="ms-lg-5 ps-lg-5">
                            <h2 class="text-primary fw-bold">About Scholorship Program</h2>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 text-center">
                        <div class="fs-2 fw-bold">Post-Scholorship outcomes</div>
                        <div class="">
                            <div class="company--logo owl-carousel">
                                <div class="item">
                                    <svg width="156" height="105" viewBox="0 0 156 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M93.8822 41.4592C93.6328 41.6528 89.2304 44.1341 89.2304 49.6516C89.2304 56.0334 94.8323 58.2911 95 58.347C94.9742 58.4846 94.1101 61.439 92.0464 64.4493C90.2064 67.0984 88.2846 69.7432 85.3611 69.7432C82.4377 69.7432 81.6853 68.0445 78.3104 68.0445C75.0215 68.0445 73.8521 69.7991 71.178 69.7991C68.5039 69.7991 66.638 67.3478 64.4927 64.3375C62.0077 60.8026 60 55.3109 60 50.0988C60 41.7388 65.4342 37.305 70.7825 37.305C73.6242 37.305 75.9931 39.1714 77.7773 39.1714C79.4755 39.1714 82.1238 37.1932 85.3568 37.1932C86.5821 37.1932 90.9845 37.305 93.8822 41.4592ZM83.822 33.654C85.1591 32.0671 86.1049 29.8653 86.1049 27.6635C86.1049 27.3581 86.0791 27.0485 86.0232 26.7991C83.8478 26.8808 81.2597 28.2483 79.6991 30.0588C78.4738 31.4521 77.3302 33.654 77.3302 35.8859C77.3302 36.2213 77.3861 36.5567 77.4119 36.6643C77.5494 36.6901 77.773 36.7202 77.9966 36.7202C79.9484 36.7202 82.4033 35.4128 83.822 33.654Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="157" height="105" viewBox="0 0 157 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3333_7542)">
                                            <path
                                                d="M49.9938 47.2087H36.9333V51.0674H46.1836C45.7291 56.4948 41.1958 58.7847 36.9333 58.7847C31.4605 58.7847 26.7153 54.5034 26.7153 48.503C26.7153 42.5025 31.2508 38.1624 36.9333 38.1624C41.3159 38.1624 43.918 40.9665 43.918 40.9665L46.638 38.1624C46.638 38.1624 43.1621 34.3037 36.8132 34.3037C28.7405 34.3037 22.4834 41.1168 22.4834 48.4441C22.4834 55.7714 28.3779 62.6739 37.0251 62.6739C44.6433 62.6739 50.2057 57.4578 50.2057 49.7688C50.2057 48.1413 49.9938 47.2066 49.9938 47.2066V47.2087Z"
                                                fill="#4285F4" />
                                            <path
                                                d="M60.6663 44.4046C55.3158 44.4046 51.475 48.5944 51.475 53.4488C51.475 58.3032 55.1935 62.6455 60.7253 62.6455C65.7436 62.6455 69.8248 58.8174 69.8248 53.5708C69.8553 47.5116 65.0773 44.4046 60.6641 44.4046H60.6663ZM60.7275 47.9931C63.3579 47.9931 65.866 50.1043 65.866 53.5403C65.866 56.9763 63.3863 59.0875 60.7275 59.0875C57.7955 59.0875 55.4972 56.7649 55.4972 53.5403C55.4972 50.3157 57.7649 47.9931 60.7275 47.9931Z"
                                                fill="#EA4335" />
                                            <path
                                                d="M80.6808 44.4046C75.3304 44.4046 71.4896 48.5944 71.4896 53.4488C71.4896 58.3032 75.208 62.6455 80.7398 62.6455C85.7582 62.6455 89.8393 58.8174 89.8393 53.5708C89.8393 47.5116 85.0634 44.4046 80.6786 44.4046H80.6808ZM80.742 47.9931C83.3724 47.9931 85.8805 50.1043 85.8805 53.5403C85.8805 56.9763 83.4008 59.0875 80.742 59.0875C77.81 59.0875 75.5117 56.7649 75.5117 53.5403C75.4811 50.344 77.7795 47.9931 80.742 47.9931Z"
                                                fill="#FBBC05" />
                                            <path
                                                d="M100.271 44.4046C95.3426 44.4046 91.504 48.6859 91.504 53.5098C91.504 58.996 95.9784 62.6455 100.21 62.6455C102.81 62.6455 104.202 61.6215 105.229 60.4144V62.2228C105.229 65.3581 103.324 67.258 100.422 67.258C97.5208 67.258 96.2209 65.1773 95.7359 64.0029L92.2294 65.4801C93.4681 68.1034 95.9784 70.8465 100.453 70.8465C105.351 70.8465 109.069 67.7722 109.069 61.3491V44.9471H105.231V46.4854C104.051 45.25 102.419 44.4046 100.274 44.4046H100.271ZM100.634 47.9931C103.053 47.9931 105.532 50.0433 105.532 53.5403C105.532 57.0373 103.053 59.057 100.604 59.057C97.9731 59.057 95.5545 56.9458 95.5545 53.5708C95.524 50.0738 98.0648 47.9931 100.634 47.9931Z"
                                                fill="#4285F4" />
                                            <path
                                                d="M126.089 44.4046C121.463 44.4046 117.564 48.0824 117.564 53.5098C117.564 59.2684 121.918 62.676 126.543 62.676C130.412 62.676 132.8 60.5648 134.192 58.667L131.017 56.5558C130.2 57.8217 128.811 59.0592 126.543 59.0592C123.974 59.0592 122.794 57.643 122.069 56.2856L134.343 51.2199L133.707 49.7427C132.527 46.8187 129.746 44.4068 126.089 44.4068V44.4046ZM126.27 47.9016C127.933 47.9016 129.143 48.7753 129.656 49.8603L121.463 53.268C121.101 50.6142 123.609 47.9016 126.27 47.9016Z"
                                                fill="#EA4335" />
                                            <path d="M115.748 35.2384H111.728V62.1313H115.748V35.2384Z"
                                                fill="#34A853" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3333_7542">
                                                <rect width="111.859" height="36.5407" fill="white"
                                                    transform="translate(22.4834 34.3037)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="157" height="105" viewBox="0 0 157 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3333_7551)">
                                            <path d="M113.319 40.7388H101.77L102.488 38.7778H113.319V40.7388Z"
                                                fill="#4C83C3" />
                                            <path d="M82.5419 38.7778H93.2622L93.965 40.7461H82.5493V38.7778H82.5419Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M74.0337 38.7778C75.802 38.9455 77.3334 39.5651 78.6429 40.7388H59.2147V38.7778H74.0337Z"
                                                fill="#4C83C3" />
                                            <path d="M57.4613 38.7778H43.9666V40.7388H57.4613V38.7778Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M113.319 44.4202H100.453C100.453 44.4202 101.156 42.4665 101.149 42.4665H113.319V44.4202Z"
                                                fill="#4C83C3" />
                                            <path d="M95.2893 44.4202H82.5419V42.4665H94.5939L95.2893 44.4202Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M80.1522 42.4665C80.4112 43.108 80.7145 43.662 80.7145 44.4202H59.2147V42.4665H80.1522Z"
                                                fill="#4C83C3" />
                                            <path d="M57.4613 42.4665H43.9666V44.4202H57.4613V42.4665Z"
                                                fill="#4C83C3" />
                                            <path d="M99.1365 48.1087L99.8394 46.1478H109.502V48.1014L99.1365 48.1087Z"
                                                fill="#4C83C3" />
                                            <path d="M95.9108 46.1478L96.6137 48.1087H86.3447V46.1478H95.9108Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M80.8846 46.1478C80.8846 46.8184 80.7958 47.5183 80.6035 48.1087H74.7144V46.1478H80.8846Z"
                                                fill="#4C83C3" />
                                            <path d="M53.5327 46.1552H47.7324V48.1088H53.5327V46.1552Z"
                                                fill="#4C83C3" />
                                            <path d="M68.914 46.1478H63.121V48.1087H68.914V46.1478Z" fill="#4C83C3" />
                                            <path
                                                d="M92.0488 50.2228V51.71H86.3447V49.7563H97.2129L97.8862 51.5787L98.5372 49.7563H109.494V51.71H103.82V50.2228L103.294 51.71H92.5741L92.0488 50.2228Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M63.121 49.7635H79.7453C79.3827 50.4196 78.7243 51.2142 78.0954 51.7172H63.121C63.121 51.7172 63.121 49.7708 63.121 49.7635Z"
                                                fill="#4C83C3" />
                                            <path d="M53.5327 49.7635H47.7324V51.7172H53.5327V49.7635Z"
                                                fill="#4C83C3" />
                                            <path d="M109.494 53.4449H103.82V55.3986H109.494V53.4449Z" fill="#4C83C3" />
                                            <path d="M92.0488 53.4449H86.3447V55.3986H92.0488V53.4449Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M102.673 53.4449C102.673 53.4449 102.007 55.3986 101.985 55.3986H93.8985L93.1882 53.4449H102.68H102.673Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M63.121 53.4376H78.0658C78.7465 53.9989 79.3679 54.6915 79.8488 55.3913C79.8784 55.3913 63.121 55.3913 63.121 55.3913V53.4376Z"
                                                fill="#4C83C3" />
                                            <path d="M53.5327 55.3913V53.4376H47.7397V55.3913H53.5327Z"
                                                fill="#4C83C3" />
                                            <path d="M109.494 57.119H103.82V59.0727H109.494V57.119Z" fill="#4C83C3" />
                                            <path d="M92.0488 57.119H86.3447V59.0727H92.0488V57.119Z" fill="#4C83C3" />
                                            <path
                                                d="M100.653 59.08C100.653 59.08 101.356 57.119 101.363 57.119H94.4903L95.1931 59.0727C95.1931 59.0727 100.653 59.0873 100.653 59.08Z"
                                                fill="#4C83C3" />
                                            <path d="M63.121 59.0727V57.119H68.9954V59.0727H63.121Z" fill="#4C83C3" />
                                            <path
                                                d="M80.6774 57.119C80.9585 57.7095 80.9881 58.4093 81.0473 59.08H74.8179V57.119H80.6774Z"
                                                fill="#4C83C3" />
                                            <path d="M53.5327 57.119H47.7397V59.0727H53.5327V57.119Z" fill="#4C83C3" />
                                            <path d="M113.312 60.7275H103.82V62.6811H113.312V60.7275Z" fill="#4C83C3" />
                                            <path d="M92.0488 60.7275H82.5419V62.6811H92.0488V60.7275Z"
                                                fill="#4C83C3" />
                                            <path d="M99.3806 62.6811H96.4804L95.785 60.7275H100.046L99.3806 62.6811Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M43.9666 60.7275V62.6811H57.4539V60.7275C57.4539 60.7275 43.9518 60.7275 43.9666 60.7275Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M80.7959 60.7275C80.6553 61.369 80.5221 62.1563 80.0486 62.6811H79.8711H59.2147V60.7275H80.7959Z"
                                                fill="#4C83C3" />
                                            <path d="M98.0638 66.3625H97.7974L97.1168 64.4088H98.7592L98.0638 66.3625Z"
                                                fill="#4C83C3" />
                                            <path d="M113.312 64.4088H103.82V66.3698H113.312V64.4088Z" fill="#4C83C3" />
                                            <path
                                                d="M59.2147 66.3625V64.4088C59.2147 64.4088 78.7021 64.4088 78.7539 64.4088C77.4444 65.6408 75.654 66.3406 73.7156 66.3625H59.2147Z"
                                                fill="#4C83C3" />
                                            <path d="M92.0488 64.4088H82.5419V66.3698H92.0488V64.4088Z"
                                                fill="#4C83C3" />
                                            <path
                                                d="M57.4539 64.4161V66.3625C57.4539 66.3625 43.974 66.3698 43.9666 66.3625V64.4088C43.9666 64.4088 57.4465 64.4234 57.4539 64.4088V64.4161Z"
                                                fill="#4C83C3" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3333_7551">
                                                <rect width="69.3527" height="27.5919" fill="white"
                                                    transform="translate(43.9666 38.7778)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="157" height="105" viewBox="0 0 157 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3333_7591)">
                                            <path
                                                d="M44.8435 39.5359C44.381 39.5371 43.7792 39.6761 42.9876 39.9473C39.647 41.0914 36.6656 43.0065 33.9403 45.7571L32.041 47.98L32.7732 49.0193C34.0282 50.7761 35.3412 53.7529 35.9558 56.258C36.333 57.6961 36.4809 58.585 36.5428 60.0688C36.5533 60.3182 36.5658 60.5812 36.5719 60.8699C36.5787 61.1562 36.5837 61.465 36.5866 61.8009C36.6002 63.5791 36.6221 65.6116 36.4343 65.6116H45.3875L45.8951 65.0991C46.2108 64.6503 46.2577 63.0655 46.2577 52.4759C46.2577 41.5286 46.2204 40.3213 45.8737 39.9397C45.6291 39.6716 45.3063 39.5348 44.8435 39.5359Z"
                                                fill="#A4CE4E" />
                                            <path
                                                d="M19.1949 39.5359C18.7456 39.5284 18.4187 39.6491 18.1435 39.8967C17.7429 40.2577 17.7232 40.9526 17.7232 52.433C17.7232 63.0587 17.7698 64.6503 18.0858 65.0993L18.4484 65.6118H27.3508C34.2236 65.6118 36.2952 65.5459 36.4344 65.3231C36.5334 65.1645 36.6005 63.5794 36.5865 61.801C36.5657 59.1137 36.4593 58.1779 35.9558 56.2583C34.854 52.0582 32.7785 48.2719 29.7898 45.4499C27.1905 42.9953 24.1988 41.0454 20.9928 39.9472C20.2181 39.6823 19.6439 39.5437 19.1948 39.5362L19.1949 39.5359Z"
                                                fill="#0192D5" />
                                            <path
                                                d="M32.0415 47.9796L31.4757 48.6586C30.4709 49.8778 28.6378 53.9201 28.0249 56.2656C27.5239 58.1831 27.4192 59.117 27.4016 61.8156C27.3897 63.5993 27.3579 65.6121 27.5392 65.6121H36.4344C36.622 65.6121 36.6004 63.5797 36.5865 61.8013C36.5657 59.114 36.4285 58.186 35.9558 56.2586C35.3413 53.7532 34.0312 50.7784 32.7761 49.0216L32.0415 47.9796Z"
                                                fill="#0065A5" />
                                            <path
                                                d="M125.32 43.6788C124.069 43.6808 122.849 44.1154 121.978 44.8767C120.941 45.7834 120.561 46.5301 120.361 48.0234L120.202 49.2142H118.404V52.2166H120.26V56.6841C120.26 59.1398 120.327 61.2184 120.412 61.3032C120.497 61.3879 121.333 61.4548 122.268 61.4548H123.972V52.2165H126.756V49.2142H123.972V48.4493C123.972 47.3246 124.829 46.5957 125.987 46.7315C126.474 46.7885 127.037 46.9082 127.241 46.9985C127.516 47.12 127.799 46.8728 128.336 46.0529L129.068 44.9414L128.546 44.5515C127.937 44.0908 126.401 43.677 125.32 43.6788ZM114.425 43.7002C112.611 43.794 111.706 46.5137 113.497 47.4821C114.401 47.9713 115.032 47.8994 115.831 47.2294C116.404 46.7492 116.549 46.4534 116.549 45.7282C116.549 44.7088 115.998 44.0116 115.012 43.7651C114.806 43.7142 114.612 43.6908 114.425 43.7002ZM72.2396 44.119L70.3547 44.1838L68.477 44.2488L66.3966 48.0595C65.2526 50.1553 64.2419 51.943 64.1564 52.0291C64.0708 52.115 63.0123 50.375 61.8002 48.1606L59.5964 44.1335L57.7405 44.1912L55.8846 44.2489L55.6164 50.1383C55.4703 53.3773 55.2837 57.2488 55.2033 58.7413L55.0583 61.4549H58.712L58.8642 58.5102C58.9473 56.8906 59.0299 54.6822 59.0454 53.6025C59.0995 49.8739 59.1204 49.8759 61.2131 53.5737L63.0617 56.8359H65.0118L66.8316 53.4293L68.6441 50.0228L68.818 54.0644C68.9134 56.2873 69.0547 58.8597 69.1299 59.7805L69.2604 61.4551H72.9359L72.9287 60.3581C72.9259 59.7548 72.7738 56.1952 72.588 52.4479C72.4021 48.7008 72.2502 45.2953 72.2472 44.8772L72.2396 44.119ZM99.6137 44.1336V52.6424C99.6137 57.3211 99.6807 61.2185 99.7659 61.3032C99.851 61.3879 102.409 61.4548 105.449 61.4548H110.981V58.2213H103.557V44.1332H99.6137V44.1336ZM89.8704 45.9666V49.1927L88.8844 49.2576L87.8985 49.3299V52.1014L88.8844 52.1737L89.8704 52.246L89.8776 55.2917C89.891 59.3336 90.2946 60.4657 92.0306 61.3179C93.2315 61.9075 95.6895 61.8045 97.069 61.1085L98.2146 60.5312L97.5187 59.4052L96.8227 58.2793L95.815 58.6475C94.8789 58.9826 94.7539 58.9784 94.1911 58.6115C93.5857 58.2162 93.582 58.1994 93.582 55.2191V52.2169H96.5979V49.2145H93.6038L93.5312 47.6556L93.4657 46.0966L91.6679 46.0317L89.8701 45.9666H89.8704ZM80.8084 48.9328C78.2846 48.9486 76.2923 50.2148 75.2771 52.4477C74.5788 53.9834 74.6077 56.7878 75.3423 58.3585C75.9633 59.6861 77.2331 60.8304 78.6119 61.3178C80.6766 62.0475 84.321 61.6378 85.9775 60.4876L86.6082 60.0546L85.9049 58.9216L85.2091 57.7957L84.0058 58.3513C82.7234 58.9456 81.0698 59.0884 80.0184 58.6907C79.2364 58.3945 78.2714 57.3544 78.2714 56.807C78.2714 56.4053 78.5389 56.374 82.5631 56.374H86.8548V55.2624C86.8546 51.4794 84.3976 48.9104 80.8084 48.9328ZM80.8373 51.7403C81.5528 51.7288 82.2235 51.9653 82.6932 52.4332C83.0662 52.8046 83.3748 53.3242 83.3748 53.588C83.3748 54.0446 83.2517 54.0644 80.8229 54.0644C79.1958 54.0644 78.2711 53.9808 78.2711 53.8263C78.2711 53.2808 78.9701 52.2948 79.5399 52.0365C79.9623 51.8448 80.4082 51.7472 80.8375 51.7403H80.8373ZM134.013 48.9473C130.395 48.9473 127.996 51.1587 127.742 54.7356C127.531 57.6987 128.617 59.8038 130.968 60.9856C132.373 61.6921 132.543 61.7206 134.651 61.6424C136.498 61.5739 137.081 61.4528 138.188 60.9135C138.918 60.5581 139.515 60.1908 139.515 60.0981C139.515 60.0053 139.205 59.444 138.826 58.8496L138.138 57.7671L137.311 58.2578C136.206 58.9067 133.821 59.1056 132.889 58.6258C132.064 58.2011 131.507 57.5916 131.294 56.8936L131.134 56.374H140.022L139.863 55.1612C139.317 50.9238 137.457 48.9474 134.013 48.9474L134.013 48.9473ZM133.831 51.755C134.642 51.755 135.016 51.893 135.55 52.3901C135.924 52.7395 136.301 53.2589 136.383 53.5447C136.533 54.0623 136.52 54.0644 133.831 54.0644C131.143 54.0644 131.13 54.0623 131.28 53.5448C131.362 53.2591 131.738 52.7395 132.113 52.3901C132.647 51.893 133.02 51.755 133.831 51.755ZM116.317 49.1999L114.519 49.2648L112.721 49.3297L112.656 55.1034C112.622 58.2767 112.644 61.0048 112.706 61.166C112.784 61.3667 113.373 61.4546 114.57 61.4546H116.317V49.1999Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3333_7591">
                                                <rect width="122.299" height="26.1005" fill="white"
                                                    transform="translate(17.7232 39.5236)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="157" height="105" viewBox="0 0 157 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g clip-path="url(#clip0_3333_7599)">
                                            <path
                                                d="M65.1963 44.9558H68.9536L75.3426 56.7714L81.7316 44.9558H85.4079V64.3704H82.3427V49.4913L76.7396 59.7934H73.8645L68.2615 49.4913V64.3704H65.1963V44.9558Z"
                                                fill="#1C2B33" />
                                            <path
                                                d="M95.2956 64.715C93.989 64.7425 92.6991 64.4104 91.5611 63.7535C90.4951 63.1215 89.6238 62.1967 89.0461 61.084C88.4283 59.8787 88.1179 58.5336 88.1435 57.1731C88.1162 55.8 88.4191 54.441 89.0258 53.2156C89.5826 52.1042 90.4305 51.1728 91.4749 50.5254C92.5641 49.8655 93.8117 49.5289 95.0776 49.5535C96.2882 49.5048 97.4846 49.8344 98.5074 50.4984C99.5302 51.1623 100.331 52.1292 100.802 53.27C101.352 54.5733 101.62 55.9824 101.588 57.4012V58.2616H91.1935C91.3184 59.3322 91.8075 60.3239 92.5752 61.0633C93.3582 61.7567 94.3694 62.1207 95.4046 62.0818C96.2105 62.101 97.0123 61.9593 97.765 61.6646C98.4562 61.3662 99.0865 60.9381 99.6234 60.4024L101.251 62.4395C99.6319 63.9565 97.6467 64.7141 95.2956 64.7124M97.5343 53.1974C97.2031 52.8592 96.8066 52.5951 96.3701 52.422C95.9336 52.2489 95.4667 52.1705 94.999 52.1918C94.5299 52.1815 94.0636 52.268 93.628 52.4461C93.1924 52.6242 92.7964 52.8903 92.4637 53.2285C91.7485 53.9793 91.2935 54.9487 91.1681 55.9887H98.6296C98.5383 54.8052 98.1724 53.8782 97.5318 53.2078"
                                                fill="#1C2B33" />
                                            <path
                                                d="M105.295 52.4718H102.463V49.906H105.285V45.6633H108.241V49.906H112.528V52.4718H108.251V58.9744C108.251 60.056 108.432 60.8275 108.794 61.2888C109.155 61.7501 109.775 61.9816 110.652 61.9834C110.983 61.9863 111.314 61.9698 111.643 61.9341C111.916 61.9013 112.214 61.8572 112.538 61.8019V64.3392C112.167 64.4523 111.788 64.5389 111.405 64.5984C110.967 64.6639 110.524 64.696 110.082 64.6943C106.889 64.6943 105.292 62.9103 105.292 59.3424L105.295 52.4718Z"
                                                fill="#1C2B33" />
                                            <path
                                                d="M127.948 64.36H125.045V62.3359C124.544 63.0809 123.868 63.6844 123.078 64.0905C122.234 64.5127 121.304 64.7241 120.365 64.7073C119.189 64.7285 118.033 64.3881 117.049 63.7302C116.065 63.0599 115.277 62.1304 114.767 61.04C114.198 59.8178 113.915 58.4771 113.94 57.1239C113.919 55.771 114.21 54.432 114.79 53.2156C115.312 52.1226 116.117 51.1967 117.117 50.5384C118.138 49.8818 119.324 49.5441 120.53 49.5665C121.429 49.5514 122.32 49.7483 123.133 50.1418C123.892 50.5172 124.548 51.077 125.045 51.772V49.9138H127.948V64.36ZM124.992 54.9598C124.7 54.1684 124.177 53.488 123.494 53.0109C122.795 52.5293 121.968 52.2796 121.126 52.2956C119.86 52.2956 118.851 52.7275 118.101 53.5914C117.35 54.4553 116.975 55.6294 116.975 57.1135C116.975 58.6012 117.337 59.7796 118.06 60.6486C118.784 61.5177 119.765 61.9497 121.004 61.9445C121.87 61.9587 122.72 61.7078 123.445 61.224C124.147 60.7589 124.688 60.0798 124.992 59.2828V54.9598Z"
                                                fill="#1C2B33" />
                                            <mask id="mask0_3333_7599" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="28" y="44" width="31" height="21">
                                                <path
                                                    d="M32.0596 57.7511C32.0596 52.7517 34.4986 47.6434 37.4066 47.6434C38.981 47.6434 40.2969 48.5738 42.3125 51.531C40.3983 54.5322 39.2397 56.4138 39.2397 56.4138C36.6917 60.4983 35.8094 61.4132 34.3896 61.4132C32.9292 61.4132 32.0622 60.1018 32.0622 57.764M48.8612 55.898L47.0865 52.8916C46.6098 52.0986 46.1518 51.3686 45.7123 50.7016C47.302 48.1954 48.6102 46.9462 50.1694 46.9462C53.407 46.9462 56.0007 51.8187 56.0007 57.8055C56.0007 60.0862 55.2705 61.4106 53.7544 61.4106C52.3016 61.4106 51.6095 60.4309 48.8511 55.8954M44.2418 48.6205C41.8434 45.5104 39.8405 44.3105 37.4396 44.3105C32.5489 44.3105 28.8017 50.8183 28.8017 57.7044C28.8017 62.0145 30.83 64.7332 34.2577 64.7332C36.717 64.7332 38.4841 63.5488 41.6279 57.9299L43.8413 53.9335C44.1573 54.4518 44.4903 55.0134 44.8402 55.6181L46.3132 58.1528C49.1857 63.0771 50.7855 64.7306 53.6834 64.7306C57.0123 64.7306 58.863 61.9756 58.863 57.5749C58.863 50.3647 55.0296 44.3079 50.3748 44.3079C47.9105 44.3079 45.9836 46.205 44.2393 48.6179"
                                                    fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_3333_7599)">
                                                <mask id="mask1_3333_7599" style="mask-type:luminance"
                                                    maskUnits="userSpaceOnUse" x="28" y="44" width="31" height="21">
                                                    <path d="M58.8706 44.3H28.8067V64.7228H58.8706V44.3Z"
                                                        fill="white" />
                                                </mask>
                                                <g mask="url(#mask1_3333_7599)">
                                                    <rect x="28.7662" y="44.2275" width="30.1805" height="20.6508"
                                                        fill="url(#pattern0)" />
                                                </g>
                                            </g>
                                            <mask id="mask2_3333_7599" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="37" y="44" width="11" height="12">
                                                <path
                                                    d="M37.4041 47.6382C39.554 47.6382 41.2197 49.3695 44.8452 55.6103L45.0658 55.9913L47.0941 52.8813C43.2733 46.529 40.7279 44.3027 37.4446 44.3027L37.4041 47.6382Z"
                                                    fill="white" />
                                            </mask>
                                            <g mask="url(#mask2_3333_7599)">
                                                <path
                                                    d="M43.5293 39.5209L31.8901 48.6013L40.9713 60.7651L52.6104 51.6848L43.5293 39.5209Z"
                                                    fill="url(#paint0_linear_3333_7599)" />
                                            </g>
                                        </g>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                height="1">
                                                <use xlink:href="#image0_3333_7599"
                                                    transform="scale(0.00403226 0.00598802)" />
                                            </pattern>
                                            <linearGradient id="paint0_linear_3333_7599" x1="46.2881" y1="54.568"
                                                x2="37.6056" y2="43.4387" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0869E1" />
                                                <stop offset="0.13" stop-color="#0869E1" />
                                                <stop offset="0.87" stop-color="#0064E0" />
                                                <stop offset="1" stop-color="#0064E0" />
                                            </linearGradient>
                                            <clipPath id="clip0_3333_7599">
                                                <rect width="99.1818" height="25.3548" fill="white"
                                                    transform="translate(28.7662 39.5236)" />
                                            </clipPath>
                                            <image id="image0_3333_7599" width="248" height="167"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="157" height="105" viewBox="0 0 157 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3333_7620)">
                                            <path
                                                d="M16.6918 38.7778H29.1915C29.1907 43.0349 29.1915 47.2919 29.1907 51.549H16.6918V38.7778Z"
                                                fill="#F25022" />
                                            <path
                                                d="M30.4677 38.7778H42.9674C42.9674 43.0349 42.9682 47.2919 42.9674 51.549C38.8016 51.549 34.635 51.549 30.4692 51.549C30.4677 47.2919 30.4685 43.0349 30.4685 38.7778H30.4677Z"
                                                fill="#80BA01" />
                                            <path
                                                d="M129.411 43.6439C130.563 42.8777 132.052 42.8063 133.35 43.1714C133.362 43.9599 133.352 44.7492 133.356 45.5385C132.739 45.2608 132.013 45.0798 131.363 45.3521C130.848 45.5607 130.542 46.1007 130.462 46.6407C130.365 47.3257 130.428 48.0199 130.411 48.7087C131.73 48.7117 133.048 48.7087 134.366 48.7102C134.376 47.8358 134.356 46.9606 134.377 46.0862C135.274 45.8254 136.16 45.5331 137.052 45.2585C137.06 46.4106 137.042 47.5635 137.062 48.7163C137.953 48.7033 138.845 48.7133 139.737 48.7102V50.953C138.842 50.9154 137.946 50.943 137.052 50.94C137.055 52.2293 137.052 53.5187 137.053 54.8089C137.067 55.523 137.015 56.2409 137.097 56.9527C137.147 57.3723 137.296 57.8371 137.681 58.0542C138.326 58.4231 139.145 58.2621 139.737 57.8571V60.1221C138.964 60.465 138.101 60.5693 137.265 60.5087C136.473 60.4489 135.651 60.1543 135.134 59.51C134.537 58.7821 134.383 57.7965 134.371 56.8745C134.364 54.8956 134.371 52.9166 134.368 50.9369C133.049 50.9361 131.73 50.9354 130.411 50.9369C130.41 54.0426 130.411 57.1483 130.411 60.2541H127.707C127.707 57.1491 127.703 54.0449 127.709 50.94C127.082 50.9277 126.454 50.943 125.827 50.93C125.83 50.1929 125.833 49.455 125.826 48.7171C126.45 48.7025 127.074 48.7087 127.7 48.7133C127.745 47.733 127.599 46.7243 127.886 45.7694C128.128 44.9072 128.667 44.1295 129.411 43.6432V43.6439Z"
                                                fill="#777777" />
                                            <path
                                                d="M71.5306 43.805C72.0756 43.7206 72.6657 43.9108 73.0268 44.3465C73.4502 44.8236 73.5283 45.5829 73.2145 46.1406C72.8676 46.7695 72.0914 47.0618 71.4149 46.9107C70.713 46.7818 70.1282 46.1153 70.1597 45.372C70.1394 44.5896 70.7798 43.8924 71.5306 43.805Z"
                                                fill="#777777" />
                                            <path
                                                d="M50.8126 44.1471H54.7442C55.9679 47.3218 57.2006 50.4935 58.4258 53.6683C58.7388 54.4621 59.0316 55.2652 59.3597 56.053C60.934 52.0859 62.5308 48.1287 64.0931 44.1563C65.3535 44.1356 66.6148 44.1517 67.876 44.1486C67.873 49.5171 67.8745 54.8856 67.876 60.254C66.9661 60.2517 66.057 60.2617 65.1478 60.2487C65.1576 56.2869 65.1471 52.3252 65.1523 48.3627C65.1538 48.1847 65.1478 48.0068 65.1358 47.8288C65.0825 47.9117 65.0352 47.9976 64.9939 48.0866C63.4317 52.1419 61.8393 56.1857 60.2861 60.2448C59.639 60.2686 58.9911 60.2464 58.3432 60.2571C56.7314 56.2018 55.1398 52.1373 53.5362 48.0789C53.4942 47.9945 53.4492 47.9124 53.4004 47.8334C53.3673 49.5692 53.3951 51.3066 53.3861 53.0424C53.3868 55.4463 53.3846 57.8501 53.3868 60.254C52.5288 60.2563 51.6707 60.254 50.8133 60.2548C50.8133 54.8856 50.8118 49.5163 50.8133 44.1471H50.8126Z"
                                                fill="#777777" />
                                            <path
                                                d="M78.9703 48.6994C80.2751 48.3198 81.682 48.3351 82.986 48.7117C83.2547 48.7884 83.5153 48.895 83.757 49.04C83.742 49.9198 83.757 50.8004 83.7487 51.6809C82.8771 51.0005 81.7713 50.5695 80.6632 50.7121C79.7834 50.7934 78.944 51.2598 78.4178 51.9862C77.7414 52.8867 77.5852 54.0825 77.7016 55.184C77.7887 56.0461 78.1377 56.9075 78.7939 57.4789C79.4756 58.0979 80.4312 58.3173 81.3231 58.2483C82.2045 58.1447 83.0363 57.7635 83.7487 57.2312C83.7562 58.0649 83.745 58.8987 83.7547 59.7325C82.6497 60.4044 81.3246 60.5777 80.0596 60.5141C78.7654 60.4443 77.4749 59.9434 76.5379 59.0138C75.5199 58.0112 74.9674 56.5815 74.9021 55.1494C74.836 53.6606 75.1326 52.1074 75.9711 50.864C76.6738 49.8032 77.7729 49.0523 78.9703 48.6994Z"
                                                fill="#777777" />
                                            <path
                                                d="M108.5 48.5238C109.75 48.2991 111.059 48.464 112.242 48.9219C112.244 49.7687 112.242 50.6147 112.243 51.4608C111.416 50.8801 110.407 50.568 109.404 50.604C108.898 50.6239 108.343 50.8425 108.112 51.3335C107.929 51.819 108.056 52.4556 108.504 52.7463C109.271 53.2702 110.185 53.4927 110.979 53.9621C111.605 54.3211 112.211 54.7905 112.528 55.467C113.123 56.7341 112.871 58.4086 111.825 59.3536C110.825 60.3078 109.386 60.5716 108.063 60.521C107.123 60.4589 106.178 60.2694 105.314 59.8767C105.318 58.9862 105.309 58.0964 105.319 57.2066C106.046 57.7459 106.884 58.1317 107.771 58.2882C108.389 58.3909 109.061 58.3955 109.637 58.1133C110.188 57.8333 110.287 57.0333 109.96 56.5439C109.654 56.1665 109.204 55.9587 108.78 55.7546C107.983 55.3888 107.146 55.0827 106.446 54.5343C105.955 54.1423 105.582 53.5901 105.437 52.9672C105.22 52.0491 105.288 51.0144 105.811 50.212C106.407 49.277 107.444 48.7163 108.5 48.5238Z"
                                                fill="#777777" />
                                            <path
                                                d="M89.8019 48.8874C90.5481 48.4294 91.4963 48.3911 92.3108 48.6711C92.3071 49.5923 92.3108 50.5135 92.3086 51.4347C91.7756 51.0819 91.1104 50.9307 90.4813 50.9959C89.7141 51.0849 89.106 51.687 88.7907 52.3774C88.4483 53.1084 88.3838 53.9352 88.4055 54.7345C88.4055 56.5746 88.4063 58.4147 88.4055 60.2548H85.7404C85.7382 56.4089 85.7434 52.5622 85.7382 48.7163C86.6278 48.7048 87.5174 48.7094 88.407 48.714C88.4033 49.3744 88.407 50.0349 88.4048 50.696C88.6938 49.9773 89.124 49.2793 89.8019 48.8874Z"
                                                fill="#777777" />
                                            <path
                                                d="M70.4052 48.714C71.3016 48.7101 72.1987 48.7009 73.0951 48.7186C73.0846 52.5637 73.0943 56.4096 73.0906 60.2548H70.4067C70.4044 56.4081 70.4067 52.5614 70.4052 48.714Z"
                                                fill="#777777" />
                                            <path
                                                d="M103.517 51.4055C103.048 50.3393 102.201 49.4488 101.156 48.9671C99.9518 48.4071 98.5832 48.332 97.286 48.5007C95.9234 48.6764 94.5968 49.3314 93.732 50.4413C92.9422 51.4323 92.5578 52.7056 92.4843 53.9689C92.3754 55.4577 92.6186 57.0378 93.4745 58.2804C94.2034 59.3527 95.3543 60.0898 96.5975 60.3614C97.6365 60.5846 98.7236 60.5853 99.7626 60.3644C100.978 60.109 102.113 59.4218 102.866 58.4077C103.602 57.4528 103.971 56.2485 104.055 55.0466C104.139 53.8155 104.018 52.5407 103.517 51.4055ZM100.906 56.7042C100.648 57.2978 100.175 57.7995 99.5779 58.0373C98.8797 58.3111 98.0952 58.3272 97.3745 58.1362C96.6411 57.9391 96.0187 57.3975 95.6801 56.708C95.2447 55.8198 95.1794 54.7927 95.2695 53.8186C95.3513 52.9326 95.6531 52.0214 96.3137 51.4101C96.7927 50.9529 97.4459 50.7297 98.0922 50.6929C98.9045 50.6384 99.7694 50.8732 100.353 51.4768C100.978 52.1042 101.22 53.0147 101.287 53.883C101.335 54.8334 101.296 55.8236 100.906 56.7042Z"
                                                fill="#777777" />
                                            <path
                                                d="M125.167 51.7392C124.752 50.5932 123.919 49.6022 122.845 49.0538C121.614 48.4187 120.182 48.3259 118.833 48.4969C117.745 48.6396 116.676 49.0614 115.846 49.8062C114.832 50.6983 114.238 52.0099 114.063 53.3515C113.896 54.693 113.952 56.1059 114.488 57.3615C115.001 58.5934 116.014 59.5936 117.234 60.0837C118.437 60.5677 119.775 60.6222 121.041 60.4128C122.336 60.1942 123.563 59.4985 124.365 58.4277C125.221 57.3216 125.59 55.8903 125.588 54.4959C125.607 53.5624 125.492 52.6159 125.167 51.7392ZM122.729 55.6526C122.625 56.2601 122.42 56.866 122.03 57.3469C121.637 57.8302 121.053 58.1247 120.451 58.2152C119.803 58.3142 119.122 58.2666 118.517 58.0005C117.864 57.7182 117.358 57.1406 117.091 56.4764C116.77 55.6848 116.707 54.8081 116.77 53.9613C116.832 53.1413 117.06 52.2999 117.59 51.6625C118.073 51.0672 118.815 50.7382 119.562 50.6952C120.326 50.6408 121.141 50.821 121.728 51.348C122.27 51.8067 122.569 52.4939 122.707 53.1858C122.861 53.9973 122.86 54.8372 122.729 55.6526Z"
                                                fill="#777777" />
                                            <path
                                                d="M16.6918 52.8521C20.8583 52.8536 25.0249 52.8513 29.1915 52.8536C29.1915 57.1107 29.1915 61.367 29.1915 65.624H16.6918V52.8521Z"
                                                fill="#02A4EF" />
                                            <path
                                                d="M30.4685 52.8536C34.6343 52.8521 38.8009 52.8536 42.9674 52.8536V65.6248H30.4677C30.4685 61.3677 30.4677 57.1107 30.4685 52.8544V52.8536Z"
                                                fill="#FFB902" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3333_7620">
                                                <rect width="123.045" height="26.8462" fill="white"
                                                    transform="translate(16.6918 38.7778)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="item">
                                    <svg width="156" height="105" viewBox="0 0 156 105" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M55.5231 42.0483H51.6892V45.9098H55.5231V42.0483Z" fill="#0B68B2" />
                                        <path
                                            d="M55.4334 62.161V48.2596H51.8034V62.161H55.4334ZM79.5382 62.2924V58.8828C79.0079 58.8828 78.5593 58.8581 78.233 58.8006C77.8496 58.7431 77.5641 58.6117 77.3765 58.4145C77.1889 58.2255 77.0665 57.9462 76.9931 57.5929C76.936 57.2478 76.9115 56.7959 76.9115 56.2455V51.3816H79.5463V48.2513H76.9115V42.8288H73.2734V56.2783C73.2734 57.4204 73.3713 58.3816 73.5589 59.1457C73.7465 59.9016 74.0809 60.5178 74.5296 60.9861C74.9782 61.4544 75.5819 61.783 76.2997 61.9884C77.0339 62.1938 77.9638 62.2924 79.065 62.2924H79.5382ZM100.38 62.161V41.7607H96.7418V62.161H100.38ZM69.7576 49.6152C68.7461 48.5143 67.3267 47.9638 65.5321 47.9638C64.6593 47.9638 63.868 48.1445 63.142 48.4978C62.4324 48.8511 61.8206 49.3523 61.3393 49.9849L61.1354 50.2478V50.0178V48.2596H57.5462V62.161H61.1598V54.7584V55.2678C61.1598 55.1856 61.1598 55.1035 61.1598 55.0213C61.2006 53.715 61.5106 52.7537 62.1142 52.1375C62.7587 51.4802 63.5336 51.1516 64.4227 51.1516C65.475 51.1516 66.2744 51.4802 66.8128 52.1128C67.3349 52.7455 67.6041 53.641 67.6041 54.7748V54.7995V62.1445H71.2748V54.2572C71.2912 52.2854 70.7691 50.7161 69.7576 49.6152ZM94.8493 55.1774C94.8493 54.175 94.6699 53.2384 94.3273 52.3593C93.9765 51.4966 93.4789 50.7243 92.8671 50.0671C92.239 49.4098 91.4885 48.9004 90.6157 48.5307C89.7429 48.161 88.7722 47.9802 87.728 47.9802C86.7329 47.9802 85.7948 48.1692 84.9219 48.5471C84.0491 48.9333 83.2823 49.4427 82.6461 50.0835C82.0016 50.7326 81.4877 51.4966 81.1207 52.3758C80.7373 53.2549 80.5578 54.1997 80.5578 55.202C80.5578 56.2044 80.7373 57.1492 81.088 58.0283C81.4388 58.9074 81.9445 59.6797 82.5727 60.3206C83.2008 60.9696 83.9757 61.4872 84.8812 61.857C85.7785 62.2431 86.7736 62.4321 87.8423 62.4321C90.9257 62.4321 92.8345 61.0189 93.9765 59.6962L91.358 57.6915C90.8115 58.3488 89.5063 59.2443 87.8667 59.2443C86.8471 59.2443 85.9987 59.0142 85.3543 58.5295C84.7099 58.0612 84.2775 57.4039 84.0491 56.5905L84.0083 56.4673H94.8493V55.1774ZM84.041 53.9039C84.041 52.8851 85.1993 51.1187 87.6954 51.1023C90.1915 51.1023 91.3662 52.8769 91.3662 53.8875L84.041 53.9039Z"
                                            fill="#010202" />
                                        <path
                                            d="M104.524 60.3452C104.459 60.1809 104.361 60.0412 104.238 59.918C104.116 59.7947 103.977 59.6962 103.814 59.6304C103.651 59.5647 103.472 59.5236 103.292 59.5236C103.105 59.5236 102.941 59.5647 102.77 59.6304C102.607 59.6962 102.468 59.7947 102.346 59.918C102.224 60.0412 102.126 60.1809 102.06 60.3452C101.995 60.5095 101.954 60.6903 101.954 60.871C101.954 61.06 101.995 61.2243 102.06 61.3969C102.126 61.5694 102.224 61.7008 102.346 61.8241C102.468 61.9473 102.607 62.0459 102.77 62.1116C102.933 62.1774 103.113 62.2185 103.292 62.2185C103.48 62.2185 103.643 62.1774 103.814 62.1116C103.977 62.0459 104.116 61.9473 104.238 61.8241C104.361 61.7008 104.459 61.5612 104.524 61.3969C104.589 61.2325 104.63 61.0518 104.63 60.871C104.63 60.6903 104.589 60.5095 104.524 60.3452ZM104.304 61.3065C104.247 61.4462 104.165 61.5694 104.075 61.6598C103.985 61.7501 103.855 61.8405 103.724 61.8898C103.586 61.9473 103.455 61.972 103.292 61.972C103.145 61.972 102.99 61.9473 102.86 61.8898C102.721 61.8323 102.599 61.7501 102.509 61.6598C102.411 61.5612 102.33 61.4379 102.281 61.3065C102.232 61.175 102.199 61.0354 102.199 60.871C102.199 60.7231 102.224 60.567 102.281 60.4356C102.338 60.2959 102.419 60.1727 102.509 60.0823C102.607 59.9837 102.729 59.9016 102.86 59.8523C102.998 59.7947 103.129 59.7701 103.292 59.7701C103.439 59.7701 103.594 59.7947 103.724 59.8523C103.855 59.9098 103.985 59.9919 104.075 60.0823C104.173 60.1809 104.255 60.3041 104.304 60.4356C104.361 60.5753 104.385 60.7067 104.385 60.871C104.402 61.0271 104.361 61.1668 104.304 61.3065ZM103.537 60.9778C103.643 60.9614 103.724 60.9203 103.798 60.8546C103.871 60.7889 103.904 60.6903 103.904 60.5506C103.904 60.4027 103.863 60.2877 103.765 60.2055C103.684 60.1234 103.537 60.0823 103.357 60.0823H102.754V61.6351H103.039V61.0025H103.243L103.627 61.6351H103.928L103.537 60.9778ZM103.39 60.756C103.349 60.756 103.308 60.756 103.251 60.756H103.047V60.3206H103.251C103.292 60.3206 103.333 60.3206 103.39 60.3206C103.431 60.3206 103.472 60.337 103.512 60.3452C103.553 60.3616 103.578 60.3863 103.594 60.4109C103.61 60.4356 103.618 60.4767 103.618 60.5342C103.618 60.5917 103.602 60.6328 103.594 60.6574C103.569 60.6821 103.537 60.7149 103.512 60.7232C103.472 60.7396 103.431 60.756 103.39 60.756Z"
                                            fill="#010202" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-course" class="ai-felpx;lowship--course bg-white">
            <article class="container-xxl py-5">
                <div class="row  px-lg-5 px-xxl-0">
                    <div class="col-12" data-aos="fade-up" data-aos-duration="1000" id="summary">
                        <h2 class="text-primary text-center fw-bold">Schlorship overview</h2>
                    </div>
                </div>

                <div class="row align-items-center px-lg-5 px-xxl-0">
                    <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                        <img src="/images/s3.jpg" class="img-fluid" alt="Course Overview" />
                    </div>

                    <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="500">
                        <div class="fs-3 fw-bold lh-sm">This program is mainly targeted to<span
                                class="text-primary">those who are willing to </span> study for thier and the nation
                            betterment. </div>
                        <div class="fw-bold mt-4 lh-sm">It is designed to help Students, colleges and the public to help
                            growing better future. For that what should a student have to do:</div>
                        <ul class="my-2 fill-tick">
                            <li class="mt-2">Have a good academic result.</li>
                            <li class="mt-2">Need to write a personal statement.</li>
                            <li class="mt-2">Letter of recomendation from college or schools.</li>
                            <li class="mt-2">Participation in extracurricular activities such as sports, clubs,
                                community service, and leadership roles demonstrates a well-rounded student</li>
                            <li class="mt-2">Any document to showcase your Demographic Background.</li>
                            <li class="mt-2">There will be a interview or presentation round from the collages.</li>
                            <li class="mt-2">You will be provided a review letter form the colleges.</li>
                        </ul>

                        <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                            <a class="btn fill-button" role="button" aria-disabled="true"
                                id="apply_button-course-overview" href="">Apply
                                Now</span></a>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-syllabus" class="ai-fellowship--syllabus py-5">
            <article class="container-xxl">
                <div class="row">
                    <div class="col-12 my-4" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-primary text-center">Courses highlights</h2>
                    </div>
                </div>

                <div class="row px-lg-5 px-xxl-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/gai.svg" width="56" height="auto" alt="Cources"
                                class="img-fluid ps-2" />
                            <h4 class="font-semi-bold my-3">Computer Science</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">Big Data</li>
                                <li class="mt-2 h6">Artificial Intelligence</li>
                                <li class="mt-2 h6">High Performance Computing</li>
                                <li class="mt-2 h6">Complex System</li>
                                <li class="mt-2 h6">Embeded System</li>
                                <li class="mt-2 h6">Computing</li>
                                <li class="mt-2 h6">Machine Learning</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/ml.svg" width="56" height="auto" alt="Cources"
                                class="img-fluid ps-2" />
                            <h4 class="font-semi-bold my-3">BIBM</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">21st Century Management</li>
                                <li class="mt-2 h6">Preparing for Success at University</li>
                                <li class="mt-2 h6">Principles of Business</li>
                                <li class="mt-2 h6">Project Based Learning</li>
                                <li class="mt-2 h6">The Professional Project</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/cv.svg" width="72" height="auto" alt="Cources"
                                class="img-fluid " />
                            <h4 class="font-semi-bold my-3">IMBA</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">Financial Decision Making</li>
                                <li class="mt-2 h6">The Masters Research Project</li>
                                <li class="mt-2 h6">The Masters Professional Project</li>
                                <li class="mt-2 h6">Strategic Operations Management</li>
                                <li class="mt-2 h6">TThe Masters Research Project</li>
                                <li class="mt-2 h6">The Masters Professional Project</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/nlp.svg" width="72" height="auto" alt="Cources"
                                class="img-fluid " />
                            <h4 class="font-semi-bold my-3">BSc (Hons) Pharmaceutical Science</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">Intro to Microbiology</li>
                                <li class="mt-2 h6">Principles of Drug Actions</li>
                                <li class="mt-2 h6">Human Form and Function</li>
                                <li class="mt-2 h6">Molecular Biosciences</li>
                                <li class="mt-2 h6">Principles of Drug Development and formulation</li>
                                <li class="mt-2 h6">Biochemical Pharmalogy</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/nndl.svg" width="72" height="auto" alt="Cources"
                                class="img-fluid " />
                            <h4 class="font-semi-bold my-3">BA (Hons) Art and Design</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">Intro to studio practice</li>
                                <li class="mt-2 h6">Personal Development and Employability</li>
                                <li class="mt-2 h6">Visual Analysis</li>
                                <li class="mt-2 h6">Studio: Identifying and Developing Practice</li>
                                <li class="mt-2 h6">Studio and Professional Practice</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="syllabus-box bg-white p-4 h-100">
                            <img src="/images/courses/mlop.svg" width="54" height="auto" alt="Cources"
                                class="img-fluid ps-2" />
                            <h4 class="font-semi-bold my-3">BSc (Hons) Business and Finance</h4>
                            <ul class="my-2 p-text-dark">
                                <li class="mt-2 h6">Professional Skills For Accounting & Finance</li>
                                <li class="mt-2 h6">Quantative Analysis</li>
                                <li class="mt-2 h6">The Inovate Business</li>
                                <li class="mt-2 h6">Finance for SMEs Analysis</li>
                                <li class="mt-2 h6">The Responsible Business</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-benefit" class="ai-fellowship--benefit py-5">
            <article class="container-xxl">
                <div class="row justify-content-center px-lg-5 px-xxl-0">
                    <div class="col-md-12 mb-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="text-primary mb-4 h2 font-semi-bold">Colleges highlights</div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/wol.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="mt-4 mb-0 font-semi-bold h6 font-semi-bold">University of Wolverhampton(WLV)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c2.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Sogang University</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c3.jpg" width="500" height="auto" alt="guest"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Hanyang University (HYU)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c4.jpg" width="500" height="auto" alt="newsletter"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Pohang University of Science and
                                    Technology (POSTECH)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c5.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Yonsei University (YSU) </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c6.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Korea University (KU)</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c7.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Seoul National University (SNU)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-journey" class="ai-fellowship--journey py-5 bg-white">
            <article class="container-xxl">
                <div class="row px-xxl-0">
                    <div class="col-12 text-center mb-lg-4 mb-2" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-primary">Scholorship Journey</h2>
                    </div>
                    <div class="col-12">
                        <div class="ai-fellowship--journey" data-aos="fade-up" data-aos-duration="1000">
                            <div class="steps my-5">
                                <div class="steps__item">
                                    <img src="/images/cup1.png" class="img-fluid img" width="202" height="auto"
                                        alt="AI Fellowship">
                                </div>
                                <div class="steps__item">
                                    <div class="step">Step 1</div>
                                    <div class="h4">Online application</div>
                                    <div class="h6 text-primary">Deadline: March 10 2024</div>
                                    <ul class="fill-tick">
                                        <li>Complete and submit form</li>
                                        <li>Receive confirmation email</li>
                                    </ul>

                                    <div class="text-muted mt-4"
                                        style="font-size:12px; line-height:1.2;font-style: italic;">Note: <br /> Please
                                        check your spam folder if you don't see the confirmation email in your inbox.
                                    </div>
                                </div>
                                <div class="steps__item">
                                    <div class="step">Step 2</div>
                                    <div class="h4">Online interview</div>
                                    <div class="h6 text-primary">March 11-17 2024</div>
                                    <ul class="fill-tick">
                                        <li>Shortlisted candidates are interviewed</li>
                                        <li>Take one hour online test </li>
                                    </ul>
                                </div>
                                <div class="steps__item">
                                    <div class="step">Step 3</div>
                                    <div class="h4">Interview with college</div>
                                    <div class="h6 text-primary">March 21-27 2024</div>
                                    <ul class="fill-tick">
                                        <li>Selected candidates are interviewed</li>
                                        <li>Final selection</li>
                                    </ul>
                                </div>
                                <div class="steps__item">
                                    <div class="step">Step 4</div>
                                    <div class="h4">Enrollment</div>
                                    <div class="h6 text-primary">April 8 2024</div>
                                    <ul class="fill-tick">
                                        <li>Enroll and onboard</li>
                                        <li>Start your College journey!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </article>
        </section>

        <section id="section-prerequisites" class="ai-fellowship--prerequisites py-5">
            <article class="container-xxl">
                <div class="row px-lg-5 px-xxl-0">
                    <div class="col-lg-9 col-12 text-center mx-auto" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-primary mb-3">Prerequisites</h2>
                        <h3>The scholarship is open to individuals from various educational backgrounds, including IT
                            students in their final year of education, graduates, and professionals with expertise in
                            computer science and IT.
                        </h3>
                    </div>
                </div>

                <div class="row my-lg-5 mt-4 px-lg-5 px-xxl-0">
                    <div class="col-md-6 pe-lg-5" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="font-semi-bold mt-4">Those hoping to participate in the program must:</h5>

                        <ul class="my-2 p-text-dark pe-xl-5">
                            <li class="mt-2">Demonstrate strong academic performance.</li>
                            <li class="mt-2">Demonstrate leadership skills or involvement in extracurricular activities.
                            </li>
                            <li class="mt-2">Provide letters of recommendation from academic or professional references.
                            </li>
                            <li class="mt-2">Write a compelling personal statement outlining their educational and
                                career goals.</li>
                            <li class="mt-2">Submit any required documentation, such as transcripts or resumes, as
                                specified by the scholarship program.</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="font-semi-bold mt-4">All applicants will be asked to participate in an online
                            interview to assess their qualifications and suitability for the Scholorship. The interview
                            will
                            provide an opportunity for candidates to discuss their skills, experiences, and motivations
                            directly with college organizers.
                        </h5>

                        <ul class="my-2 p-text-dark">
                            <li class="mt-2">Share their career aspirations and how they align with the goals of the
                                scholarship program.</li>
                            <li class="mt-2">Provide examples of how they have overcome challenges or demonstrated
                                leadership.</li>
                            <li class="mt-2">Highlight any relevant skills, projects, or accomplishments.</li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-whychooseus" class="ai-fellowship--whychooseus bg-Primary">
            <article class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 px-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="500">
                        <img src="/images/grop1.jpg" width="750" height="auto" alt="Machine Learning"
                            class="img-fluid" />
                    </div>

                    <div class="col-lg-5 col-md-6 offset-md-1 my-5" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-white fw-bold">Why join our Website and apply?</h2>

                        <ul class="my-2 text-white">
                            <li class="my-2">User-friendly interface whichcan help you to search for
                                scholarships, submit applications, and track your status.</li>
                            <li class="my-2">You will be aware who is competting against you.</li>
                            <li class="my-2">There is transparency between applicants and colleges.</li>
                            <li class="my-2">Automation features such as application submission, review, and selection
                                can reduce manual workload and minimize errors.
                            </li>
                            <li class="my-2"> All scholarship information, including applications, recipient details,
                                and funding sources, can be stored in one centralized database, making it easier to
                                track and manage.</li>
                            <li class="my-2">Built-in compliance features ensure that scholarship processes adhere to
                                legal and regulatory requirements, while robust security measures protect sensitive
                                student data.</li>
                            <li class="my-2">Be a part of the revoluation of education system.</li>
                        </ul>
                    </div>
                </div>

            </article>
        </section>

        <section id="section-team" class="ai-fellowship--team py-5">
            <article class="container-md">
                <div class="row justify-content-center mb-4  px-lg-5 px-xxl-0" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="col-md-12 col-lg-8 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <div class="text-primary h2">Edu-Hope leaders</div>
                        <p class="p-text-grey">Lorem ipsum is placeholder text commonly used in the graphic, print, and
                            publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-3 col-6 col-lg-2 my-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <img src="/images/leaders/p1.jpg" width="160" height="auto" alt="Machine Learning"
                            class="img-fluid mb-1" />
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank"
                                class="icon in">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55033 5.18496C6.69639 5.02048 6.81613 4.85468 6.96614 4.71389C7.42668 4.27966 7.97142 4.06124 8.60828 4.0665C8.95829 4.06913 9.30304 4.09413 9.63989 4.1915C10.411 4.41388 10.8583 4.94547 11.0728 5.69813C11.2334 6.26262 11.2623 6.8429 11.2636 7.4245C11.2662 8.65085 11.2597 9.87852 11.2636 11.1049C11.2636 11.2193 11.232 11.2496 11.1189 11.2496C10.4873 11.2444 9.85437 11.2444 9.22278 11.2496C9.11093 11.2496 9.08724 11.2167 9.08724 11.1114C9.09119 9.94431 9.09119 8.77717 9.08724 7.60871C9.08724 7.3166 9.0675 7.02317 8.98592 6.73895C8.8346 6.21525 8.45959 5.94814 7.9109 5.97708C7.16088 6.01656 6.77139 6.38762 6.67665 7.14949C6.65429 7.33107 6.64244 7.51397 6.64376 7.69687C6.64376 8.83243 6.64376 9.96799 6.64639 11.1036C6.64639 11.2167 6.61876 11.2496 6.50297 11.2496C5.86611 11.2444 5.22926 11.2444 4.5924 11.2496C4.48976 11.2496 4.46082 11.2233 4.46082 11.1193C4.46345 8.87191 4.46345 6.62316 4.46082 4.37572C4.46082 4.26387 4.49765 4.23887 4.60292 4.23887C5.20688 4.24282 5.81216 4.24414 6.41612 4.23887C6.52797 4.23887 6.5556 4.2744 6.55428 4.37967C6.54771 4.6481 6.55165 4.91652 6.55165 5.18627L6.55033 5.18496Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.08707 7.7532C3.08707 8.86508 3.08574 9.97695 3.08969 11.0888C3.08969 11.2125 3.05943 11.2494 2.93179 11.248C2.3002 11.2415 1.66861 11.2428 1.0357 11.248C0.934378 11.248 0.904114 11.223 0.904114 11.1191C0.906745 8.86771 0.906745 6.61633 0.904114 4.36363C0.904114 4.2702 0.92648 4.2373 1.02517 4.2373C1.66597 4.24125 2.30678 4.24257 2.94759 4.2373C3.07128 4.2373 3.08707 4.28336 3.08707 4.38994C3.08443 5.51103 3.08575 6.63211 3.08575 7.7532H3.08707Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.26078 2.00711C3.26078 2.70581 2.69498 3.27425 1.9976 3.27425C1.30942 3.27425 0.738358 2.70581 0.735727 2.01763C0.733095 1.32287 1.30416 0.750488 2.00023 0.750488C2.69104 0.750488 3.25947 1.31761 3.26078 2.00579V2.00711Z"
                                        fill="#009EF8" />
                                </svg>
                            </a>
                        </div>
                        <div class="fw-bold mt-2">Aakriti Giri</div>
                        <div class="small-font-size mb-1">Founder and CEO,<br /> Edu-Hope Inc.</div>
                        <div class="small-font-size mb-2">Adj. Associate Professor, Wolverhampton University</div>
                    </div>

                    <div class="col-md-3 col-6 col-lg-2 my-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <img src="/images/leaders/p2.jpg" width="160" height="auto" alt="Bülent Uyaniker, PhD"
                            class="img-fluid mb-1" />
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank"
                                class="icon in">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55033 5.18496C6.69639 5.02048 6.81613 4.85468 6.96614 4.71389C7.42668 4.27966 7.97142 4.06124 8.60828 4.0665C8.95829 4.06913 9.30304 4.09413 9.63989 4.1915C10.411 4.41388 10.8583 4.94547 11.0728 5.69813C11.2334 6.26262 11.2623 6.8429 11.2636 7.4245C11.2662 8.65085 11.2597 9.87852 11.2636 11.1049C11.2636 11.2193 11.232 11.2496 11.1189 11.2496C10.4873 11.2444 9.85437 11.2444 9.22278 11.2496C9.11093 11.2496 9.08724 11.2167 9.08724 11.1114C9.09119 9.94431 9.09119 8.77717 9.08724 7.60871C9.08724 7.3166 9.0675 7.02317 8.98592 6.73895C8.8346 6.21525 8.45959 5.94814 7.9109 5.97708C7.16088 6.01656 6.77139 6.38762 6.67665 7.14949C6.65429 7.33107 6.64244 7.51397 6.64376 7.69687C6.64376 8.83243 6.64376 9.96799 6.64639 11.1036C6.64639 11.2167 6.61876 11.2496 6.50297 11.2496C5.86611 11.2444 5.22926 11.2444 4.5924 11.2496C4.48976 11.2496 4.46082 11.2233 4.46082 11.1193C4.46345 8.87191 4.46345 6.62316 4.46082 4.37572C4.46082 4.26387 4.49765 4.23887 4.60292 4.23887C5.20688 4.24282 5.81216 4.24414 6.41612 4.23887C6.52797 4.23887 6.5556 4.2744 6.55428 4.37967C6.54771 4.6481 6.55165 4.91652 6.55165 5.18627L6.55033 5.18496Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.08707 7.7532C3.08707 8.86508 3.08574 9.97695 3.08969 11.0888C3.08969 11.2125 3.05943 11.2494 2.93179 11.248C2.3002 11.2415 1.66861 11.2428 1.0357 11.248C0.934378 11.248 0.904114 11.223 0.904114 11.1191C0.906745 8.86771 0.906745 6.61633 0.904114 4.36363C0.904114 4.2702 0.92648 4.2373 1.02517 4.2373C1.66597 4.24125 2.30678 4.24257 2.94759 4.2373C3.07128 4.2373 3.08707 4.28336 3.08707 4.38994C3.08443 5.51103 3.08575 6.63211 3.08575 7.7532H3.08707Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.26078 2.00711C3.26078 2.70581 2.69498 3.27425 1.9976 3.27425C1.30942 3.27425 0.738358 2.70581 0.735727 2.01763C0.733095 1.32287 1.30416 0.750488 2.00023 0.750488C2.69104 0.750488 3.25947 1.31761 3.26078 2.00579V2.00711Z"
                                        fill="#009EF8" />
                                </svg>
                            </a>
                        </div>
                        <div class="fw-bold mt-2">Bibek Basnet, PhD</div>
                        <div class="small-font-size mb-1">Founder and CEO,<br /> Edu-Hope Inc.</div>
                        <div class="small-font-size mb-2">Adj. Associate Professor, Wolverhampton University</div>


                    </div>

                    <div class="col-md-3 col-6 col-lg-2 my-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <img src="/images/leaders/p3.jpg" width="160" height="auto" alt="Manjula Devananda"
                            class="img-fluid mb-1" />
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank"
                                class="icon in">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55033 5.18496C6.69639 5.02048 6.81613 4.85468 6.96614 4.71389C7.42668 4.27966 7.97142 4.06124 8.60828 4.0665C8.95829 4.06913 9.30304 4.09413 9.63989 4.1915C10.411 4.41388 10.8583 4.94547 11.0728 5.69813C11.2334 6.26262 11.2623 6.8429 11.2636 7.4245C11.2662 8.65085 11.2597 9.87852 11.2636 11.1049C11.2636 11.2193 11.232 11.2496 11.1189 11.2496C10.4873 11.2444 9.85437 11.2444 9.22278 11.2496C9.11093 11.2496 9.08724 11.2167 9.08724 11.1114C9.09119 9.94431 9.09119 8.77717 9.08724 7.60871C9.08724 7.3166 9.0675 7.02317 8.98592 6.73895C8.8346 6.21525 8.45959 5.94814 7.9109 5.97708C7.16088 6.01656 6.77139 6.38762 6.67665 7.14949C6.65429 7.33107 6.64244 7.51397 6.64376 7.69687C6.64376 8.83243 6.64376 9.96799 6.64639 11.1036C6.64639 11.2167 6.61876 11.2496 6.50297 11.2496C5.86611 11.2444 5.22926 11.2444 4.5924 11.2496C4.48976 11.2496 4.46082 11.2233 4.46082 11.1193C4.46345 8.87191 4.46345 6.62316 4.46082 4.37572C4.46082 4.26387 4.49765 4.23887 4.60292 4.23887C5.20688 4.24282 5.81216 4.24414 6.41612 4.23887C6.52797 4.23887 6.5556 4.2744 6.55428 4.37967C6.54771 4.6481 6.55165 4.91652 6.55165 5.18627L6.55033 5.18496Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.08707 7.7532C3.08707 8.86508 3.08574 9.97695 3.08969 11.0888C3.08969 11.2125 3.05943 11.2494 2.93179 11.248C2.3002 11.2415 1.66861 11.2428 1.0357 11.248C0.934378 11.248 0.904114 11.223 0.904114 11.1191C0.906745 8.86771 0.906745 6.61633 0.904114 4.36363C0.904114 4.2702 0.92648 4.2373 1.02517 4.2373C1.66597 4.24125 2.30678 4.24257 2.94759 4.2373C3.07128 4.2373 3.08707 4.28336 3.08707 4.38994C3.08443 5.51103 3.08575 6.63211 3.08575 7.7532H3.08707Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.26078 2.00711C3.26078 2.70581 2.69498 3.27425 1.9976 3.27425C1.30942 3.27425 0.738358 2.70581 0.735727 2.01763C0.733095 1.32287 1.30416 0.750488 2.00023 0.750488C2.69104 0.750488 3.25947 1.31761 3.26078 2.00579V2.00711Z"
                                        fill="#009EF8" />
                                </svg>
                            </a>
                        </div>
                        <div class="fw-bold mt-2">Shreya Devananda</div>
                        <div class="small-font-size mb-1">Founder and CEO,<br /> Edu-Hope Inc.</div>
                        <div class="small-font-size mb-2">Adj. Associate Professor, Wolverhampton University</div>
                    </div>

                    <div class="col-md-3 col-6 col-lg-2 my-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <img src="/images/leaders/p4.jpg" width="160" height="auto" alt="Machine Learning"
                            class="img-fluid mb-1" />
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank"
                                class="icon in">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55033 5.18496C6.69639 5.02048 6.81613 4.85468 6.96614 4.71389C7.42668 4.27966 7.97142 4.06124 8.60828 4.0665C8.95829 4.06913 9.30304 4.09413 9.63989 4.1915C10.411 4.41388 10.8583 4.94547 11.0728 5.69813C11.2334 6.26262 11.2623 6.8429 11.2636 7.4245C11.2662 8.65085 11.2597 9.87852 11.2636 11.1049C11.2636 11.2193 11.232 11.2496 11.1189 11.2496C10.4873 11.2444 9.85437 11.2444 9.22278 11.2496C9.11093 11.2496 9.08724 11.2167 9.08724 11.1114C9.09119 9.94431 9.09119 8.77717 9.08724 7.60871C9.08724 7.3166 9.0675 7.02317 8.98592 6.73895C8.8346 6.21525 8.45959 5.94814 7.9109 5.97708C7.16088 6.01656 6.77139 6.38762 6.67665 7.14949C6.65429 7.33107 6.64244 7.51397 6.64376 7.69687C6.64376 8.83243 6.64376 9.96799 6.64639 11.1036C6.64639 11.2167 6.61876 11.2496 6.50297 11.2496C5.86611 11.2444 5.22926 11.2444 4.5924 11.2496C4.48976 11.2496 4.46082 11.2233 4.46082 11.1193C4.46345 8.87191 4.46345 6.62316 4.46082 4.37572C4.46082 4.26387 4.49765 4.23887 4.60292 4.23887C5.20688 4.24282 5.81216 4.24414 6.41612 4.23887C6.52797 4.23887 6.5556 4.2744 6.55428 4.37967C6.54771 4.6481 6.55165 4.91652 6.55165 5.18627L6.55033 5.18496Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.08707 7.7532C3.08707 8.86508 3.08574 9.97695 3.08969 11.0888C3.08969 11.2125 3.05943 11.2494 2.93179 11.248C2.3002 11.2415 1.66861 11.2428 1.0357 11.248C0.934378 11.248 0.904114 11.223 0.904114 11.1191C0.906745 8.86771 0.906745 6.61633 0.904114 4.36363C0.904114 4.2702 0.92648 4.2373 1.02517 4.2373C1.66597 4.24125 2.30678 4.24257 2.94759 4.2373C3.07128 4.2373 3.08707 4.28336 3.08707 4.38994C3.08443 5.51103 3.08575 6.63211 3.08575 7.7532H3.08707Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.26078 2.00711C3.26078 2.70581 2.69498 3.27425 1.9976 3.27425C1.30942 3.27425 0.738358 2.70581 0.735727 2.01763C0.733095 1.32287 1.30416 0.750488 2.00023 0.750488C2.69104 0.750488 3.25947 1.31761 3.26078 2.00579V2.00711Z"
                                        fill="#009EF8" />
                                </svg>
                            </a>
                        </div>
                        <div class="fw-bold mt-2">Neha Manandhar</div>
                        <div class="small-font-size mb-1">Founder and CEO,<br /> Edu-Hope Inc.</div>
                        <div class="small-font-size mb-2">Adj. Associate Professor, Wolverhampton University</div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-3 col-6 col-lg-2 my-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                        data-aos-duration="200">
                        <img src="/images/leaders/p5.jpg" width="160" height="auto" alt="Rakesh Kumar Katuwal"
                            class="img-fluid mb-1" />
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank"
                                class="icon in">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55033 5.18496C6.69639 5.02048 6.81613 4.85468 6.96614 4.71389C7.42668 4.27966 7.97142 4.06124 8.60828 4.0665C8.95829 4.06913 9.30304 4.09413 9.63989 4.1915C10.411 4.41388 10.8583 4.94547 11.0728 5.69813C11.2334 6.26262 11.2623 6.8429 11.2636 7.4245C11.2662 8.65085 11.2597 9.87852 11.2636 11.1049C11.2636 11.2193 11.232 11.2496 11.1189 11.2496C10.4873 11.2444 9.85437 11.2444 9.22278 11.2496C9.11093 11.2496 9.08724 11.2167 9.08724 11.1114C9.09119 9.94431 9.09119 8.77717 9.08724 7.60871C9.08724 7.3166 9.0675 7.02317 8.98592 6.73895C8.8346 6.21525 8.45959 5.94814 7.9109 5.97708C7.16088 6.01656 6.77139 6.38762 6.67665 7.14949C6.65429 7.33107 6.64244 7.51397 6.64376 7.69687C6.64376 8.83243 6.64376 9.96799 6.64639 11.1036C6.64639 11.2167 6.61876 11.2496 6.50297 11.2496C5.86611 11.2444 5.22926 11.2444 4.5924 11.2496C4.48976 11.2496 4.46082 11.2233 4.46082 11.1193C4.46345 8.87191 4.46345 6.62316 4.46082 4.37572C4.46082 4.26387 4.49765 4.23887 4.60292 4.23887C5.20688 4.24282 5.81216 4.24414 6.41612 4.23887C6.52797 4.23887 6.5556 4.2744 6.55428 4.37967C6.54771 4.6481 6.55165 4.91652 6.55165 5.18627L6.55033 5.18496Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.08707 7.7532C3.08707 8.86508 3.08574 9.97695 3.08969 11.0888C3.08969 11.2125 3.05943 11.2494 2.93179 11.248C2.3002 11.2415 1.66861 11.2428 1.0357 11.248C0.934378 11.248 0.904114 11.223 0.904114 11.1191C0.906745 8.86771 0.906745 6.61633 0.904114 4.36363C0.904114 4.2702 0.92648 4.2373 1.02517 4.2373C1.66597 4.24125 2.30678 4.24257 2.94759 4.2373C3.07128 4.2373 3.08707 4.28336 3.08707 4.38994C3.08443 5.51103 3.08575 6.63211 3.08575 7.7532H3.08707Z"
                                        fill="#009EF8" />
                                    <path
                                        d="M3.26078 2.00711C3.26078 2.70581 2.69498 3.27425 1.9976 3.27425C1.30942 3.27425 0.738358 2.70581 0.735727 2.01763C0.733095 1.32287 1.30416 0.750488 2.00023 0.750488C2.69104 0.750488 3.25947 1.31761 3.26078 2.00579V2.00711Z"
                                        fill="#009EF8" />
                                </svg>
                            </a>
                        </div>
                        <div class="fw-bold mt-2">Bina Basnet</div>
                        <div class="small-font-size mb-1">Founder and CEO,<br /> Edu-Hope Inc.</div>
                        <div class="small-font-size mb-2">Adj. Associate Professor, Wolverhampton University</div>
                    </div>
                </div>
            </article>
        </section>

        <section id="section-faqs" class="bg-white py-5 ai-fellowship--faq">
            <article class="container-xxl">
                <div class="row px-lg-5 px-xxl-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 text-center text-primary">
                        <div class="h2">Scholorship FAQs</div>
                    </div>
                </div>

                <div class="row accordion accordion-flush px-lg-5 px-xxl-0" id="accordionProgramFaqs">
                    <div class="col-lg-6 pt-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-career-in-ai">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-career-in-ai-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-career-in-ai-ans">
                                    How do I create an account on the platform?
                                </button>
                            </h2>
                            <div id="faq-nepal-career-in-ai-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-career-in-ai" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">Simply click on the "Sign Up" button and follow
                                    the prompts to provide your information.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header"
                                id="faq-nepal-placement-position-at-fusemachines-or-other-company">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-nepal-placement-position-at-fusemachines-or-other-company-ans"
                                    aria-expanded="false"
                                    aria-controls="faq-nepal-placement-position-at-fusemachines-or-other-company-ans">
                                    What types of scholarships are available on the app?
                                </button>
                            </h2>
                            <div id="faq-nepal-placement-position-at-fusemachines-or-other-company-ans"
                                class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-placement-position-at-fusemachines-or-other-company"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">Our app offers a wide range of scholarships,
                                    including merit-based, need-based, and those specific to certain fields of study or
                                    demographics.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-except-long-term-career-and-employment">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-nepal-except-long-term-career-and-employment-ans"
                                    aria-expanded="false"
                                    aria-controls="faq-nepal-except-long-term-career-and-employment-ans">
                                    How do I search for scholarships that match my qualifications?
                                </button>
                            </h2>
                            <div id="faq-nepal-except-long-term-career-and-employment-ans"
                                class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-except-long-term-career-and-employment"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    <p>Use the search filters to refine your results based on criteria such as GPA,
                                        field of study, or location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-duration-of-program">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-duration-of-program-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-duration-of-program-ans">
                                    How will I be notified if I am awarded a scholarship?
                                </button>
                            </h2>
                            <div id="faq-nepal-duration-of-program-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-duration-of-program" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    You will receive a notification via email or within the app if you are awarded a
                                    scholarship.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-course-preparation">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-course-preparation-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-course-preparation-ans">
                                    What are the eligibility criteria for applying for scholarships?
                                </button>
                            </h2>
                            <div id="faq-nepal-course-preparation-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-course-preparation" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    Eligibility criteria vary for each scholarship but typically include factors like
                                    academic performance, extracurricular activities, and financial need.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-demand-for-ai-jobs">
                                <button class="accordion-button collapsed h5 font-semi-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-demand-for-ai-jobs-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-demand-for-ai-jobs-ans">
                                    What documents do I need to submit with my scholarship application?
                                </button>
                            </h2>

                            <div id="faq-nepal-demand-for-ai-jobs-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-demand-for-ai-jobs" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    Required documents may include transcripts, letters of recommendation, and essays.
                                    Check the specific requirements for each scholarship.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-background-for-enrollment-in-program">
                                <button class="accordion-button collapsed h5 font-semi-bold" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-nepal-background-for-enrollment-in-program-ans"
                                    aria-expanded="false"
                                    aria-controls="faq-nepal-background-for-enrollment-in-program-ans">
                                    Are there any fees associated with applying for scholarships through the app?
                                </button>
                            </h2>
                            <div id="faq-nepal-background-for-enrollment-in-program-ans"
                                class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-background-for-enrollment-in-program"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">No, our app is free to use for both students and
                                    scholarship providers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-projects-will-i-be-working-on">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-nepal-projects-will-i-be-working-on-ans" aria-expanded="false"
                                    aria-controls="faq-nepal-projects-will-i-be-working-on-ans">
                                    How does your app ensure fairness and transparency in the scholarship selection
                                    process?
                                </button>
                            </h2>
                            <div id="faq-nepal-projects-will-i-be-working-on-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-projects-will-i-be-working-on"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    Ensuring fairness and transparency in the scholarship selection process is paramount
                                    to the credibility and effectiveness of our app. Here's how we achieve it:

                                    Clear and Objective Criteria: Each scholarship on our platform has well-defined
                                    eligibility criteria, including academic performance, extracurricular involvement,
                                    and financial need. These criteria are communicated transparently to applicants.

                                    Standardized Review Process: We facilitate a standardized review process, where
                                    trained reviewers assess applications based on predetermined criteria. This ensures
                                    consistency and fairness in evaluation.

                                    Blind Review: To eliminate biases, reviewers do not have access to applicants'
                                    identifying information during the initial evaluation stage. This ensures that
                                    assessments are based solely on the merits of the application.

                                    Panel Review: For subjective assessments like essays, panels of diverse evaluators
                                    collaborate to ensure comprehensive evaluation and mitigate individual biases.

                                    Conflict of Interest Policies: We have strict conflict of interest policies to
                                    prevent undue influence or favoritism. Reviewers are required to disclose any
                                    affiliations or relationships that may present conflicts of interest.

                                    Transparency and Accountability: Applicants are provided with clear information
                                    about the evaluation criteria, review timeline, and notification procedures. They
                                    can also access their application status and receive feedback on their submissions.

                                    Appeals Process: In case of concerns regarding the fairness of the selection
                                    process, applicants have the opportunity to request a review of their application or
                                    raise concerns. These are addressed promptly and impartially.

                                    By implementing these robust mechanisms, we ensure that our app upholds the
                                    principles of fairness, integrity, and transparency in the scholarship selection
                                    process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-courses-accredited">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-courses-accredited-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-courses-accredited-ans">
                                    How do I track the status of my scholarship applications?
                                </button>
                            </h2>
                            <div id="faq-nepal-courses-accredited-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-courses-accredited" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    You can track the status of your applications in real-time through your account
                                    dashboard.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-nepal-remote-class-join">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-nepal-remote-class-join-ans"
                                    aria-expanded="false" aria-controls="faq-nepal-remote-class-join-ans">
                                    Can I apply for scholarships if I'm an international student?
                                </button>
                            </h2>
                            <div id="faq-nepal-remote-class-join-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-nepal-remote-class-join" data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    No, we only offer scholarships for domestic students. Be sure to check the
                                    eligibility requirements for each scholarship.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-do-we-have-to-do-any-project-work">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-do-we-have-to-do-any-project-work-ans" aria-expanded="false"
                                    aria-controls="faq-do-we-have-to-do-any-project-work-ans">
                                    Are there scholarships available specifically for students in certain fields of
                                    study?
                                </button>
                            </h2>
                            <div id="faq-do-we-have-to-do-any-project-work-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-do-we-have-to-do-any-project-work"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    Yes, we have scholarships tailored to various fields of study, including STEM,
                                    humanities, business, and more.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-at-what-time-will-the-sessions-be-held">
                                <button class="accordion-button h5 font-semi-bold collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-at-what-time-will-the-sessions-be-held-ans"
                                    aria-expanded="false"
                                    aria-controls="faq-at-what-time-will-the-sessions-be-held-ans">
                                    What should I do if I encounter technical issues with the app?
                                </button>
                            </h2>
                            <div id="faq-at-what-time-will-the-sessions-be-held-ans" class="accordion-collapse collapse"
                                aria-labelledby="faq-at-what-time-will-the-sessions-be-held"
                                data-bs-parent="#accordionProgramFaqs">
                                <div class="accordion-body p-text-grey">
                                    If you experience technical issues, please try clearing your browser cache or
                                    restarting the app. If the problem persists, contact our support team for
                                    assistance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>



    </main>

    <!-- intlTelInput -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/css/intlTelInput.css">
    </link>

    <script async type="text/javascript" src="/assets/js/download-aifellowship-syllabus.min.js"></script>

    <footer role="main-footer" id="footer" class="bg-Grey white pb-3">

        <article class="container">
            <div class="row py-4">
                <div class="col-md-5 footer-sign-up d-flex align-items-center">
                    <div class="h5">If you have any queries please let us know.</div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-md-3 col-6">
                    <div class="h4">Programs</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Scholorship</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Life Counceling</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Internship
                                Oppurtunities</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Work with Companies</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Explore</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Academics</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">College
                                Partners</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Resources</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Insights</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Review</a></li>


                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Connect with us</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Contact us</a></li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/"
                                target="_blank">
                                Linkedin
                            </a>
                        </li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://twitter.com/Ray284445941" target="_blank">
                                Twitter
                            </a>
                        </li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://www.facebook.com/heraldcollegektm/" target="_blank">
                                Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pb-3 justify-content-center text-center">
                <div class="col-md-3">
                    © 2024 <a href="https://github.com/rayxrayy" class="footer-link">Edu-Hope Inc.</a>
                </div>

                <div class="col-md-3">
                    <a href="https://github.com/rayxrayy" class="footer-link">Privacy Policy</a> | <a href="/eula"
                        class="footer-link">SMS</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="small-font-size mb-0">
                        Edu-Hope is dedicated to transforming lives through education by providing accessible and
                        equitable opportunities for students worldwide. Our platform connects students with valuable
                        resources, scholarships, and educational opportunities, empowering them to pursue their academic
                        and career aspirations. With a commitment to fairness, transparency, and excellence, Edu-Hope
                        strives to bridge the gap between potential and opportunity, fostering a brighter future for
                        individuals and communities alike. Join us in our mission to unlock the power of education and
                        create a world where every student has the chance to thrive and succeed.</p>
                </div>
            </div>
        </article>
    </footer>
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script async type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

    <script>
    AOS.init();
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $('.company--logo').owlCarousel({
        margin: 10,
        autoplay: false,
        nav: false,
        dots: false,
        responsive: {
            0: {
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 9000,
                smartSpeed: 4000,
                items: 3
            },
            600: {
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 9000,
                smartSpeed: 4000,
                items: 5
            },
            1140: {
                items: 7
            },
            1200: {
                items: 7
            }
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#sticky-social').fadeIn();
        } else {
            $('#sticky-social').fadeOut();
        }
    });
    </script>
</body>

</html>