<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paninel</title>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="js/time.js"></script>
</head>
<body onload="startTime()">
    <h2 class='titulo'>GERAR SENHA DE ATENDIMENTO</h2>
        <div class="corpo">
        <p class='subtitulo'><strong>CIMEB</strong><br>
        Centro de Infusões e Medicamentos Especializados da Bahia</p> <br>
        <div class="display"> <div class="div_time">
             <!-- Relogio-->
            <p id="horario">Horário Atual</p><p id="relogio"></p></div>
        </div>
    </div><br>
      <!-- Chamar a função para mostra erros
   -->
   <div >
        <!-- Receber a mensagem de erro do JavaScript -->
        <p id="statusSenha"><span id="msgAlerta">-------</span>
        <!-- Receber a senha do JavaScript -->
        <br>Senha Chamada: <span id="senhaGerada"></span></p><br>
    </div>
    
    
    <div class='container'>
    <p>
        Selecione o consutorio atual:
        <select name="consutorio">
        <option value="consutorio_01">1</option>
        <option value="consutorio_02">2</option>
        <option value="consutorio_03">3</option>
        <option value="consutorio_04">4</option>
        <option value="consutorio_05">5</option>
        <option value="consutorio_06">6</option>

    </select> 
    </p>
    <!--Chamar a função "gerarSenha" do Js para atendimento Dispensação-->
    <p><button type="button" onclick="gerarSenha(1)">Dispensação</button></p>
    <p><button type="button" onclick="gerarSenha(2)">Dispensação Preferencial</button></p>
    <!--
    Chamar a função "gerarSenha" do Js para atendimento Farmaceutico-->    
    <p><button type="button" onclick="gerarSenha(3)">Farmacêutico</button></p>
    <p><button type="button" onclick="gerarSenha(4)">Farmacêutico Preferencial</button></p>
    <!--
    Chamar a função "gerarSenha" do Js para atendimento ação judicial--> 
    <p><button type="button" onclick="gerarSenha(5)">Ação Judicial</button></p>
    <p><button type="button" onclick="gerarSenha(6)">Ação Judicial - Extra</button></p>
    </div>
 
    <br><br><br><br>
    <p>2022 - @BernardoNogueira8</p>
    <script src="js/custom.js"></script>
</body>
</html>