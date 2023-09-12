# # ApiV1QuestionGet200ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | id вопроса | [optional]
**text** | **string** | Текст вопроса | [optional]
**created_date** | **\DateTime** | Дата и время создания вопроса | [optional]
**state** | **string** | &lt;dt&gt;Статус вопроса:&lt;/dt&gt;  &lt;dd&gt;&#x60;none&#x60; - вопрос отклонён продавцом (такой вопрос не отображается на портале покупателей)&lt;/dd&gt;  &lt;dd&gt;&#x60;wbRu&#x60; - ответ предоставлен, вопрос отображается на сайте покупателей&lt;/dd&gt;  &lt;dd&gt;&#x60;suppliersPortalSynch&#x60; - новый вопрос&lt;/dd&gt; | [optional]
**answer** | [**\OpenAPI\Client\Model\ApiV1QuestionsGet200ResponseDataQuestionsInnerAnswer**](ApiV1QuestionsGet200ResponseDataQuestionsInnerAnswer.md) |  | [optional]
**product_details** | [**\OpenAPI\Client\Model\ApiV1QuestionsGet200ResponseDataQuestionsInnerProductDetails**](ApiV1QuestionsGet200ResponseDataQuestionsInnerProductDetails.md) |  | [optional]
**was_viewed** | **bool** | Просмотрен ли вопрос | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
