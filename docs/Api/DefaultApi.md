# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contentV1BarcodesPost()**](DefaultApi.md#contentV1BarcodesPost) | **POST** /content/v1/barcodes | Генерация баркодов |
| [**contentV1CardsCursorListPost()**](DefaultApi.md#contentV1CardsCursorListPost) | **POST** /content/v1/cards/cursor/list | Список НМ |
| [**contentV1CardsErrorListGet()**](DefaultApi.md#contentV1CardsErrorListGet) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками |
| [**contentV1CardsFilterPost()**](DefaultApi.md#contentV1CardsFilterPost) | **POST** /content/v1/cards/filter | Получение КТ по артикулам продавца |
| [**contentV1CardsLimitsGet()**](DefaultApi.md#contentV1CardsLimitsGet) | **GET** /content/v1/cards/limits | Лимиты по КТ |
| [**contentV1CardsMoveNmPost()**](DefaultApi.md#contentV1CardsMoveNmPost) | **POST** /content/v1/cards/moveNm | Объединение / Разъединение НМ |
| [**contentV1CardsTrashListPost()**](DefaultApi.md#contentV1CardsTrashListPost) | **POST** /content/v1/cards/trash/list | Список НМ, находящихся в корзине |
| [**contentV1CardsUpdatePost()**](DefaultApi.md#contentV1CardsUpdatePost) | **POST** /content/v1/cards/update | Редактирование КТ |
| [**contentV1CardsUploadAddPost()**](DefaultApi.md#contentV1CardsUploadAddPost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ |
| [**contentV1CardsUploadPost()**](DefaultApi.md#contentV1CardsUploadPost) | **POST** /content/v1/cards/upload | Создание  КТ |
| [**contentV1DirectoryColorsGet()**](DefaultApi.md#contentV1DirectoryColorsGet) | **GET** /content/v1/directory/colors | Цвет |
| [**contentV1DirectoryCountriesGet()**](DefaultApi.md#contentV1DirectoryCountriesGet) | **GET** /content/v1/directory/countries | Страна Производства |
| [**contentV1DirectoryKindsGet()**](DefaultApi.md#contentV1DirectoryKindsGet) | **GET** /content/v1/directory/kinds | Пол |
| [**contentV1DirectorySeasonsGet()**](DefaultApi.md#contentV1DirectorySeasonsGet) | **GET** /content/v1/directory/seasons | Сезон |
| [**contentV1DirectoryTnvedGet()**](DefaultApi.md#contentV1DirectoryTnvedGet) | **GET** /content/v1/directory/tnved | ТНВЭД код |
| [**contentV1MediaFilePost()**](DefaultApi.md#contentV1MediaFilePost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ |
| [**contentV1MediaSavePost()**](DefaultApi.md#contentV1MediaSavePost) | **POST** /content/v1/media/save | Изменение медиа контента КТ |
| [**contentV1ObjectAllGet()**](DefaultApi.md#contentV1ObjectAllGet) | **GET** /content/v1/object/all | Категория товаров |
| [**contentV1ObjectCharacteristicsListFilterGet()**](DefaultApi.md#contentV1ObjectCharacteristicsListFilterGet) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям |
| [**contentV1ObjectCharacteristicsObjectNameGet()**](DefaultApi.md#contentV1ObjectCharacteristicsObjectNameGet) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара |
| [**contentV1ObjectParentAllGet()**](DefaultApi.md#contentV1ObjectParentAllGet) | **GET** /content/v1/object/parent/all | Родительские категории товаров |
| [**contentV1TagIdDelete()**](DefaultApi.md#contentV1TagIdDelete) | **DELETE** /content/v1/tag/{id} | Удаление тега |
| [**contentV1TagIdPatch()**](DefaultApi.md#contentV1TagIdPatch) | **PATCH** /content/v1/tag/{id} | Изменение тега |
| [**contentV1TagNomenclatureLinkPost()**](DefaultApi.md#contentV1TagNomenclatureLinkPost) | **POST** /content/v1/tag/nomenclature/link | Управление тегами в КТ |
| [**contentV1TagPost()**](DefaultApi.md#contentV1TagPost) | **POST** /content/v1/tag | Создание тега |
| [**contentV1TagsGet()**](DefaultApi.md#contentV1TagsGet) | **GET** /content/v1/tags | Список тегов |


## `contentV1BarcodesPost()`

```php
contentV1BarcodesPost($content_v1_barcodes_post_request): \OpenAPI\Client\Model\ContentV1BarcodesPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Генерация баркодов

Метод позволяет сгенерировать массив уникальных баркодов для создания размера НМ в КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_barcodes_post_request = new \OpenAPI\Client\Model\ContentV1BarcodesPostRequest(); // \OpenAPI\Client\Model\ContentV1BarcodesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1BarcodesPost($content_v1_barcodes_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1BarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_barcodes_post_request** | [**\OpenAPI\Client\Model\ContentV1BarcodesPostRequest**](../Model/ContentV1BarcodesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1BarcodesPost200Response**](../Model/ContentV1BarcodesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsCursorListPost()`

```php
contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request): \OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список НМ

Метод позволяет получить список созданых НМ по фильтру (баркод, артикул продавца, артикул WB (nmId), тег) с пагинацией и сортировкой. <br> <br> `Важно!` Карточки, находящиеся в корзине, в ответе метода не выдаются. <br> Получить такие карточки можно только методом \"Список НМ, находящихся в корзине\".<br> <br>Порядок работы с `cursor/list`: <br> Чтобы получить полный список номенклатур, <b>если их > 1000</b>, необходимо воспользоваться пагинацией.   <ol>     <li>Cделать первый запрос (все указанные ниже параметры обязательны): <br>       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         {           \"sort\": {               \"cursor\": {                   \"limit\": 1000               },               \"filter\": {                   \"withPhoto\": -1               }           }         }</pre>       По желанию можно добавить поиск по <code>\"textSearch\"</code> и сортировку.       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         \"sort\": {           \"sortColumn\": \"\",           \"ascending\": false         }</pre>     </li>     <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:       <ul>         <li><code>\"updatedAt\": \"***\"</code>,</li>         <li><code>\"nmID\": ***</code>,</li>       </ul>     <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить вызов метода. </li>     <li>Повторять пункты <b>2</b> и <b>3</b>, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе.       <br>Это будет означать, что Вы получили все карточки.   </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_cursor_list_post_request = new \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsCursorListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_cursor_list_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest**](../Model/ContentV1CardsCursorListPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response**](../Model/ContentV1CardsCursorListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsErrorListGet()`

```php
contentV1CardsErrorListGet(): \OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список несозданных НМ с ошибками

Метод позволяет получить список НМ и список ошибок которые произошли во время создания КТ. <br>`ВАЖНО`: Для того чтобы убрать НМ из ошибочных, надо повторно сделать запрос с исправленными ошибками на создание КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsErrorListGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsErrorListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response**](../Model/ContentV1CardsErrorListGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsFilterPost()`

```php
contentV1CardsFilterPost($content_v1_cards_filter_post_request): \OpenAPI\Client\Model\ContentV1CardsFilterPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получение КТ по артикулам продавца

Метод позволяет получить полную информацию по КТ с помощью артикула(-ов) продавца. <br> `Важно!` Карточки, находящиеся в корзине, в ответе метода не выдаются. <br> Получить такие карточки можно только методом \"Список НМ, находящихся в корзине\".<br>  Поиск работает только по полному совпадению значений. Получить точные значения для поиска можно методом \"Список НМ\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_filter_post_request = new \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsFilterPost($content_v1_cards_filter_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsFilterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_filter_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPostRequest**](../Model/ContentV1CardsFilterPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsFilterPost200Response**](../Model/ContentV1CardsFilterPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsLimitsGet()`

```php
contentV1CardsLimitsGet(): \OpenAPI\Client\Model\ContentV1CardsLimitsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Лимиты по КТ

Метод позволяет получить отдельно бесплатные и платные лимиты продавца на создание карточек товаров. <br> Формула для получения количества карточек, которые можно создать: (`freeLimits` + `paidLimits`) - Количество созданных карточек.<br> Созданными считаются все карточки, которые можно получить методами \"Список НМ\" и \"Список НМ, находящихся в корзине\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsLimitsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsLimitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsLimitsGet200Response**](../Model/ContentV1CardsLimitsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsMoveNmPost()`

```php
contentV1CardsMoveNmPost($content_v1_cards_move_nm_post_request): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Объединение / Разъединение НМ

Метод позволяет объединять номенклатуры (`nmID`) под одним `imtID` и разъединять их.<br> Для объединения НМ необходимо отправить запрос со списком НМ с заполненным параметром `targetIMT` в теле запроса.  При этом все НМ объединятся под `imtID` указанном в `targetIMT`. <br> <br> Чтобы отсоединить НМ от карточки, необходимо передать эту НМ без параметра `targetIMT` в теле запроса.<br> При этом для передаваемой НМ создается новый `imtID`. <br> Если в запросе передается несколько НМ, то все они автоматически объединятся под <b>одним</b> новым `imtID`. <br> Чтобы присвоить каждой НМ уникальный `imtID` необходимо передавать по одной НМ за запрос. Для НМ, не участвующих в запросе, никаких изменений не происходит.<br> <br> `ВАЖНО:` Объединить можно только номенклатуры с одинаковыми предметами.<br> `ВАЖНО:` В одной КТ (под одним `imtID`) не может быть больше 30 номенклатур (`nmID`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_move_nm_post_request = new \OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsMoveNmPost($content_v1_cards_move_nm_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsMoveNmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_move_nm_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest**](../Model/ContentV1CardsMoveNmPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseCardCreate**](../Model/ResponseCardCreate.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsTrashListPost()`

```php
contentV1CardsTrashListPost($content_v1_cards_trash_list_post_request): \OpenAPI\Client\Model\ContentV1CardsTrashListPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список НМ, находящихся в корзине

Метод позволяет получить список НМ, находящихся в корзине.<br> Метод позволяет получить список НМ, которые находятся в корзине по фильтру (баркод (<code>skus</code>), артикул продавца(<code>vendorCode</code>), артикул WB(<code>nmID</code>)) с пагинацией и сортировкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_trash_list_post_request = {"sort":{"sortColumn":"updateAt","ascending":false,"searchValue":"vendorCodeOne","offset":0,"limit":50}}; // \OpenAPI\Client\Model\ContentV1CardsTrashListPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsTrashListPost($content_v1_cards_trash_list_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsTrashListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_trash_list_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsTrashListPostRequest**](../Model/ContentV1CardsTrashListPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsTrashListPost200Response**](../Model/ContentV1CardsTrashListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUpdatePost()`

```php
contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Редактирование КТ

Метод позволяет отредактировать несколько карточек за раз. <br> Редактирование КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br> `Важно`: Баркоды (skus) не подлежат удалению или замене. Попытка заменить существующий баркод приведет к добавлению нового баркода к существующему. <br> Если запрос прошел успешно, а информация в карточке не обновилась, значит были допущены ошибки и карточка попала в \"Черновики\" (метод `cards/error/list`) с описанием ошибок. <br>Необходимо исправить ошибки в запросе и отправить его повторно. <br> <br> Для успешного обновления карточки рекомендуем Вам придерживаться следующего порядка действий: <br> 1. Сначала существующую карточку необходимо запросить методом cards/filter. <br> 2. Забираем из ответа массив data. <br> 3. В этом массиве вносим необходимые изменения и отправляем его в cards/update <br> <br>За раз можно отредактировать 1000 КТ по 5 НМ в каждой. <br> <br> `Важно`: Изменение цен данным методом невозможно, используйте метод Загрузка цен, раздел документации Цены.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_update_post_request_inner = array(new \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner()); // \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_update_post_request_inner** | [**\OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]**](../Model/ContentV1CardsUpdatePostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadAddPost()`

```php
contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление НМ к КТ

Метод позволяет добавить к карточке товара новую номенклатуру. <br>Добавление НМ к КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br>`Важно`: Если после успешной отправки запроса номенклатура не создалась, то необходимо проверить раздел \"Список несозданных НМ с ошибками\". Для того чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_upload_add_post_request = {"vendorCode":"6000000001","cards":[{"characteristics":[{"ТНВЭД":"4203100001"},{"Ширина упаковки":2},{"Длина упаковки":2},{"Высота упаковки":2},{"Пол":["Женский"]},{"Цвет":["красный"]},{"Предмет":"Платья"},{"Стилистика":["casual"]},{"Комплектация":["Платье женское - 1шт"]},{"Бренд":["GlisH"]}],"vendorCode":"6000000002","sizes":[{"techSize":"38-39","wbSize":"38-39","price":3000,"skus":["test333333331"]}]}]}; // \OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_upload_add_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest**](../Model/ContentV1CardsUploadAddPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadPost()`

```php
contentV1CardsUploadPost($creating_card_inner_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создание  КТ

Создание карточки товара происходит асинхронно, при отправке запроса на создание КТ ваш запрос становится в очередь на создание КТ. <br>`ПРИМЕЧАНИЕ`: Карточка товара считается `созданной`, если успешно создалась хотя бы одна `НМ`. <br>`ВАЖНО`: Если во время обработки запроса в очереди выявляются ошибки, то НМ считается ошибочной. <br>Если запрос на создание прошел успешно, а карточка не создалась, то необходимо в первую очередь проверить наличие карточки в методе `cards/error/list`. Если карточка попала в ответ к этому методу, то необходимо исправить описанные ошибки в запросе на создание карточки и отправить его повторно. <br>За раз можно создать 1000 КТ по 5 НМ в каждой.  <br>Если Вам требуется больше 5 НМ в КТ, то после создания карточки Вы можете добавить их методом \"Добавление НМ к КТ\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creating_card_inner_inner = NULL; // \OpenAPI\Client\Model\CreatingCardInnerInner[][]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadPost($creating_card_inner_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creating_card_inner_inner** | [**\OpenAPI\Client\Model\CreatingCardInnerInner[][]**](../Model/array.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryColorsGet()`

```php
contentV1DirectoryColorsGet(): \OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Цвет

Получение значения характеристики цвет.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryColorsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response**](../Model/ContentV1DirectoryColorsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryCountriesGet()`

```php
contentV1DirectoryCountriesGet(): \OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Страна Производства

Получение значения характеристики Страна Производства.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryCountriesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response**](../Model/ContentV1DirectoryCountriesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryKindsGet()`

```php
contentV1DirectoryKindsGet(): \OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Пол

Получение значения характеристики пол.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryKindsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryKindsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response**](../Model/ContentV1DirectoryKindsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectorySeasonsGet()`

```php
contentV1DirectorySeasonsGet(): \OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сезон

Получение значения характеристики Сезон.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectorySeasonsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectorySeasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response**](../Model/ContentV1DirectorySeasonsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryTnvedGet()`

```php
contentV1DirectoryTnvedGet($object_name, $tnveds_like): \OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
ТНВЭД код

С помощью данного метода можно получить список ТНВЭД кодов по имени категории и фильтру по тнвэд коду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Блузки; // string | Поиск по наименованию категории
$tnveds_like = 4203100001; // string | Поиск по коду ТНВЭД. <b>Параметр работает только в паре с параметром objectName.</b>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryTnvedGet($object_name, $tnveds_like, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryTnvedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | [optional] |
| **tnveds_like** | **string**| Поиск по коду ТНВЭД. &lt;b&gt;Параметр работает только в паре с параметром objectName.&lt;/b&gt; | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response**](../Model/ContentV1DirectoryTnvedGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaFilePost()`

```php
contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление медиа контента в КТ

Метод позволяет загрузить и добавить один медиафайл за запрос, к НМ в КТ. <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 900x1200. <br>Максимально допустимое количество фото в КТ 30. <br>Допустимые форматы изображений - jpg и png. <br>Минимальный уровень качества изображения - 85%.   <br>`Видео`: максимальный размер 50 мб. Форматы MOV, MP4. <br>Максимально допустимое количество видео в КТ 1.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_vendor_code = 6000000001; // string | Артикул продавца
$x_photo_number = 2; // int | Номер медиафайла на загрузку. <b>Начинать с 1</b>.<br>При загрузке видео всегда указывать значение 1. <br>Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов.
$uploadfile = "/path/to/file.txt"; // \SplFileObject

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_vendor_code** | **string**| Артикул продавца | |
| **x_photo_number** | **int**| Номер медиафайла на загрузку. &lt;b&gt;Начинать с 1&lt;/b&gt;.&lt;br&gt;При загрузке видео всегда указывать значение 1. &lt;br&gt;Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов. | |
| **uploadfile** | **\SplFileObject****\SplFileObject**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaSavePost()`

```php
contentV1MediaSavePost($content_v1_media_save_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Изменение медиа контента КТ

Метод позволяет изменить порядок изображений или удалить медиафайлы с НМ в КТ, а также загрузить изображения в НМ со сторонних ресурсов по URL. <br>Текущие изображения заменяются на переданные в массиве data. <br> <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 900x1200. <br>Максимально допустимое количество фото в КТ 30.  <br>Допустимые форматы изображений - jpg и png. <br>Минимальный уровень качества изображения - 85%.  <br> <br>Если хотя бы одно изображение в запросе не соответствует требованиям к медиафайлам, то даже при коде ответа 200 ни одно изображение не загрузится в КТ.<br>  <br>`ВАЖНО!` Всё, что передаётся в массиве `data` полностью заменяет собой содержимое массива `mediaFiles` в КТ. <br>Если Вы добавляете фото к уже имеющимся в КТ, то вместе с новыми передайте в запросе все ссылки на фото и видео, которые уже содержатся в КТ. В противном случае в карточке окажутся только передаваемые фото.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_media_save_post_request = new \OpenAPI\Client\Model\ContentV1MediaSavePostRequest(); // \OpenAPI\Client\Model\ContentV1MediaSavePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaSavePost($content_v1_media_save_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaSavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_media_save_post_request** | [**\OpenAPI\Client\Model\ContentV1MediaSavePostRequest**](../Model/ContentV1MediaSavePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectAllGet()`

```php
contentV1ObjectAllGet($name, $top): \OpenAPI\Client\Model\ContentV1ObjectAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Категория товаров

С помощью данного метода можно получить список категорий товаров по текстовому фильтру (названию категории). <br> <br> Чтобы получить список всех категорий необходимо указать `top=8000`, к примеру. <br> <br> По состоянию на `27.03.2023` в списке `7440` категорий. Количество доступных категорий может меняться.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 3D; // string | Поиск по названию категории
$top = 50; // int | Количество запрашиваемых значений

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectAllGet($name, $top, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по названию категории | [optional] |
| **top** | **int**| Количество запрашиваемых значений | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectAllGet200Response**](../Model/ContentV1ObjectAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsListFilterGet()`

```php
contentV1ObjectCharacteristicsListFilterGet($name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ по всем подкатегориям

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ в подкатегории определенной родительской категории.   <br>   <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана:   <br><b>Правильно:</b>       <br>`{\"Высота упаковки\": 4}`   <br><b>Не правильно:</b>       <br>`{\"Высота упаковки\": [4]}`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Косухи; // string | Поиск по родительской категории.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsListFilterGet($name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsListFilterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по родительской категории. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response**](../Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsObjectNameGet()`

```php
contentV1ObjectCharacteristicsObjectNameGet($object_name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ для категории товара

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ для определенной категории товаров. <br> <br> `Важно`: обязательная к заполнению характеристика при создании карточки любого товара - `Предмет`. <br>Значение характеристики `Предмет` соответствует значению параметра `objectName` в запросе. <br> <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана: <br><b>Правильно:</b>     <br>`{\"Высота упаковки\": 4}` <br><b>Не правильно:</b>     <br>`{\"Высота упаковки\": [4]}`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Носки; // string | Поиск по наименованию категории

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsObjectNameGet($object_name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsObjectNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response**](../Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectParentAllGet()`

```php
contentV1ObjectParentAllGet(): \OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Родительские категории товаров

С помощью данного метода можно получить список всех родительских категорий товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectParentAllGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectParentAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response**](../Model/ContentV1ObjectParentAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagIdDelete()`

```php
contentV1TagIdDelete($id): \OpenAPI\Client\Model\ContentV1TagIdDelete200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удаление тега

Метод позволяет удалить тег.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Числовой идентификатор тега

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagIdDelete($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой идентификатор тега | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagIdDelete200Response**](../Model/ContentV1TagIdDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagIdPatch()`

```php
contentV1TagIdPatch($id, $content_v1_tag_id_patch_request): \OpenAPI\Client\Model\ContentV1TagIdPatch200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Изменение тега

Метод позволяет изменять информацию о теге (имя и цвет).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Числовой идентификатор тега
$content_v1_tag_id_patch_request = new \OpenAPI\Client\Model\ContentV1TagIdPatchRequest(); // \OpenAPI\Client\Model\ContentV1TagIdPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagIdPatch($id, $content_v1_tag_id_patch_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой идентификатор тега | |
| **content_v1_tag_id_patch_request** | [**\OpenAPI\Client\Model\ContentV1TagIdPatchRequest**](../Model/ContentV1TagIdPatchRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagIdPatch200Response**](../Model/ContentV1TagIdPatch200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagNomenclatureLinkPost()`

```php
contentV1TagNomenclatureLinkPost($content_v1_tag_nomenclature_link_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Управление тегами в КТ

Метод позволяет добавить теги к КТ и снять их с КТ.<br> При снятии тега с КТ сам тег не удаляется.<br> К карточке можно добавить 8 тегов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_tag_nomenclature_link_post_request = {"nmID":179891389,"tagsIDs":[123456]}; // \OpenAPI\Client\Model\ContentV1TagNomenclatureLinkPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagNomenclatureLinkPost($content_v1_tag_nomenclature_link_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagNomenclatureLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_tag_nomenclature_link_post_request** | [**\OpenAPI\Client\Model\ContentV1TagNomenclatureLinkPostRequest**](../Model/ContentV1TagNomenclatureLinkPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseContentError6**](../Model/ResponseContentError6.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagPost()`

```php
contentV1TagPost($content_v1_tag_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создание тега

Метод позволяет создать тег.<br> Завести можно 8 тегов.<br> Максимальная длина тега 15 символов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_tag_post_request = new \OpenAPI\Client\Model\ContentV1TagPostRequest(); // \OpenAPI\Client\Model\ContentV1TagPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagPost($content_v1_tag_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_tag_post_request** | [**\OpenAPI\Client\Model\ContentV1TagPostRequest**](../Model/ContentV1TagPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseContentError6**](../Model/ResponseContentError6.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagsGet()`

```php
contentV1TagsGet(): \OpenAPI\Client\Model\ContentV1TagsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список тегов

Метод позволяет получить список существующих тегов продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagsGet200Response**](../Model/ContentV1TagsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
