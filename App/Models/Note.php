<?php

namespace App\Models;

use App\Core\Model;

class Note extends Model
{
    protected ?int $id;
    protected ?int $user_id;
    protected ?int $id_cat;
    protected ?string $nadpis;
    protected ?string $poznamka;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getIdCat(): ?int
    {
        return $this->id_cat;
    }

    public function setIdCat(?int $id_cat): void
    {
        $this->id_cat = $id_cat;
    }

    public function getNadpis(): ?string
    {
        return $this->nadpis;
    }

    public function setNadpis(?string $nadpis): void
    {
        $this->nadpis = $nadpis;
    }

    public function getPoznamka(): ?string
    {
        return $this->poznamka;
    }

    public function setPoznamka(?string $poznamka): void
    {
        $this->poznamka = $poznamka;
    }



}