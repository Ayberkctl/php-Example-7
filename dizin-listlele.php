<?php
   /* scandir()
    glob()
    */
    //$dosyalar = array_filter(scandir("."),"is_dir");
    //var_dump($dosyalar);

    $dosyalar = glob("*{/,php,txt}",GLOB_BRACE);//"GLOB_ONLYDIR" OR "/" and ".php "only php folder 
    //print_r($dosyalar);
     function dosya_listele($dizin_adi){
        $folders=scandir($dizin_adi);
        echo "<ul>";
        foreach($folders as $folder){
            if(!in_array($folder,[".",".."])){
                echo "<li>".$folder;
                if(is_dir($dizin_adi."/".$folder)){ 
                    dosya_listele($dizin_adi."/".$folder);
                }
                "</li>";
            }
            
        }
        echo"</ul>";
    }
    //dosya_listele(".");
    function listele($dizin_adi){
        echo"<ul>";
            $folders=glob($dizin_adi);
            foreach($folders as $folder){
                echo "<li>".$folder;
                if(is_dir($folder)){ 
                    listele($folder."/*");
                }
                "</li>";
            }
        echo"</ul>";
    }
    listele("*")
    //print_r(glob("1/*"));
?>