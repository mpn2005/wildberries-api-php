# # AdvV0AdvertsCreatePostRequestInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | &lt;dl&gt; &lt;dt&gt;Тип кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - поиск + каталог &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt; |
**start_time** | **string** | Дата запуска кампании. &lt;br&gt; Дата в формате RFC3339. &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
**end_time** | **string** | Дата завершения кампании. &lt;br&gt; Дата в формате RFC3339. &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
**name** | **string** | Название кампании (max. 50) | [optional]
**params** | [**\OpenAPI\Client\Model\AdvV0AdvertsCreatePostRequestInnerParamsInner[]**](AdvV0AdvertsCreatePostRequestInnerParamsInner.md) | Параметры кампании. &lt;br&gt; Обязательный параметр для создания кампаний типов &#x60;4&#x60;, &#x60;5&#x60;, &#x60;6&#x60;, &#x60;7&#x60;. &lt;br&gt; Для создания кампаний типа &#x60;9&#x60; не используется. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
