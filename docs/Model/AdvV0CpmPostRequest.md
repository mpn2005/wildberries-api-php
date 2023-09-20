# # AdvV0CpmPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advert_id** | **int** | Идентификатор кампании, где меняется ставка |
**type** | **int** | &lt;dl&gt; &lt;dt&gt;кампании, где меняется ставка:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге &lt;/dd&gt;  &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - автоматическая кампания&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - кампания поиск + каталог &lt;/dd&gt; &lt;/dl&gt; |
**cpm** | **int** | Новое значение ставки |
**param** | **int** | Параметр, для которого будет внесено изменение. Является значением &#x60;subjectId&#x60; (для кампании в поиске и рекомендациях), &#x60;setId&#x60; (для кампании в карточке товара) или &#x60;menuId&#x60; (для кампании в каталоге).  &lt;br&gt; Для автоматической кампании указывать этот параметр не требуется. |
**instrument** | **int** | тип кампании для изменения ставки в Поиск + Каталог (4 - каталог, 6 - поиск) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
