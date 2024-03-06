<?php
/**
 * NotesEnAttenteApi
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
 * NotesEnAttenteApi Class Doc Comment
 *
 * @category Class
 * @package  Qwenta\Fulleapps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotesEnAttenteApi
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
     * Operation deleteWaitingNotes
     *
     * Suppression
     *
     * @param  Int $id Identifiant de la note (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteWaitingNotes($id)
    {
        $this->deleteWaitingNotesWithHttpInfo($id);
    }

    /**
     * Operation deleteWaitingNotesWithHttpInfo
     *
     * Suppression
     *
     * @param  Int $id Identifiant de la note (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWaitingNotesWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteWaitingNotesRequest($id);

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
     * Operation deleteWaitingNotesAsync
     *
     * Suppression
     *
     * @param  Int $id Identifiant de la note (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteWaitingNotesAsync($id)
    {
        return $this->deleteWaitingNotesAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteWaitingNotesAsyncWithHttpInfo
     *
     * Suppression
     *
     * @param  Int $id Identifiant de la note (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteWaitingNotesAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteWaitingNotesRequest($id);

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
     * Create request for operation 'deleteWaitingNotes'
     *
     * @param  Int $id Identifiant de la note (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteWaitingNotesRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteWaitingNotes'
            );
        }

        $resourcePath = '/notes/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getWaitingNotes
     *
     * Récupération
     *
     * @param  Int $id_point_of_sale Identifiant du point de vente associé à la note (required)
     * @param  Int $n_table Recherche par numéro de table (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Qwenta\Fulleapps\Model\InlineResponse20027
     */
    public function getWaitingNotes($id_point_of_sale, $n_table)
    {
        list($response) = $this->getWaitingNotesWithHttpInfo($id_point_of_sale, $n_table);
        return $response;
    }

    /**
     * Operation getWaitingNotesWithHttpInfo
     *
     * Récupération
     *
     * @param  Int $id_point_of_sale Identifiant du point de vente associé à la note (required)
     * @param  Int $n_table Recherche par numéro de table (required)
     *
     * @throws \Qwenta\Fulleapps\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Qwenta\Fulleapps\Model\InlineResponse20027, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWaitingNotesWithHttpInfo($id_point_of_sale, $n_table)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse20027';
        $request = $this->getWaitingNotesRequest($id_point_of_sale, $n_table);

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
                        '\Qwenta\Fulleapps\Model\InlineResponse20027',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWaitingNotesAsync
     *
     * Récupération
     *
     * @param  Int $id_point_of_sale Identifiant du point de vente associé à la note (required)
     * @param  Int $n_table Recherche par numéro de table (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWaitingNotesAsync($id_point_of_sale, $n_table)
    {
        return $this->getWaitingNotesAsyncWithHttpInfo($id_point_of_sale, $n_table)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWaitingNotesAsyncWithHttpInfo
     *
     * Récupération
     *
     * @param  Int $id_point_of_sale Identifiant du point de vente associé à la note (required)
     * @param  Int $n_table Recherche par numéro de table (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWaitingNotesAsyncWithHttpInfo($id_point_of_sale, $n_table)
    {
        $returnType = '\Qwenta\Fulleapps\Model\InlineResponse20027';
        $request = $this->getWaitingNotesRequest($id_point_of_sale, $n_table);

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
     * Create request for operation 'getWaitingNotes'
     *
     * @param  Int $id_point_of_sale Identifiant du point de vente associé à la note (required)
     * @param  Int $n_table Recherche par numéro de table (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getWaitingNotesRequest($id_point_of_sale, $n_table)
    {
        // verify the required parameter 'id_point_of_sale' is set
        if ($id_point_of_sale === null || (is_array($id_point_of_sale) && count($id_point_of_sale) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_point_of_sale when calling getWaitingNotes'
            );
        }
        // verify the required parameter 'n_table' is set
        if ($n_table === null || (is_array($n_table) && count($n_table) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $n_table when calling getWaitingNotes'
            );
        }

        $resourcePath = '/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id_point_of_sale !== null) {
            $resourcePath = str_replace(
                '{' . 'id_point_of_sale' . '}',
                ObjectSerializer::toPathValue($id_point_of_sale),
                $resourcePath
            );
        }
        // path params
        if ($n_table !== null) {
            $resourcePath = str_replace(
                '{' . 'n_table' . '}',
                ObjectSerializer::toPathValue($n_table),
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
