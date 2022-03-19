<div class="flex items-center justify-center px-5 py-5 pb-10" x-data="beer()" x-init="start()">
    <div class="text-yellow-100">
        <h1 class="text-4xl text-center mb-3 font-boldao text-white">NFT sale start in</h1>
        <div class="text-6xl text-center flex w-full items-center justify-center">
            <div class="w-24 mx-1 p-2 bg-white text-dao rounded-lg">
                <div class="font-mono leading-none" x-text="days">00</div>
                <div class="font-lightdao uppercase text-sm leading-none text-blackdao">Days</div>
            </div>
            <div class="w-24 mx-1 p-2 bg-white text-dao rounded-lg">
                <div class="font-mono leading-none" x-text="hours">00</div>
                <div class="font-lightdao uppercase text-sm leading-none text-blackdao">Hours</div>
            </div>
            <div class="w-24 mx-1 p-2 bg-white text-dao rounded-lg">
                <div class="font-mono leading-none" x-text="minutes">00</div>
                <div class="font-lightdao uppercase text-sm leading-none text-blackdao">Minutes</div>
            </div>
            <div class="w-24 mx-1 p-2 bg-white text-dao rounded-lg">
                <div class="font-mono leading-none" x-text="seconds">00</div>
                <div class="font-lightdao uppercase text-sm leading-none text-blackdao">Seconds</div>
            </div>
        </div>
    </div>
</div>

<script>
function beer() {
    return {
        seconds: '00',
        minutes: '00',
        hours: '00',
        days: '00',
        distance: 0,
        countdown: null,
        beerTime: new Date('May 1, 2022 00:00:00').getTime(),
        now: new Date().getTime(),
        start: function() {
            this.countdown = setInterval(() => {
                // Calculate time
                this.now = new Date().getTime();
                this.distance = this.beerTime - this.now;
                // Set Times
                this.days = this.padNum( Math.floor(this.distance / (1000*60*60*24)) );
                this.hours = this.padNum( Math.floor((this.distance % (1000*60*60*24)) / (1000*60*60)) );
                this.minutes = this.padNum( Math.floor((this.distance % (1000*60*60)) / (1000*60)) );
                this.seconds = this.padNum( Math.floor((this.distance % (1000*60)) / 1000) );
                // Stop
                if (this.distance < 0) {
                    clearInterval(this.countdown);
                    this.days = '00';
                    this.hours = '00';
                    this.minutes = '00';
                    this.seconds = '00';
                }
            },100);
        },
        padNum: function(num) {
            var zero = '';
            for (var i = 0; i < 2; i++) {
                zero += '0';
            }
            return (zero + num).slice(-2);
        }
    }
}
</script>
