
    public function test(Request $request)
    {
        $path = public_path();
        $filename = "$path/test.mp4";
        $handle = fopen($filename, "rb");
        $fsize = filesize($filename);

        fseek($handle,0);
            $contents=fread($handle,8);
        fclose($handle);
       $encode = base64_encode($contents);
        echo $encode;
        $handle1 = fopen($filename, "rb");
        $read=fread($handle1,$fsize);
        $read=str_replace($contents,11111111,$read);
       $handle1= fopen($filename, "wb");
        $write=fwrite($handle1,$read);
        fclose($handle1);
        $readcontents=fopen($filename, "rb");
        $file=fread($readcontents,$fsize);
       // echo$file;

       /* for($i=0;$i<8;$i++) {
                fseek($handle1, $i);

                $replace = fwrite($handle1,8);
            }
        echo$replace;
         // $contents11=fread($handle1,$fsize);
         // echo $contents11;
           fclose($handle1);



       // $handle3 = fopen($filename, "rb");
        //$contents3 = fread($handle3, $fsize);
        //echo $contents3;*/





       /* for ($i = 0; $i<$fsize; $i++) {
            $asciiCharacter = $contents[$i];
            $base10value = ord($asciiCharacter);
            $base2representation = base_convert($base10value, 10, 2);
            $header[]=$base2representation;
        }
        print_r($header);*/
        //for ($i=0;$i<8;$i++)
       // {


       // }


    }

    public function test1()
    {

        $path = public_path();
        $filename = "$path/test.mp4";
        $string = "AAAAHGZ0eXA=";
        $decode = base64_decode($string);
        $fsize = filesize($filename);

        $handle1 = fopen($filename, "rb");
        $read=fread($handle1,$fsize);
        $read=str_replace(11111111,$decode,$read);
        $handle1= fopen($filename, "wb");
        $write=fwrite($handle1,$read);
        fclose($handle1);
       

    }
}
