<?php

namespace mvc\model\entities;

require_once('Entity.php');

class Account extends Entity
{
    /*private int $id, $isAdmin;
    private string $login, $name, $surname, $email, $pass;
    private bool ;*/

    private $id, $isAdmin;
    private $login, $name, $surname, $email, $pass;

    /**
     * Account constructor.
     * @param int|null $id
     * @param string $login
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param string $pass
     * @param int $isAdmin
     */
    public function __construct(?int $id, string $login, string $name, string $surname, string $email, string $pass, int $isAdmin)
    {
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->pass = $pass;
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return int
     */
    public function getIsAdmin(): int
    {
        return $this->isAdmin;
    }

    /**
     * @param int $isAdmin
     */
    public function setIsAdmin(int $isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }
}