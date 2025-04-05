# # QuarantineGoods

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_id** | **int** | Артикул WB | [optional]
**size_id** | **int** | Не используется | [optional]
**tech_size_name** | **string** | Не используется | [optional]
**currency_iso_code4217** | **string** | Валюта по стандарту ISO 4217 | [optional]
**new_price** | **float** | Новая цена продавца до скидки | [optional]
**old_price** | **float** | Текущая цена продавца до скидки | [optional]
**new_discount** | **int** | Новая скидка продавца, % | [optional]
**old_discount** | **int** | Текущая скидка продавца, % | [optional]
**price_diff** | **float** | Разница: &#x60;newPrice&#x60; * (1 - &#x60;newDiscount&#x60; / 100) - &#x60;oldPrice&#x60; * (1 - &#x60;oldDiscount&#x60; / 100) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
