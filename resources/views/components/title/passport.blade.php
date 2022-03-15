

<div class="bg-lightgreen pb-12">

    <div class="bg-lightgreen pt-10 static " id="passport">
        <div class="md:max-w-6xl md:mx-auto text-left justify-left ">
            <p class="text-white leading-tight font-boldao text-5xl mb-10 ml-4">
                The Passport of your choice...
            </p>
        </div>
    </div>

<main class="flex flex-wrap gap-12 md:max-w-4xl  items-center justify-center font-outfit mx-auto ">
    <div id="refugio">
        <section class=" lg:h-[610px] bg-darkblue p-5 mx-5 rounded-xl max-w-xs shadow-2xl " id="refugio" >
            <a href="#" class="group block relative rounded-md overflow-hidden">
                <div class="invisible group-hover:visible absolute inset-0 bg-cyan-100">
                    <img
                        src="{{asset("/img/icons/eye.svg")}}"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="eye icon"
                    />
                </div>
                <img src="{{asset("/img/passports/refugio.jpg")}}" alt="equilibrium" />
            </a>

            <h1>
                <div>
                    <p class=" text-white my-4 font-boldao text-2xl">
                        Passport Refugio
                    </p>

                </div>
                <div class="flex mb-5 mx-auto">
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" onclick="toggleModal('modal-idrefugio')">Benefits</a>
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" href="#">Buy nft</a>
                </div>

            </h1>


            <p class="text-soft-blue font-lightdao text-base">
                Our most economic <span class="text-dao font-boldao">NFT</span> to enter the <span class="text-dao font-boldao">El Refugio Beach Bungalows</span>. This can be your once in a lifetime vacation, or your first step to form part in the <span class="text-dao font-boldao">BocasDAO</span>.            </p>

            <div class="flex justify-between items-center mt-4">
                <div class="flex text-cyan space-x-2">
                    <img src="{{asset("/img/icons/eth.svg")}}" alt="ethereum icon" />
                    <p class="font-boldao">0,5 ETH</p>
                </div>
                <div class="flex items-center text-soft-blue space-x-2 whitespace-nowrap">
                    <p class="font-boldao">500 <p class="text-xs font-boldao uppercase">units</p></p>
                </div>
            </div>

            <hr class=" mt-3" />

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center rounded-xl" id="modal-idrefugio">
                <div class="main-modal-refugio fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster rounded-xl"
                     style="background: rgba(0,0,0,.7);">
                    <div
                        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content py-4 text-left px-6">
                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Header</p>
                                <button class="cursor-pointer z-50" onclick="toggleModal('modal-idrefugio')">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="my-5 text-black">
                                <ul class="list-reset font-boldao text-black mb-8 p-8 text-grey-darker rounded shadow-lg">
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Accommodation right for 1 week (one-time)
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Discounts of future bookings
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 tickets to the “DAO Retreat Event”
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Lottery ticket to win a Carenero Passort NFT
                                    </li>

                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Voting rights
                                    </li>

                                    <li class="flex items-center mb-3 text-lg ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Access to our exclusive Discord Group
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <div id="carenero">
        <section class="lg:h-[610px] bg-darkblue p-5 mx-5 rounded-xl max-w-xs shadow-2xl">
            <a href="#" class="group block relative rounded-md overflow-hidden">
                <div class="invisible group-hover:visible absolute inset-0 bg-cyan-100">
                    <img
                        src="{{asset("/img/icons/eye.svg")}}"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="eye icon"
                    />
                </div>
                <img src="{{asset("/img/passports/refugio.jpg")}}" alt="equilibrium" />
            </a>

            <h1>
                <div>
                    <p class=" text-white my-4 font-boldao text-2xl">
                        Passport Carenero
                    </p>

                </div>
                <div class="flex mb-5 mx-auto">
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" onclick="toggleModal('modal-idcarenero')">Benefits</a>
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" href="#">Buy nft</a>
                </div>

            </h1>


            <p class="text-soft-blue font-lightdao text-base">
                A great way to join the <span class="text-dao font-boldao">BocasDAO</span> and to enjoy your annually vacation between likeminded. Weather you are seeking to participate actively in the <span class="text-dao font-boldao">DAO</span>, or are securing your spot in the crypto getaway, <span class="text-dao font-boldao">Bocas del Toro</span> will cause a simile in your face.            </p>

            <div class="flex justify-between items-center mt-4">
                <div class="flex text-cyan space-x-2">
                    <img src="{{asset("/img/icons/eth.svg")}}" alt="ethereum icon" />
                    <p class="font-boldao">5 ETH</p>
                </div>
                <div class="flex items-center text-soft-blue space-x-2 whitespace-nowrap">
                    <p class="font-boldao">200 <p class="text-xs font-boldao uppercase">units</p></p>
                </div>
            </div>

            <hr class=" mt-3" />

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center rounded-xl" id="modal-idcarenero">
                <div class="main-modal-refugio fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster rounded-xl"
                     style="background: rgba(0,0,0,.7);">
                    <div
                        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content py-4 text-left px-6">
                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Header</p>
                                <button class="cursor-pointer z-50" onclick="toggleModal('modal-idcarenero')">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="my-5 text-black">
                                <ul class="list-reset font-boldao text-black mb-8 p-8 text-grey-darker rounded shadow-lg">
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Accommodation right for 1 week annually                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 tickets to the annual “DAO Retreat Event”
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Lottery Ticket to win Bocas Passport NFT
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Voting rights
                                    </li>

                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Access to our exclusive Discord Group
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <div id="bocas">
        <section class="lg:h-[610px] bg-darkblue p-5 mx-5 rounded-xl max-w-xs shadow-2xl " id="bocas">
            <a href="#" class="group block relative rounded-md overflow-hidden">
                <div class="invisible group-hover:visible absolute inset-0 bg-cyan-100">
                    <img
                        src="{{asset("/img/icons/eye.svg")}}"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="eye icon"
                    />
                </div>
                <img src="{{asset("/img/passports/refugio.jpg")}}" alt="equilibrium" />
            </a>

            <h1>
                <div>
                    <p class=" text-white my-4 font-boldao text-2xl">
                        Passport Bocas
                    </p>

                </div>
                <div class="flex mb-5 mx-auto">
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" onclick="toggleModal('modal-idbocas')">Benefits</a>
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" href="#">Buy nft</a>
                </div>

            </h1>


            <p class="text-soft-blue font-lightdao text-base">
                Wanna spend some more time relaxing in the  <span class="text-dao font-boldao">Caribbean</span>. Two week annually and great community advatages will recharge your batteries. Great surfing, laid back atmosphere, and your crypto friends to party with.
            <div class="flex justify-between items-center mt-4">
                <div class="flex text-cyan space-x-2">
                    <img src="{{asset("/img/icons/eth.svg")}}" alt="ethereum icon" />
                    <p class="font-boldao">10 ETH</p>
                </div>
                <div class="flex items-center text-soft-blue space-x-2 whitespace-nowrap">
                    <p class="font-boldao">100 <p class="text-xs font-boldao uppercase">units</p></p>
                </div>
            </div>

            <hr class=" mt-3" />

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center rounded-xl" id="modal-idbocas">
                <div class="main-modal-refugio fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster rounded-xl"
                     style="background: rgba(0,0,0,.7);">
                    <div
                        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content py-4 text-left px-6">
                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Header</p>
                                <button class="cursor-pointer z-50" onclick="toggleModal('modal-idbocas')">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="my-5 text-black">
                                <ul class="list-reset font-boldao text-black mb-8 p-8 text-grey-darker rounded shadow-lg">
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Accommodation right for 2 week annually
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 VIP tickets to the annual “DAO Retreat Event”
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 VIP tickets to the Grand Opening Party
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Lottery ticket to win a Panama Passport NFT
                                    </li>

                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Voting rights
                                    </li>

                                    <li class="flex items-center mb-3 text-lg ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Access to our exclusive Discord Group
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <div id="panama">
        <section class="lg:h-[610px] bg-darkblue p-5 mx-5 rounded-xl max-w-xs shadow-2xl">
            <a href="#" class="group block relative rounded-md overflow-hidden">
                <div class="invisible group-hover:visible absolute inset-0 bg-cyan-100">
                    <img
                        src="{{asset("/img/icons/eye.svg")}}"
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="eye icon"
                    />
                </div>
                <img src="{{asset("/img/passports/refugio.jpg")}}" alt="equilibrium" />
            </a>

            <h1>
                <div>
                    <p class=" text-white my-4 font-boldao text-2xl">
                        Passport Panamá
                    </p>

                </div>
                <div class="flex mb-5 mx-auto">
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" onclick="toggleModal('modal-idpanama')">Benefits</a>
                    <a class="flex px-4 py-2 mt-2 ml-5 mr-5 text-sm font-boldao text-white bg-lightgreen  rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline uppercase font-bold absolute sticky" href="#">Buy nft</a>
                </div>
            </h1>


            <p class="text-soft-blue font-lightdao text-base">
                Our most desired NFT includes the processing of a permanent residency in Panama for citizens of <a class=" text-dao hover:underline font-boldao uppercase" href="#" >Paises Amigos</a>, and in case you want to change your fiscal domicile to Panama, we include in this NFT the right of lodging for 180 days per year.
            </p>

            <div class="flex justify-between items-center mt-4">
                <div class="flex text-cyan space-x-2">
                    <img src="{{asset("/img/icons/eth.svg")}}" alt="ethereum icon" />
                    <p class="font-boldao">0,5 ETH</p>
                </div>
                <div class="flex items-center text-soft-blue space-x-2 whitespace-nowrap">
                    <p class="font-boldao">15 <p class="text-xs font-boldao">100</p></p>
                </div>
            </div>

            <hr class=" mt-3" />

            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center rounded-xl" id="modal-idpanama">
                <div class="main-modal-refugio fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster rounded-xl"
                     style="background: rgba(0,0,0,.7);">
                    <div
                        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content py-4 text-left px-6">
                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Header</p>
                                <button class="cursor-pointer z-50" onclick="toggleModal('modal-idpanama')">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="my-5 text-black">
                                <ul class="list-reset font-boldao text-black mb-8 p-8 text-grey-darker rounded shadow-lg">
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Granted accommodation right during the annual
                                        “DAO Retreat Event”
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 VIP tickets to the “DAO Retreat Event”
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Pre-Opening Invitation for 2 Pax
                                    </li>
                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        2 VIP tickets to the Grand Opening Party
                                    </li>

                                    <li class="flex items-center mb-3 text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Voting rights
                                    </li>

                                    <li class="flex items-center mb-3 text-lg ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-8 mr-2" viewBox="0 0 24 24" fill="green">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                            /></svg>
                                        Access to our exclusive Discord Group
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main>



    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-care-backdrop"></div>
    <script type="text/javascript">


        function toggleModal(modalIDrefugio){
            document.getElementById(modalIDrefugio).classList.toggle("hidden");
            document.getElementById(modalIDrefugio + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDrefugio).classList.toggle("flex");
            document.getElementById(modalIDrefugio + "-backdrop").classList.toggle("flex");
        }

        function toggleModal(modalIDcarenero){
            document.getElementById(modalIDcarenero).classList.toggle("hidden");
            document.getElementById(modalIDcarenero + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDcarenero).classList.toggle("flex");
            document.getElementById(modalIDcarenero + "-backdrop").classList.toggle("flex");
        }

        function toggleModal(modalIDbocas){
            document.getElementById(modalIDbocas).classList.toggle("hidden");
            document.getElementById(modalIDbocas + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDbocas).classList.toggle("flex");
            document.getElementById(modalIDbocas + "-backdrop").classList.toggle("flex");
        }


        function toggleModal(modalIDpanama){
            document.getElementById(modalIDpanama).classList.toggle("hidden");
            document.getElementById(modalIDpanama + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDpanama).classList.toggle("flex");
            document.getElementById(modalIDpanama + "-backdrop").classList.toggle("flex");
        }





    </script>


</div>




