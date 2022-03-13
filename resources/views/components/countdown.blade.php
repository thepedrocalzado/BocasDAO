
<div class="visible xs:invisible  bg-yellow-600 pt-5 static  pb-5" id="passport">
    <div class="md:max-w-6xl md:mx-auto  ">
        <p class="text-white leading-tight font-boldao text-5xl mb-4 ml-4 text-left justify-left">
            Countdown to open BocasDAO
        </p>
    </div>
    <div class="md:max-w-3xl md:mx-auto ">
        <div class="text-center items-center justify-center content-center mx-auto">
            <div class="flex gap-5 text-center items-center justify-center content-center mx-auto" >
                <div id="days" class="flex text-[100px] md:text-2lg mr-12 font-boldao text-blackdao">
                    <span class="ml-22 pl-12"></span>
                </div>
                <div id="hours" class="flex text-[100px] mr-12 font-boldao text-blackdao"></div>
                <div id="minutes" class="flex text-[100px] mr-12 font-boldao text-blackdao"></div>
                <div id="seconds" class="flex text-[100px] mr-12 font-boldao text-blackdao"></div>


            </div>
            <div class="grid grid-cols-4 gap-2 text-center items-center justify-center content-center mx-auto">
                <div class=" uppercase font-boldao">days</div>
                <div class=" uppercase font-boldao">hours</div>
                <div class=" uppercase font-boldao">minutes</div>
                <div class=" uppercase font-boldao ml-14">seconds</div>
            </div>


        </div>
    </div>
</div>


<script>
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(1, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "05/01/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>
