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
        $note = new Note();
        $note->setUserId(1);
        $note->setIdCat($this->request()->getValue('Note_Category'));
        $note->setNadpis($this->request()->getValue('newNadpis'));
        $note->setPoznamka($this->request()->getValue('newPoznamka'));
        $note->save();

        return $this->redirect($this->url('home.note'));
    }

    public function addNote(): Response
    {
        return $this->html();
    }
}