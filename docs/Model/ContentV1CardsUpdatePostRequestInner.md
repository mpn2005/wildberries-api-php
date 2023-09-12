# # ContentV1CardsUpdatePostRequestInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imt_id** | **int** | Идентификатор карточки товара | [optional]
**nm_id** | **int** | Артикул WB |
**object** | **string** | Предмет | [optional]
**object_id** | **int** | Идентификатор предмета | [optional]
**vendor_code** | **string** | Артикул продавца |
**media_files** | **string[]** | Медиафайлы номенклатуры. &lt;br&gt;Фото, URL которого заканчивается на &lt;b&gt;1.jpg&lt;/b&gt; является главным в карточке. | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInnerSizesInner[]**](ContentV1CardsUpdatePostRequestInnerSizesInner.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив без параметров (&#x60;wbSize&#x60; и &#x60;techSize&#x60;), но с &#x60;chrtID&#x60; и баркодом) |
**characteristics** | **object[]** | Массив характеристик, индивидуальный для каждой категории |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
