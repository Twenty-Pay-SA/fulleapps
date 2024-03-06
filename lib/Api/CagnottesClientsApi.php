<?php
/**
 * CagnottesClientsApi
 * PHP version 5
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulle API
 *
 * <strong>IMPORTANT !<br/>Les requetes externes vers l'API sont susceptibles d'être interrompues en cas de trafic fort sur le serveur !<br/>  Pour éviter ce genre de contraintes, nous pouvons vous intégrer dans notre programme partenaire et vous définir un identifiant Partner, afin de permettre une disponibilité continue de l'API.<br/>  L'identifiant Partner sera à insérer dans un header 'X-Api-Key' : '%ID_PARTNER%'</strong><br/><br/> Pour utiliser l'API en externe, vous devez utiliser la clé utilisateur unique de votre compte commerçant.<br/> Cette clé est disponible à la demande auprés de votre revendeur.<br/> Une fois la clé obtenue, utilisez celle ci dans un header Authorization afin de récupérer et gérer les données de compte via notre API REST.<br/> Pour utiliser l'API avec votre clé, voici un exemple du header à placer : <br/> 'Authorization' : 'Mutual %CLE_UTILISATEUR%'<br/>
 *
 * OpenAPI spec version: 1.0
 * Contact: contact@fulleapps.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Qwenta\Fulleapps\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Qwenta\Fulleapps\ApiException;
use Qwenta\Fulleapps\Configuration;
use Qwenta\Fulleapps\HeaderSelector;
use Qwenta\Fulleapps\ObjectSerializer;

/**
 * CagnottesClientsApi Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CagnottesClientsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation 87681cf49d617ea061dbd208e90838fb
     *
     * Recharge cagnotte
     *
     * @param  \Qwenta\Fulleapps\Model\AdvancePayment $body body (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function 87681cf49d617ea061dbd208e90838fb($body)
    {
        $this->87681cf49d617ea061dbd208e90838fbWithHttpInfo($body);
    }

    /**
     * Operation 87681cf49d617ea061dbd208e90838fbWithHttpInfo
     *
     * Recharge cagnotte
     *
     * @param  \Qwenta\Fulleapps\Model\AdvancePayment $body (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function 87681cf49d617ea061dbd208e90838fbWithHttpInfo($body)
    {
        $returnType = '';
        $request = $this->87681cf49d617ea061dbd208e90838fbRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation 87681cf49d617ea061dbd208e90838fbAsync
     *
     * Recharge cagnotte
     *
     * @param  \Qwenta\Fulleapps\Model\AdvancePayment $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function 87681cf49d617ea061dbd208e90838fbAsync($body)
    {
        return $this->87681cf49d617ea061dbd208e90838fbAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation 87681cf49d617ea061dbd208e90838fbAsyncWithHttpInfo
     *
     * Recharge cagnotte
     *
     * @param  \Qwenta\Fulleapps\Model\AdvancePayment $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function 87681cf49d617ea061dbd208e90838fbAsyncWithHttpInfo($body)
    {
        $returnType = '';
        $request = $this->87681cf49d617ea061dbd208e90838fbRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation '87681cf49d617ea061dbd208e90838fb'
     *
     * @param  \Qwenta\Fulleapps\Model\AdvancePayment $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function 87681cf49d617ea061dbd208e90838fbRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling 87681cf49d617ea061dbd208e90838fb'
            );
        }

        $resourcePath = '/advance_payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation 98cb6eb870668c4239b5e237bc74e75e
     *
     * Historique mouvements
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Qwenta\Fulleapps\Model\InlineResponse2003
     */
    public function 98cb6eb870668c4239b5e237bc74e75e($id_client, $from_date, $to_date)
    {
        list($response) = $this->98cb6eb870668c4239b5e237bc74e75eWithHttpInfo($id_client, $from_date, $to_date);
        return $response;
    }

    /**
     * Operation 98cb6eb870668c4239b5e237bc74e75eWithHttpInfo
     *
     * Historique mouvements
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Qwenta\Fulleapps\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function 98cb6eb870668c4239b5e237bc74e75eWithHttpInfo($id_client, $from_date, $to_date)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse2003';
        $request = $this->98cb6eb870668c4239b5e237bc74e75eRequest($id_client, $from_date, $to_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qwenta\Fulleapps\Model\InlineResponse2003',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation 98cb6eb870668c4239b5e237bc74e75eAsync
     *
     * Historique mouvements
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function 98cb6eb870668c4239b5e237bc74e75eAsync($id_client, $from_date, $to_date)
    {
        return $this->98cb6eb870668c4239b5e237bc74e75eAsyncWithHttpInfo($id_client, $from_date, $to_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation 98cb6eb870668c4239b5e237bc74e75eAsyncWithHttpInfo
     *
     * Historique mouvements
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function 98cb6eb870668c4239b5e237bc74e75eAsyncWithHttpInfo($id_client, $from_date, $to_date)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse2003';
        $request = $this->98cb6eb870668c4239b5e237bc74e75eRequest($id_client, $from_date, $to_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation '98cb6eb870668c4239b5e237bc74e75e'
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function 98cb6eb870668c4239b5e237bc74e75eRequest($id_client, $from_date, $to_date)
    {
        // verify the required parameter 'id_client' is set
        if ($id_client === null || (is_array($id_client) && count($id_client) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_client when calling 98cb6eb870668c4239b5e237bc74e75e'
            );
        }
        // verify the required parameter 'from_date' is set
        if ($from_date === null || (is_array($from_date) && count($from_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_date when calling 98cb6eb870668c4239b5e237bc74e75e'
            );
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null || (is_array($to_date) && count($to_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_date when calling 98cb6eb870668c4239b5e237bc74e75e'
            );
        }

        $resourcePath = '/advance_payments_history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_client !== null) {
            $resourcePath = str_replace(
                '{' . 'id_client' . '}',
                ObjectSerializer::toPathValue($id_client),
                $resourcePath
            );
        }
        // path params
        if ($from_date !== null) {
            $resourcePath = str_replace(
                '{' . 'from_date' . '}',
                ObjectSerializer::toPathValue($from_date),
                $resourcePath
            );
        }
        // path params
        if ($to_date !== null) {
            $resourcePath = str_replace(
                '{' . 'to_date' . '}',
                ObjectSerializer::toPathValue($to_date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAdvancePayments
     *
     * Historique recharges
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Qwenta\Fulleapps\Model\InlineResponse2003
     */
    public function getAdvancePayments($id_client, $from_date, $to_date)
    {
        list($response) = $this->getAdvancePaymentsWithHttpInfo($id_client, $from_date, $to_date);
        return $response;
    }

    /**
     * Operation getAdvancePaymentsWithHttpInfo
     *
     * Historique recharges
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Qwenta\Fulleapps\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdvancePaymentsWithHttpInfo($id_client, $from_date, $to_date)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse2003';
        $request = $this->getAdvancePaymentsRequest($id_client, $from_date, $to_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qwenta\Fulleapps\Model\InlineResponse2003',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdvancePaymentsAsync
     *
     * Historique recharges
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvancePaymentsAsync($id_client, $from_date, $to_date)
    {
        return $this->getAdvancePaymentsAsyncWithHttpInfo($id_client, $from_date, $to_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdvancePaymentsAsyncWithHttpInfo
     *
     * Historique recharges
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvancePaymentsAsyncWithHttpInfo($id_client, $from_date, $to_date)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse2003';
        $request = $this->getAdvancePaymentsRequest($id_client, $from_date, $to_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAdvancePayments'
     *
     * @param  Int $id_client Identifiant client associé (required)
     * @param  Datetime $from_date Date de début (required)
     * @param  Datetime $to_date Date de fin (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdvancePaymentsRequest($id_client, $from_date, $to_date)
    {
        // verify the required parameter 'id_client' is set
        if ($id_client === null || (is_array($id_client) && count($id_client) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_client when calling getAdvancePayments'
            );
        }
        // verify the required parameter 'from_date' is set
        if ($from_date === null || (is_array($from_date) && count($from_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_date when calling getAdvancePayments'
            );
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null || (is_array($to_date) && count($to_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_date when calling getAdvancePayments'
            );
        }

        $resourcePath = '/advance_payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_client !== null) {
            $resourcePath = str_replace(
                '{' . 'id_client' . '}',
                ObjectSerializer::toPathValue($id_client),
                $resourcePath
            );
        }
        // path params
        if ($from_date !== null) {
            $resourcePath = str_replace(
                '{' . 'from_date' . '}',
                ObjectSerializer::toPathValue($from_date),
                $resourcePath
            );
        }
        // path params
        if ($to_date !== null) {
            $resourcePath = str_replace(
                '{' . 'to_date' . '}',
                ObjectSerializer::toPathValue($to_date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
