<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap');

    :root{
        --primary-soft: hsl(215, 51%, 70%);
        --primary-cyan: hsl(178, 100%, 50%);
        --neutral-mainBG: hsl(217, 54%, 11%);
        --neutral-cardBG: hsl(216, 50%, 16%);
        --neutral-line: hsl(215, 32%, 27%);
        --color-shadow: rgba(255, 243, 249, 0.12)
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: 'Outfit';
        background-color:var(--neutral-mainBG);
    }
    .nft{
        width:100%;
        border-radius:25px
    }

    h2{
        color: #ffff;
        margin: 10px 0;
    }

    p{
        font-width:300px;
        color:var(--primary-soft);
        margin:0 0 10px 0;
    }

    a{
        color: white;
    }

    .card{
        width:400px;
        height:auto;
        justify-content:center;
        background-color:var(--neutral-cardBG);
        box-shadow:10px 5px 50px 15px var(--color-shadow);
        border-radius: 20px;
        margin:auto;
        padding: 15px 20px;

    }
    .container{
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }

    .info-nft{
        display:flex;
        padding: 10px 5px;
        justify-content:space-between;
    }
    .price{
        color: var(--primary-cyan);
        display:flex;
    }
    .price > i{
        margin: 0 5px 0 0;
    }
    .time-left{
        color: var(--primary-soft)
    }

    .container-creator-data{
        display:flex;
        align-items: center;
        justify-content: flex-start;
    }

    #line{
        border-top: 1px solid var(--neutral-line);
        display: block;
        margin: 0 auto 10px 0;
        width: 100%;
        content: "";
    }

    .container-creator-data > i{
        color: var(--primary-soft);
        margin: 0 10px;
    }
    .container-creator-data > a{
        color: inherit;
    }
    .profile{
        border-radius:50%;
        width:70px;
    }





    .attribution {
        font-size: 11px;
        text-align: center;
    }
    .attribution a {
        color: hsl(228, 45%, 44%);
    }


</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="mt-12 mb-12">
    <div class='card'>
        <div class="container text-center">
            <img src="https://www.larazon.es/resizer/eUdlAaViar6ldNv_0ZzrHDdj1z0=/600x400/smart/filters:format(webp):quality(65)/cloudfront-eu-central-1.images.arcpublishing.com/larazon/C3QPAGIE3RBULNY6TPH7GGWBTQ.jpg" class='nft'>
            <h2>Passport Panama #3429</h2>
            <div class="container mx-auto px-2 py-2" x-data="{
            faqs: [
                {
                    question: 'INFORMATION',
                    answer: 'Our most desired NFT includes the processing of a permanent residency in Panama for citizens of Paises Amigos, and in case you want to change your fiscal domicile to Panama, we include in this NFT the right of lodging for 180 days per year. In addition:',
                    isOpen: true,
                },

            ]
        }">
                <div class="leading-loose text-lg ">
                    <template x-for="faq in faqs" class="text-white" :key="faq.question">
                        <div>
                            <button class="w-full font-bold border-b border-white py-3 text-white flex justify-between items-center"
                                    @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))"><!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
                                <div x-text="faq.question"></div>
                                <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
                                </svg>
                                <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z" />
                                </svg>
                            </button>

                            <div class="text-white text-sm mt-2" x-text="faq.answer" x-show="faq.isOpen"></div>
                        </div>
                    </template>

                    <ul class="list-disc text-dao font-boldao ml-12 mr-12 mt-4 text-justify text-sm">
                        <li>Granted accommodation right during the  annual “DAO Retreat Event”</li>
                        <li>2 VIP tickets to the “DAO Retreat Event” </li>
                        <li>Pre-Opening Invitation for 2 Pax</li>
                        <li>2 VIP tickets to the Grand Opening Party</li>
                        <li>Voting rights </li>
                        <li>Access to our exclusive Discord Group</li>

                    </ul>

                </div>
            </div>
            <div class='info-nft'>
                <div class="price">
                    <i class="fab fa-ethereum"></i> 100 ETH
                </div>
                <div class='time-left'>
                    <i class="fa fa-file mr-3"></i> 15 units
                </div>
            </div>
            <div id='line'></div>

        </div>
    </div>
</div>

