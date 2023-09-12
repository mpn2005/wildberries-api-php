# # ResponseInfoAdvert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advert_id** | **int** | Идентификатор кампании | [optional]
**type** | **int** | &lt;dl&gt;     &lt;dt&gt;Тип кампании:&lt;/dt&gt;     &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;/dl&gt; | [optional]
**status** | **int** | &lt;dl&gt;     &lt;dt&gt;Статус кампании:&lt;/dt&gt;     &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - готова к запуску &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt;&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - Кампания завершена&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - отказался&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - идут показы&lt;/dd&gt;     &lt;dd&gt;&lt;code&gt;11&lt;/code&gt; - Кампания на паузе&lt;/dd&gt; &lt;/dl&gt; | [optional]
**daily_budget** | **int** | Дневной бюджет, если не установлен, то 0 | [optional]
**create_time** | **string** | Время создания кампании | [optional]
**change_time** | **string** | Время последнего изменения кампании | [optional]
**start_time** | **string** | Дата запуска кампании | [optional]
**end_time** | **string** | Дата завершения кампании | [optional]
**name** | **string** | Название кампании | [optional]
**params** | [**\OpenAPI\Client\Model\ResponseInfoAdvertParamsInner[]**](ResponseInfoAdvertParamsInner.md) | Параметры кампании | [optional]
**search_pluse_state** | **bool** | Активность фиксированных фраз (Для кампаний в поиске)  &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; &lt;br&gt; (&#x60;false&#x60; - отключены, &#x60;true&#x60; - включены) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
