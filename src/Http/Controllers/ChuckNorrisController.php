<?php


namespace Irvandindaprakoso\ChuckNorrisJokes\Http\Controllers;


use Irvandindaprakoso\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}