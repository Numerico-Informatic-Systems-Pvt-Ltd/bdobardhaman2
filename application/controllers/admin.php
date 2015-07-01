<?php
session_start();
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class admin extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->model("model");
        $this->load->helper("url");
        $this->load->library("navigation");
        $this->load->library("uploader");
        $this->load->helper('form');
       // $this->load->library('session');
    }

    public function index() {

        if ($this->input->post('txt_id') && $this->input->post('txt_password')) {
            $id = $this->input->post('txt_id');
            $password = $this->input->post('txt_password');
            if ($id == "admin" && $password == "admin") {
               $_SESSION['user_id'] = 1;
                redirect('/admin/page/create', 'refresh');
            }
        }
        $this->load->view('admin/index');
    }

    public function page_create() {
        if(!$_SESSION['user_id']){
            redirect('/admin', 'refresh');
        }
        $update_success = false;
        if ($this->input->post('txt_page_title') && $this->input->post('txt_page_content') && $this->input->post('txt_page_slug')) {
            $page_title = $this->input->post('txt_page_title');
            $page_slug = $this->input->post('txt_page_slug');
            $page_content = $this->input->post('txt_page_content');
            $page_default = $this->input->post('slct_page_default');
            $page_video_content = $this->input->post('slct_page_video_content');
            $page_bulletin_content = $this->input->post('slct_page_bulletin_content');
            $page_news_content = $this->input->post('slct_page_news_content');
            $page_notification_content = $this->input->post('slct_page_notification_content');
            $page_staffdir_content = $this->input->post('slct_staff_dir_content');
            $page_conatct_content = $this->input->post('slct_page_contactus_content');
            $update_success = $this->model->create_page($page_title, $page_content, $page_slug, $page_default,$page_video_content,$page_bulletin_content,$page_news_content,$page_notification_content,$page_staffdir_content,$page_conatct_content);
        }
        $data['update_success'] = $update_success;
        $data["results"] = $this->model->get_pages();
        $data['videos'] = $this->model->get_videos();
        $data['bulletins'] = $this->model->get_bulletins();
        $data['notification'] = $this->model->get_notifications();
        $data['staffdirectoris'] = $this->model->get_staff_directories();
        $data['contactus'] = $this->model->get_contact_us_all();
        $data['news'] = $this->model->get_news_headers();
        $this->load->view('admin/page_create', $data);
    }

    function page_edit($id) {
        $update_success = false;
        if ($this->input->post()) {
            $page_title = $this->input->post('txt_page_title');
            $page_content = $this->input->post('txt_page_content');
            $page_slug = $this->input->post('txt_page_slug');
            $page_default = $this->input->post('slct_page_default');
            $page_video_content = $this->input->post('slct_page_video_content');
            $page_bulletin_content = $this->input->post('slct_page_bulletin_content');
            $page_news_content = $this->input->post('slct_page_news_content');
            $page_notification_content = $this->input->post('slct_page_notification_content');
            $page_staffdir_content = $this->input->post('slct_staff_dir_content');
            $page_conatct_content = $this->input->post('slct_page_contactus_content');
            $update_success = $this->model->update_page($id, $page_title, $page_content, $page_slug, $page_default, $page_video_content, $page_bulletin_content, $page_news_content, $page_notification_content, $page_staffdir_content, $page_conatct_content);
        }
        if ($update_success) {
            redirect('admin/page/create');
        }
        $data["results"] = $this->model->get_page($id);
        $data['videos'] = $this->model->get_videos();
        $data['bulletins'] = $this->model->get_bulletins();
        $data['notification'] = $this->model->get_notifications();
        $data['staffdirectoris'] = $this->model->get_staff_directories();
        $data['contactus'] = $this->model->get_contact_us_all();
        $data['news'] = $this->model->get_news_headers();
        $this->load->view('admin/page_edit', $data);
    }

    function page_delete($id){
        $update_success = false;
        if($id){
           $update_success = $this->model->delete_page($id); 
        }
        if($update_success){
            redirect('admin/page/create');
        }
    }
    
    public function menu_create() {
        $update_success = false;
        if ($this->input->post()) {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            
            $parent_id = $this->input->post('slct_parent');
            $menu_name = $this->input->post('txt_menu_name');
            $link = $this->input->post('txt_link');
            $content = $this->input->post('txt_widget_content');
            $underline = $this->input->post('slct_undeline');
            $description = $this->input->post('txt_description');
            $menu_rank = $this->input->post('txt_rank');
            $widget_image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $widget_image = $data['upload_data']['file_name'];
            }
            $update_success = $this->model->create_menu($parent_id, $menu_rank, $menu_name, $link, $description,$content,$underline,$widget_image);
        }
        $data['update_success'] = $update_success;
        //$data["results"] = $this->model->fetch_menu();
        $data["results"] = $this->navigation->create($this->model->fetch_navigation());
        $temp_result = $data["results"];
        //echo "<pre>";print_r($temp_result);exit();
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/createmenu', $data);
    }

    public function menu_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_menu_name') && $this->input->post('txt_link') && $this->input->post('txt_rank')) {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            $menu_name = $this->input->post('txt_menu_name');
            $parent_id = $this->input->post('slct_parent');
            $link = $this->input->post('txt_link');
            $description = $this->input->post('txt_description');
            $menu_rank = $this->input->post('txt_rank');
            $underline = $this->input->post('slct_undeline');
            $widget = $this->input->post('txt_widget_content');
            $widget_image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
                //var_dump($error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                //var_dump($data);
                $widget_image = $data['upload_data']['file_name'];
            }
            //echo $widget_image;
            $update_success = $this->model->update_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image);
        }
        if ($update_success) {
            redirect('admin/menu/create', 'refresh');
        }
        $data["results"] = $this->model->fetch_menu_to_edit($id);
        $data['menu'] = $this->navigation->create($this->model->fetch_navigation());
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/editmenu', $data);
    }
    
    public function menu_delete($id){
        $update_success = false;
        if($id){
            $update_success = $this->model->delete_topmenu($id);
        }
        if($update_success){
            redirect('admin/menu/create', 'refresh');
        }
        
    }

    public function sidemenu_create() {
        $update_success = false;
        if ($this->input->post()) {
           // print_r($this->input->post());exit;
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            
            $parent_id = $this->input->post('slct_parent');
            $menu_name = $this->input->post('txt_menu_name');
            $link = $this->input->post('txt_link');
            $description = $this->input->post('txt_description');
            $content= $this->input->post('txt_widget_content');
            $underline =$this->input->post('slct_undeline');;
            $menu_rank = $this->input->post('txt_rank');
            $widget_image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $widget_image = $data['upload_data']['file_name'];
            }
            $update_success = $this->model->create_side_menu($parent_id, $menu_rank, $menu_name, $link, $description,$content,$underline,$widget_image);
        }
        if($update_success){
            redirect('admin/sidemenu/create', 'refresh');
        }
        $data['update_success'] = $update_success;
        //$data["results"] = $this->adminmodel->fetch_menu();
        $data["results"] = $this->navigation->create($this->model->fetch_side_navigation());
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/sidemenu_create', $data);
    }

    public function sidemenu_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_menu_name') && $this->input->post('txt_link') && $this->input->post('txt_rank')) {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            $menu_name = $this->input->post('txt_menu_name');
            $parent_id = $this->input->post('slct_parent');
            $link = $this->input->post('txt_link');
            $description = $this->input->post('txt_description');
            $menu_rank = $this->input->post('txt_rank');
            $underline = $this->input->post('slct_undeline');
            $widget = $this->input->post('txt_widget_content');
            $widget_image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $widget_image = $data['upload_data']['file_name'];
            }
            $update_success = $this->model->update_side_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image);
        }
        if ($update_success) {
            redirect('admin/sidemenu/create', 'refresh');
        }
        $data["results"] = $this->model->fetch_side_menu_to_edit($id);
        $data['menu'] = $this->navigation->create($this->model->fetch_side_navigation());
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/sidemenu_edit', $data);
    }

    public function sidemenu_delete($id){
        $update_success = false;
        if($id){
            $update_success = $this->model->delete_sidemenu($id);
        }
        if($update_success){
            redirect('admin/sidemenu/create', 'refresh');
        }
        
    }
    public function bottommenu_create() {
        $update_success = false;
        if ($this->input->post()) {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            $parent_id = $this->input->post('slct_parent');
            $menu_name = $this->input->post('txt_menu_name');
            $link = $this->input->post('txt_link');
            $content = $this->input->post('txt_widget_content');
            $description = $this->input->post('txt_description');
            $menu_rank = $this->input->post('txt_rank');
            $ul = $this->input->post('slct_undeline');
            $image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $image = $data['upload_data']['file_name'];
            }
            $update_success = $this->model->create_bottom_menu($parent_id, $menu_rank, $menu_name, $link, $description,$ul,$content,$image);
                
        }
        if($update_success){
            reditect('admin/bottommenu/create','refresh');
        }
        $data['update_success'] = $update_success;
        $data["results"] = $this->navigation->create($this->model->fetch_bottom_navigation());
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/bottommenu_create', $data);
    }

   public function bottommenu_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_menu_name') && $this->input->post('txt_link') && $this->input->post('txt_rank')) {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            
            $menu_name = $this->input->post('txt_menu_name');
            $parent_id = $this->input->post('slct_parent');
            $link = $this->input->post('txt_link');
            $description = $this->input->post('txt_description');
            $widget = $this->input->post('txt_widget_content');
            $underline = $this->input->post('slct_undeline');
            $menu_rank = $this->input->post('txt_rank');
            $widget_image = '';
            if (!$this->upload->do_upload('inp_img')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $widget_image = $data['upload_data']['file_name'];
            }
            $update_success = $this->model->update_bottom_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image);
        }
        if ($update_success) {
            redirect('/admin/bottommenu/create', 'refresh');
        }
        $data["results"] = $this->model->fetch_bottom_menu_to_edit($id);
        $data['menu'] = $this->navigation->create($this->model->fetch_bottom_navigation());
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/bottommenu_edit', $data);
    }

    public function bottommenu_delete($id){
        $update_success = false;
        if($id){
            $update_success = $this->model->delete_bottommenu($id);
        }
        if($update_success){
            redirect('admin/bottommenu/create', 'refresh');
        }
        
    }
    
     public function videos_create() {
        $update_success = false;
        if($this->input->post()){
            $inputs = array(
                'header'=>$this->input->post('txt_page_title'),
                'link'=>$this->input->post('txt_page_link'),
                'content'=>$this->input->post('txt_page_content')
            );
            $update_success = $this->model->create_video($inputs);
        }
        if($update_success){
            redirect('admin/videos/create','refresh');
        }
        $data["results"] = $this->model->get_videos();
        $this->load->view('admin/video_create', $data);
    }

    public function videos_edit($id) {
        $update_success = false;
        if ($this->input->post('video_link') && $this->input->post('video_content')) {
            $video_link = $this->input->post('video_link');
            $video_content = $this->input->post('video_content');
            $update_success = $this->model->update_video($id, $video_link, $video_content);
        }
        if($update_success){
            redirect('admin/videos/create','refresh');
        }
        $data["results"] = $this->model->get_video($id);
        $this->load->view('admin/video_edit', $data);
    }
    
   public function videos_delete($id) {
        $update_success = false;
        if($id){
            $update_success = $this->model->delete_video($id);
        }
        if($update_success){
            redirect('admin/videos/create','refresh');
        }
    }

    public function bulletin_create() {
        $update_success = false;
        $data["results"] = $this->model->get_bulletins();
        if($this->input->post()){
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $update_success = true;
                $data = array('upload_data' => $this->upload->data());
                //$image = $data['upload_data']['file_name'];
                $inpus = array(
                'header' => $this->input->post('txt_page_title'),
                'image' => $data['upload_data']['file_name'],
                'content' => $this->input->post('txt_page_content')
                );
                $update_success = $this->model->create_bulletin($inpus);
            }
            
        }
        if($update_success){
            redirect('admin/bulletins/create','refresh');
        }
        $this->load->view('admin/bulletin_create', $data);
    }

     public function bulletin_edit($id) {
        $update_success = false;
        $data["results"] = $this->model->get_bulletin($id);
        if ($this->input->post('txt_bulletin_content')) {

            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            $image = "";
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                //var_dump($error);
            } else {
                $update_success = true;
                $data = array('upload_data' => $this->upload->data());
                //var_dump($data);
                $image = $data['upload_data']['file_name'];
                $content = $this->input->post('txt_bulletin_content');
                $update_success = $this->model->update_bulletin($id, $image, $content);
            }
            if($update_success){
                redirect('admin/bulletins/create','refresh');
            }
            
        }
        $this->load->view('admin/bulletin_edit', $data);
    }
    
    public function bulletin_delete($id) {
        $update_success = false;
        if($id){
            $update_success  = $this->model->delete_bulletin($id);
        }
        if($update_success){
            redirect('admin/bulletins/create','refresh');
        }
    }

    public function news_create() {
        $update_success = false;
        $ids = $this->model->get_news_id();
        $ids = array_map('current', $ids);
	$input_data = $this->input->post();
        if(!empty($input_data)){
            for($i=1;$i<=4;$i++){
            $input = array(
                'news_id'=> $ids[0] + 1,
                'header'=>$this->input->post('txt_page_title'),
                'tab_id'=>$i,
                'tab_name'=>$this->input->post('txt_page_title_'.$i),
                'tab_content'=>$this->input->post('txt_page_content_'.$i)
                );
                if($i == 4){
                    $update_success = $this->model->create_news($input);
                }else{
                    $this->model->create_news($input);
                }
            }
            
        }if($update_success){
            redirect('admin/news/create','refresh');
        }
        $data['results'] = $this->model->get_news_headers();
        $this->load->view('admin/news_create', $data);
    }

 public function news_edit($header, $id) {
        $update_success = false;
        if ($this->input->post('tab_1') && $this->input->post('tab_1_content') && $this->input->post('tab_2') && $this->input->post('tab_2_content') && $this->input->post('tab_3') && $this->input->post('tab_3_content') && $this->input->post('tab_4') && $this->input->post('tab_4_content')) {
            $tab_1 = $this->input->post('tab_1');
            $tab_1_content = $this->input->post('tab_1_content');
            $tab_2 = $this->input->post('tab_2');
            $tab_2_content = $this->input->post('tab_2_content');
            $tab_3 = $this->input->post('tab_3');
            $tab_3_content = $this->input->post('tab_3_content');
            $tab_4 = $this->input->post('tab_4');
            $tab_4_content = $this->input->post('tab_4_content');
            $update_success = $this->model->update_news($tab_1, $tab_1_content, $tab_2, $tab_2_content, $tab_3, $tab_3_content, $tab_4, $tab_4_content);
        }
        if($update_success){
            redirect('admin/news/create','refresh');
        }
        $data["results"] = $this->model->get_news($id);
        $data['header'] = $header;
        $this->load->view('admin/news_edit', $data);
    }
    
    public function news_delete($id){
        $update_success = false;
        if(!empty($id)){
            $update_success = $this->model->delete_news($id);
        }
        if($update_success){
            redirect('admin/news/create', 'refresh');
        }
    }

      public function notification_create() {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->create_notification($header, $content);
        }
        $data['update_success'] = $update_success;
        $data["results"] = $this->model->get_notifications();
        $this->load->view('admin/notification_create', $data);
    }

    public function notification_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->update_notification($id, $header, $content);
        }
        if ($update_success) {
            redirect('admin/notification/create', 'refresh');
        }
        $data["results"] = $this->model->get_notification($id);
	//echo "<pre>";print_r($data["results"]);exit;
        $this->load->view('admin/notification_edit', $data);
    }

    public function  notification_delete($id){
        $update_success = false;
        if(!empty($id)){
            $update_success = $this->model->delete_notification($id);
        }
        if($update_success){
            redirect('admin/notification/create', 'refresh');
        }
    }


    public function staffdirectory_create() {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->create_staffdirectory($header, $content);
        }
        $data['update_success'] = $update_success;
        $data["results"] = $this->model->get_staff_directories();
        $this->load->view('admin/staffdirectory_create', $data);
    }

    public function staffdirectory_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->update_stuff_directory($id, $header, $content);
        }
        if ($update_success) {
            redirect('admin/staffdirectory/create', 'refresh');
        }
        $data["results"] = $this->model->get_staff_directory($id);
        $this->load->view('admin/staffdirectory_edit', $data);
    }
    
    public function staffdirectory_delete($id){
        $update_success = false;
        if(!empty($id)){
            $update_success = $this->model->delete_staffdirectory($id);
        }
        if($update_success){
            redirect('admin/staffdirectory/create', 'refresh');
        }
    }
    
    public function contactus_create() {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->create_contactus($header, $content);
        }
        $data['update_success'] = $update_success;
        $data["results"] = $this->model->get_contact_us_all();
        $this->load->view('admin/contactus_create', $data);
    }

    public function contactus_edit($id) {
        $update_success = false;
        if ($this->input->post('txt_page_content') && $this->input->post('txt_page_title')) {
            $header = $this->input->post('txt_page_title');
            $content = $this->input->post('txt_page_content');
            $update_success = $this->model->edit_contact_us($id, $header, $content);
        }
        if ($update_success) {
            redirect('admin/contactus/create', 'refresh');
        }
        $data["results"] = $this->model->get_contact_us($id);
        $this->load->view('admin/contactus_edit', $data);
    }
    
    public function contactus_delete($id){
        $update_success = false;
        if($id){
            $update_success = $this->model->delete_contactus($id);
        }
        if($update_success){
            redirect('admin/contactus/create', 'refresh');
        }
    }
    
    public function create_gallery_names() {
        $update_success = false;
        if ($this->input->post('txt_gallery_name')) {
            $name = $this->input->post('txt_gallery_name');
            $update_success = $this->model->create_gallery_name($name);
        }
        $data['update_success'] = $update_success;
        $data['result'] = $this->model->fetch_gallery_names();
        $this->load->view('admin/gallery_name_create', $data);
    }

    public function edit_gallety_names($id) {
        $update_success = false;
        if ($this->input->post('txt_gallery_name')) {
            $name = $this->input->post('txt_gallery_name');
            $update_success = $this->model->update_gallery_name($id, $name);
        }
        $data['update_success'] = $update_success;
        if ($update_success) {
            redirect('admin/gallerynames/create', 'refresh');
        }
        $data['result'] = $this->model->fetch_gallery_name($id);
        $this->load->view('admin/gallery_name_edit', $data);
    }
    
    public function delete_gallety_names($id){
        $update_success = false;
        if(!empty($id)){
            $update_success = $this->model->delete_gallery_name($id);
        } 
        if ($update_success) {
            redirect('admin/gallerynames/create', 'refresh');
        }
    }


    public function create_gallery() {
        $update_success = false;
        if ($this->input->post("submit")) {
            $config['upload_path'] = './assets/images/gallery';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('files_upload')) {
                $error = array('error' => $this->upload->display_errors());
                //var_dump( $error);
            } else {
                $update_success = true;
                $data = array('upload_data' => $this->upload->data());
                $data['gallary_name'] = $this->model->create_gallery($this->input->post('slct_gallery'), $data['upload_data']['file_name']);
                //echo($data['upload_data']['file_name']);
                //$this->load->view('upload_success', $data);
            }
        }
        $data['update_success'] = $update_success;
        $data['gallary_name'] = $this->model->fetch_gallery_names();
        $this->load->view('admin/gallery_create', $data);
    }

   public function edit_leftimage1() {
        $update_success = false;
        if ($this->input->post("submit") && $this->input->post('slct_gallery')) {
            $config['upload_path'] = FCPATH.'assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            if(is_file($config['upload_path']))
                {
                    chmod($config['upload_path'], 777);
                }
            if (!$this->upload->do_upload('files_upload')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $update_success = true;
                $data = array('upload_data' => $this->upload->data());
                $this->model->upload_sideimage1($this->input->post('slct_gallery'), $data['upload_data']['file_name'],$this->input->post('txt_msg'));
                
                $this->load->view('admin/edit_leftimage1', $data);
            }
            
        }
        
        $data['update_success'] = $update_success;
        $data['image_info'] = $this->model->get_sideimage1();
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/edit_leftimage1', $data);
    }

    public function edit_leftimage2() {
        $update_success = false;
        if ($this->input->post("submit") && $this->input->post('slct_gallery')) {
            $config['upload_path'] = FCPATH.'assets/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('files_upload')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $update_success = true;
                $data = array('upload_data' => $this->upload->data());
                $this->model->upload_sideimage2($this->input->post('slct_gallery'), $data['upload_data']['file_name'],$this->input->post('txt_msg'));
               
            }
        }
        $data['update_success'] = $update_success;
        $data['image_info'] = $this->model->get_sideimage2();
        $data['page_titles'] = $this->model->get_pages();
        $this->load->view('admin/edit_leftimage2', $data);
    }
    
    /*public function farzina_test(){
        $update_success = false;
        if($this->input->post("submit")){print_r($this->input->post('f'));}
        
        $this->load->view('admin/farzina_test');
       
    }*/
    
    public function admin_logout(){
        session_destroy();
        redirect('/admin', 'refresh');
    } 
}
