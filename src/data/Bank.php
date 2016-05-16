<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11.05.2016
 * Time: 17:19
 */

namespace DadataSuggestions\Data;

use DadataSuggestions\ResponseData;

/**
 * Class Bank
 * @package DadataSuggestions\Data
 * @property $opf_type Тип (латинское сокращение)
 * @property $opf_full Полное наименование типа банковской организации
 * @property $opf_short Сокращенное наименование типа банковской организации
 * @property $name_payment Платежное наименование
 * @property $name_full Полное наименование
 * @property $name_short Краткое наименование
 * @property $bic БИК
 * @property $swift SWIFT
 * @property $okpo ОКПО
 * @property $correspondent_account Корреспондентский счет
 * @property $registration_number Регистрационный номер
 * @property $rkc Ссылка на РКЦ. Структура идентична структуре объекта банка
 * @property $address_value Адрес банка одной строкой
 * @property $address_unrestricted_value = $address_value
 * @property $address_data Объект адреса (Гранулярный адрес)
 * Не заполняется, если мы не уверены в корректности адреса.
 * @property $phone Телефон
 * @property $state_status Статус (активен, в стадии ликцидации, ликвидирован)
 * @property $state_actuality_date Дата актуальности сведений о компании
 * @property $state_registration_date Дата регистрации
 * @property $state_liquidation_date Дата ликвидации
 */
class Bank extends ResponseData
{

}