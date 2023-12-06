<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Category;

class CategoryController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        // TODO: Implement index() method.
        return $this->html();
    }

    public function edit(): Response
    {
        return $this->html();
    }

    public function save(): Response
    {
        $post = new Category();
        $post->setName($this->request()->getValue('newCategory'));
        $post->save();

        return $this->redirect($this->url('home.note'));
    }

    public function createCategory(): Response
    {
        return $this->html();
    }
}