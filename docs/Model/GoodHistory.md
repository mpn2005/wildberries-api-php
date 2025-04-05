# # GoodHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_id** | **int** | Артикул WB | [optional]
**vendor_code** | **string** | Артикул продавца | [optional]
**size_id** | **int** | ID размера. В методах контента это поле &#x60;chrtID&#x60; | [optional]
**tech_size_name** | **string** | Размер | [optional]
**price** | **int** | Цена | [optional]
**currency_iso_code4217** | **string** | Валюта, по стандарту ISO 4217 | [optional]
**discount** | **int** | Скидка, % | [optional]
**club_discount** | **int** | Скидка WB Клуба, % | [optional]
**status** | **int** | Статус товара:    * &#x60;2&#x60; — товар без ошибок, цена и/или скидка обновилась   * &#x60;3&#x60; — есть ошибки, данные не обновились | [optional]
**error_text** | **string** | Текст ошибки  &lt;div class&#x3D;\&quot;description_important\&quot;&gt;   Ошибка &lt;code&gt;The product is in quarantine&lt;/code&gt; возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина &lt;a href&#x3D;\&quot;https://seller.wildberries.ru/discount-and-prices/quarantine\&quot;&gt;в личном кабинете&lt;/a&gt; &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
