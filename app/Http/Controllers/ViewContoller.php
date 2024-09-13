<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViewContoller extends Controller
{
    //
    public function show() {
        $response = Http::get("https://api.jikan.moe/v4/seasons/now");
        $animeList = $response->json()["data"];
        // dump($animeList);

        $recommend = Http::get("https://api.jikan.moe/v4/recommendations/anime");
        $recommendAnime = $recommend->json()["data"];
        return view("welcome",  [
            "recommendAnime" => $recommendAnime,
            "animeList" => $animeList
        ]
    );
}

}
