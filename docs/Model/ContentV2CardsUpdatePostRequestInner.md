# # ContentV2CardsUpdatePostRequestInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nm_id** | **int** | Артикул WB |
**vendor_code** | **string** | Артикул продавца |
**brand** | **string** | Бренд | [optional]
**title** | **string** | Наименование товара | [optional]
**description** | **string** | Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.&lt;br&gt; Подробно о правилах описания в **Правилах заполнения карточки товара** в [Справочном центре](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов. | [optional]
**dimensions** | [**\OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInnerDimensions**](ContentV2CardsUpdatePostRequestInnerDimensions.md) |  | [optional]
**characteristics** | [**\OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInnerCharacteristicsInner[]**](ContentV2CardsUpdatePostRequestInnerCharacteristicsInner.md) | Характеристики товара | [optional]
**sizes** | [**\OpenAPI\Client\Model\ContentV2CardsUpdatePostRequestInnerSizesInner[]**](ContentV2CardsUpdatePostRequestInnerSizesInner.md) | Массив размеров артикула. &lt;br&gt; Для безразмерного товара все равно нужно передавать данный массив без параметров (wbSize и techSize), но с баркодом. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
