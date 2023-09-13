<?php
/**
 * AdvV1FullstatGet200ResponseDaysInnerAppsInnerNmInner
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
 * AdvV1FullstatGet200ResponseDaysInnerAppsInnerNmInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdvV1FullstatGet200ResponseDaysInnerAppsInnerNmInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_adv_v1_fullstat_get_200_response_days_inner_apps_inner_nm_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nm_id' => 'int',
        'name' => 'string',
        'views' => 'int',
        'clicks' => 'int',
        'frq' => 'int',
        'unique_users' => 'int',
        'ctr' => 'float',
        'cpc' => 'float',
        'sum' => 'float',
        'atbs' => 'int',
        'orders' => 'int',
        'cr' => 'int',
        'shks' => 'int',
        'sum_price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nm_id' => null,
        'name' => null,
        'views' => null,
        'clicks' => null,
        'frq' => null,
        'unique_users' => null,
        'ctr' => null,
        'cpc' => null,
        'sum' => null,
        'atbs' => null,
        'orders' => null,
        'cr' => null,
        'shks' => null,
        'sum_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nm_id' => false,
		'name' => false,
		'views' => false,
		'clicks' => false,
		'frq' => false,
		'unique_users' => false,
		'ctr' => false,
		'cpc' => false,
		'sum' => false,
		'atbs' => false,
		'orders' => false,
		'cr' => false,
		'shks' => false,
		'sum_price' => false
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
        'nm_id' => 'nmId',
        'name' => 'name',
        'views' => 'views',
        'clicks' => 'clicks',
        'frq' => 'frq',
        'unique_users' => 'unique_users',
        'ctr' => 'ctr',
        'cpc' => 'cpc',
        'sum' => 'sum',
        'atbs' => 'atbs',
        'orders' => 'orders',
        'cr' => 'cr',
        'shks' => 'shks',
        'sum_price' => 'sum_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nm_id' => 'setNmId',
        'name' => 'setName',
        'views' => 'setViews',
        'clicks' => 'setClicks',
        'frq' => 'setFrq',
        'unique_users' => 'setUniqueUsers',
        'ctr' => 'setCtr',
        'cpc' => 'setCpc',
        'sum' => 'setSum',
        'atbs' => 'setAtbs',
        'orders' => 'setOrders',
        'cr' => 'setCr',
        'shks' => 'setShks',
        'sum_price' => 'setSumPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nm_id' => 'getNmId',
        'name' => 'getName',
        'views' => 'getViews',
        'clicks' => 'getClicks',
        'frq' => 'getFrq',
        'unique_users' => 'getUniqueUsers',
        'ctr' => 'getCtr',
        'cpc' => 'getCpc',
        'sum' => 'getSum',
        'atbs' => 'getAtbs',
        'orders' => 'getOrders',
        'cr' => 'getCr',
        'shks' => 'getShks',
        'sum_price' => 'getSumPrice'
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
        $this->setIfExists('nm_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('views', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('frq', $data ?? [], null);
        $this->setIfExists('unique_users', $data ?? [], null);
        $this->setIfExists('ctr', $data ?? [], null);
        $this->setIfExists('cpc', $data ?? [], null);
        $this->setIfExists('sum', $data ?? [], null);
        $this->setIfExists('atbs', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('cr', $data ?? [], null);
        $this->setIfExists('shks', $data ?? [], null);
        $this->setIfExists('sum_price', $data ?? [], null);
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
     * Gets nm_id
     *
     * @return int|null
     */
    public function getNmId()
    {
        return $this->container['nm_id'];
    }

    /**
     * Sets nm_id
     *
     * @param int|null $nm_id Артикул WB
     *
     * @return self
     */
    public function setNmId($nm_id)
    {
        if (is_null($nm_id)) {
            throw new \InvalidArgumentException('non-nullable nm_id cannot be null');
        }
        $this->container['nm_id'] = $nm_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Наименование товара
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets views
     *
     * @return int|null
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param int|null $views Количество просмотров
     *
     * @return self
     */
    public function setViews($views)
    {
        if (is_null($views)) {
            throw new \InvalidArgumentException('non-nullable views cannot be null');
        }
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks Количество кликов
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets frq
     *
     * @return int|null
     */
    public function getFrq()
    {
        return $this->container['frq'];
    }

    /**
     * Sets frq
     *
     * @param int|null $frq Частота (отношение количества просмотров к количеству уникальных пользователей)
     *
     * @return self
     */
    public function setFrq($frq)
    {
        if (is_null($frq)) {
            throw new \InvalidArgumentException('non-nullable frq cannot be null');
        }
        $this->container['frq'] = $frq;

        return $this;
    }

    /**
     * Gets unique_users
     *
     * @return int|null
     */
    public function getUniqueUsers()
    {
        return $this->container['unique_users'];
    }

    /**
     * Sets unique_users
     *
     * @param int|null $unique_users Количество уникальных пользователей просмотревших товар
     *
     * @return self
     */
    public function setUniqueUsers($unique_users)
    {
        if (is_null($unique_users)) {
            throw new \InvalidArgumentException('non-nullable unique_users cannot be null');
        }
        $this->container['unique_users'] = $unique_users;

        return $this;
    }

    /**
     * Gets ctr
     *
     * @return float|null
     */
    public function getCtr()
    {
        return $this->container['ctr'];
    }

    /**
     * Sets ctr
     *
     * @param float|null $ctr Показатель кликабельности.<br> Отношение числа кликов к количеству показов. Выражается в процентах.
     *
     * @return self
     */
    public function setCtr($ctr)
    {
        if (is_null($ctr)) {
            throw new \InvalidArgumentException('non-nullable ctr cannot be null');
        }
        $this->container['ctr'] = $ctr;

        return $this;
    }

    /**
     * Gets cpc
     *
     * @return float|null
     */
    public function getCpc()
    {
        return $this->container['cpc'];
    }

    /**
     * Sets cpc
     *
     * @param float|null $cpc Средняя стоимость клика, ₽.
     *
     * @return self
     */
    public function setCpc($cpc)
    {
        if (is_null($cpc)) {
            throw new \InvalidArgumentException('non-nullable cpc cannot be null');
        }
        $this->container['cpc'] = $cpc;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return float|null
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param float|null $sum Затраты, ₽.
     *
     * @return self
     */
    public function setSum($sum)
    {
        if (is_null($sum)) {
            throw new \InvalidArgumentException('non-nullable sum cannot be null');
        }
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets atbs
     *
     * @return int|null
     */
    public function getAtbs()
    {
        return $this->container['atbs'];
    }

    /**
     * Sets atbs
     *
     * @param int|null $atbs Количество добавлений товаров в корзину
     *
     * @return self
     */
    public function setAtbs($atbs)
    {
        if (is_null($atbs)) {
            throw new \InvalidArgumentException('non-nullable atbs cannot be null');
        }
        $this->container['atbs'] = $atbs;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return int|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param int|null $orders Количество заказов товара
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets cr
     *
     * @return int|null
     */
    public function getCr()
    {
        return $this->container['cr'];
    }

    /**
     * Sets cr
     *
     * @param int|null $cr CR(conversion rate) — это отношение количества заказов к общему количеству посещений кампании.
     *
     * @return self
     */
    public function setCr($cr)
    {
        if (is_null($cr)) {
            throw new \InvalidArgumentException('non-nullable cr cannot be null');
        }
        $this->container['cr'] = $cr;

        return $this;
    }

    /**
     * Gets shks
     *
     * @return int|null
     */
    public function getShks()
    {
        return $this->container['shks'];
    }

    /**
     * Sets shks
     *
     * @param int|null $shks Заказано товаров, шт
     *
     * @return self
     */
    public function setShks($shks)
    {
        if (is_null($shks)) {
            throw new \InvalidArgumentException('non-nullable shks cannot be null');
        }
        $this->container['shks'] = $shks;

        return $this;
    }

    /**
     * Gets sum_price
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->container['sum_price'];
    }

    /**
     * Sets sum_price
     *
     * @param int|null $sum_price Заказов на сумму, ₽
     *
     * @return self
     */
    public function setSumPrice($sum_price)
    {
        if (is_null($sum_price)) {
            throw new \InvalidArgumentException('non-nullable sum_price cannot be null');
        }
        $this->container['sum_price'] = $sum_price;

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


