<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php orientado a Objetos</title>
    <link href="./css/style.css" rel="stylesheet"/>
</head>
<body>
    
<?php
    include('Pessoa.php');
    $Pessoa = new Pessoa();
    $Pessoa->setNome('Manuela Kleinkauf de Oliveira');
    $Pessoa->setDataNascimento('11/01/2005');
    $Pessoa->setCpf('63018745632');
    $Pessoa->setRg('12345678');

    echo "<h1>Informações da Pessoa: </h1>";
    echo "Nome: ".$Pessoa->getNome();
    echo "<br>";
    echo "Data de Nascimento: ".$Pessoa->getDataNascimento();
    echo "<br>";
    echo "CPF: ".$Pessoa->getCpf();
    echo "<br>";
    echo "RG: ".$Pessoa->getRg();
    
    include('Engenheiro.php');
    $Engenheiro = new Engenheiro();
    $Engenheiro->setNome('Laura Santiago');
    $Engenheiro->setDataNascimento('15/12/2004');
    $Engenheiro->setCpf('8526453019');
    $Engenheiro->setRg('87654321');
    $Engenheiro -> setCrea('8642');

    echo "<h1>Informações da Engenheira: </h1>";
    echo "Nome: ".$Engenheiro->getNome();
    echo "<br>";
    echo "Data de Nascimento: ".$Engenheiro->getDataNascimento();
    echo "<br>";
    echo "CPF: ".$Engenheiro->getCpf();
    echo "<br>";
    echo "RG: ".$Engenheiro->getRg();
    echo "<br>";
    echo "CREA: ".$Engenheiro->getCrea();


    include('Medico.php');
    $Medico = new Medico();
    $Medico->setNome('Louise Haack');
    $Medico->setDataNascimento('05/08/2004');
    $Medico->setCpf('1450987356');
    $Medico->setRg('13579135');
    $Medico  -> setCrm('22222');

    echo "<h1>Informações da Médica: </h1>";
    echo "Nome: ".$Medico->getNome();
    echo "<br>";
    echo "Data de Nascimento: ".$Medico->getDataNascimento();
    echo "<br>";
    echo "CPF: ".$Medico->getCpf();
    echo "<br>";
    echo "RG: ".$Medico->getRg();
    echo "<br>";
    echo "CRM: ".$Medico->getCrm();


?>
    
        
   

</body>
</html>