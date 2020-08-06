<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>UniverseDev</title>
    <link rel=icon href="/favicon.svg" sizes="any" type="image/svg+xml">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/app/view/img/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.0/dist/css/datepicker.min.css">
    <meta name="theme-color" content="#000">
    <style>body {
        opacity: 0;
    }

    .modal {
        opacity: 0;
    }

    .dropdown-menu {
        opacity: 0;
        visibility: hidden;
    }

    .i-slider__item svg {
        opacity: 0;
    }

    .i-slider__item {
        animation-duration: 2s !important;
        animation-delay: 0s !important;
    }

    .hidden {
        display: none;
    }

    @keyframes fade {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    @media screen and (max-width: 991px) {

        .header nav {
            transform: translate3d(100%, 0, 0);
            visibility: hidden;
        }

        /*header mega menu */
        .header.header-mega-menu nav {
            transform: translate3d(100%, 0, 0);
            visibility: hidden;
        }
    }</style>
    <link href="/app/view/main.css" rel="stylesheet">
</head>
<body class="fixed-header">

<?php use core\Url;

echo $this->content ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="footer__dev"><a href="#">For Developers</a></div>
            </div>
            <div class="col-md-6 col-12">
                <div class="footer__contact">
                    <ul class="">
                        <li><span>Call us at</span><a href="tel:+15012224488">+1 (501) 222-4488</a></li>
                        <li><span>Email</span><a href="mailto:support@universedev.io">support@universedev.io</a>
                        </li>
                        <li><span>Follow us</span>
                            <a target="_blank" href="https://www.linkedin.com/company/universedev">
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="footer__logo"><a href="/" class="logo">
                    <svg width="161" height="60" viewBox="0 0 161 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 33H159" stroke="#2CB4CE"/>
                        <path d="M7.627 27.29C11.252 27.29 13.572 24.97 13.572 20.823V6.7H10.614V20.823C10.614 23.288 9.483 24.448 7.627 24.448C5.8 24.448 4.669 23.288 4.669 20.823V6.7H1.682V20.823C1.682 24.97 4.031 27.29 7.627 27.29ZM25.675 11.34C23.935 11.34 22.659 12.123 21.876 13.428L21.586 11.717H19.585V27H22.398V17.546C22.398 15.284 23.413 14.008 25.008 14.008C26.487 14.008 27.154 15.052 27.154 17.546V27H29.967V17.401C29.967 13.225 28.314 11.34 25.675 11.34ZM37.1807 9.165C38.2247 9.165 38.9787 8.382 38.9787 7.396C38.9787 6.352 38.2247 5.598 37.1807 5.598C36.1367 5.598 35.4117 6.352 35.4117 7.396C35.4117 8.411 36.1367 9.165 37.1807 9.165ZM35.7887 27H38.6017V11.717H35.7887V27ZM47.2115 27H50.3435L54.5485 11.717H51.5905L49.9085 18.59C49.5605 20.214 49.0675 22.534 48.8645 23.636H48.7195C48.5165 22.534 48.0235 20.214 47.6755 18.59L45.9935 11.717H43.0065L47.2115 27ZM66.4458 22.215C66.2138 23.868 65.5178 24.622 63.8648 24.622C62.3278 24.622 61.4288 23.665 61.4288 21.577V20.417H69.2298V17.024C69.2298 13.399 67.1708 11.34 63.8648 11.34C60.6458 11.34 58.6158 13.399 58.6158 17.024V21.577C58.6158 25.231 60.6168 27.319 63.8068 27.319C67.0548 27.319 68.9978 25.463 69.2878 22.215H66.4458ZM63.8938 13.979C65.5178 13.979 66.4458 14.907 66.4458 16.995V18.3H61.4288V16.995C61.4288 14.907 62.3568 13.979 63.8938 13.979ZM80.9777 11.369C79.1797 11.369 77.8747 12.181 77.0627 13.573L76.7437 11.717H74.7427V27H77.5557V17.836C77.5557 15.371 78.7737 14.037 80.6877 14.037C81.4417 14.037 82.0217 14.153 82.5727 14.385V11.601C82.1377 11.427 81.6157 11.369 80.9777 11.369ZM91.7322 27.377C94.8932 27.377 96.8072 25.579 96.8072 22.882C96.8072 17.401 89.2672 18.532 89.2672 15.632C89.2672 14.559 90.0792 13.892 91.4132 13.892C92.9502 13.892 93.7042 14.762 93.7332 16.212H96.4882C96.3722 13.37 94.6612 11.34 91.4132 11.34C88.4262 11.34 86.4832 12.993 86.4832 15.603C86.4832 20.823 93.9942 19.779 93.9942 22.853C93.9942 24.042 93.1532 24.767 91.6742 24.767C89.9052 24.767 89.0642 23.694 89.0352 22.302H86.2512C86.2802 25.115 88.2522 27.377 91.7322 27.377ZM109.393 22.215C109.161 23.868 108.465 24.622 106.812 24.622C105.275 24.622 104.376 23.665 104.376 21.577V20.417H112.177V17.024C112.177 13.399 110.118 11.34 106.812 11.34C103.593 11.34 101.563 13.399 101.563 17.024V21.577C101.563 25.231 103.564 27.319 106.754 27.319C110.002 27.319 111.945 25.463 112.235 22.215H109.393ZM106.841 13.979C108.465 13.979 109.393 14.907 109.393 16.995V18.3H104.376V16.995C104.376 14.907 105.304 13.979 106.841 13.979ZM118.038 27H123.113C127.028 27 129.348 24.651 129.348 20.62V13.022C129.348 9.02 127.028 6.7 123.084 6.7H118.038V27ZM120.967 24.216V9.484H123.113C125.23 9.484 126.39 10.702 126.39 13.08V20.562C126.39 22.969 125.201 24.216 123.113 24.216H120.967ZM142.339 22.215C142.107 23.868 141.411 24.622 139.758 24.622C138.221 24.622 137.322 23.665 137.322 21.577V20.417H145.123V17.024C145.123 13.399 143.064 11.34 139.758 11.34C136.539 11.34 134.509 13.399 134.509 17.024V21.577C134.509 25.231 136.51 27.319 139.7 27.319C142.948 27.319 144.891 25.463 145.181 22.215H142.339ZM139.787 13.979C141.411 13.979 142.339 14.907 142.339 16.995V18.3H137.322V16.995C137.322 14.907 138.25 13.979 139.787 13.979ZM153.076 27H156.208L160.413 11.717H157.455L155.773 18.59C155.425 20.214 154.932 22.534 154.729 23.636H154.584C154.381 22.534 153.888 20.214 153.54 18.59L151.858 11.717H148.871L153.076 27Z"
                              fill="#2CB4CE"/>
                        <path d="M1.463 54H4.446C6.916 54 8.398 52.575 8.398 50.124V44.595C8.398 42.125 6.954 40.7 4.446 40.7H1.463V54ZM2.641 52.879V41.821H4.446C6.232 41.821 7.22 42.771 7.22 44.652V50.067C7.22 51.929 6.213 52.879 4.446 52.879H2.641ZM12.141 52.917V47.787H16.834V46.704H12.141V41.783H17.157V40.7H10.963V54H17.366V52.917H12.141ZM21.7189 54H23.0869L26.4689 40.7H25.2149L23.2199 49.022C22.8969 50.39 22.6879 51.378 22.4409 52.385H22.3649C22.1179 51.378 21.9089 50.39 21.5859 49.022L19.5909 40.7H18.3369L21.7189 54ZM29.3226 52.917V47.787H34.0156V46.704H29.3226V41.783H34.3386V40.7H28.1446V54H34.5476V52.917H29.3226ZM37.9506 52.879V40.7H36.7726V54H42.8146V52.879H37.9506ZM47.8937 54.247C50.2877 54.247 51.7127 52.556 51.7127 49.877V44.823C51.7127 42.144 50.2877 40.453 47.8937 40.453C45.4997 40.453 44.0747 42.144 44.0747 44.823V49.877C44.0747 52.556 45.4997 54.247 47.8937 54.247ZM47.8937 53.107C46.1647 53.107 45.2717 51.929 45.2717 49.877V44.823C45.2717 42.771 46.1647 41.593 47.8937 41.593C49.6227 41.593 50.5157 42.771 50.5157 44.823V49.877C50.5157 51.929 49.6227 53.107 47.8937 53.107ZM57.4616 40.7H54.2696V54H55.4476V48.965H57.4616C59.9126 48.965 61.2616 47.521 61.2616 44.785C61.2616 42.182 59.9126 40.7 57.4616 40.7ZM57.4616 47.844H55.4476V41.821H57.4616C59.2476 41.821 60.0836 42.809 60.0836 44.785C60.0836 46.894 59.2476 47.844 57.4616 47.844ZM64.2426 52.917V47.787H68.9356V46.704H64.2426V41.783H69.2586V40.7H63.0646V54H69.4676V52.917H64.2426ZM77.5065 54H78.8745L75.6065 48.737C77.4305 48.395 78.5325 46.913 78.5325 44.595C78.5325 42.125 77.1835 40.7 74.7325 40.7H71.6925V54H72.8705V48.813H74.3335L77.5065 54ZM72.8705 41.802H74.7325C76.4425 41.802 77.3355 42.771 77.3355 44.671C77.3355 46.628 76.4425 47.711 74.7135 47.711H72.8705V41.802ZM83.7271 54.247C86.0641 54.247 87.2991 52.461 87.2991 50.656C87.2991 46.666 81.4091 46.78 81.4091 43.702C81.4091 42.429 82.2451 41.593 83.6891 41.593C84.9621 41.593 85.8741 42.353 85.9501 44.025H87.1281C87.0331 41.935 85.7411 40.453 83.6511 40.453C81.5991 40.453 80.2121 41.878 80.2121 43.702C80.2121 47.559 86.1021 47.578 86.1021 50.656C86.1021 52.1 85.3041 53.107 83.6891 53.107C82.2071 53.107 81.2571 52.233 81.2001 50.58H80.0221C80.0791 52.784 81.5231 54.247 83.7271 54.247ZM97.2111 54.171C99.3391 54.171 100.84 52.784 100.84 50.124V40.7H99.6621V50.124C99.6621 52.138 98.6551 53.031 97.2111 53.031C95.7671 53.031 94.7601 52.138 94.7601 50.124V40.7H93.5821V50.124C93.5821 52.784 95.0831 54.171 97.2111 54.171ZM103.551 54H104.729V46.552C104.729 45.507 104.672 43.987 104.634 42.98L104.691 42.961C104.938 43.626 105.622 45.298 106.04 46.191L109.669 54H110.885V40.7H109.707V47.882C109.707 49.022 109.802 50.751 109.859 51.72L109.802 51.739C109.498 50.979 108.814 49.402 108.358 48.452L104.767 40.7H103.551V54ZM113.812 54H114.99V40.7H113.812V54ZM120.04 54H121.408L124.79 40.7H123.536L121.541 49.022C121.218 50.39 121.009 51.378 120.762 52.385H120.686C120.439 51.378 120.23 50.39 119.907 49.022L117.912 40.7H116.658L120.04 54ZM127.644 52.917V47.787H132.337V46.704H127.644V41.783H132.66V40.7H126.466V54H132.869V52.917H127.644ZM140.908 54H142.276L139.008 48.737C140.832 48.395 141.934 46.913 141.934 44.595C141.934 42.125 140.585 40.7 138.134 40.7H135.094V54H136.272V48.813H137.735L140.908 54ZM136.272 41.802H138.134C139.844 41.802 140.737 42.771 140.737 44.671C140.737 46.628 139.844 47.711 138.115 47.711H136.272V41.802ZM147.128 54.247C149.465 54.247 150.7 52.461 150.7 50.656C150.7 46.666 144.81 46.78 144.81 43.702C144.81 42.429 145.646 41.593 147.09 41.593C148.363 41.593 149.275 42.353 149.351 44.025H150.529C150.434 41.935 149.142 40.453 147.052 40.453C145 40.453 143.613 41.878 143.613 43.702C143.613 47.559 149.503 47.578 149.503 50.656C149.503 52.1 148.705 53.107 147.09 53.107C145.608 53.107 144.658 52.233 144.601 50.58H143.423C143.48 52.784 144.924 54.247 147.128 54.247ZM153.862 52.917V47.787H158.555V46.704H153.862V41.783H158.878V40.7H152.684V54H159.087V52.917H153.862Z"
                              fill="#2CB4CE"/>
                    </svg>
                </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 order-3 order-md-1">
                <div class="footer__copy"><p>© 2020 UniverseDev.io</p>
                    <p>All rights reserved.</p></div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="footer__policy">
                    <ul>
                        <li><a href="<?php echo Url::link( 'privacy-policy' ); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo Url::link( 'terms-conditions' ) ?>">Terms&Conditions</a></li>
                        <li><a href="<?php echo Url::link( 'cookie-policy' ); ?>">Cookie-policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 order-2 order-md-3">
                <div class="footer__location">UKRAINE, ZAPORIZHZHYA, 2020</div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="/app/view/bundle.js"></script>
</body>
</html>
