# # AdvV1FullstatGet200ResponseDaysInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Дата генерации блока данных. В блоке отображаются статистические данные за эту дату. | [optional]
**apps** | [**\OpenAPI\Client\Model\AdvV1FullstatGet200ResponseDaysInnerAppsInner[]**](AdvV1FullstatGet200ResponseDaysInnerAppsInner.md) | Блок информации о платформе | [optional]
**views** | **int** | Количество просмотров&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**clicks** | **int** | Количество кликов.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**frq** | **int** | Частота (отношение количества просмотров к количеству уникальных пользователей)&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**unique_users** | **int** | Количество уникальных пользователей просмотревших товар.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**ctr** | **float** | Показатель кликабельности.&lt;br&gt; Отношение числа кликов к количеству показов. Выражается в процентах.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**cpc** | **float** | Средняя стоимость клика, ₽.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**sum** | **float** | Затраты, ₽.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**atbs** | **int** | Количество добавлений товаров в корзину.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**orders** | **int** | Количество заказов товара.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**cr** | **int** | CR(conversion rate) — это отношение количества заказов к общему количеству посещений кампании.&lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**shks** | **int** | Заказано товаров, шт &lt;br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**sum_price** | **int** | Заказов на сумму, ₽&lt;/br&gt; &lt;b&gt;За день, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
