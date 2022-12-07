<?php
// dosya oluşturma
//touch()
//touch("test.txt",time()-84000);
    /*
        Kipler;
            r - okumak için aç
            r+ - okumak ve yazmak için aç
            w - yazmak için aç (dosya yok ise oluşturulur varsa üstüne yazar)
            w+ - okumak ve yazmak için aç
            a - yazmak için aç
            a+ - okumak ve yazmak için aç
    */
    /*
            fopen() - dosyayı açmamızı sağlar
            fclose() - dosayayı kapatmamıza sağlıyor
            fwrite() - dosayaya bişeyler yazar
            fread() - tüm içerği dosayayı okur 
            fgets() - satır satır oku 
            feof()- dosyanın sonuna gelip gelmediğini döndürür
            filesize() - dosya karekter sayısını döndürür
            unlink() - dosyayı siler 
    */

    $str="bu bir örnektir ".rand(0,100)."\n";

        $dosya= fopen("test.txt","a+");
        //fwrite($dosya,$str);
        //echo fread($dosya,filesize("test.txt"));
        
        /*
        while(!feof($dosya)){
            echo fgets($dosya)."<br>";
        } */

        //$degerler = file("test.txt");
        //print_r($degerler);
        
        fclose($dosya);
        //unlink("test.txt");

        /* 
            file_get_contents();
            file_put_contents();
        */

        //file_put_contents("test.txt","bu yeni deger",FILE_APPEND);
        //$icerik = file_get_contents("https://www.google.com/");
        $icerik = file_get_contents("test.txt");
        echo $icerik;
?>