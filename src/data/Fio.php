<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11.05.2016
 * Time: 17:17
 */

namespace glendemon\DadataSuggestions\Data;

use glendemon\DadataSuggestions\ResponseData;

/**
 * Class Fio
 * @package glendemon\DadataSuggestions\Data
 * @property $surname Фамилия
 * @property $name Имя
 * @property $patronymic Отчество
 * @property $gender Пол
 * FEMALE;
 * MALE;
 * UNKNOWN — не удалось однозначно определить.
 * @property $qc Код качества (не заполняется)
 */
class Fio extends ResponseData
{

}