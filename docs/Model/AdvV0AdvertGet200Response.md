# # AdvV0AdvertGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advert_id** | **int** | Идентификатор кампании | [optional]
**type** | **int** | &lt;dl&gt; &lt;dt&gt;Тип кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - поиск + каталог &lt;/dd&gt; &lt;/dl&gt; | [optional]
**status** | **int** | &lt;dl&gt; &lt;dt&gt;Статус кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - готова к запуску &lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - Кампания завершена&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - отказался&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - идут показы&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;11&lt;/code&gt; - Кампания на паузе&lt;/dd&gt; &lt;/dl&gt; | [optional]
**daily_budget** | **int** | Не используется | [optional]
**create_time** | **\DateTime** | Дата создания кампании | [optional]
**change_time** | **\DateTime** | Дата последнего изменения кампании | [optional]
**start_time** | **\DateTime** | Дата запуска кампании | [optional]
**end_time** | **\DateTime** | Дата завершения кампании | [optional]
**name** | **string** | Название кампании | [optional]
**params** | [**\OpenAPI\Client\Model\ResponseInfoAdvertParamsInner[]**](ResponseInfoAdvertParamsInner.md) | Параметры кампании | [optional]
**search_pluse_state** | **bool** | Активность фиксированных фраз (Для кампаний в поиске)  &lt;br&gt; (&#x60;false&#x60; - отключены, &#x60;true&#x60; - включены) | [optional]
**auto_params** | [**\OpenAPI\Client\Model\ResponseInfoAdvertType8AutoParams**](ResponseInfoAdvertType8AutoParams.md) |  | [optional]
**united_params** | [**\OpenAPI\Client\Model\ResponseInfoAdvertType9UnitedParamsInner[]**](ResponseInfoAdvertType9UnitedParamsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
