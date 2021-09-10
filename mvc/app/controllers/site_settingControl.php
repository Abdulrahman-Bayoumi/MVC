<?php 
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\site_settingModel;
use itrax\core\helper;
class site_settingControl extends controller
{
    
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['user']))
        {
            exit("This Method Not Allowed");
        }
    }

    public function theme()
    {
        $theme = site_settingModel::instanc();
        $theme_key = $theme->GetSetting('theme');
        $title = "Dashboard";
        return $this->view("backend/site_setting/theme" , ['title' => $title , 'theme_key' => $theme_key]);
    }

    public function posttheme()
    {
       
        $data = [
            'site_value' => $_POST['value']
        ];
        
        
        $theme_res = $theme->UpdateSetting($data,1);
        if ($theme_res)
        {
            helper::redirect("site_setting/theme");
        }
    }

    public function setting()
    {
        
        $headline = $theme->GetSetting("headline");
        $title = "Setting";
        return $this->view("backend/site_setting/setting" , ['title' => $title , 'headline' => $headline]);
    }

    public function postsetting()
    {
        $data = [
            'value' => $_POST['value']
        ];
        
        
        $theme_res = $theme->UpdateSetting($data,2);
        if ($theme_res)
        {
            helper::redirect("setting/setting");
        }
    }
}
