<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class webpage extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->model("model");
        $this->load->helper("url");
        $this->load->library("Navigation");
    }

    public function index() {
        $slug = $this->model->get_default_slug();
        $data["menu"] = $this->navigation->create($this->model->fetch_navigation());
        $data["sidemenu"] = $this->navigation->create($this->model->fetch_side_navigation());
        $data["bottommenu"] = $this->navigation->create($this->model->fetch_bottom_navigation());
        $data['result'] = $this->model->show_page($slug);
	//echo"<pre>";print_r($data['result']);exit;
       	//$data['video'] = $this->model->get_video($data['result'][0]->video_content_id);
       // $data['bulletin'] = $this->model->get_bulletin($data['result'][0]->bulletin_content_id);
	//$data['notification'] = $this->model->get_notification($data['result'][0]->notification_content_id);
        //$data['staffdirectory'] = $this->model->get_staff_directory($data['result'][0]->staffdirectory_content_id);
        //$data['contactus'] = $this->model->get_contact_us($data['result'][0]->contactus_content_id);
        //$data['news'] = $this->model->get_news($data['result'][0]->news_content_id);
	$data['video'] = $this->model->get_video($data['result']->video_content_id);
        $data['bulletin'] = $this->model->get_bulletin($data['result']->bulletin_content_id);
        $data['notification'] = $this->model->get_notification($data['result']->notification_content_id);
        $data['staffdirectory'] = $this->model->get_staff_directory($data['result']->staffdirectory_content_id);
        $data['contactus'] = $this->model->get_contact_us($data['result']->contactus_content_id);
        $data['news'] = $this->model->get_news($data['result']->news_content_id);
        $data['slug'] = $slug;
        $data["sideimage1"] = $this->model->get_sideimage1();
        $data["sideimage2"] = $this->model->get_sideimage2();
        $this->load->view('webpages/page', $data);
    }

    public function page($slug) {
        $data['slug'] = $slug;
        $data["menu"] = $this->navigation->create($this->model->fetch_navigation());
        $data["sidemenu"] = $this->navigation->create($this->model->fetch_side_navigation());
        $data["bottommenu"] = $this->navigation->create($this->model->fetch_bottom_navigation());
        $data["sideimage1"] = $this->model->get_sideimage1();
        $data["sideimage2"] = $this->model->get_sideimage2();
        if ($slug != 'gallery') {
            $data['result'] = $this->model->show_page($slug);
            $data['video'] = $this->model->get_video($data['result']->video_content_id);
            $data['bulletin'] = $this->model->get_bulletin($data['result']->bulletin_content_id);
            $data['notification'] = $this->model->get_notification($data['result']->notification_content_id);
            $data['staffdirectory'] = $this->model->get_staff_directory($data['result']->staffdirectory_content_id);
            $data['contactus'] = $this->model->get_contact_us($data['result']->contactus_content_id);
            $data['news'] = $this->model->get_news($data['result']->news_content_id);
        } else {
            $data['result'] = $this->model->get_gallery_images();
        }
        $this->load->view('webpages/page', $data);
    }

    public function show_image($gallery_id) {
        $data["menu"] = $this->navigation->create($this->model->fetch_navigation());
        $data["sidemenu"] = $this->navigation->create($this->model->fetch_side_navigation());
        $data["bottommenu"] = $this->navigation->create($this->model->fetch_bottom_navigation());
        $data["sideimage1"] = $this->model->get_sideimage1();
        $data["sideimage2"] = $this->model->get_sideimage2();
        
		$data['result'] = $this->model->get_gallery_images($gallery_id);
        $this->load->view('webpages/show_image', $data);
    }

}
