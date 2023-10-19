# # ContentV1CardsFilterPost200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imt_id** | **int** | Идентификатор карточки товара (нужен для группирования НМ в одно КТ) | [optional]
**object** | **string** | Предмет | [optional]
**object_id** | **int** | Идентификатор предмета | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**vendor_code** | **string** | Артикул продавца | [optional]
**is_prohibited** | **bool** | &#x60;true&#x60; - категория карточки запрещена к реализации&lt;br&gt; &#x60;false&#x60; категория карточки разрешена к реализации | [optional]
**tags** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPost200ResponseDataInnerTagsInner[]**](ContentV1CardsFilterPost200ResponseDataInnerTagsInner.md) | Массив с информацией о тегах. Поле будет в ответе при наличии тегов в КТ. | [optional]
**media_files** | **string[]** | Медиафайлы номенклатуры. &lt;br&gt;Фото, URL которого заканчивается на &lt;b&gt;1.jpg&lt;/b&gt; является главным в карточке. | [optional]
**dimensions** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPost200ResponseDataInnerDimensions**](ContentV1CardsFilterPost200ResponseDataInnerDimensions.md) |  | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPost200ResponseDataInnerSizesInner[]**](ContentV1CardsFilterPost200ResponseDataInnerSizesInner.md) |  | [optional]
**characteristics** | **object[]** | Массив характеристик, индивидуальный для каждой категории | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
