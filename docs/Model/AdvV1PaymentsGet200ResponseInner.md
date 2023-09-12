# # AdvV1PaymentsGet200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор платежа | [optional]
**date** | **string** | Дата платежа | [optional]
**sum** | **int** | Сумма платежа | [optional]
**type** | **int** | &lt;dl&gt; &lt;dt&gt;Тип источника списания:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;0&lt;/code&gt; - balance&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;1&lt;/code&gt; - net&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;3&lt;/code&gt; - картой&lt;/dd&gt; &lt;/dl&gt; | [optional]
**status_id** | **int** | &lt;dl&gt; &lt;dt&gt;Статус:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;0&lt;/code&gt; - ошибка&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;1&lt;/code&gt; - обработано&lt;/dd&gt; &lt;/dl&gt; | [optional]
**card_status** | **string** | &lt;dl&gt; &lt;dt&gt;Статус операции(при оплате картой):&lt;/dt&gt; &lt;dd&gt;&lt;b&gt;success&lt;/b&gt; - успех&lt;/dd&gt; &lt;dd&gt;&lt;b&gt;fail&lt;/b&gt; - неуспех&lt;/dd&gt; &lt;dd&gt;&lt;b&gt;pending&lt;/b&gt; - в ожидании ответа&lt;/dd&gt; &lt;dd&gt;&lt;b&gt;unknown&lt;/b&gt; - неизвестно&lt;/dd&gt; &lt;/dl&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
