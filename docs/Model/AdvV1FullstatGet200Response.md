# # AdvV1FullstatGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advert_id** | **int** | ID кампании | [optional]
**begin** | **\DateTime** | Дата запуска кампании | [optional]
**end** | **\DateTime** | Дата остановки кампании | [optional]
**days** | [**\OpenAPI\Client\Model\AdvV1FullstatGet200ResponseDaysInner[]**](AdvV1FullstatGet200ResponseDaysInner.md) | Блок статистики по дням | [optional]
**views** | **int** | Количество просмотров&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**clicks** | **int** | Количество кликов.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**frq** | **int** | Частота (отношение количества просмотров к количеству уникальных пользователей)&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**unique_users** | **int** | Количество уникальных пользователей просмотревших товар.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**ctr** | **float** | Показатель кликабельности.&lt;br&gt; Отношение числа кликов к количеству показов. Выражается в процентах.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**cpc** | **float** | Средняя стоимость клика, ₽.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**sum** | **float** | Затраты, ₽.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**atbs** | **int** | Количество добавлений товаров в корзину.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**orders** | **int** | Количество заказов товара.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**cr** | **int** | CR(conversion rate) — это отношение количества заказов к общему количеству посещений кампании.&lt;br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**shks** | **int** | Заказано товаров, шт  &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; &lt;br&gt;  &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**sum_price** | **int** | Заказов на сумму, ₽  &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; &lt;/br&gt; &lt;b&gt;За все дни, по всем артикулам WB и платформам.&lt;/b&gt; | [optional]
**detailed** | **bool** | Не используется | [optional]
**booster_stats** | [**\OpenAPI\Client\Model\AdvV1FullstatGet200ResponseBoosterStatsInner[]**](AdvV1FullstatGet200ResponseBoosterStatsInner.md) | Статистика по средней позиции товара на страницах поисковой выдачи и каталога (для автоматических кампаний). &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
