<html>
    <head>
        <title>
           Tak
        </title>
    </head>
    <body>
        <?php echo form_open(base_url()."index.php/Dodaj/add");?>
            Podaj tytul: <?php echo form_input("input_title", "ss"); ?> <br>
            podaj tekst: <?php echo form_input("input_desc", ""); ?><br>
        <?php echo form_submit("input_add", "Add text"); ?>
        
        <a href="/code/Code/index.php/Dodaj/select">Zmien</a>
        <a href="/code/Code/index.php/Dodaj/usun">Usun</a>
        <a href="/code/Code/index.php/Dodaj/index">Dodaj</a>
    </body>
</html>
