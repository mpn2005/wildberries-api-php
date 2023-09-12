# # AdvV1SaveAdPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **int** | &lt;dl&gt; &lt;dt&gt;Тип создаваемой кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - автоматическая кампания&lt;/dd&gt; &lt;/dl&gt; | [optional]
**name** | **string** | Название кампании (max. 128 символов) | [optional]
**subject_id** | **int** | ID предмета, для которого создается кампания.&lt;br&gt; Существующие у продавца идентификаторы можно получить методом из раздела \&quot;Контент / Просмотр\&quot; - \&quot;Список НМ\&quot;, поле ответа - &#x60;objectID&#x60;. | [optional]
**sum** | **int** | Сумма пополнения | [optional]
**btype** | **int** | &lt;dl&gt; &lt;dt&gt;Tип списания.&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;0&lt;/code&gt; - balance&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;1&lt;/code&gt; - net&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;3&lt;/code&gt; - bonus&lt;/dd&gt; &lt;/dl&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
