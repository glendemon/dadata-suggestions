<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11.05.2016
 * Time: 17:18
 */

namespace glendemon\DadataSuggestions\Data;

use glendemon\DadataSuggestions\ResponseData;

/**
 * Class Party
 * @package glendemon\DadataSuggestions\Data
 * @property $address_value Адрес организации одной строкой
 * @property $address_unrestricted_value = data.address.value
 * @property $address_data Объект адреса (Гранулярный адрес)
 * Не заполняется, если мы не уверены в корректности адреса.
 * Не заполняется у ИП.
 * @property $branch_count Количество филиалов
 * @property $branch_type Тип подразделения
 * MAIN — головная организация;
 * BRANCH — филиал.
 * @property $inn ИНН
 * @property $kpp КПП
 * @property $management_name ФИО руководителя
 * @property $management_post Должность руководителя
 * @property $name_full Полное наименование
 * @property $name_full_with_opf Полное наименование с ОПФ
 * @property $name_latin Наименование на латинице
 * @property $name_short Краткое наименование
 * @property $name_short_with_opf Краткое наименование с ОПФ
 * @property $ogrn ОГРН
 * @property $okpo Код ОКПО
 * @property $okved Код ОКВЭД
 * @property $opf_code Код ОКОПФ
 * @property $opf_full Полное название ОПФ
 * @property $opf_short Краткое название ОПФ
 * @property $state_actuality_date Дата актуальности сведений о компании
 * @property $state_registration_date Дата регистрации
 * @property $state_liquidation_date Дата ликвидации
 * @property $state_status Статус организации
 * ACTIVE — действующая;
 * LIQUIDATING — ликвидируется;
 * LIQUIDATED — ликвидирована.
 * @property $type Тип организации
 * LEGAL — юридическое лицо;
 * INDIVIDUAL — индивидуальный предприниматель.
 */
class Party extends ResponseData
{

}