<?php

namespace Dinja\SpediamoProSDK\Response;

class Spedizione
{
    /**
     *
     * @var string
     */
    private $corriere;

    /**
     *
     * @var string
     */
    private $tariffCode;

    /**
     *
     * @var string
     */
    private $tariffLabel;

    /**
     *
     * @var string
     */
    private $tariffImage;

    /**
     *
     * @var string
     */
    private $ivaEsclusa;

    /**
     *
     * @var string
     */
    private $dataRitiroIT;

    /**
     *
     * @var string
     */
    private $dataConsegnaPrevistaIT;

    /**
     *
     * @var int
     */
    private $id;

    /**
     *
     * @var string
     */
    private $nazioneMittente;

    /**
     *
     * @var string
     */
    private $nazioneDestinatario;

    /**
     *
     * @var string
     */
    private $codice;

    /**
     *
     * @var int
     */
    private $numeroColli;

    /**
     *
     * @var string
     */
    private $capMittente;

    /**
     *
     * @var string
     */
    private $capDestinatario;

    /**
     *
     * @var float
     */
    private $tariffa;

    /**
     *
     * @var float
     */
    private $tariffaBase;

    /**
     *
     * @var float
     */
    private $supplementoCarburante;

    /**
     *
     * @var float
     */
    private $serviziAccessori;

    /**
     *
     * @var float
     */
    private $iva;

    /**
     *
     * @var array
     */
    private $violations;

    /**
     *
     * @var string
     */
    private $dataRitiro;

    /**
     *
     * @var string
     */
    private $dataConsegnaPrevista;

    /**
     *
     * @var string
     */
    private $comuneMittente;

    /**
     *
     * @var string
     */
    private $comuneDestinatario;

    /**
     *
     * @var string
     */
    private $provinciaMittente;

    /**
     *
     * @var string
     */
    private $provinciaDestinatario;

    /**
     *
     * @var array
     */
    private $colli;

    /**
     *
     * @var string
     */
    private $senderAddressLine1;

    /**
     *
     * @var string
     */
    private $senderAddressLine2;

    /**
     *
     * @var string
     */
    private $senderAddressLine3;

    /**
     *
     * @var string
     */
    private $consigneeAddressLine1;

    /**
     *
     * @var string
     */
    private $consigneeAddressLine2;

    /**
     *
     * @var string
     */
    private $consigneeAddressLine3;

    public function __construct($corriere, $tariffCode, $tariffLabel, $tariffImage, $ivaEsclusa, $dataRitiroIT, $dataConsegnaPrevistaIT, $id, $nazioneMittente, $nazioneDestinatario, $codice, $numeroColli, $capMittente, $capDestinatario, $tariffa, $tariffaBase, $supplementoCarburante, $serviziAccessori, $iva, $violations, $dataRitiro, $dataConsegnaPrevista, $comuneMittente, $comuneDestinatario, $provinciaMittente, $provinciaDestinatario, $colli, $senderAddressLine1, $senderAddressLine2, $senderAddressLine3, $consigneeAddressLine1, $consigneeAddressLine2, $consigneeAddressLine3)
    {
        $this->corriere = $corriere;
        $this->tariffCode = $tariffCode;
        $this->tariffLabel = $tariffLabel;
        $this->tariffImage = $tariffImage;
        $this->ivaEsclusa = $ivaEsclusa;
        $this->dataRitiroIT = $dataRitiroIT;
        $this->dataConsegnaPrevistaIT = $dataConsegnaPrevistaIT;
        $this->id = $id;
        $this->nazioneMittente = $nazioneMittente;
        $this->nazioneDestinatario = $nazioneDestinatario;
        $this->codice = $codice;
        $this->numeroColli = $numeroColli;
        $this->capMittente = $capMittente;
        $this->capDestinatario = $capDestinatario;
        $this->tariffa = $tariffa;
        $this->tariffaBase = $tariffaBase;
        $this->supplementoCarburante = $supplementoCarburante;
        $this->serviziAccessori = $serviziAccessori;
        $this->iva = $iva;
        $this->violations = $violations;
        $this->dataRitiro = $dataRitiro;
        $this->dataConsegnaPrevista = $dataConsegnaPrevista;
        $this->comuneMittente = $comuneMittente;
        $this->comuneDestinatario = $comuneDestinatario;
        $this->provinciaMittente = $provinciaMittente;
        $this->provinciaDestinatario = $provinciaDestinatario;
        $this->colli = $colli;
        $this->senderAddressLine1 = $senderAddressLine1;
        $this->senderAddressLine2 = $senderAddressLine2;
        $this->senderAddressLine3 = $senderAddressLine3;
        $this->consigneeAddressLine1 = $consigneeAddressLine1;
        $this->consigneeAddressLine2 = $consigneeAddressLine2;
        $this->consigneeAddressLine3 = $consigneeAddressLine3;
    }

    /**
     * Get the value of corriere
     *
     * @return  string
     */ 
    public function getCorriere()
    {
        return $this->corriere;
    }

