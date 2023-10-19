# OpenAPIClient-php

<dl> <dt>Словарь сокращений:</dt> <dd>КТ - карточка товара</dd> <dd>НМ - номенклатура</dd> </dl> Ограничения по количеству запросов: <dd>Допускается максимум 100 запросов в минуту на методы контента в целом.</dd>
<br> Публичное API Контента создано для синхронизации данных между серверами Wildberries и серверами продавцов. <br> Вы загружаете данные на свои носители, работаете с ними на своих мощностях и синхронизируетесь с нашими серверами по мере необходимости. <br> <code>Не допускается использование API Контента в качестве внешней базы данных. При превышении лимитов на запросы доступ к API будет ограничен.</code> <br> <br> <br>



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

try {
    $result = $apiInstance->contentV1BarcodesPost($content_v1_barcodes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1BarcodesPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**contentV1BarcodesPost**](docs/Api/DefaultApi.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
*DefaultApi* | [**contentV1CardsCursorListPost**](docs/Api/DefaultApi.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ
*DefaultApi* | [**contentV1CardsErrorListGet**](docs/Api/DefaultApi.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
*DefaultApi* | [**contentV1CardsFilterPost**](docs/Api/DefaultApi.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по артикулам продавца
*DefaultApi* | [**contentV1CardsLimitsGet**](docs/Api/DefaultApi.md#contentv1cardslimitsget) | **GET** /content/v1/cards/limits | Лимиты по КТ
*DefaultApi* | [**contentV1CardsMoveNmPost**](docs/Api/DefaultApi.md#contentv1cardsmovenmpost) | **POST** /content/v1/cards/moveNm | Объединение / Разъединение НМ
*DefaultApi* | [**contentV1CardsTrashListPost**](docs/Api/DefaultApi.md#contentv1cardstrashlistpost) | **POST** /content/v1/cards/trash/list | Список НМ, находящихся в корзине
*DefaultApi* | [**contentV1CardsUpdatePost**](docs/Api/DefaultApi.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
*DefaultApi* | [**contentV1CardsUploadAddPost**](docs/Api/DefaultApi.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
*DefaultApi* | [**contentV1CardsUploadPost**](docs/Api/DefaultApi.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
*DefaultApi* | [**contentV1DirectoryColorsGet**](docs/Api/DefaultApi.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
*DefaultApi* | [**contentV1DirectoryCountriesGet**](docs/Api/DefaultApi.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
*DefaultApi* | [**contentV1DirectoryKindsGet**](docs/Api/DefaultApi.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
*DefaultApi* | [**contentV1DirectorySeasonsGet**](docs/Api/DefaultApi.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
*DefaultApi* | [**contentV1DirectoryTnvedGet**](docs/Api/DefaultApi.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
*DefaultApi* | [**contentV1MediaFilePost**](docs/Api/DefaultApi.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
*DefaultApi* | [**contentV1MediaSavePost**](docs/Api/DefaultApi.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
*DefaultApi* | [**contentV1ObjectAllGet**](docs/Api/DefaultApi.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
*DefaultApi* | [**contentV1ObjectCharacteristicsListFilterGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
*DefaultApi* | [**contentV1ObjectCharacteristicsObjectNameGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
*DefaultApi* | [**contentV1ObjectParentAllGet**](docs/Api/DefaultApi.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
*DefaultApi* | [**contentV1TagIdDelete**](docs/Api/DefaultApi.md#contentv1tagiddelete) | **DELETE** /content/v1/tag/{id} | Удаление тега
*DefaultApi* | [**contentV1TagIdPatch**](docs/Api/DefaultApi.md#contentv1tagidpatch) | **PATCH** /content/v1/tag/{id} | Изменение тега
*DefaultApi* | [**contentV1TagNomenclatureLinkPost**](docs/Api/DefaultApi.md#contentv1tagnomenclaturelinkpost) | **POST** /content/v1/tag/nomenclature/link | Управление тегами в КТ
*DefaultApi* | [**contentV1TagPost**](docs/Api/DefaultApi.md#contentv1tagpost) | **POST** /content/v1/tag | Создание тега
*DefaultApi* | [**contentV1TagsGet**](docs/Api/DefaultApi.md#contentv1tagsget) | **GET** /content/v1/tags | Список тегов

## Models

- [ContentV1BarcodesPost200Response](docs/Model/ContentV1BarcodesPost200Response.md)
- [ContentV1BarcodesPostRequest](docs/Model/ContentV1BarcodesPostRequest.md)
- [ContentV1CardsCursorListPost200Response](docs/Model/ContentV1CardsCursorListPost200Response.md)
- [ContentV1CardsCursorListPost200ResponseData](docs/Model/ContentV1CardsCursorListPost200ResponseData.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCursor](docs/Model/ContentV1CardsCursorListPost200ResponseDataCursor.md)
- [ContentV1CardsCursorListPostRequest](docs/Model/ContentV1CardsCursorListPostRequest.md)
- [ContentV1CardsCursorListPostRequestSort](docs/Model/ContentV1CardsCursorListPostRequestSort.md)
- [ContentV1CardsCursorListPostRequestSortCursor](docs/Model/ContentV1CardsCursorListPostRequestSortCursor.md)
- [ContentV1CardsCursorListPostRequestSortFilter](docs/Model/ContentV1CardsCursorListPostRequestSortFilter.md)
- [ContentV1CardsCursorListPostRequestSortSort](docs/Model/ContentV1CardsCursorListPostRequestSortSort.md)
- [ContentV1CardsErrorListGet200Response](docs/Model/ContentV1CardsErrorListGet200Response.md)
- [ContentV1CardsErrorListGet200ResponseDataInner](docs/Model/ContentV1CardsErrorListGet200ResponseDataInner.md)
- [ContentV1CardsFilterPost200Response](docs/Model/ContentV1CardsFilterPost200Response.md)
- [ContentV1CardsFilterPost200ResponseDataInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInner.md)
- [ContentV1CardsFilterPost200ResponseDataInnerDimensions](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerDimensions.md)
- [ContentV1CardsFilterPost200ResponseDataInnerSizesInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerSizesInner.md)
- [ContentV1CardsFilterPost200ResponseDataInnerTagsInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerTagsInner.md)
- [ContentV1CardsFilterPostRequest](docs/Model/ContentV1CardsFilterPostRequest.md)
- [ContentV1CardsLimitsGet200Response](docs/Model/ContentV1CardsLimitsGet200Response.md)
- [ContentV1CardsLimitsGet200ResponseData](docs/Model/ContentV1CardsLimitsGet200ResponseData.md)
- [ContentV1CardsMoveNmPost400Response](docs/Model/ContentV1CardsMoveNmPost400Response.md)
- [ContentV1CardsMoveNmPostRequest](docs/Model/ContentV1CardsMoveNmPostRequest.md)
- [ContentV1CardsTrashListPost200Response](docs/Model/ContentV1CardsTrashListPost200Response.md)
- [ContentV1CardsTrashListPost200ResponseData](docs/Model/ContentV1CardsTrashListPost200ResponseData.md)
- [ContentV1CardsTrashListPost200ResponseDataCardsInner](docs/Model/ContentV1CardsTrashListPost200ResponseDataCardsInner.md)
- [ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner](docs/Model/ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner.md)
- [ContentV1CardsTrashListPost200ResponseDataCursor](docs/Model/ContentV1CardsTrashListPost200ResponseDataCursor.md)
- [ContentV1CardsTrashListPostRequest](docs/Model/ContentV1CardsTrashListPostRequest.md)
- [ContentV1CardsTrashListPostRequestSort](docs/Model/ContentV1CardsTrashListPostRequestSort.md)
- [ContentV1CardsUpdatePost200Response](docs/Model/ContentV1CardsUpdatePost200Response.md)
- [ContentV1CardsUpdatePostRequestInner](docs/Model/ContentV1CardsUpdatePostRequestInner.md)
- [ContentV1CardsUpdatePostRequestInnerSizesInner](docs/Model/ContentV1CardsUpdatePostRequestInnerSizesInner.md)
- [ContentV1CardsUploadAddPostRequest](docs/Model/ContentV1CardsUploadAddPostRequest.md)
- [ContentV1CardsUploadAddPostRequestCardsInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInner.md)
- [ContentV1CardsUploadAddPostRequestCardsInnerSizesInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInnerSizesInner.md)
- [ContentV1DirectoryColorsGet200Response](docs/Model/ContentV1DirectoryColorsGet200Response.md)
- [ContentV1DirectoryColorsGet200ResponseDataInner](docs/Model/ContentV1DirectoryColorsGet200ResponseDataInner.md)
- [ContentV1DirectoryCountriesGet200Response](docs/Model/ContentV1DirectoryCountriesGet200Response.md)
- [ContentV1DirectoryCountriesGet200ResponseDataInner](docs/Model/ContentV1DirectoryCountriesGet200ResponseDataInner.md)
- [ContentV1DirectoryKindsGet200Response](docs/Model/ContentV1DirectoryKindsGet200Response.md)
- [ContentV1DirectorySeasonsGet200Response](docs/Model/ContentV1DirectorySeasonsGet200Response.md)
- [ContentV1DirectoryTnvedGet200Response](docs/Model/ContentV1DirectoryTnvedGet200Response.md)
- [ContentV1DirectoryTnvedGet200ResponseDataInner](docs/Model/ContentV1DirectoryTnvedGet200ResponseDataInner.md)
- [ContentV1MediaSavePostRequest](docs/Model/ContentV1MediaSavePostRequest.md)
- [ContentV1ObjectAllGet200Response](docs/Model/ContentV1ObjectAllGet200Response.md)
- [ContentV1ObjectAllGet200ResponseDataInner](docs/Model/ContentV1ObjectAllGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsListFilterGet200Response](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)
- [ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200Response](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner.md)
- [ContentV1ObjectParentAllGet200Response](docs/Model/ContentV1ObjectParentAllGet200Response.md)
- [ContentV1ObjectParentAllGet200ResponseDataInner](docs/Model/ContentV1ObjectParentAllGet200ResponseDataInner.md)
- [ContentV1TagIdDelete200Response](docs/Model/ContentV1TagIdDelete200Response.md)
- [ContentV1TagIdDelete400Response](docs/Model/ContentV1TagIdDelete400Response.md)
- [ContentV1TagIdPatch200Response](docs/Model/ContentV1TagIdPatch200Response.md)
- [ContentV1TagIdPatch400Response](docs/Model/ContentV1TagIdPatch400Response.md)
- [ContentV1TagIdPatchRequest](docs/Model/ContentV1TagIdPatchRequest.md)
- [ContentV1TagNomenclatureLinkPostRequest](docs/Model/ContentV1TagNomenclatureLinkPostRequest.md)
- [ContentV1TagPost400Response](docs/Model/ContentV1TagPost400Response.md)
- [ContentV1TagPostRequest](docs/Model/ContentV1TagPostRequest.md)
- [ContentV1TagsGet200Response](docs/Model/ContentV1TagsGet200Response.md)
- [ContentV1TagsGet200ResponseData](docs/Model/ContentV1TagsGet200ResponseData.md)
- [CreatingCardInnerInner](docs/Model/CreatingCardInnerInner.md)
- [CreatingCardInnerInnerSizesInner](docs/Model/CreatingCardInnerInnerSizesInner.md)
- [RequestMoveNmsImtConn](docs/Model/RequestMoveNmsImtConn.md)
- [RequestMoveNmsImtDisconn](docs/Model/RequestMoveNmsImtDisconn.md)
- [ResponseBodyContentError400](docs/Model/ResponseBodyContentError400.md)
- [ResponseBodyContentError400AdditionalErrors](docs/Model/ResponseBodyContentError400AdditionalErrors.md)
- [ResponseBodyContentError403](docs/Model/ResponseBodyContentError403.md)
- [ResponseCardCreate](docs/Model/ResponseCardCreate.md)
- [ResponseCardCreateAdditionalErrors](docs/Model/ResponseCardCreateAdditionalErrors.md)
- [ResponseCardCreateAdditionalErrorsOneOf](docs/Model/ResponseCardCreateAdditionalErrorsOneOf.md)
- [ResponseContentError1](docs/Model/ResponseContentError1.md)
- [ResponseContentError1AdditionalErrors](docs/Model/ResponseContentError1AdditionalErrors.md)
- [ResponseContentError4](docs/Model/ResponseContentError4.md)
- [ResponseContentError4AdditionalErrors](docs/Model/ResponseContentError4AdditionalErrors.md)
- [ResponseContentError5](docs/Model/ResponseContentError5.md)
- [ResponseContentError5AdditionalErrors](docs/Model/ResponseContentError5AdditionalErrors.md)
- [ResponseContentError6](docs/Model/ResponseContentError6.md)
- [ResponseIncorrectDate](docs/Model/ResponseIncorrectDate.md)

## Authorization

Authentication schemes defined for the API:
### HeaderApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.18`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
