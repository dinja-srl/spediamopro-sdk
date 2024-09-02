<?php

namespace Dinja\SpediamoProSDK\Request;

use Dinja\SpediamoProSDK\Response\SimulazioneResponse;

class SimulazioneRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $apiPath = '/api/v1/simulazione';

    protected $mandatoryFields = [
        'nazioneMittente',
        'nazioneDestinatario',
        'capMittente',
        'capDestinatario',
        'cittaMittente',
        'cittaDestinatario',
        'provinciaMittente',
        'provinciaDestinatario',
        'colli'
    ];

    /** @var array */
    private $colli;

    /**
     * @var string
     */
    private $nazioneMittente;

    /**
     * @var string
     */
    private $nazioneDestinatario;

    /**
     * @var string
     */
    private $capMittente;

    /**
     * @var string
     */
    private $capDestinatario;

    /**
     * @var string
     */
    private $cittaMittente;

    /**
     * @var string
     */
    private $cittaDestinatario;

    /**
     * @var string
     */
    private $provinciaMittente;

    /**
     * @var string
     */
    private $provinciaDestinatario;

    public function call($debug = FALSE, $id = null)
    {
        return new SimulazioneResponse(parent::call($debug));
    }

    public function toArray()
    {
        $declaredArr = array();
        foreach($this->colli as $declaredObj) {
            array_push($declaredArr, $declaredObj->toArray());
        }
        return array_filter([
            array_filter([
                'nazioneMittente' => $this->nazioneMittente,
                'nazioneDestinatario' => $this->nazioneDestinatario,
                'capMittente' => $this->capMittente,
                'capDestinatario' => $this->capDestinatario,
                'cittaMittente' => $this->cittaMittente,
                'cittaDestinatario' => $this->cittaDestinatario,
                'provinciaMittente' => $this->provinciaMittente,
                'provinciaDestinatario' => $this->provinciaDestinatario,
                'colli' => $declaredArr], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * Get the value of nazioneMittente
     *
     * @return  string
     */ 
    public function getNazioneMittente()
    {
        return $this->nazioneMittente;
    }

    /**
     * Set the value of nazioneMittente
     *
     * @param  string  $nazioneMittente
     *
     * @return  self
     */ 
    public function setNazioneMittente(string $nazioneMittente)
    {
        $this->nazioneMittente = $nazioneMittente;

        return $this;
    }

    /**
     * Get the value of nazioneDestinatario
     *
     * @return  string
     */ 
    public function getNazioneDestinatario()
    {
        return $this->nazioneDestinatario;
    }

    /**
     * Set the value of nazioneDestinatario
     *
     * @param  string  $nazioneDestinatario
     *
     * @return  self
     */ 
    public function setNazioneDestinatario(string $nazioneDestinatario)
    {
        $this->nazioneDestinatario = $nazioneDestinatario;

        return $this;
    }

    /**
     * Get the value of capMittente
     *
     * @return  string
     */ 
    public function getCapMittente()
    {
        return $this->capMittente;
    }

    /**
     * Set the value of nazioneMittente
     *
     * @param  string  $capMittente
     *
     * @return  self
     */ 
    public function setCapMittente(string $capMittente)
    {
        $this->capMittente = $capMittente;

        return $this;
    }

    /**
     * Get the value of capDestinatario
     *
     * @return  string
     */ 
    public function getCapDestinatario()
    {
        return $this->capDestinatario;
    }

    /**
     * Set the value of capDestinatario
     *
     * @param  string  $capDestinatario
     *
     * @return  self
     */ 
    public function setCapDestinatario(string $capDestinatario)
    {
        $this->capDestinatario = $capDestinatario;

        return $this;
    }

    /**
     * Get the value of cittaMittente
     *
     * @return  string
     */ 
    public function getCittaMittente()
    {
        return $this->cittaMittente;
    }

    /**
     * Set the value of cittaMittente
     *
     * @param  string  $cittaMittente
     *
     * @return  self
     */ 
    public function setCittaMittente(string $cittaMittente)
    {
        $this->cittaMittente = $cittaMittente;

        return $this;
    }

    /**
     * Get the value of cittaDestinatario
     *
     * @return  string
     */ 
    public function getCittaDestinatario()
    {
        return $this->cittaDestinatario;
    }

    /**
     * Set the value of cittaDestinatario
     *
     * @param  string  $cittaDestinatario
     *
     * @return  self
     */ 
    public function setCittaDestinatario(string $cittaDestinatario)
    {
        $this->cittaDestinatario = $cittaDestinatario;

        return $this;
    }

    /**
     * Get the value of provinciaMittente
     *
     * @return  string
     */ 
    public function getProvinciaMittente()
    {
        return $this->provinciaMittente;
    }

    /**
     * Set the value of provinciaMittente
     *
     * @param  string  $provinciaMittente
     *
     * @return  self
     */ 
    public function setProvinciaMittente(string $provinciaMittente)
    {
        $this->provinciaMittente = $provinciaMittente;

        return $this;
    }

    /**
     * Get the value of provinciaDestinatario
     *
     * @return  string
     */ 
    public function getProvinciaDestinatario()
    {
        return $this->provinciaDestinatario;
    }

    /**
     * Set the value of provinciaDestinatario
     *
     * @param  string  $provinciaDestinatario
     *
     * @return  self
     */ 
    public function setProvinciaDestinatario(string $provinciaDestinatario)
    {
        $this->provinciaDestinatario = $provinciaDestinatario;

        return $this;
    }

    /**
     * Get the value of colli
     */
    public function getColli()
    {
        return $this->colli;
    }

    /**
     * Set the value of colli
     *
     * @return  self
     */
    public function setColli($colli)
    {
        $this->colli = $colli;

        return $this;
    }
}
