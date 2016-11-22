<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class ItemController extends Controller
{
    //
    public function index(){
        $client = new Client();
        $EnglishBooksResponse = $client->request('GET', 'http://localhost/provider1/book');
        $PolishBooksResponse = $client->request('GET', 'http://localhost/provider2/book'); 

        $EnglishBooks = json_decode($EnglishBooksResponse->getBody(), true);
        $PolishBooks = json_decode($PolishBooksResponse->getBody(), true);
        $items = array_merge($this->convertEnglishBooks($EnglishBooks), $this->convertPolishBooks($PolishBooks));
        shuffle($items);
        return response()->json($items);

    }
    
    public function show($id){
        return response()->json([]);
    }

    private function convertEnglishBooks($EnglishBooks){
        $result = [];
        foreach ($EnglishBooks as $book){
            $item = [
                'provider_item_id' => $book['id'],
                'tytul' => $book['title'],
                'autorzy' => $book['authors'],
                'opis' => $book['description'],
                'strony' => $book['pages'],
                'wydawca' => $book['publisher'],
                'typ' => 'book'
            ];
            array_push($result, $item);
        }
        return $result;
    }
    private function convertPolishBooks($PolishBooks){
        $result = [];
        foreach ($PolishBooks as $book){
            $item = [
                'provider_item_id' => $book['id'],
                'tytul' => $book['tytul'],
                'autorzy' => $book['autor'],
                'opis' => $book['krotki_opis'],
                'strony' => $book['liczba_stron'],
                'wydawca' => $book['wydawca'],
                'typ' => 'book2'
            ];
            array_push($result, $item);
        }
        return $result;
    }
}
