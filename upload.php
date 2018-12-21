<?php 

    //Substitua "SuaPasta" pelo caminho da sua pasta.
    $_UPLOAD['diretorio'] = "SuaPasta";

    //Crio uma instância do diretório.
    $diretorio  = dir($_UPLOAD['diretorio']);
    $result_json = array();

    //Percorro o diretorio se existir conteúdo.
    //E salvo o nome da pasta ou documento existente dentro da variável $arquivo
    while(($arquivo = $diretorio->read()) !== false){

        //A cada iteração vou salvando os nomes dentro de um JSON.
        $result_json[] = [
            'chave_id' => $arquivo
        ];

    }

    //Agora imprimo na tela o JSON com a lista de arquivos encontrados na SuaPasta.
    echo json_decode($result_json);

    //Após todo esse processamento, fecho a instância criada anteriormente.
    $diretorio->close();


?>