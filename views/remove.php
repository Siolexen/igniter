<html>
    <head>
        <title>
           Tak
        </title>
    </head>
    <body><?php
            $query = $this->db->get('news');
            
            foreach($query->result() as $row){
                echo form_open(base_url()."index.php/Dodaj/remove");
                echo form_hidden("input_id", "$row->id");
                echo $row->id." ".$row->title." ".$row->content;
                echo form_submit("input_remove", "Usun");
                echo form_close("<br>");
                echo " <br> ";
            }
           
            ?>
        <a href="/code/Code/index.php/Dodaj/select">Zmien</a>
        <a href="/code/Code/index.php/Dodaj/usun">Usun</a>
        <a href="/code/Code/index.php/Dodaj/index">Dodaj</a>

                
    </body>
</html>  


