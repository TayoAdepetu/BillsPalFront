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
    <link rel="icon" sizes="192x192" href="/images/logo.png">

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
        <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
            <a href="{{ route('home') }}" target="_blank"
                class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                <span>Become a Reseller</span>
            </a>
        </div>

        <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
            <a href="https://wa.link/s8yuqs" target="_blank"
                class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                <span>Get a Website</span>
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
                    Start making a lot of money by selling data, airtime, electricity
                    <br />
                    subscriptions, cable TV subsciptions and more.
                </p>
            </div>
            <img src="/images/hero-image.png" alt="" class="-mt-10 md:-mt-34" />
        </section>

        <!-- mobile app section -->
        <section
            class="flex flex-col lg:flex-row gap-10 items-center justify-between bg-primary p-5 md:p-20 lg:px-10 xl:px-20 text-white">
            <div class="flex flex-col gap-2 md:gap-5 xl:gap-10 lg:w-[30%]">
                <h4 class="text-2xl xl:text-3xl font-medium">
                    Become a Reseller Even If You Don’t Have a Starting Capital
                </h4>
                <p>
                    You can make money by sharing your reseller link to your friends so
                    that they can buy their Data, Airtime, Electricity Subscriptions,
                    and Cable TV Subscriptions from you.
                </p>
                <p>
                    Because we don’t want to be competing directly with our resellers,
                    we don’t sell our products to individuals. We sell only to our
                    resellers, and that is why we require you pay the sum of #3,000 to
                    secure a spot as a reseller on the platform.
                </p>
            </div>
            <div>
                <img src="/images/mobile-app.png" alt="mobile app view" />
            </div>
            <div class="flex flex-col gap-2 md:gap-5 xl:gap-10 lg:w-[30%]">
                <h4 class="text-2xl xl:text-3xl font-medium">Start Making Money</h4>
                <p>
                    Get a website and mobile application that is well-optimized to help
                    you get the best deals on data subscription from all networks,
                    electricity bills payment, tv subscription payment, and airtime
                    purchase from the best providers per time.
                </p>
                <p>
                    For example, for data subscription, because your website and mobile
                    app is connected to several data-purchase providers, you can switch
                    from one provider to another when you notice that a provider is
                    offering to sell to you at a cheaper price or that their service is
                    currently more reliable.
                </p>
            </div>
        </section>

        <!-- who is bills pal section -->
        <section class="flex flex-col gap-5">
            <h4 class="text-3xl text-center">Who is BillsPal For?</h4>
            <div class="flex flex-col md:flex-row gap-10 px-5 justify-between lg:w-[80%] mx-auto">
                <div
                    class="flex flex-col md:w-[48%] bg-gradient-to-b gap-5 from-[#E3F1FF] to-white px-3 py-6 md:p-6 rounded-lg shadow-lg">
                    <div class="flex flex-col gap-4">
                        <h5 class="text-2xl font-medium text-gray-800">Website Owners</h5>
                        <p class="text-[#868686]">
                            People who want to have their own bills payment website where
                            they can sell Data, Airtime, Electricity Subscription, and Cable
                            TV Subscription.
                        </p>
                        <button
                            class="bg-primary hover:bg-white hover:text-primary transition-all duration-300 border border-primary text-white py-2 px-4 rounded-full">
                            Get Started
                        </button>
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
                                reselling.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Access our responsive technical support whenever
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
                        <h5 class="text-2xl font-medium">Resellers</h5>
                        <p class="text-[#868686]">
                            People who would like to make money by reselling data and
                            airtime, electricity and Cable TV subscriptions, and WAEC or
                            JAMB result checkers.
                        </p>
                        <button
                            class="bg-primary hover:bg-white hover:text-primary transition-all duration-300 border border-primary text-white py-2 px-4 rounded-full">
                            Get Started
                        </button>
                    </div>
                    <ul class="flex flex-col gap-2 text-[#868686]">
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Start a business with daily recurring income by registering
                                for just ₦3,000.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Get a unique storefront link to share with your
                                customers.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Enjoy a distraction-free storefront, ensuring your customers
                                only see your offerings.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Withdraw earnings to your bank account every last Friday of
                                the month.</span>
                        </li>
                        <li class="flex items-start gap-1">
                            <img src="/images/check-img.png" alt="check icon" class="w-[24px] h-[24px]" />
                            <span>Future features include showcasing and selling handpicked
                                physical products in your storefront.</span>
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
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                                unde iste harum neque voluptatem optio exercitationem iure
                                perspiciatis. Ullam, nostrum.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>What are the fees involved?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                                unde iste harum neque voluptatem optio exercitationem iure
                                perspiciatis. Ullam, nostrum.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>How do I earn money as a reseller?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                                unde iste harum neque voluptatem optio exercitationem iure
                                perspiciatis. Ullam, nostrum.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>What if I need technical support?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                                unde iste harum neque voluptatem optio exercitationem iure
                                perspiciatis. Ullam, nostrum.</span>
                        </div>
                    </li>
                    <li class="faq-item flex flex-col gap-1 bg-[#ECF5FF] p-2 rounded-md text-primary">
                        <div class="faq-question flex items-center justify-between cursor-pointer">
                            <span>Can I manage both a website and mobile app?</span>
                            <img src="/images/down-icon.png" alt="" />
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                                unde iste harum neque voluptatem optio exercitationem iure
                                perspiciatis. Ullam, nostrum.</span>
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

                <div role="button" class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center bg-primary text-white px-4 rounded-[18px]">
                        <span>Become a Reseller</span>
                    </a>
                </div>

                <div role="button"
                    class="flex flex-col items-center bg-primary text-white px-4 rounded-[18px] self-center">
                    <a href="https://wa.link/s8yuqs" target="_blank"
                        class="flex flex-col items-center bg-primary text-white px-4 rounded-[18px] self-center">
                        <span>Get a Website</span>
                        <img src="/images//whatsapp-icon.png" alt="whatsapp icon" class="w-[40px] h-[40px]" />
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span>Copyright</span>
                    <img src="/images/copyright.png" alt="" />
                    <span> 2024 - BillsPal, All Rights.</span>
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
