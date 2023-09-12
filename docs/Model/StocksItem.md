# # StocksItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_change_date** | **\DateTime** | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе. Если часовой пояс не указан, то берется Московское время (UTC+3). | [optional]
**warehouse_name** | **string** | Название склада | [optional]
**supplier_article** | **string** | Артикул продавца | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**barcode** | **string** | Баркод | [optional]
**quantity** | **int** | Количество, доступное для продажи (сколько можно добавить в корзину) | [optional]
**in_way_to_client** | **int** | В пути к клиенту | [optional]
**in_way_from_client** | **int** | В пути от клиента | [optional]
**quantity_full** | **int** | Полное (непроданное) количество, которое числится за складом (&#x3D; &#x60;quantity&#x60; + в пути) | [optional]
**category** | **string** | Категория | [optional]
**subject** | **string** | Предмет | [optional]
**brand** | **string** | Бренд | [optional]
**tech_size** | **string** | Размер | [optional]
**price** | **float** | Цена | [optional]
**discount** | **float** | Скидка | [optional]
**is_supply** | **bool** | Договор поставки (внутренние технологические данные) | [optional]
**is_realization** | **bool** | Договор реализации (внутренние технологические данные) | [optional]
**sc_code** | **string** | Код контракта (внутренние технологические данные) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
