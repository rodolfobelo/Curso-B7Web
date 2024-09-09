<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = [
            'nome' => 'Rodolfo',
            'idade' => 37,
            'atributos' => [
                'forca' => 80,
                'agilidade' => 80,
                'destreza' => 50
            ],
            'vida' => 1000,
            'mana' => 928
        ];

        echo "NOME: ".$lista['nome'];
        echo " FORÇA: ".$lista['atributos']['forca'];

        
        $nome = 'Rodolfo';
        $sobreNome = "Belo";

        $nomeCompleto = $nome;
        $nomeCompleto .= " ".($sobreNome ?? '');
        echo $nomeCompleto;
    ?>
</body>
</html>