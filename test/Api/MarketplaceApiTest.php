<?php
/**
 * MarketplaceApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API продавца
 *
 * # Общее описание <style> .langChange {   text-align: left;   padding: 2px 222px 2px 18px; } </style> <style> .new {   display: inline-block;   padding: 2px 8px;   margin: 0;   background-color: #ffa500;   color: #ffffff;   font-size: 13px;   vertical-align: middle;   line-height: 1.6;   border-radius: 4px;   font-weight: 600;   font-size: 12px; } </style> <style> .newM {   padding: 5px 10px;   display: inline-block;   background-color: #ffa500;   color: #ffffff;   cursor: pointer;   text-align: center;   outline: none;   margin: 0 5px 5px 5px;   #border: 1px solid #07090b;   border-radius: 5px;   min-width: 60px;   font-size: 0.9em;   font-weight: bold; } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)  <ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>  <br> Для ручной провеПродвижение /и API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul> <br>  ## Поддержка Техническая поддержка осуществляется через диалоги в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> <br> <br>  ## Авторизация Авторизация осуществляется по токенам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api).   <br>  <br>  Существует три типа токенов:   <ol>     <li>Стандартный. Используется для работы с методами из разделов: Цены, Промокоды и скидки, Контент, Marketplace, Рекомендации, Отзывы, Вопросы.</li>     <li>Статистика. Используется для работы с методами из раздела Статистика.</li>     <li>Продвижение. Используется для работы с методами из раздела Продвижение.</li>   </ol>    Обратите внимание, что токен отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный токен следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <br> <br> Обращаем ваше внимание, что интеграции с Порталом Продавца, не использующие Публичное API, противоречат пункту 9.7.6 оферты. <br> Тем не менее, при отсутствии прямой угрозы утечки данных из личного кабинета продавца Wildberries заранее уведомит продавца о запланированной блокировке, связанной с этим пунктом, давая возможность отключить интеграцию. <br> <br> <br> ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul> <br> ## Release Notes <p>Для просмотра обновлений перейдите по <span><a href=\"./releasenotes/index.html\" target=\"_blank\">ссылке</a></span>.</p>
 *
 * The version of the OpenAPI document: 2.16
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * MarketplaceApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MarketplaceApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for apiV3FilesOrdersExternalStickersPost
     *
     * Получить список ссылок на этикетки для сборочных заданий, которые требуются при кроссбордере.
     *
     */
    public function testApiV3FilesOrdersExternalStickersPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OfficesGet
     *
     * Получить список складов WB.
     *
     */
    public function testApiV3OfficesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersGet
     *
     * Получить информацию по сборочным заданиям.
     *
     */
    public function testApiV3OrdersGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersNewGet
     *
     * Получить список новых сборочных заданий.
     *
     */
    public function testApiV3OrdersNewGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdCancelPatch
     *
     * Отменить сборочное задание.
     *
     */
    public function testApiV3OrdersOrderIdCancelPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaDelete
     *
     * Удалить метаданные сборочного задания.
     *
     */
    public function testApiV3OrdersOrderIdMetaDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaGet
     *
     * Получить метаданные сборочного задания.
     *
     */
    public function testApiV3OrdersOrderIdMetaGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaGtinPut
     *
     * Закрепить за сборочным заданием GTIN.
     *
     */
    public function testApiV3OrdersOrderIdMetaGtinPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaImeiPut
     *
     * Закрепить за сборочным заданием IMEI.
     *
     */
    public function testApiV3OrdersOrderIdMetaImeiPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaSgtinPost
     *
     * Закрепить за сборочным заданием КиЗ (маркировку Честного знака).
     *
     */
    public function testApiV3OrdersOrderIdMetaSgtinPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersOrderIdMetaUinPut
     *
     * Закрепить за сборочным заданием УИН (уникальный идентификационный номер).
     *
     */
    public function testApiV3OrdersOrderIdMetaUinPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersStatusPost
     *
     * Получить статусы сборочных заданий.
     *
     */
    public function testApiV3OrdersStatusPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3OrdersStickersPost
     *
     * Получить этикетки для сборочных заданий.
     *
     */
    public function testApiV3OrdersStickersPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3PassesGet
     *
     * Получить список пропусков.
     *
     */
    public function testApiV3PassesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3PassesOfficesGet
     *
     * Получить список складов, для которых требуется пропуск.
     *
     */
    public function testApiV3PassesOfficesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3PassesPassIdDelete
     *
     * Удалить пропуск.
     *
     */
    public function testApiV3PassesPassIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3PassesPassIdPut
     *
     * Обновить пропуск.
     *
     */
    public function testApiV3PassesPassIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3PassesPost
     *
     * Создать пропуск.
     *
     */
    public function testApiV3PassesPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3StocksWarehouseIdDelete
     *
     * Удалить остатки товаров.
     *
     */
    public function testApiV3StocksWarehouseIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3StocksWarehouseIdPost
     *
     * Получить остатки товаров.
     *
     */
    public function testApiV3StocksWarehouseIdPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3StocksWarehouseIdPut
     *
     * Обновить остатки товаров.
     *
     */
    public function testApiV3StocksWarehouseIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesGet
     *
     * Получить список поставок.
     *
     */
    public function testApiV3SuppliesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesPost
     *
     * Создать новую поставку.
     *
     */
    public function testApiV3SuppliesPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdBarcodeGet
     *
     * Получить QR поставки.
     *
     */
    public function testApiV3SuppliesSupplyIdBarcodeGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdDelete
     *
     * Удалить поставку.
     *
     */
    public function testApiV3SuppliesSupplyIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdDeliverPatch
     *
     * Передать поставку в доставку.
     *
     */
    public function testApiV3SuppliesSupplyIdDeliverPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdGet
     *
     * Получить информацию о поставке.
     *
     */
    public function testApiV3SuppliesSupplyIdGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdOrdersGet
     *
     * Получить сборочные задания в поставке.
     *
     */
    public function testApiV3SuppliesSupplyIdOrdersGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdOrdersOrderIdPatch
     *
     * Добавить к поставке сборочное задание.
     *
     */
    public function testApiV3SuppliesSupplyIdOrdersOrderIdPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxDelete
     *
     * Удалить короба из поставки.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxGet
     *
     * Получить список коробов поставки.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxPost
     *
     * Добавить короба к поставке.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxStickersPost
     *
     * Получить стикеры коробов поставки.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxStickersPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete
     *
     * Удалить заказ из короба.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxTrbxIdOrdersOrderIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3SuppliesSupplyIdTrbxTrbxIdPatch
     *
     * Добавить заказы к коробу.
     *
     */
    public function testApiV3SuppliesSupplyIdTrbxTrbxIdPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3WarehousesGet
     *
     * Получить список складов продавца.
     *
     */
    public function testApiV3WarehousesGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3WarehousesPost
     *
     * Создать склад продавца.
     *
     */
    public function testApiV3WarehousesPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3WarehousesWarehouseIdDelete
     *
     * Удалить склад продавца.
     *
     */
    public function testApiV3WarehousesWarehouseIdDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV3WarehousesWarehouseIdPut
     *
     * Обновить склад.
     *
     */
    public function testApiV3WarehousesWarehouseIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}