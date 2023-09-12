# Wildberries API продавца 2.16 (OpenAPIClient-php)
Сгенерированное Open-API Wildberries для языка PHP

# Общее описание
Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)

<ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>

<br> Для ручной провеПродвижение /и API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul> <br>

## Поддержка
Техническая поддержка осуществляется через диалоги в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API.
<br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> <br> <br>

## Авторизация
Авторизация осуществляется по токенам API, которые  владелец личного кабинета (главный пользователь) самостоятельно
 генерирует в разделе 
 [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api). 
 <br>
 <br>
 Существует три типа токенов:
  <ol>
    <li>Стандартный. Используется для работы с методами из разделов: Цены, Промокоды и скидки, Контент, Marketplace, Рекомендации, Отзывы, Вопросы.</li>
    <li>Статистика. Используется для работы с методами из раздела Статистика.</li>
    <li>Продвижение. Используется для работы с методами из раздела Продвижение.</li>
  </ol>
  
Обратите внимание, что токен отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный токен следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <br> <br> Обращаем ваше внимание, что интеграции с Порталом Продавца, не использующие Публичное API, противоречат пункту 9.7.6 оферты. <br> Тем не менее, при отсутствии прямой угрозы утечки данных из личного кабинета продавца Wildberries заранее уведомит продавца о запланированной блокировке, связанной с этим пунктом, давая возможность отключить интеграцию. <br> <br> <br>
## Форматы
### Дата и время
Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul> <br>
## Release Notes
<p>Для просмотра обновлений перейдите по <span><a href=\"./releasenotes/index.html\" target=\"_blank\">ссылке</a></span>.</p>



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

