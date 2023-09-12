# # ContentV1CardsTrashListPostRequestSort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort_column** | **string** | Поле, по которому будет сортироваться список КТ (пока что поддерживается только &#x60;updateAt&#x60;) | [optional]
**ascending** | **bool** | Тип сортировки | [optional]
**search_value** | **string** | Поле, по которому будет осуществляться поиск: по баркоду(&#x60;skus&#x60;), артикулу продавца (&#x60;vendorCode&#x60;), артикулу WB (&#x60;nmID&#x60;) | [optional]
**offset** | **int** | С какого элемента выдавать данные | [optional]
**limit** | **int** | Кол-во запрашиваемых КТ (max. 1000) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
