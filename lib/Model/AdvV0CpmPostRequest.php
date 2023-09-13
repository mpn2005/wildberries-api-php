<?php
/**
 * AdvV0CpmPostRequest
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
 * AdvV0CpmPostRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdvV0CpmPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_adv_v0_cpm_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advert_id' => 'int',
        'type' => 'int',
        'cpm' => 'int',
        'param' => 'int',
        'instrument' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advert_id' => null,
        'type' => null,
        'cpm' => null,
        'param' => null,
        'instrument' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'advert_id' => false,
		'type' => false,
		'cpm' => false,
		'param' => false,
		'instrument' => false
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
        'advert_id' => 'advertId',
        'type' => 'type',
        'cpm' => 'cpm',
        'param' => 'param',
        'instrument' => 'instrument'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advert_id' => 'setAdvertId',
        'type' => 'setType',
        'cpm' => 'setCpm',
        'param' => 'setParam',
        'instrument' => 'setInstrument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advert_id' => 'getAdvertId',
        'type' => 'getType',
        'cpm' => 'getCpm',
        'param' => 'getParam',
        'instrument' => 'getInstrument'
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

    public const TYPE_5 = 5;
    public const TYPE_6 = 6;
    public const TYPE_7 = 7;
    public const TYPE_8 = 8;
    public const TYPE_9 = 9;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_5,
            self::TYPE_6,
            self::TYPE_7,
            self::TYPE_8,
            self::TYPE_9,
        ];
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
        $this->setIfExists('advert_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('cpm', $data ?? [], null);
        $this->setIfExists('param', $data ?? [], null);
        $this->setIfExists('instrument', $data ?? [], null);
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

        if ($this->container['advert_id'] === null) {
            $invalidProperties[] = "'advert_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cpm'] === null) {
            $invalidProperties[] = "'cpm' can't be null";
        }
        if ($this->container['param'] === null) {
            $invalidProperties[] = "'param' can't be null";
        }
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
     * Gets advert_id
     *
     * @return int
     */
    public function getAdvertId()
    {
        return $this->container['advert_id'];
    }

    /**
     * Sets advert_id
     *
     * @param int $advert_id Идентификатор кампании, где меняется ставка
     *
     * @return self
     */
    public function setAdvertId($advert_id)
    {
        if (is_null($advert_id)) {
            throw new \InvalidArgumentException('non-nullable advert_id cannot be null');
        }
        $this->container['advert_id'] = $advert_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type <dl> <dt>кампании, где меняется ставка:</dt> <dd><code>4</code> - кампания в каталоге <span class=\"new\">new</span></dd>  <dd><code>5</code> - кампания в карточке товара</dd> <dd><code>6</code> - кампания в поиске</dd> <dd><code>7</code> - кампания в рекомендациях на главной странице</dd> <dd><code>8</code> - автоматическая кампания</dd> <dd><code>9</code> - кампания поиск + каталог <span class=\"new\">new</span></dd> </dl>
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cpm
     *
     * @return int
     */
    public function getCpm()
    {
        return $this->container['cpm'];
    }

    /**
     * Sets cpm
     *
     * @param int $cpm Новое значение ставки
     *
     * @return self
     */
    public function setCpm($cpm)
    {
        if (is_null($cpm)) {
            throw new \InvalidArgumentException('non-nullable cpm cannot be null');
        }
        $this->container['cpm'] = $cpm;

        return $this;
    }

    /**
     * Gets param
     *
     * @return int
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param int $param Параметр, для которого будет внесено изменение. Является значением `subjectId` (для кампании в поиске и рекомендациях), `setId` (для кампании в карточке товара) или `menuId` (для кампании в каталоге).  <br> Для автоматической кампании указывать этот параметр не требуется.
     *
     * @return self
     */
    public function setParam($param)
    {
        if (is_null($param)) {
            throw new \InvalidArgumentException('non-nullable param cannot be null');
        }
        $this->container['param'] = $param;

        return $this;
    }

    /**
     * Gets instrument
     *
     * @return int|null
     */
    public function getInstrument()
    {
        return $this->container['instrument'];
    }

    /**
     * Sets instrument
     *
     * @param int|null $instrument тип кампании для изменения ставки в Поиск + Каталог (4 - каталог, 6 - поиск) <span class=\"new\">new</span>
     *
     * @return self
     */
    public function setInstrument($instrument)
    {
        if (is_null($instrument)) {
            throw new \InvalidArgumentException('non-nullable instrument cannot be null');
        }
        $this->container['instrument'] = $instrument;

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


