# # AdvV0IntervalsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advert_id** | **int** | Идентификатор кампании. |
**intervals** | [**\OpenAPI\Client\Model\AdvV0IntervalsPostRequestIntervalsInner[]**](AdvV0IntervalsPostRequestIntervalsInner.md) | Массив новых значений для интервалов. &lt;br&gt; Максимальное количество интервалов &#x60;24&#x60;. |
**param** | **int** | Параметр, для которого будет внесено изменение. Должен быть значением &#x60;subjectId&#x60; (для кампании в поиске и рекомендациях), &#x60;setId&#x60; (для кампании в карточке товара) или &#x60;menuId&#x60; (для кампании в каталоге) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
