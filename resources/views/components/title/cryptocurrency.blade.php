

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // const ul = document.querySelector("[data-js=price-ul]");
        getPrice10();
        setTimeout(getPrice10, 1 * 60 * 1000); //2 * 60
    });

    function getPrice10() {
        fetch("https://min-api.cryptocompare.com/data/top/totalvol?limit=10&tsym=USD").
        then(data => data.json()).
        then(res => {
            const priceResponse = res.Data;
            displayPrice(priceResponse);
        });
    }
    //NUMBER COMMAS
    function numberWithCommas(x) {
        x = x.toString();
        var pattern = /(-?\d+)(\d{3})/;
        while (pattern.test(x)) {if (window.CP.shouldStopExecution(0)) break;x = x.replace(pattern, "$1,$2");}window.CP.exitedLoop(0);
        return x;
    }
    //display price
    function displayPrice(coinsList) {
        let priceList;
        let output;
        let oldPriceList = 0;
        let top10Coins = coinsList.map(item => item.CoinInfo.Name).join(",");
        fetch(
            `https://min-api.cryptocompare.com/data/pricemulti?fsyms=${top10Coins}&tsyms=USD,EUR`).

        then(data => data.json()).
        then(price => {
            if (oldPriceList === 0) {
                oldPriceList = price;
                priceList = price;
                displayPriceList(coinsList, priceList, oldPriceList);
            } else {
                priceList = price;
                displayPriceList(coinsList, priceList, oldPriceList);
            }
        });
    }

    function displayPriceList(coinsList, priceList, oldPriceList) {
        console.log(priceList);
        console.log("=================");
        console.log(oldPriceList);
        output = coinsList.map((coin, i) => {
            // console.log(priceList[coin.CoinInfo.Name].USD);
            const coinName = coin.CoinInfo.FullName;
            const coinShortName = coin.CoinInfo.Name;
            let imgPath = coin.CoinInfo.ImageUrl;
            let pricecoin = priceList[coin.CoinInfo.Name].USD;
            const priceDiferents = pricecoin - oldPriceList[coin.CoinInfo.Name].USD;
            console.log(priceDiferents);
            const htmlToDisplay = `
													<li class='coin-list'>
															<div class='coin-container'>
																<img src="https://www.cryptocompare.com${imgPath}" width='45px' heigth='45px'>
																<span class='coin-name'>${coinName}</span>
																<span class='coin-shortname'>(${coinShortName})</span>
																<div class='coin-price'>
																		<span>$${numberWithCommas(pricecoin)}</span>
																</div>
															</div>
													</li>
										`;
            return htmlToDisplay;
        });
        const ul = document.querySelector("[data-js=price-ul]");
        ul.innerHTML = "";
        output.forEach(item => ul.innerHTML += item);
    }
</script>
<style>
    body {
        height: 100vh;
        background: #fff;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .author {
        background: #fd746c;
        background: linear-gradient(to left, #ff9068, #fd746c);
        border-radius: 10px;
    }
    .author a {
        text-decoration: none;
        color: #fff;
        font-family: "Helvetica", open sans;
        font-weight: 900;
        cursor: pointer;
        display: block;
        padding: 1.5rem 2rem;
        letter-spacing: 1.2px;
    }

    .crypto-price--container {
        width: 100vw;
        position: fixed;
        bottom: 0;
    }

    .c-container--ulcontainer {
        background: #f5f5f7;
    }

    .coin-list--ul {
        display: flex;
        min-width: 1000px;
        justify-content: strech;
        -webkit-animation: roll 60s linear alternate infinite none running;
        animation: roll 60s linear alternate infinite none running;
    }
    @-webkit-keyframes roll {
        0% {
            transform: translate(30%);
        }
        100% {
            transform: translate(-280%);
        }
    }
    @keyframes roll {
        0% {
            transform: translate(30%);
        }
        100% {
            transform: translate(-280%);
        }
    }
    .coin-list--ul .coin-container {
        width: 300px;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.3rem 0.5rem;
        font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .coin-list--ul .coin-container img {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 0.5rem;
    }
    .coin-list--ul .coin-container .coin-name,
    .coin-list--ul .coin-container .coin-shortname {
        margin-right: 0.5rem;
        font-weight: 700;
    }
    .coin-list--ul .coin-container .coin-name {
        display: block;
        color: #000;
    }
    .coin-list--ul .coin-container .coin-price {
        color: #333;
        font-weight: 300;
        letter-spacing: 1px;
    }
</style>


<div class="author"><a href="https://leamsigc.com" target="blanc">ISMAEL GARCIA</a></div>
<div class="crypto-price--container">
    <div class="c-container--ulcontainer">
        <ul class="coin-list--ul" data-js="price-ul"></ul>
    </div>
</div>
