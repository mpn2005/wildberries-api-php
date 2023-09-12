# # ResponseFeadbackInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id отзыва | [optional]
**user_name** | **string** | Имя автора отзыва | [optional]
**matching_size** | **string** | &lt;dl&gt; &lt;dt&gt;   Соответствие заявленного размера реальному.   &lt;br&gt;Возможные значения: &lt;/dt&gt; &lt;dd&gt;\&quot;\&quot; - для безразмерных товаров,&lt;/dd&gt; &lt;dd&gt;\&quot;ок\&quot; - соответствует размеру,&lt;/dd&gt; &lt;dd&gt;\&quot;smaller\&quot; - маломерит,&lt;/dd&gt; &lt;dd&gt;\&quot;bigger\&quot; - большемерит&lt;/dd&gt;               &lt;/dl&gt; | [optional]
**text** | **string** | Текст отзыва | [optional]
**product_valuation** | **int** | Оценка товара | [optional]
**created_date** | **\DateTime** | Дата и время создания отзыва | [optional]
**state** | **string** | &lt;dt&gt;Статус вопроса:&lt;/dt&gt; &lt;dd&gt;&#x60;none&#x60; - не обработан (новый)&lt;/dd&gt; &lt;dd&gt;&#x60;wbRu&#x60; - обработан&lt;/dd&gt; &lt;dd&gt;&#x60;deleted&#x60; - удален&lt;/dd&gt; | [optional]
**answer** | [**\OpenAPI\Client\Model\ResponseFeadbackInnerAnswer**](ResponseFeadbackInnerAnswer.md) |  | [optional]
**product_details** | [**\OpenAPI\Client\Model\ApiV1FeedbackGet200ResponseDataProductDetails**](ApiV1FeedbackGet200ResponseDataProductDetails.md) |  | [optional]
**photo_links** | [**\OpenAPI\Client\Model\ApiV1FeedbackGet200ResponseDataPhotoLinksInner[]**](ApiV1FeedbackGet200ResponseDataPhotoLinksInner.md) | Массив структур фотографий | [optional]
**video** | [**\OpenAPI\Client\Model\ApiV1FeedbackGet200ResponseDataVideo**](ApiV1FeedbackGet200ResponseDataVideo.md) |  | [optional]
**was_viewed** | **bool** | Просмотрен ли отзыв | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
