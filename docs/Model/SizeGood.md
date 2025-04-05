# # SizeGood

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_id** | **int** | Артикул WB | [optional]
**size_id** | **int** | ID размера. Можно получить с помощью метода [Получение списка товаров по артикулам](./work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле &#x60;sizeID&#x60;. В методах контента это поле &#x60;chrtID&#x60; | [optional]
**vendor_code** | **string** | Артикул продавца | [optional]
**price** | **int** | Цена | [optional]
**currency_iso_code4217** | **string** | Валюта, по стандарту ISO 4217 | [optional]
**discounted_price** | **float** | Цена со скидкой | [optional]
**club_discounted_price** | **float** | Цена со скидкой, включая скидку WB Клуба | [optional]
**discount** | **int** | Скидка, % | [optional]
**club_discount** | **int** | Скидка WB Клуба, % | [optional]
**tech_size_name** | **string** | Размер товара | [optional]
**editable_size_price** | **bool** | Можно ли устанавливать цены отдельно для разных размеров: &#x60;true&#x60; — можно, &#x60;false&#x60; — нельзя. Эта возможность зависит от категории товара | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
