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
}
