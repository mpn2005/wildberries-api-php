# # SupplyOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор сборочного задания в Маркетплейсе | [optional]
**rid** | **string** | Идентификатор сборочного задания в системе Wildberries | [optional]
**created_at** | **\DateTime** | Дата создания сборочного задания (RFC3339) | [optional]
**warehouse_id** | **int** | Идентификатор склада продавца, на который поступило сборочное задание | [optional]
**offices** | **string[]** | Список офисов, куда следует привезти товар | [optional]
**user** | [**\OpenAPI\Client\Model\OrderUser**](OrderUser.md) |  | [optional]
**skus** | **string[]** | Массив баркодов товара | [optional]
**price** | **int** | Цена в валюте продажи с учетом всех скидок, умноженная на 100. Код валюты продажи в поле currencyCode. | [optional]
**converted_price** | **int** | Цена продажи с учетом скидок в копейках, сконвертированная в рубли по курсу на момент создания сборочного задания. Предоставляется в информационных целях | [optional]
**currency_code** | **int** | Код валюты продажи (ISO 4217) | [optional]
**converted_currency_code** | **int** | Код валюты страны продавца (ISO 4217) | [optional]
**order_uid** | **string** | Идентификатор транзакции для группировки сборочных заданий. Сборочные задания в одной корзине покупателя будут иметь одинаковый orderUID | [optional]
**nm_id** | **int** | ААртикул WB | [optional]
**chrt_id** | **int** | Идентификатор размера товара в системе Wildberries | [optional]
**article** | **string** | Артикул продавца | [optional]
**is_large_cargo** | **bool** | сКГТ-признак товара, на который был сделан заказ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
