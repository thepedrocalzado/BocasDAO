<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">

        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/5a61dfd9ab.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



        <title>BocasDAO - Terms & Conditions</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <style type="text/css">
        @font-face {
            font-family: font-bold;
            src: url('{{ asset('/fonts/negrita.otf') }}');
        }

        @font-face {
            font-family:  font-light;
            src: url('{{ asset('/fonts/light.otf') }}');
        }
    </style>

    <body class="bg-darkblue">
    @extends('components/footer')
    <div class="bg-white pt-36 pb-20 static p-4  ">
        <div class="lg:max-w-6xl md:m-6 md:mx-auto text-left ">
            <p class="text-black font-light text-base text-gray-400 mb-3">
                Last modified: February 19th, 2022
            </p>
            <p class="text-black font-light xs:text-lg whitespace-pre-line">
            <span class="font-bold">BocasDAO</span> (“<span class="font-bold">We</span>” or “<span class="font-bold">BocasDAO</span>” ) exists to build and operate a boutique hotel in Bocas del Toro with a strong focus towards the crypto community.

                We are offering for sale four types of digital collectibles: The “<span class="font-bold">Passport Refugio</span>”, “<span class="font-bold">Passport Carenero</span>”, “<span class="font-bold">Passport Bocas</span>” and “<span class="font-bold">Passport Panamá</span>”. The purchase of each NFT is a transaction in goods and not a promise to provide, or a guarantee of receipt of, future services from BocasDAO, although BocasDAO will make reasonable efforts to ensure that a DAO comes into existence which allows you to unlock expanded functionality associated with the Passport NFTs.

                You understand and agree that the sale of Passport NFTs grants you no rights and carries with it no guarantee of future performance of any kind by BocasDAO. You are not entitled, as a holder of any Passport NFT, to vote or receive dividends or profits or be deemed the holder of shares of BocasDAO, or any other person by virtue of your ownership of a Passport NFT, nor will anything contained herein be construed to construe on you any of the rights of a shareholder, partner, joint venturer, etc. or any right to vote for the election of directors or upon any matter submitted to shareholders at any meeting thereof, or to give or withhold consent to any corporate action or to receive notice of meetings, or to receive subscription rights to purchase such shares of BocasDAO. BocasDAO may in future offer holders of Passport NFTs the opportunity to participate in massively open online governance via DAO. You agree that the functionality of any DAO established by BocasDAO will be determined by BocasDAO in its sole and absolute discretion.

                You understand that the development of BocasDAO’s business is a significantly risky venture and you acknowledge and assume the risk that BocasDAO may not be able to complete, substantially or in part, the construction of “El Refugio Beach Bungalows, Bocas del Toro” or any other aspect of its operations. Your purchase of an NFT could lead to the complete loss of your money, and no payments will be returned. Passport NFTs will be created and delivered to any purchaser at the sole risk of the purchaser and on an “as-is” basis. Purchaser has not relied on any representations or warranties made by BocasDAO, or any other person outside of the context of these Terms of Sale, including but not limited to conversations of any kind, including but not limited to whether such statements are made through oral or electronic communication, or any White Paper, social media post or website.

                The sale of the Passport NFT is governed by, and these Terms of Sale will be construed in accordance with, Panamanian law, without regard to conflict of laws principles. All disputes with BocasDAO by you or your successors or assigns directly or indirectly arising under or in relation to these Terms of Sale or the NFTS shall be brought and resolved solely and exclusively in final and binding arbitration in Panama City, Panama.

                CLASS ACTION WAIVER: TO THE EXTENT PERMISSIBLE BY LAW, ALL CLAIMS MUST BE BROUGHT IN A PARTY’S INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS, COLLECTIVE ACTION, OR REPRESENTATIVE PROCEEDING. THE ARBITRATOR MAY NOT CONSOLIDATE MORE THAN ONE PERSON'S CLAIMS OR ENGAGE IN ANY CLASS ARBITRATION. YOU ACKNOWLEDGE THAT, BY AGREEING TO THESE TERMS, YOU AND BOCASDAO ARE EACH WAIVING THE RIGHT TO A TRIAL BY A JUDGE OR A JURY IN A PUBLIC FORUM AND THE RIGHT TO PARTICIPATE IN A CLASS ACTION.

                Without prejudice to any other provision of these Terms of Sale, you acknowledge and agree that, except in the case of BocasDAO’s fraud or wilful default, and except as otherwise required by any non-waivable provision of applicable law, BocasDAO shall not be liable in any manner whatsoever to you or any other person for losses or damages of any kind, whether arising in contract, tort, or otherwise, arising from the sale of Passport NFTs to any person.

                All purchases of any Passport NFT are final and nonrefundable.

                <span class="font-bold">If you have any questions please contact BocasDAO at <a class="hover:underline text-dao" href="mailto:contact@bocasdao.finance">contact@bocasdao.finance</a></span>
            </p>
        </div>
    </div>


    @extends('components/navbar')


    </body>
</html>
