<?php 
class AnimaisMovimentacao{
    private $id;
    private $tb_animal_id;
    private $tb_dieta_id;
    private $dt_inseminacao;
    private $calendario_porco;
    private $dt_movimentacao;
    private $tb_setor_tipo_id;
    private $tb_score_id;
    private $tb_baias_id;
    private $tb_tempo_dosagem;
    private $tb_crated;

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
     * Get the value of tb_animal_id
     */ 
    public function getTb_animal_id()
    {
        return $this->tb_animal_id;
    }

    /**
     * Set the value of tb_animal_id
     *
     * @return  self
     */ 
    public function setTb_animal_id($tb_animal_id)
    {
        $this->tb_animal_id = $tb_animal_id;

        return $this;
    }

    /**
     * Get the value of tb_dieta_id
     */ 
    public function getTb_dieta_id()
    {
        return $this->tb_dieta_id;
    }

    /**
     * Set the value of tb_dieta_id
     *
     * @return  self
     */ 
    public function setTb_dieta_id($tb_dieta_id)
    {
        $this->tb_dieta_id = $tb_dieta_id;

        return $this;
    }

    /**
     * Get the value of dt_inseminacao
     */ 
    public function getDt_inseminacao()
    {
        return $this->dt_inseminacao;
    }

    /**
     * Set the value of dt_inseminacao
     *
     * @return  self
     */ 
    public function setDt_inseminacao($dt_inseminacao)
    {
        $this->dt_inseminacao = $dt_inseminacao;

        return $this;
    }

    /**
     * Get the value of calendario_porco
     */ 
    public function getCalendario_porco()
    {
        return $this->calendario_porco;
    }

    /**
     * Set the value of calendario_porco
     *
     * @return  self
     */ 
    public function setCalendario_porco($calendario_porco)
    {
        $this->calendario_porco = $calendario_porco;

        return $this;
    }

    /**
     * Get the value of dt_movimentacao
     */ 
    public function getDt_movimentacao()
    {
        return $this->dt_movimentacao;
    }

    /**
     * Set the value of dt_movimentacao
     *
     * @return  self
     */ 
    public function setDt_movimentacao($dt_movimentacao)
    {
        $this->dt_movimentacao = $dt_movimentacao;

        return $this;
    }

    /**
     * Get the value of tb_setor_tipo_id
     */ 
    public function getTb_setor_tipo_id()
    {
        return $this->tb_setor_tipo_id;
    }

    /**
     * Set the value of tb_setor_tipo_id
     *
     * @return  self
     */ 
    public function setTb_setor_tipo_id($tb_setor_tipo_id)
    {
        $this->tb_setor_tipo_id = $tb_setor_tipo_id;

        return $this;
    }

    /**
     * Get the value of tb_score_id
     */ 
    public function getTb_score_id()
    {
        return $this->tb_score_id;
    }

    /**
     * Set the value of tb_score_id
     *
     * @return  self
     */ 
    public function setTb_score_id($tb_score_id)
    {
        $this->tb_score_id = $tb_score_id;

        return $this;
    }

    /**
     * Get the value of tb_baias_id
     */ 
    public function getTb_baias_id()
    {
        return $this->tb_baias_id;
    }

    /**
     * Set the value of tb_baias_id
     *
     * @return  self
     */ 
    public function setTb_baias_id($tb_baias_id)
    {
        $this->tb_baias_id = $tb_baias_id;

        return $this;
    }

    /**
     * Get the value of tb_tempo_dosagem
     */ 
    public function getTb_tempo_dosagem()
    {
        return $this->tb_tempo_dosagem;
    }

    /**
     * Set the value of tb_tempo_dosagem
     *
     * @return  self
     */ 
    public function setTb_tempo_dosagem($tb_tempo_dosagem)
    {
        $this->tb_tempo_dosagem = $tb_tempo_dosagem;

        return $this;
    }

    /**
     * Get the value of tb_crated
     */ 
    public function getTb_crated()
    {
        return $this->tb_crated;
    }

    /**
     * Set the value of tb_crated
     *
     * @return  self
     */ 
    public function setTb_crated($tb_crated)
    {
        $this->tb_crated = $tb_crated;

        return $this;
    }
}
?>