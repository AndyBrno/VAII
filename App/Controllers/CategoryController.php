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
        $category = new Category();
        $category->setName($this->request()->getValue('newCategory'));
        $category->save();

        return $this->redirect($this->url('home.note'));
    }

    public function createCategory(): Response
    {
        return $this->html();
    }

    public function deleteCategory(): Response
    {
        return $this->html(["categories" => Category::getAll()]);
    }

    public function delete(): Response
    {
        $id = (int)$this->request()->getValue('id');
        $category = Category::getOne($id);
        $category->delete();
        return $this->redirect($this->url('home.note'));
    }
}