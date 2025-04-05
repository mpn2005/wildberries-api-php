# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2BufferGoodsTaskGet()**](DefaultApi.md#apiV2BufferGoodsTaskGet) | **GET** /api/v2/buffer/goods/task | Детализация необработанной загрузки |
| [**apiV2BufferTasksGet()**](DefaultApi.md#apiV2BufferTasksGet) | **GET** /api/v2/buffer/tasks | Состояние необработанной загрузки |
| [**apiV2HistoryGoodsTaskGet()**](DefaultApi.md#apiV2HistoryGoodsTaskGet) | **GET** /api/v2/history/goods/task | Детализация обработанной загрузки |
| [**apiV2HistoryTasksGet()**](DefaultApi.md#apiV2HistoryTasksGet) | **GET** /api/v2/history/tasks | Состояние обработанной загрузки |
| [**apiV2ListGoodsFilterGet()**](DefaultApi.md#apiV2ListGoodsFilterGet) | **GET** /api/v2/list/goods/filter | Получить товары с ценами |
| [**apiV2ListGoodsSizeNmGet()**](DefaultApi.md#apiV2ListGoodsSizeNmGet) | **GET** /api/v2/list/goods/size/nm | Получить размеры товара с ценами |
| [**apiV2QuarantineGoodsGet()**](DefaultApi.md#apiV2QuarantineGoodsGet) | **GET** /api/v2/quarantine/goods | Получить товары в карантине |
| [**apiV2UploadTaskClubDiscountPost()**](DefaultApi.md#apiV2UploadTaskClubDiscountPost) | **POST** /api/v2/upload/task/club-discount | Установить скидки WB Клуба |
| [**apiV2UploadTaskPost()**](DefaultApi.md#apiV2UploadTaskPost) | **POST** /api/v2/upload/task | Установить цены и скидки |
| [**apiV2UploadTaskSizePost()**](DefaultApi.md#apiV2UploadTaskSizePost) | **POST** /api/v2/upload/task/size | Установить цены для размеров |
| [**apiV3OfficesGet()**](DefaultApi.md#apiV3OfficesGet) | **GET** /api/v3/offices | Получить список складов WB |
| [**apiV3StocksWarehouseIdDelete()**](DefaultApi.md#apiV3StocksWarehouseIdDelete) | **DELETE** /api/v3/stocks/{warehouseId} | Удалить остатки товаров |
| [**apiV3StocksWarehouseIdPost()**](DefaultApi.md#apiV3StocksWarehouseIdPost) | **POST** /api/v3/stocks/{warehouseId} | Получить остатки товаров |
| [**apiV3StocksWarehouseIdPut()**](DefaultApi.md#apiV3StocksWarehouseIdPut) | **PUT** /api/v3/stocks/{warehouseId} | Обновить остатки товаров |
| [**apiV3WarehousesGet()**](DefaultApi.md#apiV3WarehousesGet) | **GET** /api/v3/warehouses | Получить список складов продавца |
| [**apiV3WarehousesPost()**](DefaultApi.md#apiV3WarehousesPost) | **POST** /api/v3/warehouses | Создать склад продавца |
| [**apiV3WarehousesWarehouseIdDelete()**](DefaultApi.md#apiV3WarehousesWarehouseIdDelete) | **DELETE** /api/v3/warehouses/{warehouseId} | Удалить склад продавца |
| [**apiV3WarehousesWarehouseIdPut()**](DefaultApi.md#apiV3WarehousesWarehouseIdPut) | **PUT** /api/v3/warehouses/{warehouseId} | Обновить склад продавца |
| [**contentV2BarcodesPost()**](DefaultApi.md#contentV2BarcodesPost) | **POST** /content/v2/barcodes | Генерация баркодов |
| [**contentV2CardsDeleteTrashPost()**](DefaultApi.md#contentV2CardsDeleteTrashPost) | **POST** /content/v2/cards/delete/trash | Перенос карточек товаров в корзину |
| [**contentV2CardsErrorListGet()**](DefaultApi.md#contentV2CardsErrorListGet) | **GET** /content/v2/cards/error/list | Список несозданных карточек товаров с ошибками |
| [**contentV2CardsLimitsGet()**](DefaultApi.md#contentV2CardsLimitsGet) | **GET** /content/v2/cards/limits | Лимиты карточек товаров |
| [**contentV2CardsMoveNmPost()**](DefaultApi.md#contentV2CardsMoveNmPost) | **POST** /content/v2/cards/moveNm | Объединение и разъединение карточек товаров |
| [**contentV2CardsRecoverPost()**](DefaultApi.md#contentV2CardsRecoverPost) | **POST** /content/v2/cards/recover | Восстановление карточек товаров из корзины |
| [**contentV2CardsUpdatePost()**](DefaultApi.md#contentV2CardsUpdatePost) | **POST** /content/v2/cards/update | Редактирование карточек товаров |
| [**contentV2CardsUploadAddPost()**](DefaultApi.md#contentV2CardsUploadAddPost) | **POST** /content/v2/cards/upload/add | Создание карточек товаров с присоединением |
| [**contentV2CardsUploadPost()**](DefaultApi.md#contentV2CardsUploadPost) | **POST** /content/v2/cards/upload | Создание карточек товаров |
| [**contentV2DirectoryColorsGet()**](DefaultApi.md#contentV2DirectoryColorsGet) | **GET** /content/v2/directory/colors | Цвет |
| [**contentV2DirectoryCountriesGet()**](DefaultApi.md#contentV2DirectoryCountriesGet) | **GET** /content/v2/directory/countries | Страна производства |
| [**contentV2DirectoryKindsGet()**](DefaultApi.md#contentV2DirectoryKindsGet) | **GET** /content/v2/directory/kinds | Пол |
| [**contentV2DirectorySeasonsGet()**](DefaultApi.md#contentV2DirectorySeasonsGet) | **GET** /content/v2/directory/seasons | Сезон |
| [**contentV2DirectoryTnvedGet()**](DefaultApi.md#contentV2DirectoryTnvedGet) | **GET** /content/v2/directory/tnved | ТНВЭД-код |
| [**contentV2DirectoryVatGet()**](DefaultApi.md#contentV2DirectoryVatGet) | **GET** /content/v2/directory/vat | Ставка НДС |
| [**contentV2GetCardsListPost()**](DefaultApi.md#contentV2GetCardsListPost) | **POST** /content/v2/get/cards/list | Список карточек товаров |
| [**contentV2GetCardsTrashPost()**](DefaultApi.md#contentV2GetCardsTrashPost) | **POST** /content/v2/get/cards/trash | Список карточек товаров в корзине |
| [**contentV2ObjectAllGet()**](DefaultApi.md#contentV2ObjectAllGet) | **GET** /content/v2/object/all | Список предметов |
| [**contentV2ObjectCharcsSubjectIdGet()**](DefaultApi.md#contentV2ObjectCharcsSubjectIdGet) | **GET** /content/v2/object/charcs/{subjectId} | Характеристики предмета |
| [**contentV2ObjectParentAllGet()**](DefaultApi.md#contentV2ObjectParentAllGet) | **GET** /content/v2/object/parent/all | Родительские категории товаров |
| [**contentV2TagIdDelete()**](DefaultApi.md#contentV2TagIdDelete) | **DELETE** /content/v2/tag/{id} | Удаление ярлыка |
| [**contentV2TagIdPatch()**](DefaultApi.md#contentV2TagIdPatch) | **PATCH** /content/v2/tag/{id} | Изменение ярлыка |
| [**contentV2TagNomenclatureLinkPost()**](DefaultApi.md#contentV2TagNomenclatureLinkPost) | **POST** /content/v2/tag/nomenclature/link | Управление ярлыками в карточке товара |
| [**contentV2TagPost()**](DefaultApi.md#contentV2TagPost) | **POST** /content/v2/tag | Создание ярлыка |
| [**contentV2TagsGet()**](DefaultApi.md#contentV2TagsGet) | **GET** /content/v2/tags | Список ярлыков |
| [**contentV3MediaFilePost()**](DefaultApi.md#contentV3MediaFilePost) | **POST** /content/v3/media/file | Загрузить медиафайл |
| [**contentV3MediaSavePost()**](DefaultApi.md#contentV3MediaSavePost) | **POST** /content/v3/media/save | Загрузить медиафайлы по ссылкам |


## `apiV2BufferGoodsTaskGet()`

```php
apiV2BufferGoodsTaskGet($limit, $upload_id, $offset): \OpenAPI\Client\Model\ApiV2BufferGoodsTaskGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Детализация необработанной загрузки

Метод предоставляет информацию о товарах и ошибках в товарах из загрузки в обработке.  <div class=\"description_important\">   Необработанная загрузка — это загрузка скидок для <a href=\"/openapi/promotion#tag/Kalendar-akcij\">календаря акций</a>. Такие скидки применятся к товарам только в момент начала акции. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$upload_id = 146567; // int | ID загрузки
$offset = 0; // int | После какого элемента выдавать данные

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2BufferGoodsTaskGet($limit, $upload_id, $offset, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2BufferGoodsTaskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов | |
| **upload_id** | **int**| ID загрузки | |
| **offset** | **int**| После какого элемента выдавать данные | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2BufferGoodsTaskGet200Response**](../Model/ApiV2BufferGoodsTaskGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2BufferTasksGet()`

```php
apiV2BufferTasksGet($upload_id): \OpenAPI\Client\Model\ApiV2BufferTasksGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Состояние необработанной загрузки

Метод предоставляет информацию про загрузку скидок в обработке.  <div class=\"description_important\">   Необработанная загрузка — это загрузка скидок для <a href=\"/openapi/promotion#tag/Kalendar-akcij\">календаря акций</a>. Такие скидки применятся к товарам только в момент начала акции. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$upload_id = 146567; // int | ID загрузки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2BufferTasksGet($upload_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2BufferTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_id** | **int**| ID загрузки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2BufferTasksGet200Response**](../Model/ApiV2BufferTasksGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2HistoryGoodsTaskGet()`

```php
apiV2HistoryGoodsTaskGet($limit, $upload_id, $offset): \OpenAPI\Client\Model\ApiV2HistoryGoodsTaskGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Детализация обработанной загрузки

Метод предоставляет информацию о товарах и об ошибках в товарах в обработанной загрузке.  <div class=\"description_important\">   Обработанная загрузка — это загрузка цен и скидок для <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task/post\">товаров</a> и <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1size/post\">размеров товаров</a>, а также скидок <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1club-discount/post\">WB Клуба</a>. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$upload_id = 146567; // int | ID загрузки
$offset = 0; // int | После какого элемента выдавать данные

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2HistoryGoodsTaskGet($limit, $upload_id, $offset, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2HistoryGoodsTaskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов | |
| **upload_id** | **int**| ID загрузки | |
| **offset** | **int**| После какого элемента выдавать данные | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2HistoryGoodsTaskGet200Response**](../Model/ApiV2HistoryGoodsTaskGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2HistoryTasksGet()`

```php
apiV2HistoryTasksGet($upload_id): \OpenAPI\Client\Model\ApiV2HistoryTasksGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Состояние обработанной загрузки

Метод предоставляет информацию об обработанной загрузке цен и скидок.  <div class=\"description_important\">   Обработанная загрузка — это загрузка цен и скидок для <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task/post\">товаров</a> и <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1size/post\">размеров товаров</a>, а также скидок <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1club-discount/post\">WB Клуба</a>. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$upload_id = 146567; // int | ID загрузки

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2HistoryTasksGet($upload_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2HistoryTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_id** | **int**| ID загрузки | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2HistoryTasksGet200Response**](../Model/ApiV2HistoryTasksGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ListGoodsFilterGet()`

```php
apiV2ListGoodsFilterGet($limit, $offset, $filter_nm_id): \OpenAPI\Client\Model\ApiV2ListGoodsFilterGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Получить товары с ценами

Метод предоставляет информацию о товарах по их артикулам: цены, валюту, общие скидки и скидки для [WB Клуба](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1club-discount/post). <br><br> Чтобы получить информацию обо всех товарах продавца, оставьте артикул пустым, установите `limit=1000`, в параметре `offset` установите смещение по количеству записей. Количество нужно рассчитать по формуле: `offset` плюс `limit` из предыдущего запроса. Повторяйте запрос, пока вы не получите ответ с пустым массивом.<br> Чтобы получить информацию о размерах товара, используйте [отдельный метод](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1size~1nm/get).  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$offset = 0; // int | После какого элемента выдавать данные
$filter_nm_id = 44589768676; // int | Артикул WB, по которому искать товар

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2ListGoodsFilterGet($limit, $offset, $filter_nm_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2ListGoodsFilterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов | |
| **offset** | **int**| После какого элемента выдавать данные | [optional] |
| **filter_nm_id** | **int**| Артикул WB, по которому искать товар | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2ListGoodsFilterGet200Response**](../Model/ApiV2ListGoodsFilterGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ListGoodsSizeNmGet()`

```php
apiV2ListGoodsSizeNmGet($limit, $nm_id, $offset): \OpenAPI\Client\Model\ApiV2ListGoodsSizeNmGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Получить размеры товара с ценами

Метод предоставляет информацию обо всех размерах одного товарам: цены, валюту, общие скидки и скидки для [WB Клуба](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1club-discount/post). <br><br> Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для таких товаров `editableSizePrice: true`.  <br><br> Чтобы получить информацию о самом товаре, используйте [отдельный метод](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get).  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$nm_id = 1; // int | Артикул WB
$offset = 0; // int | После какого элемента выдавать данные

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2ListGoodsSizeNmGet($limit, $nm_id, $offset, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2ListGoodsSizeNmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов | |
| **nm_id** | **int**| Артикул WB | |
| **offset** | **int**| После какого элемента выдавать данные | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2ListGoodsSizeNmGet200Response**](../Model/ApiV2ListGoodsSizeNmGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2QuarantineGoodsGet()`

```php
apiV2QuarantineGoodsGet($limit, $offset): \OpenAPI\Client\Model\ApiV2QuarantineGoodsGet200Response
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Получить товары в карантине

Метод предоставляет информацию о товарах в карантине. <br><br> Если новая цена товара со скидкой будет минимум в 3 раза меньше старой, товар попадёт [в карантин](https://seller.wildberries.ru/discount-and-prices/quarantine) и будет продаваться по старой цене. Ошибка об этом будет в ответах методов [состояний загрузок](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1tasks/get). <br><br> Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина [в личном кабинете](https://seller.wildberries.ru/discount-and-prices/quarantine). <br><br> Для товаров с [поразмерной установкой цен](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1size/post) карантин не применяется.  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$offset = 0; // int | После какого элемента выдавать данные

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2QuarantineGoodsGet($limit, $offset, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2QuarantineGoodsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов | |
| **offset** | **int**| После какого элемента выдавать данные | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiV2QuarantineGoodsGet200Response**](../Model/ApiV2QuarantineGoodsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UploadTaskClubDiscountPost()`

```php
apiV2UploadTaskClubDiscountPost($api_v2_upload_task_club_discount_post_request): \OpenAPI\Client\Model\TaskCreated
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Установить скидки WB Клуба

Устанавливает скидки для товаров в рамках подписки [WB Клуб](https://seller.wildberries.ru/help-center/article/A-337).  <div class=\"description_limit\">   Получить информацию о процессе установки цен и скидок можно с помощью методов <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1tasks/get\">состояния</a> и <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1goods~1task/get\">детализации</a> обработанной загрузки. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$api_v2_upload_task_club_discount_post_request = new \OpenAPI\Client\Model\ApiV2UploadTaskClubDiscountPostRequest(); // \OpenAPI\Client\Model\ApiV2UploadTaskClubDiscountPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2UploadTaskClubDiscountPost($api_v2_upload_task_club_discount_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2UploadTaskClubDiscountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_upload_task_club_discount_post_request** | [**\OpenAPI\Client\Model\ApiV2UploadTaskClubDiscountPostRequest**](../Model/ApiV2UploadTaskClubDiscountPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCreated**](../Model/TaskCreated.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UploadTaskPost()`

```php
apiV2UploadTaskPost($api_v2_upload_task_post_request): \OpenAPI\Client\Model\TaskCreated
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Установить цены и скидки

Метод устанавливает цены и скидки для товаров.  <br><br> Чтобы установить цены и скидки для размеров товара, используйте [отдельный метод](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1size/post).  <div class=\"description_limit\">   Получить информацию о процессе установки цен и скидок можно с помощью методов <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1tasks/get\">состояния</a> и <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1goods~1task/get\">детализации</a> обработанной загрузки. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$api_v2_upload_task_post_request = new \OpenAPI\Client\Model\ApiV2UploadTaskPostRequest(); // \OpenAPI\Client\Model\ApiV2UploadTaskPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2UploadTaskPost($api_v2_upload_task_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2UploadTaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_upload_task_post_request** | [**\OpenAPI\Client\Model\ApiV2UploadTaskPostRequest**](../Model/ApiV2UploadTaskPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCreated**](../Model/TaskCreated.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UploadTaskSizePost()`

```php
apiV2UploadTaskSizePost($api_v2_upload_task_size_post_request): \OpenAPI\Client\Model\TaskCreated
```
### URI(s):
- https://discounts-prices-api.wildberries.ru 
Установить цены для размеров

Метод устанавливает цены отдельно для размеров товаров.  Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для [таких товаров](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1size~1nm/get) `editableSizePrice: true`.  Чтобы установить цены и скидки для самих товаров, используйте [отдельный метод](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task/post).  <div class=\"description_limit\">   Получить информацию о процессе установки цен и скидок можно с помощью методов <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1tasks/get\">состояния</a> и <a href=\"/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1goods~1task/get\">детализации</a> обработанной загрузки. </div>  <div class=\"description_limit\">   Максимум 10 запросов за 6 секунд для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Цены и скидки</a> на один аккаунт продавца </div>

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
$api_v2_upload_task_size_post_request = new \OpenAPI\Client\Model\ApiV2UploadTaskSizePostRequest(); // \OpenAPI\Client\Model\ApiV2UploadTaskSizePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV2UploadTaskSizePost($api_v2_upload_task_size_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2UploadTaskSizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v2_upload_task_size_post_request** | [**\OpenAPI\Client\Model\ApiV2UploadTaskSizePostRequest**](../Model/ApiV2UploadTaskSizePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskCreated**](../Model/TaskCreated.md)

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
- https://marketplace-api.wildberries.ru 
Получить список складов WB

Метод предоставляет список всех складов WB для привязки к складам продавца. Предназначен для определения складов WB, чтобы сдавать готовые заказы по схеме [FBS](/openapi/orders-fbs#tag/Zakazy-FBS) (Fulfillment by Seller).  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
    $result = $apiInstance->apiV3OfficesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3OfficesGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV3StocksWarehouseIdDelete()`

```php
apiV3StocksWarehouseIdDelete($warehouse_id, $api_v3_stocks_warehouse_id_delete_request)
```
### URI(s):
- https://marketplace-api.wildberries.ru 
Удалить остатки товаров

Метод удаляет запись об остатках товаров продавца из [списка остатков](/openapi/work-with-products#tag/Ostatki-na-skladah-prodavca/paths/~1api~1v3~1stocks~1%7BwarehouseId%7D/post).  <div class=\"description_important\">   <strong>Действие необратимо</strong>. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж. </div>  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_delete_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdDeleteRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdDeleteRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3StocksWarehouseIdDelete($warehouse_id, $api_v3_stocks_warehouse_id_delete_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3StocksWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
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
- https://marketplace-api.wildberries.ru 
Получить остатки товаров

Метод предоставляет данные об остатках товаров на [складах продавца](/openapi/work-with-products#tag/Sklady-prodavca).  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_post_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPostRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3StocksWarehouseIdPost($warehouse_id, $api_v3_stocks_warehouse_id_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3StocksWarehouseIdPost: ', $e->getMessage(), PHP_EOL;
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
- https://marketplace-api.wildberries.ru 
Обновить остатки товаров

Метод обновляет количество остатков товаров продавца [в списке](/openapi/work-with-products#tag/Ostatki-na-skladah-prodavca/paths/~1api~1v3~1stocks~1%7BwarehouseId%7D/post).  <div class=\"description_important\">   Названия параметров запроса не валидируются. При отправке некорректных названий вы получите успешный ответ (<code>204</code>), но остатки не обновятся. </div>  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$warehouse_id = 1; // int | ID склада продавца
$api_v3_stocks_warehouse_id_put_request = new \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPutRequest(); // \OpenAPI\Client\Model\ApiV3StocksWarehouseIdPutRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3StocksWarehouseIdPut($warehouse_id, $api_v3_stocks_warehouse_id_put_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3StocksWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV3WarehousesGet()`

```php
apiV3WarehousesGet(): \OpenAPI\Client\Model\Warehouse[]
```
### URI(s):
- https://marketplace-api.wildberries.ru 
Получить список складов продавца

Метод предоставляет список всех складов продавца. Может использоваться для получения [остатков товаров](/openapi/work-with-products#tag/Ostatki-na-skladah-prodavca/paths/~1api~1v3~1stocks~1%7BwarehouseId%7D/post).  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
    $result = $apiInstance->apiV3WarehousesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3WarehousesGet: ', $e->getMessage(), PHP_EOL;
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
- https://marketplace-api.wildberries.ru 
Создать склад продавца

Метод создаёт склад продавца для работы с [остатками товаров](/openapi/work-with-products#tag/Ostatki-na-skladah-prodavca/paths/~1api~1v3~1stocks~1%7BwarehouseId%7D/post). Нужно привязать к складу продавца [склад WB](/openapi/work-with-products#tag/Sklady-prodavca/paths/~1api~1v3~1offices/get) для работы по схеме [FBS](/openapi/orders-fbs#tag/Zakazy-FBS) (Fulfillment by Seller).  <div class=\"description_important\">     Нельзя привязывать склад WB, который уже используется </div>  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$api_v3_warehouses_post_request = new \OpenAPI\Client\Model\ApiV3WarehousesPostRequest(); // \OpenAPI\Client\Model\ApiV3WarehousesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV3WarehousesPost($api_v3_warehouses_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3WarehousesPost: ', $e->getMessage(), PHP_EOL;
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
- https://marketplace-api.wildberries.ru 
Удалить склад продавца

Метод удаляет склад продавца из [списка складов](/openapi/work-with-products#tag/Sklady-prodavca/paths/~1api~1v3~1warehouses/get).  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$warehouse_id = 1; // int | ID склада продавца

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3WarehousesWarehouseIdDelete($warehouse_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3WarehousesWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
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
apiV3WarehousesWarehouseIdPut($warehouse_id, $api_v3_warehouses_post_request)
```
### URI(s):
- https://marketplace-api.wildberries.ru 
Обновить склад продавца

Метод обновляет данные склада продавца в [списке складов](/openapi/work-with-products#tag/Sklady-prodavca/paths/~1api~1v3~1warehouses/get). Данные о привязанном [складе WB](/openapi/work-with-products#tag/Sklady-prodavca/paths/~1api~1v3~1offices/get) можно изменить один раз в сутки.  <div class=\"description_important\">     Нельзя привязывать склад WB, который уже используется </div>  <div class=\"description_limit\">     Максимум 300 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Маркетплейс</a> на один аккаунт продавца.   <br><br>   Один запрос с кодом ответа <code>409</code> учитывается как 5 запросов </div>

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
$warehouse_id = 1; // int | ID склада продавца
$api_v3_warehouses_post_request = new \OpenAPI\Client\Model\ApiV3WarehousesPostRequest(); // \OpenAPI\Client\Model\ApiV3WarehousesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV3WarehousesWarehouseIdPut($warehouse_id, $api_v3_warehouses_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV3WarehousesWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| ID склада продавца | |
| **api_v3_warehouses_post_request** | [**\OpenAPI\Client\Model\ApiV3WarehousesPostRequest**](../Model/ApiV3WarehousesPostRequest.md)|  | |
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

## `contentV2BarcodesPost()`

```php
contentV2BarcodesPost($content_v2_barcodes_post_request): \OpenAPI\Client\Model\ContentV2BarcodesPost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Генерация баркодов

Метод генерирует массив уникальных баркодов для создания размера в [карточке товара](/openapi/work-with-products#tag/Sozdanie-kartochek-tovarov/paths/~1content~1v2~1cards~1upload/post). Можно использовать, если у вас нет собственных баркодов.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_barcodes_post_request = new \OpenAPI\Client\Model\ContentV2BarcodesPostRequest(); // \OpenAPI\Client\Model\ContentV2BarcodesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2BarcodesPost($content_v2_barcodes_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2BarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_barcodes_post_request** | [**\OpenAPI\Client\Model\ContentV2BarcodesPostRequest**](../Model/ContentV2BarcodesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2BarcodesPost200Response**](../Model/ContentV2BarcodesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2CardsDeleteTrashPost()`

```php
contentV2CardsDeleteTrashPost($content_v2_cards_delete_trash_post_request): \OpenAPI\Client\Model\ContentV2CardsDeleteTrashPost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Перенос карточек товаров в корзину

Метод переносит [карточки товаров в корзину](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1trash/post). При этом карточки товаров не удаляются, их можно [восстановить](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1recover/post).  <div class=\"description_important\">   После переноса в корзину карточке товара присваивается новый <code>imtID</code>. </div>  Карточки товаров удаляются автоматически, если лежат в корзине больше 30 дней. Очистка корзины происходит каждую ночь по московскому времени.<br> Карточки товаров можно удалить в любое время в [личном кабинете](https://seller.wildberries.ru/new-goods/basket-cards).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_delete_trash_post_request = {"nmIDs":[123456789,987654321]}; // \OpenAPI\Client\Model\ContentV2CardsDeleteTrashPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsDeleteTrashPost($content_v2_cards_delete_trash_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsDeleteTrashPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_delete_trash_post_request** | [**\OpenAPI\Client\Model\ContentV2CardsDeleteTrashPostRequest**](../Model/ContentV2CardsDeleteTrashPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2CardsDeleteTrashPost200Response**](../Model/ContentV2CardsDeleteTrashPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2CardsErrorListGet()`

```php
contentV2CardsErrorListGet($locale): \OpenAPI\Client\Model\ContentV2CardsErrorListGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Список несозданных карточек товаров с ошибками

Метод предоставляет список карточек товаров, при создании или редактировании которых произошли ошибки, с описанием этих ошибок.  <div class=\"description_important\">   Чтобы убрать карточку товара из списка, нужно повторно сделать запрос на <a href=\"/openapi/work-with-products#tag/Sozdanie-kartochek-tovarov/paths/~1content~1v2~1cards~1upload/post\">создание</a> или редактирование карточки товара с исправленными ошибками. </div>  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Параметр выбора языка значений полей ответа (для которых предусмотрена мультиязычность).  Не используется в песочнице.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsErrorListGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsErrorListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Параметр выбора языка значений полей ответа (для которых предусмотрена мультиязычность).  Не используется в песочнице. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2CardsErrorListGet200Response**](../Model/ContentV2CardsErrorListGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2CardsLimitsGet()`

```php
contentV2CardsLimitsGet(): \OpenAPI\Client\Model\ContentV2CardsLimitsGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Лимиты карточек товаров

Возвращает бесплатные и платные лимиты продавца на [создание карточек товаров](/openapi/work-with-products#tag/Sozdanie-kartochek-tovarov/paths/~1content~1v2~1cards~1upload/post).<br><br>  Формула для получения количества карточек, которые можно создать:    > (`freeLimits` + `paidLimits`) - количество созданных карточек  Созданными считаются карточки, которые можно получить через методы [список карточек товаров](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1list/post) и [список карточек товаров в корзине](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1trash/post).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
    $result = $apiInstance->contentV2CardsLimitsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsLimitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2CardsLimitsGet200Response**](../Model/ContentV2CardsLimitsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2CardsMoveNmPost()`

```php
contentV2CardsMoveNmPost($content_v2_cards_move_nm_post_request): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://content-api.wildberries.ru 
Объединение и разъединение карточек товаров

Метод объединяет и разъединяет карточки товаров. Карточки товаров считаются объединёнными, если у них одинаковый <code>imtID</code>. <br><br> Для объединения карточек товаров сделайте запрос **с указанием** `imtID`. Можно объединять не более 30 карточек товаров.<br> Для разъединения карточек товаров сделайте запрос **без указания** `imtID`. Для разъединенных карточек будут сгенерированы новые `imtID`. <br><br> Если вы разъедините одновременно несколько карточек товаров, эти карточки объединятся в одну и получат новый `imtID`.<br> Чтобы присвоить каждой карточке товара уникальный `imtID`, необходимо передавать по одной карточке товара за запрос.<br> <br> Максимальный размер запроса 10 Мб.  <div class=\"description_important\">   Объединить можно только карточки товаров с одинаковыми предметами. </div>  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_move_nm_post_request = new \OpenAPI\Client\Model\ContentV2CardsMoveNmPostRequest(); // \OpenAPI\Client\Model\ContentV2CardsMoveNmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsMoveNmPost($content_v2_cards_move_nm_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsMoveNmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_move_nm_post_request** | [**\OpenAPI\Client\Model\ContentV2CardsMoveNmPostRequest**](../Model/ContentV2CardsMoveNmPostRequest.md)|  | [optional] |
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

## `contentV2CardsRecoverPost()`

```php
contentV2CardsRecoverPost($content_v2_cards_delete_trash_post_request): \OpenAPI\Client\Model\ContentV2CardsDeleteTrashPost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Восстановление карточек товаров из корзины

Метод восстанавливает [карточки товаров из корзины](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1trash/post).  <div class=\"description_important\">   Карточка товара сохраняет тот же <code>imtID</code>, что был присвоен ей при <a href=\"/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1delete~1trash/post\">перемещении в корзину</a>. </div>  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_delete_trash_post_request = {"nmIDs":[123456789,987654321]}; // \OpenAPI\Client\Model\ContentV2CardsDeleteTrashPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsRecoverPost($content_v2_cards_delete_trash_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsRecoverPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_delete_trash_post_request** | [**\OpenAPI\Client\Model\ContentV2CardsDeleteTrashPostRequest**](../Model/ContentV2CardsDeleteTrashPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2CardsDeleteTrashPost200Response**](../Model/ContentV2CardsDeleteTrashPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2CardsUpdatePost()`

```php
contentV2CardsUpdatePost($content_v2_cards_update_post_request_inner): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://content-api.wildberries.ru 
Редактирование карточек товаров

Метод обновляет карточки товаров. Данные для обновления можно получить через [список карточек товаров](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1list/post) и [список карточек товаров в корзине](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1trash/post).  <div class=\"description_important\">   Карточка товара перезаписывается при обновлении. Поэтому в запросе нужно передать <strong>все</strong> параметры карточки, в том числе те, которые вы не собираетесь обновлять. </div>  Нельзя редактировать или удалять баркоды, но можно добавить дополнительный баркод к карточке товара. Параметры `photos`, `video` и `tags` редактировать или удалять через данный метод нельзя.<br> Габариты товаров можно указать только в `сантиметрах`, вес товара с упаковкой — в `килограммах`. <br><br> В одном запросе можно отредактировать максимум 3000 карточек товаров (`nmID`). Максимальный размер запроса 10 Мб.<br> Если ответ `Успешно` (`200`), но какие-то карточки не обновились, получите [список несозданных карточек товаров](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1error~1list/get).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_update_post_request_inner = array(new \OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInner()); // \OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsUpdatePost($content_v2_cards_update_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_update_post_request_inner** | [**\OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInner[]**](../Model/ContentV2CardsUpdatePostRequestInner.md)|  | [optional] |
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

## `contentV2CardsUploadAddPost()`

```php
contentV2CardsUploadAddPost($content_v2_cards_upload_add_post_request): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://content-api.wildberries.ru 
Создание карточек товаров с присоединением

Метод создаёт новые карточки товаров, присоединяя их к существующим карточкам.  Габариты товаров можно указать только в `сантиметрах`, вес товара с упаковкой — в `килограммах`. <br><br> Создание карточки товара происходит асинхронно. После отправки запрос становится в очередь на обработку.<br>Максимальный размер запроса 10 Мб.<br> Если ответ `Успешно` (`200`), но какие-то карточки не обновились, получите [список несозданных карточек товаров](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1error~1list/get).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_upload_add_post_request = {"imtID":987654321,"cardsToAdd":[{"vendorCode":"myVariant1","title":"Наименование товара","description":"Описание товара","brand":"Бренд","dimensions":{"length":9,"width":6,"height":3,"weightBrutto":0.893},"characteristics":[{"id":12,"value":["Russian flag"]},{"id":25471,"value":1300},{"id":14177449,"value":["blue"]}],"sizes":[{"skus":["12345678"]}]},{"vendorCode":"myVariant2","title":"Наименование товара","description":"Описание товаров","brand":"Бренд","dimensions":{"length":8,"width":8,"height":8,"weightBrutto":1.04},"characteristics":[{"id":12,"value":["Russian flag"]},{"id":25471,"value":1300},{"id":14177449,"value":["blue"]}],"sizes":[{"skus":["222222222222"]}]}]}; // \OpenAPI\Client\Model\ContentV2CardsUploadAddPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsUploadAddPost($content_v2_cards_upload_add_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsUploadAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_upload_add_post_request** | [**\OpenAPI\Client\Model\ContentV2CardsUploadAddPostRequest**](../Model/ContentV2CardsUploadAddPostRequest.md)|  | [optional] |
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

## `contentV2CardsUploadPost()`

```php
contentV2CardsUploadPost($content_v2_cards_upload_post_request_inner): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://content-api.wildberries.ru 
Создание карточек товаров

Метод создаёт карточки товаров c указанием описаний и характеристик товаров.<br>  <div class=\"description_important\">   Есть две формы запроса: для создания отдельных и объединённых карточек товаров. </div>  Габариты товаров можно указать только в `сантиметрах`, вес товара с упаковкой — в `килограммах`. <br><br> Создание карточки товара происходит асинхронно. После отправки запрос становится в очередь на обработку.<br> В одном запросе можно создать максимум 100 объединённых карточек товаров (`imtID`), по 30 карточек товаров в каждой. Максимальный размер запроса 10 Мб.<br> Если ответ `Успешно` (`200`), но какие-то карточки не обновились, получите [список несозданных карточек товаров](/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1error~1list/get).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_cards_upload_post_request_inner = array(new \OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInner()); // \OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2CardsUploadPost($content_v2_cards_upload_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2CardsUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_cards_upload_post_request_inner** | [**\OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInner[]**](../Model/ContentV2CardsUploadPostRequestInner.md)|  | [optional] |
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

## `contentV2DirectoryColorsGet()`

```php
contentV2DirectoryColorsGet($locale): \OpenAPI\Client\Model\ContentV2DirectoryColorsGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Цвет

Метод предоставляет возможные значения [характеристики](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get) предмета `Цвет`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectoryColorsGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectoryColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectoryColorsGet200Response**](../Model/ContentV2DirectoryColorsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2DirectoryCountriesGet()`

```php
contentV2DirectoryCountriesGet($locale): \OpenAPI\Client\Model\ContentV2DirectoryCountriesGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Страна производства

Метод предоставляет возможные значения [характеристики](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get) предмета `Страна производства`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectoryCountriesGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectoryCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectoryCountriesGet200Response**](../Model/ContentV2DirectoryCountriesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2DirectoryKindsGet()`

```php
contentV2DirectoryKindsGet($locale): \OpenAPI\Client\Model\ContentV2DirectoryKindsGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Пол

Метод предоставляет возможные значения [характеристики](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get) предмета `Пол`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectoryKindsGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectoryKindsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectoryKindsGet200Response**](../Model/ContentV2DirectoryKindsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2DirectorySeasonsGet()`

```php
contentV2DirectorySeasonsGet($locale): \OpenAPI\Client\Model\ContentV2DirectorySeasonsGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Сезон

Метод предоставляет возможные значения [характеристики](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get) предмета `Сезон`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectorySeasonsGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectorySeasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectorySeasonsGet200Response**](../Model/ContentV2DirectorySeasonsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2DirectoryTnvedGet()`

```php
contentV2DirectoryTnvedGet($subject_id, $search, $locale): \OpenAPI\Client\Model\ContentV2DirectoryTnvedGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
ТНВЭД-код

Метод предоставляет список ТНВЭД-кодов по ID [предмета](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1all/get) и фрагменту ТНВЭД-кода.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$subject_id = 105; // int | ID предмета
$search = 6106903000; // int | Поиск по ТНВЭД-коду. Работает только в паре с `subjectID`
$locale = en; // string | Язык полей ответа:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectoryTnvedGet($subject_id, $search, $locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectoryTnvedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_id** | **int**| ID предмета | |
| **search** | **int**| Поиск по ТНВЭД-коду. Работает только в паре с &#x60;subjectID&#x60; | [optional] |
| **locale** | **string**| Язык полей ответа:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectoryTnvedGet200Response**](../Model/ContentV2DirectoryTnvedGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2DirectoryVatGet()`

```php
contentV2DirectoryVatGet($locale): \OpenAPI\Client\Model\ContentV2DirectoryVatGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Ставка НДС

Метод предоставляет возможные значения [характеристики](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get) предмета `Ставка НДС`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = ru; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2DirectoryVatGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2DirectoryVatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2DirectoryVatGet200Response**](../Model/ContentV2DirectoryVatGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2GetCardsListPost()`

```php
contentV2GetCardsListPost($content_v2_get_cards_list_post_request, $locale): \OpenAPI\Client\Model\ContentV2GetCardsListPost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Список карточек товаров

<div class=\"description_auth\">     Метод доступен по <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">токену</a> с категорией <strong>Контент</strong> или <strong>Продвижение</strong> </div>  Метод предоставляет список созданных карточек товаров.  <div class=\"description_important\">   В ответе метода не будет карточек, находящихся в корзине. Получить такие карточки можно через <a href=\"/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1get~1cards~1trash/post\">отдельный метод</a>. </div>      Чтобы получить **больше 100** карточек товаров, воспользуйтесь пагинацией:    <ol>     <li>Сделайте первый запрос: <br>       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         {           \"settings\": {                                   \"cursor\": {               \"limit\": 100             },             \"filter\": {               \"withPhoto\": -1             }           }         }</pre>                                    </li>     <li>Пройдите в конец полученного списка карточек товаров.</li>     <li>Скопируйте из <code>cursor</code> две строки:       <ul>         <li><code>\"updatedAt\": \"***\"</code></li>         <li><code>\"nmID\": ***</code></li>       </ul></li>     <li>Вставьте скопированные строки в параметр запроса <code>cursor</code>.</li>     <li>Повторите запрос. </li>     <li>Повторяйте пункты со <b>2</b> по <b>5</b>, пока поле <code>total</code> в ответе не станет меньше чем параметр <code>limit</code> в запросе. Это будет означать, что вы получили все карточки.   </ol>  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_get_cards_list_post_request = {"settings":{"sort":{"ascending":false},"filter":{"textSearch":"4603743187500888","allowedCategoriesOnly":true,"tagIDs":[345,415],"objectIDs":[235,67],"brands":["уллу","EkkE"],"imtID":328632,"withPhoto":-1},"cursor":{"updatedAt":"2023-12-06T11:17:00.96577Z","nmID":370870300,"limit":11}}}; // \OpenAPI\Client\Model\ContentV2GetCardsListPostRequest
$locale = ru; // string | Язык полей ответа `name`, `value` и `object`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2GetCardsListPost($content_v2_get_cards_list_post_request, $locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2GetCardsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_get_cards_list_post_request** | [**\OpenAPI\Client\Model\ContentV2GetCardsListPostRequest**](../Model/ContentV2GetCardsListPostRequest.md)|  | |
| **locale** | **string**| Язык полей ответа &#x60;name&#x60;, &#x60;value&#x60; и &#x60;object&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2GetCardsListPost200Response**](../Model/ContentV2GetCardsListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2GetCardsTrashPost()`

```php
contentV2GetCardsTrashPost($content_v2_get_cards_trash_post_request, $locale): \OpenAPI\Client\Model\ContentV2GetCardsTrashPost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Список карточек товаров в корзине

<div class=\"description_auth\">     Метод доступен по <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">токену</a> с категорией <strong>Контент</strong> или <strong>Продвижение</strong> </div>  Метод предоставляет список карточек товаров в корзине.<br><br>  Чтобы получить **больше 100** карточек товаров, воспользуйтесь пагинацией:    <ol>     <li>Сделайте первый запрос: <br>       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         {           \"settings\": {                                   \"cursor\": {               \"limit\": 100             },             \"filter\": {               \"withPhoto\": -1             }           }         }</pre>                                    </li>     <li>Пройдите в конец полученного списка карточек товаров.</li>     <li>Скопируйте из <code>cursor</code> две строки:       <ul>         <li><code>\"trashedAt\": \"***\"</code></li>         <li><code>\"nmID\": ***</code></li>       </ul></li>     <li>Вставьте скопированные строки в параметр запроса <code>cursor</code>.</li>     <li>Повторите запрос. </li>     <li>Повторяйте пункты со <b>2</b> по <b>5</b>, пока поле <code>total</code> в ответе не станет меньше чем параметр <code>limit</code> в запросе. Это будет означать, что вы получили все карточки.   </ol>    <div class=\"description_limit\">     Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца   </div>

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
$content_v2_get_cards_trash_post_request = {"settings":{"sort":{"ascending":false},"filter":{"textSearch":"4603743187500888"},"cursor":{"trashedAt":"2023-12-06T11:17:00.96577Z","nmID":370870300,"limit":11}}}; // \OpenAPI\Client\Model\ContentV2GetCardsTrashPostRequest
$locale = 'locale_example'; // string | Язык полей ответа `name`, `value` и `object`: `ru`, `en`, `zh`.  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2GetCardsTrashPost($content_v2_get_cards_trash_post_request, $locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2GetCardsTrashPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_get_cards_trash_post_request** | [**\OpenAPI\Client\Model\ContentV2GetCardsTrashPostRequest**](../Model/ContentV2GetCardsTrashPostRequest.md)|  | |
| **locale** | **string**| Язык полей ответа &#x60;name&#x60;, &#x60;value&#x60; и &#x60;object&#x60;: &#x60;ru&#x60;, &#x60;en&#x60;, &#x60;zh&#x60;.  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2GetCardsTrashPost200Response**](../Model/ContentV2GetCardsTrashPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2ObjectAllGet()`

```php
contentV2ObjectAllGet($locale, $name, $limit, $offset, $parent_id): \OpenAPI\Client\Model\ContentV2ObjectAllGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Список предметов

Метод предоставляет список названий [родительских категорий предметов](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1parent~1all/get) и их предметов с ID. Например, у категории `Игрушки` будут предметы `Калейдоскопы`, `Куклы`, `Мячики`.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык полей ответа:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице
$name = Носки; // string | Поиск по названию предмета (Носки), поиск работает по подстроке, искать можно на любом из поддерживаемых языков.
$limit = 1000; // int
$offset = 5000; // int
$parent_id = 1000; // int | ID родительской категории предмета

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2ObjectAllGet($locale, $name, $limit, $offset, $parent_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2ObjectAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык полей ответа:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| **name** | **string**| Поиск по названию предмета (Носки), поиск работает по подстроке, искать можно на любом из поддерживаемых языков. | [optional] |
| **limit** | **int**|  | [optional] [default to 30] |
| **offset** | **int**|  | [optional] [default to 0] |
| **parent_id** | **int**| ID родительской категории предмета | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2ObjectAllGet200Response**](../Model/ContentV2ObjectAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2ObjectCharcsSubjectIdGet()`

```php
contentV2ObjectCharcsSubjectIdGet($subject_id, $locale): \OpenAPI\Client\Model\ContentV2ObjectCharcsSubjectIdGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Характеристики предмета

Метод предоставляет параметры характеристик предмета: названия, типы данных, единицы измерения и так далее. В запросе необходимо указать ID [предмета](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1all/get).   <div class=\"description_important\">   Для получения характеристик <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1colors/get\">Цвет</a>, <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1kinds/get\">Пол</a>, <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1countries/get\">Страна производства</a>, <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1seasons/get\">Сезон</a>, <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1vat/get\">Ставка НДС</a> и <a href=\"/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1directory~1tnved/get\">ТНВЭД-код</a> используйте отдельные методы </div>  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$subject_id = 105; // int | ID предмета
$locale = en; // string | Язык полей ответа `subjectName` и `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2ObjectCharcsSubjectIdGet($subject_id, $locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2ObjectCharcsSubjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_id** | **int**| ID предмета | |
| **locale** | **string**| Язык полей ответа &#x60;subjectName&#x60; и &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2ObjectCharcsSubjectIdGet200Response**](../Model/ContentV2ObjectCharcsSubjectIdGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2ObjectParentAllGet()`

```php
contentV2ObjectParentAllGet($locale): \OpenAPI\Client\Model\ContentV2ObjectParentAllGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Родительские категории товаров

Метод предоставляет названия и ID всех родительских категорий для [создания карточек товаров](/openapi/work-with-products#tag/Sozdanie-kartochek-tovarov): например, `Электроника`, `Бытовая химия`, `Рукоделие`.   <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$locale = en; // string | Язык поля ответа `name`:     - `ru` — русский   - `en` — английский   - `zh` — китайский  Не используется в песочнице

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2ObjectParentAllGet($locale, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2ObjectParentAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| Язык поля ответа &#x60;name&#x60;:     - &#x60;ru&#x60; — русский   - &#x60;en&#x60; — английский   - &#x60;zh&#x60; — китайский  Не используется в песочнице | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2ObjectParentAllGet200Response**](../Model/ContentV2ObjectParentAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2TagIdDelete()`

```php
contentV2TagIdDelete($id): \OpenAPI\Client\Model\ContentV2TagIdDelete200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Удаление ярлыка

Метод удаляет ярлык из [списка ярлыков](/openapi/work-with-products#tag/Yarlyki/paths/~1content~1v2~1tags/get) продавца.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$id = 1; // int | Числовой ID ярлыка

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2TagIdDelete($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2TagIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой ID ярлыка | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2TagIdDelete200Response**](../Model/ContentV2TagIdDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2TagIdPatch()`

```php
contentV2TagIdPatch($id, $content_v2_tag_id_patch_request): \OpenAPI\Client\Model\ContentV2TagIdPatch200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Изменение ярлыка

Метод заменяет данные ярлыка: имя и цвет. <br>Новые данные можно получить в общем [списке](/openapi/work-with-products#tag/Yarlyki/paths/~1content~1v2~1tags/get).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$id = 1; // int | Числовой ID ярлыка
$content_v2_tag_id_patch_request = new \OpenAPI\Client\Model\ContentV2TagIdPatchRequest(); // \OpenAPI\Client\Model\ContentV2TagIdPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2TagIdPatch($id, $content_v2_tag_id_patch_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2TagIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой ID ярлыка | |
| **content_v2_tag_id_patch_request** | [**\OpenAPI\Client\Model\ContentV2TagIdPatchRequest**](../Model/ContentV2TagIdPatchRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2TagIdPatch200Response**](../Model/ContentV2TagIdPatch200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV2TagNomenclatureLinkPost()`

```php
contentV2TagNomenclatureLinkPost($content_v2_tag_nomenclature_link_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://content-api.wildberries.ru 
Управление ярлыками в карточке товара

Метод добавляет или снимает ярлык с карточки товара. К карточке можно добавить максимум 15 ярлыков.<br> При удалении ярлыка из карточки товара он не удаляется из [списка ярлыков](/openapi/work-with-products#tag/Yarlyki/paths/~1content~1v2~1tags/get) продавца.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_tag_nomenclature_link_post_request = {"nmID":179891389,"tagsIDs":[123456]}; // \OpenAPI\Client\Model\ContentV2TagNomenclatureLinkPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2TagNomenclatureLinkPost($content_v2_tag_nomenclature_link_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2TagNomenclatureLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_tag_nomenclature_link_post_request** | [**\OpenAPI\Client\Model\ContentV2TagNomenclatureLinkPostRequest**](../Model/ContentV2TagNomenclatureLinkPostRequest.md)|  | |
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

## `contentV2TagPost()`

```php
contentV2TagPost($content_v2_tag_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://content-api.wildberries.ru 
Создание ярлыка

Метод добавляет один ярлык продавца. Можно создать максимум 15 ярлыков для одного продавца. Максимальная длина ярлыка — 15 символов. <br>Созданный ярлык можно получить в общем [списке](/openapi/work-with-products#tag/Yarlyki/paths/~1content~1v2~1tags/get).  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v2_tag_post_request = new \OpenAPI\Client\Model\ContentV2TagPostRequest(); // \OpenAPI\Client\Model\ContentV2TagPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV2TagPost($content_v2_tag_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2TagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v2_tag_post_request** | [**\OpenAPI\Client\Model\ContentV2TagPostRequest**](../Model/ContentV2TagPostRequest.md)|  | |
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

## `contentV2TagsGet()`

```php
contentV2TagsGet(): \OpenAPI\Client\Model\ContentV2TagsGet200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Список ярлыков

Метод предоставляет список и характеристики всех ярлыков продавца для группировки и фильтрации товаров.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
    $result = $apiInstance->contentV2TagsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV2TagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV2TagsGet200Response**](../Model/ContentV2TagsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV3MediaFilePost()`

```php
contentV3MediaFilePost($x_nm_id, $x_photo_number, $uploadfile): \OpenAPI\Client\Model\ContentV3MediaFilePost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Загрузить медиафайл

Метод загружает и добавляет один медиафайл к карточке товара.  Требования к изображениям:   * максимум изображений для одной карточки товара — 30   * минимальное разрешение — 700x900 px   * максимальный размер — 32 Мб   * минимальное качество — 65%   * форматы — JPG, PNG, BMP, GIF (статичные), WebP  Требования к видео:   * максимум одно видео для одной карточки товара   * максимальный размер — 50 Мб   * форматы — MOV, MP4  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$x_nm_id = 213864079; // string | Артикул WB
$x_photo_number = 2; // int | Номер медиафайла на загрузку, начинается с `1`. При загрузке видео всегда указывайте `1`.  Чтобы добавить изображение к уже загруженным, номер медиафайла должен быть больше количества уже загруженных медиафайлов.
$uploadfile = '/path/to/file.txt'; // \SplFileObject

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV3MediaFilePost($x_nm_id, $x_photo_number, $uploadfile, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV3MediaFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_nm_id** | **string**| Артикул WB | |
| **x_photo_number** | **int**| Номер медиафайла на загрузку, начинается с &#x60;1&#x60;. При загрузке видео всегда указывайте &#x60;1&#x60;.  Чтобы добавить изображение к уже загруженным, номер медиафайла должен быть больше количества уже загруженных медиафайлов. | |
| **uploadfile** | **\SplFileObject****\SplFileObject**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV3MediaFilePost200Response**](../Model/ContentV3MediaFilePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV3MediaSavePost()`

```php
contentV3MediaSavePost($content_v3_media_save_post_request): \OpenAPI\Client\Model\ContentV3MediaFilePost200Response
```
### URI(s):
- https://content-api.wildberries.ru 
Загрузить медиафайлы по ссылкам

Метод загружает набор медиафайлов в карточку товара через указание ссылок в запросе.  <div class=\"description_important\">   Новые медиафайлы полностью заменяют старые. Чтобы добавить новые медиафайлы, укажите в запросе ссылки одновременно на новые и старые медиафайлы. </div>  Требования к изображениям:   * максимум изображений для одной карточки товара — 30   * минимальное разрешение — 700×900 px   * максимальный размер — 32 Мб   * минимальное качество — 65%   * форматы — JPG, PNG, BMP, GIF (статичные), WebP  Требования к видео:   * максимум одно видео для одной карточки товара   * максимальный размер — 50 Мб   * форматы — MOV, MP4  Если видео или хотя бы одно изображение в запросе не соответствует требованиям, то даже при успешном ответе ни одно изображение/видео не загрузится.  <div class=\"description_limit\">   Максимум 100 запросов в минуту для всех методов категории <a href=\"/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token\">Контент</a> на один аккаунт продавца </div>

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
$content_v3_media_save_post_request = {"nmId":213864079,"data":["https://basket-stage-02.dasec.ru/vol669/part66964/66964260/images/big/2.jpg","https://sample-videos.com/video321/mp4/720/big_buck_bunny_720p_mb.mp4"]}; // \OpenAPI\Client\Model\ContentV3MediaSavePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV3MediaSavePost($content_v3_media_save_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV3MediaSavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v3_media_save_post_request** | [**\OpenAPI\Client\Model\ContentV3MediaSavePostRequest**](../Model/ContentV3MediaSavePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV3MediaFilePost200Response**](../Model/ContentV3MediaFilePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
