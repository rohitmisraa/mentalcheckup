<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>MentalCheckUp</title>
</head>

<body class="p-0 m-0">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">MentalCheckUp</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900"> </a>
            </nav>
            <button
                class="inline-flex  items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">CheckNow
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>

    <section class="text-gray-600 body-font">

        <div class="container py-10 mx-auto flex flex-wrap flex-col">
            <h1 class="text-center text-2xl mb-10">ADHD Test</h1>
            <div id="qnlist" class="flex mx-auto flex-wrap mb-10 hiddsen">
                <a
                    class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 text-gray-900 tracking-wider rounded-t">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>Questions
                </a>
                <div id="stepbar">

                </div>
            </div>
            <div id="step1" class="">
                <div class="flex flex-col text-center w-full">


                    <div id="st1-block" class="w-96 mx-auto mt-10">

                    </div>
                </div>
            </div>
            <div id="step2" class="flex flex-col text-center w-full ">
                <div id="qnblock">
                    qn block
                </div>

                <div class="w-[900px] mx-auto mt-10">
                    <div class="flex w-max mx-auto ">
                        <button type="button" onclick="next(0)"
                            class="text-gray-900 mx-8 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Never</button>
                        <button type="button" onclick="next(2)"
                            class="text-gray-900 mx-8 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Rarely</button>
                        <button type="button" onclick="next(4)"
                            class="text-gray-900 mx-8 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Sometimes</button>
                        <button type="button" onclick="next(6)"
                            class="text-gray-900 mx-8 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Often</button>
                        <button type="button" onclick="next(8)"
                            class="text-gray-900 mx-8 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Very
                            Often</button>
                    </div>
                </div>
            </div>

            <div id="result" class=" mx-auto hidden ">
                <div class="w-screen py-10 bg-blue-600">
                    <p class="text-lg text-white w-[800px] mx-auto">The questions are based on the "ADHD Test" rating
                        scale and should only be useed as an indicator of wheather you may be at risk of having or
                        developing a ADHD. They are not intended to replace a professional diagnosis.</p>
                </div>
                <div class="w-[900px] shadow-md mx-auto text-center mt-10 p-4">
                    <h2 class="text-2xl">These results indicate that you are expriencing...</h2>
                    <!-- <h2 class="text-2xl">These results indicate that you are expriencing...</h2> -->
                    <p></p>
                    <p class="text-2xl text-indigo-800 my-4" id="result-message">Little to Moderate ADHD disorder</p>

                    <div class="w-full h-10 border border-2 rounded-full">
                        <div id="progress_bar" class="h-full bg-blue-600 rounded-full">
                            <div id="progress_perc"
                                class="rounded-full w-10 h-full float-right text-grey-800 bg-white font-bold border-4 border-blue-600">
                                100</div>
                        </div>
                    </div>

                    <p id="result-suggest" class="text-2xl text-red-800 my-4"></p>
                    <div class="text-left mt-2">
                        <p>Very Few (0 - 40)</p>
                        <p>Moderate (41 - 65)</p>
                        <p>Severe (66 - 80)</p>
                    </div>
                    <div class="text-left">
                        <p class="mt-10">The answers you have given suggest that you are experiencing many of the
                            symptoms of a ADHD of and they are having a significant impact on the quality of your life.
                        </p>
                        <p class="mt-2">We recommend you see a specialist as soon as possible as we know that seeking
                            help and treatment early can have a significant impact on being able to make a full
                            recovery.</p>

                    </div>


                    <div class="text-left mt-10">


                        <h2 class="text-2xl mt-10">Solutions</h2>

                        <div class="grid grid-cols-3 gap-4">
                            <div class="w-60 shadow-md p-6">
                                <img src="/assets/consult.jpg" alt="yoga" class="h-40 mx-auto">
                                <p class="text-xl text-center mb-2">CONSULT SPECILIST</p>
                                <button type="button"  onclick="showSpec()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>
                            <div class="w-60 shadow-md p-6 ">
                                <img src="/assets/vinsayaYoga.svg" alt="yoga" class="h-40 mx-auto">
                                <p class="text-2xl text-center mb-2">YOGA</p>
                                <button type="button" onclick="showYoga()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>
                            <div class="w-60 shadow-md p-6 ">
                                <img src="/assets/hathayoga.svg" alt="yoga" class="h-40 mx-auto">
                                <p class="text-2xl text-center mb-2">EXERCISE</p>
                                <button type="button" onclick="showExerc()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>
                            <div class="w-60 shadow-md p-6 ">
                                <img src="/assets/meditation.png" alt="yoga" class="h-40 mx-auto">
                                <p class="text-2xl text-center mb-2">MEDITATION</p>
                                <button type="button"  onclick="showMedi()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>

                            <div class="w-60 shadow-md p-6 ">
                                <img src="/assets/music.jpg" alt="yoga" class="h-40 mx-auto">
                                <p class="text-2xl text-center mb-2">LISTEN MUSIC</p>
                                <button type="button"  onclick="showMusic()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>
                            <div class="w-60 shadow-md p-6 ">
                                <img src="/assets/healthy-food.svg" alt="yoga" class="h-40 mx-auto">
                                <p class="text-2xl text-center mb-2">EAT HEALTHY</p>
                                <button type="button"  onclick="showHealthy()"
                                    class="text-white  bg-blue-700 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Check
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- {{$questions}} --}}

            <div id="model" class="bg-gray-100 h-screen w-screen fixed top-0 hidden">
                <div id="consultModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">Consult Specilist</h2>
                    <div class=" flex px-2">
                        <div>
                            <p class="pl-6">You should consult to a specilist</p>
                        </div>
                    </div>
                </div>
                <div id="yogaModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">YOGA</h2>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">NIDRA YOGA</h3>
                            <p class="pl-6">Yoga Nidra is a deep relaxation practice that can help children with ADHD
                                manage stress and anxiety effectively</p>
                            <p class="pl-6">Yoga nidra allows you to access delta brainwaves, which are responsible for
                                the healing and restoration that happens in your body during deep sleep</p>
                        </div>
                    </div>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">ASHTANGA YOGA</h3>
                            <p class="pl-6">It helps to improve your overall wellness by improving your posture, help
                                you breathe better and also improve your concentration skills.</p>
                            <p class="pl-6">It also helps to better your self-esteem.</p>
                            <p class="pl-6">It makes your muscles strong and improves the strength of your leg and core
                                muscles.</p>
                        </div>
                    </div>
                </div>
                <div id="exerciseModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">EXERCISE</h2>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">MORNING WALK</h3>
                            <p class="pl-6">Lower the risk of heart disease, stroke, diabetes, and certain types of cancer.</p>
                            <p class="pl-6">Clear your mind.</p>
                            <p class="pl-6">Lower blood pressure.</p>
                            <p class="pl-6">Improve memory and lower your risk of dementia.</p>
                            <p class="pl-6">Boost your mental and emotional health.</p>
                        </div>
                    </div>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">AEROBIC EXERCISE</h3>
                            <p class="pl-6">Increase your stamina, fitness and strength.</p>
                            <p class="pl-6">Ward off viral illnesses.</p>
                            <p class="pl-6">Reduce your health risks.</p>
                            <p class="pl-6">Manage chronic conditions.</p>
                            <p class="pl-6">Keep your arteries clear.</p>
                        </div>
                    </div>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">STRENGTH TRAINING</h3>
                            <p class="pl-6">Increases lean muscle mass and strength.</p>
                            <p class="pl-6">Strengthens bones.</p>
                            <p class="pl-6">Reduces your risk of injury.</p>
                            <p class="pl-6">Lowers your risk of chronic diseases.</p>
                        </div>
                    </div>
                </div>
                <div id="meditationModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">MEDITATION</h2>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">MINDFULNESS MEDITATION</h3>
                            <p class="pl-6">Decreased Depression.</p>
                            <p class="pl-6">Increased Emotional Regulation.</p>
                            <p class="pl-6">Reduced Anxiety and Stress.</p>
                            <p class="pl-6">Cognitive Improvements.</p>
                            <p class="pl-6">Stronger Relationships.</p>
                        </div>
                    </div>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">SPIRITUAL MEDITATION</h3>
                            <p class="pl-6">Spiritual meditation releases and settles our thoughts and emotions.</p>
                            <p class="pl-6">It relaxes your nervous system and helps your body unwind from stress.</p>
                            <p class="pl-6">It helps you to let go of the past and sink in peace.</p>
                        </div>
                    </div>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <h3 class="text-2xl pl-6">FOCUSED MEDITATION</h3>
                            <p class="pl-6">Reduce stress, anxiety, and depression.</p>
                            <p class="pl-6">Increase focus and learning concentration.</p>
                            <p class="pl-6">Improve memory and attention span.</p>
                        </div>
                    </div>
                </div>
                <div id="mealModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">Healthy Meal</h2>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <p class="pl-6">Water. Drink 8 to 12 cups of water daily.</p>
                            <p class="pl-6">Dark Green Vegetables. Eat dark green vegetables at least three to four times a week.</p>
                            <p class="pl-6">Whole Grains. Eat whole grains sat least two or three times daily. </p>
                            <p class="pl-6">Beans and Lentils. Try to eat a bean-based meal at least once a week. </p>
                        </div>
                    </div>
                    
                </div>
                <div id="musicModel" class="w-[700px] h-[90vh] mt-[5vh] bg-white mx-auto p-4 shadow-md hidden">
                    <button class="float-right" onclick="closeModel()">X</button>
                    <h2 class="text-2xl text-center">Healthy Meal</h2>
                    <div class=" flex px-2">
                        <img class="h-28" src="/assets/hathayoga.svg" alt="yoga">
                        <div>
                            <p class="pl-6">Water. Drink 8 to 12 cups of water daily.</p>
                            <p class="pl-6">Dark Green Vegetables. Eat dark green vegetables at least three to four times a week.</p>
                            <p class="pl-6">Whole Grains. Eat whole grains sat least two or three times daily. </p>
                            <p class="pl-6">Beans and Lentils. Try to eat a bean-based meal at least once a week. </p>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="px-80">
                <!-- <button type="button" onclick="next()" class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Next
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
                </button> -->
            </div>
        </div>
    </section>

    <!-- <script src="/db/questions.json"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="/scripts/adhd.js"></script> -->
    <script>
        var sites = {!! json_encode($questions) !!};
        console.log(sites);
        var questions = []
        sites.forEach(element => {
            questions.push(element["questions"]);
        });
        console.log(questions);
        // var questions = ["I find it difficult finishing a task or project", "If a task or project requires a lot of thought I will often delay in getting it started",
        //     "I find it difficult to sit still and often fidget or squirm",
        //     "I would describe myself as being ‘on the go’ and feel compelled to do things, as if driven by a motor’",
        //     "I find it hard to remain focused in group settings",
        //     "My mind feels very cluttered and it is hard for me to concentrate on one thing at a time",
        //     "I make decisions quickly and fail to think through the consequences",
        //     "I am often irritable, with a short fuse",
        //     "I have mood swings, sometimes feeling quite high, other times low",
        //     "I often miss what is being said to me in conversations"]

    </script>
    <script src="{{ asset('themes/' . $theme->folder . '/js/script.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/js/solution.js') }}"></script>
</body>

</html>