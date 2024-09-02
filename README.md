# SpediamoPro PHP SDK

This package is a PHP SDK for SpediamoPro Rest API services.

## Installing
Install with composer
```shell
composer require dinja/spediamopro-sdk
```

## Features

Below there are the main operations of a shipment Workflow:

### Simulation
*   POST /api/v1/simulazione
*   POST /api/v1/spedizione/{id}
*   PUT /api/v1/spedizione/{id}
*   POST /api/v1/spedizione/{id}/can_pay

### Shipment
*   GET /api/v1/spedizione/{id}
*   GET /api/v1/spedizione/{id}/ldv

## Usage
### POST /api/v1/simulazione
```php
$debug = false;

$declaredArr = array();
$dataDeclared = new Dinja\SpediamoProSDK\Api\DataDeclared(1, 1, 1, 1, 0, null, null, null);
array_push($declaredArr, $dataDeclared);

$request = new Dinja\SpediamoProApiWrapper\Request\SimulazioneRequest('spediamopro_api_authcode', $debug);
$request->setColli($declaredArr)
    ->setNazioneMittente("IT")
    ->setNazioneDestinatario("IT")
    ->setCapMittente("70044")
    ->setCapDestinatario("70044")
    ->setCittaMittente("Polignano a Mare")
    ->setCittaDestinatario("Polignano a Mare")
    ->setProvinciaMittente("BA")
    ->setProvinciaDestinatario("BA");

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else {
    $spedizioni = $response->getSpedizioni();
    $idSimulazione = $response->getId();
    $codiceSimulazione = $response->getCodice();
}
```

### POST /api/v1/spedizione/{id}
```php
$idSpedizione = -1;
foreach ($response->getSpedizioni() as $spedizione) {
    if($spedizione->getTariffCode() == "BRTEXP") {  // Example: 
        $idSpedizione = $spedizione->getId();
    }
}
$request = new Dinja\SpediamoProApiWrapper\Request\SpedizioneRequest('spediamopro_api_authcode', $debug);

$response = $request->call($debug, $idSpedizione);
```

### PUT /api/v1/spedizione/{id}
```php
$request = new Dinja\SpediamoProApiWrapper\Request\SpedizioneRequest('spediamopro_api_authcode', $debug);
$request->setMethod("PUT");

$declaredArr = array();
$dataDeclared = new DataDeclared(1, 1, 1, 1, 0, null, null, null);
array_push($declaredArr, $dataDeclared);

$request->setColli($declaredArr)
    ->setNominativoMittente("Dinja Srl")
    ->setSenderAddressLine1("Via Leonardo da Vinci 22/24")
    ->setTelefonoMittente("0803009954")
    ->setEmailMittente("info@sellengine.it")
    ->setNominativoDestinatario("Mario Rossi")
    ->setPressoDestinatario("Dinja Srl")
    ->setConsigneeAddressLine1("Via Roma 1")
    ->setTelefonoDestinatario("0803009954")
    ->setNoteDestinatario("TEST")
    ->setEmailDestinatario("info@sellengine.it");

$response = $request->call($debug, $idSpedizione);
```

### POST /api/v1/spedizione/{id}/can_pay
```php
$request = new SpedizioneRequest('spediamopro_api_authcode', $debug);
$request->setApiPath("/api/v1/spedizione/" . $idSpedizione . "/can_pay");

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else if($response->getCan_pay()) {

}
```

### GET /api/v1/spedizione/{id}
```php
$request = new SpedizioneRequest('spediamopro_api_authcode', $debug);
$request->setMethod("GET");
$request->setApiPath("/api/v1/spedizione/" . $idSpedizione);

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else {
    $parcelId = $response->getSpedizione()->getColli()[0]->getTracking();
    if(!isset($parcelId))
        $parcelId = $response->getSpedizione()->getColli()[0]->getSegnacollo();

    $corriere = $response->getSpedizione()->getCorriere();
}
```

### GET /api/v1/spedizione/{id}/ldv
```php
$request = new SpedizioneRequest('spediamopro_api_authcode', $debug);
$request->setMethod("GET");
$spedizioneRequest->setApiPath("/api/v1/spedizione/" . $idSpedizione . "/ldv");

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else {
    $filename = $response->getFilename();
    $b64 = $response->getB64();
}
```

## Credits

- [Dinja Srl][link-author]
- [All Contributors][link-contributors]

## 	Documentation
Website: [https://www.sellengine.it/spediamopro/](https://www.sellengine.it/spediamopro/)</br>
API: [https://core.spediamopro.com/api/doc](https://core.spediamopro.com/api/doc)

## License

This project is licensed under the MIT License (MIT). Please see [License File](LICENSE) for more information.

[link-author]: https://github.com/dinja-srl
[link-contributors]: ../../contributors