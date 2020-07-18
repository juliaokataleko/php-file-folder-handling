<?php
require_once('functions.php');

$file_name = "conexao.php";
$file = createFile($file_name);

if($file):

    $content     = "<?php\n/*\nConnection File\n_____________________________";
    $content    .= "\nAuthor: J. F.Kataleko\nDate: 18.07.2020\nLocation: Benguela City, Angola \n*/\n\n// Connection variable\n";
    $content    .= "\$conn = mysqli_connect('localhost', 'root' , '', 'teste_db');";

    addContentToFile($file, $content);
    echo "File '$file_name' created";

endif;