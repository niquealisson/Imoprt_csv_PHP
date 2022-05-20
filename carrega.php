<?php
ini_set('max_execution_time',0);

require 'conexao.php';
$filename = 'C:/csv/produtos.csv';

if(file_exists($filename)){

    if (mysqli_query($conecta, "LOAD DATA INFILE '$filename' INTO TABLE imagenet_produto
    FIELDS TERMINATED BY ';'
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS")){
        echo "Carregado com Sucesso!";
    }else{
        echo "erro!";
    }

}else{
    echo "Error Não encontrado";
}

?>