    /**
     * Set the value of corriere
     *
     * @param  string  $corriere
     *
     * @return  self
     */ 
    public function setCorriere(string $corriere)
    {
        $this->corriere = $corriere;

        return $this;
    }

    /**
     * Get the value of tariffCode
     *
     * @return  string
     */ 
    public function getTariffCode()
    {
        return $this->tariffCode;
    }

    /**
     * Set the value of tariffCode
     *
     * @param  string  $tariffCode
     *
     * @return  self
     */ 
    public function setTariffCode(string $tariffCode)
    {
        $this->tariffCode = $tariffCode;

        return $this;
    }

    /**
     * Get the value of tariffLabel
     *
     * @return  string
     */ 
    public function getTariffLabel()
    {
        return $this->tariffLabel;
    }

    /**
     * Set the value of tariffLabel
     *
     * @param  string  $tariffLabel
     *
     * @return  self
     */ 
    public function setTariffLabel(string $tariffLabel)
    {
        $this->tariffLabel = $tariffLabel;

        return $this;
    }

    /**
     * Get the value of tariffImage
     *
     * @return  string
     */ 
    public function getTariffImage()
    {
        return $this->tariffImage;
    }

    /**
     * Set the value of tariffImage
     *
     * @param  string  $tariffImage
     *
     * @return  self
     */ 
    public function setTariffImage(string $tariffImage)
    {
        $this->tariffImage = $tariffImage;

        return $this;
    }

    /**
     * Get the value of ivaEsclusa
     *
     * @return  string
     */ 
    public function getIvaEsclusa()
    {
        return $this->ivaEsclusa;
    }

    /**
     * Set the value of ivaEsclusa
     *
     * @param  string  $ivaEsclusa
     *
     * @return  self
     */ 
    public function setIvaEsclusa(string $ivaEsclusa)
    {
        $this->ivaEsclusa = $ivaEsclusa;

        return $this;
    }

    /**
     * Get the value of dataRitiroIT
     *
     * @return  string
     */ 
    public function getDataRitiroIT()
    {
        return $this->dataRitiroIT;
    }

    /**
     * Set the value of dataRitiroIT
     *
     * @param  string  $dataRitiroIT
     *
     * @return  self
     */ 
    public function setDataRitiroIT(string $dataRitiroIT)
    {
        $this->dataRitiroIT = $dataRitiroIT;

        return $this;
    }

    /**
     * Get the value of dataConsegnaPrevistaIT
     *
     * @return  string
     */ 
    public function getDataConsegnaPrevistaIT()
    {
        return $this->dataConsegnaPrevistaIT;
    }

