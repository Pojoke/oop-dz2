<?php

class User {
    private string $login;
    private string $password;

    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getPassword(): string {
        return $this->password;
    }
}

class UserCollection {
    private array $users = [];

    public function addUser(User $user): void {
        foreach ($this->users as $existingUser) {
            if ($existingUser->getLogin() === $user->getLogin()) {
                echo "Користувач  '{$user->getLogin()}'зареєстрований\n";
                return;
            }
        }
        $this->users[] = $user;
    }

    public function getUser(string $login): ?User {
        foreach ($this->users as $user) {
            if ($user->getLogin() === $login) {
                return $user;
            }
        }
        return null;
    }

    public function getAllUsers(): array {
        return $this->users;
    }

    public function deleteUser(string $login): void {
        foreach ($this->users as $index => $user) {
            if ($user->getLogin() === $login) {
                unset($this->users[$index]);
                $this->users = array_values($this->users); 
                echo "Користувач '{$login}' видален.\n";
                return;
            }
        }
        echo "Користувач '{$login}' не знайдений!\n";
    }

    public function isValid(string $login, string $password): bool {
        foreach ($this->users as $user) {
            if ($user->getLogin() === $login && $user->getPassword() === $password) {
                return true;
            }
        }
        return false;
    }

    public function __toString(): string {
        $logins = array_map(fn($user) => $user->getLogin(), $this->users);
        return implode(", ", $logins);
    }
}



?>
