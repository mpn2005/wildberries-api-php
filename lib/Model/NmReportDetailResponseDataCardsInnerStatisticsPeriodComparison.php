<?php
/**
 * NmReportDetailResponseDataCardsInnerStatisticsPeriodComparison
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
 * The version of the OpenAPI document: 2.16
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
 * NmReportDetailResponseDataCardsInnerStatisticsPeriodComparison Class Doc Comment
 *
 * @category Class
 * @description Сравнение двух периодов, в процентах
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NmReportDetailResponseDataCardsInnerStatisticsPeriodComparison implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NmReportDetailResponse_data_cards_inner_statistics_periodComparison';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'open_card_dynamics' => 'int',
        'add_to_cart_dynamics' => 'int',
        'orders_count_dynamics' => 'int',
        'orders_sum_rub_dynamics' => 'int',
        'buyouts_count_dynamics' => 'int',
        'buyouts_sum_rub_dynamics' => 'int',
        'cancel_count_dynamics' => 'int',
        'cancel_sum_rub_dynamics' => 'int',
        'avg_orders_count_per_day_dynamics' => 'int',
        'avg_price_rub_dynamics' => 'int',
        'conversions' => '\OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPeriodComparisonConversions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'open_card_dynamics' => 'int32',
        'add_to_cart_dynamics' => 'int32',
        'orders_count_dynamics' => 'int32',
        'orders_sum_rub_dynamics' => 'int32',
        'buyouts_count_dynamics' => 'int32',
        'buyouts_sum_rub_dynamics' => 'int32',
        'cancel_count_dynamics' => 'int32',
        'cancel_sum_rub_dynamics' => 'int32',
        'avg_orders_count_per_day_dynamics' => 'int32',
        'avg_price_rub_dynamics' => 'int32',
        'conversions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'open_card_dynamics' => false,
		'add_to_cart_dynamics' => false,
		'orders_count_dynamics' => false,
		'orders_sum_rub_dynamics' => false,
		'buyouts_count_dynamics' => false,
		'buyouts_sum_rub_dynamics' => false,
		'cancel_count_dynamics' => false,
		'cancel_sum_rub_dynamics' => false,
		'avg_orders_count_per_day_dynamics' => false,
		'avg_price_rub_dynamics' => false,
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
        'open_card_dynamics' => 'openCardDynamics',
        'add_to_cart_dynamics' => 'addToCartDynamics',
        'orders_count_dynamics' => 'ordersCountDynamics',
        'orders_sum_rub_dynamics' => 'ordersSumRubDynamics',
        'buyouts_count_dynamics' => 'buyoutsCountDynamics',
        'buyouts_sum_rub_dynamics' => 'buyoutsSumRubDynamics',
        'cancel_count_dynamics' => 'cancelCountDynamics',
        'cancel_sum_rub_dynamics' => 'cancelSumRubDynamics',
        'avg_orders_count_per_day_dynamics' => 'avgOrdersCountPerDayDynamics',
        'avg_price_rub_dynamics' => 'avgPriceRubDynamics',
        'conversions' => 'conversions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_card_dynamics' => 'setOpenCardDynamics',
        'add_to_cart_dynamics' => 'setAddToCartDynamics',
        'orders_count_dynamics' => 'setOrdersCountDynamics',
        'orders_sum_rub_dynamics' => 'setOrdersSumRubDynamics',
        'buyouts_count_dynamics' => 'setBuyoutsCountDynamics',
        'buyouts_sum_rub_dynamics' => 'setBuyoutsSumRubDynamics',
        'cancel_count_dynamics' => 'setCancelCountDynamics',
        'cancel_sum_rub_dynamics' => 'setCancelSumRubDynamics',
        'avg_orders_count_per_day_dynamics' => 'setAvgOrdersCountPerDayDynamics',
        'avg_price_rub_dynamics' => 'setAvgPriceRubDynamics',
        'conversions' => 'setConversions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_card_dynamics' => 'getOpenCardDynamics',
        'add_to_cart_dynamics' => 'getAddToCartDynamics',
        'orders_count_dynamics' => 'getOrdersCountDynamics',
        'orders_sum_rub_dynamics' => 'getOrdersSumRubDynamics',
        'buyouts_count_dynamics' => 'getBuyoutsCountDynamics',
        'buyouts_sum_rub_dynamics' => 'getBuyoutsSumRubDynamics',
        'cancel_count_dynamics' => 'getCancelCountDynamics',
        'cancel_sum_rub_dynamics' => 'getCancelSumRubDynamics',
        'avg_orders_count_per_day_dynamics' => 'getAvgOrdersCountPerDayDynamics',
        'avg_price_rub_dynamics' => 'getAvgPriceRubDynamics',
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
        $this->setIfExists('open_card_dynamics', $data ?? [], null);
        $this->setIfExists('add_to_cart_dynamics', $data ?? [], null);
        $this->setIfExists('orders_count_dynamics', $data ?? [], null);
        $this->setIfExists('orders_sum_rub_dynamics', $data ?? [], null);
        $this->setIfExists('buyouts_count_dynamics', $data ?? [], null);
        $this->setIfExists('buyouts_sum_rub_dynamics', $data ?? [], null);
        $this->setIfExists('cancel_count_dynamics', $data ?? [], null);
        $this->setIfExists('cancel_sum_rub_dynamics', $data ?? [], null);
        $this->setIfExists('avg_orders_count_per_day_dynamics', $data ?? [], null);
        $this->setIfExists('avg_price_rub_dynamics', $data ?? [], null);
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
     * Gets open_card_dynamics
     *
     * @return int|null
     */
    public function getOpenCardDynamics()
    {
        return $this->container['open_card_dynamics'];
    }

    /**
     * Sets open_card_dynamics
     *
     * @param int|null $open_card_dynamics Динамика переходов в карточку товара
     *
     * @return self
     */
    public function setOpenCardDynamics($open_card_dynamics)
    {
        if (is_null($open_card_dynamics)) {
            throw new \InvalidArgumentException('non-nullable open_card_dynamics cannot be null');
        }
        $this->container['open_card_dynamics'] = $open_card_dynamics;

        return $this;
    }

    /**
     * Gets add_to_cart_dynamics
     *
     * @return int|null
     */
    public function getAddToCartDynamics()
    {
        return $this->container['add_to_cart_dynamics'];
    }

    /**
     * Sets add_to_cart_dynamics
     *
     * @param int|null $add_to_cart_dynamics Динамика добавлений в корзину
     *
     * @return self
     */
    public function setAddToCartDynamics($add_to_cart_dynamics)
    {
        if (is_null($add_to_cart_dynamics)) {
            throw new \InvalidArgumentException('non-nullable add_to_cart_dynamics cannot be null');
        }
        $this->container['add_to_cart_dynamics'] = $add_to_cart_dynamics;

        return $this;
    }

    /**
     * Gets orders_count_dynamics
     *
     * @return int|null
     */
    public function getOrdersCountDynamics()
    {
        return $this->container['orders_count_dynamics'];
    }

    /**
     * Sets orders_count_dynamics
     *
     * @param int|null $orders_count_dynamics Динамика количества заказов
     *
     * @return self
     */
    public function setOrdersCountDynamics($orders_count_dynamics)
    {
        if (is_null($orders_count_dynamics)) {
            throw new \InvalidArgumentException('non-nullable orders_count_dynamics cannot be null');
        }
        $this->container['orders_count_dynamics'] = $orders_count_dynamics;

        return $this;
    }

    /**
     * Gets orders_sum_rub_dynamics
     *
     * @return int|null
     */
    public function getOrdersSumRubDynamics()
    {
        return $this->container['orders_sum_rub_dynamics'];
    }

    /**
     * Sets orders_sum_rub_dynamics
     *
     * @param int|null $orders_sum_rub_dynamics Динамика суммы заказов, рублей
     *
     * @return self
     */
    public function setOrdersSumRubDynamics($orders_sum_rub_dynamics)
    {
        if (is_null($orders_sum_rub_dynamics)) {
            throw new \InvalidArgumentException('non-nullable orders_sum_rub_dynamics cannot be null');
        }
        $this->container['orders_sum_rub_dynamics'] = $orders_sum_rub_dynamics;

        return $this;
    }

    /**
     * Gets buyouts_count_dynamics
     *
     * @return int|null
     */
    public function getBuyoutsCountDynamics()
    {
        return $this->container['buyouts_count_dynamics'];
    }

    /**
     * Sets buyouts_count_dynamics
     *
     * @param int|null $buyouts_count_dynamics Динамика выкупов, штук
     *
     * @return self
     */
    public function setBuyoutsCountDynamics($buyouts_count_dynamics)
    {
        if (is_null($buyouts_count_dynamics)) {
            throw new \InvalidArgumentException('non-nullable buyouts_count_dynamics cannot be null');
        }
        $this->container['buyouts_count_dynamics'] = $buyouts_count_dynamics;

        return $this;
    }

    /**
     * Gets buyouts_sum_rub_dynamics
     *
     * @return int|null
     */
    public function getBuyoutsSumRubDynamics()
    {
        return $this->container['buyouts_sum_rub_dynamics'];
    }

    /**
     * Sets buyouts_sum_rub_dynamics
     *
     * @param int|null $buyouts_sum_rub_dynamics Динамика суммы выкупов, рублей
     *
     * @return self
     */
    public function setBuyoutsSumRubDynamics($buyouts_sum_rub_dynamics)
    {
        if (is_null($buyouts_sum_rub_dynamics)) {
            throw new \InvalidArgumentException('non-nullable buyouts_sum_rub_dynamics cannot be null');
        }
        $this->container['buyouts_sum_rub_dynamics'] = $buyouts_sum_rub_dynamics;

        return $this;
    }

    /**
     * Gets cancel_count_dynamics
     *
     * @return int|null
     */
    public function getCancelCountDynamics()
    {
        return $this->container['cancel_count_dynamics'];
    }

    /**
     * Sets cancel_count_dynamics
     *
     * @param int|null $cancel_count_dynamics Динамика отмен товаров, штук
     *
     * @return self
     */
    public function setCancelCountDynamics($cancel_count_dynamics)
    {
        if (is_null($cancel_count_dynamics)) {
            throw new \InvalidArgumentException('non-nullable cancel_count_dynamics cannot be null');
        }
        $this->container['cancel_count_dynamics'] = $cancel_count_dynamics;

        return $this;
    }

    /**
     * Gets cancel_sum_rub_dynamics
     *
     * @return int|null
     */
    public function getCancelSumRubDynamics()
    {
        return $this->container['cancel_sum_rub_dynamics'];
    }

    /**
     * Sets cancel_sum_rub_dynamics
     *
     * @param int|null $cancel_sum_rub_dynamics Динамика сумм отмен товаров, рублей
     *
     * @return self
     */
    public function setCancelSumRubDynamics($cancel_sum_rub_dynamics)
    {
        if (is_null($cancel_sum_rub_dynamics)) {
            throw new \InvalidArgumentException('non-nullable cancel_sum_rub_dynamics cannot be null');
        }
        $this->container['cancel_sum_rub_dynamics'] = $cancel_sum_rub_dynamics;

        return $this;
    }

    /**
     * Gets avg_orders_count_per_day_dynamics
     *
     * @return int|null
     */
    public function getAvgOrdersCountPerDayDynamics()
    {
        return $this->container['avg_orders_count_per_day_dynamics'];
    }

    /**
     * Sets avg_orders_count_per_day_dynamics
     *
     * @param int|null $avg_orders_count_per_day_dynamics Динамика среднего количества заказов в день
     *
     * @return self
     */
    public function setAvgOrdersCountPerDayDynamics($avg_orders_count_per_day_dynamics)
    {
        if (is_null($avg_orders_count_per_day_dynamics)) {
            throw new \InvalidArgumentException('non-nullable avg_orders_count_per_day_dynamics cannot be null');
        }
        $this->container['avg_orders_count_per_day_dynamics'] = $avg_orders_count_per_day_dynamics;

        return $this;
    }

    /**
     * Gets avg_price_rub_dynamics
     *
     * @return int|null
     */
    public function getAvgPriceRubDynamics()
    {
        return $this->container['avg_price_rub_dynamics'];
    }

    /**
     * Sets avg_price_rub_dynamics
     *
     * @param int|null $avg_price_rub_dynamics Динамика средней цены на товары. Учитываются скидки для акций и WB скидка.
     *
     * @return self
     */
    public function setAvgPriceRubDynamics($avg_price_rub_dynamics)
    {
        if (is_null($avg_price_rub_dynamics)) {
            throw new \InvalidArgumentException('non-nullable avg_price_rub_dynamics cannot be null');
        }
        $this->container['avg_price_rub_dynamics'] = $avg_price_rub_dynamics;

        return $this;
    }

    /**
     * Gets conversions
     *
     * @return \OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPeriodComparisonConversions|null
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     *
     * @param \OpenAPI\Client\Model\NmReportDetailResponseDataCardsInnerStatisticsPeriodComparisonConversions|null $conversions conversions
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


