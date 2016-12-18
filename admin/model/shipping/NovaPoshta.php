<?php

class ModelShippingNovaPoshta extends Model
{
    public function setsAreas($areas)
    {
        //ай ди страны Украина
        $country_id = 220;

        //статус
        $status = 1;

        //Очищаем таблицу перед записью
        $this->db->query("TRUNCATE TABLE " . DB_PREFIX . "zone");

        foreach ($areas["data"] as $key => $area) {
            $this->db->query("INSERT INTO `". DB_PREFIX . "zone` SET code = '" . $area['Ref'] . "', country_id = '" . $country_id . "', name = '" . $area['Description'] . "', status = '" . $status . "'");
        }
    }
}