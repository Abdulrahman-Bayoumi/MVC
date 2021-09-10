<?php 

namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\site_settingModel;
use itrax\models\categoryModel;
class homeControl extends controller
{
    public function index()
    {
        $setting = new site_settingModel();
        $theme = $setting->GetSetting('theme');
        $headline = $setting->GetSetting('headline');
        $title="ABDO";
        
        return $this->view("frontend\\".$theme."\index",['title'=>$title,'headline'=> $headline]);

    }



}
