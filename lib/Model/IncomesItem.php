<?php
/**
 * IncomesItem
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
 * IncomesItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IncomesItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncomesItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'income_id' => 'int',
        'number' => 'string',
        'date' => '\DateTime',
        'last_change_date' => '\DateTime',
        'supplier_article' => 'string',
        'tech_size' => 'string',
        'barcode' => 'string',
        'quantity' => 'int',
        'total_price' => 'float',
        'date_close' => '\DateTime',
        'warehouse_name' => 'string',
        'nm_id' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'income_id' => null,
        'number' => null,
        'date' => 'date',
        'last_change_date' => 'date-time',
        'supplier_article' => null,
        'tech_size' => null,
        'barcode' => null,
        'quantity' => null,
        'total_price' => null,
        'date_close' => 'date',
        'warehouse_name' => null,
        'nm_id' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'income_id' => false,
		'number' => false,
		'date' => false,
		'last_change_date' => false,
		'supplier_article' => false,
		'tech_size' => false,
		'barcode' => false,
		'quantity' => false,
		'total_price' => false,
		'date_close' => false,
		'warehouse_name' => false,
		'nm_id' => false,
		'status' => false
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
        'income_id' => 'incomeId',
        'number' => 'number',
        'date' => 'date',
        'last_change_date' => 'lastChangeDate',
        'supplier_article' => 'supplierArticle',
        'tech_size' => 'techSize',
        'barcode' => 'barcode',
        'quantity' => 'quantity',
        'total_price' => 'totalPrice',
        'date_close' => 'dateClose',
        'warehouse_name' => 'warehouseName',
        'nm_id' => 'nmId',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'income_id' => 'setIncomeId',
        'number' => 'setNumber',
        'date' => 'setDate',
        'last_change_date' => 'setLastChangeDate',
        'supplier_article' => 'setSupplierArticle',
        'tech_size' => 'setTechSize',
        'barcode' => 'setBarcode',
        'quantity' => 'setQuantity',
        'total_price' => 'setTotalPrice',
        'date_close' => 'setDateClose',
        'warehouse_name' => 'setWarehouseName',
        'nm_id' => 'setNmId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'income_id' => 'getIncomeId',
        'number' => 'getNumber',
        'date' => 'getDate',
        'last_change_date' => 'getLastChangeDate',
        'supplier_article' => 'getSupplierArticle',
        'tech_size' => 'getTechSize',
        'barcode' => 'getBarcode',
        'quantity' => 'getQuantity',
        'total_price' => 'getTotalPrice',
        'date_close' => 'getDateClose',
        'warehouse_name' => 'getWarehouseName',
        'nm_id' => 'getNmId',
        'status' => 'getStatus'
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

    public const STATUS_ = 'Принято';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_,
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
        $this->setIfExists('income_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('last_change_date', $data ?? [], null);
        $this->setIfExists('supplier_article', $data ?? [], null);
        $this->setIfExists('tech_size', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('total_price', $data ?? [], null);
        $this->setIfExists('date_close', $data ?? [], null);
        $this->setIfExists('warehouse_name', $data ?? [], null);
        $this->setIfExists('nm_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 40)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['supplier_article']) && (mb_strlen($this->container['supplier_article']) > 75)) {
            $invalidProperties[] = "invalid value for 'supplier_article', the character length must be smaller than or equal to 75.";
        }

        if (!is_null($this->container['tech_size']) && (mb_strlen($this->container['tech_size']) > 30)) {
            $invalidProperties[] = "invalid value for 'tech_size', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['barcode']) && (mb_strlen($this->container['barcode']) > 30)) {
            $invalidProperties[] = "invalid value for 'barcode', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['warehouse_name']) && (mb_strlen($this->container['warehouse_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'warehouse_name', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 50)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 50.";
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
     * Gets income_id
     *
     * @return int|null
     */
    public function getIncomeId()
    {
        return $this->container['income_id'];
    }

    /**
     * Sets income_id
     *
     * @param int|null $income_id Номер поставки
     *
     * @return self
     */
    public function setIncomeId($income_id)
    {
        if (is_null($income_id)) {
            throw new \InvalidArgumentException('non-nullable income_id cannot be null');
        }
        $this->container['income_id'] = $income_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Номер УПД
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        if ((mb_strlen($number) > 40)) {
            throw new \InvalidArgumentException('invalid length for $number when calling IncomesItem., must be smaller than or equal to 40.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Дата поступления. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets last_change_date
     *
     * @return \DateTime|null
     */
    public function getLastChangeDate()
    {
        return $this->container['last_change_date'];
    }

    /**
     * Sets last_change_date
     *
     * @param \DateTime|null $last_change_date Дата и время обновления информации в сервисе. Это поле соответствует параметру `dateFrom` в запросе. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return self
     */
    public function setLastChangeDate($last_change_date)
    {
        if (is_null($last_change_date)) {
            throw new \InvalidArgumentException('non-nullable last_change_date cannot be null');
        }
        $this->container['last_change_date'] = $last_change_date;

        return $this;
    }

    /**
     * Gets supplier_article
     *
     * @return string|null
     */
    public function getSupplierArticle()
    {
        return $this->container['supplier_article'];
    }

    /**
     * Sets supplier_article
     *
     * @param string|null $supplier_article Артикул продавца
     *
     * @return self
     */
    public function setSupplierArticle($supplier_article)
    {
        if (is_null($supplier_article)) {
            throw new \InvalidArgumentException('non-nullable supplier_article cannot be null');
        }
        if ((mb_strlen($supplier_article) > 75)) {
            throw new \InvalidArgumentException('invalid length for $supplier_article when calling IncomesItem., must be smaller than or equal to 75.');
        }

        $this->container['supplier_article'] = $supplier_article;

        return $this;
    }

    /**
     * Gets tech_size
     *
     * @return string|null
     */
    public function getTechSize()
    {
        return $this->container['tech_size'];
    }

    /**
     * Sets tech_size
     *
     * @param string|null $tech_size Размер товара (пример S, M, L, XL, 42, 42-43)
     *
     * @return self
     */
    public function setTechSize($tech_size)
    {
        if (is_null($tech_size)) {
            throw new \InvalidArgumentException('non-nullable tech_size cannot be null');
        }
        if ((mb_strlen($tech_size) > 30)) {
            throw new \InvalidArgumentException('invalid length for $tech_size when calling IncomesItem., must be smaller than or equal to 30.');
        }

        $this->container['tech_size'] = $tech_size;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode Бар-код
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        if (is_null($barcode)) {
            throw new \InvalidArgumentException('non-nullable barcode cannot be null');
        }
        if ((mb_strlen($barcode) > 30)) {
            throw new \InvalidArgumentException('invalid length for $barcode when calling IncomesItem., must be smaller than or equal to 30.');
        }

        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Количество
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float|null $total_price Цена из УПД
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        if (is_null($total_price)) {
            throw new \InvalidArgumentException('non-nullable total_price cannot be null');
        }
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets date_close
     *
     * @return \DateTime|null
     */
    public function getDateClose()
    {
        return $this->container['date_close'];
    }

    /**
     * Sets date_close
     *
     * @param \DateTime|null $date_close Дата принятия (закрытия) в WB. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return self
     */
    public function setDateClose($date_close)
    {
        if (is_null($date_close)) {
            throw new \InvalidArgumentException('non-nullable date_close cannot be null');
        }
        $this->container['date_close'] = $date_close;

        return $this;
    }

    /**
     * Gets warehouse_name
     *
     * @return string|null
     */
    public function getWarehouseName()
    {
        return $this->container['warehouse_name'];
    }

    /**
     * Sets warehouse_name
     *
     * @param string|null $warehouse_name Название склада
     *
     * @return self
     */
    public function setWarehouseName($warehouse_name)
    {
        if (is_null($warehouse_name)) {
            throw new \InvalidArgumentException('non-nullable warehouse_name cannot be null');
        }
        if ((mb_strlen($warehouse_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $warehouse_name when calling IncomesItem., must be smaller than or equal to 50.');
        }

        $this->container['warehouse_name'] = $warehouse_name;

        return $this;
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Текущий статус поставки
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($status) > 50)) {
            throw new \InvalidArgumentException('invalid length for $status when calling IncomesItem., must be smaller than or equal to 50.');
        }

        $this->container['status'] = $status;

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


