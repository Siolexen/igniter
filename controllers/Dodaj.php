<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dodaj extends CI_Controller {

	public function index()
	{
            echo "dasdasdsa<br> <br>";
            $this->load->database();
            //$query = $this->db->query("INSERT INTO `codeigniter`.`news` (`id`, `title`, `content`) VALUES (NULL, 'dsafddffdsa', 'dfsf sdf sfg')");
            $this->load->helper("form");
            $this->load->helper("url");
            
            
            //$sql = "SELECT * FROM `codeigniter`.`news`";
            //$query2 = $this->db->query($sql);
            $query = $this->db->get('news');
            
            $this->load->view('dodaj');
            
	}
        
        public function add() {
            $this->load->database();
            $title = $this->input->post("input_title");
            $desc = $this->input->post("input_desc");
            
            $query = $this->db->query("INSERT INTO `codeigniter`.`news` (`id`, `title`, `content`) VALUES (NULL, '$title', '$desc')");


            echo "Dziala<br>";
            echo $this->input->post("input_title");
            header("Location: /code/Code/index.php/Dodaj/");
        }
        
        public function remove() {
            $this->load->database();
            $id = $this->input->post("input_id");
            $this->db->where('id', $id);
            $this->db->delete('news');

            echo "usun<br>";
         header("Location: /code/Code/index.php/Dodaj/usun");
        }
        
        public function update() {
            //$this->load->helper("form");
            //$this->load->helper("url");
            
            $this->load->database();
            
            $id = $this->input->post("input_id");
            $title = $this->input->post("input_title");
            $desc = $this->input->post("input_desc");
            
echo $id." ".$title." ".$desc."<br>";
            $data = array(
                'id' => "$id",
                'title'  => "$title",
                'content'  => "$desc"
             );
            
            //$this->db->set(`title`, "$title", FALSE);
            //$this->db->set($data);
            $this->db->where('id', $id);
            $this->db->replace('news', $data);
         
                //$this->db->insert('news');
        
            echo "zmien<br>";
            var_dump($data);
            header("Location: /code/Code/index.php/Dodaj/select");
            //$this->load->view('update');
        }
        public function select() {
            $this->load->helper("form");
            $this->load->helper("url");
            
            $this->load->database();
            
            $this->load->view('update');
        }
        
        public function usun() {
            $this->load->helper("form");
            $this->load->helper("url");
            
            $this->load->database();
            
            $this->load->view('remove');
        }        
}

