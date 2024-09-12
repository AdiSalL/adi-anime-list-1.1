@include('components.navbar')

<div class="">
    <div class="anime-season flex px-5 justify-center max-w-full  bg-gray-200 ">
        <div class="wrapper p-[35px] relative overflow-x-auto max-w-full h-full">
            <div class="icon absolute top-0 h-[100%] w-[120px] flex items-center left-0" id="left">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                  </svg>
            </div>
            <ul class="list-anime overflow-x-hidden flex gap-[12px] " style="scroll-behavior: smooth"> 
                @foreach ($animeList as $index => $anime)
                <li class="">
                    <img src="{{$anime["images"]["jpg"]["image_url"]}}" >
                </li>
                @endforeach
            </ul>
            <div class="icon absolute top-0 h-[100%] w-[120px] flex items-center justify-end right-0" id="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg>
            </div>
        </div>
    </div>
</div>



