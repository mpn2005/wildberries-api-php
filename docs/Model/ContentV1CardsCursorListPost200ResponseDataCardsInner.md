# # ContentV1CardsCursorListPost200ResponseDataCardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner[]**](ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив с одним элементом и нулевым размером, но с ценой и баркодом) | [optional]
**media_files** | **string[]** | Медиафайлы номенклатуры. &lt;br&gt;Фото, URL которого заканчивается на &lt;b&gt;1.jpg&lt;/b&gt; является главным в карточке. | [optional]
**colors** | **string[]** | Цвета номенклатуры | [optional]
**update_at** | **string** | Дата обновления | [optional]
**vendor_code** | **string** | Артикул продавца | [optional]
**brand** | **string** | Брэнд | [optional]
**object** | **string** | Категория для который создавалось КТ с данной НМ | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**imt_id** | **int** | Идентификатор карточки товара (нужен для группирования НМ в одну КТ) | [optional]
**object_id** | **int** | Идентификатор предмета | [optional]
**is_prohibited** | **bool** | &#x60;true&#x60; - категория карточки запрещена к реализации&lt;br&gt; &#x60;false&#x60; - категория карточки разрешена к реализации | [optional]
**tags** | **string[]** | Массив тегов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
