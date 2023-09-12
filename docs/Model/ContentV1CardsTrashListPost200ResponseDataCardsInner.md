# # ContentV1CardsTrashListPost200ResponseDataCardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_id** | **int** | Артикул WB | [optional]
**object_id** | **int** | Идентификатор предмета | [optional]
**vendor_code** | **string** | Артикул продавца | [optional]
**object** | **string** | Категория для который создавалось КТ с данной НМ | [optional]
**brand** | **string** | Брэнд | [optional]
**update_at** | **string** | Дата обновления | [optional]
**colors** | **string[]** | Цвета номенклатуры | [optional]
**media_files** | **string[]** | Медиафайлы номенклатуры. &lt;br&gt;Фото, URL которого заканчивается на &lt;b&gt;1.jpg&lt;/b&gt; является главным в карточке. | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner[]**](ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив с одним элементом и нулевым размером, но с ценой и баркодом) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
