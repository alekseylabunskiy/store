<?php
class ControllerModuleProductModifications extends Controller
{

    public function getModifications()
    {
        //ай ди просматриваемого товара
        $product_id = $this->request->get['product_id'];

        //Загружаем модель
        $this->load->model('module/mod');

        //Достаем все опции товаров сязанных с просматриваемым товаром
        $json['products'] = $this->model_module_mod->getSomeAttributes($product_id);

        $json['modifications'] = $this->model_module_mod->allModifications($product_id);

        $json['attributes'] = $this->model_module_mod->getOneProductAttributes($product_id);

        $this->response->setOutput(json_encode($json));
    }


    public function getOneProduct()
    {
        //id product
        $product_id_m = $this->request->post['id_product_m'];
        //Загружаем модель
        $this->load->model('module/mod');

        $json['oneProduct'] = $this->model_module_mod->getProducts($product_id_m[0]);

        $this->response->setOutput(json_encode($json));
    }

}