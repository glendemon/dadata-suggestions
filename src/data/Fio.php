<?php

namespace DadataSuggestions\Data;

use DadataSuggestions\ResponseData;

/**
 * Class Fio
 * @package DadataSuggestions\Data
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