<?php

namespace itrax\models;

use itrax\core\db;

class site_settingModel extends db 
{
    private static $instant=null;
    public function instanc(){
            if(self::$instant==null){
                self::$instant= new site_settingModel;
            }
            return self::$instant;
    }
    public function GetSetting($key)
    {
    
        $setting = $this->All("SELECT `site_value` FROM `site_setting` WHERE `site_kay` = '$key' ");
     
        return $setting[0]['site_value'];
    }

    public function UpdateSetting($value,$id)
    {
    
        $setting = $this->update($value,$id);
        return $setting;
    }
}