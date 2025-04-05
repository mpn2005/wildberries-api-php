# # SupplierTaskMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upload_id** | **int** | ID загрузки | [optional]
**status** | **int** | Статус загрузки:    * &#x60;3&#x60; — обработана, в товарах нет ошибок, цены и скидки обновились   * &#x60;4&#x60; — отменена   * &#x60;5&#x60; — обработана, но в товарах есть ошибки. Для товаров без ошибок цены и скидки обновились, а ошибки в остальных товарах можно получить с помощью метода [Детализация обработанной загрузки](./work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1goods~1task/get)   * &#x60;6&#x60; — обработана, но во всех товарах есть ошибки. Их тоже можно получить с помощью метода [Детализация обработанной загрузки](./work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1goods~1task/get) | [optional]
**upload_date** | **\DateTime** | Дата и время, когда загрузка создана | [optional]
**activation_date** | **\DateTime** | Дата и время, когда загрузка отправляется в обработку | [optional]
**over_all_goods_number** | **int** | Всего товаров | [optional]
**success_goods_number** | **int** | Товаров без ошибок | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
