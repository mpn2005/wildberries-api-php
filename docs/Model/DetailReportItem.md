# # DetailReportItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**realizationreport_id** | **int** | Номер отчёта | [optional]
**date_from** | **\DateTime** | Дата начала отчётного периода | [optional]
**date_to** | **\DateTime** | Дата конца отчётного периода | [optional]
**create_dt** | **\DateTime** | Дата формирования отчёта | [optional]
**currency_name** | **string** | Валюта отчёта  &lt;span class&#x3D;\&quot;new\&quot;&gt;new&lt;/span&gt; | [optional]
**suppliercontract_code** | **object** | Договор | [optional]
**rrd_id** | **int** | Номер строки | [optional]
**gi_id** | **int** | Номер поставки | [optional]
**subject_name** | **string** | Предмет | [optional]
**nm_id** | **int** | Артикул WB | [optional]
**brand_name** | **string** | Бренд | [optional]
**sa_name** | **string** | Артикул продавца | [optional]
**ts_name** | **string** | Размер | [optional]
**barcode** | **string** | Баркод | [optional]
**doc_type_name** | **string** | Тип документа | [optional]
**quantity** | **int** | Количество | [optional]
**retail_price** | **float** | Цена розничная | [optional]
**retail_amount** | **float** | Сумма продаж (возвратов) | [optional]
**sale_percent** | **int** | Согласованная скидка | [optional]
**commission_percent** | **float** | Процент комиссии | [optional]
**office_name** | **string** | Склад | [optional]
**supplier_oper_name** | **string** | Обоснование для оплаты | [optional]
**order_dt** | **\DateTime** | Дата заказа. &lt;br&gt; Присылается с явным указанием часового пояса | [optional]
**sale_dt** | **\DateTime** | Дата продажи. &lt;br&gt; Присылается с явным указанием часового пояса | [optional]
**rr_dt** | **\DateTime** | Дата операции. &lt;br&gt; Присылается с явным указанием часового пояса | [optional]
**shk_id** | **int** | Штрих-код | [optional]
**retail_price_withdisc_rub** | **float** | Цена розничная с учетом согласованной скидки | [optional]
**delivery_amount** | **int** | Количество доставок | [optional]
**return_amount** | **int** | Количество возвратов | [optional]
**delivery_rub** | **float** | Стоимость логистики | [optional]
**gi_box_type_name** | **string** | Тип коробов | [optional]
**product_discount_for_report** | **float** | Согласованный продуктовый дисконт | [optional]
**supplier_promo** | **float** | Промокод | [optional]
**rid** | **int** | Уникальный идентификатор заказа | [optional]
**ppvz_spp_prc** | **float** | Скидка постоянного покупателя | [optional]
**ppvz_kvw_prc_base** | **float** | Размер кВВ без НДС, % базовый | [optional]
**ppvz_kvw_prc** | **float** | Итоговый кВВ без НДС, % | [optional]
**sup_rating_prc_up** | **float** | Размер снижения кВВ из-за рейтинга | [optional]
**is_kgvp_v2** | **float** | Размер снижения кВВ из-за акции | [optional]
**ppvz_sales_commission** | **float** | Вознаграждение с продаж до вычета услуг поверенного, без НДС | [optional]
**ppvz_for_pay** | **float** | К перечислению продавцу за реализованный товар | [optional]
**ppvz_reward** | **float** | Возмещение за выдачу и возврат товаров на ПВЗ | [optional]
**acquiring_fee** | **float** | Возмещение издержек по эквайрингу. &lt;br&gt; Издержки WB за услуги эквайринга: вычитаются из вознаграждения WB и не влияют на доход продавца. | [optional]
**acquiring_bank** | **string** | Наименование банка-эквайера | [optional]
**ppvz_vw** | **float** | Вознаграждение WB без НДС | [optional]
**ppvz_vw_nds** | **float** | НДС с вознаграждения WB | [optional]
**ppvz_office_id** | **int** | Номер офиса | [optional]
**ppvz_office_name** | **string** | Наименование офиса доставки | [optional]
**ppvz_supplier_id** | **int** | Номер партнера | [optional]
**ppvz_supplier_name** | **string** | Партнер | [optional]
**ppvz_inn** | **string** | ИНН партнера | [optional]
**declaration_number** | **string** | Номер таможенной декларации | [optional]
**bonus_type_name** | **string** | Обоснование штрафов и доплат. &lt;br&gt; Поле будет в ответе при наличии значения | [optional]
**sticker_id** | **string** | Цифровое значение стикера, который клеится на товар в процессе сборки заказа по схеме \&quot;Маркетплейс\&quot; | [optional]
**site_country** | **string** | Страна продажи | [optional]
**penalty** | **float** | Штрафы | [optional]
**additional_payment** | **float** | Доплаты | [optional]
**rebill_logistic_cost** | **float** | Возмещение издержек по перевозке. Поле будет в ответе при наличии значения | [optional]
**rebill_logistic_org** | **string** | Организатор перевозки. Поле будет в ответе при наличии значения. | [optional]
**kiz** | **string** | Код маркировки. &lt;br&gt; Поле будет в ответе при наличии значения | [optional]
**srid** | **string** | Уникальный идентификатор заказа. Примечание для использующих API Marketplace: &#x60;srid&#x60; равен &#x60;rid&#x60; в ответах методов сборочных заданий. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
