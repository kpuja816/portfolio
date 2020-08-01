 <?php

       $f="https://github.com/kpuja816/portfolio/blob/master/assets/MyResume.pdf";   

       $file = ("assets/$f");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);

  ?>    
