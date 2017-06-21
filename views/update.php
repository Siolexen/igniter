<html>
    <head>
        <title>
           Tak
        </title>
    </head>
    <body>
            <?php
            $query = $this->db->get('news');
            
            foreach($query->result() as $row){
                echo " <br> ";
                echo form_open(base_url()."index.php/Dodaj/update");
                echo form_hidden("input_id", "$row->id");
                echo form_input("input_title", "$row->title");
                echo form_input("input_desc", "$row->content");
                echo form_submit("input_update", "Zmien");
                echo form_close("<br>");

            }
            ?>
        <a href="/code/Code/index.php/Dodaj/select">Zmien</a>
        <a href="/code/Code/index.php/Dodaj/usun">Usun</a>
        <a href="/code/Code/index.php/Dodaj/index">Dodaj</a>
    </body>
</html>  


