# OpenAPIClient-php

<div class=\"description_important\">  
    Узнать больше о работе с товарами можно в <a href=\"https://seller.wildberries.ru/instructions/category/8eeeafc6-4b7a-453d-925a-00fc56510f67?goBackOption=prevRoute&categoryId=5a8e1202-0865-45b7-acae-5d0afc7add56\">справочном центре</a>
</div>

Работа с товарами включает в себя:
  1. [Создание](/openapi/work-with-products#tag/Sozdanie-kartochek-tovarov) и [редактирование](/openapi/work-with-products#tag/Kartochki-tovarov) карточек товаров: в том числе, получение [категорий, предметов и характеристик товаров](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki) и загрузку [медиафайлов](/openapi/work-with-products#tag/Mediafajly).
  2. Настройку [ярлыков](/openapi/work-with-products#tag/Yarlyki) для удобного поиска товаров.
  3. Установку [цен и скидок](/openapi/work-with-products#tag/Ceny-i-skidki).
  4. Управление [остатками товаров](/openapi/work-with-products#tag/Ostatki-na-skladah-prodavca) и [складами](/openapi/work-with-products#tag/Sklady-prodavca), если вы работаете по модели продаж со склада продавца.



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
$limit = 10; // int | Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
$upload_id = 146567; // int | ID загрузки
$offset = 0; // int | После какого элемента выдавать данные

try {
    $result = $apiInstance->apiV2BufferGoodsTaskGet($limit, $upload_id, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV2BufferGoodsTaskGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**apiV2BufferGoodsTaskGet**](docs/Api/DefaultApi.md#apiv2buffergoodstaskget) | **GET** /api/v2/buffer/goods/task | Детализация необработанной загрузки
*DefaultApi* | [**apiV2BufferTasksGet**](docs/Api/DefaultApi.md#apiv2buffertasksget) | **GET** /api/v2/buffer/tasks | Состояние необработанной загрузки
*DefaultApi* | [**apiV2HistoryGoodsTaskGet**](docs/Api/DefaultApi.md#apiv2historygoodstaskget) | **GET** /api/v2/history/goods/task | Детализация обработанной загрузки
*DefaultApi* | [**apiV2HistoryTasksGet**](docs/Api/DefaultApi.md#apiv2historytasksget) | **GET** /api/v2/history/tasks | Состояние обработанной загрузки
*DefaultApi* | [**apiV2ListGoodsFilterGet**](docs/Api/DefaultApi.md#apiv2listgoodsfilterget) | **GET** /api/v2/list/goods/filter | Получить товары с ценами
*DefaultApi* | [**apiV2ListGoodsSizeNmGet**](docs/Api/DefaultApi.md#apiv2listgoodssizenmget) | **GET** /api/v2/list/goods/size/nm | Получить размеры товара с ценами
*DefaultApi* | [**apiV2QuarantineGoodsGet**](docs/Api/DefaultApi.md#apiv2quarantinegoodsget) | **GET** /api/v2/quarantine/goods | Получить товары в карантине
*DefaultApi* | [**apiV2UploadTaskClubDiscountPost**](docs/Api/DefaultApi.md#apiv2uploadtaskclubdiscountpost) | **POST** /api/v2/upload/task/club-discount | Установить скидки WB Клуба
*DefaultApi* | [**apiV2UploadTaskPost**](docs/Api/DefaultApi.md#apiv2uploadtaskpost) | **POST** /api/v2/upload/task | Установить цены и скидки
*DefaultApi* | [**apiV2UploadTaskSizePost**](docs/Api/DefaultApi.md#apiv2uploadtasksizepost) | **POST** /api/v2/upload/task/size | Установить цены для размеров
*DefaultApi* | [**apiV3OfficesGet**](docs/Api/DefaultApi.md#apiv3officesget) | **GET** /api/v3/offices | Получить список складов WB
*DefaultApi* | [**apiV3StocksWarehouseIdDelete**](docs/Api/DefaultApi.md#apiv3stockswarehouseiddelete) | **DELETE** /api/v3/stocks/{warehouseId} | Удалить остатки товаров
*DefaultApi* | [**apiV3StocksWarehouseIdPost**](docs/Api/DefaultApi.md#apiv3stockswarehouseidpost) | **POST** /api/v3/stocks/{warehouseId} | Получить остатки товаров
*DefaultApi* | [**apiV3StocksWarehouseIdPut**](docs/Api/DefaultApi.md#apiv3stockswarehouseidput) | **PUT** /api/v3/stocks/{warehouseId} | Обновить остатки товаров
*DefaultApi* | [**apiV3WarehousesGet**](docs/Api/DefaultApi.md#apiv3warehousesget) | **GET** /api/v3/warehouses | Получить список складов продавца
*DefaultApi* | [**apiV3WarehousesPost**](docs/Api/DefaultApi.md#apiv3warehousespost) | **POST** /api/v3/warehouses | Создать склад продавца
*DefaultApi* | [**apiV3WarehousesWarehouseIdDelete**](docs/Api/DefaultApi.md#apiv3warehouseswarehouseiddelete) | **DELETE** /api/v3/warehouses/{warehouseId} | Удалить склад продавца
*DefaultApi* | [**apiV3WarehousesWarehouseIdPut**](docs/Api/DefaultApi.md#apiv3warehouseswarehouseidput) | **PUT** /api/v3/warehouses/{warehouseId} | Обновить склад продавца
*DefaultApi* | [**contentV2BarcodesPost**](docs/Api/DefaultApi.md#contentv2barcodespost) | **POST** /content/v2/barcodes | Генерация баркодов
*DefaultApi* | [**contentV2CardsDeleteTrashPost**](docs/Api/DefaultApi.md#contentv2cardsdeletetrashpost) | **POST** /content/v2/cards/delete/trash | Перенос карточек товаров в корзину
*DefaultApi* | [**contentV2CardsErrorListGet**](docs/Api/DefaultApi.md#contentv2cardserrorlistget) | **GET** /content/v2/cards/error/list | Список несозданных карточек товаров с ошибками
*DefaultApi* | [**contentV2CardsLimitsGet**](docs/Api/DefaultApi.md#contentv2cardslimitsget) | **GET** /content/v2/cards/limits | Лимиты карточек товаров
*DefaultApi* | [**contentV2CardsMoveNmPost**](docs/Api/DefaultApi.md#contentv2cardsmovenmpost) | **POST** /content/v2/cards/moveNm | Объединение и разъединение карточек товаров
*DefaultApi* | [**contentV2CardsRecoverPost**](docs/Api/DefaultApi.md#contentv2cardsrecoverpost) | **POST** /content/v2/cards/recover | Восстановление карточек товаров из корзины
*DefaultApi* | [**contentV2CardsUpdatePost**](docs/Api/DefaultApi.md#contentv2cardsupdatepost) | **POST** /content/v2/cards/update | Редактирование карточек товаров
*DefaultApi* | [**contentV2CardsUploadAddPost**](docs/Api/DefaultApi.md#contentv2cardsuploadaddpost) | **POST** /content/v2/cards/upload/add | Создание карточек товаров с присоединением
*DefaultApi* | [**contentV2CardsUploadPost**](docs/Api/DefaultApi.md#contentv2cardsuploadpost) | **POST** /content/v2/cards/upload | Создание карточек товаров
*DefaultApi* | [**contentV2DirectoryColorsGet**](docs/Api/DefaultApi.md#contentv2directorycolorsget) | **GET** /content/v2/directory/colors | Цвет
*DefaultApi* | [**contentV2DirectoryCountriesGet**](docs/Api/DefaultApi.md#contentv2directorycountriesget) | **GET** /content/v2/directory/countries | Страна производства
*DefaultApi* | [**contentV2DirectoryKindsGet**](docs/Api/DefaultApi.md#contentv2directorykindsget) | **GET** /content/v2/directory/kinds | Пол
*DefaultApi* | [**contentV2DirectorySeasonsGet**](docs/Api/DefaultApi.md#contentv2directoryseasonsget) | **GET** /content/v2/directory/seasons | Сезон
*DefaultApi* | [**contentV2DirectoryTnvedGet**](docs/Api/DefaultApi.md#contentv2directorytnvedget) | **GET** /content/v2/directory/tnved | ТНВЭД-код
*DefaultApi* | [**contentV2DirectoryVatGet**](docs/Api/DefaultApi.md#contentv2directoryvatget) | **GET** /content/v2/directory/vat | Ставка НДС
*DefaultApi* | [**contentV2GetCardsListPost**](docs/Api/DefaultApi.md#contentv2getcardslistpost) | **POST** /content/v2/get/cards/list | Список карточек товаров
*DefaultApi* | [**contentV2GetCardsTrashPost**](docs/Api/DefaultApi.md#contentv2getcardstrashpost) | **POST** /content/v2/get/cards/trash | Список карточек товаров в корзине
*DefaultApi* | [**contentV2ObjectAllGet**](docs/Api/DefaultApi.md#contentv2objectallget) | **GET** /content/v2/object/all | Список предметов
*DefaultApi* | [**contentV2ObjectCharcsSubjectIdGet**](docs/Api/DefaultApi.md#contentv2objectcharcssubjectidget) | **GET** /content/v2/object/charcs/{subjectId} | Характеристики предмета
*DefaultApi* | [**contentV2ObjectParentAllGet**](docs/Api/DefaultApi.md#contentv2objectparentallget) | **GET** /content/v2/object/parent/all | Родительские категории товаров
*DefaultApi* | [**contentV2TagIdDelete**](docs/Api/DefaultApi.md#contentv2tagiddelete) | **DELETE** /content/v2/tag/{id} | Удаление ярлыка
*DefaultApi* | [**contentV2TagIdPatch**](docs/Api/DefaultApi.md#contentv2tagidpatch) | **PATCH** /content/v2/tag/{id} | Изменение ярлыка
*DefaultApi* | [**contentV2TagNomenclatureLinkPost**](docs/Api/DefaultApi.md#contentv2tagnomenclaturelinkpost) | **POST** /content/v2/tag/nomenclature/link | Управление ярлыками в карточке товара
*DefaultApi* | [**contentV2TagPost**](docs/Api/DefaultApi.md#contentv2tagpost) | **POST** /content/v2/tag | Создание ярлыка
*DefaultApi* | [**contentV2TagsGet**](docs/Api/DefaultApi.md#contentv2tagsget) | **GET** /content/v2/tags | Список ярлыков
*DefaultApi* | [**contentV3MediaFilePost**](docs/Api/DefaultApi.md#contentv3mediafilepost) | **POST** /content/v3/media/file | Загрузить медиафайл
*DefaultApi* | [**contentV3MediaSavePost**](docs/Api/DefaultApi.md#contentv3mediasavepost) | **POST** /content/v3/media/save | Загрузить медиафайлы по ссылкам

## Models

- [ApiV2BufferGoodsTaskGet200Response](docs/Model/ApiV2BufferGoodsTaskGet200Response.md)
- [ApiV2BufferGoodsTaskGet200ResponseData](docs/Model/ApiV2BufferGoodsTaskGet200ResponseData.md)
- [ApiV2BufferTasksGet200Response](docs/Model/ApiV2BufferTasksGet200Response.md)
- [ApiV2HistoryGoodsTaskGet200Response](docs/Model/ApiV2HistoryGoodsTaskGet200Response.md)
- [ApiV2HistoryGoodsTaskGet200ResponseData](docs/Model/ApiV2HistoryGoodsTaskGet200ResponseData.md)
- [ApiV2HistoryTasksGet200Response](docs/Model/ApiV2HistoryTasksGet200Response.md)
- [ApiV2HistoryTasksGet400Response](docs/Model/ApiV2HistoryTasksGet400Response.md)
- [ApiV2ListGoodsFilterGet200Response](docs/Model/ApiV2ListGoodsFilterGet200Response.md)
- [ApiV2ListGoodsFilterGet200ResponseData](docs/Model/ApiV2ListGoodsFilterGet200ResponseData.md)
- [ApiV2ListGoodsSizeNmGet200Response](docs/Model/ApiV2ListGoodsSizeNmGet200Response.md)
- [ApiV2ListGoodsSizeNmGet200ResponseData](docs/Model/ApiV2ListGoodsSizeNmGet200ResponseData.md)
- [ApiV2QuarantineGoodsGet200Response](docs/Model/ApiV2QuarantineGoodsGet200Response.md)
- [ApiV2QuarantineGoodsGet200ResponseData](docs/Model/ApiV2QuarantineGoodsGet200ResponseData.md)
- [ApiV2UploadTaskClubDiscountPostRequest](docs/Model/ApiV2UploadTaskClubDiscountPostRequest.md)
- [ApiV2UploadTaskPostRequest](docs/Model/ApiV2UploadTaskPostRequest.md)
- [ApiV2UploadTaskSizePostRequest](docs/Model/ApiV2UploadTaskSizePostRequest.md)
- [ApiV3StocksWarehouseIdDeleteRequest](docs/Model/ApiV3StocksWarehouseIdDeleteRequest.md)
- [ApiV3StocksWarehouseIdPost200Response](docs/Model/ApiV3StocksWarehouseIdPost200Response.md)
- [ApiV3StocksWarehouseIdPost200ResponseStocksInner](docs/Model/ApiV3StocksWarehouseIdPost200ResponseStocksInner.md)
- [ApiV3StocksWarehouseIdPostRequest](docs/Model/ApiV3StocksWarehouseIdPostRequest.md)
- [ApiV3StocksWarehouseIdPut406Response](docs/Model/ApiV3StocksWarehouseIdPut406Response.md)
- [ApiV3StocksWarehouseIdPutRequest](docs/Model/ApiV3StocksWarehouseIdPutRequest.md)
- [ApiV3StocksWarehouseIdPutRequestStocksInner](docs/Model/ApiV3StocksWarehouseIdPutRequestStocksInner.md)
- [ApiV3WarehousesPost201Response](docs/Model/ApiV3WarehousesPost201Response.md)
- [ApiV3WarehousesPostRequest](docs/Model/ApiV3WarehousesPostRequest.md)
- [ClubDiscReq](docs/Model/ClubDiscReq.md)
- [ContentV2BarcodesPost200Response](docs/Model/ContentV2BarcodesPost200Response.md)
- [ContentV2BarcodesPostRequest](docs/Model/ContentV2BarcodesPostRequest.md)
- [ContentV2CardsDeleteTrashPost200Response](docs/Model/ContentV2CardsDeleteTrashPost200Response.md)
- [ContentV2CardsDeleteTrashPostRequest](docs/Model/ContentV2CardsDeleteTrashPostRequest.md)
- [ContentV2CardsErrorListGet200Response](docs/Model/ContentV2CardsErrorListGet200Response.md)
- [ContentV2CardsErrorListGet200ResponseDataInner](docs/Model/ContentV2CardsErrorListGet200ResponseDataInner.md)
- [ContentV2CardsLimitsGet200Response](docs/Model/ContentV2CardsLimitsGet200Response.md)
- [ContentV2CardsLimitsGet200ResponseData](docs/Model/ContentV2CardsLimitsGet200ResponseData.md)
- [ContentV2CardsMoveNmPost400Response](docs/Model/ContentV2CardsMoveNmPost400Response.md)
- [ContentV2CardsMoveNmPostRequest](docs/Model/ContentV2CardsMoveNmPostRequest.md)
- [ContentV2CardsUpdatePost413Response](docs/Model/ContentV2CardsUpdatePost413Response.md)
- [ContentV2CardsUpdatePostRequestInner](docs/Model/ContentV2CardsUpdatePostRequestInner.md)
- [ContentV2CardsUpdatePostRequestInnerCharacteristicsInner](docs/Model/ContentV2CardsUpdatePostRequestInnerCharacteristicsInner.md)
- [ContentV2CardsUpdatePostRequestInnerDimensions](docs/Model/ContentV2CardsUpdatePostRequestInnerDimensions.md)
- [ContentV2CardsUpdatePostRequestInnerSizesInner](docs/Model/ContentV2CardsUpdatePostRequestInnerSizesInner.md)
- [ContentV2CardsUploadAddPostRequest](docs/Model/ContentV2CardsUploadAddPostRequest.md)
- [ContentV2CardsUploadAddPostRequestCardsToAddInner](docs/Model/ContentV2CardsUploadAddPostRequestCardsToAddInner.md)
- [ContentV2CardsUploadAddPostRequestCardsToAddInnerCharacteristicsInner](docs/Model/ContentV2CardsUploadAddPostRequestCardsToAddInnerCharacteristicsInner.md)
- [ContentV2CardsUploadAddPostRequestCardsToAddInnerSizesInner](docs/Model/ContentV2CardsUploadAddPostRequestCardsToAddInnerSizesInner.md)
- [ContentV2CardsUploadPostRequestInner](docs/Model/ContentV2CardsUploadPostRequestInner.md)
- [ContentV2CardsUploadPostRequestInnerVariantsInner](docs/Model/ContentV2CardsUploadPostRequestInnerVariantsInner.md)
- [ContentV2CardsUploadPostRequestInnerVariantsInnerCharacteristicsInner](docs/Model/ContentV2CardsUploadPostRequestInnerVariantsInnerCharacteristicsInner.md)
- [ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions](docs/Model/ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions.md)
- [ContentV2CardsUploadPostRequestInnerVariantsInnerSizesInner](docs/Model/ContentV2CardsUploadPostRequestInnerVariantsInnerSizesInner.md)
- [ContentV2DirectoryColorsGet200Response](docs/Model/ContentV2DirectoryColorsGet200Response.md)
- [ContentV2DirectoryColorsGet200ResponseDataInner](docs/Model/ContentV2DirectoryColorsGet200ResponseDataInner.md)
- [ContentV2DirectoryCountriesGet200Response](docs/Model/ContentV2DirectoryCountriesGet200Response.md)
- [ContentV2DirectoryCountriesGet200ResponseDataInner](docs/Model/ContentV2DirectoryCountriesGet200ResponseDataInner.md)
- [ContentV2DirectoryKindsGet200Response](docs/Model/ContentV2DirectoryKindsGet200Response.md)
- [ContentV2DirectorySeasonsGet200Response](docs/Model/ContentV2DirectorySeasonsGet200Response.md)
- [ContentV2DirectoryTnvedGet200Response](docs/Model/ContentV2DirectoryTnvedGet200Response.md)
- [ContentV2DirectoryTnvedGet200ResponseDataInner](docs/Model/ContentV2DirectoryTnvedGet200ResponseDataInner.md)
- [ContentV2DirectoryVatGet200Response](docs/Model/ContentV2DirectoryVatGet200Response.md)
- [ContentV2GetCardsListPost200Response](docs/Model/ContentV2GetCardsListPost200Response.md)
- [ContentV2GetCardsListPost200ResponseCardsInner](docs/Model/ContentV2GetCardsListPost200ResponseCardsInner.md)
- [ContentV2GetCardsListPost200ResponseCardsInnerCharacteristicsInner](docs/Model/ContentV2GetCardsListPost200ResponseCardsInnerCharacteristicsInner.md)
- [ContentV2GetCardsListPost200ResponseCardsInnerDimensions](docs/Model/ContentV2GetCardsListPost200ResponseCardsInnerDimensions.md)
- [ContentV2GetCardsListPost200ResponseCardsInnerPhotosInner](docs/Model/ContentV2GetCardsListPost200ResponseCardsInnerPhotosInner.md)
- [ContentV2GetCardsListPost200ResponseCardsInnerSizesInner](docs/Model/ContentV2GetCardsListPost200ResponseCardsInnerSizesInner.md)
- [ContentV2GetCardsListPost200ResponseCardsInnerTagsInner](docs/Model/ContentV2GetCardsListPost200ResponseCardsInnerTagsInner.md)
- [ContentV2GetCardsListPost200ResponseCursor](docs/Model/ContentV2GetCardsListPost200ResponseCursor.md)
- [ContentV2GetCardsListPostRequest](docs/Model/ContentV2GetCardsListPostRequest.md)
- [ContentV2GetCardsListPostRequestSettings](docs/Model/ContentV2GetCardsListPostRequestSettings.md)
- [ContentV2GetCardsListPostRequestSettingsCursor](docs/Model/ContentV2GetCardsListPostRequestSettingsCursor.md)
- [ContentV2GetCardsListPostRequestSettingsFilter](docs/Model/ContentV2GetCardsListPostRequestSettingsFilter.md)
- [ContentV2GetCardsListPostRequestSettingsSort](docs/Model/ContentV2GetCardsListPostRequestSettingsSort.md)
- [ContentV2GetCardsTrashPost200Response](docs/Model/ContentV2GetCardsTrashPost200Response.md)
- [ContentV2GetCardsTrashPost200ResponseCardsInner](docs/Model/ContentV2GetCardsTrashPost200ResponseCardsInner.md)
- [ContentV2GetCardsTrashPost200ResponseCardsInnerCharacteristicsInner](docs/Model/ContentV2GetCardsTrashPost200ResponseCardsInnerCharacteristicsInner.md)
- [ContentV2GetCardsTrashPost200ResponseCardsInnerDimensions](docs/Model/ContentV2GetCardsTrashPost200ResponseCardsInnerDimensions.md)
- [ContentV2GetCardsTrashPost200ResponseCardsInnerSizesInner](docs/Model/ContentV2GetCardsTrashPost200ResponseCardsInnerSizesInner.md)
- [ContentV2GetCardsTrashPost200ResponseCursor](docs/Model/ContentV2GetCardsTrashPost200ResponseCursor.md)
- [ContentV2GetCardsTrashPostRequest](docs/Model/ContentV2GetCardsTrashPostRequest.md)
- [ContentV2GetCardsTrashPostRequestSettings](docs/Model/ContentV2GetCardsTrashPostRequestSettings.md)
- [ContentV2GetCardsTrashPostRequestSettingsCursor](docs/Model/ContentV2GetCardsTrashPostRequestSettingsCursor.md)
- [ContentV2GetCardsTrashPostRequestSettingsFilter](docs/Model/ContentV2GetCardsTrashPostRequestSettingsFilter.md)
- [ContentV2GetCardsTrashPostRequestSettingsSort](docs/Model/ContentV2GetCardsTrashPostRequestSettingsSort.md)
- [ContentV2ObjectAllGet200Response](docs/Model/ContentV2ObjectAllGet200Response.md)
- [ContentV2ObjectAllGet200ResponseDataInner](docs/Model/ContentV2ObjectAllGet200ResponseDataInner.md)
- [ContentV2ObjectCharcsSubjectIdGet200Response](docs/Model/ContentV2ObjectCharcsSubjectIdGet200Response.md)
- [ContentV2ObjectCharcsSubjectIdGet200ResponseDataInner](docs/Model/ContentV2ObjectCharcsSubjectIdGet200ResponseDataInner.md)
- [ContentV2ObjectParentAllGet200Response](docs/Model/ContentV2ObjectParentAllGet200Response.md)
- [ContentV2ObjectParentAllGet200ResponseDataInner](docs/Model/ContentV2ObjectParentAllGet200ResponseDataInner.md)
- [ContentV2ObjectParentAllGet401Response](docs/Model/ContentV2ObjectParentAllGet401Response.md)
- [ContentV2TagIdDelete200Response](docs/Model/ContentV2TagIdDelete200Response.md)
- [ContentV2TagIdDelete400Response](docs/Model/ContentV2TagIdDelete400Response.md)
- [ContentV2TagIdPatch200Response](docs/Model/ContentV2TagIdPatch200Response.md)
- [ContentV2TagIdPatch400Response](docs/Model/ContentV2TagIdPatch400Response.md)
- [ContentV2TagIdPatchRequest](docs/Model/ContentV2TagIdPatchRequest.md)
- [ContentV2TagNomenclatureLinkPostRequest](docs/Model/ContentV2TagNomenclatureLinkPostRequest.md)
- [ContentV2TagPost400Response](docs/Model/ContentV2TagPost400Response.md)
- [ContentV2TagPostRequest](docs/Model/ContentV2TagPostRequest.md)
- [ContentV2TagsGet200Response](docs/Model/ContentV2TagsGet200Response.md)
- [ContentV2TagsGet200ResponseData](docs/Model/ContentV2TagsGet200ResponseData.md)
- [ContentV3MediaFilePost200Response](docs/Model/ContentV3MediaFilePost200Response.md)
- [ContentV3MediaSavePostRequest](docs/Model/ContentV3MediaSavePostRequest.md)
- [Error](docs/Model/Error.md)
- [Good](docs/Model/Good.md)
- [GoodBufferHistory](docs/Model/GoodBufferHistory.md)
- [GoodHistory](docs/Model/GoodHistory.md)
- [GoodsList](docs/Model/GoodsList.md)
- [GoodsListSizesInner](docs/Model/GoodsListSizesInner.md)
- [MediaErrors](docs/Model/MediaErrors.md)
- [Office](docs/Model/Office.md)
- [QuarantineGoods](docs/Model/QuarantineGoods.md)
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
- [ResponseError](docs/Model/ResponseError.md)
- [ResponseIncorrectDate](docs/Model/ResponseIncorrectDate.md)
- [SizeGood](docs/Model/SizeGood.md)
- [SizeGoodReq](docs/Model/SizeGoodReq.md)
- [SupplierTaskMetadata](docs/Model/SupplierTaskMetadata.md)
- [SupplierTaskMetadataBuffer](docs/Model/SupplierTaskMetadataBuffer.md)
- [TaskAlreadyExistsError](docs/Model/TaskAlreadyExistsError.md)
- [TaskAlreadyExistsErrorData](docs/Model/TaskAlreadyExistsErrorData.md)
- [TaskCreated](docs/Model/TaskCreated.md)
- [TaskCreatedData](docs/Model/TaskCreatedData.md)
- [Warehouse](docs/Model/Warehouse.md)

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

- API version: `products`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
