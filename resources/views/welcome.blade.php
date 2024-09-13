@include('components.navbar')

<div class="">
    <div class="anime-season flex px-5 justify-center max-w-full ">
        <div class="wrapper p-[35px] relative overflow-x-auto max-w-full h-full">
        <div class="mb-2">
            <h1 class="text-lg font-bold">Anime On This Season</h1>
        </div>
            <div class="icon absolute top-0 h-[100%] w-[120px]  flex items-center left-0 cursor-pointer" id="left">
                <svg class="hover:bg-gray-100 hover:text-black rounded transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
            </div>
            <ul class="list-anime overflow-x-hidden flex gap-[12px] " style="scroll-behavior: smooth"> 
                @foreach ($animeList as $index => $anime)
                <li class="min-w-[200px] relative group">
                    <a href="#">
                        <img src="{{$anime["images"]["jpg"]["image_url"]}}" class="group-hover:opacity-50 transition-all" width="300" height="400">
                        <div class="bg-transparent opacity-0 group-hover:opacity-100">
                            <p class="p-2 absolute bottom-0 text-lg text-white font-bold">{{$anime["title"]}}</p>
                        </div>
                    </a>
                 
                </li>
                @endforeach
            </ul>
            <div class="icon absolute top-0 h-[100%] w-[120px] flex items-center justify-end right-0" id="right">
                <svg class="hover:bg-gray-100 hover:text-black rounded transition-all" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg>
            </div>
        </div>
    </div>

    <main class="">
    <div class="anime-recommend flex px-5 justify-center max-w-full ">
        <div class="wrapper p-[35px] relative overflow-x-auto max-w-full h-full">
            <div class="mb-2">
                <h1 class="text-lg font-bold">Anime Recommendation</h1>
            </div>
            <ul class="list-anime"> 
                    @foreach($recommendAnime as $index => $anime) 
                        @if($index < 15)  
                        <li class="min-w-[200px] relative group">
                            <img src="{{$anime["entry"][0]["images"]["jpg"]["image_url"]}}" alt="">
                            <p>{{$anime["entry"][0]["title"]}}</p>
                        </li>
                        @endif
                    @endforeach
            </ul>
        </div>
    </div>
    </main>
    <div class="top-anime"></div>

</div>

<script>
    const tabsBox = document.querySelector(".list-anime");

    let arrowIcons = document.querySelectorAll(".icon svg");



    let isDragging = false;

    const handleIcons = (scrollVal) => {
        let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
        arrowIcons[0].parentElement.style.display = scrollVal < 0 ? "none" : "flex";
        arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal < 1 ? "none" : "flex";
    };

    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () =>  {
            let scrollWidth = tabsBox.scrollLeft += icon.parentElement.id === "left" ? -340 : 340;
            handleIcons(scrollLeft);
        }
    )
    });

</script>

