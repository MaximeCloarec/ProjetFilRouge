<?php
class View
{
    private ?string $header;
    private ?string $body;
    private ?string $footer;
    private ?string $message;
    public function __construct(?string $header = null, ?string $body = null, ?string $footer = null, ?string $message = null)
    {
        $this->header = $header;
        $this->body = $body;
        $this->footer = $footer;
        $this->message = $message;
    }

    //GETTER
    public function getHeader(): ?string
    {
        return $this->header;
    }
    public function getBody(): ?string
    {
        return $this->body;
    }
    public function getFooter(): ?string
    {
        return $this->footer;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    //SETTER
    public function setHeader(?string $header): self
    {
        $this->header = $header;
        return $this;
    }
    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }
    public function setFooter(?string $footer): self
    {
        $this->footer = $footer;
        return $this;
    }
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
    
    public function render(): string
    {
        if(empty($_SESSION["status"])){
            $this->setMessage("/GourmetBox/Login");
        }else{
            $this->setMessage("/GourmetBox/Account");
        }
        $this->setHeader(viewHeader($this->getMessage()))->setFooter(viewFooter());
        return $this->header . $this->body . $this->footer;
    }
    public function showAccount()
    {
        ob_start() ?>
        <div class="accountHead">
            <h2 class="fs-1">Mon compte</h2>
            <img class="accountImg" src="https://picsum.photos/200/200" alt="">
            <p class="fs-2"><?php echo $_SESSION["infoTab"]["login_users"] ?></p>
            <p class="fs-2"><?php echo $_SESSION["infoTab"]["name_users"] . " " . $_SESSION["infoTab"]["firstname_users"] ?> </p>
        </div>
        <div class="accountBody">
            <h3 class="fw-bold">Mes coordonnées</h3>
            <p>Pays : <?php echo $_SESSION["infoTab"]["country_users"] ?></p>
            <p>Code postal : <?php echo $_SESSION["infoTab"]["postal_users"] ?></p>
            <p>Ville : <?php echo $_SESSION["infoTab"]["city_users"] ?></p>
            <p>Numéro de rue : <?php echo $_SESSION["infoTab"]["numberstreet_users"] ?></p>
            <div class="accountAction">
                <button onclick="redirection()" class="accountDeconnexion fs-4" href="/GourmetBox/Deconnexion">Se déconnecter</button>
                <form action="" method="post">
                    <button class="accountModify fs-4" formmethod="POST" type="submit" value="<?php echo $_SESSION["infoTab"]["id_users"] ?>" name="modifier">Modifier Information</button>
                </form>
            </div>
        </div>
    <?php
        return ob_get_clean();
    }
    public function modifyAccount()
    {
        ob_start() ?>
        <form action="" method="post">
            <div class="accountHead">
                <h2 class="fs-1">Mon compte</h2>
                <img class="accountImg" src="https://picsum.photos/200/200" alt="">
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
                <p class="fs-2"><?php echo $_SESSION["infoTab"]["login_users"] ?></p>
                <p>Nom :</p><input type="text" value="<?php echo $_SESSION["infoTab"]["name_users"] ?>" name="name_users">
                <p>Prenom :</p><input type="text" value="<?php echo $_SESSION["infoTab"]["firstname_users"] ?>" name="firstname_users">
            </div>
            <div class="accountBody">
                <h3 class="fw-bold">Mes coordonnées</h3>
                <p>Pays : <?php echo $_SESSION["infoTab"]["country_users"] ?></p>
                <p>Code postal : <?php echo $_SESSION["infoTab"]["postal_users"] ?></p> <input type="text" value="<?php echo $_SESSION["infoTab"]["postal_users"] ?>" name="postal_users">
                <p>Ville : <?php echo $_SESSION["infoTab"]["city_users"] ?></p><input type="text" value="<?php echo $_SESSION["infoTab"]["city_users"] ?>" name="city_users">
                <p>Numéro de rue : <?php echo $_SESSION["infoTab"]["numberstreet_users"] ?></p><input type="text" value="<?php echo $_SESSION["infoTab"]["numberstreet_users"] ?>" name="numberstreet_users">
                <div class="accountAction">
                    <button class="accountModifiy fs-4" type="sumbit" value="<?php echo $_SESSION["infoTab"]["id_users"] ?>" name="valider">Valider</button>
                </div>
            </div>
        </form>
<?php
        return ob_get_clean();
    }
}
