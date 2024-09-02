<?php

namespace Dinja\SpediamoProSDK\Response;

class SimulazioneResponse extends BaseResponse
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var String
     */
    protected $codice;

    /**
     * @var String
     */
    protected $dataCreazione;

    /**
     * @var int
     */
    protected $idUtente;

    /**
     * @var array
     */
    protected $spedizioni;


    public function __construct($response)
    {
        echo "RESPONSE: " . json_encode($response);
        foreach ($response->simulazione as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'spedizioni':
                        $values = array();
                        foreach($value as $arrvalue) {
                            $spedizione = new Spedizione(
                                $arrvalue->corriere,
                                $arrvalue->tariffCode,
                                $arrvalue->tariffLabel,
                                $arrvalue->tariffImage,
                                $arrvalue->ivaEsclusa,
                                $arrvalue->dataRitiroIT,
                                $arrvalue->dataConsegnaPrevistaIT,
                                $arrvalue->id,
                                $arrvalue->nazioneMittente,
                                $arrvalue->nazioneDestinatario,
                                $arrvalue->codice,
                                $arrvalue->numeroColli,
                                $arrvalue->capMittente,
                                $arrvalue->capDestinatario,
                                $arrvalue->tariffa,
                                $arrvalue->tariffaBase,
                                $arrvalue->supplementoCarburante,
                                $arrvalue->serviziAccessori,
                                $arrvalue->iva,
                                $arrvalue->violations,
                                $arrvalue->dataRitiro,
                                $arrvalue->dataConsegnaPrevista,
                                $arrvalue->comuneMittente,
                                $arrvalue->comuneDestinatario,
                                $arrvalue->provinciaMittente,
                                $arrvalue->provinciaDestinatario,
                                $arrvalue->colli,
                                $arrvalue->senderAddressLine1,
                                $arrvalue->senderAddressLine2,
                                $arrvalue->senderAddressLine3,
                                $arrvalue->consigneeAddressLine1,
                                $arrvalue->consigneeAddressLine2,
                                $arrvalue->consigneeAddressLine3
                            );
                            array_push($values, $spedizione);
                        }
                        $value = $values;
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(String $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of codice
     *
     * @return  String
     */ 
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set the value of codice
     *
     * @param  String  $codice
     *
     * @return  self
     */ 
    public function setCodice(String $codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get the value of dataCreazione
     *
     * @return  String
     */ 
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * Set the value of dataCreazione
     *
     * @param  String  $dataCreazione
     *
     * @return  self
     */ 
    public function setDataCreazione(String $dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get the value of idUtente
     *
     * @return  int
     */ 
    public function getIdUtente()
    {
        return $this->idUtente;
    }

    /**
     * Set the value of idUtente
     *
     * @param  int  $idUtente
     *
     * @return  self
     */ 
    public function setIdUtente(String $idUtente)
    {
        $this->idUtente = $idUtente;

        return $this;
    }

     /**
     * Get the value of spedizioni
     *
     * @return  array
     */ 
    public function getSpedizioni()
    {
        return $this->spedizioni;
    }

    /**
     * Set the value of spedizioni
     *
     * @param  array  $spedizioni
     *
     * @return  self
     */ 
    public function setSpedizioni(array $spedizioni)
    {
        $this->spedizioni = $spedizioni;

        return $this;
    }
}
