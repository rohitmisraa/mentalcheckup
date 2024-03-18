<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalCheckUp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .para {
            margin-left: 20px;
        }

        .para .Note {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <header class="text-gray-600 body-font bg-blue-800">
        <div class="container mx-auto flex flex-wrap justify-between p-5 px-40 flex-col md:flex-row items-center hidde">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl text-white">MentalCheckUp</span>
            </a>
            <div>
                <a class="text-white mr-5" href="/login">Login</a>
                <a class="text-white" href="/register">
                    <button type="button"
                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-md text-sm px-10 py-2.5 text-center mr-2 mb-2">
                        Signup
                    </button>
                </a>
            </div>

            <!-- <button
            class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">CheckNow
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button> -->
        </div>
    </header>

    <div class="h-screen w-screen bg-blue-800">
        <div class="mx-auto max-w-7xl pt-16 sm:pt-24">
            <div class="space-y-8 lg:space-y-0 lg:grid lg:grid-cols-12 lg:gap-8">
                <div
                    class="px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <!-- <span
                                    class="rounded-full uppercase bg-pink-500 px-3 py-0.5 text-sm font-semibold leading-5 text-white">
                                    Early Access
                                </span> -->
                                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                                    <span class="sm:text-6xl">
                                    </span>Nurture Your Mind Begin Your
                                    <span
                                        class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#50B80F] to-[#22E08E]">Mental
                                        Health
                                    </span>
                                    Journey Here
                                </h1>
                            </div>

                            <p class="text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Prioritize your mental well-being with our online mental checkup website. Take the first
                                step towards a healthier mind today. Your mental health matters.
                            </p>

                        </div>

                        <!-- <div class="border-t border-gray-700"></div> -->

                        <div class="flex space-x-4 items-center text-white">
                            <div class="flex items-center space-x-2">
                                <a href="/disorder/types">

                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-10 py-2.5 text-center mr-2 mb-2">
                                        CheckNow
                                    </button>
                                </a>
                            </div>

                            <div class="h-4 border-l border-gray-700"></div>

                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full col-span-6">
                    <div class="px-6 h-96 lg:h-100% w-full max-w-2xl col-span-6 flex items-center mx-auto">
                        <img src="https://mentalcheckup.netlify.app/assets/group-collegue.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>



    <section id="tests" class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Take a Test to Know Yourself
                </h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Take our mental health test to gain insights
                    into your emotional well-being and receive guidance on self-care and support.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">ADHD Test</h2>
                        <p class="leading-relaxed text-base">Find out if you're experiencing the most common symptoms of
                            ADHD.</p>
                        <a href='/tests/adhd'>
                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>
                        </a>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Anxiety Test</h2>
                        <p class="leading-relaxed text-base">Find out if your anxiety could be a sign of something more
                            serious.</p>
                        <a href='/tests/anxiety'>
                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>
                        </a>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bipolar Test</h2>
                        <p class="leading-relaxed text-base">Find out if you are showing some of the symptoms of Bipolar
                            Disorder.</p>
                        <a href='/tests/bipolar-disorder'>
                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>
                        </a>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Depression Test</h2>
                        <p class="leading-relaxed text-base">If you're unsure if you are depressed, our 2-minute test
                            can help evaluate your mood.</p>

                        <a href='/tests/depression'>

                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>

                        </a>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Autism Test</h2>
                        <p class="leading-relaxed text-base">Are you experiencing the most common symptoms of autism?
                            Find out using our online test.</p>
                        <a href='/tests/autism'>
                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>
                        </a>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">OCD Test</h2>
                        <p class="leading-relaxed text-base">Find out if you are experiencing the most common symptoms
                            of OCD.</p>
                        <a href='/tests/ocd'>
                            <button type="button"
                                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                Test</button>
                        </a>
                    </div>
                </div>




                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg ml-4">
                            <div
                                class="w-9 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 ">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">PTSD Test</h2>
                            <p class="leading-relaxed text-base">Are you experiencing the most common symptoms of PTSD?
                                Find out using our online test.</p><br><br>
                            <a href='/tests/ptsd'>


                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                    Test</button>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div
                                class="w-9 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Stress Test</h2>
                            <p class="leading-relaxed text-base">Find out if your feelings are a sign of something more
                                serious.</p><br><br>
                            <a href='/tests/stress'>

                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                    Test</button>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg mr-4">
                            <div
                                class="w-9 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Binge Eating Test</h2>
                            <p class="leading-relaxed text-base">Find out if your eating habits could be a sign of a
                                binge eating disorder.</p><br><br>
                            <a href='/tests/binge-eating'>
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Take
                                    Test</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    </div>

    <div class="para">
        <span class="Note">Please Note:</span> These tests are meant to be indicators only and do not replace a full
        assessment by a qualified clinician. If you are at all worried about your results or symptoms we would always
        urge you to seek medical help.
    </div>
    </div>
    </section>

</body>

</html>