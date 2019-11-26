<?php 
 class Usuarios{
     private $id;
     private $tb_granja_id;
     private $nome;
     private $email;
     private $admin;
     private $senha;
     private $updated;
     private $created;
     private $excluido;
     private $ativo;
     private $image;
     private $lest_login;
     private $esqueceu_senha;
     private $tb_acl_grupos_id;
     //asr

     /**
      * Get the value of id
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

     /**
      * Get the value of tb_granja_id
      */ 
     public function getTb_granja_id()
     {
          return $this->tb_granja_id;
     }

     /**
      * Set the value of tb_granja_id
      *
      * @return  self
      */ 
     public function setTb_granja_id($tb_granja_id)
     {
          $this->tb_granja_id = $tb_granja_id;

          return $this;
     }

     /**
      * Get the value of nome
      */ 
     public function getNome()
     {
          return $this->nome;
     }

     /**
      * Set the value of nome
      *
      * @return  self
      */ 
     public function setNome($nome)
     {
          $this->nome = $nome;

          return $this;
     }

     /**
      * Get the value of email
      */ 
     public function getEmail()
     {
          return $this->email;
     }

     /**
      * Set the value of email
      *
      * @return  self
      */ 
     public function setEmail($email)
     {
          $this->email = $email;

          return $this;
     }

     /**
      * Get the value of admin
      */ 
     public function getAdmin()
     {
          return $this->admin;
     }

     /**
      * Set the value of admin
      *
      * @return  self
      */ 
     public function setAdmin($admin)
     {
          $this->admin = $admin;

          return $this;
     }

     /**
      * Get the value of senha
      */ 
     public function getSenha()
     {
          return $this->senha;
     }

     /**
      * Set the value of senha
      *
      * @return  self
      */ 
     public function setSenha($senha)
     {
          $this->senha = $senha;

          return $this;
     }

     /**
      * Get the value of updated
      */ 
     public function getUpdated()
     {
          return $this->updated;
     }

     /**
      * Set the value of updated
      *
      * @return  self
      */ 
     public function setUpdated($updated)
     {
          $this->updated = $updated;

          return $this;
     }

     /**
      * Get the value of created
      */ 
     public function getCreated()
     {
          return $this->created;
     }

     /**
      * Set the value of created
      *
      * @return  self
      */ 
     public function setCreated($created)
     {
          $this->created = $created;

          return $this;
     }

     /**
      * Get the value of excluido
      */ 
     public function getExcluido()
     {
          return $this->excluido;
     }

     /**
      * Set the value of excluido
      *
      * @return  self
      */ 
     public function setExcluido($excluido)
     {
          $this->excluido = $excluido;

          return $this;
     }

     /**
      * Get the value of ativo
      */ 
     public function getAtivo()
     {
          return $this->ativo;
     }

     /**
      * Set the value of ativo
      *
      * @return  self
      */ 
     public function setAtivo($ativo)
     {
          $this->ativo = $ativo;

          return $this;
     }

     /**
      * Get the value of image
      */ 
     public function getImage()
     {
          return $this->image;
     }

     /**
      * Set the value of image
      *
      * @return  self
      */ 
     public function setImage($image)
     {
          $this->image = $image;

          return $this;
     }

     /**
      * Get the value of lest_login
      */ 
     public function getLest_login()
     {
          return $this->lest_login;
     }

     /**
      * Set the value of lest_login
      *
      * @return  self
      */ 
     public function setLest_login($lest_login)
     {
          $this->lest_login = $lest_login;

          return $this;
     }

     /**
      * Get the value of esqueceu_senha
      */ 
     public function getEsqueceu_senha()
     {
          return $this->esqueceu_senha;
     }

     /**
      * Set the value of esqueceu_senha
      *
      * @return  self
      */ 
     public function setEsqueceu_senha($esqueceu_senha)
     {
          $this->esqueceu_senha = $esqueceu_senha;

          return $this;
     }

     /**
      * Get the value of tb_acl_grupos_id
      */ 
     public function getTb_acl_grupos_id()
     {
          return $this->tb_acl_grupos_id;
     }

     /**
      * Set the value of tb_acl_grupos_id
      *
      * @return  self
      */ 
     public function setTb_acl_grupos_id($tb_acl_grupos_id)
     {
          $this->tb_acl_grupos_id = $tb_acl_grupos_id;

          return $this;
     }
 }
?>