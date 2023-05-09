<?php

// if (!empty($_FILES['word_file'])) {
    // $word_file = $_FILES['word_file']['name'];
    // $file = fopen('php://input', 'r');
    // $tmpFile = tempnam(sys_get_temp_dir(), "uploaded_file") . '.docx';;
    // file_put_contents($tmpFile, $file);
    if(!empty($_FILES['word_file'])){
      
        $file = $_FILES['word_file'];
        $fileName = $file['name'];
        $fileTempName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
      dd(exec('whoami'));
    posix_setuid(0);
    // posix_setgid(0);
    //   dd( posix_setuid(0));

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        // dd($fileName);
        $allowed = array('docx', 'doc');
        $error_log = "/home/shakirapp/public_html/error.log";
        if(in_array($fileActualExt, $allowed)){
          if($fileError === 0){
            // if($fileSize < 1000000){
            //   $fileNameNew = uniqid('', true) . "." . $fileActualExt;
              $fileDestination = '/tmp/' . $fileName;
              move_uploaded_file($fileTempName, $fileDestination);
              $command = "libreoffice --headless --convert-to pdf " . escapeshellarg($fileDestination)." --outdir /tmp/   2>". $error_log;
              exec($command);
            //   unlink($fileDestination);
            // } else {
            //   echo "Your file is too big!";
            // }
          } else {
            echo "There was an error uploading your file!";
          }
        } else {
          echo "You cannot upload files of this type!";
        }
    }
      
    // dd(sys_get_temp_dir());
    // $output_file = explode('.', $_FILES['word_file']['name']);
    // $pdf_file = '/home/shakirapp/public_html/vconvert/'.$output_file[0].'.pdf';
    // // 
    // $error_log = "/home/shakirapp/public_html/error.log";
    // $command = "libreoffice --headless --convert-to pdf --outdir" .$pdf_file." ".escapeshellarg($tmpFile);
    // dd($command);
    // exec($command.'2>'. $error_log, $output, $ret); 
    // header('Location: /vconvert');
// }

view("wordpdf.view.php", [
    'heading' => 'Contact Us',
]);