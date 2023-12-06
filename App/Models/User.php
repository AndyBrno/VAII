<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    protected ?int $id;
    protected ?string $nick;
    protected ?string $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(?string $nick): void
    {
        $this->nick = $nick;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }


}