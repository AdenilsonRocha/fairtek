<?php 
class Granja{
    private $id;
    private $tb_fazendas_id;
    private $tb_veterinatios_id;
    private $nutricionista_id;
    private $gerentes_id;
    private $opreadores_id;
    private $tb_geneticas_id;
    private $tb_produtores_id;
    private $nome;
    private $localizacoa;
    private $endereco;
    private $modulo_de_producao;
    private $codigo;
    private $updated;
    private $created;
    private $excluido;
    private $ativo;

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
     * Get the value of tb_fazendas_id
     */ 
    public function getTb_fazendas_id()
    {
        return $this->tb_fazendas_id;
    }

    /**
     * Set the value of tb_fazendas_id
     *
     * @return  self
     */ 
    public function setTb_fazendas_id($tb_fazendas_id)
    {
        $this->tb_fazendas_id = $tb_fazendas_id;

        return $this;
    }

    /**
     * Get the value of tb_veterinatios_id
     */ 
    public function getTb_veterinatios_id()
    {
        return $this->tb_veterinatios_id;
    }

    /**
     * Set the value of tb_veterinatios_id
     *
     * @return  self
     */ 
    public function setTb_veterinatios_id($tb_veterinatios_id)
    {
        $this->tb_veterinatios_id = $tb_veterinatios_id;

        return $this;
    }

    /**
     * Get the value of nutricionista_id
     */ 
    public function getNutricionista_id()
    {
        return $this->nutricionista_id;
    }

    /**
     * Set the value of nutricionista_id
     *
     * @return  self
     */ 
    public function setNutricionista_id($nutricionista_id)
    {
        $this->nutricionista_id = $nutricionista_id;

        return $this;
    }

    /**
     * Get the value of gerentes_id
     */ 
    public function getGerentes_id()
    {
        return $this->gerentes_id;
    }

    /**
     * Set the value of gerentes_id
     *
     * @return  self
     */ 
    public function setGerentes_id($gerentes_id)
    {
        $this->gerentes_id = $gerentes_id;

        return $this;
    }

    /**
     * Get the value of opreadores_id
     */ 
    public function getOpreadores_id()
    {
        return $this->opreadores_id;
    }

    /**
     * Set the value of opreadores_id
     *
     * @return  self
     */ 
    public function setOpreadores_id($opreadores_id)
    {
        $this->opreadores_id = $opreadores_id;

        return $this;
    }

    /**
     * Get the value of tb_geneticas_id
     */ 
    public function getTb_geneticas_id()
    {
        return $this->tb_geneticas_id;
    }

    /**
     * Set the value of tb_geneticas_id
     *
     * @return  self
     */ 
    public function setTb_geneticas_id($tb_geneticas_id)
    {
        $this->tb_geneticas_id = $tb_geneticas_id;

        return $this;
    }

    /**
     * Get the value of tb_produtores_id
     */ 
    public function getTb_produtores_id()
    {
        return $this->tb_produtores_id;
    }

    /**
     * Set the value of tb_produtores_id
     *
     * @return  self
     */ 
    public function setTb_produtores_id($tb_produtores_id)
    {
        $this->tb_produtores_id = $tb_produtores_id;

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
     * Get the value of localizacoa
     */ 
    public function getLocalizacoa()
    {
        return $this->localizacoa;
    }

    /**
     * Set the value of localizacoa
     *
     * @return  self
     */ 
    public function setLocalizacoa($localizacoa)
    {
        $this->localizacoa = $localizacoa;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of modulo_de_producao
     */ 
    public function getModulo_de_producao()
    {
        return $this->modulo_de_producao;
    }

    /**
     * Set the value of modulo_de_producao
     *
     * @return  self
     */ 
    public function setModulo_de_producao($modulo_de_producao)
    {
        $this->modulo_de_producao = $modulo_de_producao;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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
}
?>