# # OrdersItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**g_number** | **string** | Номер заказа. Объединяет все позиции одного заказа. | [optional]
**date** | **\DateTime** | Дата и время заказа. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе, если параметр &#x60;flag&#x3D;1&#x60;. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**last_change_date** | **\DateTime** | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе, если параметр &#x60;flag&#x3D;0&#x60; или не указан. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**supplier_article** | **string** | Артикул продавца | [optional]
**tech_size** | **string** | Размер товара (пример S, M, L, XL, 42, 42-43) | [optional]
**barcode** | **string** | Бар-код | [optional]
**total_price** | **float** | Цена до согласованной итоговой скидки/промо/спп. Для получения цены со скидкой можно воспользоваться формулой &#x60;priceWithDiscount &#x3D; totalPrice * (1 - discountPercent/100)&#x60; | [optional]
**discount_percent** | **int** | Согласованный итоговый дисконт. Будучи примененным к &#x60;totalPrice&#x60;, даёт сумму к оплате. | [optional]
**warehouse_name** | **string** | Название склада отгрузки | [optional]
**oblast** | **string** | Область | [optional]
**income_id** | **int** | Номер поставки (от продавца на склад) | [optional]
**odid** | **int** | Уникальный идентификатор позиции заказа. Может использоваться для поиска соответствия между заказами и продажами. | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**subject** | **string** | Предмет | [optional]
**category** | **string** | Категория | [optional]
**brand** | **string** | Бренд | [optional]
**is_cancel** | **bool** | Отмена заказа. true - заказ отменен до оплаты. | [optional]
**cancel_dt** | **\DateTime** | Дата и время отмены заказа. Если заказ не был отменен, то &#x60;\&quot;0001-01-01T00:00:00\&quot;&#x60;. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional]
**sticker** | **string** | Цифровое значение стикера, который клеится на товар в процессе сборки заказа по системе Маркетплейс. | [optional]
**srid** | **string** | Уникальный идентификатор заказа.&lt;br&gt; Примечание для использующих API Marketplace: &#x60;srid&#x60; равен &#x60;rid&#x60; в ответах методов сборочных заданий. | [optional]
**order_type** | **string** | Тип поступившего заказа &lt;br&gt; &lt;dl&gt; &lt;dt&gt;Возможные значения:&lt;/dt&gt; &lt;dd&gt;Клиентский - \&quot;Заказ, поступивший от покупателя.\&quot;&lt;/dd&gt; &lt;dd&gt;Возврат Брака - \&quot;Возврат товара продавцу.\&quot;&lt;/dd&gt; &lt;dd&gt;Принудительный возврат - \&quot;Возврат товара продавцу.\&quot;&lt;/dd&gt; &lt;dd&gt;Возврат обезлички - \&quot;Возврат товара продавцу.\&quot;&lt;/dd&gt; &lt;dd&gt;Возврат Неверного Вложения - \&quot;Возврат товара продавцу.\&quot;&lt;/dd&gt; &lt;dd&gt;Возврат Продавца - \&quot;Возврат товара продавцу.\&quot;&lt;/dd&gt; &lt;/dl&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
