# # SalesItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**g_number** | **string** | Номер заказа. Объединяет все позиции одного заказа. | [optional]
**date** | **\DateTime** | Дата и время продажи. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе, если параметр &#x60;flag&#x3D;1&#x60;. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**last_change_date** | **\DateTime** | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе, если параметр &#x60;flag&#x3D;0&#x60; или не указан. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**supplier_article** | **string** | Артикул продавца | [optional]
**tech_size** | **string** | Размер товара (пример S, M, L, XL, 42, 42-43) | [optional]
**barcode** | **string** | Бар-код | [optional]
**total_price** | **float** | Цена до согласованной скидки/промо/спп. Для получения цены со скидкой можно воспользоваться формулой &#x60;priceWithDiscount &#x3D; totalPrice * (1 - discountPercent/100)&#x60; | [optional]
**discount_percent** | **int** | Согласованный итоговый дисконт | [optional]
**is_supply** | **bool** | Договор поставки | [optional]
**is_realization** | **bool** | Договор реализации | [optional]
**promo_code_discount** | **float** | Скидка по промокоду | [optional]
**warehouse_name** | **string** | Название склада отгрузки | [optional]
**country_name** | **string** | Страна | [optional]
**oblast_okrug_name** | **string** | Округ | [optional]
**region_name** | **string** | Регион | [optional]
**income_id** | **int** | Номер поставки (от продавца на склад) | [optional]
**sale_id** | **string** | Уникальный идентификатор продажи/возврата. &lt;ul&gt;  &lt;li&gt; &#x60;SXXXXXXXXXX&#x60; — продажа  &lt;li&gt; &#x60;RXXXXXXXXXX&#x60; — возврат  &lt;li&gt; &#x60;DXXXXXXXXXXX&#x60; — доплата &lt;li&gt; &#x60;AXXXXXXXXX&#x60; – сторно продаж (все значения полей как у продажи, но поля с суммами и кол-вом с минусом как в возврате) &lt;li&gt; &#x60;BXXXXXXXXX&#x60; - сторно возврата (все значения полей как у возврата, но поля с суммами и кол-вом с плюсом, в противоположность возврату) &lt;/ul&gt; | [optional]
**odid** | **int** | Уникальный идентификатор позиции заказа. Может использоваться для поиска соответствия между заказами и продажами. | [optional]
**spp** | **float** | Согласованная скидка постоянного покупателя | [optional]
**for_pay** | **float** | К перечислению продавцку | [optional]
**finished_price** | **float** | Фактическая цена заказа с учетом всех скидок | [optional]
**price_with_disc** | **float** | Цена, от которой считается вознаграждение продавца &#x60;forpay&#x60; (с учетом всех согласованных скидок) | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**subject** | **string** | Предмет | [optional]
**category** | **string** | Категория | [optional]
**brand** | **string** | Бренд | [optional]
**is_storno** | **int** | Для сторно-операций &#x60;1&#x60;, для остальных &#x60;0&#x60; | [optional]
**sticker** | **string** | Цифровое значение стикера, который клеится на товар в процессе сборки заказа по системе Маркетплейс. | [optional]
**srid** | **string** | Уникальный идентификатор заказа.&lt;br&gt; Примечание для использующих API Marketplace: &#x60;srid&#x60; равен &#x60;rid&#x60; в ответах методов сборочных заданий. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
