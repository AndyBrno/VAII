<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Note;

class NoteController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        // TODO: Implement index() method.
        return $this->html();
    }

    public function save(): Response
    {
        $post = new Note();
        $post->setUserId(1);
        //$post->setIdCat(1);
        $post->setNadpis($this->request()->getValue('newNadpis'));
        $post->setIdCat($this->request()->getValue('Note_Category'));
        $post->setPoznamka($this->request()->getValue('newPoznamka'));
        $post->save();

        return $this->redirect($this->url('home.note'));
    }

    public function addNote(): Response
    {
        return $this->html();
    }
}