{{-- <!-- resources/views/realhome.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }

        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Launch Your Own Bills Payment Website Today</h2>
                    <p>You can start making lots of money by selling data, airtime, prepaid meter subscriptions, TV
                        subscriptions, and more to the
                        people around you.</p>
                    <a href="https://dm.wa.link/djutww" class="btn btn-primary">Click Here To Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Satoshi:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <link rel="shortcut icon" type="image/png" href="/images/logo.png" />
    {{-- <link rel="icon" sizes="192x192" href="/images/logo.png"> --}}

    <link rel="icon" type="image/png" sizes="32x32" href="/images/logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/logo.png">
    <link rel="apple-touch-icon" href="/images/logo.png">

    <title>{{ config('app.name', 'BillsPal') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#007FFF",
                    },
                    fontFamily: {
                        satoshi: ["Satoshi", "sans-serif"],
                    },
                    transitionDuration: {
                        0: "0ms",
                        200: "200ms",
                        300: "300ms",
                    },
                    keyframes: {
                        slideIn: {
                            "0%": {
                                height: "0",
                                opacity: "0"
                            },
                            "100%": {
                                height: "auto",
                                opacity: "1"
                            },
                        },
                        slideOut: {
                            "0%": {
                                height: "auto",
                                opacity: "1"
                            },
                            "100%": {
                                height: "0",
                                opacity: "0"
                            },
                        },
                    },
                    animation: {
                        slideIn: "slideIn 0.5s forwards",
                        slideOut: "slideOut 0.5s forwards",
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="index.css" />

</head>

<body class="flex flex-col gap-10 bg-white font-satoshi max-w-[1440px] mx-auto">
    <!-- heading -->
    <header class="flex items-center justify-between p-5 md:px-10">
        <!-- image -->
        <img class="w-[90px] h-[60px] md:w-[132px] md:h-[96.66px]" src="/images/logo.png" alt="billspal logo" />

        <!-- contact button -->
        {{-- <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
            <a href="{{ route('home') }}" target="_blank"
                class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                <span>Become a Reseller</span>
            </a>
        </div> --}}

        <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
            <a href="https://wa.link/s8yuqs" target="_blank"
                class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                <span>Get Started</span>
                <img src="/images/whatsapp-icon.png" alt="whatsapp icon" class="w-[40px] h-[40px]" />
            </a>
        </div>
    </header>

    <!-- hero section -->
    <main class="flex flex-col gap-16">
        <section class="flex flex-col items-center">
            <div class="flex flex-col items-center">
                <h2 class="text-center text-2xl md:text-3xl font-medium md:leading-[3rem]">
                    Launch Your Own
                    <span class="text-primary">Bills Payment <br />
                        Website</span>
                    Today
                </h2>
                <p class="text-center text-gray-500">
                    Start making money by selling data, airtime, electricity
                    <br />
                    subscriptions, cable TV subsciptions and more.
                </p>
            </div>
            <img src="/images/hero-image.png" alt="" class="-mt-12 md:-mt-40" />
        </section>

        <!-- mobile app section -->
        <section
            class="flex flex-col lg:flex-row gap-10 items-center justify-between bg-primary p-5 md:p-20 lg:px-10 xl:px-20 text-white">

            <div class="flex flex-col gap-2 md:gap-5 xl:gap-10 lg:w-[30%] text-center">
                <h4 class="text-2xl xl:text-3xl font-medium">Choose From Multiple API Providers (Wholesalers)</h4>
                <p>
                    Get a website and mobile application that is well-optimized to help
                    you get the best deals on data subscription from all networks,
                    electricity bills payment, tv subscription payment, and airtime
                    purchase from the best providers per time.
                </p>
                <p>
                    For example, for Data Subscription, because your website and mobile
                    app is connected to several data-purchase providers, you can switch
                    from one provider to another when you notice that a provider is
                    offering to sell to you at a cheaper price or that their service is
                    currently more reliable. You can do the same thing for your Airtime, Cable TV, Electricity
                    Subscription, etc.
                </p>
                <p>This means you're able to buy from the best providers within the country at the cheapest prices and
                    sell to your customers at the best prices as well. Everyone is happy.</p>
            </div>

            <div>
                <img src="/images/mobile-app.png" alt="mobile app view" />
            </div>

            <div class="flex flex-col gap-2 md:gap-5 xl:gap-10 lg:w-[30%] text-center">
                <h4 class="text-2xl xl:text-3xl font-medium">
                    Reliable Technical Support Team
                </h4>
                <p>
                    The development team for BillsPal comprises reliable Software Engineers that knows the bills payment
                    system, in and out. They are always available to assist you when you need their support.
                </p>
                <p>
                    Meanwhile,
                    if you already have a bills payment website or mobile application (even if you didn't get it from
                    us) and you just need to maintain it or add more features, our team can help you maintain it without
                    stressing you.
                </p>
                <p>Apart from our Website Design, Website Development, Mobile App Development, and Software Development
                    services, we also provide website hosting, domain name purchase, website maintenance, and mobile app
                    upload to both Google Store and Apple Store.</p>
            </div>
        </section>

        <!-- who is bills pal section -->
        <section class="flex flex-col gap-5">
            <h4 class="text-3xl text-center">Who is BillsPal For?</h4>
            <div class="flex flex-col md:flex-row gap-10 px-5 justify-between lg:w-[80%] mx-auto">
                <div
                    class="flex flex-col md:w-[48%] bg-gradient-to-b gap-5 from-[#E3F1FF] to-white px-3 py-6 md:p-6 rounded-lg shadow-lg">
                    <div class="flex flex-col gap-4">
                        <h5 class="text-2xl font-medium text-gray-800 text-center">Need a New Bills Payment Website?
                        </h5>
                        <p class="text-[#868686]">
                            People who want to have their own bills payment website where
                            they can sell Data, Airtime, Electricity Subscription, and Cable
                            TV Subscription.
                        </p>
                        <a href="https://wa.link/s8yuqs" target="_blank"
                            class="bg-primary hover:bg-white hover:text-primary transition-all duration-300 border border-primary text-white py-2 px-4 rounded-full text-center">
                            Get Started
                        </a>
                    </div>
                    <ul class="flex flex-col gap-2 text-[#868686]">
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Get a responsive website that looks great on all screen
                                sizes.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Launch an intuitive mobile app compatible with Android and
                                iOS.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Switch between multiple API providers based on price and
                                availability.</span>
                        </li>
                        <li class="flex items-start gap-1">

                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Offer referral programs to help users attract more
                                customers.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Allow users to upgrade to a Reseller Account and earn by
                                reselling your products.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Access our responsive technical support team whenever
                                needed.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Enjoy continuous improvements for your website and app.</span>
                        </li>
                    </ul>
                </div>
                <div
                    class="flex flex-col gap-5 md:w-[48%] bg-gradient-to-b from-[#E3F1FF] to-white px-3 py-6 md:p-6 rounded-lg shadow-lg">
                    <div class="flex flex-col gap-4">
                        <h5 class="text-2xl font-medium text-center">Need To Add More Features To an Existing
                            Website/Mobile App
                        </h5>
                        <p class="text-[#868686]">
                            Get access to a team of reliable Software Engineers who can help you maintain your website
                            or mobile application.
                        </p>
                        <a href="https://wa.link/s8yuqs" target="_blank"
                            class="bg-primary hover:bg-white hover:text-primary transition-all duration-300 border border-primary text-white py-2 px-4 rounded-full text-center">
                            Get Started
                        </a>
                    </div>
                    <ul class="flex flex-col gap-2 text-[#868686]">
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Don't let your business get stranded. Our responsive and timely Technical Support Team
                                will ensure your website/mobile app is always functional.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Whether you got the website or mobile application through us or not, we can still help
                                you add more features to your existing website or mobile app without breaking the
                                bank.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>We help with all sorts of Cloud Management Services, including website hosting, mobile
                                app upload to Google Store and Apple, etc.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>We also help ensure website security for both you and your users.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Our services and prompt, timely, and afforadble.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- how it works -->
        <section class="flex flex-col gap-10 px-5">
            <h4 class="text-3xl text-center">How It Works</h4>
            <div class="flex flex-col md:flex-row gap-5 md:gap-0 items-center justify-between lg:w-[80%] mx-auto">
                <div class="md:w-[30%]">
                    <img src="/images/how-it-works-1.png" alt="user operating a phone" />
                </div>
                <img src="{{ asset('images/line-1.png') }}" alt="" class="hidden md:flex flex-1" />
                <div class="md:w-[30%]">
                    <img src="/images/how-it-works-2.png" alt="user working with his laptop" />
                </div>
                <img src="/images/line-2.png" alt="" class="hidden md:flex flex-1" />
                <div class="md:w-[30%]">
                    <img src="/images/how-it-works-3.png"
                        alt="user holding money on her right hand and an Atm card on her left hand" />
                </div>
            </div>
        </section>

        <!-- fax section -->
        <section
            class="flex flex-col items-center lg:flex-row md:items-start gap-10 justify-between px-5 md:w-[80%] mx-auto">
            <img src="/images/faq-image.png" alt="" />
            <div class="flex flex-col gap-5">
                <h5 class="text-2xl font-medium">Frequently Asked Questions</h5>
                <ul class="flex flex-col gap-5">
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>How do I get started?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Just click on any of the "Get Started" buttons you see on this page
                                and it will lead you directly to our WhatsApp where all the details will be discussed
                                and finalized.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>What are the fees involved?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">To get your own bills payment website and mobile application with
                                your own domain name and hosting for one year, the total cost is &#x20A6 300,000.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>How do I earn money as a reseller?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">If you don't have money to get your own bills payment website
                                immediately, we can link you up with one of our customers who you can partner with as a
                                resller and make money.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>What if I need technical support?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">We have a team of highly-dedicated Software Engineers who can help
                                you at anytime you need help.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>Can I manage both a website and mobile app?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Yes, we can help you manage both ypur website and mobile application
                                whether they are for bills payment or any other thing. We have a team of skilled
                                Software Development Engineers who can meet all your software development needs.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- footer -->
        <footer class="bg-primary text-white p-5 md:p-10">
            <div class="flex flex-col md:flex-row gap-5 items-center justify-between">
                <img class="w-[90px] h-[60px] md:w-[132px] md:h-[96.66px]" src="/images//logo-white.png"
                    alt="billspal logo" />

                {{-- <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                        <span>Become a Reseller</span>
                    </a>
                </div> --}}

                <div role="button"
                    class="flex flex-col items-center bg-primary text-white px-4 rounded-[18px] self-center">
                    <a href="https://wa.link/s8yuqs" target="_blank"
                        class="flex flex-col items-center bg-primary text-white px-4 rounded-[18px] self-center">
                        <span>Get Started</span>
                        <img src="/images//whatsapp-icon.png" alt="whatsapp icon" class="w-[40px] h-[40px]" />
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span>Copyright</span>
                    <img src="/images/copyright.png" alt="" />
                    <span> 2024 - <a href="bizgrowthtech.bizgrowtherz.com">BizGrowthTeck</a>, All Rights
                        Reserved.</span>
                </div>
            </div>
        </footer>
    </main>
</body>
<script>
    // JavaScript to handle the FAQ toggle
    document.querySelectorAll(".faq-question").forEach((item) => {
        item.addEventListener("click", () => {
            const answer = item.nextElementSibling;
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                answer.classList.remove("slideIn");
                answer.classList.add("slideOut");
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.classList.remove("slideOut");
                answer.classList.add("slideIn");
            }
        });
    });
</script>

<style>
    /* Define custom fonts */
    .font-satoshi {
        font-family: "Satoshi", sans-serif;
    }

    body: {
        @apply text-white bg-red-500;
    }
</style>

</html>
