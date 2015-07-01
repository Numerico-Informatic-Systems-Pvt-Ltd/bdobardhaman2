<?php

class model extends CI_Model {

    private static $table_menu = 'menu';
    private static $table_page = 'page';
    private static $table_side_menu = 'side_menu';
    private static $table_bottom_menu = 'bottom_menu';

    function __construct() {
        parent::__construct();
    }

    function create_bottom_menu_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from ' . model::$table_bottom_menu);
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_bottom_menu($parent_id, $menu_rank, $menu_name, $link, $description,$ul,$content,$image) {
        $menu_id = $this->create_bottom_menu_id();
        $this->db->query("insert into " . model::$table_bottom_menu . " (id,rank,parent_id,name,link,description,underline,widget,widget_image) "
                . "values('" . $menu_id . "','" . $menu_rank . "','" . $parent_id . "','" . $menu_name . "','" . $link . "','" . $description . "','".$ul."','" . $content . "','".$image."')");
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function fetch_bottom_menu_to_edit($id) {
        $sql = "select COALESCE( p.id, 0 ) 'pid',c.id , COALESCE(p.name,'No-Parent') 'parent', c.name , c. rank,c.link,c.description,underline,widget,widget_image from (SELECT id,name from " . model::$table_bottom_menu . ")p right join (SELECT id,parent_id,rank,name,link,description,underline,widget,widget_image from " . model::$table_bottom_menu . ") c on p.id=c.parent_id where c.id=" . $id;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function update_bottom_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image) {
        $sql = "update " . model::$table_bottom_menu . " set parent_id ='" . $parent_id . "' , rank ='" . $menu_rank . "' , name ='" . $menu_name . "' , link='" . $link . "' , description = '" . $description . "' , underline='" . $underline . "' , widget='" . $widget . "' , widget_image='" . $widget_image . "' where id ='" . $id . "'";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete_bottommenu($id){
        if($id){
            $this->db->where('id',$id);
            $this->db->delete('bottom_menu');
           return ($this->db->affected_rows() != 1) ? false : true; 
        }
    }
    
    function fetch_bottom_navigation() {
        $sql = "SELECT * FROM (
        SELECT CONCAT('/',t1.id) AS 'actual_path' ,
        t1.id,t1.name,t1.rank,t1.link,t1.underline,t1.widget,t1.widget_image,t1.description 
        FROM " . model::$table_bottom_menu . " AS t1 WHERE t1.parent_id='0' 
        ORDER BY t1.rank
        ) a
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id) AS 'actual_path',
        t2.id , t2.name,t2.rank,t2.link,t2.underline,t2.widget,t2.widget_image,t2.description 
        FROM " . model::$table_bottom_menu . " AS t1
        JOIN " . model::$table_bottom_menu . " AS t2 on t2.parent_id=t1.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank) b
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id,'/',t3.id) AS 'actual_path',
        t3.id , t3.name,t3.rank,t3.link,t3.underline,t3.widget,t3.widget_image,t3.description 
        FROM " . model::$table_bottom_menu . " AS t1
        JOIN " . model::$table_bottom_menu . " AS t2 on t2.parent_id=t1.id
        JOIN " . model::$table_bottom_menu . " AS t3 on t3.parent_id=t2.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank,t3.rank) c;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function create_side_menu_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from ' . model::$table_side_menu);
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_side_menu($parent_id, $menu_rank, $menu_name, $link, $description,$content,$underline,$widget_image) {
        $menu_id = $this->create_side_menu_id();
        $this->db->query("insert into " . model::$table_side_menu . " (id,rank,parent_id,name,link,description,widget,underline,widget_image) "
                . "values('" . $menu_id . "','" . $menu_rank . "','" . $parent_id . "','" . $menu_name . "','" . $link . "','" . $description . "','".$content."','".$underline."','".$widget_image."')");
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function fetch_side_menu_to_edit($id) {
        $sql = "select COALESCE( p.id, 0 ) 'pid',c.id , COALESCE(p.name,'No-Parent') 'parent', c.name , c. rank,c.link,c.description,underline,widget,widget_image from (SELECT id,name from " . model::$table_side_menu . ")p right join (SELECT id,parent_id,rank,name,link,description,underline,widget,widget_image from " . model::$table_side_menu . ") c on p.id=c.parent_id where c.id=" . $id;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function update_side_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image) {
        $sql = "update " . model::$table_side_menu . " set parent_id ='" . $parent_id . "' , rank ='" . $menu_rank . "' , name ='" . $menu_name . "' , link='" . $link . "' , description = '" . $description . "' , underline='" . $underline . "' , widget='" . $widget . "' , widget_image='" . $widget_image . "' where id ='" . $id . "';";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete_sidemenu($id){
        if($id){
            $this->db->where('id',$id);
            $this->db->delete('side_menu');
           return ($this->db->affected_rows() != 1) ? false : true; 
        }
    }
    
    function fetch_side_navigation() {
        $sql = "SELECT * FROM (
        SELECT CONCAT('/',t1.id) AS 'actual_path' ,
        t1.id,t1.name,t1.rank,t1.link,t1.underline,t1.widget,t1.widget_image,t1.description 
        FROM " . model::$table_side_menu . " AS t1 WHERE t1.parent_id='0' 
        ORDER BY t1.rank
        ) a
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id) AS 'actual_path',
        t2.id , t2.name,t2.rank,t2.link,t2.underline,t2.widget,t2.widget_image,t2.description 
        FROM " . model::$table_side_menu . " AS t1
        JOIN " . model::$table_side_menu . " AS t2 on t2.parent_id=t1.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank) b
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id,'/',t3.id) AS 'actual_path',
        t3.id , t3.name,t3.rank,t3.link,t3.underline,t3.widget,t3.widget_image,t3.description 
        FROM " . model::$table_side_menu . " AS t1
        JOIN " . model::$table_side_menu . " AS t2 on t2.parent_id=t1.id
        JOIN " . model::$table_side_menu . " AS t3 on t3.parent_id=t2.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank,t3.rank) c;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function create_menu_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from ' . model::$table_menu);
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_menu($parent_id, $menu_rank, $menu_name, $link, $description,$content,$underline,$widget_image) {
        $menu_id = $this->create_menu_id();
        $this->db->query("insert into " . model::$table_menu . " (id,rank,parent_id,name,link,description,underline,widget,widget_image) "
                . "values('" . $menu_id . "','" . $menu_rank . "','" . $parent_id . "','" . $menu_name . "','" . $link . "','" . $description . "','".$underline."','".$content."','".$widget_image."')");
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update_menu($id, $parent_id, $menu_rank, $menu_name, $link, $description, $underline, $widget, $widget_image) {
        if ($widget_image == "") {
            $this->db->query("update " . model::$table_menu . " set parent_id ='" . $parent_id . "' , rank ='" . $menu_rank . "' , name ='" . $menu_name . "' , link='" . $link . "' , description = '" . $description . "' , underline='" . $underline . "' , widget='" . $widget . "' where id ='" . $id . "';");
        } else {
            $this->db->query("update " . model::$table_menu . " set parent_id ='" . $parent_id . "' , rank ='" . $menu_rank . "' , name ='" . $menu_name . "' , link='" . $link . "' , description = '" . $description . "' , underline='" . $underline . "' , widget='" . $widget . "' , widget_image='" . $widget_image . "' where id ='" . $id . "';");
        }
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete_topmenu($id){
        if($id){
            $this->db->where('id',$id);
            $this->db->delete('menu');
           return ($this->db->affected_rows() != 1) ? false : true; 
        }
    }
    
    function fetch_menu() {
        $query = $this->db->query('SELECT id,rank,name,link,description from ' . model::$table_menu . " order by parent_id,rank;");
        $result = $query->result();
        return $result;
    }

    function fetch_menu_to_edit($id) {
        $sql = "select COALESCE( p.id, 0 ) 'pid',c.id , COALESCE(p.name,'No-Parent') 'parent', c.name , c. rank,c.link,c.description,underline,widget,widget_image from (SELECT id,name from " . model::$table_menu . ")p right join (SELECT id,parent_id,rank,name,link,description,underline,widget,widget_image from " . model::$table_menu . ") c on p.id=c.parent_id where c.id=" . $id;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function fetch_navigation() {
        $sql = "SELECT * FROM (
        SELECT CONCAT('/',t1.id) AS 'actual_path' ,
        t1.id,t1.name,t1.rank,t1.link,t1.underline,t1.widget,t1.widget_image,t1.description 
        FROM " . model::$table_menu . " AS t1 WHERE t1.parent_id='0' 
        ORDER BY t1.rank
        ) a
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id) AS 'actual_path',
        t2.id , t2.name,t2.rank,t2.link,t2.underline,t2.widget,t2.widget_image,t2.description 
        FROM " . model::$table_menu . " AS t1
        JOIN " . model::$table_menu . " AS t2 on t2.parent_id=t1.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank) b
        UNION ALL
        SELECT * FROM(
        SELECT CONCAT('/',t1.id,'/',t2.id,'/',t3.id) AS 'actual_path',
        t3.id , t3.name,t3.rank,t3.link,t3.underline,t3.widget,t3.widget_image,t3.description 
        FROM " . model::$table_menu . " AS t1
        JOIN " . model::$table_menu . " AS t2 on t2.parent_id=t1.id
        JOIN " . model::$table_menu . " AS t3 on t3.parent_id=t2.id
        WHERE t1.parent_id ='0'
        ORDER BY t1.rank,t2.rank,t3.rank) c;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function create_page_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from ' . model::$table_page);
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_page($page_title, $page_content, $page_slug, $page_default,$page_video_content,$page_bulletin_content,$page_news_content,$page_notification_content,$page_staffdir_content,$page_conatct_content) {
        $page_id = $this->create_page_id();
        if ($page_default) {
            $this->db->query("update " . model::$table_page . " set default_page='0';");
        }
        $sql = "INSERT INTO " . model::$table_page .
                " (`id`,`title`,`content`,`slug`,`default_page`,`video_content_id`,`bulletin_content_id`,`notification_content_id`,`staffdirectory_content_id`,`contactus_content_id`,`news_content_id`) "
                . "VALUES ('" . $page_id . "','" . $page_title . "','"
                . $page_content . "','" . $page_slug . "','" . $page_default . "','".$page_video_content."','".$page_bulletin_content."','".$page_notification_content."','".$page_staffdir_content."','".$page_conatct_content."','".$page_news_content."');";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update_page($page_id, $page_title, $page_content, $page_slug, $page_default, $page_video_content, $page_bulletin_content, $page_news_content, $page_notification_content, $page_staffdir_content, $page_conatct_content) {
        if ($page_default) {
            $this->db->query("update " . model::$table_page . " set default_page='0';");
        }
        $sql = "update " . model::$table_page . " set title ='" . $page_title . "', slug='" . $page_slug . "' , content ='" . $page_content . "' , default_page='" . $page_default . "' , video_content_id='" . $page_video_content . "' , bulletin_content_id='" . $page_bulletin_content . "' , notification_content_id='" . $page_notification_content . "' , staffdirectory_content_id='" . $page_staffdir_content . "' , contactus_content_id='" . $page_conatct_content . "' , news_content_id='" . $page_news_content . "' where id ='" . $page_id . "'";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete_page($id){
        if($id){
           $this->db->where('id',$id); 
           $this->db->delete('page');
           return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function get_default_slug() {
	$query = $this->db->get_where('page',array('default_page'=>1));
        //$query = $this->db->query('SELECT slug FROM ' . model::$table_page . " WHERE default_page =1;");
        //$result = $query->result_array();
        $result= $query->first_row();
	
        //return $result[0]['slug'];
        //echo"<pre>";print_r($result);exit;
	return $result->slug;
    }

    function get_pages() {
        $query = $this->db->query('SELECT id,title,slug FROM ' . model::$table_page);
        $result = $query->result();
        return $result;
    }

    function get_page($id) {
        $query = $this->db->query("SELECT * FROM " . model::$table_page . " WHERE id = '" . $id."'");
         $result = $query->first_row();
        return $result;
    }

    function show_page($slug) {
        $sql = "SELECT title,content,video_content_id,bulletin_content_id,notification_content_id,staffdirectory_content_id,contactus_content_id,news_content_id FROM " . model::$table_page . " WHERE slug = '" . $slug . "'";
        $query = $this->db->query($sql);
        //$result = $query->result();
        $result = $query->first_row();
        return $result;
    }

    function get_page_video($pageid) {
        $sql = "SELECT link,content FROM videos WHERE page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_page_bulletin($pageid) {
        $sql = "SELECT image,content FROM bulletins WHERE page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_page_notification($pageid) {
        $sql = "SELECT content FROM notifications WHERE page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_page_staffdirectory($pageid) {
        $sql = "SELECT content FROM staffdirectory WHERE page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_page_contactus($pageid) {
        $sql = "SELECT content FROM contactus WHERE page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_page_news($pageid) {
        $sql = "SELECT tab_name,tab_content FROM news where page_id='" . $pageid . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_videos() {
        $sql = "SELECT id,header from videos";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_video($id) {
        $sql = "SELECT * from videos where id='" . $id . "'";
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }

    function get_bulletins() {
        $sql = "SELECT id,header from bulletins";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_bulletin($id) {
        $sql = "select * from bulletins where id='".$id."'";
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }

    function get_notifications() {
        $sql = "SELECT id,header,content from notifications;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_notification($id) {
        $sql = "SELECT id,header,content from notifications where id='" . $id . "'";
        $query = $this->db->query($sql);
        //$result = $query->result();
	$result = $query->first_row();
        return $result;
    }

    function create_notification_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from notifications;');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_notification($header, $content) {
        $id = $this->create_notification_id();
        $sql = "INSERT INTO notifications (id,header,content) VALUES('" . $id . "','" . $header . "','" . $content . "') ;";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update_notification($id, $header, $content) {
        $this->db->query("UPDATE notifications SET header ='" . $header . "', content='" . $content . "' WHERE id ='" . $id . "';");
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete_notification($id){
        $this->db->where('id',$id);
        $this->db->delete('notifications');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function get_staff_directories() {
        $sql = "SELECT id,header,content from staffdirectory;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_staff_directory($id) {
        $sql = "SELECT id,header,content from staffdirectory where id='" . $id . "';";
        $query = $this->db->query($sql);
        //$result = $query->result();
	$result = $query->first_row();
        return $result;
    }

    function create_contactus_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from contactus');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_contactus($header, $content) {
        $id = $this->create_contactus_id();
        $sql = "INSERT INTO contactus (id,header,content) VALUES('" . $id . "','" . $header . "','" . $content . "') ;";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update_stuff_directory($id, $header, $content) {
        $this->db->query("update staffdirectory set header ='" . $header . "', content='" . $content . "' where id ='" . $id . "';");
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function get_contact_us_all() {
        $sql = "SELECT id,header,content from contactus ;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_contact_us($id) {
        $sql = "SELECT id,header,content from contactus where id='" . $id . "';";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function create_satffdirectory_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id FROM staffdirectory');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_staffdirectory($header, $content) {
        $id = $this->create_satffdirectory_id();
        $sql = "INSERT INTO staffdirectory (id,header,content) VALUES('" . $id . "','" . $header . "','" . $content . "') ;";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete_staffdirectory($id){
        $this->db->where('id',$id);
        $this->db->delete('staffdirectory');
        return($this->db->affected_rows() !=1) ? false : true;
    }
    
    function edit_contact_us($id, $header, $content) {
        $data = array('header'=>$header,'content'=>$content);
        $where = $this->db->where('id',$id);
        $this->db->update('contactus',$data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete_contactus($id){
        $this->db->where('id', $id);
        $this->db->delete('contactus');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function get_news_headers() {
        $sql = "SELECT news_id, header FROM news GROUP BY news_id, header;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function get_news_id(){
        $sql =  "SELECT news_id FROM `news` ORDER BY news_id DESC LIMIT 0,1";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
        
    }
    function get_news($id) {
        $sql = "SELECT tab_name,tab_content FROM `news` WHERE news_id='" . $id . "';";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function gallery_name_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from gallery_name');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_gallery_name($name) {
        $id = $this->gallery_name_id();
        $sql = "insert into gallery_name(id,name) values('" . $id . "','" . $name . "') ";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function fetch_gallery_names() {
        $sql = "SELECT id,name from gallery_name;";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function fetch_gallery_name($id) {
        $sql = "select name from gallery_name where id='" . $id . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function update_gallery_name($id, $name) {
        $sql = "update gallery_name set name ='" . $name . "' where id='" . $id . "'";
        $query = $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function delete_gallery_name($id) {
        $this->db->where('id', $id);
        $this->db->delete('gallery_name');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function create_gallery_id() {
        $query = $this->db->query('select if(isnull(max(id)),1,max(id)+1) as id from gallery_images');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    function create_gallery($gallery_id, $image_name) {
        $id = $this->create_gallery_id();
        $sql = "insert into gallery_images(id,gallery_id,image_name) values('" . $id . "','" . $gallery_id . "','" . $image_name . "')";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function get_gallery_names() {
        $sql = "select id,name from gallery_name";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    function get_gallery_images($gallery_id = NULL) {
		if($gallery_id){
			$sql = "select image_name from gallery_images where gallery_id='" . $gallery_id . "'";
		}else{
			$sql = "select image_name from gallery_images";
		}
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    function delete_news($id){
	$this->db->where('news_id',$id);
        $this->db->delete('news');
	return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    public function create_news($input){
        if($input){
            $this->db->insert('news',$input);
	    return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function update_news($tab_1, $tab_1_content, $tab_2, $tab_2_content, $tab_3, $tab_3_content, $tab_4, $tab_4_content) {
        $sql = "update news set tab_name ='" . $tab_1 . "' , tab_content ='" . $tab_1_content . "' where tab_id='1'";
        $this->db->query($sql);
        $sql = "update news set tab_name ='" . $tab_2 . "' , tab_content ='" . $tab_2_content . "' where tab_id='2'";
        $this->db->query($sql);
        $sql = "update news set tab_name ='" . $tab_3 . "' , tab_content ='" . $tab_3_content . "' where tab_id='3'";
        $this->db->query($sql);
        $sql = "update news set tab_name ='" . $tab_4 . "' , tab_content ='" . $tab_4_content . "' where tab_id='4'";
        $this->db->query($sql);
    }

    function create_video($inputs){
        if($inputs){
            $this->db->insert('videos',$inputs);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function update_video($id, $video_link, $video_content) {
        $sql = "update videos set link='" . $video_link . "' , content = '" . $video_content . "' where id='" . $id . "'";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete_video($id){
        if($id){
            $this->db->where('id',$id);
            $this->db->delete('videos');
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function create_bulletin($inputs){
        if($inputs){
            $this->db->insert('bulletins',$inputs);
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function update_bulletin($id, $image, $content) {
        $sql = "update bulletins set image ='" . $image . "' , content = '" . $content . "' where id ='" . $id . "' ";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete_bulletin($id){
        if($id){
            $this->db->where('id',$id);
            $this->db->delete('bulletins');
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
               
    function upload_sideimage1($link, $image, $msg) {
        $sql = "UPDATE sideimage1 SET image='" . $image . "' , link ='" . $link . "' , msg='" . $msg . "' WHERE id='1';";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function get_sideimage1() {
        $sql = "select image,link,msg from sideimage1 where id='1';";
        /*$this->db->select('*');
        $this->db->from('sideimage1');
        $this->db->where('id',1);*/
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }

    function upload_sideimage2($link, $image, $msg) {
        $sql = "UPDATE sideimage2 SET image='" . $image . "' , link ='" . $link . "' , msg='" . $msg . "' WHERE id='1';";
        $this->db->query($sql);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function get_sideimage2() {
        $sql = "select image,link,msg from sideimage2 where id='1';";
        /*$data = $this->db->select('*');
        $where = $this->db->where('id',1);
        $result = $this->db->first_row('sideimage2',$data,$where);*/
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }

}
