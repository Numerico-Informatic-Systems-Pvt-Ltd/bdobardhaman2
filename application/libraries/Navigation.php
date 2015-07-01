<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Navigation {

    public function create($nav, $menu = array()) {
        foreach ($nav as $value) {
            $arr = explode("/", $value->actual_path);
            switch (count($arr)) {
                case 2:
                    $menu[$arr[1]] = array(
                        'id' => $value->id,
                        'name' => $value->name,
                        'link' => $value->link,
                        'underline' => $value->underline,
                        'widget' => $value->widget,
                        'widget_image'=>$value->widget_image,
                        'rank'=>$value->rank,
                        'description'=>$value->description
                    );
                    break;
                case 3:
                    $menu[$arr[1]]['child'][$arr[2]] = array(
                        'id' => $value->id,
                        'name' => $value->name,
                        'link' => $value->link,
                        'underline' => $value->underline,
                        'widget' => $value->widget,
                        'widget_image'=>$value->widget_image,
                        'rank'=>$value->rank,
                        'description'=>$value->description
                    );
                    break;
                case 4:
                    $menu[$arr[1]]['child'][$arr[2]]['child'][$arr[3]] = array(
                        'id' => $value->id,
                        'name' => $value->name,
                        'link' => $value->link,
                        'underline' => $value->underline,
                        'widget' => $value->widget,
                        'widget_image'=>$value->widget_image,
                        'rank'=>$value->rank,
                        'description'=>$value->description
                    );
                    break;
            }
        }
        return $menu;
    }

}
