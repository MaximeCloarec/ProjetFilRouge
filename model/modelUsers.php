<?php
class Users
{
    private ?View $view;
    private ?int $idUser;
    private ?string $login;
    private ?string $numberstreet;
    private ?string $city;
    private ?string $postal;
    private ?string $country;
    private ?string $status;
    private ?string $name;
    private ?string $firstName;
    public function __construct(?string $login = null, ?string $numberstreet = null, ?string $city = null, ?string $postal = null, ?string $country = null, ?string $status = null, ?string $name = null, ?string $firstName = null, ?int $idUser = null)
    {
        $this->view = new View;
        $this->login = $login;
        $this->numberstreet = $numberstreet;
        $this->city = $city;
        $this->postal = $postal;
        $this->country = $country;
        $this->status = $status;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->idUser = $idUser;
    }
    //GETTER SETTER
    public function getId(): ?int
    {
        return $this->idUser;
    }
    public function setId(int $id): self
    {
        $this->idUser = $id;
        return $this;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
    //GETTER SETTER
    public function getView(): View
    {
        return $this->view;
    }
    public function setView(?View $view): self
    {
        $this->view = $view;
        return $this;
    }
    public function getLogin(): ?string
    {
        return $this->login;
    }
    public function setLogin(?string $login): self
    {
        $this->login = $login;
        return $this;
    }
    public function getNumberstreet(): ?string
    {
        return $this->numberstreet;
    }
    public function setNumberstreet(?string $numberstreet): self
    {
        $this->numberstreet = $numberstreet;
        return $this;
    }
    public function getCity(): ?string
    {
        return $this->city;
    }
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
    public function getPostcode(): ?string
    {
        return $this->postal;
    }
    public function setPostal(?string $postal): self
    {
        $this->postal = $postal;
        return $this;
    }
    public function getCountry(): ?string
    {
        return $this->country;
    }
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }
    public function getStatus(): ?string
    {
        return $this->status;
    }
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    //FUNCTION 
    //INSCRIPTION 
    public function inscription($bdd, $login, $password)
    {
        try {
            $req = $bdd->prepare('INSERT INTO users (login_users,password_users) VALUES (?,?)');
            $req->bindParam(1, $login, PDO::PARAM_STR);
            $req->bindParam(2, $password, PDO::PARAM_STR);
            $req->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function loginDuplicate($bdd, $login)
    {
        try {
            $req = $bdd->prepare('SELECT login_users FROM users WHERE login_users=?');
            $req->bindParam(1, $login, PDO::PARAM_STR);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //LOGIN
    public function loginVerification($bdd, $login)
    {
        $req = $bdd->prepare("SELECT login_users FROM users WHERE login_users=?");
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function userPassword($bdd, $login)
    {
        $req = $bdd->prepare("SELECT password_users FROM users WHERE login_users=?");
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function getInfoLogin($bdd, $login)
    {
        $req = $bdd->prepare("SELECT id_users,login_users,numberstreet_users,city_users,postal_users,country_users FROM users WHERE login_users=?");
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function updateToken($bdd, $token, $login_user)
    {
        $req = $bdd->prepare("UPDATE users SET rememberMe_users=? WHERE login_users= ? ");
        $req->bindParam(1, $token, PDO::PARAM_STR);
        $req->bindParam(2, $login_user, PDO::PARAM_STR);
        $req->execute();
    }
    public function updateInfo($bdd)
    {
        try {
            $req = $bdd->prepare("UPDATE users SET numberstreet_users = ?, city_users = ?, postal_users = ?, name_users = ?, firstname_users = ? WHERE id_users = ?");
            $req->bindValue(1, $this->getNumberstreet(), PDO::PARAM_INT);
            $req->bindValue(2, $this->getCity(), PDO::PARAM_STR);
            $req->bindValue(3, $this->getPostcode(), PDO::PARAM_INT);
            $req->bindValue(4, $this->getName(), PDO::PARAM_STR);
            $req->bindValue(5, $this->getFirstName(), PDO::PARAM_STR);
            $req->bindValue(6, $this->getId(), PDO::PARAM_INT);
            $req->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
