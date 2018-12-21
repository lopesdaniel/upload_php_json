<?php 
    $pasta = "uploads/";

    //Crio uma instância do diretório.
    $diretorio  = dir($pasta);
    $result_json = array();

    //Percorro o diretorio se existir conteúdo.
    //E salvo o nome da pasta ou documento existente dentro da variável $arquivo
    while(($arquivo = $diretorio->read()) !== false){
        //A cada iteração vou salvando os nomes dentro de um JSON.
        if($arquivo != '.' && $arquivo != '..'){
            $result_json[] = [
                'chave_id' => $arquivo,
            ]; 
        }

    }

    //Agora imprimo na tela o JSON com a lista de arquivos encontrados na SuaPasta.
    echo json_encode($result_json);

    //Após todo esse processamento, fecho a instância criada anteriormente.
    $diretorio->close();


?>
