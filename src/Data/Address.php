<?php

namespace DadataSuggestions\Data;

use DadataSuggestions\ResponseData;

/**
 * Class Address
 * @package DadataSuggestions\Data
 * @property $postal_code Индекс
 * @property $country Страна
 * @property $region_with_type Регион с типом
 * @property $region_type Тип субъекта (сокращенный)
 * @property $region_type_full Тип субъекта
 * @property $region Субъект
 * @property $region_fias_id ФИАС код региона (не заполняется)
 * @property $region_kladr_id КЛАДР код региона (не заполняется)
 * @property $area_with_type Район в регионе с типом
 * @property $area_type Тип района (сокращенный)
 * @property $area_type_full Тип района
 * @property $area Район
 * @property $area_fias_id ФИАС код области (не заполняется)
 * @property $area_kladr_id КЛАДР код области (не заполняется)
 * @property $beltway_hit В пределах МКАД?
 * @property $beltway_distance Расстояние от МКАД
 * @property $capital_marker Является ли город центром:
 * 1 — центр района (Московская обл, Одинцовский р-н, г Одинцово)
 * 2 — центр региона (Новосибирская обл, г Новосибирск);
 * 3 — центр района и региона (Костромская обл, Костромской р-н, г Кострома);
 * 0 — ни то, ни другое (Московская обл, г Балашиха).
 * @property $city_with_type Город с типом
 * @property $city_type Тип города (сокращенный)
 * @property $city_type_full Тип города
 * @property $city_disctrict Район города
 * @property $city Город
 * @property $city_fias_id ФИАС код города (не заполняется)
 * @property $city_kladr_id КЛАДР код города (не заполняется)
 * @property $settlement_with_type Населенный пункт с типом
 * @property $settlement_type Тип населенного пункта (сокращенный)
 * @property $settlement_type_full Тип населенного пункта
 * @property $settlement Населенный пункт
 * @property $settlement_fias_id ФИАС код населенного пункта (не заполняется)
 * @property $settlement_kladr_id КЛАДР код населенного пункта (не заполняется)
 * @property $square_meter_price Стоимость квадратного метра (не заполняется)
 * @property $street_with_type Улица с типом
 * @property $street_type Тип улицы (сокращенный)
 * @property $street_type_full Тип улицы
 * @property $street Улица
 * @property $street_fias_id ФИАС код улицы (не заполняется)
 * @property $street_kladr_id КЛАДР код улицы (не заполняется)
 * @property $house_type Тип дома (сокращенный)
 * @property $house_type_full Тип дома
 * @property $house Дом
 * @property $house_fias_id ФИАС код дома (не заполняется)
 * @property $house_kladr_id КЛАДР код дома (не заполняется)
 * @property $block_type Краткий тип расширения дома (корпус / строение)
 * @property $block_type_full Полный тип расширения дома (корпус / строение)
 * @property $block Номер расширения дома
 * @property $flat_type Краткий тип квартиры (квартира / офис / комната)
 * @property $flat_type_full Полный тип квартиры (квартира / офис / комната)
 * @property $flat Номер квартиры
 * @property $flat_area Площадь квартиры (не заполняется)
 * @property $flat_price Стоимость квартиры (не заполняется)
 * @property $postal_box Абонентский ящик
 * @property $fias_id Код ФИАС
 * @property $fias_level Уровень субъекта по ФИАС
 * @property $kladr_id Код КЛАДР
 * @property $okato Код ОКАТО
 * @property $oktmo Код ОКТМО
 * @property $tax_office Код ИФНС для физических лиц
 * @property $tax_office_legal Код ИФНС для организаций (не заполняется)
 * @property $timezone Часовой пояс (не заполняется)
 * @property $geo_lat Широта
 * @property $geo_lon Долгота
 * @property $qc_complete Код полноты (не заполняется)
 * @property $qc_house Код проверки дома (не заполняется)
 * @property $qc Код качества (не заполняется)
 * @property $qc_geo Код качества геоокоординат
 * @property $unparsed_parts Нераспознанная часть адреса (не заполняется)
 */
class Address extends ResponseData
{

}