try {
    $apiInstance->advV0ActiveGet($id, $subject_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0ActiveGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**advV0ActiveGet**](docs/Api/DefaultApi.md#advv0activeget) | **GET** /adv/v0/active | Изменение активности предметной группы для кампании в поиске
*DefaultApi* | [**advV0AdvertGet**](docs/Api/DefaultApi.md#advv0advertget) | **GET** /adv/v0/advert | Информация о кампании
*DefaultApi* | [**advV0AdvertsCreatePost**](docs/Api/DefaultApi.md#advv0advertscreatepost) | **POST** /adv/v0/adverts/create | Создание кампании, тестовый
*DefaultApi* | [**advV0AdvertsGet**](docs/Api/DefaultApi.md#advv0advertsget) | **GET** /adv/v0/adverts | Список кампаний
*DefaultApi* | [**advV0AllcpmPost**](docs/Api/DefaultApi.md#advv0allcpmpost) | **POST** /adv/v0/allcpm | Список ставок по типу размещения кампании
*DefaultApi* | [**advV0CountGet**](docs/Api/DefaultApi.md#advv0countget) | **GET** /adv/v0/count | Получение кампаний
*DefaultApi* | [**advV0CpmGet**](docs/Api/DefaultApi.md#advv0cpmget) | **GET** /adv/v0/cpm | Список ставок
*DefaultApi* | [**advV0CpmPost**](docs/Api/DefaultApi.md#advv0cpmpost) | **POST** /adv/v0/cpm | Изменение ставки у кампании
*DefaultApi* | [**advV0IntervalsPost**](docs/Api/DefaultApi.md#advv0intervalspost) | **POST** /adv/v0/intervals | Изменение интервалов показа кампании
*DefaultApi* | [**advV0NmactivePost**](docs/Api/DefaultApi.md#advv0nmactivepost) | **POST** /adv/v0/nmactive | Изменение активности номенклатур кампании
*DefaultApi* | [**advV0ParamsMenuGet**](docs/Api/DefaultApi.md#advv0paramsmenuget) | **GET** /adv/v0/params/menu | Словарь значений параметра menuId
*DefaultApi* | [**advV0ParamsSetGet**](docs/Api/DefaultApi.md#advv0paramssetget) | **GET** /adv/v0/params/set | Словарь значений параметра setId
*DefaultApi* | [**advV0ParamsSubjectGet**](docs/Api/DefaultApi.md#advv0paramssubjectget) | **GET** /adv/v0/params/subject | Словарь значений параметра subjectId
*DefaultApi* | [**advV0PauseGet**](docs/Api/DefaultApi.md#advv0pauseget) | **GET** /adv/v0/pause | Пауза кампании
*DefaultApi* | [**advV0RenamePost**](docs/Api/DefaultApi.md#advv0renamepost) | **POST** /adv/v0/rename | Переименование кампании
*DefaultApi* | [**advV0StartGet**](docs/Api/DefaultApi.md#advv0startget) | **GET** /adv/v0/start | Запуск кампании
*DefaultApi* | [**advV0StopGet**](docs/Api/DefaultApi.md#advv0stopget) | **GET** /adv/v0/stop | Завершение кампании
*DefaultApi* | [**advV1AutoActivePost**](docs/Api/DefaultApi.md#advv1autoactivepost) | **POST** /adv/v1/auto/active | Управление зонами показов в автоматической кампании
*DefaultApi* | [**advV1AutoGetnmtoaddGet**](docs/Api/DefaultApi.md#advv1autogetnmtoaddget) | **GET** /adv/v1/auto/getnmtoadd | Список номенклатур для автоматической кампании
*DefaultApi* | [**advV1AutoStatGet**](docs/Api/DefaultApi.md#advv1autostatget) | **GET** /adv/v1/auto/stat | Статистика автоматической кампании
*DefaultApi* | [**advV1AutoUpdatenmPost**](docs/Api/DefaultApi.md#advv1autoupdatenmpost) | **POST** /adv/v1/auto/updatenm | Изменение списка номенклатур в автоматической кампании
*DefaultApi* | [**advV1BalanceGet**](docs/Api/DefaultApi.md#advv1balanceget) | **GET** /adv/v1/balance | Баланс
*DefaultApi* | [**advV1BudgetDepositPost**](docs/Api/DefaultApi.md#advv1budgetdepositpost) | **POST** /adv/v1/budget/deposit | Пополнение бюджета кампании
*DefaultApi* | [**advV1BudgetGet**](docs/Api/DefaultApi.md#advv1budgetget) | **GET** /adv/v1/budget | Бюджет кампании
*DefaultApi* | [**advV1FullstatGet**](docs/Api/DefaultApi.md#advv1fullstatget) | **GET** /adv/v1/fullstat | Полная статистика кампании
*DefaultApi* | [**advV1PaymentsGet**](docs/Api/DefaultApi.md#advv1paymentsget) | **GET** /adv/v1/payments | Получение истории пополнений счета
*DefaultApi* | [**advV1SaveAdPost**](docs/Api/DefaultApi.md#advv1saveadpost) | **POST** /adv/v1/save-ad | Создание кампании
*DefaultApi* | [**advV1SeacatStatGet**](docs/Api/DefaultApi.md#advv1seacatstatget) | **GET** /adv/v1/seacat/stat | Статистика кампаний Поиск + Каталог
*DefaultApi* | [**advV1SearchSetExcludedPost**](docs/Api/DefaultApi.md#advv1searchsetexcludedpost) | **POST** /adv/v1/search/set-excluded | Установка/удаление минус-фраз из поиска для кампании в поиске
*DefaultApi* | [**advV1SearchSetPhrasePost**](docs/Api/DefaultApi.md#advv1searchsetphrasepost) | **POST** /adv/v1/search/set-phrase | Установка/удаление минус-фраз фразового соответствия для кампании в поиске
*DefaultApi* | [**advV1SearchSetPlusGet**](docs/Api/DefaultApi.md#advv1searchsetplusget) | **GET** /adv/v1/search/set-plus | Управление активностью фиксированных фраз у кампании в поиске
*DefaultApi* | [**advV1SearchSetPlusPost**](docs/Api/DefaultApi.md#advv1searchsetpluspost) | **POST** /adv/v1/search/set-plus | Установка/удаление фиксированных фраз у кампании в поиске
*DefaultApi* | [**advV1SearchSetStrongPost**](docs/Api/DefaultApi.md#advv1searchsetstrongpost) | **POST** /adv/v1/search/set-strong | Установка/удаление минус-фраз точного соответствия для кампании в поиске
*DefaultApi* | [**advV1StatWordsGet**](docs/Api/DefaultApi.md#advv1statwordsget) | **GET** /adv/v1/stat/words | Статистика поисковой кампании по ключевым фразам
*DefaultApi* | [**advV1UpdGet**](docs/Api/DefaultApi.md#advv1updget) | **GET** /adv/v1/upd | Получение истории затрат
*DefaultApi* | [**advV1UpdIntervalsGet**](docs/Api/DefaultApi.md#advv1updintervalsget) | **GET** /adv/v1/upd/intervals | Получение месячных интервалов для истории затрат
*DefaultApi* | [**apiV1DelPost**](docs/Api/DefaultApi.md#apiv1delpost) | **POST** /api/v1/del | Удаление рекомендаций
*DefaultApi* | [**apiV1FeedbackGet**](docs/Api/DefaultApi.md#apiv1feedbackget) | **GET** /api/v1/feedback | Получить отзыв по Id
*DefaultApi* | [**apiV1FeedbacksArchiveGet**](docs/Api/DefaultApi.md#apiv1feedbacksarchiveget) | **GET** /api/v1/feedbacks/archive | Список архивных отзывов
*DefaultApi* | [**apiV1FeedbacksCountGet**](docs/Api/DefaultApi.md#apiv1feedbackscountget) | **GET** /api/v1/feedbacks/count | Количество отзывов
*DefaultApi* | [**apiV1FeedbacksCountUnansweredGet**](docs/Api/DefaultApi.md#apiv1feedbackscountunansweredget) | **GET** /api/v1/feedbacks/count-unanswered | Необработанные отзывы
*DefaultApi* | [**apiV1FeedbacksGet**](docs/Api/DefaultApi.md#apiv1feedbacksget) | **GET** /api/v1/feedbacks | Список отзывов
*DefaultApi* | [**apiV1FeedbacksPatch**](docs/Api/DefaultApi.md#apiv1feedbackspatch) | **PATCH** /api/v1/feedbacks | Работа с отзывом
*DefaultApi* | [**apiV1FeedbacksProductsRatingGet**](docs/Api/DefaultApi.md#apiv1feedbacksproductsratingget) | **GET** /api/v1/feedbacks/products/rating | Средняя оценка товаров по родительской категории
*DefaultApi* | [**apiV1FeedbacksProductsRatingNmidGet**](docs/Api/DefaultApi.md#apiv1feedbacksproductsratingnmidget) | **GET** /api/v1/feedbacks/products/rating/nmid | Средняя оценка товара по артикулу WB
*DefaultApi* | [**apiV1FeedbacksProductsRatingTopGet**](docs/Api/DefaultApi.md#apiv1feedbacksproductsratingtopget) | **GET** /api/v1/feedbacks/products/rating/top | Товары с наибольшей и наименьшей средней оценкой по родительской категории
*DefaultApi* | [**apiV1FeedbacksReportGet**](docs/Api/DefaultApi.md#apiv1feedbacksreportget) | **GET** /api/v1/feedbacks/report | Получение отзывов в формате XLSX
*DefaultApi* | [**apiV1InsPost**](docs/Api/DefaultApi.md#apiv1inspost) | **POST** /api/v1/ins | Добавление рекомендаций
*DefaultApi* | [**apiV1ListPost**](docs/Api/DefaultApi.md#apiv1listpost) | **POST** /api/v1/list | Список рекомендаций
*DefaultApi* | [**apiV1NewFeedbacksQuestionsGet**](docs/Api/DefaultApi.md#apiv1newfeedbacksquestionsget) | **GET** /api/v1/new-feedbacks-questions | Непросмотренные отзывы и вопросы
*DefaultApi* | [**apiV1ParentSubjectsGet**](docs/Api/DefaultApi.md#apiv1parentsubjectsget) | **GET** /api/v1/parent-subjects | Родительские категории товаров
*DefaultApi* | [**apiV1QuestionGet**](docs/Api/DefaultApi.md#apiv1questionget) | **GET** /api/v1/question | Получить вопрос по Id
*DefaultApi* | [**apiV1QuestionsCountGet**](docs/Api/DefaultApi.md#apiv1questionscountget) | **GET** /api/v1/questions/count | Количество вопросов
*DefaultApi* | [**apiV1QuestionsCountUnansweredGet**](docs/Api/DefaultApi.md#apiv1questionscountunansweredget) | **GET** /api/v1/questions/count-unanswered | Неотвеченные вопросы
*DefaultApi* | [**apiV1QuestionsGet**](docs/Api/DefaultApi.md#apiv1questionsget) | **GET** /api/v1/questions | Список вопросов
*DefaultApi* | [**apiV1QuestionsPatch**](docs/Api/DefaultApi.md#apiv1questionspatch) | **PATCH** /api/v1/questions | Работа с вопросами
*DefaultApi* | [**apiV1QuestionsProductsRatingGet**](docs/Api/DefaultApi.md#apiv1questionsproductsratingget) | **GET** /api/v1/questions/products/rating | Часто спрашиваемые товары
*DefaultApi* | [**apiV1QuestionsReportGet**](docs/Api/DefaultApi.md#apiv1questionsreportget) | **GET** /api/v1/questions/report | Получение вопросов в формате XLSX
*DefaultApi* | [**apiV1SetPost**](docs/Api/DefaultApi.md#apiv1setpost) | **POST** /api/v1/set | Управление рекомендациями
*DefaultApi* | [**apiV1SupplierIncomesGet**](docs/Api/DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
*DefaultApi* | [**apiV1SupplierOrdersGet**](docs/Api/DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
*DefaultApi* | [**apiV1SupplierReportDetailByPeriodGet**](docs/Api/DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
*DefaultApi* | [**apiV1SupplierSalesGet**](docs/Api/DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
*DefaultApi* | [**apiV1SupplierStocksGet**](docs/Api/DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
*DefaultApi* | [**apiV1TemplatesDelete**](docs/Api/DefaultApi.md#apiv1templatesdelete) | **DELETE** /api/v1/templates | Удалить шаблон
*DefaultApi* | [**apiV1TemplatesGet**](docs/Api/DefaultApi.md#apiv1templatesget) | **GET** /api/v1/templates | Получить шаблоны ответов
*DefaultApi* | [**apiV1TemplatesPatch**](docs/Api/DefaultApi.md#apiv1templatespatch) | **PATCH** /api/v1/templates | Редактировать шаблон
*DefaultApi* | [**apiV1TemplatesPost**](docs/Api/DefaultApi.md#apiv1templatespost) | **POST** /api/v1/templates | Создать шаблон
*DefaultApi* | [**contentV1AnalyticsNmReportDetailHistoryPost**](docs/Api/DefaultApi.md#contentv1analyticsnmreportdetailhistorypost) | **POST** /content/v1/analytics/nm-report/detail/history | Получение статистики КТ по дням/неделям/месяцам по выбранным nmID
*DefaultApi* | [**contentV1AnalyticsNmReportDetailPost**](docs/Api/DefaultApi.md#contentv1analyticsnmreportdetailpost) | **POST** /content/v1/analytics/nm-report/detail | Получение статистики КТ за выбранный период, по nmID/предметам/брендам/тегам
*DefaultApi* | [**contentV1AnalyticsNmReportGroupedHistoryPost**](docs/Api/DefaultApi.md#contentv1analyticsnmreportgroupedhistorypost) | **POST** /content/v1/analytics/nm-report/grouped/history | Получение статистики КТ по дням/неделям/месяцам за период, сгруппированный по предметам, брендам и тегам
*DefaultApi* | [**contentV1AnalyticsNmReportGroupedPost**](docs/Api/DefaultApi.md#contentv1analyticsnmreportgroupedpost) | **POST** /content/v1/analytics/nm-report/grouped | Получение статистики КТ за период, сгруппированный по предметам, брендам и тегам
*DefaultApi* | [**contentV1BarcodesPost**](docs/Api/DefaultApi.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
*DefaultApi* | [**contentV1CardsCursorListPost**](docs/Api/DefaultApi.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ
*DefaultApi* | [**contentV1CardsErrorListGet**](docs/Api/DefaultApi.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
*DefaultApi* | [**contentV1CardsFilterPost**](docs/Api/DefaultApi.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по артикулам продавца
*DefaultApi* | [**contentV1CardsLimitsGet**](docs/Api/DefaultApi.md#contentv1cardslimitsget) | **GET** /content/v1/cards/limits | Лимиты по КТ
*DefaultApi* | [**contentV1CardsMoveNmPost**](docs/Api/DefaultApi.md#contentv1cardsmovenmpost) | **POST** /content/v1/cards/moveNm | Объединение / Разъединение НМ
*DefaultApi* | [**contentV1CardsTrashListPost**](docs/Api/DefaultApi.md#contentv1cardstrashlistpost) | **POST** /content/v1/cards/trash/list | Список НМ, находящихся в корзине
*DefaultApi* | [**contentV1CardsUpdatePost**](docs/Api/DefaultApi.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
*DefaultApi* | [**contentV1CardsUploadAddPost**](docs/Api/DefaultApi.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
*DefaultApi* | [**contentV1CardsUploadPost**](docs/Api/DefaultApi.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
*DefaultApi* | [**contentV1DirectoryBrandsGet**](docs/Api/DefaultApi.md#contentv1directorybrandsget) | **GET** /content/v1/directory/brands | Бренд
*DefaultApi* | [**contentV1DirectoryColorsGet**](docs/Api/DefaultApi.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
*DefaultApi* | [**contentV1DirectoryCountriesGet**](docs/Api/DefaultApi.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
*DefaultApi* | [**contentV1DirectoryKindsGet**](docs/Api/DefaultApi.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
*DefaultApi* | [**contentV1DirectorySeasonsGet**](docs/Api/DefaultApi.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
*DefaultApi* | [**contentV1DirectoryTnvedGet**](docs/Api/DefaultApi.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
*DefaultApi* | [**contentV1MediaFilePost**](docs/Api/DefaultApi.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
*DefaultApi* | [**contentV1MediaSavePost**](docs/Api/DefaultApi.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
*DefaultApi* | [**contentV1ObjectAllGet**](docs/Api/DefaultApi.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
*DefaultApi* | [**contentV1ObjectCharacteristicsListFilterGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
*DefaultApi* | [**contentV1ObjectCharacteristicsObjectNameGet**](docs/Api/DefaultApi.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
*DefaultApi* | [**contentV1ObjectParentAllGet**](docs/Api/DefaultApi.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
*DefaultApi* | [**contentV1TagIdDelete**](docs/Api/DefaultApi.md#contentv1tagiddelete) | **DELETE** /content/v1/tag/{id} | Удаление тега
*DefaultApi* | [**contentV1TagIdPatch**](docs/Api/DefaultApi.md#contentv1tagidpatch) | **PATCH** /content/v1/tag/{id} | Изменение тега
*DefaultApi* | [**contentV1TagNomenclatureLinkPost**](docs/Api/DefaultApi.md#contentv1tagnomenclaturelinkpost) | **POST** /content/v1/tag/nomenclature/link | Управление тегами в КТ
*DefaultApi* | [**contentV1TagPost**](docs/Api/DefaultApi.md#contentv1tagpost) | **POST** /content/v1/tag | Создание тега
*DefaultApi* | [**contentV1TagsGet**](docs/Api/DefaultApi.md#contentv1tagsget) | **GET** /content/v1/tags | Список тегов
*DefaultApi* | [**publicApiV1InfoGet**](docs/Api/DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
*DefaultApi* | [**publicApiV1PricesPost**](docs/Api/DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен
*DefaultApi* | [**publicApiV1RevokeDiscountsPost**](docs/Api/DefaultApi.md#publicapiv1revokediscountspost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур
*DefaultApi* | [**publicApiV1RevokePromocodesPost**](docs/Api/DefaultApi.md#publicapiv1revokepromocodespost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур
*DefaultApi* | [**publicApiV1UpdateDiscountsPost**](docs/Api/DefaultApi.md#publicapiv1updatediscountspost) | **POST** /public/api/v1/updateDiscounts | Установка скидок
*DefaultApi* | [**publicApiV1UpdatePromocodesPost**](docs/Api/DefaultApi.md#publicapiv1updatepromocodespost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур
*MarketplaceApi* | [**apiV3FilesOrdersExternalStickersPost**](docs/Api/MarketplaceApi.md#apiv3filesordersexternalstickerspost) | **POST** /api/v3/files/orders/external-stickers | Получить список ссылок на этикетки для сборочных заданий, которые требуются при кроссбордере
*MarketplaceApi* | [**apiV3OfficesGet**](docs/Api/MarketplaceApi.md#apiv3officesget) | **GET** /api/v3/offices | Получить список складов WB
*MarketplaceApi* | [**apiV3OrdersGet**](docs/Api/MarketplaceApi.md#apiv3ordersget) | **GET** /api/v3/orders | Получить информацию по сборочным заданиям
*MarketplaceApi* | [**apiV3OrdersNewGet**](docs/Api/MarketplaceApi.md#apiv3ordersnewget) | **GET** /api/v3/orders/new | Получить список новых сборочных заданий
*MarketplaceApi* | [**apiV3OrdersOrderIdCancelPatch**](docs/Api/MarketplaceApi.md#apiv3ordersorderidcancelpatch) | **PATCH** /api/v3/orders/{orderId}/cancel | Отменить сборочное задание
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaDelete**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetadelete) | **DELETE** /api/v3/orders/{orderId}/meta | Удалить метаданные сборочного задания
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaGet**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetaget) | **GET** /api/v3/orders/{orderId}/meta | Получить метаданные сборочного задания
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaGtinPut**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetagtinput) | **PUT** /api/v3/orders/{orderId}/meta/gtin | Закрепить за сборочным заданием GTIN
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaImeiPut**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetaimeiput) | **PUT** /api/v3/orders/{orderId}/meta/imei | Закрепить за сборочным заданием IMEI
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaSgtinPost**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetasgtinpost) | **POST** /api/v3/orders/{orderId}/meta/sgtin | Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
*MarketplaceApi* | [**apiV3OrdersOrderIdMetaUinPut**](docs/Api/MarketplaceApi.md#apiv3ordersorderidmetauinput) | **PUT** /api/v3/orders/{orderId}/meta/uin | Закрепить за сборочным заданием УИН (уникальный идентификационный номер)
*MarketplaceApi* | [**apiV3OrdersStatusPost**](docs/Api/MarketplaceApi.md#apiv3ordersstatuspost) | **POST** /api/v3/orders/status | Получить статусы сборочных заданий
*MarketplaceApi* | [**apiV3OrdersStickersPost**](docs/Api/MarketplaceApi.md#apiv3ordersstickerspost) | **POST** /api/v3/orders/stickers | Получить этикетки для сборочных заданий
*MarketplaceApi* | [**apiV3PassesGet**](docs/Api/MarketplaceApi.md#apiv3passesget) | **GET** /api/v3/passes | Получить список пропусков
*MarketplaceApi* | [**apiV3PassesOfficesGet**](docs/Api/MarketplaceApi.md#apiv3passesofficesget) | **GET** /api/v3/passes/offices | Получить список складов, для которых требуется пропуск
*MarketplaceApi* | [**apiV3PassesPassIdDelete**](docs/Api/MarketplaceApi.md#apiv3passespassiddelete) | **DELETE** /api/v3/passes/{passId} | Удалить пропуск
*MarketplaceApi* | [**apiV3PassesPassIdPut**](docs/Api/MarketplaceApi.md#apiv3passespassidput) | **PUT** /api/v3/passes/{passId} | Обновить пропуск
*MarketplaceApi* | [**apiV3PassesPost**](docs/Api/MarketplaceApi.md#apiv3passespost) | **POST** /api/v3/passes | Создать пропуск
*MarketplaceApi* | [**apiV3StocksWarehouseIdDelete**](docs/Api/MarketplaceApi.md#apiv3stockswarehouseiddelete) | **DELETE** /api/v3/stocks/{warehouseId} | Удалить остатки товаров
*MarketplaceApi* | [**apiV3StocksWarehouseIdPost**](docs/Api/MarketplaceApi.md#apiv3stockswarehouseidpost) | **POST** /api/v3/stocks/{warehouseId} | Получить остатки товаров
*MarketplaceApi* | [**apiV3StocksWarehouseIdPut**](docs/Api/MarketplaceApi.md#apiv3stockswarehouseidput) | **PUT** /api/v3/stocks/{warehouseId} | Обновить остатки товаров
*MarketplaceApi* | [**apiV3SuppliesGet**](docs/Api/MarketplaceApi.md#apiv3suppliesget) | **GET** /api/v3/supplies | Получить список поставок
*MarketplaceApi* | [**apiV3SuppliesPost**](docs/Api/MarketplaceApi.md#apiv3suppliespost) | **POST** /api/v3/supplies | Создать новую поставку
*MarketplaceApi* | [**apiV3SuppliesSupplyIdBarcodeGet**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidbarcodeget) | **GET** /api/v3/supplies/{supplyId}/barcode | Получить QR поставки
*MarketplaceApi* | [**apiV3SuppliesSupplyIdDelete**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyiddelete) | **DELETE** /api/v3/supplies/{supplyId} | Удалить поставку
*MarketplaceApi* | [**apiV3SuppliesSupplyIdDeliverPatch**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyiddeliverpatch) | **PATCH** /api/v3/supplies/{supplyId}/deliver | Передать поставку в доставку
*MarketplaceApi* | [**apiV3SuppliesSupplyIdGet**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidget) | **GET** /api/v3/supplies/{supplyId} | Получить информацию о поставке
*MarketplaceApi* | [**apiV3SuppliesSupplyIdOrdersGet**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidordersget) | **GET** /api/v3/supplies/{supplyId}/orders | Получить сборочные задания в поставке
*MarketplaceApi* | [**apiV3SuppliesSupplyIdOrdersOrderIdPatch**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidordersorderidpatch) | **PATCH** /api/v3/supplies/{supplyId}/orders/{orderId} | Добавить к поставке сборочное задание
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxDelete**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxdelete) | **DELETE** /api/v3/supplies/{supplyId}/trbx | Удалить короба из поставки
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxGet**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxget) | **GET** /api/v3/supplies/{supplyId}/trbx | Получить список коробов поставки
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxPost**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxpost) | **POST** /api/v3/supplies/{supplyId}/trbx | Добавить короба к поставке
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxStickersPost**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxstickerspost) | **POST** /api/v3/supplies/{supplyId}/trbx/stickers | Получить стикеры коробов поставки
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxtrbxidordersorderiddelete) | **DELETE** /api/v3/supplies/{supplyId}/trbx/{trbxId}/orders/{orderId} | Удалить заказ из короба
*MarketplaceApi* | [**apiV3SuppliesSupplyIdTrbxTrbxIdPatch**](docs/Api/MarketplaceApi.md#apiv3suppliessupplyidtrbxtrbxidpatch) | **PATCH** /api/v3/supplies/{supplyId}/trbx/{trbxId} | Добавить заказы к коробу
*MarketplaceApi* | [**apiV3WarehousesGet**](docs/Api/MarketplaceApi.md#apiv3warehousesget) | **GET** /api/v3/warehouses | Получить список складов продавца
*MarketplaceApi* | [**apiV3WarehousesPost**](docs/Api/MarketplaceApi.md#apiv3warehousespost) | **POST** /api/v3/warehouses | Создать склад продавца
*MarketplaceApi* | [**apiV3WarehousesWarehouseIdDelete**](docs/Api/MarketplaceApi.md#apiv3warehouseswarehouseiddelete) | **DELETE** /api/v3/warehouses/{warehouseId} | Удалить склад продавца
*MarketplaceApi* | [**apiV3WarehousesWarehouseIdPut**](docs/Api/MarketplaceApi.md#apiv3warehouseswarehouseidput) | **PUT** /api/v3/warehouses/{warehouseId} | Обновить склад

## Models

- [AdvV0AdvertGet200Response](docs/Model/AdvV0AdvertGet200Response.md)
- [AdvV0AdvertsCreatePostRequestInner](docs/Model/AdvV0AdvertsCreatePostRequestInner.md)
- [AdvV0AdvertsCreatePostRequestInnerParamsInner](docs/Model/AdvV0AdvertsCreatePostRequestInnerParamsInner.md)
- [AdvV0AdvertsCreatePostRequestInnerParamsInnerIntervalsInner](docs/Model/AdvV0AdvertsCreatePostRequestInnerParamsInnerIntervalsInner.md)
- [AdvV0AdvertsGet200ResponseInner](docs/Model/AdvV0AdvertsGet200ResponseInner.md)
- [AdvV0AllcpmPost200ResponseInner](docs/Model/AdvV0AllcpmPost200ResponseInner.md)
- [AdvV0AllcpmPost200ResponseInnerCpmInner](docs/Model/AdvV0AllcpmPost200ResponseInnerCpmInner.md)
- [AdvV0AllcpmPostRequest](docs/Model/AdvV0AllcpmPostRequest.md)
- [AdvV0CountGet200Response](docs/Model/AdvV0CountGet200Response.md)
- [AdvV0CountGet200ResponseAdvertsInner](docs/Model/AdvV0CountGet200ResponseAdvertsInner.md)
- [AdvV0CpmGet200ResponseInner](docs/Model/AdvV0CpmGet200ResponseInner.md)
- [AdvV0CpmPostRequest](docs/Model/AdvV0CpmPostRequest.md)
- [AdvV0IntervalsPostRequest](docs/Model/AdvV0IntervalsPostRequest.md)
- [AdvV0IntervalsPostRequestIntervalsInner](docs/Model/AdvV0IntervalsPostRequestIntervalsInner.md)
- [AdvV0NmactivePostRequest](docs/Model/AdvV0NmactivePostRequest.md)
- [AdvV0NmactivePostRequestActiveInner](docs/Model/AdvV0NmactivePostRequestActiveInner.md)
- [AdvV0ParamsMenuGet200ResponseInner](docs/Model/AdvV0ParamsMenuGet200ResponseInner.md)
- [AdvV0ParamsSetGet200ResponseInner](docs/Model/AdvV0ParamsSetGet200ResponseInner.md)
- [AdvV0ParamsSubjectGet200ResponseInner](docs/Model/AdvV0ParamsSubjectGet200ResponseInner.md)
- [AdvV0RenamePostRequest](docs/Model/AdvV0RenamePostRequest.md)
- [AdvV1AutoActivePostRequest](docs/Model/AdvV1AutoActivePostRequest.md)
- [AdvV1AutoStatGet200Response](docs/Model/AdvV1AutoStatGet200Response.md)
- [AdvV1AutoUpdatenmPostRequest](docs/Model/AdvV1AutoUpdatenmPostRequest.md)
- [AdvV1BalanceGet200Response](docs/Model/AdvV1BalanceGet200Response.md)
- [AdvV1BudgetDepositPostRequest](docs/Model/AdvV1BudgetDepositPostRequest.md)
- [AdvV1BudgetGet200Response](docs/Model/AdvV1BudgetGet200Response.md)
- [AdvV1FullstatGet200Response](docs/Model/AdvV1FullstatGet200Response.md)
- [AdvV1FullstatGet200ResponseBoosterStatsInner](docs/Model/AdvV1FullstatGet200ResponseBoosterStatsInner.md)
- [AdvV1FullstatGet200ResponseDaysInner](docs/Model/AdvV1FullstatGet200ResponseDaysInner.md)
- [AdvV1FullstatGet200ResponseDaysInnerAppsInner](docs/Model/AdvV1FullstatGet200ResponseDaysInnerAppsInner.md)
- [AdvV1FullstatGet200ResponseDaysInnerAppsInnerNmInner](docs/Model/AdvV1FullstatGet200ResponseDaysInnerAppsInnerNmInner.md)
- [AdvV1PaymentsGet200ResponseInner](docs/Model/AdvV1PaymentsGet200ResponseInner.md)
- [AdvV1SaveAdPost400Response](docs/Model/AdvV1SaveAdPost400Response.md)
- [AdvV1SaveAdPostRequest](docs/Model/AdvV1SaveAdPostRequest.md)
- [AdvV1SeacatStatGet200Response](docs/Model/AdvV1SeacatStatGet200Response.md)
- [AdvV1SeacatStatGet200ResponseDatesInner](docs/Model/AdvV1SeacatStatGet200ResponseDatesInner.md)
- [AdvV1SeacatStatGet200ResponseDatesInnerCatalog](docs/Model/AdvV1SeacatStatGet200ResponseDatesInnerCatalog.md)
- [AdvV1SeacatStatGet200ResponseDatesInnerSearch](docs/Model/AdvV1SeacatStatGet200ResponseDatesInnerSearch.md)
- [AdvV1SearchSetExcludedPostRequest](docs/Model/AdvV1SearchSetExcludedPostRequest.md)
- [AdvV1SearchSetPhrasePostRequest](docs/Model/AdvV1SearchSetPhrasePostRequest.md)
- [AdvV1SearchSetPlusPostRequest](docs/Model/AdvV1SearchSetPlusPostRequest.md)
- [AdvV1SearchSetStrongPostRequest](docs/Model/AdvV1SearchSetStrongPostRequest.md)
- [AdvV1StatWordsGet200Response](docs/Model/AdvV1StatWordsGet200Response.md)
- [AdvV1StatWordsGet200ResponseStatInner](docs/Model/AdvV1StatWordsGet200ResponseStatInner.md)
- [AdvV1StatWordsGet200ResponseWords](docs/Model/AdvV1StatWordsGet200ResponseWords.md)
- [AdvV1StatWordsGet200ResponseWordsKeywordsInner](docs/Model/AdvV1StatWordsGet200ResponseWordsKeywordsInner.md)
- [AdvV1UpdGet200ResponseInner](docs/Model/AdvV1UpdGet200ResponseInner.md)
- [ApiV1DelPostRequestInner](docs/Model/ApiV1DelPostRequestInner.md)
- [ApiV1FeedbackGet200Response](docs/Model/ApiV1FeedbackGet200Response.md)
- [ApiV1FeedbackGet200ResponseData](docs/Model/ApiV1FeedbackGet200ResponseData.md)
- [ApiV1FeedbackGet200ResponseDataAnswer](docs/Model/ApiV1FeedbackGet200ResponseDataAnswer.md)
- [ApiV1FeedbackGet200ResponseDataPhotoLinksInner](docs/Model/ApiV1FeedbackGet200ResponseDataPhotoLinksInner.md)
- [ApiV1FeedbackGet200ResponseDataProductDetails](docs/Model/ApiV1FeedbackGet200ResponseDataProductDetails.md)
- [ApiV1FeedbackGet200ResponseDataVideo](docs/Model/ApiV1FeedbackGet200ResponseDataVideo.md)
- [ApiV1FeedbacksArchiveGet200Response](docs/Model/ApiV1FeedbacksArchiveGet200Response.md)
- [ApiV1FeedbacksArchiveGet200ResponseData](docs/Model/ApiV1FeedbacksArchiveGet200ResponseData.md)
- [ApiV1FeedbacksCountGet200Response](docs/Model/ApiV1FeedbacksCountGet200Response.md)
- [ApiV1FeedbacksCountUnansweredGet200Response](docs/Model/ApiV1FeedbacksCountUnansweredGet200Response.md)
- [ApiV1FeedbacksCountUnansweredGet200ResponseData](docs/Model/ApiV1FeedbacksCountUnansweredGet200ResponseData.md)
- [ApiV1FeedbacksGet200Response](docs/Model/ApiV1FeedbacksGet200Response.md)
- [ApiV1FeedbacksGet200ResponseData](docs/Model/ApiV1FeedbacksGet200ResponseData.md)
- [ApiV1FeedbacksPatchRequest](docs/Model/ApiV1FeedbacksPatchRequest.md)
- [ApiV1FeedbacksPatchRequestOneOf](docs/Model/ApiV1FeedbacksPatchRequestOneOf.md)
- [ApiV1FeedbacksPatchRequestOneOf1](docs/Model/ApiV1FeedbacksPatchRequestOneOf1.md)
- [ApiV1FeedbacksProductsRatingGet200Response](docs/Model/ApiV1FeedbacksProductsRatingGet200Response.md)
- [ApiV1FeedbacksProductsRatingGet200ResponseDataInner](docs/Model/ApiV1FeedbacksProductsRatingGet200ResponseDataInner.md)
- [ApiV1FeedbacksProductsRatingNmidGet200Response](docs/Model/ApiV1FeedbacksProductsRatingNmidGet200Response.md)
- [ApiV1FeedbacksProductsRatingNmidGet200ResponseData](docs/Model/ApiV1FeedbacksProductsRatingNmidGet200ResponseData.md)
- [ApiV1FeedbacksProductsRatingTopGet200Response](docs/Model/ApiV1FeedbacksProductsRatingTopGet200Response.md)
- [ApiV1FeedbacksProductsRatingTopGet200ResponseDataInner](docs/Model/ApiV1FeedbacksProductsRatingTopGet200ResponseDataInner.md)
- [ApiV1FeedbacksReportGet200Response](docs/Model/ApiV1FeedbacksReportGet200Response.md)
- [ApiV1FeedbacksReportGet200ResponseData](docs/Model/ApiV1FeedbacksReportGet200ResponseData.md)
- [ApiV1InsPostRequestInner](docs/Model/ApiV1InsPostRequestInner.md)
- [ApiV1ListPost200Response](docs/Model/ApiV1ListPost200Response.md)
- [ApiV1ListPost200ResponseDataInner](docs/Model/ApiV1ListPost200ResponseDataInner.md)
- [ApiV1NewFeedbacksQuestionsGet200Response](docs/Model/ApiV1NewFeedbacksQuestionsGet200Response.md)
- [ApiV1NewFeedbacksQuestionsGet200ResponseData](docs/Model/ApiV1NewFeedbacksQuestionsGet200ResponseData.md)
- [ApiV1ParentSubjectsGet200Response](docs/Model/ApiV1ParentSubjectsGet200Response.md)
- [ApiV1ParentSubjectsGet200ResponseDataInner](docs/Model/ApiV1ParentSubjectsGet200ResponseDataInner.md)
- [ApiV1QuestionGet200Response](docs/Model/ApiV1QuestionGet200Response.md)
- [ApiV1QuestionGet200ResponseData](docs/Model/ApiV1QuestionGet200ResponseData.md)
- [ApiV1QuestionsCountGet200Response](docs/Model/ApiV1QuestionsCountGet200Response.md)
- [ApiV1QuestionsCountUnansweredGet200Response](docs/Model/ApiV1QuestionsCountUnansweredGet200Response.md)
- [ApiV1QuestionsCountUnansweredGet200ResponseData](docs/Model/ApiV1QuestionsCountUnansweredGet200ResponseData.md)
- [ApiV1QuestionsGet200Response](docs/Model/ApiV1QuestionsGet200Response.md)
- [ApiV1QuestionsGet200ResponseData](docs/Model/ApiV1QuestionsGet200ResponseData.md)
- [ApiV1QuestionsGet200ResponseDataQuestionsInner](docs/Model/ApiV1QuestionsGet200ResponseDataQuestionsInner.md)
- [ApiV1QuestionsGet200ResponseDataQuestionsInnerAnswer](docs/Model/ApiV1QuestionsGet200ResponseDataQuestionsInnerAnswer.md)
- [ApiV1QuestionsGet200ResponseDataQuestionsInnerProductDetails](docs/Model/ApiV1QuestionsGet200ResponseDataQuestionsInnerProductDetails.md)
- [ApiV1QuestionsPatch200Response](docs/Model/ApiV1QuestionsPatch200Response.md)
- [ApiV1QuestionsPatchRequest](docs/Model/ApiV1QuestionsPatchRequest.md)
- [ApiV1QuestionsPatchRequestOneOf](docs/Model/ApiV1QuestionsPatchRequestOneOf.md)
- [ApiV1QuestionsPatchRequestOneOf1](docs/Model/ApiV1QuestionsPatchRequestOneOf1.md)
- [ApiV1QuestionsPatchRequestOneOf1Answer](docs/Model/ApiV1QuestionsPatchRequestOneOf1Answer.md)
- [ApiV1QuestionsPatchRequestOneOf2](docs/Model/ApiV1QuestionsPatchRequestOneOf2.md)
- [ApiV1QuestionsProductsRatingGet200Response](docs/Model/ApiV1QuestionsProductsRatingGet200Response.md)
- [ApiV1QuestionsProductsRatingGet200ResponseData](docs/Model/ApiV1QuestionsProductsRatingGet200ResponseData.md)
- [ApiV1QuestionsProductsRatingGet200ResponseDataProductsInner](docs/Model/ApiV1QuestionsProductsRatingGet200ResponseDataProductsInner.md)
- [ApiV1QuestionsReportGet200Response](docs/Model/ApiV1QuestionsReportGet200Response.md)
- [ApiV1QuestionsReportGet200ResponseData](docs/Model/ApiV1QuestionsReportGet200ResponseData.md)
- [ApiV1SetPostRequestInner](docs/Model/ApiV1SetPostRequestInner.md)
- [ApiV1TemplatesDelete200Response](docs/Model/ApiV1TemplatesDelete200Response.md)
- [ApiV1TemplatesDeleteRequest](docs/Model/ApiV1TemplatesDeleteRequest.md)
- [ApiV1TemplatesGet200Response](docs/Model/ApiV1TemplatesGet200Response.md)
- [ApiV1TemplatesPatchRequest](docs/Model/ApiV1TemplatesPatchRequest.md)
- [ApiV1TemplatesPost200Response](docs/Model/ApiV1TemplatesPost200Response.md)
- [ApiV1TemplatesPostRequest](docs/Model/ApiV1TemplatesPostRequest.md)
- [ApiV3FilesOrdersExternalStickersPost200Response](docs/Model/ApiV3FilesOrdersExternalStickersPost200Response.md)
- [ApiV3FilesOrdersExternalStickersPost200ResponseStickersInner](docs/Model/ApiV3FilesOrdersExternalStickersPost200ResponseStickersInner.md)
- [ApiV3OrdersGet200Response](docs/Model/ApiV3OrdersGet200Response.md)
- [ApiV3OrdersNewGet200Response](docs/Model/ApiV3OrdersNewGet200Response.md)
- [ApiV3OrdersOrderIdMetaGet200Response](docs/Model/ApiV3OrdersOrderIdMetaGet200Response.md)
- [ApiV3OrdersOrderIdMetaGtinPutRequest](docs/Model/ApiV3OrdersOrderIdMetaGtinPutRequest.md)
- [ApiV3OrdersOrderIdMetaImeiPutRequest](docs/Model/ApiV3OrdersOrderIdMetaImeiPutRequest.md)
- [ApiV3OrdersOrderIdMetaSgtinPostRequest](docs/Model/ApiV3OrdersOrderIdMetaSgtinPostRequest.md)
- [ApiV3OrdersOrderIdMetaSgtinPostRequestSgtinInner](docs/Model/ApiV3OrdersOrderIdMetaSgtinPostRequestSgtinInner.md)
- [ApiV3OrdersOrderIdMetaUinPutRequest](docs/Model/ApiV3OrdersOrderIdMetaUinPutRequest.md)
- [ApiV3OrdersStatusPost200Response](docs/Model/ApiV3OrdersStatusPost200Response.md)
- [ApiV3OrdersStatusPost200ResponseOrdersInner](docs/Model/ApiV3OrdersStatusPost200ResponseOrdersInner.md)
- [ApiV3OrdersStatusPostRequest](docs/Model/ApiV3OrdersStatusPostRequest.md)
- [ApiV3OrdersStickersPost200Response](docs/Model/ApiV3OrdersStickersPost200Response.md)
- [ApiV3OrdersStickersPost200ResponseStickersInner](docs/Model/ApiV3OrdersStickersPost200ResponseStickersInner.md)
- [ApiV3OrdersStickersPostRequest](docs/Model/ApiV3OrdersStickersPostRequest.md)
- [ApiV3PassesPassIdPutRequest](docs/Model/ApiV3PassesPassIdPutRequest.md)
- [ApiV3PassesPost201Response](docs/Model/ApiV3PassesPost201Response.md)
- [ApiV3PassesPostRequest](docs/Model/ApiV3PassesPostRequest.md)
- [ApiV3StocksWarehouseIdDeleteRequest](docs/Model/ApiV3StocksWarehouseIdDeleteRequest.md)
- [ApiV3StocksWarehouseIdPost200Response](docs/Model/ApiV3StocksWarehouseIdPost200Response.md)
- [ApiV3StocksWarehouseIdPost200ResponseStocksInner](docs/Model/ApiV3StocksWarehouseIdPost200ResponseStocksInner.md)
- [ApiV3StocksWarehouseIdPostRequest](docs/Model/ApiV3StocksWarehouseIdPostRequest.md)
- [ApiV3StocksWarehouseIdPutRequest](docs/Model/ApiV3StocksWarehouseIdPutRequest.md)
- [ApiV3StocksWarehouseIdPutRequestStocksInner](docs/Model/ApiV3StocksWarehouseIdPutRequestStocksInner.md)
- [ApiV3SuppliesGet200Response](docs/Model/ApiV3SuppliesGet200Response.md)
- [ApiV3SuppliesPost201Response](docs/Model/ApiV3SuppliesPost201Response.md)
- [ApiV3SuppliesPostRequest](docs/Model/ApiV3SuppliesPostRequest.md)
- [ApiV3SuppliesSupplyIdBarcodeGet200Response](docs/Model/ApiV3SuppliesSupplyIdBarcodeGet200Response.md)
- [ApiV3SuppliesSupplyIdOrdersGet200Response](docs/Model/ApiV3SuppliesSupplyIdOrdersGet200Response.md)
- [ApiV3SuppliesSupplyIdTrbxDeleteRequest](docs/Model/ApiV3SuppliesSupplyIdTrbxDeleteRequest.md)
- [ApiV3SuppliesSupplyIdTrbxGet200Response](docs/Model/ApiV3SuppliesSupplyIdTrbxGet200Response.md)
- [ApiV3SuppliesSupplyIdTrbxPost201Response](docs/Model/ApiV3SuppliesSupplyIdTrbxPost201Response.md)
- [ApiV3SuppliesSupplyIdTrbxPostRequest](docs/Model/ApiV3SuppliesSupplyIdTrbxPostRequest.md)
- [ApiV3SuppliesSupplyIdTrbxStickersPost200Response](docs/Model/ApiV3SuppliesSupplyIdTrbxStickersPost200Response.md)
- [ApiV3SuppliesSupplyIdTrbxStickersPostRequest](docs/Model/ApiV3SuppliesSupplyIdTrbxStickersPostRequest.md)
- [ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest](docs/Model/ApiV3SuppliesSupplyIdTrbxTrbxIdPatchRequest.md)
- [ApiV3WarehousesPost201Response](docs/Model/ApiV3WarehousesPost201Response.md)
- [ApiV3WarehousesPostRequest](docs/Model/ApiV3WarehousesPostRequest.md)
- [ApiV3WarehousesWarehouseIdPutRequest](docs/Model/ApiV3WarehousesWarehouseIdPutRequest.md)
- [ContentV1BarcodesPost200Response](docs/Model/ContentV1BarcodesPost200Response.md)
- [ContentV1BarcodesPostRequest](docs/Model/ContentV1BarcodesPostRequest.md)
- [ContentV1CardsCursorListPost200Response](docs/Model/ContentV1CardsCursorListPost200Response.md)
- [ContentV1CardsCursorListPost200ResponseData](docs/Model/ContentV1CardsCursorListPost200ResponseData.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner](docs/Model/ContentV1CardsCursorListPost200ResponseDataCardsInnerSizesInner.md)
- [ContentV1CardsCursorListPost200ResponseDataCursor](docs/Model/ContentV1CardsCursorListPost200ResponseDataCursor.md)
- [ContentV1CardsCursorListPostRequest](docs/Model/ContentV1CardsCursorListPostRequest.md)
- [ContentV1CardsCursorListPostRequestSort](docs/Model/ContentV1CardsCursorListPostRequestSort.md)
- [ContentV1CardsCursorListPostRequestSortCursor](docs/Model/ContentV1CardsCursorListPostRequestSortCursor.md)
- [ContentV1CardsCursorListPostRequestSortFilter](docs/Model/ContentV1CardsCursorListPostRequestSortFilter.md)
- [ContentV1CardsCursorListPostRequestSortSort](docs/Model/ContentV1CardsCursorListPostRequestSortSort.md)
- [ContentV1CardsErrorListGet200Response](docs/Model/ContentV1CardsErrorListGet200Response.md)
- [ContentV1CardsErrorListGet200ResponseDataInner](docs/Model/ContentV1CardsErrorListGet200ResponseDataInner.md)
- [ContentV1CardsFilterPost200Response](docs/Model/ContentV1CardsFilterPost200Response.md)
- [ContentV1CardsFilterPost200ResponseDataInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInner.md)
- [ContentV1CardsFilterPost200ResponseDataInnerSizesInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerSizesInner.md)
- [ContentV1CardsFilterPost200ResponseDataInnerTagsInner](docs/Model/ContentV1CardsFilterPost200ResponseDataInnerTagsInner.md)
- [ContentV1CardsFilterPostRequest](docs/Model/ContentV1CardsFilterPostRequest.md)
- [ContentV1CardsLimitsGet200Response](docs/Model/ContentV1CardsLimitsGet200Response.md)
- [ContentV1CardsLimitsGet200ResponseData](docs/Model/ContentV1CardsLimitsGet200ResponseData.md)
- [ContentV1CardsMoveNmPost400Response](docs/Model/ContentV1CardsMoveNmPost400Response.md)
- [ContentV1CardsMoveNmPostRequest](docs/Model/ContentV1CardsMoveNmPostRequest.md)
- [ContentV1CardsTrashListPost200Response](docs/Model/ContentV1CardsTrashListPost200Response.md)
- [ContentV1CardsTrashListPost200ResponseData](docs/Model/ContentV1CardsTrashListPost200ResponseData.md)
- [ContentV1CardsTrashListPost200ResponseDataCardsInner](docs/Model/ContentV1CardsTrashListPost200ResponseDataCardsInner.md)
- [ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner](docs/Model/ContentV1CardsTrashListPost200ResponseDataCardsInnerSizesInner.md)
- [ContentV1CardsTrashListPost200ResponseDataCursor](docs/Model/ContentV1CardsTrashListPost200ResponseDataCursor.md)
- [ContentV1CardsTrashListPostRequest](docs/Model/ContentV1CardsTrashListPostRequest.md)
- [ContentV1CardsTrashListPostRequestSort](docs/Model/ContentV1CardsTrashListPostRequestSort.md)
- [ContentV1CardsUpdatePost200Response](docs/Model/ContentV1CardsUpdatePost200Response.md)
- [ContentV1CardsUpdatePostRequestInner](docs/Model/ContentV1CardsUpdatePostRequestInner.md)
- [ContentV1CardsUpdatePostRequestInnerSizesInner](docs/Model/ContentV1CardsUpdatePostRequestInnerSizesInner.md)
- [ContentV1CardsUploadAddPostRequest](docs/Model/ContentV1CardsUploadAddPostRequest.md)
- [ContentV1CardsUploadAddPostRequestCardsInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInner.md)
- [ContentV1CardsUploadAddPostRequestCardsInnerSizesInner](docs/Model/ContentV1CardsUploadAddPostRequestCardsInnerSizesInner.md)
- [ContentV1DirectoryBrandsGet200Response](docs/Model/ContentV1DirectoryBrandsGet200Response.md)
- [ContentV1DirectoryColorsGet200Response](docs/Model/ContentV1DirectoryColorsGet200Response.md)
- [ContentV1DirectoryColorsGet200ResponseDataInner](docs/Model/ContentV1DirectoryColorsGet200ResponseDataInner.md)
- [ContentV1DirectoryCountriesGet200Response](docs/Model/ContentV1DirectoryCountriesGet200Response.md)
- [ContentV1DirectoryCountriesGet200ResponseDataInner](docs/Model/ContentV1DirectoryCountriesGet200ResponseDataInner.md)
- [ContentV1DirectoryKindsGet200Response](docs/Model/ContentV1DirectoryKindsGet200Response.md)
- [ContentV1DirectorySeasonsGet200Response](docs/Model/ContentV1DirectorySeasonsGet200Response.md)
- [ContentV1DirectoryTnvedGet200Response](docs/Model/ContentV1DirectoryTnvedGet200Response.md)
- [ContentV1DirectoryTnvedGet200ResponseDataInner](docs/Model/ContentV1DirectoryTnvedGet200ResponseDataInner.md)
- [ContentV1MediaSavePostRequest](docs/Model/ContentV1MediaSavePostRequest.md)
- [ContentV1ObjectAllGet200Response](docs/Model/ContentV1ObjectAllGet200Response.md)
- [ContentV1ObjectAllGet200ResponseDataInner](docs/Model/ContentV1ObjectAllGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsListFilterGet200Response](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200Response.md)
- [ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsListFilterGet200ResponseDataInner.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200Response](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200Response.md)
- [ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner](docs/Model/ContentV1ObjectCharacteristicsObjectNameGet200ResponseDataInner.md)
- [ContentV1ObjectParentAllGet200Response](docs/Model/ContentV1ObjectParentAllGet200Response.md)
- [ContentV1ObjectParentAllGet200ResponseDataInner](docs/Model/ContentV1ObjectParentAllGet200ResponseDataInner.md)
- [ContentV1TagIdDelete200Response](docs/Model/ContentV1TagIdDelete200Response.md)
- [ContentV1TagIdDelete400Response](docs/Model/ContentV1TagIdDelete400Response.md)
- [ContentV1TagIdPatch200Response](docs/Model/ContentV1TagIdPatch200Response.md)
- [ContentV1TagIdPatch400Response](docs/Model/ContentV1TagIdPatch400Response.md)
- [ContentV1TagIdPatchRequest](docs/Model/ContentV1TagIdPatchRequest.md)
- [ContentV1TagNomenclatureLinkPostRequest](docs/Model/ContentV1TagNomenclatureLinkPostRequest.md)
- [ContentV1TagPost400Response](docs/Model/ContentV1TagPost400Response.md)
- [ContentV1TagPostRequest](docs/Model/ContentV1TagPostRequest.md)
- [ContentV1TagsGet200Response](docs/Model/ContentV1TagsGet200Response.md)
- [ContentV1TagsGet200ResponseData](docs/Model/ContentV1TagsGet200ResponseData.md)
- [CreatingCardInnerInner](docs/Model/CreatingCardInnerInner.md)
- [CreatingCardInnerInnerSizesInner](docs/Model/CreatingCardInnerInnerSizesInner.md)
- [DetailReportItem](docs/Model/DetailReportItem.md)
- [Error](docs/Model/Error.md)
- [IncomesItem](docs/Model/IncomesItem.md)
- [Meta](docs/Model/Meta.md)
- [NmReportDetailHistoryRequest](docs/Model/NmReportDetailHistoryRequest.md)
- [NmReportDetailHistoryRequestPeriod](docs/Model/NmReportDetailHistoryRequestPeriod.md)
- [NmReportDetailHistoryResponse](docs/Model/NmReportDetailHistoryResponse.md)
- [NmReportDetailHistoryResponseDataInner](docs/Model/NmReportDetailHistoryResponseDataInner.md)
- [NmReportDetailHistoryResponseDataInnerHistoryInner](docs/Model/NmReportDetailHistoryResponseDataInnerHistoryInner.md)
- [NmReportDetailRequest](docs/Model/NmReportDetailRequest.md)
- [NmReportDetailRequestOrderBy](docs/Model/NmReportDetailRequestOrderBy.md)
- [NmReportDetailRequestPeriod](docs/Model/NmReportDetailRequestPeriod.md)
- [NmReportDetailResponse](docs/Model/NmReportDetailResponse.md)
- [NmReportDetailResponseAdditionalErrorsInner](docs/Model/NmReportDetailResponseAdditionalErrorsInner.md)
- [NmReportDetailResponseData](docs/Model/NmReportDetailResponseData.md)
- [NmReportDetailResponseDataCardsInner](docs/Model/NmReportDetailResponseDataCardsInner.md)
- [NmReportDetailResponseDataCardsInnerObject](docs/Model/NmReportDetailResponseDataCardsInnerObject.md)
- [NmReportDetailResponseDataCardsInnerStatistics](docs/Model/NmReportDetailResponseDataCardsInnerStatistics.md)
- [NmReportDetailResponseDataCardsInnerStatisticsPeriodComparison](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsPeriodComparison.md)
- [NmReportDetailResponseDataCardsInnerStatisticsPeriodComparisonConversions](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsPeriodComparisonConversions.md)
- [NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriod](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriod.md)
- [NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriodConversions](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriodConversions.md)
- [NmReportDetailResponseDataCardsInnerStatisticsSelectedPeriod](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsSelectedPeriod.md)
- [NmReportDetailResponseDataCardsInnerStatisticsSelectedPeriodConversions](docs/Model/NmReportDetailResponseDataCardsInnerStatisticsSelectedPeriodConversions.md)
- [NmReportDetailResponseDataCardsInnerStocks](docs/Model/NmReportDetailResponseDataCardsInnerStocks.md)
- [NmReportDetailResponseDataCardsInnerTagsInner](docs/Model/NmReportDetailResponseDataCardsInnerTagsInner.md)
- [NmReportGroupedHistoryRequest](docs/Model/NmReportGroupedHistoryRequest.md)
- [NmReportGroupedHistoryRequestPeriod](docs/Model/NmReportGroupedHistoryRequestPeriod.md)
- [NmReportGroupedHistoryResponse](docs/Model/NmReportGroupedHistoryResponse.md)
- [NmReportGroupedHistoryResponseDataInner](docs/Model/NmReportGroupedHistoryResponseDataInner.md)
- [NmReportGroupedHistoryResponseDataInnerHistoryInner](docs/Model/NmReportGroupedHistoryResponseDataInnerHistoryInner.md)
- [NmReportGroupedHistoryResponseDataInnerObject](docs/Model/NmReportGroupedHistoryResponseDataInnerObject.md)
- [NmReportGroupedHistoryResponseDataInnerTag](docs/Model/NmReportGroupedHistoryResponseDataInnerTag.md)
- [NmReportGroupedRequest](docs/Model/NmReportGroupedRequest.md)
- [NmReportGroupedRequestOrderBy](docs/Model/NmReportGroupedRequestOrderBy.md)
- [NmReportGroupedRequestPeriod](docs/Model/NmReportGroupedRequestPeriod.md)
- [NmReportGroupedResponse](docs/Model/NmReportGroupedResponse.md)
- [NmReportGroupedResponseData](docs/Model/NmReportGroupedResponseData.md)
- [NmReportGroupedResponseDataGroupsInner](docs/Model/NmReportGroupedResponseDataGroupsInner.md)
- [NmReportGroupedResponseDataGroupsInnerObject](docs/Model/NmReportGroupedResponseDataGroupsInnerObject.md)
- [NmReportGroupedResponseDataGroupsInnerStatistics](docs/Model/NmReportGroupedResponseDataGroupsInnerStatistics.md)
- [NmReportGroupedResponseDataGroupsInnerStatisticsPeriodComparison](docs/Model/NmReportGroupedResponseDataGroupsInnerStatisticsPeriodComparison.md)
- [NmReportGroupedResponseDataGroupsInnerStatisticsPeriodComparisonConversions](docs/Model/NmReportGroupedResponseDataGroupsInnerStatisticsPeriodComparisonConversions.md)
- [NmReportGroupedResponseDataGroupsInnerStatisticsPreviousPeriod](docs/Model/NmReportGroupedResponseDataGroupsInnerStatisticsPreviousPeriod.md)
- [NmReportGroupedResponseDataGroupsInnerStatisticsPreviousPeriodConversions](docs/Model/NmReportGroupedResponseDataGroupsInnerStatisticsPreviousPeriodConversions.md)
- [NmReportGroupedResponseDataGroupsInnerStatisticsSelectedPeriod](docs/Model/NmReportGroupedResponseDataGroupsInnerStatisticsSelectedPeriod.md)
- [Office](docs/Model/Office.md)
- [Order](docs/Model/Order.md)
- [OrderAddress](docs/Model/OrderAddress.md)
- [OrderUser](docs/Model/OrderUser.md)
- [OrdersItem](docs/Model/OrdersItem.md)
- [Pass](docs/Model/Pass.md)
- [PassOffice](docs/Model/PassOffice.md)
- [PatchDelRespOK](docs/Model/PatchDelRespOK.md)
- [PostTemplateOK](docs/Model/PostTemplateOK.md)
- [PostTemplateOKData](docs/Model/PostTemplateOKData.md)
- [ProductRating](docs/Model/ProductRating.md)
- [PublicApiV1InfoGet200Response](docs/Model/PublicApiV1InfoGet200Response.md)
- [PublicApiV1PricesPost200Response](docs/Model/PublicApiV1PricesPost200Response.md)
- [PublicApiV1PricesPost400Response](docs/Model/PublicApiV1PricesPost400Response.md)
- [PublicApiV1PricesPostRequestInner](docs/Model/PublicApiV1PricesPostRequestInner.md)
- [PublicApiV1RevokeDiscountsPost200Response](docs/Model/PublicApiV1RevokeDiscountsPost200Response.md)
- [PublicApiV1UpdateDiscountsPostRequestInner](docs/Model/PublicApiV1UpdateDiscountsPostRequestInner.md)
- [PublicApiV1UpdatePromocodesPostRequestInner](docs/Model/PublicApiV1UpdatePromocodesPostRequestInner.md)
- [RequestMoveNmsImtConn](docs/Model/RequestMoveNmsImtConn.md)
- [RequestMoveNmsImtDisconn](docs/Model/RequestMoveNmsImtDisconn.md)
- [Response200](docs/Model/Response200.md)
- [Response200Data](docs/Model/Response200Data.md)
- [Response200DataTemplatesInner](docs/Model/Response200DataTemplatesInner.md)
- [Response429](docs/Model/Response429.md)
- [ResponseAdvError1](docs/Model/ResponseAdvError1.md)
- [ResponseAdvert401](docs/Model/ResponseAdvert401.md)
- [ResponseBodyContentError400](docs/Model/ResponseBodyContentError400.md)
- [ResponseBodyContentError400AdditionalErrors](docs/Model/ResponseBodyContentError400AdditionalErrors.md)
- [ResponseBodyContentError403](docs/Model/ResponseBodyContentError403.md)
- [ResponseCardCreate](docs/Model/ResponseCardCreate.md)
- [ResponseCardCreateAdditionalErrors](docs/Model/ResponseCardCreateAdditionalErrors.md)
- [ResponseCardCreateAdditionalErrorsOneOf](docs/Model/ResponseCardCreateAdditionalErrorsOneOf.md)
- [ResponseContentError1](docs/Model/ResponseContentError1.md)
- [ResponseContentError1AdditionalErrors](docs/Model/ResponseContentError1AdditionalErrors.md)
- [ResponseContentError4](docs/Model/ResponseContentError4.md)
- [ResponseContentError4AdditionalErrors](docs/Model/ResponseContentError4AdditionalErrors.md)
- [ResponseContentError5](docs/Model/ResponseContentError5.md)
- [ResponseContentError5AdditionalErrors](docs/Model/ResponseContentError5AdditionalErrors.md)
- [ResponseContentError6](docs/Model/ResponseContentError6.md)
- [ResponseError](docs/Model/ResponseError.md)
- [ResponseErrorExist](docs/Model/ResponseErrorExist.md)
- [ResponseErrorStatistics](docs/Model/ResponseErrorStatistics.md)
- [ResponseErrorTemplate](docs/Model/ResponseErrorTemplate.md)
- [ResponseFeadbackInner](docs/Model/ResponseFeadbackInner.md)
- [ResponseFeadbackInnerAnswer](docs/Model/ResponseFeadbackInnerAnswer.md)
- [ResponseIncorrectDate](docs/Model/ResponseIncorrectDate.md)
- [ResponseInfoAdvert](docs/Model/ResponseInfoAdvert.md)
- [ResponseInfoAdvertParamsInner](docs/Model/ResponseInfoAdvertParamsInner.md)
- [ResponseInfoAdvertParamsInnerNmsInner](docs/Model/ResponseInfoAdvertParamsInnerNmsInner.md)
- [ResponseInfoAdvertType8](docs/Model/ResponseInfoAdvertType8.md)
- [ResponseInfoAdvertType8AutoParams](docs/Model/ResponseInfoAdvertType8AutoParams.md)
- [ResponseInfoAdvertType8AutoParamsActive](docs/Model/ResponseInfoAdvertType8AutoParamsActive.md)
- [ResponseInfoAdvertType8AutoParamsMenusInner](docs/Model/ResponseInfoAdvertType8AutoParamsMenusInner.md)
- [ResponseInfoAdvertType8AutoParamsSetsInner](docs/Model/ResponseInfoAdvertType8AutoParamsSetsInner.md)
- [ResponseInfoAdvertType8AutoParamsSubject](docs/Model/ResponseInfoAdvertType8AutoParamsSubject.md)
- [ResponseInfoAdvertType9](docs/Model/ResponseInfoAdvertType9.md)
- [ResponseInfoAdvertType9UnitedParamsInner](docs/Model/ResponseInfoAdvertType9UnitedParamsInner.md)
- [ResponseInfoAdvertType9UnitedParamsInnerMenusInner](docs/Model/ResponseInfoAdvertType9UnitedParamsInnerMenusInner.md)
- [ResponseInfoAdvertType9UnitedParamsInnerSubject](docs/Model/ResponseInfoAdvertType9UnitedParamsInnerSubject.md)
- [ResponsefeedbackErr](docs/Model/ResponsefeedbackErr.md)
- [SalesItem](docs/Model/SalesItem.md)
- [StocksItem](docs/Model/StocksItem.md)
- [Successful](docs/Model/Successful.md)
- [Supply](docs/Model/Supply.md)
- [SupplyOrder](docs/Model/SupplyOrder.md)
- [SupplyTrbx](docs/Model/SupplyTrbx.md)
- [TrbxStickers](docs/Model/TrbxStickers.md)
- [Warehouse](docs/Model/Warehouse.md)

## Authorization

Authentication schemes defined for the API:
### HeaderApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.16`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
