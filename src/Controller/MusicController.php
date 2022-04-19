<?php

namespace App\Controller;

use App\Model\MusicManager;

class MusicController extends AbstractController
{
    /**
     * List musics
     */
    public function showList()
    {
        $musicManager = new MusicManager();
        $musicals = $musicManager->musicByGenre();

        return $this->twig->render('Music/list.html.twig', ['musicals' => $musicals]);
    }
}