    /**
     * Set the value of dataConsegnaPrevistaIT
     *
     * @param  string  $dataConsegnaPrevistaIT
     *
     * @return  self
     */ 
    public function setDataConsegnaPrevistaIT(string $dataConsegnaPrevistaIT)
    {
        $this->dataConsegnaPrevistaIT = $dataConsegnaPrevistaIT;

        return $this;
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
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of codice
     *
     * @return  string
     */ 
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set the value of codice
     *
     * @param  string  $codice
     *
     * @return  self
     */ 
    public function setCodice(string $codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get the value of numeroColli
     *
     * @return  int
     */ 
    public function getNumeroColli()
    {
        return $this->numeroColli;
    }

    /**
     * Set the value of numeroColli
     *
     * @param  int  $numeroColli
     *
     * @return  self
     */ 
    public function setNumeroColli(int $numeroColli)
    {
        $this->numeroColli = $numeroColli;

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
     * Set the value of capMittente
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
     * Get the value of tariffa
     *
     * @return  float
     */ 
    public function getTariffa()
    {
        return $this->tariffa;
    }

    /**
     * Set the value of tariffa
     *
     * @param  float  $tariffa
     *
     * @return  self
     */ 
    public function setTariffa(float $tariffa)
    {
        $this->tariffa = $tariffa;

        return $this;
    }

    /**
     * Get the value of tariffaBase
     *
     * @return  float
     */ 
    public function getTariffaBase()
    {
        return $this->tariffaBase;
    }

    /**
     * Set the value of tariffaBase
     *
     * @param  float  $tariffaBase
     *
     * @return  self
     */ 
    public function setTariffaBase(float $tariffaBase)
    {
        $this->tariffaBase = $tariffaBase;

        return $this;
    }

    /**
     * Get the value of supplementoCarburante
     *
     * @return  float
     */ 
    public function getSupplementoCarburante()
    {
        return $this->supplementoCarburante;
    }

    /**
     * Set the value of supplementoCarburante
     *
     * @param  float  $supplementoCarburante
     *
     * @return  self
     */ 
    public function setSupplementoCarburante(float $supplementoCarburante)
    {
        $this->supplementoCarburante = $supplementoCarburante;

        return $this;
    }

    /**
     * Get the value of serviziAccessori
     *
     * @return  float
     */ 
    public function getServiziAccessori()
    {
        return $this->serviziAccessori;
    }

    /**
     * Set the value of serviziAccessori
     *
     * @param  float  $serviziAccessori
     *
     * @return  self
     */ 
    public function setServiziAccessori(float $serviziAccessori)
    {
        $this->serviziAccessori = $serviziAccessori;

        return $this;
    }

    /**
     * Get the value of iva
     *
     * @return  float
     */ 
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set the value of iva
     *
     * @param  float  $iva
     *
     * @return  self
     */ 
    public function setIva(float $iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get the value of violations
     *
     * @return  array
     */ 
    public function getViolations()
    {
        return $this->violations;
    }

    /**
     * Set the value of violations
     *
     * @param  array  $violations
     *
     * @return  self
     */ 
    public function setViolations(array $violations)
    {
        $this->violations = $violations;

        return $this;
    }

    /**
     * Get the value of dataRitiro
     *
     * @return  string
     */ 
    public function getDataRitiro()
    {
        return $this->dataRitiro;
    }

    /**
     * Set the value of dataRitiro
     *
     * @param  string  $dataRitiro
     *
     * @return  self
     */ 
    public function setDataRitiro(string $dataRitiro)
    {
        $this->dataRitiro = $dataRitiro;

        return $this;
    }

    /**
     * Get the value of dataConsegnaPrevista
     *
     * @return  string
     */ 
    public function getDataConsegnaPrevista()
    {
        return $this->dataConsegnaPrevista;
    }

    /**
     * Set the value of dataConsegnaPrevista
     *
     * @param  string  $dataConsegnaPrevista
     *
     * @return  self
     */ 
    public function setDataConsegnaPrevista(string $dataConsegnaPrevista)
    {
        $this->dataConsegnaPrevista = $dataConsegnaPrevista;

        return $this;
    }

    /**
     * Get the value of comuneMittente
     *
     * @return  string
     */ 
    public function getComuneMittente()
    {
        return $this->comuneMittente;
    }

    /**
     * Set the value of comuneMittente
     *
     * @param  string  $comuneMittente
     *
     * @return  self
     */ 
    public function setComuneMittente(string $comuneMittente)
    {
        $this->comuneMittente = $comuneMittente;

        return $this;
    }

    /**
     * Get the value of comuneDestinatario
     *
     * @return  string
     */ 
    public function getComuneDestinatario()
    {
        return $this->comuneDestinatario;
    }

    /**
     * Set the value of comuneDestinatario
     *
     * @param  string  $comuneDestinatario
     *
     * @return  self
     */ 
    public function setComuneDestinatario(string $comuneDestinatario)
    {
        $this->comuneDestinatario = $comuneDestinatario;

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
     *
     * @return  array
     */ 
    public function getColli()
    {
        return $this->colli;
    }

    /**
     * Set the value of colli
     *
     * @param  array  $colli
     *
     * @return  self
     */ 
    public function setColli(array $colli)
    {
        $this->colli = $colli;

        return $this;
    }

    /**
     * Get the value of senderAddressLine1
     *
     * @return  string
     */ 
    public function getSenderAddressLine1()
    {
        return $this->senderAddressLine1;
    }

    /**
     * Set the value of senderAddressLine1
     *
     * @param  string  $senderAddressLine1
     *
     * @return  self
     */ 
    public function setSenderAddressLine1(string $senderAddressLine1)
    {
        $this->senderAddressLine1 = $senderAddressLine1;

        return $this;
    }

    /**
     * Get the value of senderAddressLine2
     *
     * @return  string
     */ 
    public function getSenderAddressLine2()
    {
        return $this->senderAddressLine2;
    }

    /**
     * Set the value of senderAddressLine2
     *
     * @param  string  $senderAddressLine2
     *
     * @return  self
     */ 
    public function setSenderAddressLine2(string $senderAddressLine2)
    {
        $this->senderAddressLine2 = $senderAddressLine2;

        return $this;
    }

    /**
     * Get the value of senderAddressLine3
     *
     * @return  string
     */ 
    public function getSenderAddressLine3()
    {
        return $this->senderAddressLine3;
    }

    /**
     * Set the value of senderAddressLine3
     *
     * @param  string  $senderAddressLine3
     *
     * @return  self
     */ 
    public function setSenderAddressLine3(string $senderAddressLine3)
    {
        $this->senderAddressLine3 = $senderAddressLine3;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine1
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine1()
    {
        return $this->consigneeAddressLine1;
    }

    /**
     * Set the value of consigneeAddressLine1
     *
     * @param  string  $consigneeAddressLine1
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine1(string $consigneeAddressLine1)
    {
        $this->consigneeAddressLine1 = $consigneeAddressLine1;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine2
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine2()
    {
        return $this->consigneeAddressLine2;
    }

    /**
     * Set the value of consigneeAddressLine2
     *
     * @param  string  $consigneeAddressLine2
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine2(string $consigneeAddressLine2)
    {
        $this->consigneeAddressLine2 = $consigneeAddressLine2;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine3
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine3()
    {
        return $this->consigneeAddressLine3;
    }

    /**
     * Set the value of consigneeAddressLine3
     *
     * @param  string  $consigneeAddressLine3
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine3(string $consigneeAddressLine3)
    {
        $this->consigneeAddressLine3 = $consigneeAddressLine3;

        return $this;
    }
}
