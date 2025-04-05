# # ContentV2GetCardsListPostRequestSettingsFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**with_photo** | **int** | Фильтр по фото:      * &#x60;0&#x60; — только карточки без фото   * &#x60;1&#x60; — только карточки с фото   * &#x60;-1&#x60; — все карточки товара | [optional]
**text_search** | **string** | Поиск по артикулу продавца, артикулу WB, баркоду | [optional]
**tag_ids** | **int[]** | Поиск по ID ярлыков | [optional]
**allowed_categories_only** | **bool** | Фильтр по категории. &#x60;true&#x60; - только разрешённые, &#x60;false&#x60; - все. Не используется в песочнице | [optional]
**object_ids** | **int[]** | Поиск по id предметов | [optional]
**brands** | **string[]** | Поиск по брендам | [optional]
**imt_id** | **int** | Поиск по ID карточки товара | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
