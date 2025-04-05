# # ContentV2ObjectCharcsSubjectIdGet200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charc_id** | **int** | ID характеристики | [optional]
**subject_name** | **string** | Название предмета | [optional]
**subject_id** | **int** | ID предмета | [optional]
**name** | **string** | Название характеристики | [optional]
**required** | **bool** | true - характеристику необходимо обязательно указать в карточке товара. false - характеристику не обязательно указывать | [optional]
**unit_name** | **string** | Единица измерения | [optional]
**max_count** | **int** | Максимальное кол-во значений, которое можно присвоить данной характеристике. Если 0, то нет ограничения. | [optional]
**popular** | **bool** | Характеристика популярна у пользователей (true - да, false - нет) | [optional]
**charc_type** | **int** | Тип характеристики (1 и 0 - строка или массив строк; 4 - число или массив чисел) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
