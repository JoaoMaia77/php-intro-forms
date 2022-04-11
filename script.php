<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST["nome"];
$idade = $_POST['idade'];

if (empty($nome)){
    echo "Preencha o campo nome";
}

if (empty($idade)){
    echo "Preencha o campo idade";
}

if(strlen($nome) < 3){
    echo "O nome deve conter mais que 3 caracteres";
    return;
}
if(strlen($nome) > 40){
    echo "O nome é muito extenço";
    return;
}
if(!is_numeric($idade)){
    echo "Informe um numero para idade";
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            echo "Nadador $nome compete na catagoria infantil";
        }
    }

}else if($idade >= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'adolecente'){
            echo "Nadador $nome compete na catagoria adolecente";
        }
    }
}else if($idade > 18 && $idade <= 50 ){
for ($i = 0; $i <= count($categorias); $i++){
    if ($categorias[$i] == 'adulto'){
        echo "Nadador $nome compete na categoria adulto";
        }
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'idoso'){
            echo "Nadador $nome compete na catagoria idoso";
        }
    }

}



