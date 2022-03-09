<div id="panama">
    <section class="bg-darkblue p-5 mx-5 rounded-xl max-w-xs shadow-2xl " id="refugio">
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
                <button onclick="toggleModal('ps-refugio')" class="block text-white my-4 font-boldao text-2xl hover:text-cyan-400">
                    Passport Refugio
                    <i class="fa-solid fa-circle-info text-dao ml-3 hover:text-white"></i>
                </button>

            </div>

        </h1>


        <p class="text-soft-blue font-lightdao text-base">
            Our most desired NFT includes the processing of a permanent residency in Panama for citizens of Paises Amigos, and in case you want to change your fiscal domicile to Panama, we include in this NFT the right of lodging for 180 days per year.
        </p>

        <div class="flex justify-between items-center mt-4">
            <div class="flex text-cyan space-x-2">
                <img src="{{asset("/img/icons/eth.svg")}}" alt="ethereum icon" />
                <p class="font-boldao">0,5 ETH</p>
            </div>
            <div class="flex items-center text-soft-blue space-x-2 whitespace-nowrap">
                <p class="font-boldao">500 <p class="text-xs font-boldao">units</p></p>
            </div>
        </div>

        <hr class=" mt-3" />

        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center rounded-xl" id="ps-refugio">
            <div class="main-modal-refugio fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster rounded-xl"
                 style="background: rgba(0,0,0,.7);">
                <div
                    class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                        <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Header</p>
                            <button class="cursor-pointer z-50" onclick="toggleModal('ps-refugio')">
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
                            <ul class="list-reset font-bold text-black mb-8 p-8 text-grey-darker rounded shadow-lg">
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
                        <!--Footer-->
                        <div class="flex justify-end pt-2">
                            <a href="https://opensea.io/assets/0x495f947276749ce646f68ac8c248420045cb7b5e/10476208371703460535276576839065665727776608392811958092550952984407133126657" class="focus:outline-none px-4 bg-lightgreen p-3 ml-3 rounded-lg font-boldao text-white">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
