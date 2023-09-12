# # ResponseInfoAdvertParamsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject_name** | **string** | Название предметной группы (для кампаний в поиске и рекомендациях) | [optional]
**active** | **bool** | Флаг активности предметной группы, &lt;code&gt;true&lt;/code&gt; - активна, &lt;code&gt;false&lt;/code&gt; - неактивна | [optional]
**intervals** | [**\OpenAPI\Client\Model\AdvV0AdvertsCreatePostRequestInnerParamsInnerIntervalsInner[]**](AdvV0AdvertsCreatePostRequestInnerParamsInnerIntervalsInner.md) | Интервалы часов показа кампании | [optional]
**price** | **int** | Текущая ставка | [optional]
**menu_id** | **int** | Идентификатор меню, где размещается кампания (для кампаний в каталоге) | [optional]
**subject_id** | **int** | Идентификатор предметной группы, для которой создана кампания (для кампаний в поиске и рекомендациях) | [optional]
**set_id** | **int** | Идентификатор сочетания предмета и пола (для кампаний в карточке товара) | [optional]
**set_name** | **string** | Сочетание предмета и пола (для кампаний в карточке товара) | [optional]
**menu_name** | **string** | Название меню, где размещается кампания (для кампаний в каталоге) | [optional]
**nms** | [**\OpenAPI\Client\Model\ResponseInfoAdvertParamsInnerNmsInner[]**](ResponseInfoAdvertParamsInnerNmsInner.md) | Массив номенклатур кампании | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
