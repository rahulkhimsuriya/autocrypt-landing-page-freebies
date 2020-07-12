<div class="seaction-testimonials w-full h-full mt-48 pb-20">
    <h2 class="font-bold px-16 py-2 leading-tight text-3xl text-gray-darkest">What<br/>
    Customers Say</h2>

    <div class="mt-20 w-full rounded-lg --testimonials-carousel">
        @foreach(range(1, 5) as $i)
            <div class="px-10 py-12 mx-4 bg-white flex flex-col group hover:bg-primary transition-all ease-in-out duration-500 shadow-lg carousel-cell" style="width: 350px;">
                <span>
                    <svg class="fill-current text-primary group-hover:text-white" width="51" height="43" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M1 1h18v18.947L1 41V1zM32 1h18v18.947L32 41V1z" /></svg>
                </span>

                <blockquote class="text-sm text-gray group-hover:text-white mt-4 flex-1">"I started driving with Uber because I liked the idea that my own car could make me money. After just about a couple weeks, I saw that this was something I wanted to do permanently."</blockquote>

                <p class="text-base text-gray mt-8 group-hover:text-white"><strong class="text-gray-darkest group-hover:text-white">Brandon Roger</strong> / OWW Studio</p>
            </div>
        @endforeach
    </div>
</div>
