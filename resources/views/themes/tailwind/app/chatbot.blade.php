@extends('theme::layouts.app')

@section('content')

<section id="tests" class="text-gray-600 body-font">
    <div x-data="chatBot()" class="w-8/12 mx-auto ">
        <div class="flex-1 p:2 sm:p-6 h-[600px] justify-between flex flex-col bg-slate-200">
            <div id="chatBox" class="h-full w-full bg-green-40s0 flex flex-col-reverse">
                <div class="flex">
                    <div class="flex w-full">
                        <img class="h-10" src="https://cdn.icon-icons.com/icons2/1371/PNG/512/robot02_90810.png" alt="" srcset="">
                        <div class=" bg-white min-w-20 px-2 py-2 ml-5 rounded-r-lg rounded-tl-lg">
                            Hello World!
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex">
                        <div class=" bg-white min-w-20 px-2 py-2 mr-5 rounded-l-lg rounded-tr-lg">
                            Hello World!
                        </div>
                        <div class="bg-blue-600 p-2 rounded-full">
                            <svg class="h-7 w-7" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg>
                        </div>
                    </div>
                </div>

            </div>
            <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
                
                
            </div>
            <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
                <div class="relative flex">
                    <input id="messageBox" name="messageBox" type="text" placeholder="Say something..." autocomplete="off" autofocus="true" @keydown.enter="updateChat($event.target)" class="text-md w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-5 pr-16 bg-gray-100 border-2 border-gray-200 focus:border-blue-500 rounded-full py-2" x-ref="input" />
                    <div class="absolute right-2 items-center inset-y-0 hidden sm:flex">
                        <button onclick="sendMessage()" type="button" class="inline-flex items-center justify-center rounded-full h-8 w-8 transition duration-200 ease-in-out text-blue-600  hover:bg-blue-600s focus:outline-none" @click.prevent="updateChat($refs.input)">
                            <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M4.02 42L46 24 4.02 6 4 20l30 4-30 4z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="div" class="hidden"></div>
</section>

<script src="{{ asset('themes/' . $theme->folder . '/js/jquery.min.js') }}"></script>
<script src="{{ asset('themes/' . $theme->folder . '/js/chatbot.js') }}"></script>


@endsection