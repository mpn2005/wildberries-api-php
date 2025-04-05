# # ContentV2CardsUploadPostRequestInnerVariantsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand** | **string** | Бренд | [optional]
**title** | **string** | Наименование товара | [optional]
**description** | **string** | Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.&lt;br&gt; Подробно о правилах описания в **Правилах заполнения карточки товара** в разделе в [Справочном центре](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов. | [optional]
**vendor_code** | **string** | Артикул продавца |
**dimensions** | [**\OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions**](ContentV2CardsUploadPostRequestInnerVariantsInnerDimensions.md) |  | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInnerVariantsInnerSizesInner[]**](ContentV2CardsUploadPostRequestInnerVariantsInnerSizesInner.md) | Массив с размерами. &lt;br&gt;  Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с &#x60;techSize&#x60; &#x3D; \&quot;A\&quot; и &#x60;wbSize&#x60; &#x3D; \&quot;1\&quot; и баркодом. | [optional]
**characteristics** | [**\OpenAPI\Client\Model\ContentV2CardsUploadPostRequestInnerVariantsInnerCharacteristicsInner[]**](ContentV2CardsUploadPostRequestInnerVariantsInnerCharacteristicsInner.md) | Массив характеристик товара | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
