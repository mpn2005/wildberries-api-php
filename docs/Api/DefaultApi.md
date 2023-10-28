# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**advV0ActiveGet()**](DefaultApi.md#advV0ActiveGet) | **GET** /adv/v0/active | Изменение активности предметной группы для кампании в поиске |
| [**advV0AdvertGet()**](DefaultApi.md#advV0AdvertGet) | **GET** /adv/v0/advert | Информация о кампании |
| [**advV0AdvertsCreatePost()**](DefaultApi.md#advV0AdvertsCreatePost) | **POST** /adv/v0/adverts/create | Создание кампании, тестовый |
| [**advV0AdvertsGet()**](DefaultApi.md#advV0AdvertsGet) | **GET** /adv/v0/adverts | Список кампаний |
| [**advV0AllcpmPost()**](DefaultApi.md#advV0AllcpmPost) | **POST** /adv/v0/allcpm | Список ставок по типу размещения кампании |
| [**advV0CountGet()**](DefaultApi.md#advV0CountGet) | **GET** /adv/v0/count | Получение кампаний |
| [**advV0CpmGet()**](DefaultApi.md#advV0CpmGet) | **GET** /adv/v0/cpm | Список ставок |
| [**advV0CpmPost()**](DefaultApi.md#advV0CpmPost) | **POST** /adv/v0/cpm | Изменение ставки у кампании |
| [**advV0IntervalsPost()**](DefaultApi.md#advV0IntervalsPost) | **POST** /adv/v0/intervals | Изменение интервалов показа кампании |
| [**advV0NmactivePost()**](DefaultApi.md#advV0NmactivePost) | **POST** /adv/v0/nmactive | Изменение активности номенклатур кампании |
| [**advV0ParamsMenuGet()**](DefaultApi.md#advV0ParamsMenuGet) | **GET** /adv/v0/params/menu | Словарь значений параметра menuId |
| [**advV0ParamsSetGet()**](DefaultApi.md#advV0ParamsSetGet) | **GET** /adv/v0/params/set | Словарь значений параметра setId |
| [**advV0ParamsSubjectGet()**](DefaultApi.md#advV0ParamsSubjectGet) | **GET** /adv/v0/params/subject | Словарь значений параметра subjectId |
| [**advV0PauseGet()**](DefaultApi.md#advV0PauseGet) | **GET** /adv/v0/pause | Пауза кампании |
| [**advV0RenamePost()**](DefaultApi.md#advV0RenamePost) | **POST** /adv/v0/rename | Переименование кампании |
| [**advV0StartGet()**](DefaultApi.md#advV0StartGet) | **GET** /adv/v0/start | Запуск кампании |
| [**advV0StopGet()**](DefaultApi.md#advV0StopGet) | **GET** /adv/v0/stop | Завершение кампании |
| [**advV1AutoActivePost()**](DefaultApi.md#advV1AutoActivePost) | **POST** /adv/v1/auto/active | Управление зонами показов в автоматической кампании |
| [**advV1AutoGetnmtoaddGet()**](DefaultApi.md#advV1AutoGetnmtoaddGet) | **GET** /adv/v1/auto/getnmtoadd | Список номенклатур для автоматической кампании |
| [**advV1AutoStatGet()**](DefaultApi.md#advV1AutoStatGet) | **GET** /adv/v1/auto/stat | Статистика автоматической кампании |
| [**advV1AutoUpdatenmPost()**](DefaultApi.md#advV1AutoUpdatenmPost) | **POST** /adv/v1/auto/updatenm | Изменение списка номенклатур в автоматической кампании |
| [**advV1BalanceGet()**](DefaultApi.md#advV1BalanceGet) | **GET** /adv/v1/balance | Баланс |
| [**advV1BudgetDepositPost()**](DefaultApi.md#advV1BudgetDepositPost) | **POST** /adv/v1/budget/deposit | Пополнение бюджета кампании |
| [**advV1BudgetGet()**](DefaultApi.md#advV1BudgetGet) | **GET** /adv/v1/budget | Бюджет кампании |
| [**advV1FullstatGet()**](DefaultApi.md#advV1FullstatGet) | **GET** /adv/v1/fullstat | Полная статистика кампании |
| [**advV1PaymentsGet()**](DefaultApi.md#advV1PaymentsGet) | **GET** /adv/v1/payments | Получение истории пополнений счета |
| [**advV1SaveAdPost()**](DefaultApi.md#advV1SaveAdPost) | **POST** /adv/v1/save-ad | Создание кампании |
| [**advV1SeacatStatGet()**](DefaultApi.md#advV1SeacatStatGet) | **GET** /adv/v1/seacat/stat | Статистика кампаний Поиск + Каталог |
| [**advV1SearchSetExcludedPost()**](DefaultApi.md#advV1SearchSetExcludedPost) | **POST** /adv/v1/search/set-excluded | Установка/удаление минус-фраз из поиска для кампании в поиске |
| [**advV1SearchSetPhrasePost()**](DefaultApi.md#advV1SearchSetPhrasePost) | **POST** /adv/v1/search/set-phrase | Установка/удаление минус-фраз фразового соответствия для кампании в поиске |
| [**advV1SearchSetPlusGet()**](DefaultApi.md#advV1SearchSetPlusGet) | **GET** /adv/v1/search/set-plus | Управление активностью фиксированных фраз у кампании в поиске |
| [**advV1SearchSetPlusPost()**](DefaultApi.md#advV1SearchSetPlusPost) | **POST** /adv/v1/search/set-plus | Установка/удаление фиксированных фраз у кампании в поиске |
| [**advV1SearchSetStrongPost()**](DefaultApi.md#advV1SearchSetStrongPost) | **POST** /adv/v1/search/set-strong | Установка/удаление минус-фраз точного соответствия для кампании в поиске |
| [**advV1StatWordsGet()**](DefaultApi.md#advV1StatWordsGet) | **GET** /adv/v1/stat/words | Статистика поисковой кампании по ключевым фразам |
| [**advV1UpdGet()**](DefaultApi.md#advV1UpdGet) | **GET** /adv/v1/upd | Получение истории затрат |
| [**advV1UpdIntervalsGet()**](DefaultApi.md#advV1UpdIntervalsGet) | **GET** /adv/v1/upd/intervals | Получение месячных интервалов для истории затрат |
| [**apiV1DelPost()**](DefaultApi.md#apiV1DelPost) | **POST** /api/v1/del | Удаление рекомендаций |
| [**apiV1FeedbackGet()**](DefaultApi.md#apiV1FeedbackGet) | **GET** /api/v1/feedback | Получить отзыв по Id |
| [**apiV1FeedbacksArchiveGet()**](DefaultApi.md#apiV1FeedbacksArchiveGet) | **GET** /api/v1/feedbacks/archive | Список архивных отзывов |
| [**apiV1FeedbacksCountGet()**](DefaultApi.md#apiV1FeedbacksCountGet) | **GET** /api/v1/feedbacks/count | Количество отзывов |
| [**apiV1FeedbacksCountUnansweredGet()**](DefaultApi.md#apiV1FeedbacksCountUnansweredGet) | **GET** /api/v1/feedbacks/count-unanswered | Необработанные отзывы |
| [**apiV1FeedbacksGet()**](DefaultApi.md#apiV1FeedbacksGet) | **GET** /api/v1/feedbacks | Список отзывов |
| [**apiV1FeedbacksPatch()**](DefaultApi.md#apiV1FeedbacksPatch) | **PATCH** /api/v1/feedbacks | Работа с отзывом |
| [**apiV1FeedbacksProductsRatingGet()**](DefaultApi.md#apiV1FeedbacksProductsRatingGet) | **GET** /api/v1/feedbacks/products/rating | Средняя оценка товаров по родительской категории |
| [**apiV1FeedbacksProductsRatingNmidGet()**](DefaultApi.md#apiV1FeedbacksProductsRatingNmidGet) | **GET** /api/v1/feedbacks/products/rating/nmid | Средняя оценка товара по артикулу WB |
| [**apiV1FeedbacksProductsRatingTopGet()**](DefaultApi.md#apiV1FeedbacksProductsRatingTopGet) | **GET** /api/v1/feedbacks/products/rating/top | Товары с наибольшей и наименьшей средней оценкой по родительской категории |
| [**apiV1FeedbacksReportGet()**](DefaultApi.md#apiV1FeedbacksReportGet) | **GET** /api/v1/feedbacks/report | Получение отзывов в формате XLSX |
| [**apiV1InsPost()**](DefaultApi.md#apiV1InsPost) | **POST** /api/v1/ins | Добавление рекомендаций |
| [**apiV1ListPost()**](DefaultApi.md#apiV1ListPost) | **POST** /api/v1/list | Список рекомендаций |
| [**apiV1NewFeedbacksQuestionsGet()**](DefaultApi.md#apiV1NewFeedbacksQuestionsGet) | **GET** /api/v1/new-feedbacks-questions | Непросмотренные отзывы и вопросы |
| [**apiV1ParentSubjectsGet()**](DefaultApi.md#apiV1ParentSubjectsGet) | **GET** /api/v1/parent-subjects | Родительские категории товаров |
| [**apiV1QuestionGet()**](DefaultApi.md#apiV1QuestionGet) | **GET** /api/v1/question | Получить вопрос по Id |
| [**apiV1QuestionsCountGet()**](DefaultApi.md#apiV1QuestionsCountGet) | **GET** /api/v1/questions/count | Количество вопросов |
| [**apiV1QuestionsCountUnansweredGet()**](DefaultApi.md#apiV1QuestionsCountUnansweredGet) | **GET** /api/v1/questions/count-unanswered | Неотвеченные вопросы |
| [**apiV1QuestionsGet()**](DefaultApi.md#apiV1QuestionsGet) | **GET** /api/v1/questions | Список вопросов |
| [**apiV1QuestionsPatch()**](DefaultApi.md#apiV1QuestionsPatch) | **PATCH** /api/v1/questions | Работа с вопросами |
| [**apiV1QuestionsProductsRatingGet()**](DefaultApi.md#apiV1QuestionsProductsRatingGet) | **GET** /api/v1/questions/products/rating | Часто спрашиваемые товары |
| [**apiV1QuestionsReportGet()**](DefaultApi.md#apiV1QuestionsReportGet) | **GET** /api/v1/questions/report | Получение вопросов в формате XLSX |
| [**apiV1SetPost()**](DefaultApi.md#apiV1SetPost) | **POST** /api/v1/set | Управление рекомендациями |
| [**apiV1SupplierIncomesGet()**](DefaultApi.md#apiV1SupplierIncomesGet) | **GET** /api/v1/supplier/incomes | Поставки |
| [**apiV1SupplierOrdersGet()**](DefaultApi.md#apiV1SupplierOrdersGet) | **GET** /api/v1/supplier/orders | Заказы |
| [**apiV1SupplierReportDetailByPeriodGet()**](DefaultApi.md#apiV1SupplierReportDetailByPeriodGet) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации |
| [**apiV1SupplierSalesGet()**](DefaultApi.md#apiV1SupplierSalesGet) | **GET** /api/v1/supplier/sales | Продажи |
| [**apiV1SupplierStocksGet()**](DefaultApi.md#apiV1SupplierStocksGet) | **GET** /api/v1/supplier/stocks | Склад |
| [**apiV1TemplatesDelete()**](DefaultApi.md#apiV1TemplatesDelete) | **DELETE** /api/v1/templates | Удалить шаблон |
| [**apiV1TemplatesGet()**](DefaultApi.md#apiV1TemplatesGet) | **GET** /api/v1/templates | Получить шаблоны ответов |
| [**apiV1TemplatesPatch()**](DefaultApi.md#apiV1TemplatesPatch) | **PATCH** /api/v1/templates | Редактировать шаблон |
| [**apiV1TemplatesPost()**](DefaultApi.md#apiV1TemplatesPost) | **POST** /api/v1/templates | Создать шаблон |
| [**contentV1AnalyticsNmReportDetailHistoryPost()**](DefaultApi.md#contentV1AnalyticsNmReportDetailHistoryPost) | **POST** /content/v1/analytics/nm-report/detail/history | Получение статистики КТ по дням/неделям/месяцам по выбранным nmID |
| [**contentV1AnalyticsNmReportDetailPost()**](DefaultApi.md#contentV1AnalyticsNmReportDetailPost) | **POST** /content/v1/analytics/nm-report/detail | Получение статистики КТ за выбранный период, по nmID/предметам/брендам/тегам |
| [**contentV1AnalyticsNmReportGroupedHistoryPost()**](DefaultApi.md#contentV1AnalyticsNmReportGroupedHistoryPost) | **POST** /content/v1/analytics/nm-report/grouped/history | Получение статистики КТ по дням/неделям/месяцам за период, сгруппированный по предметам, брендам и тегам |
| [**contentV1AnalyticsNmReportGroupedPost()**](DefaultApi.md#contentV1AnalyticsNmReportGroupedPost) | **POST** /content/v1/analytics/nm-report/grouped | Получение статистики КТ за период, сгруппированный по предметам, брендам и тегам |
| [**contentV1BarcodesPost()**](DefaultApi.md#contentV1BarcodesPost) | **POST** /content/v1/barcodes | Генерация баркодов |
| [**contentV1CardsCursorListPost()**](DefaultApi.md#contentV1CardsCursorListPost) | **POST** /content/v1/cards/cursor/list | Список НМ |
| [**contentV1CardsErrorListGet()**](DefaultApi.md#contentV1CardsErrorListGet) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками |
| [**contentV1CardsFilterPost()**](DefaultApi.md#contentV1CardsFilterPost) | **POST** /content/v1/cards/filter | Получение КТ по артикулам продавца |
| [**contentV1CardsLimitsGet()**](DefaultApi.md#contentV1CardsLimitsGet) | **GET** /content/v1/cards/limits | Лимиты по КТ |
| [**contentV1CardsMoveNmPost()**](DefaultApi.md#contentV1CardsMoveNmPost) | **POST** /content/v1/cards/moveNm | Объединение / Разъединение НМ |
| [**contentV1CardsTrashListPost()**](DefaultApi.md#contentV1CardsTrashListPost) | **POST** /content/v1/cards/trash/list | Список НМ, находящихся в корзине |
| [**contentV1CardsUpdatePost()**](DefaultApi.md#contentV1CardsUpdatePost) | **POST** /content/v1/cards/update | Редактирование КТ |
| [**contentV1CardsUploadAddPost()**](DefaultApi.md#contentV1CardsUploadAddPost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ |
| [**contentV1CardsUploadPost()**](DefaultApi.md#contentV1CardsUploadPost) | **POST** /content/v1/cards/upload | Создание  КТ |
| [**contentV1DirectoryBrandsGet()**](DefaultApi.md#contentV1DirectoryBrandsGet) | **GET** /content/v1/directory/brands | Бренд |
| [**contentV1DirectoryColorsGet()**](DefaultApi.md#contentV1DirectoryColorsGet) | **GET** /content/v1/directory/colors | Цвет |
| [**contentV1DirectoryCountriesGet()**](DefaultApi.md#contentV1DirectoryCountriesGet) | **GET** /content/v1/directory/countries | Страна Производства |
| [**contentV1DirectoryKindsGet()**](DefaultApi.md#contentV1DirectoryKindsGet) | **GET** /content/v1/directory/kinds | Пол |
| [**contentV1DirectorySeasonsGet()**](DefaultApi.md#contentV1DirectorySeasonsGet) | **GET** /content/v1/directory/seasons | Сезон |
| [**contentV1DirectoryTnvedGet()**](DefaultApi.md#contentV1DirectoryTnvedGet) | **GET** /content/v1/directory/tnved | ТНВЭД код |
| [**contentV1MediaFilePost()**](DefaultApi.md#contentV1MediaFilePost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ |
| [**contentV1MediaSavePost()**](DefaultApi.md#contentV1MediaSavePost) | **POST** /content/v1/media/save | Изменение медиа контента КТ |
| [**contentV1ObjectAllGet()**](DefaultApi.md#contentV1ObjectAllGet) | **GET** /content/v1/object/all | Категория товаров |
| [**contentV1ObjectCharacteristicsListFilterGet()**](DefaultApi.md#contentV1ObjectCharacteristicsListFilterGet) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям |
| [**contentV1ObjectCharacteristicsObjectNameGet()**](DefaultApi.md#contentV1ObjectCharacteristicsObjectNameGet) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара |
| [**contentV1ObjectParentAllGet()**](DefaultApi.md#contentV1ObjectParentAllGet) | **GET** /content/v1/object/parent/all | Родительские категории товаров |
| [**contentV1TagIdDelete()**](DefaultApi.md#contentV1TagIdDelete) | **DELETE** /content/v1/tag/{id} | Удаление тега |
| [**contentV1TagIdPatch()**](DefaultApi.md#contentV1TagIdPatch) | **PATCH** /content/v1/tag/{id} | Изменение тега |
| [**contentV1TagNomenclatureLinkPost()**](DefaultApi.md#contentV1TagNomenclatureLinkPost) | **POST** /content/v1/tag/nomenclature/link | Управление тегами в КТ |
| [**contentV1TagPost()**](DefaultApi.md#contentV1TagPost) | **POST** /content/v1/tag | Создание тега |
| [**contentV1TagsGet()**](DefaultApi.md#contentV1TagsGet) | **GET** /content/v1/tags | Список тегов |
| [**publicApiV1InfoGet()**](DefaultApi.md#publicApiV1InfoGet) | **GET** /public/api/v1/info | Получение информации о ценах. |
| [**publicApiV1PricesPost()**](DefaultApi.md#publicApiV1PricesPost) | **POST** /public/api/v1/prices | Загрузка цен |
| [**publicApiV1RevokeDiscountsPost()**](DefaultApi.md#publicApiV1RevokeDiscountsPost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур |
| [**publicApiV1RevokePromocodesPost()**](DefaultApi.md#publicApiV1RevokePromocodesPost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур |
| [**publicApiV1UpdateDiscountsPost()**](DefaultApi.md#publicApiV1UpdateDiscountsPost) | **POST** /public/api/v1/updateDiscounts | Установка скидок |
| [**publicApiV1UpdatePromocodesPost()**](DefaultApi.md#publicApiV1UpdatePromocodesPost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур |


## `advV0ActiveGet()`

```php
advV0ActiveGet($id, $subject_id, $status)
```
### URI(s):
- https://advert-api.wb.ru 
Изменение активности предметной группы для кампании в поиске

Метод позволяет изменить активность предметной группы для кампании в поиске.<br> Изменение активности доступно только для кампании в статусе 9 или 11.<br> Допускается максимум 60 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // int | Идентификатор кампании
$subject_id = 1234; // int | Идентификатор предметной группы, для которой меняется активность
$status = true; // string | Новое состояние (`true` - сделать группу активной или `false` - сделать группу неактивной)

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0ActiveGet($id, $subject_id, $status, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0ActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **subject_id** | **int**| Идентификатор предметной группы, для которой меняется активность | |
| **status** | **string**| Новое состояние (&#x60;true&#x60; - сделать группу активной или &#x60;false&#x60; - сделать группу неактивной) | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0AdvertGet()`

```php
advV0AdvertGet($id): \OpenAPI\Client\Model\AdvV0AdvertGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Информация о кампании

Получение информации об одной кампании. <br> `Важно`: Чтобы у кампании со статусом <b>4</b> отображалась структура `params` необходимо после создания кампании нажать кнопку \"Применить изменения\" в кабинете ВБ. Продвижение.<br> Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0AdvertGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0AdvertGet200Response**](../Model/AdvV0AdvertGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0AdvertsCreatePost()`

```php
advV0AdvertsCreatePost($adv_v0_adverts_create_post_request_inner)
```
### URI(s):
- https://advert-api.wb.ru 
Создание кампании, тестовый

Метод позволяет создать кампании. <span class=\"newM\">new</span><br> Максимум можно создать 50 кампаний.<br> <br> <b>Метод создан исключительно для целей тестирования</b>.<br>  Метод позволяет создавать компании типа `4`, `5`, `6`, `7`, `9`.<br> Для создания автоматических кампаний (тип `8`) используется метод <a href=\"./index.html#tag/Prodvizhenie/paths/~1adv~1v1~1save-ad/post\">Создание кампании</a> <br> Кампании (статус `4`, `9`, `11`) будут удалены через 24 часа с момента внесения последних изменений, а завершенные кампании (статус `7`) будут удалены через 1 час.<br> <br> Статус кампании при создании - кампания на паузе (`4`).<br> Дневной бюджет(`dailyBudget`) при создании кампании равен 0.<br> Параметры `menuId`, `menuName`, `subjectId`, `subjectName`, `setId`, `setName`, `nm` при создании кампании подставляются автоматически.<br> Флаг активности кампании и состояние номенклатуры при создании `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v0_adverts_create_post_request_inner = array(new \OpenAPI\Client\Model\AdvV0AdvertsCreatePostRequestInner()); // \OpenAPI\Client\Model\AdvV0AdvertsCreatePostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0AdvertsCreatePost($adv_v0_adverts_create_post_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertsCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v0_adverts_create_post_request_inner** | [**\OpenAPI\Client\Model\AdvV0AdvertsCreatePostRequestInner[]**](../Model/AdvV0AdvertsCreatePostRequestInner.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0AdvertsGet()`

```php
advV0AdvertsGet($status, $type, $limit, $offset, $order, $direction): \OpenAPI\Client\Model\AdvV0AdvertsGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Список кампаний

Метод позволяет получить список кампании продавца. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 56; // int | <dl> <dt>Статус кампании:</dt> <dd><code>4</code> - готова к запуску </dd> <dd><code>7</code> - кампания завершена</dd> <dd><code>8</code> - отказался</dd> <dd><code>9</code> - идут показы</dd> <dd><code>11</code> - кампания на паузе</dd> </dl>
$type = 56; // int | <dl> <dt>Тип кампании:</dt> <dd><code>4</code> - кампания в каталоге</dd> <dd><code>5</code> - кампания в карточке товара</dd> <dd><code>6</code> - кампания в поиске</dd> <dd><code>7</code> - кампания в рекомендациях на главной странице</dd> <dd><code>8</code> - автоматическая кампания </dd> <dd><code>9</code> - поиск + каталог </dd> </dl>
$limit = 1; // int | Количество кампаний в ответе
$offset = 0; // int | Смещение относительно первой кампании
$order = 'order_example'; // string | <dl> <dt>Порядок:</dt> <dd><code>create</code> (по времени создания кампании)</dd> <dd><code>change</code> (по времени последнего изменения кампании)</dd> <dd><code>id</code> (по идентификатору кампании)</dd> </dl> <br>Например: <code>**_/adv/v0/adverts?type=6&limit=5&offset=10&<b>order=change</b>&direction=asc**</code>
$direction = 'direction_example'; // string | <dl> <dt>Направление:</dt> <dd><code>desc</code> (от большего к меньшему)</dd> <dd><code>asc</code> (от меньшего к большему)</dd> </dl> <br>Например: <code>**_/adv/v0/adverts?type=6&limit=5&offset=10&order=change&<b>direction=asc</b>**</code>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0AdvertsGet($status, $type, $limit, $offset, $order, $direction, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **int**| &lt;dl&gt; &lt;dt&gt;Статус кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - готова к запуску &lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания завершена&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - отказался&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - идут показы&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;11&lt;/code&gt; - кампания на паузе&lt;/dd&gt; &lt;/dl&gt; | [optional] |
| **type** | **int**| &lt;dl&gt; &lt;dt&gt;Тип кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;8&lt;/code&gt; - автоматическая кампания &lt;/dd&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - поиск + каталог &lt;/dd&gt; &lt;/dl&gt; | [optional] |
| **limit** | **int**| Количество кампаний в ответе | [optional] |
| **offset** | **int**| Смещение относительно первой кампании | [optional] |
| **order** | **string**| &lt;dl&gt; &lt;dt&gt;Порядок:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;create&lt;/code&gt; (по времени создания кампании)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;change&lt;/code&gt; (по времени последнего изменения кампании)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;id&lt;/code&gt; (по идентификатору кампании)&lt;/dd&gt; &lt;/dl&gt; &lt;br&gt;Например: &lt;code&gt;**_/adv/v0/adverts?type&#x3D;6&amp;limit&#x3D;5&amp;offset&#x3D;10&amp;&lt;b&gt;order&#x3D;change&lt;/b&gt;&amp;direction&#x3D;asc**&lt;/code&gt; | [optional] |
| **direction** | **string**| &lt;dl&gt; &lt;dt&gt;Направление:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;desc&lt;/code&gt; (от большего к меньшему)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;asc&lt;/code&gt; (от меньшего к большему)&lt;/dd&gt; &lt;/dl&gt; &lt;br&gt;Например: &lt;code&gt;**_/adv/v0/adverts?type&#x3D;6&amp;limit&#x3D;5&amp;offset&#x3D;10&amp;order&#x3D;change&amp;&lt;b&gt;direction&#x3D;asc&lt;/b&gt;**&lt;/code&gt; | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0AdvertsGet200ResponseInner[]**](../Model/AdvV0AdvertsGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0AllcpmPost()`

```php
advV0AllcpmPost($type, $adv_v0_allcpm_post_request): \OpenAPI\Client\Model\AdvV0AllcpmPost200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Список ставок по типу размещения кампании

Метод позволяет получить список ставок по типу размещения кампании.<br> С помощью этого метода изменить ставку невозможно.<br> <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | <dl> <dt>кампании:</dt> <dd><code>4</code> - кампания в каталоге</dd> <dd><code>5</code> - кампания в карточке товара</dd> <dd><code>6</code> - кампания в поиске</dd> <dd><code>7</code> - кампания в рекомендациях на главной странице</dd> </dl>
$adv_v0_allcpm_post_request = {"param":[699,344,385]}; // \OpenAPI\Client\Model\AdvV0AllcpmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0AllcpmPost($type, $adv_v0_allcpm_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AllcpmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**| &lt;dl&gt; &lt;dt&gt;кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;/dl&gt; | |
| **adv_v0_allcpm_post_request** | [**\OpenAPI\Client\Model\AdvV0AllcpmPostRequest**](../Model/AdvV0AllcpmPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0AllcpmPost200ResponseInner[]**](../Model/AdvV0AllcpmPost200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0CountGet()`

```php
advV0CountGet(): \OpenAPI\Client\Model\AdvV0CountGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Получение кампаний

Получение количества кампаний поставщика. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0CountGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0CountGet200Response**](../Model/AdvV0CountGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0CpmGet()`

```php
advV0CpmGet($type, $param): \OpenAPI\Client\Model\AdvV0CpmGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Список ставок

Получение списка ставок для типа размещения. <br>Данные в ответе отсортированы по величине ставки от большей к меньшей. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | <dl> <dt>кампании:</dt> <dd><code>4</code> - кампания в каталоге</dd> <dd><code>5</code> - кампания в карточке товара</dd> <dd><code>6</code> - кампания в поиске</dd> <dd><code>7</code> - кампания в рекомендациях на главной странице</dd> </dl>
$param = 1234; // int | Параметр запроса, по которому будет получен список ставок активных кампаний. <br>Должен быть значением `menuId`, `subjectId` или `setId` в зависимости от типа кампании. Получить их можно методом Информация о кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0CpmGet($type, $param, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**| &lt;dl&gt; &lt;dt&gt;кампании:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - кампания в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - кампания в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - кампания в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - кампания в рекомендациях на главной странице&lt;/dd&gt; &lt;/dl&gt; | |
| **param** | **int**| Параметр запроса, по которому будет получен список ставок активных кампаний. &lt;br&gt;Должен быть значением &#x60;menuId&#x60;, &#x60;subjectId&#x60; или &#x60;setId&#x60; в зависимости от типа кампании. Получить их можно методом Информация о кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0CpmGet200ResponseInner[]**](../Model/AdvV0CpmGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0CpmPost()`

```php
advV0CpmPost($adv_v0_cpm_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Изменение ставки у кампании

Изменение ставки у кампании.<br> Допускается максимум 300 запросов в минуту.<br> <br> `Важно!` Если устанавливаемая ставка имеет размер меньше допустимого, то в ответ Вы получите статус-код 422 (Размер ставки не изменён).<br> Информация об изменении минимального размера ставки публикуется в разделе Новости, на портале продавцов.<br> <br>  `Важно!` Принцип заполнения параметров `type`, `instrument`, `param` при изменении ставки для кампании с типом 9 (поиск + каталог):  <br> Для `type` указывается значение 9 (всегда). <br> Для `instrument` указывается значение 4 или 6 в зависимости от того, в каталоге или поиске необходимо изменить ставку. <br> Для `param` всегда указывается значение поля <b>id</b> из структуры <b>subject</b> ответа метода \"Информация о кампании\", вне зависимости от того, в каталоге или поиске изменяется ставка. <br><br>  `Важно!` Если в кампании Поиск + Каталог доступен только Поиск, то установить ставку в Каталог (`instrument` = 4) не получится. В ответ Вы получите статус-код 422

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v0_cpm_post_request = new \OpenAPI\Client\Model\AdvV0CpmPostRequest(); // \OpenAPI\Client\Model\AdvV0CpmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0CpmPost($adv_v0_cpm_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v0_cpm_post_request** | [**\OpenAPI\Client\Model\AdvV0CpmPostRequest**](../Model/AdvV0CpmPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0IntervalsPost()`

```php
advV0IntervalsPost($adv_v0_intervals_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Изменение интервалов показа кампании

Метод позволяет изменить временной интервал показа кампании.<br> Изменение интервалов доступно для кампаний с типами:  <br> `4` - кампании в каталоге   <br> `5` - кампании в карточке товара  <br> `6` - кампании в поиске  <br> `7` - кампании в рекомендациях<br>  <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v0_intervals_post_request = {"advertId":3344123,"intervals":[{"begin":3,"end":5},{"begin":19,"end":21}],"param":275}; // \OpenAPI\Client\Model\AdvV0IntervalsPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0IntervalsPost($adv_v0_intervals_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0IntervalsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v0_intervals_post_request** | [**\OpenAPI\Client\Model\AdvV0IntervalsPostRequest**](../Model/AdvV0IntervalsPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0NmactivePost()`

```php
advV0NmactivePost($adv_v0_nmactive_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Изменение активности номенклатур кампании

Метод позволяет изменить активность номенклатур только для кампании в поиске и рекомендациях и кампании в карточке товара.<br> В запросе необходимо передавать все номенклатуры кампании с их активностью, даже если изменение планируется только по одной номенклатуре.<br> При наличии в кампании нескольких `subjectId` номенклатуры по каждому `subjectId` необходимо передать отдельным запросом. То же касается `setId`.<br> Изменение активности номенклатур доступно для кампаний с типами `5`, `6`, `7`. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v0_nmactive_post_request = {"advertId":456789,"active":[{"nm":2116745,"active":true},{"nm":301402,"active":true}],"param":275}; // \OpenAPI\Client\Model\AdvV0NmactivePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0NmactivePost($adv_v0_nmactive_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0NmactivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v0_nmactive_post_request** | [**\OpenAPI\Client\Model\AdvV0NmactivePostRequest**](../Model/AdvV0NmactivePostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0ParamsMenuGet()`

```php
advV0ParamsMenuGet($id): \OpenAPI\Client\Model\AdvV0ParamsMenuGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Словарь значений параметра menuId

Метод позволяет получить список значений параметра <code>menuId</code>.<br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8967; // int | Идентификатор меню, где размещается кампания (для кампаний в каталоге). <br> Принимает значение параметра `menuId` из кампании. <br> При пустом параметре вернётся весь список существующих значений.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0ParamsMenuGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0ParamsMenuGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор меню, где размещается кампания (для кампаний в каталоге). &lt;br&gt; Принимает значение параметра &#x60;menuId&#x60; из кампании. &lt;br&gt; При пустом параметре вернётся весь список существующих значений. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0ParamsMenuGet200ResponseInner[]**](../Model/AdvV0ParamsMenuGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0ParamsSetGet()`

```php
advV0ParamsSetGet($id): \OpenAPI\Client\Model\AdvV0ParamsSetGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Словарь значений параметра setId

Метод позволяет получить список значений параметра <code>setId</code>.<br> Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор сочетания предмета и пола (для кампаний в карточке товара). <br> Принимает значение параметра `setId` из кампании. <br> При пустом параметре вернётся весь список существующих значений.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0ParamsSetGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0ParamsSetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор сочетания предмета и пола (для кампаний в карточке товара). &lt;br&gt; Принимает значение параметра &#x60;setId&#x60; из кампании. &lt;br&gt; При пустом параметре вернётся весь список существующих значений. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0ParamsSetGet200ResponseInner[]**](../Model/AdvV0ParamsSetGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0ParamsSubjectGet()`

```php
advV0ParamsSubjectGet($id): \OpenAPI\Client\Model\AdvV0ParamsSubjectGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Словарь значений параметра subjectId

Метод позволяет получить список значений параметра <code>subjectId</code>.<br> Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор предметной группы, для которой создана кампания (для кампаний в поиске и рекомендациях). <br> Принимает значение параметра `subjectId` из кампании. <br> При пустом параметре вернётся весь список существующих значений.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV0ParamsSubjectGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0ParamsSubjectGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор предметной группы, для которой создана кампания (для кампаний в поиске и рекомендациях). &lt;br&gt; Принимает значение параметра &#x60;subjectId&#x60; из кампании. &lt;br&gt; При пустом параметре вернётся весь список существующих значений. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV0ParamsSubjectGet200ResponseInner[]**](../Model/AdvV0ParamsSubjectGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0PauseGet()`

```php
advV0PauseGet($id)
```
### URI(s):
- https://advert-api.wb.ru 
Пауза кампании

кампании в статусе <b>\"9 - идут показы\"</b> - можно запаузить, сделав <b>GET</b> на  `/adv/v0/pause?id=***`. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0PauseGet($id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0PauseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0RenamePost()`

```php
advV0RenamePost($adv_v0_rename_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Переименование кампании

Метод позволяет переименовать кампанию. <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v0_rename_post_request = {"advertId":2233344,"name":"newnmame"}; // \OpenAPI\Client\Model\AdvV0RenamePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0RenamePost($adv_v0_rename_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0RenamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v0_rename_post_request** | [**\OpenAPI\Client\Model\AdvV0RenamePostRequest**](../Model/AdvV0RenamePostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0StartGet()`

```php
advV0StartGet($id)
```
### URI(s):
- https://advert-api.wb.ru 
Запуск кампании

Метод позволяет запускать кампании находящиеся в статусах <b>4 - готова к запуску</b> или <b>11 - кампания на паузе</b>. <br> Для запуска кампании со статусом <b>11</b> необходимо наличие у неё активных ставок.<br> <dl> <dt>Чтобы запустить кампанию со статусом <b>4</b> необходимо выполнить два условия (поочередность действий значения не имеет):</dt> <dd>1. После создания кампании в кабинете ВБ. Продвижение необходимо нажать кнопку \"Применить изменения\".</dd> <dd>2. Установить бюджет.</dd> </dl> <br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0StartGet($id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0StartGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV0StopGet()`

```php
advV0StopGet($id)
```
### URI(s):
- https://advert-api.wb.ru 
Завершение кампании

Метод позволяет завершить кампанию, находящуюся в статусе 9 или 11 или 4.<br>Допускается максимум 300 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV0StopGet($id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0StopGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1AutoActivePost()`

```php
advV1AutoActivePost($id, $adv_v1_auto_active_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Управление зонами показов в автоматической кампании

Метод позволяет изменять активность зон показов. <br> Допускается максимум 60 запросов в минуту.<br> Вы можете осуществлять показы товаров во всех зонах либо выборочно.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании
$adv_v1_auto_active_post_request = new \OpenAPI\Client\Model\AdvV1AutoActivePostRequest(); // \OpenAPI\Client\Model\AdvV1AutoActivePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1AutoActivePost($id, $adv_v1_auto_active_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1AutoActivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_auto_active_post_request** | [**\OpenAPI\Client\Model\AdvV1AutoActivePostRequest**](../Model/AdvV1AutoActivePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1AutoGetnmtoaddGet()`

```php
advV1AutoGetnmtoaddGet($id): int[]
```
### URI(s):
- https://advert-api.wb.ru 
Список номенклатур для автоматической кампании

Метод позволяет получать список номенклатур, доступных для добавления в кампанию. <br> Допускается максимум 60 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1AutoGetnmtoaddGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1AutoGetnmtoaddGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**int[]**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1AutoStatGet()`

```php
advV1AutoStatGet($id): \OpenAPI\Client\Model\AdvV1AutoStatGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Статистика автоматической кампании

Метод позволяет получать краткую статистику по автоматической кампании. <br> Допускается максимум 120 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1AutoStatGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1AutoStatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1AutoStatGet200Response**](../Model/AdvV1AutoStatGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1AutoUpdatenmPost()`

```php
advV1AutoUpdatenmPost($id, $adv_v1_auto_updatenm_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Изменение списка номенклатур в автоматической кампании

Метод позволяет добавлять и удалять номенклатуры. <br> Допускается максимум 60 запросов в минуту.<br> `Важно`: Добавить можно только те номенклатуры, которые вернутся в ответе метода <b>\"Список номенкатур для автоматической кампании\"</b>.<br> Удалить единственную номенклатуру из кампании нельзя.<br> Проверки по параметру delete не предусмотрено.<br> Если пришел ответ со статус-кодом 200, а изменений не произошло, то проверьте запрос на соответствие документации.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании
$adv_v1_auto_updatenm_post_request = {"add":[11111111,44444444],"delete":[55555555]}; // \OpenAPI\Client\Model\AdvV1AutoUpdatenmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1AutoUpdatenmPost($id, $adv_v1_auto_updatenm_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1AutoUpdatenmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_auto_updatenm_post_request** | [**\OpenAPI\Client\Model\AdvV1AutoUpdatenmPostRequest**](../Model/AdvV1AutoUpdatenmPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1BalanceGet()`

```php
advV1BalanceGet(): \OpenAPI\Client\Model\AdvV1BalanceGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Баланс

Метод позволяет получать информацию о счёте, балансе и бонусах продавца. <br> Допускается максимум 60 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1BalanceGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1BalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1BalanceGet200Response**](../Model/AdvV1BalanceGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1BudgetDepositPost()`

```php
advV1BudgetDepositPost($id, $adv_v1_budget_deposit_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Пополнение бюджета кампании

Метод позволяет пополнять бюджет кампании. <br> Допускается 1 запрос в секунду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$adv_v1_budget_deposit_post_request = new \OpenAPI\Client\Model\AdvV1BudgetDepositPostRequest(); // \OpenAPI\Client\Model\AdvV1BudgetDepositPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1BudgetDepositPost($id, $adv_v1_budget_deposit_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1BudgetDepositPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_budget_deposit_post_request** | [**\OpenAPI\Client\Model\AdvV1BudgetDepositPostRequest**](../Model/AdvV1BudgetDepositPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1BudgetGet()`

```php
advV1BudgetGet($id): \OpenAPI\Client\Model\AdvV1BudgetGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Бюджет кампании

Метод позволяет получать информацию о бюджете кампании. <br> Допускается максимум 240 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1BudgetGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1BudgetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1BudgetGet200Response**](../Model/AdvV1BudgetGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1FullstatGet()`

```php
advV1FullstatGet($id, $begin, $end): \OpenAPI\Client\Model\AdvV1FullstatGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Полная статистика кампании

Метод позволяет получать расширенную статистку кампании, разделенную по дням, номенклатурам и платформам (сайт, андроид, IOS). <br> Информация обновляется не реже одного раза в два часа.<br> Допускается максимум 120 запросов в минуту.<br>  `Важно!` Для кампаний в статусе 7 - Кампания завершена - параметры <b>begin</b> и <b>end</b> неприменимы. <br>  Получить данные по таким кампаниям можно только сразу за всё время.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании.
$begin = 2023-05-03; // string | Начало запрашиваемого периода. <span class=\"new\">new</span>
$end = 2023-06-19; // string | Конец запрашиваемого периода. <span class=\"new\">new</span>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1FullstatGet($id, $begin, $end, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1FullstatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании. | |
| **begin** | **string**| Начало запрашиваемого периода. &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; | [optional] |
| **end** | **string**| Конец запрашиваемого периода. &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1FullstatGet200Response**](../Model/AdvV1FullstatGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1PaymentsGet()`

```php
advV1PaymentsGet($from, $to): \OpenAPI\Client\Model\AdvV1PaymentsGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Получение истории пополнений счета

Метод позволяет получать историю пополнений счёта.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Mon Jul 31 04:00:00 GET 2023; // \DateTime | Начало интервала
$to = Wed Aug 02 04:00:00 GET 2023; // \DateTime | Конец интервала. <br>  (Минимальный интервал 1 день, максимальный 31)

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1PaymentsGet($from, $to, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1PaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Начало интервала | [optional] |
| **to** | **\DateTime**| Конец интервала. &lt;br&gt;  (Минимальный интервал 1 день, максимальный 31) | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1PaymentsGet200ResponseInner[]**](../Model/AdvV1PaymentsGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SaveAdPost()`

```php
advV1SaveAdPost($adv_v1_save_ad_post_request): string
```
### URI(s):
- https://advert-api.wb.ru 
Создание кампании

Метод позволяет создавать кампании. <span class=\"newM\">new</span><br> `Важно:` На данный момент создавать можно только автоматические кампании. Возможность создания остальных типов кампаний будет реализована позднее.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adv_v1_save_ad_post_request = {"type":8,"name":"Парашюты","subjectId":270,"sum":500,"btype":1,"on_pause":true}; // \OpenAPI\Client\Model\AdvV1SaveAdPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1SaveAdPost($adv_v1_save_ad_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SaveAdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adv_v1_save_ad_post_request** | [**\OpenAPI\Client\Model\AdvV1SaveAdPostRequest**](../Model/AdvV1SaveAdPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SeacatStatGet()`

```php
advV1SeacatStatGet($id): \OpenAPI\Client\Model\AdvV1SeacatStatGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Статистика кампаний Поиск + Каталог

Метод позволяет получать статистику по кампаниям Поиск + Каталог. <br> Допускается максимум 60 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1SeacatStatGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SeacatStatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1SeacatStatGet200Response**](../Model/AdvV1SeacatStatGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SearchSetExcludedPost()`

```php
advV1SearchSetExcludedPost($id, $adv_v1_search_set_excluded_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Установка/удаление минус-фраз из поиска для кампании в поиске

Метод позволяет устанавливать/удалять минус-фразы из поиска. <br> Отправка пустого массива удаляет все минус-фразы из поиска из кампании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$adv_v1_search_set_excluded_post_request = {"excluded":["что-то синее","картошечка"]}; // \OpenAPI\Client\Model\AdvV1SearchSetExcludedPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1SearchSetExcludedPost($id, $adv_v1_search_set_excluded_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SearchSetExcludedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_search_set_excluded_post_request** | [**\OpenAPI\Client\Model\AdvV1SearchSetExcludedPostRequest**](../Model/AdvV1SearchSetExcludedPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SearchSetPhrasePost()`

```php
advV1SearchSetPhrasePost($id, $adv_v1_search_set_phrase_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Установка/удаление минус-фраз фразового соответствия для кампании в поиске

Метод позволяет устанавливать/удалять минус-фразы фразового соответствия. <br> Отправка пустого массива удаляет все минус-фразы фразового соответствия из кампании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$adv_v1_search_set_phrase_post_request = {"phrase":["сло","гу"]}; // \OpenAPI\Client\Model\AdvV1SearchSetPhrasePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1SearchSetPhrasePost($id, $adv_v1_search_set_phrase_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SearchSetPhrasePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_search_set_phrase_post_request** | [**\OpenAPI\Client\Model\AdvV1SearchSetPhrasePostRequest**](../Model/AdvV1SearchSetPhrasePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SearchSetPlusGet()`

```php
advV1SearchSetPlusGet($id, $fixed)
```
### URI(s):
- https://advert-api.wb.ru 
Управление активностью фиксированных фраз у кампании в поиске

Метод позволяет изменять активность фиксированных фраз у кампании в поиске.  <br> Допускается 2 запроса в секунду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$fixed = True; // bool | Новое состояние (`false` - сделать неактивными, `true` - сделать активными)

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1SearchSetPlusGet($id, $fixed, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SearchSetPlusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **fixed** | **bool**| Новое состояние (&#x60;false&#x60; - сделать неактивными, &#x60;true&#x60; - сделать активными) | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SearchSetPlusPost()`

```php
advV1SearchSetPlusPost($id, $adv_v1_search_set_plus_post_request): string[]
```
### URI(s):
- https://advert-api.wb.ru 
Установка/удаление фиксированных фраз у кампании в поиске

Метод позволяет устанавливать и удалять фиксированные фразы. <br> Отправка пустого массива удаляет все фиксированные фразы и отключает активность фиксированных фраз в кампании.<br> Допускается 2 запроса в секунду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$adv_v1_search_set_plus_post_request = {"pluse":["Фраза 1","Фраза 2"]}; // \OpenAPI\Client\Model\AdvV1SearchSetPlusPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1SearchSetPlusPost($id, $adv_v1_search_set_plus_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SearchSetPlusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_search_set_plus_post_request** | [**\OpenAPI\Client\Model\AdvV1SearchSetPlusPostRequest**](../Model/AdvV1SearchSetPlusPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string[]**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1SearchSetStrongPost()`

```php
advV1SearchSetStrongPost($id, $adv_v1_search_set_strong_post_request)
```
### URI(s):
- https://advert-api.wb.ru 
Установка/удаление минус-фраз точного соответствия для кампании в поиске

Метод позволяет устанавливать/удалять минус-фразы точного соответствия. <br> Отправка пустого массива удаляет все минус-фразы точного соответствия из кампании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1234567; // int | Идентификатор кампании
$adv_v1_search_set_strong_post_request = {"strong":["стоять","лопата"]}; // \OpenAPI\Client\Model\AdvV1SearchSetStrongPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->advV1SearchSetStrongPost($id, $adv_v1_search_set_strong_post_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1SearchSetStrongPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| **adv_v1_search_set_strong_post_request** | [**\OpenAPI\Client\Model\AdvV1SearchSetStrongPostRequest**](../Model/AdvV1SearchSetStrongPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1StatWordsGet()`

```php
advV1StatWordsGet($id): \OpenAPI\Client\Model\AdvV1StatWordsGet200Response
```
### URI(s):
- https://advert-api.wb.ru 
Статистика поисковой кампании по ключевым фразам

Метод позволяет получать статистику поисковой кампании по ключевым фразам.<br> Информация обновляется примерно каждые полчаса. <br> Допускается максимум 240 запросов в минуту.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Идентификатор кампании

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1StatWordsGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1StatWordsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор кампании | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1StatWordsGet200Response**](../Model/AdvV1StatWordsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1UpdGet()`

```php
advV1UpdGet($from, $to): \OpenAPI\Client\Model\AdvV1UpdGet200ResponseInner[]
```
### URI(s):
- https://advert-api.wb.ru 
Получение истории затрат

Метод позволяет получать историю затрат.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Mon Jul 31 04:00:00 GET 2023; // \DateTime | Начало интервала
$to = Wed Aug 02 04:00:00 GET 2023; // \DateTime | Конец интервала. <br>  (Минимальный интервал 1 день, максимальный 31)

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1UpdGet($from, $to, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1UpdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Начало интервала | |
| **to** | **\DateTime**| Конец интервала. &lt;br&gt;  (Минимальный интервал 1 день, максимальный 31) | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdvV1UpdGet200ResponseInner[]**](../Model/AdvV1UpdGet200ResponseInner.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advV1UpdIntervalsGet()`

```php
advV1UpdIntervalsGet(): string[]
```
### URI(s):
- https://advert-api.wb.ru 
Получение месячных интервалов для истории затрат

Метод позволяет получать массив с датами начала месяца, когда у продавца были расходы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->advV1UpdIntervalsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV1UpdIntervalsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string[]**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1DelPost()`

```php
apiV1DelPost($api_v1_del_post_request_inner)
```
### URI(s):
- https://recommend-api.wildberries.ru - https://recommend-api.wb.ru 
Удаление рекомендаций

Метод позволяет удалить рекомендации. <br> `ВАЖНО!` Если запрос прошел успешно (код ответа 200), а рекомендации не удалились, то Вам необходимо проверить корректность отправленных значений. На данный момент в методе не предусмотрена валидация значений параметров. Тщательно проверяйте данные перед отправкой.<br> <br> `ВАЖНО`: Если Вы получили ответ с кодом 200 и телом вида <b>CrutchSapi1356-65c49a25-7f9798142620 OK</b>, значит минимум одна из переданных номенклатур не принадлежит Вам, либо не существует.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_del_post_request_inner = array(new \OpenAPI\Client\Model\ApiV1DelPostRequestInner()); // \OpenAPI\Client\Model\ApiV1DelPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV1DelPost($api_v1_del_post_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1DelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_del_post_request_inner** | [**\OpenAPI\Client\Model\ApiV1DelPostRequestInner[]**](../Model/ApiV1DelPostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbackGet()`

```php
apiV1FeedbackGet($id): \OpenAPI\Client\Model\ApiV1FeedbackGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Получить отзыв по Id

Метод позволяет получить отзыв по его Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = G7Y9Y1kBAtKOitoBT_lV; // string | Идентификатор отзыва

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbackGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Идентификатор отзыва | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbackGet200Response**](../Model/ApiV1FeedbackGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksArchiveGet()`

```php
apiV1FeedbacksArchiveGet($take, $skip, $nm_id, $order): \OpenAPI\Client\Model\ApiV1FeedbacksArchiveGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Список архивных отзывов

Метод позволяет получить список архивных отзывов. <br> Отзыв становится архивным если на него предоставлен ответ или ответ не предоставлен в течение 30 дней со дня его публикации.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 1; // int | Количество отзывов (max. 5 000)
$skip = 0; // int | Количество отзывов для пропуска
$nm_id = 14917842; // int | Артикул WB
$order = 'order_example'; // string | Сортировка отзывов по дате (dateAsc/dateDesc)

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksArchiveGet($take, $skip, $nm_id, $order, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksArchiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **take** | **int**| Количество отзывов (max. 5 000) | |
| **skip** | **int**| Количество отзывов для пропуска | |
| **nm_id** | **int**| Артикул WB | [optional] |
| **order** | **string**| Сортировка отзывов по дате (dateAsc/dateDesc) | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksArchiveGet200Response**](../Model/ApiV1FeedbacksArchiveGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksCountGet()`

```php
apiV1FeedbacksCountGet($date_from, $date_to, $is_answered): \OpenAPI\Client\Model\ApiV1FeedbacksCountGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Количество отзывов

Метод позволяет получить количество отзывов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 1688465092; // int | Дата начала периода в формате Unix timestamp
$date_to = 1688465092; // int | Дата конца периода в формате Unix timestamp
$is_answered = false; // bool | Обработанные отзывы(`true`) или необработанные отзывы(`false`).<br> Если не указать, вернутся обработанные отзывы.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksCountGet($date_from, $date_to, $is_answered, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **int**| Дата начала периода в формате Unix timestamp | [optional] |
| **date_to** | **int**| Дата конца периода в формате Unix timestamp | [optional] |
| **is_answered** | **bool**| Обработанные отзывы(&#x60;true&#x60;) или необработанные отзывы(&#x60;false&#x60;).&lt;br&gt; Если не указать, вернутся обработанные отзывы. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksCountGet200Response**](../Model/ApiV1FeedbacksCountGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksCountUnansweredGet()`

```php
apiV1FeedbacksCountUnansweredGet(): \OpenAPI\Client\Model\ApiV1FeedbacksCountUnansweredGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Необработанные отзывы

Метод позволяет получить количество необработанных отзывов за сегодня, за всё время, и среднюю оценку всех отзывов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksCountUnansweredGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksCountUnansweredGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksCountUnansweredGet200Response**](../Model/ApiV1FeedbacksCountUnansweredGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksGet()`

```php
apiV1FeedbacksGet($is_answered, $take, $skip, $nm_id, $order, $date_from, $date_to): \OpenAPI\Client\Model\ApiV1FeedbacksGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Список отзывов

Метод позволяет получить список отзывов по заданным параметрам с пагинацией и сортировкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_answered = false; // bool | Обработанные отзывы (`true`) или необработанные отзывы(`false`)
$take = 1; // int | Количество отзывов (max. 5 000)
$skip = 0; // int | Количество отзывов для пропуска (max. 199990)
$nm_id = 5870243; // int | Артикул WB
$order = 'order_example'; // string | Сортировка отзывов по дате (dateAsc/dateDesc)
$date_from = 1688465092; // int | Дата начала периода в формате Unix timestamp
$date_to = 1688465092; // int | Дата конца периода в формате Unix timestamp

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksGet($is_answered, $take, $skip, $nm_id, $order, $date_from, $date_to, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_answered** | **bool**| Обработанные отзывы (&#x60;true&#x60;) или необработанные отзывы(&#x60;false&#x60;) | |
| **take** | **int**| Количество отзывов (max. 5 000) | |
| **skip** | **int**| Количество отзывов для пропуска (max. 199990) | |
| **nm_id** | **int**| Артикул WB | [optional] |
| **order** | **string**| Сортировка отзывов по дате (dateAsc/dateDesc) | [optional] |
| **date_from** | **int**| Дата начала периода в формате Unix timestamp | [optional] |
| **date_to** | **int**| Дата конца периода в формате Unix timestamp | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksGet200Response**](../Model/ApiV1FeedbacksGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksPatch()`

```php
apiV1FeedbacksPatch($api_v1_feedbacks_patch_request)
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Работа с отзывом

<dl> <dt>В зависимости от тела запроса можно:</dt> <dd>Просмотреть отзыв.</dd> <dd>Ответить на отзыв, или отредактировать ответ.</dd> </dl> <b>Отредактировать ответ на отзыв можно в течение 2 месяцев (60 дней), после предоставления ответа и только 1 раз.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_feedbacks_patch_request = new \OpenAPI\Client\Model\ApiV1FeedbacksPatchRequest(); // \OpenAPI\Client\Model\ApiV1FeedbacksPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV1FeedbacksPatch($api_v1_feedbacks_patch_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_feedbacks_patch_request** | [**\OpenAPI\Client\Model\ApiV1FeedbacksPatchRequest**](../Model/ApiV1FeedbacksPatchRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksProductsRatingGet()`

```php
apiV1FeedbacksProductsRatingGet($subject_id): \OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Средняя оценка товаров по родительской категории

Метод позволяет получить среднюю оценку товаров по родительской категории.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 3109; // int | id категории товара

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksProductsRatingGet($subject_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksProductsRatingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_id** | **int**| id категории товара | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingGet200Response**](../Model/ApiV1FeedbacksProductsRatingGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksProductsRatingNmidGet()`

```php
apiV1FeedbacksProductsRatingNmidGet($nm_id): \OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingNmidGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Средняя оценка товара по артикулу WB

Метод позволяет получить среднюю оценку товара по его артикулу WB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm_id = 14917842; // int | Артикул WB

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksProductsRatingNmidGet($nm_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksProductsRatingNmidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nm_id** | **int**| Артикул WB | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingNmidGet200Response**](../Model/ApiV1FeedbacksProductsRatingNmidGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksProductsRatingTopGet()`

```php
apiV1FeedbacksProductsRatingTopGet($subject_id): \OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingTopGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Товары с наибольшей и наименьшей средней оценкой по родительской категории

Метод позволяет получить список из двух товаров, с наибольшей и наименьшей средней оценкой, по родительской категории.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 3109; // int | id категории товара

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksProductsRatingTopGet($subject_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksProductsRatingTopGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject_id** | **int**| id категории товара | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksProductsRatingTopGet200Response**](../Model/ApiV1FeedbacksProductsRatingTopGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1FeedbacksReportGet()`

```php
apiV1FeedbacksReportGet($is_answered, $skip): \OpenAPI\Client\Model\ApiV1FeedbacksReportGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Получение отзывов в формате XLSX

Метод позволяет получить XLSX файл с отзывами в кодировке BASE64. <br> За один запрос можно получить 5000 отзывов. <br> На данный момент всего можно получить 200 000 последних отзывов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_answered = True; // bool | Необработанный(`false`) или в архиве(`true`)
$skip = 1; // int | Параметр пагинации, указывает сколько отзывов пропустить

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1FeedbacksReportGet($is_answered, $skip, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1FeedbacksReportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_answered** | **bool**| Необработанный(&#x60;false&#x60;) или в архиве(&#x60;true&#x60;) | |
| **skip** | **int**| Параметр пагинации, указывает сколько отзывов пропустить | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1FeedbacksReportGet200Response**](../Model/ApiV1FeedbacksReportGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1InsPost()`

```php
apiV1InsPost($api_v1_ins_post_request_inner)
```
### URI(s):
- https://recommend-api.wildberries.ru - https://recommend-api.wb.ru 
Добавление рекомендаций

Метод позволяет добавить рекомендации к товару. <br> `ВАЖНО!` Если запрос прошел успешно (код ответа 200), а рекомендации не добавилась, то Вам необходимо проверить корректность отправленных значений.  <br>На данный момент в методе не предусмотрена валидация значений параметров.  <br>Тщательно проверяйте данные перед отправкой. <br>Ограничение по запросам: 120 запросов в минуту. <br> <br>`ВАЖНО!` Если Вы получили ответ с кодом 200 и телом вида <b>CrutchSapi1356-65c49a25-7f9798142620 OK</b>, значит минимум одна из переданных номенклатур не принадлежит Вам, либо не существует.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_ins_post_request_inner = array(new \OpenAPI\Client\Model\ApiV1InsPostRequestInner()); // \OpenAPI\Client\Model\ApiV1InsPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV1InsPost($api_v1_ins_post_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1InsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_ins_post_request_inner** | [**\OpenAPI\Client\Model\ApiV1InsPostRequestInner[]**](../Model/ApiV1InsPostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ListPost()`

```php
apiV1ListPost($request_body, $limit): \OpenAPI\Client\Model\ApiV1ListPost200Response
```
### URI(s):
- https://recommend-api.wildberries.ru - https://recommend-api.wb.ru 
Список рекомендаций

Метод позволяет получить список рекомендаций по нескольким товарам. <br> <br> `ВАЖНО`: Если Вы получили ошибку с кодом 200 и сообщением вида <b>CrutchSapi1356-65c49a25-7f9798142620-UKfmVPyPcik6d OK</b>, значит минимум одна из переданных номенклатур не принадлежит Вам, либо не существует.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = [111111111,222222222]; // int[]
$limit = 123; // int | Ограничение количества рекомендаций в ответе.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1ListPost($request_body, $limit, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1ListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)|  | |
| **limit** | **int**| Ограничение количества рекомендаций в ответе. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1ListPost200Response**](../Model/ApiV1ListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1NewFeedbacksQuestionsGet()`

```php
apiV1NewFeedbacksQuestionsGet(): \OpenAPI\Client\Model\ApiV1NewFeedbacksQuestionsGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Непросмотренные отзывы и вопросы

Метод отображает информацию о наличии у продавца непросмотренных отзывов и вопросов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1NewFeedbacksQuestionsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1NewFeedbacksQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1NewFeedbacksQuestionsGet200Response**](../Model/ApiV1NewFeedbacksQuestionsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1ParentSubjectsGet()`

```php
apiV1ParentSubjectsGet(): \OpenAPI\Client\Model\ApiV1ParentSubjectsGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Родительские категории товаров

Метод позволяет получить список родительских категорий товаров, которые есть у продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1ParentSubjectsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1ParentSubjectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1ParentSubjectsGet200Response**](../Model/ApiV1ParentSubjectsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionGet()`

```php
apiV1QuestionGet($id): \OpenAPI\Client\Model\ApiV1QuestionGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Получить вопрос по Id

Метод позволяет получить вопрос по его Id. <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = K40ZY1kBHA64Ev-ch5bd; // string | Идентификатор вопроса

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionGet($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Идентификатор вопроса | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionGet200Response**](../Model/ApiV1QuestionGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsCountGet()`

```php
apiV1QuestionsCountGet($date_from, $date_to, $is_answered): \OpenAPI\Client\Model\ApiV1QuestionsCountGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Количество вопросов

Метод позволяет получить количество вопросов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 1688465092; // int | Дата начала периода в формате Unix timestamp
$date_to = 1688465092; // int | Дата конца периода в формате Unix timestamp
$is_answered = false; // bool | Обработанные вопросы(`true`) или необработанные вопросы(`false`).<br> Если не указать, вернутся обработанные вопросы.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsCountGet($date_from, $date_to, $is_answered, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **int**| Дата начала периода в формате Unix timestamp | [optional] |
| **date_to** | **int**| Дата конца периода в формате Unix timestamp | [optional] |
| **is_answered** | **bool**| Обработанные вопросы(&#x60;true&#x60;) или необработанные вопросы(&#x60;false&#x60;).&lt;br&gt; Если не указать, вернутся обработанные вопросы. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsCountGet200Response**](../Model/ApiV1QuestionsCountGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsCountUnansweredGet()`

```php
apiV1QuestionsCountUnansweredGet(): \OpenAPI\Client\Model\ApiV1QuestionsCountUnansweredGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Неотвеченные вопросы

Метод позволяет получить количество неотвеченных вопросов за сегодня и за всё время.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsCountUnansweredGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsCountUnansweredGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsCountUnansweredGet200Response**](../Model/ApiV1QuestionsCountUnansweredGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsGet()`

```php
apiV1QuestionsGet($is_answered, $take, $skip, $nm_id, $order, $date_from, $date_to): \OpenAPI\Client\Model\ApiV1QuestionsGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Список вопросов

Метод позволяет получить список вопросов по заданным параметрам с пагинацией и сортировкой.<br> За один запрос можно получить 10 000 вопросов, максимум.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_answered = True; // bool | Отвеченные вопросы (`true`) или неотвеченные вопросы(`false`)
$take = 56; // int | Количество запрашиваемых вопросов (максимально допустимое значение для параметра - 10 000,  при этом сумма значений параметров `take` и `skip` не должна превышать 10 000)
$skip = 56; // int | Количество вопросов для пропуска (максимально допустимое значение для параметра - 10 000,  при этом сумма значений параметров `take` и `skip` не должна превышать 10 000)
$nm_id = 56; // int | Артикул WB
$order = 'order_example'; // string | Сортировка вопросов по дате (`dateAsc`/`dateDesc`)
$date_from = 1688465092; // int | Дата начала периода в формате Unix timestamp
$date_to = 1688465092; // int | Дата конца периода в формате Unix timestamp

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsGet($is_answered, $take, $skip, $nm_id, $order, $date_from, $date_to, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_answered** | **bool**| Отвеченные вопросы (&#x60;true&#x60;) или неотвеченные вопросы(&#x60;false&#x60;) | |
| **take** | **int**| Количество запрашиваемых вопросов (максимально допустимое значение для параметра - 10 000,  при этом сумма значений параметров &#x60;take&#x60; и &#x60;skip&#x60; не должна превышать 10 000) | |
| **skip** | **int**| Количество вопросов для пропуска (максимально допустимое значение для параметра - 10 000,  при этом сумма значений параметров &#x60;take&#x60; и &#x60;skip&#x60; не должна превышать 10 000) | |
| **nm_id** | **int**| Артикул WB | [optional] |
| **order** | **string**| Сортировка вопросов по дате (&#x60;dateAsc&#x60;/&#x60;dateDesc&#x60;) | [optional] |
| **date_from** | **int**| Дата начала периода в формате Unix timestamp | [optional] |
| **date_to** | **int**| Дата конца периода в формате Unix timestamp | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsGet200Response**](../Model/ApiV1QuestionsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsPatch()`

```php
apiV1QuestionsPatch($api_v1_questions_patch_request): \OpenAPI\Client\Model\ApiV1QuestionsPatch200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Работа с вопросами

<dl> <dt>В зависимости от тела запроса можно:</dt> <dd>Просмотреть вопрос.</dd> <dd>Отклонить вопрос.</dd> <dd>Ответить на вопрос или отредактировать ответ.</dd> </dl> <b>Отредактировать ответ на вопрос можно в течение 2 месяцев (60 дней), после предоставления ответа и только 1 раз.</b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_questions_patch_request = new \OpenAPI\Client\Model\ApiV1QuestionsPatchRequest(); // \OpenAPI\Client\Model\ApiV1QuestionsPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsPatch($api_v1_questions_patch_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_questions_patch_request** | [**\OpenAPI\Client\Model\ApiV1QuestionsPatchRequest**](../Model/ApiV1QuestionsPatchRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsPatch200Response**](../Model/ApiV1QuestionsPatch200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsProductsRatingGet()`

```php
apiV1QuestionsProductsRatingGet($size): \OpenAPI\Client\Model\ApiV1QuestionsProductsRatingGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Часто спрашиваемые товары

Метод позволяет получить товары, про которые чаще всего спрашивают.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size = 1; // int | Количество запрашиваемых товаров (max. 100)

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsProductsRatingGet($size, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsProductsRatingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | **int**| Количество запрашиваемых товаров (max. 100) | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsProductsRatingGet200Response**](../Model/ApiV1QuestionsProductsRatingGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1QuestionsReportGet()`

```php
apiV1QuestionsReportGet($is_answered): \OpenAPI\Client\Model\ApiV1QuestionsReportGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Получение вопросов в формате XLSX

Метод позволяет получить XLSX файл с вопросами в кодировке BASE64.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_answered = false; // bool | Обработанные вопросы (`true`) или необработанные вопросы(`false`)

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1QuestionsReportGet($is_answered, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1QuestionsReportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_answered** | **bool**| Обработанные вопросы (&#x60;true&#x60;) или необработанные вопросы(&#x60;false&#x60;) | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1QuestionsReportGet200Response**](../Model/ApiV1QuestionsReportGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SetPost()`

```php
apiV1SetPost($api_v1_set_post_request_inner)
```
### URI(s):
- https://recommend-api.wildberries.ru - https://recommend-api.wb.ru 
Управление рекомендациями

Метод позволяет добавлять, удалять рекомендации.<br> Работает по принципу перезаписи, все что указано в recom, ставится взамен того, что было ранее.<br> Чтобы удалить рекомендации необходимо передать пустой массив recom.<br> <br> `ВАЖНО`: Если Вы получили ответ с кодом 200 и телом вида <b>CrutchSapi1356-65c49a25-7f9798142620 OK</b>, значит минимум одна из переданных номенклатур не принадлежит Вам, либо не существует.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_set_post_request_inner = array(new \OpenAPI\Client\Model\ApiV1SetPostRequestInner()); // \OpenAPI\Client\Model\ApiV1SetPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->apiV1SetPost($api_v1_set_post_request_inner, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_set_post_request_inner** | [**\OpenAPI\Client\Model\ApiV1SetPostRequestInner[]**](../Model/ApiV1SetPostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierIncomesGet()`

```php
apiV1SupplierIncomesGet($date_from): \OpenAPI\Client\Model\IncomesItem[]
```
### URI(s):
- https://statistics-api.wildberries.ru 
Поставки

Поставки. <br>Если Вы получили ошибку со статус-кодом 408 и текстом <b>(api-new) request timeout</b> подождите некоторое время и повторите запрос.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 'date_from_example'; // string | Дата и время последнего изменения по товару. <br> Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. <br> Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br> При ее отсутствии время считается в часовом поясе Мск (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierIncomesGet($date_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Дата и время последнего изменения по товару. &lt;br&gt; Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt; Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt; При ее отсутствии время считается в часовом поясе Мск (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IncomesItem[]**](../Model/IncomesItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierOrdersGet()`

```php
apiV1SupplierOrdersGet($date_from, $flag): \OpenAPI\Client\Model\OrdersItem[]
```
### URI(s):
- https://statistics-api.wildberries.ru/ 
Заказы

Заказы. <br>  Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут.  Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).  <br> <br>Если Вы получили ошибку со статус-кодом 408 и текстом <b>(api-new) request timeout</b> подождите некоторое время и повторите запрос.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 'date_from_example'; // string | Дата и время последнего изменения по товару. <br> Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. <br> Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br> При ее отсутствии время считается в часовом поясе Мск (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($date_from, $flag, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Дата и время последнего изменения по товару. &lt;br&gt; Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt; Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt; При ее отсутствии время считается в часовом поясе Мск (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersItem[]**](../Model/OrdersItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierReportDetailByPeriodGet()`

```php
apiV1SupplierReportDetailByPeriodGet($date_from, $date_to, $limit, $rrdid): \OpenAPI\Client\Model\DetailReportItem[]
```
### URI(s):
- https://statistics-api.wildberries.ru/ 
Отчет о продажах по реализации

Отчет о продажах по реализации.  <br> В отчете доступны данные за последние 3 месяца. <br> В случае отсутствия данных за указанный период метод вернет `null`. <br> Технический перерыв в работе метода: каждый понедельник с 3:00 до 16:00. <br> <a href=\"./excel/ru/stat-excel.html\">Инструкция: Сохранение статистики в Excel</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 'date_from_example'; // string | Дата и время последнего изменения по товару. <br> Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. <br> Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br> При ее отсутствии время считается в часовом поясе Мск (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата отчета
$limit = 100000; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($date_from, $date_to, $limit, $rrdid, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Дата и время последнего изменения по товару. &lt;br&gt; Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt; Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt; При ее отсутствии время считается в часовом поясе Мск (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **date_to** | **\DateTime**| Конечная дата отчета | |
| **limit** | **int**| Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100000. | [optional] [default to 100000] |
| **rrdid** | **int**| Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DetailReportItem[]**](../Model/DetailReportItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierSalesGet()`

```php
apiV1SupplierSalesGet($date_from, $flag): \OpenAPI\Client\Model\SalesItem[]
```
### URI(s):
- https://statistics-api.wildberries.ru/ 
Продажи

Продажи. <br> Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут. Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).  <br> Для расчета окончательной стоимости (суммы к оплате) следует пользоваться следующей формулой: <br> `priceWithDiscount = totalPrice * (1 - discountPercent/100)` <br> <br>Если Вы получили ошибку со статус-кодом 408 и текстом <b>(api-new) request timeout</b> подождите некоторое время и повторите запрос.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 'date_from_example'; // string | Дата и время последнего изменения по товару. <br> Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. <br> Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br> При ее отсутствии время считается в часовом поясе Мск (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierSalesGet($date_from, $flag, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Дата и время последнего изменения по товару. &lt;br&gt; Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt; Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt; При ее отсутствии время считается в часовом поясе Мск (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SalesItem[]**](../Model/SalesItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1SupplierStocksGet()`

```php
apiV1SupplierStocksGet($date_from): \OpenAPI\Client\Model\StocksItem[]
```
### URI(s):
- https://statistics-api.wildberries.ru/ 
Склад

Остатки товаров на складах WB. Данные обновляются раз в 30 минут. <br> Сервис статистики не хранит историю остатков товаров, поэтому получить данные о них можно только в режиме \"на текущий момент\".<br> Если Вы получили ошибку со статус-кодом 408 и текстом <b>(api-new) request timeout</b> подождите некоторое время и повторите запрос.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 'date_from_example'; // string | Дата и время последнего изменения по товару. <br> Для получения полного остатка следует указывать максимально раннее значение. <br> Например, `2019-06-20` <br> Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. <br> Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br> При ее отсутствии время считается в часовом поясе Мск (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1SupplierStocksGet($date_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Дата и время последнего изменения по товару. &lt;br&gt; Для получения полного остатка следует указывать максимально раннее значение. &lt;br&gt; Например, &#x60;2019-06-20&#x60; &lt;br&gt; Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt; Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt; При ее отсутствии время считается в часовом поясе Мск (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\StocksItem[]**](../Model/StocksItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1TemplatesDelete()`

```php
apiV1TemplatesDelete($api_v1_templates_delete_request): \OpenAPI\Client\Model\ApiV1TemplatesDelete200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Удалить шаблон

Метод позволяет удалить шаблон. <br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_templates_delete_request = {"templateID":1234}; // \OpenAPI\Client\Model\ApiV1TemplatesDeleteRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1TemplatesDelete($api_v1_templates_delete_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1TemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_templates_delete_request** | [**\OpenAPI\Client\Model\ApiV1TemplatesDeleteRequest**](../Model/ApiV1TemplatesDeleteRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1TemplatesDelete200Response**](../Model/ApiV1TemplatesDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1TemplatesGet()`

```php
apiV1TemplatesGet($template_type): \OpenAPI\Client\Model\ApiV1TemplatesGet200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Получить шаблоны ответов

Метод позволяет получить шаблоны ответов на отзывы/вопросы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_type = 1; // int | `1` - шаблоны для отзывов<br> `2` - шаблоны для вопросов

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1TemplatesGet($template_type, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1TemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_type** | **int**| &#x60;1&#x60; - шаблоны для отзывов&lt;br&gt; &#x60;2&#x60; - шаблоны для вопросов | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1TemplatesGet200Response**](../Model/ApiV1TemplatesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1TemplatesPatch()`

```php
apiV1TemplatesPatch($api_v1_templates_patch_request): \OpenAPI\Client\Model\ApiV1TemplatesDelete200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Редактировать шаблон

Метод позволяет отредактировать шаблон. <br> Допустимы любые символы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_templates_patch_request = new \OpenAPI\Client\Model\ApiV1TemplatesPatchRequest(); // \OpenAPI\Client\Model\ApiV1TemplatesPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1TemplatesPatch($api_v1_templates_patch_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1TemplatesPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_templates_patch_request** | [**\OpenAPI\Client\Model\ApiV1TemplatesPatchRequest**](../Model/ApiV1TemplatesPatchRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1TemplatesDelete200Response**](../Model/ApiV1TemplatesDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1TemplatesPost()`

```php
apiV1TemplatesPost($api_v1_templates_post_request): \OpenAPI\Client\Model\ApiV1TemplatesPost200Response
```
### URI(s):
- https://feedbacks-api.wildberries.ru - https://feedbacks-api.wb.ru 
Создать шаблон

Метод позволяет создать шаблон ответа на отзыв/вопрос. <br> Всего можно создать 20 шаблонов. 10 на отзывы и 10 на вопросы.<br> Допустимы любые символы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_v1_templates_post_request = new \OpenAPI\Client\Model\ApiV1TemplatesPostRequest(); // \OpenAPI\Client\Model\ApiV1TemplatesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->apiV1TemplatesPost($api_v1_templates_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1TemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_v1_templates_post_request** | [**\OpenAPI\Client\Model\ApiV1TemplatesPostRequest**](../Model/ApiV1TemplatesPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\ApiV1TemplatesPost200Response**](../Model/ApiV1TemplatesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1AnalyticsNmReportDetailHistoryPost()`

```php
contentV1AnalyticsNmReportDetailHistoryPost($nm_report_detail_history_request): \OpenAPI\Client\Model\NmReportDetailHistoryResponse
```
### URI(s):
- https://suppliers-api.wildberries.ru - https://suppliers-api.wb.ru 
Получение статистики КТ по дням/неделям/месяцам по выбранным nmID

Получение статистики КТ по дням/неделям/месяцам по выбранным `nmID`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm_report_detail_history_request = new \OpenAPI\Client\Model\NmReportDetailHistoryRequest(); // \OpenAPI\Client\Model\NmReportDetailHistoryRequest | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1AnalyticsNmReportDetailHistoryPost($nm_report_detail_history_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1AnalyticsNmReportDetailHistoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nm_report_detail_history_request** | [**\OpenAPI\Client\Model\NmReportDetailHistoryRequest**](../Model/NmReportDetailHistoryRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\NmReportDetailHistoryResponse**](../Model/NmReportDetailHistoryResponse.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1AnalyticsNmReportDetailPost()`

```php
contentV1AnalyticsNmReportDetailPost($nm_report_detail_request): \OpenAPI\Client\Model\NmReportDetailResponse
```
### URI(s):
- https://suppliers-api.wildberries.ru - https://suppliers-api.wb.ru 
Получение статистики КТ за выбранный период, по nmID/предметам/брендам/тегам

Получение статистики КТ за выбранный период, по nmID/предметам/брендам/тегам.<br> Поля `brandNames`,`objectIDs`, `tagIDs`, `nmIDs` могут быть пустыми, тогда в ответе идут все карточки продавца.<br>  При выборе нескольких полей в ответ приходят данные по карточкам, у которых есть все выбранные поля. Работает с пагинацией.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm_report_detail_request = new \OpenAPI\Client\Model\NmReportDetailRequest(); // \OpenAPI\Client\Model\NmReportDetailRequest | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1AnalyticsNmReportDetailPost($nm_report_detail_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1AnalyticsNmReportDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nm_report_detail_request** | [**\OpenAPI\Client\Model\NmReportDetailRequest**](../Model/NmReportDetailRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\NmReportDetailResponse**](../Model/NmReportDetailResponse.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1AnalyticsNmReportGroupedHistoryPost()`

```php
contentV1AnalyticsNmReportGroupedHistoryPost($nm_report_grouped_history_request): \OpenAPI\Client\Model\NmReportGroupedHistoryResponse
```
### URI(s):
- https://suppliers-api.wildberries.ru - https://suppliers-api.wb.ru 
Получение статистики КТ по дням/неделям/месяцам за период, сгруппированный по предметам, брендам и тегам

Получение статистики КТ по дням/неделям/месяцам за период, сгруппированный по предметам, брендам и тегам.<br> Поля `brandNames`, `objectIDs`, `tagIDs` могут быть пустыми, тогда группировка происходит по всем карточкам продавца.<br> В запросе произведение количества предметов, брендов, тегов не должно быть больше 16.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm_report_grouped_history_request = new \OpenAPI\Client\Model\NmReportGroupedHistoryRequest(); // \OpenAPI\Client\Model\NmReportGroupedHistoryRequest | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1AnalyticsNmReportGroupedHistoryPost($nm_report_grouped_history_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1AnalyticsNmReportGroupedHistoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nm_report_grouped_history_request** | [**\OpenAPI\Client\Model\NmReportGroupedHistoryRequest**](../Model/NmReportGroupedHistoryRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\NmReportGroupedHistoryResponse**](../Model/NmReportGroupedHistoryResponse.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1AnalyticsNmReportGroupedPost()`

```php
contentV1AnalyticsNmReportGroupedPost($nm_report_grouped_request): \OpenAPI\Client\Model\NmReportGroupedResponse
```
### URI(s):
- https://suppliers-api.wildberries.ru - https://suppliers-api.wb.ru 
Получение статистики КТ за период, сгруппированный по предметам, брендам и тегам

Получение статистики КТ за период, сгруппированный по предметам, брендам и тегам.<br> Поля `brandNames`, `objectIDs`, `tagIDs` могут быть пустыми, тогда группировка происходит по всем карточкам продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nm_report_grouped_request = new \OpenAPI\Client\Model\NmReportGroupedRequest(); // \OpenAPI\Client\Model\NmReportGroupedRequest | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1AnalyticsNmReportGroupedPost($nm_report_grouped_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1AnalyticsNmReportGroupedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nm_report_grouped_request** | [**\OpenAPI\Client\Model\NmReportGroupedRequest**](../Model/NmReportGroupedRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\OpenAPI\Client\Model\NmReportGroupedResponse**](../Model/NmReportGroupedResponse.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1BarcodesPost()`

```php
contentV1BarcodesPost($content_v1_barcodes_post_request): \OpenAPI\Client\Model\ContentV1BarcodesPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Генерация баркодов

Метод позволяет сгенерировать массив уникальных баркодов для создания размера НМ в КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_barcodes_post_request = new \OpenAPI\Client\Model\ContentV1BarcodesPostRequest(); // \OpenAPI\Client\Model\ContentV1BarcodesPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1BarcodesPost($content_v1_barcodes_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1BarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_barcodes_post_request** | [**\OpenAPI\Client\Model\ContentV1BarcodesPostRequest**](../Model/ContentV1BarcodesPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1BarcodesPost200Response**](../Model/ContentV1BarcodesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsCursorListPost()`

```php
contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request): \OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список НМ

Метод позволяет получить список созданых НМ по фильтру (баркод, артикул продавца, артикул WB (nmId), тег) с пагинацией и сортировкой. <br> <br>Порядок работы с `cursor/list`: <br> Чтобы получить полный список номенклатур, <b>если их > 1000</b>, необходимо воспользоваться пагинацией.   <ol>     <li>Cделать первый запрос (все указанные ниже параметры обязательны): <br>       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         {           \"sort\": {               \"cursor\": {                   \"limit\": 1000               },               \"filter\": {                   \"withPhoto\": -1               }           }         }</pre>       По желанию можно добавить поиск по <code>\"textSearch\"</code> и сортировку.       <pre style=\"background-color: rgb(38 50 56 / 5%); color: #e53935\">         \"sort\": {           \"sortColumn\": \"\",           \"ascending\": false         }</pre>     </li>     <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:       <ul>         <li><code>\"updatedAt\": \"***\"</code>,</li>         <li><code>\"nmID\": ***</code>,</li>       </ul>     <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить вызов метода. </li>     <li>Повторять пункты <b>2</b> и <b>3</b>, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе.       <br>Это будет означать, что Вы получили все карточки.   </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_cursor_list_post_request = new \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsCursorListPost($content_v1_cards_cursor_list_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsCursorListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_cursor_list_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsCursorListPostRequest**](../Model/ContentV1CardsCursorListPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsCursorListPost200Response**](../Model/ContentV1CardsCursorListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsErrorListGet()`

```php
contentV1CardsErrorListGet(): \OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список несозданных НМ с ошибками

Метод позволяет получить список НМ и список ошибок которые произошли во время создания КТ. <br>`ВАЖНО`: Для того чтобы убрать НМ из ошибочных, надо повторно сделать запрос с исправленными ошибками на создание КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsErrorListGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsErrorListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsErrorListGet200Response**](../Model/ContentV1CardsErrorListGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsFilterPost()`

```php
contentV1CardsFilterPost($content_v1_cards_filter_post_request): \OpenAPI\Client\Model\ContentV1CardsFilterPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получение КТ по артикулам продавца

Метод позволяет получить полную информацию по КТ с помощью артикула(-ов) продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_filter_post_request = new \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsFilterPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsFilterPost($content_v1_cards_filter_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsFilterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_filter_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsFilterPostRequest**](../Model/ContentV1CardsFilterPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsFilterPost200Response**](../Model/ContentV1CardsFilterPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsLimitsGet()`

```php
contentV1CardsLimitsGet(): \OpenAPI\Client\Model\ContentV1CardsLimitsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Лимиты по КТ

Метод позволяет получить отдельно бесплатные и платные лимиты продавца на создание карточек товаров. <br> Формула для получения количества карточек, которые можно создать: (`freeLimits` + `paidLimits`) - Количество созданных карточек.<br> Созданными считаются все карточки, которые можно получить методами \"Список НМ\" и \"Список НМ, находящихся в корзине\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsLimitsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsLimitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsLimitsGet200Response**](../Model/ContentV1CardsLimitsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsMoveNmPost()`

```php
contentV1CardsMoveNmPost($content_v1_cards_move_nm_post_request): \OpenAPI\Client\Model\ResponseCardCreate
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Объединение / Разъединение НМ

Метод позволяет объединять номенклатуры (`nmID`) под одним `imtID` и разъединять их.<br> Для объединения НМ необходимо отправить запрос со списком НМ с заполненным параметром `targetIMT` в теле запроса.  При этом все НМ объединятся под `imtID` указанном в `targetIMT`. <br> <br> Чтобы отсоединить НМ от карточки, необходимо передать эту НМ без параметра `targetIMT` в теле запроса.<br> При этом для передаваемой НМ создается новый `imtID`. <br> Если в запросе передается несколько НМ, то все они автоматически объединятся под <b>одним</b> новым `imtID`. <br> Чтобы присвоить каждой НМ уникальный `imtID` необходимо передавать по одной НМ за запрос. Для НМ, не участвующих в запросе, никаких изменений не происходит.<br> <br> `ВАЖНО:` Объединить можно только номенклатуры с одинаковыми предметами.<br> `ВАЖНО:` В одной КТ (под одним `imtID`) не может быть больше 30 номенклатур (`nmID`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_move_nm_post_request = new \OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest(); // \OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsMoveNmPost($content_v1_cards_move_nm_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsMoveNmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_move_nm_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsMoveNmPostRequest**](../Model/ContentV1CardsMoveNmPostRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseCardCreate**](../Model/ResponseCardCreate.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsTrashListPost()`

```php
contentV1CardsTrashListPost($content_v1_cards_trash_list_post_request): \OpenAPI\Client\Model\ContentV1CardsTrashListPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список НМ, находящихся в корзине

Метод позволяет получить список НМ, находящихся в корзине.<br> Метод позволяет получить список НМ, которые находятся в корзине по фильтру (баркод (<code>skus</code>), артикул продавца(<code>vendorCode</code>), артикул WB(<code>nmID</code>)) с пагинацией и сортировкой.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_trash_list_post_request = {"sort":{"sortColumn":"updateAt","ascending":false,"searchValue":"vendorCodeOne","offset":0,"limit":50}}; // \OpenAPI\Client\Model\ContentV1CardsTrashListPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsTrashListPost($content_v1_cards_trash_list_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsTrashListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_trash_list_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsTrashListPostRequest**](../Model/ContentV1CardsTrashListPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsTrashListPost200Response**](../Model/ContentV1CardsTrashListPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUpdatePost()`

```php
contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Редактирование КТ

Метод позволяет отредактировать несколько карточек за раз. <br> Редактирование КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br> `Важно`: Баркоды (skus) не подлежат удалению или замене. Попытка заменить существующий баркод приведет к добавлению нового баркода к существующему. <br> Если запрос прошел успешно, а информация в карточке не обновилась, значит были допущены ошибки и карточка попала в \"Черновики\" (метод `cards/error/list`) с описанием ошибок. <br>Необходимо исправить ошибки в запросе и отправить его повторно. <br> <br> Для успешного обновления карточки рекомендуем Вам придерживаться следующего порядка действий: <br> 1. Сначала существующую карточку необходимо запросить методом cards/filter. <br> 2. Забираем из ответа массив data. <br> 3. В этом массиве вносим необходимые изменения и отправляем его в cards/update <br> <br>За раз можно отредактировать 1000 КТ по 5 НМ в каждой. <br> <br> `Важно`: Изменение цен данным методом невозможно, используйте метод Загрузка цен, раздел документации Цены.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_update_post_request_inner = array(new \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner()); // \OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUpdatePost($content_v1_cards_update_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_update_post_request_inner** | [**\OpenAPI\Client\Model\ContentV1CardsUpdatePostRequestInner[]**](../Model/ContentV1CardsUpdatePostRequestInner.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadAddPost()`

```php
contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление НМ к КТ

Метод позволяет добавить к карточке товара новую номенклатуру. <br>Добавление НМ к КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br>`Важно`: Если после успешной отправки запроса номенклатура не создалась, то необходимо проверить раздел \"Список несозданных НМ с ошибками\". Для того чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_cards_upload_add_post_request = {"vendorCode":"6000000001","cards":[{"characteristics":[{"ТНВЭД":"4203100001"},{"Ширина упаковки":2},{"Длина упаковки":2},{"Высота упаковки":2},{"Пол":["Женский"]},{"Цвет":"красный"},{"Предмет":"Платья"},{"Стилистика":["casual"]},{"Комплектация":["Платье женское - 1шт"]},{"Бренд":["GlisH"]}],"vendorCode":"6000000002","sizes":[{"techSize":"38-39","wbSize":"38-39","price":3000,"skus":["test333333331"]}]}]}; // \OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadAddPost($content_v1_cards_upload_add_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_cards_upload_add_post_request** | [**\OpenAPI\Client\Model\ContentV1CardsUploadAddPostRequest**](../Model/ContentV1CardsUploadAddPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1CardsUploadPost()`

```php
contentV1CardsUploadPost($creating_card_inner_inner): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создание  КТ

Создание карточки товара происходит асинхронно, при отправке запроса на создание КТ ваш запрос становится в очередь на создание КТ. <br>`ПРИМЕЧАНИЕ`: Карточка товара считается `созданной`, если успешно создалась хотя бы одна `НМ`. <br>`ВАЖНО`: Если во время обработки запроса в очереди выявляются ошибки, то НМ считается ошибочной. <br>Если запрос на создание прошел успешно, а карточка не создалась, то необходимо в первую очередь проверить наличие карточки в методе `cards/error/list`. Если карточка попала в ответ к этому методу, то необходимо исправить описанные ошибки в запросе на создание карточки и отправить его повторно. <br>За раз можно создать 1000 КТ по 5 НМ в каждой.  <br>Если Вам требуется больше 5 НМ в КТ, то после создания карточки Вы можете добавить их методом \"Добавление НМ к КТ\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creating_card_inner_inner = NULL; // \OpenAPI\Client\Model\CreatingCardInnerInner[][]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1CardsUploadPost($creating_card_inner_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1CardsUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creating_card_inner_inner** | [**\OpenAPI\Client\Model\CreatingCardInnerInner[][]**](../Model/array.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryBrandsGet()`

```php
contentV1DirectoryBrandsGet($top, $pattern): \OpenAPI\Client\Model\ContentV1DirectoryBrandsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Бренд

Получение значения характеристики Бренд. <br> `Важно!` Метод будет отключен 21 сентября.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 1; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = USB; // string | Поиск по наименованию значения характеристики

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryBrandsGet($top, $pattern, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryBrandsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional] |
| **pattern** | **string**| Поиск по наименованию значения характеристики | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryBrandsGet200Response**](../Model/ContentV1DirectoryBrandsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryColorsGet()`

```php
contentV1DirectoryColorsGet(): \OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Цвет

Получение значения характеристики цвет.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryColorsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryColorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryColorsGet200Response**](../Model/ContentV1DirectoryColorsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryCountriesGet()`

```php
contentV1DirectoryCountriesGet(): \OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Страна Производства

Получение значения характеристики Страна Производства.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryCountriesGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryCountriesGet200Response**](../Model/ContentV1DirectoryCountriesGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryKindsGet()`

```php
contentV1DirectoryKindsGet(): \OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Пол

Получение значения характеристики пол.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryKindsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryKindsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryKindsGet200Response**](../Model/ContentV1DirectoryKindsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectorySeasonsGet()`

```php
contentV1DirectorySeasonsGet(): \OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сезон

Получение значения характеристики Сезон.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectorySeasonsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectorySeasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectorySeasonsGet200Response**](../Model/ContentV1DirectorySeasonsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1DirectoryTnvedGet()`

```php
contentV1DirectoryTnvedGet($object_name, $tnveds_like): \OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
ТНВЭД код

С помощью данного метода можно получить список ТНВЭД кодов по имени категории и фильтру по тнвэд коду.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Блузки; // string | Поиск по наименованию категории
$tnveds_like = 4203100001; // string | Поиск по коду ТНВЭД. <b>Параметр работает только в паре с параметром objectName.</b>

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1DirectoryTnvedGet($object_name, $tnveds_like, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1DirectoryTnvedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | [optional] |
| **tnveds_like** | **string**| Поиск по коду ТНВЭД. &lt;b&gt;Параметр работает только в паре с параметром objectName.&lt;/b&gt; | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1DirectoryTnvedGet200Response**](../Model/ContentV1DirectoryTnvedGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaFilePost()`

```php
contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Добавление медиа контента в КТ

Метод позволяет загрузить и добавить один медиафайл за запрос, к НМ в КТ. <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 900x1200. <br>Максимально допустимое количество фото в КТ 30. <br>Допустимые форматы изображений - jpg и png. <br>Минимальный уровень качества изображения - 85%.   <br>`Видео`: максимальный размер 50 мб. Форматы MOV, MP4. <br>Максимально допустимое количество видео в КТ 1.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_vendor_code = 6000000001; // string | Артикул продавца
$x_photo_number = 2; // int | Номер медиафайла на загрузку. <b>Начинать с 1</b>.<br>При загрузке видео всегда указывать значение 1. <br>Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов.
$uploadfile = "/path/to/file.txt"; // \SplFileObject

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaFilePost($x_vendor_code, $x_photo_number, $uploadfile, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_vendor_code** | **string**| Артикул продавца | |
| **x_photo_number** | **int**| Номер медиафайла на загрузку. &lt;b&gt;Начинать с 1&lt;/b&gt;.&lt;br&gt;При загрузке видео всегда указывать значение 1. &lt;br&gt;Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов. | |
| **uploadfile** | **\SplFileObject****\SplFileObject**|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1MediaSavePost()`

```php
contentV1MediaSavePost($content_v1_media_save_post_request): \OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Изменение медиа контента КТ

Метод позволяет изменить порядок изображений или удалить медиафайлы с НМ в КТ, а также загрузить изображения в НМ со сторонних ресурсов по URL. <br>Текущие изображения заменяются на переданные в массиве data. <br> <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 900x1200. <br>Максимально допустимое количество фото в КТ 30.  <br>Допустимые форматы изображений - jpg и png. <br>Минимальный уровень качества изображения - 85%.  <br> <br>Если хотя бы одно изображение в запросе не соответствует требованиям к медиафайлам, то даже при коде ответа 200 ни одно изображение не загрузится в КТ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_media_save_post_request = new \OpenAPI\Client\Model\ContentV1MediaSavePostRequest(); // \OpenAPI\Client\Model\ContentV1MediaSavePostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1MediaSavePost($content_v1_media_save_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1MediaSavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_media_save_post_request** | [**\OpenAPI\Client\Model\ContentV1MediaSavePostRequest**](../Model/ContentV1MediaSavePostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1CardsUpdatePost200Response**](../Model/ContentV1CardsUpdatePost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectAllGet()`

```php
contentV1ObjectAllGet($name, $top): \OpenAPI\Client\Model\ContentV1ObjectAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Категория товаров

С помощью данного метода можно получить список категорий товаров по текстовому фильтру (названию категории). <br> <br> Чтобы получить список всех категорий необходимо указать `top=8000`, к примеру. <br> <br> По состоянию на `27.03.2023` в списке `7440` категорий. Количество доступных категорий может меняться.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 3D; // string | Поиск по названию категории
$top = 50; // int | Количество запрашиваемых значений

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectAllGet($name, $top, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по названию категории | [optional] |
| **top** | **int**| Количество запрашиваемых значений | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectAllGet200Response**](../Model/ContentV1ObjectAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsListFilterGet()`

```php
contentV1ObjectCharacteristicsListFilterGet($name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ по всем подкатегориям

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ в подкатегории определенной родительской категории.   <br>   <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана:   <br><b>Правильно:</b>       <br>`{\"Высота упаковки\": 4}`   <br><b>Не правильно:</b>       <br>`{\"Высота упаковки\": [4]}`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Косухи; // string | Поиск по родительской категории.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsListFilterGet($name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsListFilterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Поиск по родительской категории. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsListFilterGet200Response**](../Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectCharacteristicsObjectNameGet()`

```php
contentV1ObjectCharacteristicsObjectNameGet($object_name): \OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Характеристики для создания КТ для категории товара

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ для определенной категории товаров. <br> <br> `Важно`: обязательная к заполнению характеристика при создании карточки любого товара - `Предмет`. <br>Значение характеристики `Предмет` соответствует значению параметра `objectName` в запросе. <br> <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана: <br><b>Правильно:</b>     <br>`{\"Высота упаковки\": 4}` <br><b>Не правильно:</b>     <br>`{\"Высота упаковки\": [4]}`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = Носки; // string | Поиск по наименованию категории

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsObjectNameGet($object_name, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectCharacteristicsObjectNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Поиск по наименованию категории | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectCharacteristicsObjectNameGet200Response**](../Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1ObjectParentAllGet()`

```php
contentV1ObjectParentAllGet(): \OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Родительские категории товаров

С помощью данного метода можно получить список всех родительских категорий товаров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1ObjectParentAllGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1ObjectParentAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1ObjectParentAllGet200Response**](../Model/ContentV1ObjectParentAllGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagIdDelete()`

```php
contentV1TagIdDelete($id): \OpenAPI\Client\Model\ContentV1TagIdDelete200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Удаление тега

Метод позволяет удалить тег.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Числовой идентификатор тега

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagIdDelete($id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой идентификатор тега | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagIdDelete200Response**](../Model/ContentV1TagIdDelete200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagIdPatch()`

```php
contentV1TagIdPatch($id, $content_v1_tag_id_patch_request): \OpenAPI\Client\Model\ContentV1TagIdPatch200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Изменение тега

Метод позволяет изменять информацию о теге (имя и цвет).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Числовой идентификатор тега
$content_v1_tag_id_patch_request = new \OpenAPI\Client\Model\ContentV1TagIdPatchRequest(); // \OpenAPI\Client\Model\ContentV1TagIdPatchRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagIdPatch($id, $content_v1_tag_id_patch_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Числовой идентификатор тега | |
| **content_v1_tag_id_patch_request** | [**\OpenAPI\Client\Model\ContentV1TagIdPatchRequest**](../Model/ContentV1TagIdPatchRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagIdPatch200Response**](../Model/ContentV1TagIdPatch200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagNomenclatureLinkPost()`

```php
contentV1TagNomenclatureLinkPost($content_v1_tag_nomenclature_link_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Управление тегами в КТ

Метод позволяет добавить теги к КТ и снять их с КТ.<br> При снятии тега с КТ сам тег не удаляется.<br> К карточке можно добавить 8 тегов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_tag_nomenclature_link_post_request = {"nmID":179891389,"tagsIDs":[123456]}; // \OpenAPI\Client\Model\ContentV1TagNomenclatureLinkPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagNomenclatureLinkPost($content_v1_tag_nomenclature_link_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagNomenclatureLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_tag_nomenclature_link_post_request** | [**\OpenAPI\Client\Model\ContentV1TagNomenclatureLinkPostRequest**](../Model/ContentV1TagNomenclatureLinkPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseContentError6**](../Model/ResponseContentError6.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagPost()`

```php
contentV1TagPost($content_v1_tag_post_request): \OpenAPI\Client\Model\ResponseContentError6
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Создание тега

Метод позволяет создать тег.<br> Завести можно 8 тегов.<br> Максимальная длина тега 15 символов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_v1_tag_post_request = new \OpenAPI\Client\Model\ContentV1TagPostRequest(); // \OpenAPI\Client\Model\ContentV1TagPostRequest

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagPost($content_v1_tag_post_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_v1_tag_post_request** | [**\OpenAPI\Client\Model\ContentV1TagPostRequest**](../Model/ContentV1TagPostRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseContentError6**](../Model/ResponseContentError6.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contentV1TagsGet()`

```php
contentV1TagsGet(): \OpenAPI\Client\Model\ContentV1TagsGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Список тегов

Метод позволяет получить список существующих тегов продавца.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->contentV1TagsGet($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contentV1TagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentV1TagsGet200Response**](../Model/ContentV1TagsGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1InfoGet()`

```php
publicApiV1InfoGet($quantity): \OpenAPI\Client\Model\PublicApiV1InfoGet200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Получение информации о ценах.

Получение информации по номенклатурам, их ценам, скидкам и промокодам. Если не указывать фильтры, вернётся весь товар.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quantity = 56; // int | `1` - товар с ненулевым остатком, `0` - товар с любым остатком

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1InfoGet($quantity, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1InfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quantity** | **int**| &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicApiV1InfoGet200Response**](../Model/PublicApiV1InfoGet200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1PricesPost()`

```php
publicApiV1PricesPost($public_api_v1_prices_post_request_inner): \OpenAPI\Client\Model\PublicApiV1PricesPost200Response
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Загрузка цен

Загрузка цен. За раз можно загрузить не более 1000 номенклатур.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_prices_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner[]

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1PricesPost($public_api_v1_prices_post_request_inner, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_prices_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1PricesPostRequestInner[]**](../Model/PublicApiV1PricesPostRequestInner.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicApiV1PricesPost200Response**](../Model/PublicApiV1PricesPost200Response.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1RevokeDiscountsPost()`

```php
publicApiV1RevokeDiscountsPost($request_body): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сброс скидок для номенклатур

Сброс скидок для номенклатур. При первом запросе ответ будет пустым.<br> При повторной попытке сбросить скидку вернет JSON с id первичного запроса.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | Перечень номенклатур к отмене скидок

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1RevokeDiscountsPost($request_body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1RevokeDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене скидок | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1RevokePromocodesPost()`

```php
publicApiV1RevokePromocodesPost($request_body): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Сброс промокодов для номенклатур

Сброс промокодов для номенклатур

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array(56); // int[] | Перечень номенклатур к отмене промокодов

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1RevokePromocodesPost($request_body, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1RevokePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене промокодов | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1UpdateDiscountsPost()`

```php
publicApiV1UpdateDiscountsPost($public_api_v1_update_discounts_post_request_inner, $activate_from): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Установка скидок

Установка скидок для номенклатур. Максимальное количество номенклатур на запрос - 1000.<br> Если, указав `activateFrom` больше текущей даты, Вы получаете ошибку вида `{\"errors\": [ \"Invalid activation date\"], \"error_code\": 1}`, значит, Ваш аккаунт переведен на систему <b>Цены и скидки NEW</b>, и эта опция более не доступна.<br> Отправьте запрос, указав настоящую дату.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_update_discounts_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[] | Перечень номенклатур
$activate_from = 'activate_from_example'; // string | Дата активации скидки в формате `YYYY-MM-DD` или `YYYY-MM-DD HH:MM:SS`. Если не указывать, скидка начнет действовать сразу.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1UpdateDiscountsPost($public_api_v1_update_discounts_post_request_inner, $activate_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1UpdateDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_update_discounts_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1UpdateDiscountsPostRequestInner[]**](../Model/PublicApiV1UpdateDiscountsPostRequestInner.md)| Перечень номенклатур | |
| **activate_from** | **string**| Дата активации скидки в формате &#x60;YYYY-MM-DD&#x60; или &#x60;YYYY-MM-DD HH:MM:SS&#x60;. Если не указывать, скидка начнет действовать сразу. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicApiV1UpdatePromocodesPost()`

```php
publicApiV1UpdatePromocodesPost($public_api_v1_update_promocodes_post_request_inner, $activate_from): string
```
### URI(s):
- https://suppliers-api.wildberries.ru 
Установка промокодов для номенклатур

Установка промокодов для номенклатур. <br> Максимальное количество номенклатур на запрос - 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_api_v1_update_promocodes_post_request_inner = array(new \OpenAPI\Client\Model\PublicApiV1UpdatePromocodesPostRequestInner()); // \OpenAPI\Client\Model\PublicApiV1UpdatePromocodesPostRequestInner[] | Перечень номенклатур
$activate_from = 'activate_from_example'; // string | Дата активации промокада в формате `YYYY-MM-DD` или `YYYY-MM-DD HH:MM:SS`. Если не указывать, промокод начнет действовать сразу

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->publicApiV1UpdatePromocodesPost($public_api_v1_update_promocodes_post_request_inner, $activate_from, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1UpdatePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_api_v1_update_promocodes_post_request_inner** | [**\OpenAPI\Client\Model\PublicApiV1UpdatePromocodesPostRequestInner[]**](../Model/PublicApiV1UpdatePromocodesPostRequestInner.md)| Перечень номенклатур | |
| **activate_from** | **string**| Дата активации промокада в формате &#x60;YYYY-MM-DD&#x60; или &#x60;YYYY-MM-DD HH:MM:SS&#x60;. Если не указывать, промокод начнет действовать сразу | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
