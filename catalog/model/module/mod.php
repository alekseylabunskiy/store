<?php
class ModelModuleMod extends Model {

    private function getAllAttributes($id)
    {
        $product = [];
        $prod_attributes = [];

        //Вытаскиваем модель текущего товара
        $model_current_product = $this->db->query("SELECT model FROM " . DB_PREFIX . 'product' . ' WHERE product_id = ' . (int)$id );

        if ($model_current_product->num_rows) {
            $prod['current_model'] = $model_current_product->row['model'];
        } else {
            return 0;
        }

        // Вытаскиваем все товары с такой моделью

        $all_products = $this->db->query("SELECT product_id FROM "  . DB_PREFIX . "product WHERE model = '" .$prod['current_model'] . "'");

        foreach ($all_products->rows as $all_product) {

            $product[] = [
                'id_products' =>  $all_product["product_id"],
            ];
        }

        // Вытаскиваем все атрибуты всех похожих товаров

        foreach ($product as $prod_id) {

            $all_attributes = $this->db->query("SELECT  prod.product_id, prod.attribute_id, prod.text, attr.attribute_id, attr.name FROM "  . DB_PREFIX .  "product_attribute prod, "  . DB_PREFIX . "attribute_description attr" . " WHERE prod.product_id = '" . $prod_id["id_products"] . "'" . " AND prod.attribute_id = attr.attribute_id" );

            foreach ($all_attributes->rows as $attributes) {
                $prod_attributes[] = [
                    "attribute_id" => $attributes["attribute_id"],
                    "text" => $attributes["text"],
                    "name" => $attributes["name"],
                    'id_products' => $prod_id["id_products"],
                ];
            }
            //
        }
        return $prod_attributes;
    }

    //функция где отбираем только те характеристики товара которые нам надо
    public function getSomeAttributes($id)
    {
        $all_attributes = $this->getAllAttributes($id);

        $result = [];
        $i = 0;
        $r = [];
        foreach ($all_attributes as $k=>$val) {
            if ($val['attribute_id'] == 3 || $val['attribute_id'] == 4) {
                continue;
            } else {
                if ($i > 2) continue;
                $result['groupe_attributes'][$i] = $val['name'];
            }
            $i++;
        }

        foreach ($all_attributes as $k=>$val) {

            if ($val["name"] == "Название Ткани" || $val["name"] == "Материал") {
                continue;
            } else {
                if ($val["name"] == "Цвет") {
                    $r['color'][] = $val['text'];
                }
                if ($val["name"] == "Размер Наволочки") {
                    $r['pillowSize'][] = $val['text'];
                }
                if ($val["name"] == "Размер комплекта") {
                    $r['size'][] = $val['text'];
                }
            }
            $r['id_products'][] = $val['id_products'];
        }

        $color = array_unique($r['color']);
        $pillowSize = array_unique($r['pillowSize']);
        $size = array_unique($r['size']);
        $id_products = array_unique($r['id_products']);

        $result['rests'] = $this->restsProducts($color,$id_products);
        $result['color'] = $color;
        $result['pillowSize'] = $pillowSize;
        $result['size'] = $size;
        $result['id_related_products'] = $id_products;

        return $result;
    }

    public function allModifications($id)
    {
        $result = [];
        $products = $this->getSomeAttributes($id);

        foreach ($products['id_related_products'] as $id) {

            $allModifications = $this->db->query("SELECT prod.product_id, attr.text, prod.quantity, prod.price  FROM " . DB_PREFIX . "product_attribute attr, " . DB_PREFIX . "product prod WHERE prod.product_id = '" . $id . "'" . " AND attr.product_id = '" . $id . "'" );

            foreach ($allModifications->rows as $modification) {
                $result[$modification['product_id']][] = $modification;
            }
        }
        return $result;
    }

    private function restsProducts($color,$id_products)
    {
        //Получаем все остатки переданых артикулов
        $allRests = [];
        $res = [];
        $result = [];
        $v = [];

        foreach ($color as $col){
            foreach ($id_products as $id){
                $rests = $this->db->query("SELECT prod.quantity, attr.text FROM " . DB_PREFIX . "product prod, " . DB_PREFIX . "product_attribute attr WHERE prod.product_id = '" . $id . "'" . " AND attr.text = '" . $col . "'" . " AND attr.product_id = '" . $id . "'");
                foreach ($rests->rows as $rest) {
                    $allRests[$id] = $rest;
                }
            }
        }

        //Получаем остатки по отдельным цветам
        foreach ($color as $col) {
            foreach ($allRests as $rest) {
                if ($rest['text'] == $col) {
                    $res[$col][]['quantity'] = $rest["quantity"];
                }
            }
        }

        foreach ($res as $key => $value) {
            foreach ($color as $col) {
                if ($key == $col) {
                    foreach ($value as $values) {
                        $v[$col][] = (int)$values["quantity"];
                    }
                    $u = array_sum($v[$col]);
                    $result[][$key] = $u;
                }

            }
        }

        return $result;
    }

    public function getProducts($product_id_m)
    {
        //Вытаскиваем модель текущего товара
        $model_current_product = $this->db->query("SELECT * FROM " . DB_PREFIX . 'product' . ' WHERE product_id = ' . (int)$product_id_m );

        if ($model_current_product->num_rows) {
            $prod[] = $model_current_product->row;
        } else {
            return 0;
        }
        return $prod;
    }

    public function getOneProductAttributes($id)
    {
        $allAttributes = [];
        $attributes = $this->db->query("SELECT attr.text FROM " . DB_PREFIX . 'product_attribute attr' . ' WHERE product_id = ' . (int)$id );

        foreach ($attributes->rows as $attribute) {
            $allAttributes[]['text'] = $attribute['text'];
        }
        return $allAttributes;
    }
}