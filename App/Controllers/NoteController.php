<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Note;

/**
 *  @var \App\Core\IAuthenticator $auth
 */

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
        $note->setUserId(7);
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

    public function editNote(): Response
    {
        return $this->html(["notes" => Note::getAll()]);
    }

    public function edit(): Response
    {
        $id = (int)$this->request()->getValue('id');
        $note = Note::getOne($id);
        $note->setPoznamka("asdsssssssssssffdsdads");
        $note->save();
        return $this->redirect($this->url('home.note'));
    }
}