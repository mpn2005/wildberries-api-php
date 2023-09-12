# # NmReportDetailHistoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_ids** | **int[]** | Артикул WB (max. 20) |
**period** | [**\OpenAPI\Client\Model\NmReportDetailHistoryRequestPeriod**](NmReportDetailHistoryRequestPeriod.md) |  |
**timezone** | **string** | Временная зона.&lt;br&gt; Если не указано, то по умолчанию используется Europe/Moscow. | [optional]
**aggregation_level** | **string** | Тип аггрегации. Если не указано, то по умолчанию используется агрегация по дням. &lt;br&gt; Доступные уровни агрегации &#x60;day&#x60;, &#x60;week&#x60;, &#x60;month&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
