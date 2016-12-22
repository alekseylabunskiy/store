<?php
class ControllerModuleSendOrder extends Controller
{

    public function sendOrderParams($data,$params)
    {
        $pas = serialize($params);

        if ($curl = curl_init()) {
            curl_setopt($curl, CURLOPT_URL, CRM_ADRESS);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $pas);
            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }
}