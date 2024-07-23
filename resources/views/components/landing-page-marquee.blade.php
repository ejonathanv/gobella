<div x-data="{
        marquee(selector, speed) {
            const parentSelector = document.querySelector(selector);
            const clone = parentSelector.innerHTML;
            const firstElement = parentSelector.children[0];
            let i = 0;
            parentSelector.insertAdjacentHTML('beforeend', clone);
            parentSelector.insertAdjacentHTML('beforeend', clone);

            setInterval(function() {
                firstElement.style.marginLeft = `-${i}px`;
                if (i > firstElement.clientWidth) {
                    i = 0;
                }
                i = i + speed;
            }, 0);
        },
    }" x-init="marquee('.marquee', .2)">
    <div>
        <div class="marquee">
            <h2 class="text-7xl text-green-600 opacity-10 font-bold px-4 py-4">
                Go Bell is the best product in the market. Get it now for $99
            </h2>
        </div>
    </div>
</div>