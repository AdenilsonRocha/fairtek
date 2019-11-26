<?php 
class EventoParametro{
    private $id;
    private $pti;
    private $pta;
    private $ptp;
    private $ptr;
    private $pts;
    private $ptar;

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
     * Get the value of pti
     */ 
    public function getPti()
    {
        return $this->pti;
    }

    /**
     * Set the value of pti
     *
     * @return  self
     */ 
    public function setPti($pti)
    {
        $this->pti = $pti;

        return $this;
    }

    /**
     * Get the value of pta
     */ 
    public function getPta()
    {
        return $this->pta;
    }

    /**
     * Set the value of pta
     *
     * @return  self
     */ 
    public function setPta($pta)
    {
        $this->pta = $pta;

        return $this;
    }

    /**
     * Get the value of ptp
     */ 
    public function getPtp()
    {
        return $this->ptp;
    }

    /**
     * Set the value of ptp
     *
     * @return  self
     */ 
    public function setPtp($ptp)
    {
        $this->ptp = $ptp;

        return $this;
    }

    /**
     * Get the value of ptr
     */ 
    public function getPtr()
    {
        return $this->ptr;
    }

    /**
     * Set the value of ptr
     *
     * @return  self
     */ 
    public function setPtr($ptr)
    {
        $this->ptr = $ptr;

        return $this;
    }

    /**
     * Get the value of pts
     */ 
    public function getPts()
    {
        return $this->pts;
    }

    /**
     * Set the value of pts
     *
     * @return  self
     */ 
    public function setPts($pts)
    {
        $this->pts = $pts;

        return $this;
    }

    /**
     * Get the value of ptar
     */ 
    public function getPtar()
    {
        return $this->ptar;
    }

    /**
     * Set the value of ptar
     *
     * @return  self
     */ 
    public function setPtar($ptar)
    {
        $this->ptar = $ptar;

        return $this;
    }
}
?>