# # ContentV2CardsUploadAddPostRequestCardsToAddInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand** | **string** | Бренд | [optional]
**vendor_code** | **string** | Артикул продавца |
**title** | **string** | Наименование товара | [optional]
**description** | **string** | Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.&lt;br&gt; Подробно о правилах описания в **Правилах заполнения карточки товара** в [Справочном центре](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов. | [optional]
**dimensions** | [**\OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions**](ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions.md) |  | [optional]
**characteristics** | [**\OpenAPI\Client\Model\ContentV2CardsUploadAddPostRequestCardsToAddInnerCharacteristicsInner[]**](ContentV2CardsUploadAddPostRequestCardsToAddInnerCharacteristicsInner.md) | Характеристики товара | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV2CardsUploadAddPostRequestCardsToAddInnerSizesInner[]**](ContentV2CardsUploadAddPostRequestCardsToAddInnerSizesInner.md) | Массив с размерами. &lt;br&gt;  Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с &#x60;techSize&#x60; &#x3D; \&quot;A\&quot; и &#x60;wbSize&#x60; &#x3D; \&quot;1\&quot; и баркодом. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
