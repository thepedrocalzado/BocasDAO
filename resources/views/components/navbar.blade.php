<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }

</style>
<div class=" w-screen text-gray-700 bg-darkblue dark-mode:text-white dark-mode:bg-white fixed top-0 animated z-40 shadow-xl	">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="{{ route('welcome') }}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                <img src="{{asset('/img/logo.svg')}}">
            </a>
            <a class="visible md:invisible px-4 py-2 mt-2 ml-5 text-xs font-semibold text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase bold" href="#">{{ __('Passport') }}</a>
            <div class=" xs:invisible relative inline-block text-left ">
                <div class="dropdown inline-block visible lg:invisible">
                    <button class="bg-gray-300 text-gray-700 font-semibold px-3 mt-2 rounded inline-flex items-center">
                                <span class="mr-1">
                                    <i class="fas fa-globe"></i>
                                </span>
                        <svg class="fill-current h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/en">
                                <img src="{{asset("/img/flags/en.png")}}">
                            </a>
                        </li>
                        <li class="">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/de">
                                <img src="{{asset("/img/flags/de.png")}}">
                            </a>
                        </li>
                        <li class="">
                            <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/es">
                                <img src="{{asset("/img/flags/es.png")}}">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 text-white" >
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent  rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-boldao" href="#passport" >{{ __('Passport') }}</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent  rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-boldao" href="#roadmap">{{ __('Road Map') }}</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-boldao" href="#discord">{{ __('Join the community') }}</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-boldao" href="#faqs">{{ __('Faqs') }}</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-boldao" href="#contact">{{ __('Contact') }}</a>
            <a class="visible xs:invisible  px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" href="#">{{ __('Get your passport') }}</a>
                <div class=" relative inline-block text-left">

                        <div class="dropdown inline-block hidden md:block">
                            <button class="bg-gray-300 text-gray-700 font-semibold px-3 mt-2 rounded inline-flex items-center">
                                <span class="mr-1">
                                    <i class="fas fa-globe"></i>
                                </span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                <li class="">
                                    <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/en">
                                        <img src="{{asset("/img/flags/en.png")}}">
                                    </a>
                                </li>
                                <li class="">
                                    <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/de">
                                        <img src="{{asset("/img/flags/de.png")}}">
                                    </a>
                                </li>
                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/lang/es">
                                        <img src="{{asset("/img/flags/es.png")}}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>



        </nav>
    </div>
</div>
