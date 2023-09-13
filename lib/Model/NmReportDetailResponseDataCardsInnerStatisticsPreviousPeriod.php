<?php
/**
 * NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriod
 *
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
 * The version of the OpenAPI document: 2.17
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriod Class Doc Comment
 *
 * @category Class
 * @description Статистика за предыдущие 30 дней
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NmReportDetailResponse_data_cards_inner_statistics_previousPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'begin' => 'string',
        'end' => 'string',
        'open_card_count' => 'int',
        'add_to_cart_count' => 'int',
        'orders_count' => 'int',
        'orders_sum_rub' => 'int',
        'buyouts_count' => 'int',
        'buyouts_sum_rub' => 'int',
        'cancel_count' => 'int',
        'cancel_sum_rub' => 'int',
        'avg_price_rub' => 'int',
        'avg_orders_count_per_day' => 'float',
        'conversions' => '\OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriodConversions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'begin' => null,
        'end' => null,
        'open_card_count' => 'int32',
        'add_to_cart_count' => 'int32',
        'orders_count' => 'int32',
        'orders_sum_rub' => 'int32',
        'buyouts_count' => 'int32',
        'buyouts_sum_rub' => 'int32',
        'cancel_count' => 'int32',
        'cancel_sum_rub' => 'int32',
        'avg_price_rub' => 'int32',
        'avg_orders_count_per_day' => null,
        'conversions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'begin' => false,
		'end' => false,
		'open_card_count' => false,
		'add_to_cart_count' => false,
		'orders_count' => false,
		'orders_sum_rub' => false,
		'buyouts_count' => false,
		'buyouts_sum_rub' => false,
		'cancel_count' => false,
		'cancel_sum_rub' => false,
		'avg_price_rub' => false,
		'avg_orders_count_per_day' => false,
		'conversions' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'begin' => 'begin',
        'end' => 'end',
        'open_card_count' => 'openCardCount',
        'add_to_cart_count' => 'addToCartCount',
        'orders_count' => 'ordersCount',
        'orders_sum_rub' => 'ordersSumRub',
        'buyouts_count' => 'buyoutsCount',
        'buyouts_sum_rub' => 'buyoutsSumRub',
        'cancel_count' => 'cancelCount',
        'cancel_sum_rub' => 'cancelSumRub',
        'avg_price_rub' => 'avgPriceRub',
        'avg_orders_count_per_day' => 'avgOrdersCountPerDay',
        'conversions' => 'conversions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin' => 'setBegin',
        'end' => 'setEnd',
        'open_card_count' => 'setOpenCardCount',
        'add_to_cart_count' => 'setAddToCartCount',
        'orders_count' => 'setOrdersCount',
        'orders_sum_rub' => 'setOrdersSumRub',
        'buyouts_count' => 'setBuyoutsCount',
        'buyouts_sum_rub' => 'setBuyoutsSumRub',
        'cancel_count' => 'setCancelCount',
        'cancel_sum_rub' => 'setCancelSumRub',
        'avg_price_rub' => 'setAvgPriceRub',
        'avg_orders_count_per_day' => 'setAvgOrdersCountPerDay',
        'conversions' => 'setConversions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin' => 'getBegin',
        'end' => 'getEnd',
        'open_card_count' => 'getOpenCardCount',
        'add_to_cart_count' => 'getAddToCartCount',
        'orders_count' => 'getOrdersCount',
        'orders_sum_rub' => 'getOrdersSumRub',
        'buyouts_count' => 'getBuyoutsCount',
        'buyouts_sum_rub' => 'getBuyoutsSumRub',
        'cancel_count' => 'getCancelCount',
        'cancel_sum_rub' => 'getCancelSumRub',
        'avg_price_rub' => 'getAvgPriceRub',
        'avg_orders_count_per_day' => 'getAvgOrdersCountPerDay',
        'conversions' => 'getConversions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('begin', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('open_card_count', $data ?? [], null);
        $this->setIfExists('add_to_cart_count', $data ?? [], null);
        $this->setIfExists('orders_count', $data ?? [], null);
        $this->setIfExists('orders_sum_rub', $data ?? [], null);
        $this->setIfExists('buyouts_count', $data ?? [], null);
        $this->setIfExists('buyouts_sum_rub', $data ?? [], null);
        $this->setIfExists('cancel_count', $data ?? [], null);
        $this->setIfExists('cancel_sum_rub', $data ?? [], null);
        $this->setIfExists('avg_price_rub', $data ?? [], null);
        $this->setIfExists('avg_orders_count_per_day', $data ?? [], null);
        $this->setIfExists('conversions', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets begin
     *
     * @return string|null
     */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
     * Sets begin
     *
     * @param string|null $begin Начало периода
     *
     * @return self
     */
    public function setBegin($begin)
    {
        if (is_null($begin)) {
            throw new \InvalidArgumentException('non-nullable begin cannot be null');
        }
        $this->container['begin'] = $begin;

        return $this;
    }

    /**
     * Gets end
     *
     * @return string|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param string|null $end Конец периода
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets open_card_count
     *
     * @return int|null
     */
    public function getOpenCardCount()
    {
        return $this->container['open_card_count'];
    }

    /**
     * Sets open_card_count
     *
     * @param int|null $open_card_count Количество переходов в карточку товара
     *
     * @return self
     */
    public function setOpenCardCount($open_card_count)
    {
        if (is_null($open_card_count)) {
            throw new \InvalidArgumentException('non-nullable open_card_count cannot be null');
        }
        $this->container['open_card_count'] = $open_card_count;

        return $this;
    }

    /**
     * Gets add_to_cart_count
     *
     * @return int|null
     */
    public function getAddToCartCount()
    {
        return $this->container['add_to_cart_count'];
    }

    /**
     * Sets add_to_cart_count
     *
     * @param int|null $add_to_cart_count Положили в корзину, штук
     *
     * @return self
     */
    public function setAddToCartCount($add_to_cart_count)
    {
        if (is_null($add_to_cart_count)) {
            throw new \InvalidArgumentException('non-nullable add_to_cart_count cannot be null');
        }
        $this->container['add_to_cart_count'] = $add_to_cart_count;

        return $this;
    }

    /**
     * Gets orders_count
     *
     * @return int|null
     */
    public function getOrdersCount()
    {
        return $this->container['orders_count'];
    }

    /**
     * Sets orders_count
     *
     * @param int|null $orders_count Заказали товаров, штук
     *
     * @return self
     */
    public function setOrdersCount($orders_count)
    {
        if (is_null($orders_count)) {
            throw new \InvalidArgumentException('non-nullable orders_count cannot be null');
        }
        $this->container['orders_count'] = $orders_count;

        return $this;
    }

    /**
     * Gets orders_sum_rub
     *
     * @return int|null
     */
    public function getOrdersSumRub()
    {
        return $this->container['orders_sum_rub'];
    }

    /**
     * Sets orders_sum_rub
     *
     * @param int|null $orders_sum_rub Заказали на сумму, руб.
     *
     * @return self
     */
    public function setOrdersSumRub($orders_sum_rub)
    {
        if (is_null($orders_sum_rub)) {
            throw new \InvalidArgumentException('non-nullable orders_sum_rub cannot be null');
        }
        $this->container['orders_sum_rub'] = $orders_sum_rub;

        return $this;
    }

    /**
     * Gets buyouts_count
     *
     * @return int|null
     */
    public function getBuyoutsCount()
    {
        return $this->container['buyouts_count'];
    }

    /**
     * Sets buyouts_count
     *
     * @param int|null $buyouts_count Выкупили товаров, шт.
     *
     * @return self
     */
    public function setBuyoutsCount($buyouts_count)
    {
        if (is_null($buyouts_count)) {
            throw new \InvalidArgumentException('non-nullable buyouts_count cannot be null');
        }
        $this->container['buyouts_count'] = $buyouts_count;

        return $this;
    }

    /**
     * Gets buyouts_sum_rub
     *
     * @return int|null
     */
    public function getBuyoutsSumRub()
    {
        return $this->container['buyouts_sum_rub'];
    }

    /**
     * Sets buyouts_sum_rub
     *
     * @param int|null $buyouts_sum_rub Выкупили на сумму, руб.
     *
     * @return self
     */
    public function setBuyoutsSumRub($buyouts_sum_rub)
    {
        if (is_null($buyouts_sum_rub)) {
            throw new \InvalidArgumentException('non-nullable buyouts_sum_rub cannot be null');
        }
        $this->container['buyouts_sum_rub'] = $buyouts_sum_rub;

        return $this;
    }

    /**
     * Gets cancel_count
     *
     * @return int|null
     */
    public function getCancelCount()
    {
        return $this->container['cancel_count'];
    }

    /**
     * Sets cancel_count
     *
     * @param int|null $cancel_count Отменили товаров, штук
     *
     * @return self
     */
    public function setCancelCount($cancel_count)
    {
        if (is_null($cancel_count)) {
            throw new \InvalidArgumentException('non-nullable cancel_count cannot be null');
        }
        $this->container['cancel_count'] = $cancel_count;

        return $this;
    }

    /**
     * Gets cancel_sum_rub
     *
     * @return int|null
     */
    public function getCancelSumRub()
    {
        return $this->container['cancel_sum_rub'];
    }

    /**
     * Sets cancel_sum_rub
     *
     * @param int|null $cancel_sum_rub Отменили на сумму, руб.
     *
     * @return self
     */
    public function setCancelSumRub($cancel_sum_rub)
    {
        if (is_null($cancel_sum_rub)) {
            throw new \InvalidArgumentException('non-nullable cancel_sum_rub cannot be null');
        }
        $this->container['cancel_sum_rub'] = $cancel_sum_rub;

        return $this;
    }

    /**
     * Gets avg_price_rub
     *
     * @return int|null
     */
    public function getAvgPriceRub()
    {
        return $this->container['avg_price_rub'];
    }

    /**
     * Sets avg_price_rub
     *
     * @param int|null $avg_price_rub Средняя цена, руб.
     *
     * @return self
     */
    public function setAvgPriceRub($avg_price_rub)
    {
        if (is_null($avg_price_rub)) {
            throw new \InvalidArgumentException('non-nullable avg_price_rub cannot be null');
        }
        $this->container['avg_price_rub'] = $avg_price_rub;

        return $this;
    }

    /**
     * Gets avg_orders_count_per_day
     *
     * @return float|null
     */
    public function getAvgOrdersCountPerDay()
    {
        return $this->container['avg_orders_count_per_day'];
    }

    /**
     * Sets avg_orders_count_per_day
     *
     * @param float|null $avg_orders_count_per_day Среднее количество заказов в день, шт.
     *
     * @return self
     */
    public function setAvgOrdersCountPerDay($avg_orders_count_per_day)
    {
        if (is_null($avg_orders_count_per_day)) {
            throw new \InvalidArgumentException('non-nullable avg_orders_count_per_day cannot be null');
        }
        $this->container['avg_orders_count_per_day'] = $avg_orders_count_per_day;

        return $this;
    }

    /**
     * Gets conversions
     *
     * @return \OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriodConversions|null
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     *
     * @param \OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPreviousPeriodConversions|null $conversions conversions
     *
     * @return self
     */
    public function setConversions($conversions)
    {
        if (is_null($conversions)) {
            throw new \InvalidArgumentException('non-nullable conversions cannot be null');
        }
        $this->container['conversions'] = $conversions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


