# OpenAPI\Client\MarketplaceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV3FilesOrdersExternalStickersPost()**](MarketplaceApi.md#apiV3FilesOrdersExternalStickersPost) | **POST** /api/v3/files/orders/external-stickers | Получить список ссылок на этикетки для сборочных заданий, которые требуются при кроссбордере |
| [**apiV3OfficesGet()**](MarketplaceApi.md#apiV3OfficesGet) | **GET** /api/v3/offices | Получить список складов WB |
| [**apiV3OrdersGet()**](MarketplaceApi.md#apiV3OrdersGet) | **GET** /api/v3/orders | Получить информацию по сборочным заданиям |
| [**apiV3OrdersNewGet()**](MarketplaceApi.md#apiV3OrdersNewGet) | **GET** /api/v3/orders/new | Получить список новых сборочных заданий |
| [**apiV3OrdersOrderIdCancelPatch()**](MarketplaceApi.md#apiV3OrdersOrderIdCancelPatch) | **PATCH** /api/v3/orders/{orderId}/cancel | Отменить сборочное задание |
| [**apiV3OrdersOrderIdMetaDelete()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaDelete) | **DELETE** /api/v3/orders/{orderId}/meta | Удалить метаданные сборочного задания |
| [**apiV3OrdersOrderIdMetaGet()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaGet) | **GET** /api/v3/orders/{orderId}/meta | Получить метаданные сборочного задания |
| [**apiV3OrdersOrderIdMetaGtinPut()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaGtinPut) | **PUT** /api/v3/orders/{orderId}/meta/gtin | Закрепить за сборочным заданием GTIN |
| [**apiV3OrdersOrderIdMetaImeiPut()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaImeiPut) | **PUT** /api/v3/orders/{orderId}/meta/imei | Закрепить за сборочным заданием IMEI |
| [**apiV3OrdersOrderIdMetaSgtinPost()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaSgtinPost) | **POST** /api/v3/orders/{orderId}/meta/sgtin | Закрепить за сборочным заданием КиЗ (маркировку Честного знака) |
| [**apiV3OrdersOrderIdMetaUinPut()**](MarketplaceApi.md#apiV3OrdersOrderIdMetaUinPut) | **PUT** /api/v3/orders/{orderId}/meta/uin | Закрепить за сборочным заданием УИН (уникальный идентификационный номер) |
| [**apiV3OrdersStatusPost()**](MarketplaceApi.md#apiV3OrdersStatusPost) | **POST** /api/v3/orders/status | Получить статусы сборочных заданий |
| [**apiV3OrdersStickersPost()**](MarketplaceApi.md#apiV3OrdersStickersPost) | **POST** /api/v3/orders/stickers | Получить этикетки для сборочных заданий |
| [**apiV3PassesGet()**](MarketplaceApi.md#apiV3PassesGet) | **GET** /api/v3/passes | Получить список пропусков |
| [**apiV3PassesOfficesGet()**](MarketplaceApi.md#apiV3PassesOfficesGet) | **GET** /api/v3/passes/offices | Получить список складов, для которых требуется пропуск |
| [**apiV3PassesPassIdDelete()**](MarketplaceApi.md#apiV3PassesPassIdDelete) | **DELETE** /api/v3/passes/{passId} | Удалить пропуск |
| [**apiV3PassesPassIdPut()**](MarketplaceApi.md#apiV3PassesPassIdPut) | **PUT** /api/v3/passes/{passId} | Обновить пропуск |
| [**apiV3PassesPost()**](MarketplaceApi.md#apiV3PassesPost) | **POST** /api/v3/passes | Создать пропуск |
| [**apiV3StocksWarehouseIdDelete()**](MarketplaceApi.md#apiV3StocksWarehouseIdDelete) | **DELETE** /api/v3/stocks/{warehouseId} | Удалить остатки товаров |
| [**apiV3StocksWarehouseIdPost()**](MarketplaceApi.md#apiV3StocksWarehouseIdPost) | **POST** /api/v3/stocks/{warehouseId} | Получить остатки товаров |
| [**apiV3StocksWarehouseIdPut()**](MarketplaceApi.md#apiV3StocksWarehouseIdPut) | **PUT** /api/v3/stocks/{warehouseId} | Обновить остатки товаров |
| [**apiV3SuppliesGet()**](MarketplaceApi.md#apiV3SuppliesGet) | **GET** /api/v3/supplies | Получить список поставок |
| [**apiV3SuppliesPost()**](MarketplaceApi.md#apiV3SuppliesPost) | **POST** /api/v3/supplies | Создать новую поставку |
| [**apiV3SuppliesSupplyIdBarcodeGet()**](MarketplaceApi.md#apiV3SuppliesSupplyIdBarcodeGet) | **GET** /api/v3/supplies/{supplyId}/barcode | Получить QR поставки |
| [**apiV3SuppliesSupplyIdDelete()**](MarketplaceApi.md#apiV3SuppliesSupplyIdDelete) | **DELETE** /api/v3/supplies/{supplyId} | Удалить поставку |
| [**apiV3SuppliesSupplyIdDeliverPatch()**](MarketplaceApi.md#apiV3SuppliesSupplyIdDeliverPatch) | **PATCH** /api/v3/supplies/{supplyId}/deliver | Передать поставку в доставку |
| [**apiV3SuppliesSupplyIdGet()**](MarketplaceApi.md#apiV3SuppliesSupplyIdGet) | **GET** /api/v3/supplies/{supplyId} | Получить информацию о поставке |
| [**apiV3SuppliesSupplyIdOrdersGet()**](MarketplaceApi.md#apiV3SuppliesSupplyIdOrdersGet) | **GET** /api/v3/supplies/{supplyId}/orders | Получить сборочные задания в поставке |
| [**apiV3SuppliesSupplyIdOrdersOrderIdPatch()**](MarketplaceApi.md#apiV3SuppliesSupplyIdOrdersOrderIdPatch) | **PATCH** /api/v3/supplies/{supplyId}/orders/{orderId} | Добавить к поставке сборочное задание |
| [**apiV3SuppliesSupplyIdTrbxDelete()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxDelete) | **DELETE** /api/v3/supplies/{supplyId}/trbx | Удалить короба из поставки |
| [**apiV3SuppliesSupplyIdTrbxGet()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxGet) | **GET** /api/v3/supplies/{supplyId}/trbx | Получить список коробов поставки |
| [**apiV3SuppliesSupplyIdTrbxPost()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxPost) | **POST** /api/v3/supplies/{supplyId}/trbx | Добавить короба к поставке |
| [**apiV3SuppliesSupplyIdTrbxStickersPost()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxStickersPost) | **POST** /api/v3/supplies/{supplyId}/trbx/stickers | Получить стикеры коробов поставки |
| [**apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete) | **DELETE** /api/v3/supplies/{supplyId}/trbx/{trbxId}/orders/{orderId} | Удалить заказ из короба |
| [**apiV3SuppliesSupplyIdTrbxTrbxIdPatch()**](MarketplaceApi.md#apiV3SuppliesSupplyIdTrbxTrbxIdPatch) | **PATCH** /api/v3/supplies/{supplyId}/trbx/{trbxId} | Добавить заказы к коробу |
| [**apiV3WarehousesGet()**](MarketplaceApi.md#apiV3WarehousesGet) | **GET** /api/v3/warehouses | Получить список складов продавца |
| [**apiV3WarehousesPost()**](MarketplaceApi.md#apiV3WarehousesPost) | **POST** /api/v3/warehouses | Создать склад продавца |
| [**apiV3WarehousesWarehouseIdDelete()**](MarketplaceApi.md#apiV3WarehousesWarehouseIdDelete) | **DELETE** /api/v3/warehouses/{warehouseId} | Удалить склад продавца |
| [**apiV3WarehousesWarehouseIdPut()**](MarketplaceApi.md#apiV3WarehousesWarehouseIdPut) | **PUT** /api/v3/warehouses/{warehouseId} | Обновить склад |


## `apiV3FilesOrdersExternalStickersPost()`

```php
apiV3FilesOrdersExternalStickersPost($api_v3_orders_stickers_post_request): \OpenAPI\Client\Model\ApiV3FilesOrdersExternalStickersPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список ссылок на этикетки для сборочных заданий, которые требуются при кроссбордере

Возвращает список ссылок на этикетки для сборочных заданий, которые требуются при кроссбордере.  **Ограничения при работе с методом**: - Нельзя запросить больше 100 этикеток за раз (не более 100 идентификаторов сборочных заданий в запросе). - Метод возвращает этикетки только для сборочных заданий, находящихся на сборке (в статусе **confirm**).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v3_orders_stickers_post_request = new \OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest(); // \OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3FilesOrdersExternalStickersPost($api_v3_orders_stickers_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3FilesOrdersExternalStickersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v3_orders_stickers_post_request** | [**\OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest**](../Model/ApiV3OrdersStickersPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3FilesOrdersExternalStickersPost200Response**](../Model/ApiV3FilesOrdersExternalStickersPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OfficesGet()`

```php
apiV3OfficesGet(): \OpenAPI\Client\Model\Office[]
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список складов WB

Возвращает список всех складов WB для привязки к складам продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OfficesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OfficesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Office[]**](../Model/Office.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersGet()`

```php
apiV3OrdersGet($limit, $next, $date_from, $date_to): \OpenAPI\Client\Model\ApiV3OrdersGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить информацию по сборочным заданиям

Возвращает информацию по сборочным заданиям без их актуального статуса.  Данные по сборочному заданию, возвращающиеся в данном методе, не меняются. Рекомендуется использовать для получения исторических данных.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Параметр пагинации. Устанавливает предельное количество возвращаемых данных.
$next = 56; // int | Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. Для следующих запросов необходимо брать значения из одноимённого поля в ответе.
$date_from = 56; // int | Дата начала периода в формате Unix timestamp. Необязательный параметр.
$date_to = 56; // int | Дата конца периода в формате Unix timestamp. Необязательный параметр.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OrdersGet($limit, $next, $date_from, $date_to, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Параметр пагинации. Устанавливает предельное количество возвращаемых данных. | |
| **next** | **int**| Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. Для следующих запросов необходимо брать значения из одноимённого поля в ответе. | |
| **date_from** | **int**| Дата начала периода в формате Unix timestamp. Необязательный параметр. | [optional] |
| **date_to** | **int**| Дата конца периода в формате Unix timestamp. Необязательный параметр. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3OrdersGet200Response**](../Model/ApiV3OrdersGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersNewGet()`

```php
apiV3OrdersNewGet(): \OpenAPI\Client\Model\ApiV3OrdersNewGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список новых сборочных заданий

Возвращает список всех новых сборочных заданий у продавца на данный момент.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OrdersNewGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersNewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3OrdersNewGet200Response**](../Model/ApiV3OrdersNewGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdCancelPatch()`

```php
apiV3OrdersOrderIdCancelPatch($order_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Отменить сборочное задание

Переводит сборочное задание в статус **cancel** (\"Отменено продавцом\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdCancelPatch($order_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdCancelPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaDelete()`

```php
apiV3OrdersOrderIdMetaDelete($order_id, $key)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить метаданные сборочного задания

Удаляет значение метаданных заказа для переданного ключа. Возможные метаданные **imei**, **uin**, **gtin**. Передается только одно значение.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания
$key = 'key_example'; // string | Название метаданных для удаления (**imei**, **uin**, **gtin**). Передается только одно значение.

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdMetaDelete($order_id, $key, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| **key** | **string**| Название метаданных для удаления (**imei**, **uin**, **gtin**). Передается только одно значение. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaGet()`

```php
apiV3OrdersOrderIdMetaGet($order_id): \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить метаданные сборочного задания

Возвращает метаданные заказа. Возможные метаданные **imei**, **uin**, **gtin**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OrdersOrderIdMetaGet($order_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaGet200Response**](../Model/ApiV3OrdersOrderIdMetaGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaGtinPut()`

```php
apiV3OrdersOrderIdMetaGtinPut($order_id, $api_v3_orders_order_id_meta_gtin_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Закрепить за сборочным заданием GTIN

Обновляет GTIN сборочного задания. У одного сборочного задания может быть только один GTIN. Добавлять маркировку можно только для заказов в статусе `confirm`. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания
$api_v3_orders_order_id_meta_gtin_put_request = new \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaGtinPutRequest(); // \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaGtinPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdMetaGtinPut($order_id, $api_v3_orders_order_id_meta_gtin_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaGtinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| **api_v3_orders_order_id_meta_gtin_put_request** | [**\OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaGtinPutRequest**](../Model/ApiV3OrdersOrderIdMetaGtinPutRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaImeiPut()`

```php
apiV3OrdersOrderIdMetaImeiPut($order_id, $api_v3_orders_order_id_meta_imei_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Закрепить за сборочным заданием IMEI

Обновляет IMEI сборочного задания. У одного сборочного задания может быть только один IMEI. Добавлять маркировку можно только для заказов в статусе `confirm`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания
$api_v3_orders_order_id_meta_imei_put_request = new \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaImeiPutRequest(); // \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaImeiPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdMetaImeiPut($order_id, $api_v3_orders_order_id_meta_imei_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaImeiPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| **api_v3_orders_order_id_meta_imei_put_request** | [**\OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaImeiPutRequest**](../Model/ApiV3OrdersOrderIdMetaImeiPutRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaSgtinPost()`

```php
apiV3OrdersOrderIdMetaSgtinPost($order_id, $api_v3_orders_order_id_meta_sgtin_post_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Закрепить за сборочным заданием КиЗ (маркировку Честного знака)

Метод позволяет закрепить за сборочным заданием КиЗ (маркировку Честного знака). У одного сборочного задания не может быть больше 24 маркировок. Добавлять маркировку можно только для заказов в статусе `confirm`. <br> <br> Параметры `sid`, `numerator`, `denominator` опциональны. Заполняются в зависимости от специфики товара. <br> <br> `Важно!` Получить загруженные КиЗ можно только в личном кабинете. Для этого необходимо: <ol>  <li>Зайти в раздел Маркетплейс - Сборочные задания</li>  <li>Пройти в любую из перечисленных вкладок (<code>На сборке</code>, <code>В доставке</code>, <code>Архив</code>)</li>  <li>Зайти в детализацию поставки</li>  <li>Нажать кнопку \"Выгрузить в Excel\"</li>  <li>В полученном файле открыть лист КИЗы</li> </ol> Получить загруженные КиЗ можно по всем заказам, кроме: <code>Новые</code>, <code>Отменено продавцом</code>.<br> <br> С правилами работы с КиЗ можно ознакомиться тут: https://честныйзнак.рф <br> <br> О реализации API-функционала для получения загруженных КиЗ будет сообщено в разделе Новости, на портале продавцов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания
$api_v3_orders_order_id_meta_sgtin_post_request = new \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaSgtinPostRequest(); // \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaSgtinPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdMetaSgtinPost($order_id, $api_v3_orders_order_id_meta_sgtin_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaSgtinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| **api_v3_orders_order_id_meta_sgtin_post_request** | [**\OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaSgtinPostRequest**](../Model/ApiV3OrdersOrderIdMetaSgtinPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersOrderIdMetaUinPut()`

```php
apiV3OrdersOrderIdMetaUinPut($order_id, $api_v3_orders_order_id_meta_uin_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Закрепить за сборочным заданием УИН (уникальный идентификационный номер)

Обновляет УИН сборочного задания. У одного сборочного задания может быть только один УИН. Добавлять маркировку можно только для заказов в статусе `confirm`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 5632423; // int | ID сборочного задания
$api_v3_orders_order_id_meta_uin_put_request = new \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaUinPutRequest(); // \OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaUinPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3OrdersOrderIdMetaUinPut($order_id, $api_v3_orders_order_id_meta_uin_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersOrderIdMetaUinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID сборочного задания | |
| **api_v3_orders_order_id_meta_uin_put_request** | [**\OpenAPI\Client\Model\ApiV3OrdersOrderIdMetaUinPutRequest**](../Model/ApiV3OrdersOrderIdMetaUinPutRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersStatusPost()`

```php
apiV3OrdersStatusPost($api_v3_orders_status_post_request): \OpenAPI\Client\Model\ApiV3OrdersStatusPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить статусы сборочных заданий

Возвращает статусы сборочных заданий по переданному списку идентификаторов сборочных заданий.  **supplierStatus** - статус сборочного задания, триггером изменения которого является сам продавец.<br> Возможны следующие значения данного поля: | Статус   | Описание            | Как перевести сборочное задание в данный статус | | -------  | ---------           | --------------------------------------| | new      | Новое сборочное задание |           | confirm  | На сборке            | При добавлении сборочного задания к поставке **PATCH** *_/api/v3/supplies/{supplyId}/orders/{orderId}* | complete | В доставке           | При переводе в доставку соответствующей поставки **PATCH** *_/api/v3/supplies/{supplyId}/deliver* | cancel   | Отменено продавцом   | **PATCH** *_/api/v3/orders/{orderId}/cancel*   **wbStatus** - статус сборочного задания в системе Wildberries.<br> Возможны следующие значения данного поля: - **waiting** - сборочное задание в работе - **sorted** - сборочное задание отсортировано - **sold** - сборочное задание получено покупателем - **canceled** - отмена сборочного задания - **canceled_by_client** - отмена сборочного задания покупателем - **defect** - отмена сборочного задания по причине брака - **ready_for_pickup** - сборочное задание прибыло на ПВЗ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v3_orders_status_post_request = new \OpenAPI\Client\Model\ApiV3OrdersStatusPostRequest(); // \OpenAPI\Client\Model\ApiV3OrdersStatusPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OrdersStatusPost($api_v3_orders_status_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v3_orders_status_post_request** | [**\OpenAPI\Client\Model\ApiV3OrdersStatusPostRequest**](../Model/ApiV3OrdersStatusPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3OrdersStatusPost200Response**](../Model/ApiV3OrdersStatusPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3OrdersStickersPost()`

```php
apiV3OrdersStickersPost($type, $width, $height, $api_v3_orders_stickers_post_request): \OpenAPI\Client\Model\ApiV3OrdersStickersPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить этикетки для сборочных заданий

Возвращает список этикеток по переданному массиву сборочных заданий. Можно запросить этикетку в формате svg, zplv (вертикальный), zplh (горизонтальный), png.  **Ограничения при работе с методом**: - Нельзя запросить больше 100 этикеток за раз (не более 100 идентификаторов сборочных заданий в запросе). - Метод возвращает этикетки только для сборочных заданий, находящихся на сборке (в статусе **confirm**). - Доступные размеры: <dd>580x400 пикселей, при параметрах width = 58, height = 40</dd> <dd>400x300 пикселей, при параметрах width = 40, height = 30</dd>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Тип этикетки
$width = 56; // int | Ширина этикетки
$height = 56; // int | Высота этикетки
$api_v3_orders_stickers_post_request = new \OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest(); // \OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3OrdersStickersPost($type, $width, $height, $api_v3_orders_stickers_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3OrdersStickersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Тип этикетки | |
| **width** | **int**| Ширина этикетки | |
| **height** | **int**| Высота этикетки | |
| **api_v3_orders_stickers_post_request** | [**\OpenAPI\Client\Model\ApiV3OrdersStickersPostRequest**](../Model/ApiV3OrdersStickersPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3OrdersStickersPost200Response**](../Model/ApiV3OrdersStickersPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3PassesGet()`

```php
apiV3PassesGet(): \OpenAPI\Client\Model\Pass[]
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список пропусков

Возвращает список всех пропусков продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3PassesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3PassesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Pass[]**](../Model/Pass.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3PassesOfficesGet()`

```php
apiV3PassesOfficesGet(): \OpenAPI\Client\Model\PassOffice[]
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список складов, для которых требуется пропуск

Возвращает список складов для привязки к пропуску продавца. <br> Обратите внимание: данные, которые возвращает метод, могут меняться. Рекомендуем периодически синхронизировать список.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3PassesOfficesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3PassesOfficesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PassOffice[]**](../Model/PassOffice.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3PassesPassIdDelete()`

```php
apiV3PassesPassIdDelete($pass_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить пропуск

Удаляет пропуск продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pass_id = 45; // int | ID пропуска

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3PassesPassIdDelete($pass_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3PassesPassIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pass_id** | **int**| ID пропуска | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3PassesPassIdPut()`

```php
apiV3PassesPassIdPut($pass_id, $api_v3_passes_pass_id_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Обновить пропуск

Обновляет данные пропуска продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pass_id = 45; // int | ID пропуска
$api_v3_passes_pass_id_put_request = new \OpenAPI\Client\Model\ApiV3PassesPassIdPutRequest(); // \OpenAPI\Client\Model\ApiV3PassesPassIdPutRequest | Общая длина ФИО ограничена от 6 до 100 символов. В номере машины могут быть только буквы и цифры.

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3PassesPassIdPut($pass_id, $api_v3_passes_pass_id_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3PassesPassIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pass_id** | **int**| ID пропуска | |
| **api_v3_passes_pass_id_put_request** | [**\OpenAPI\Client\Model\ApiV3PassesPassIdPutRequest**](../Model/ApiV3PassesPassIdPutRequest.md)| Общая длина ФИО ограничена от 6 до 100 символов. В номере машины могут быть только буквы и цифры. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3PassesPost()`

```php
apiV3PassesPost($api_v3_passes_post_request): \OpenAPI\Client\Model\ApiV3PassesPost201Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создать пропуск

Создает пропуск продавца. <br> Пропуск действует 48 часов со времени создания. Метод ограничен одним вызовом в 10 минут.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v3_passes_post_request = new \OpenAPI\Client\Model\ApiV3PassesPostRequest(); // \OpenAPI\Client\Model\ApiV3PassesPostRequest | Общая длина ФИО ограничена от 6 до 100 символов. В номере машины могут быть только буквы и цифры.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3PassesPost($api_v3_passes_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3PassesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v3_passes_post_request** | [**\OpenAPI\Client\Model\ApiV3PassesPostRequest**](../Model/ApiV3PassesPostRequest.md)| Общая длина ФИО ограничена от 6 до 100 символов. В номере машины могут быть только буквы и цифры. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3PassesPost201Response**](../Model/ApiV3PassesPost201Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3StocksWarehouseIdDelete()`

```php
apiV3StocksWarehouseIdDelete($warehouse_id, $api_v3_stocks_warehouse_id_delete_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить остатки товаров

Удаляет остатки товаров. **Внимание! Действие необратимо**. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_delete_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdDeleteRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdDeleteRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3StocksWarehouseIdDelete($warehouse_id, $api_v3_stocks_warehouse_id_delete_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3StocksWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| **api_v3_stocks_warehouse_id_delete_request** | [**\OpenAPI\Client\Model\ApiV3StocksWarehouseIdDeleteRequest**](../Model/ApiV3StocksWarehouseIdDeleteRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3StocksWarehouseIdPost()`

```php
apiV3StocksWarehouseIdPost($warehouse_id, $api_v3_stocks_warehouse_id_post_request): \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить остатки товаров

Возвращает остатки товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_post_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPostRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3StocksWarehouseIdPost($warehouse_id, $api_v3_stocks_warehouse_id_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3StocksWarehouseIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| **api_v3_stocks_warehouse_id_post_request** | [**\OpenAPI\Client\Model\ApiV3StocksWarehouseIdPostRequest**](../Model/ApiV3StocksWarehouseIdPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3StocksWarehouseIdPost200Response**](../Model/ApiV3StocksWarehouseIdPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3StocksWarehouseIdPut()`

```php
apiV3StocksWarehouseIdPut($warehouse_id, $api_v3_stocks_warehouse_id_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Обновить остатки товаров

Обновляет остатки товаров. <br> `Важно!` Имена параметров запроса не валидируются. При отправке некорректных имен Вы получите успешный ответ(204), но остатки не обновятся.<br> Тщательнее проверяйте данные перед отправкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_put_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPutRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3StocksWarehouseIdPut($warehouse_id, $api_v3_stocks_warehouse_id_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3StocksWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| **api_v3_stocks_warehouse_id_put_request** | [**\OpenAPI\Client\Model\ApiV3StocksWarehouseIdPutRequest**](../Model/ApiV3StocksWarehouseIdPutRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesGet()`

```php
apiV3SuppliesGet($limit, $next): \OpenAPI\Client\Model\ApiV3SuppliesGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список поставок

Возвращает список поставок

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Параметр пагинации. Устанавливает предельное количество возвращаемых данных.
$next = 56; // int | Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. Для следующих запросов необходимо брать значения из одноимённого поля в ответе.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesGet($limit, $next, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Параметр пагинации. Устанавливает предельное количество возвращаемых данных. | |
| **next** | **int**| Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. Для следующих запросов необходимо брать значения из одноимённого поля в ответе. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesGet200Response**](../Model/ApiV3SuppliesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesPost()`

```php
apiV3SuppliesPost($api_v3_supplies_post_request): \OpenAPI\Client\Model\ApiV3SuppliesPost201Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создать новую поставку

**Ограничения работы с поставками**:  - Только для сборочных заданий по схеме \"Везу на склад WB\" - При добавлении в поставку все передаваемые сборочные задания в статусе **new** (\"Новое\") будут автоматически переведены в статус **confirm** (\"На сборке\"). - Обратите внимание, что если вы переведёте сборочное задание в статус **cancel** (\"Отмена продавцом\"), то сборочное задание автоматически удалится из поставки, если было прикреплено к ней. - Поставку можно собрать только из одного типа сборочных заданий: сКГТ (isLargeCargo = true) или обычный (isLargeCargo = false). Новая поставка не обладает сКГТ-признаком. При добавлении первого заказа в поставку она приобретает сКГТ-признак добавляемого товара в заказе.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v3_supplies_post_request = new \OpenAPI\Client\Model\ApiV3SuppliesPostRequest(); // \OpenAPI\Client\Model\ApiV3SuppliesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesPost($api_v3_supplies_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v3_supplies_post_request** | [**\OpenAPI\Client\Model\ApiV3SuppliesPostRequest**](../Model/ApiV3SuppliesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesPost201Response**](../Model/ApiV3SuppliesPost201Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdBarcodeGet()`

```php
apiV3SuppliesSupplyIdBarcodeGet($supply_id, $type): \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdBarcodeGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить QR поставки

Возвращает QR в svg, zplv (вертикальный), zplh (горизонтальный), png. <br> Можно получить, только если поставка передана в доставку. <dt>Доступные размеры:</dt> <dd>580x400 пикселей

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$type = 'type_example'; // string | Тип этикетки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdBarcodeGet($supply_id, $type, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **type** | **string**| Тип этикетки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdBarcodeGet200Response**](../Model/ApiV3SuppliesSupplyIdBarcodeGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdDelete()`

```php
apiV3SuppliesSupplyIdDelete($supply_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить поставку

Удаляет поставку, если она активна и за ней не закреплено ни одно сборочное задание.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdDelete($supply_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdDeliverPatch()`

```php
apiV3SuppliesSupplyIdDeliverPatch($supply_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Передать поставку в доставку

Закрывает поставку и переводит все сборочные задания в ней в статус **complete** (\"В доставке\"). После закрытия поставки новые сборочные задания к ней добавить будет невозможно. Передать поставку в доставку можно только при наличии в ней хотя бы одного сборочного задания и отсутствии пустых коробов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdDeliverPatch($supply_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdDeliverPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdGet()`

```php
apiV3SuppliesSupplyIdGet($supply_id): \OpenAPI\Client\Model\Supply
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить информацию о поставке

Возвращает информацию о поставке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdGet($supply_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Supply**](../Model/Supply.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdOrdersGet()`

```php
apiV3SuppliesSupplyIdOrdersGet($supply_id): \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdOrdersGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить сборочные задания в поставке

Возвращает сборочные задания, закреплённые за поставкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdOrdersGet($supply_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdOrdersGet200Response**](../Model/ApiV3SuppliesSupplyIdOrdersGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdOrdersOrderIdPatch()`

```php
apiV3SuppliesSupplyIdOrdersOrderIdPatch($supply_id, $order_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавить к поставке сборочное задание

Добавляет к поставке сборочное задание и переводит его в статус **confirm** (\"На сборке\").  Также может перемещать сборочное задание между активными поставками, либо из закрытой в активную при условии, что сборочное задание требует повторной отгрузки. Добавить в поставку возможно только задания с соответствующим сКГТ-признаком (isLargeCargo), либо если поставке ещё не присвоен сКГТ-признак (isLargeCargo = null).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$order_id = 5632423; // int | ID сборочного задания

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdOrdersOrderIdPatch($supply_id, $order_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdOrdersOrderIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **order_id** | **int**| ID сборочного задания | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxDelete()`

```php
apiV3SuppliesSupplyIdTrbxDelete($supply_id, $api_v3_supplies_supply_id_trbx_delete_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить короба из поставки

Убирает заказы из перечисленных коробов поставки и удаляет короба. Можно удалить, только пока поставка на сборке. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$api_v3_supplies_supply_id_trbx_delete_request = new \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxDeleteRequest(); // \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxDeleteRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdTrbxDelete($supply_id, $api_v3_supplies_supply_id_trbx_delete_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **api_v3_supplies_supply_id_trbx_delete_request** | [**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxDeleteRequest**](../Model/ApiV3SuppliesSupplyIdTrbxDeleteRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxGet()`

```php
apiV3SuppliesSupplyIdTrbxGet($supply_id): \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список коробов поставки

Возвращает список коробов и идентификаторы заказов, входящих в них. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdTrbxGet($supply_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxGet200Response**](../Model/ApiV3SuppliesSupplyIdTrbxGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxPost()`

```php
apiV3SuppliesSupplyIdTrbxPost($supply_id, $api_v3_supplies_supply_id_trbx_post_request): \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxPost201Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавить короба к поставке

Добавляет требуемое количество коробов в поставку. Можно добавить, только пока поставка на сборке. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$api_v3_supplies_supply_id_trbx_post_request = new \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxPostRequest(); // \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdTrbxPost($supply_id, $api_v3_supplies_supply_id_trbx_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **api_v3_supplies_supply_id_trbx_post_request** | [**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxPostRequest**](../Model/ApiV3SuppliesSupplyIdTrbxPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxPost201Response**](../Model/ApiV3SuppliesSupplyIdTrbxPost201Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxStickersPost()`

```php
apiV3SuppliesSupplyIdTrbxStickersPost($supply_id, $type, $api_v3_supplies_supply_id_trbx_stickers_post_request): \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxStickersPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить стикеры коробов поставки

Возвращает стикеры QR в svg, zplv (вертикальный), zplh (горизонтальный), png. <span class=\"newM\">new</span> <br> Можно получить, только если в коробе есть заказы. <dt>Размер стикеров: 580x400 пикселей</dt>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$type = 'type_example'; // string | Тип этикетки
$api_v3_supplies_supply_id_trbx_stickers_post_request = new \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxStickersPostRequest(); // \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxStickersPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3SuppliesSupplyIdTrbxStickersPost($supply_id, $type, $api_v3_supplies_supply_id_trbx_stickers_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxStickersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **type** | **string**| Тип этикетки | |
| **api_v3_supplies_supply_id_trbx_stickers_post_request** | [**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxStickersPostRequest**](../Model/ApiV3SuppliesSupplyIdTrbxStickersPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxStickersPost200Response**](../Model/ApiV3SuppliesSupplyIdTrbxStickersPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete()`

```php
apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete($supply_id, $trbx_id, $order_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить заказ из короба

Удаляет заказ из короба выбранной поставки. Можно удалить, только пока поставка на сборке. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$trbx_id = WB-TRBX-1234567; // string | ID короба
$order_id = 5632423; // int | ID сборочного задания

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete($supply_id, $trbx_id, $order_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **trbx_id** | **string**| ID короба | |
| **order_id** | **int**| ID сборочного задания | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3SuppliesSupplyIdTrbxTrbxIdPatch()`

```php
apiV3SuppliesSupplyIdTrbxTrbxIdPatch($supply_id, $trbx_id, $api_v3_supplies_supply_id_trbx_trbx_id_patch_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавить заказы к коробу

Добавляет заказы в короб для выбранной поставки. Можно добавить, только пока поставка на сборке. <span class=\"newM\">new</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply_id = WB-GI-1234567; // string | ID поставки
$trbx_id = WB-TRBX-1234567; // string | ID короба
$api_v3_supplies_supply_id_trbx_trbx_id_patch_request = new \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest(); // \OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3SuppliesSupplyIdTrbxTrbxIdPatch($supply_id, $trbx_id, $api_v3_supplies_supply_id_trbx_trbx_id_patch_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3SuppliesSupplyIdTrbxTrbxIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supply_id** | **string**| ID поставки | |
| **trbx_id** | **string**| ID короба | |
| **api_v3_supplies_supply_id_trbx_trbx_id_patch_request** | [**\OpenAPI\Client\Model\ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest**](../Model/ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3WarehousesGet()`

```php
apiV3WarehousesGet(): \OpenAPI\Client\Model\Warehouse[]
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получить список складов продавца

Возвращает список всех складов продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3WarehousesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3WarehousesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Warehouse[]**](../Model/Warehouse.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3WarehousesPost()`

```php
apiV3WarehousesPost($api_v3_warehouses_post_request): \OpenAPI\Client\Model\ApiV3WarehousesPost201Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создать склад продавца

Создает склад продавца. Нельзя привязывать склад WB, который уже используется.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v3_warehouses_post_request = new \OpenAPI\Client\Model\ApiV3WarehousesPostRequest(); // \OpenAPI\Client\Model\ApiV3WarehousesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3WarehousesPost($api_v3_warehouses_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3WarehousesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v3_warehouses_post_request** | [**\OpenAPI\Client\Model\ApiV3WarehousesPostRequest**](../Model/ApiV3WarehousesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV3WarehousesPost201Response**](../Model/ApiV3WarehousesPost201Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3WarehousesWarehouseIdDelete()`

```php
apiV3WarehousesWarehouseIdDelete($warehouse_id)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удалить склад продавца

Удаляет склад продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 1; // int | ID склада продавца

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3WarehousesWarehouseIdDelete($warehouse_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3WarehousesWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV3WarehousesWarehouseIdPut()`

```php
apiV3WarehousesWarehouseIdPut($warehouse_id, $api_v3_warehouses_warehouse_id_put_request)
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Обновить склад

Обновляет склад продавца. Изменение выбранного склада WB допустимо раз в сутки. Нельзя привязывать склад WB, который уже используется.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 1; // int | ID склада продавца
$api_v3_warehouses_warehouse_id_put_request = new \OpenAPI\Client\Model\ApiV3WarehousesWarehouseIdPutRequest(); // \OpenAPI\Client\Model\ApiV3WarehousesWarehouseIdPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3WarehousesWarehouseIdPut($warehouse_id, $api_v3_warehouses_warehouse_id_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->apiV3WarehousesWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| **api_v3_warehouses_warehouse_id_put_request** | [**\OpenAPI\Client\Model\ApiV3WarehousesWarehouseIdPutRequest**](../Model/ApiV3WarehousesWarehouseIdPutRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
