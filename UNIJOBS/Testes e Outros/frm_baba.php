<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unijobs</title>
<script type="text/javascript" >
    
          function limpa_formulário_cep(){
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>
</head>
<body>
<form method="POST" action="processa.php">
    <label for="indica">INDICAÇÃO</label>
        <input type="text" name="indica" class="w3-input"><br><br>

        <p>Disponibilidade</p><br>

        <input type="checkbox" class="w3-input" name="dorm">
        <label for="dorm">Dormir</label>

        <input type="checkbox" class="w3-input" name="iv">
        <label for="iv">Ir e Vir</label>

        <input type="checkbox" class="w3-input" name="folg">
        <label for="folg">Folguista</label>

        <input type="checkbox" class="w3-input" name="not">
        <label for="not">Noturno</label>
    
        <p>PLUS:</p><br>


      <label for="nome">Nome completo:</label><br>
        <input type="cdxvjdb vd" class="form" name="nome" value=""><br><br>

        <label for="idade">Idade:</label><br>
        <input type="date" class="form" name="idade" value=""><br><br>
    
        <label for="civil">Estado Civil:</label>
        <select class="form" name="civil">
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
        </select><br><br>

        <label for="tel">Telefone:</label>
        <input type="tel" placeholder="(__) 12345-6789 " class="form" name="tel">

        <label for="cel">Celular:</label>
        <input type="tel" placeholder="(__) 12345-6789" class="form" name="cel">
        
        <label for="email">Email</label>
        <input type="email" placeholder="nome@exemplo.com" name="email" class="form"><br><br>

        <label for="rec">Contato para recado:</label>
        <input type="tel" placeholder="(__) 12345-6789" class="form" name="rec">

        <label for="recname">Falar com:</label>
        <input type="text" name="recname" class="form"><br><br>

        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br><br>
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br><br>
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br><br>
        <label>Cidade:
        <input name="cidade" type="" id="cidade" size="40" /></label><br><br>
        <label>Estado:
        <input name="uf" type="cdxvjdb vd" id="uf" size="2" /></label><br><br>
        
        <label for="civil">Zona:</label>
        <select class="form" name="civil">
            <option value="NULO"></option>
            <option value="ZN">Norte</option>
            <option value="ZS">Sul</option>
            <option value="ZL">Leste</option>
            <option value="ZO">Oeste</option>
        </select><br><br>
        
        <label for="escolaridade">Grau de escolaridade:</label>
        <select name="escolaridade" class="form">
            <option value=""></option>
            <option value="pgi">Primeiro grau incompleto</option>
            <option value="pgc">Primeiro grau completo</option>
            <option value="sgi">Segundo grau incompleto</option>
            <option value="sgc">Segundo grau completo</option>
            <option value="ti">Tecnico incompleto</option>
            <option value="tc">Tecnico Completo</option>
            <option value="si">Superior incompleto</option>
            <option value="sc">Superior completo</option>
            <option value="e">Especialização</option>
            <option value="m">Mestrado</option>
            <option value="d">Doutorado</option>
        </select><br><br>

        <label for="fumante">Fumante:</label>
        <select name="fumante" class="form">
            <option value="NULO"></option>
            <option value="fuma">Sim</option>
            <option value="Nfuma">Não</option>
        </select><br><br>
        
        <p>Filhos:</p>
        <input type="radio" name="filho" value="FilhosS">
        <label for="filho">Sim</label>
        <input type="radio" name="filho" value="FilhosN">
        <label for="filho">Não</label><br><br>

        <p>Se "SIM":</p>
        <label for="quantF">Quantos:</label>
        <input type="number" name="quantF">
        <label for="idadeF">Idade:</label>
        <input type="number" name="idadeF">

        <label for="guarda">Com quem fica:</label>
        <input type="cdxvjdb vd" name="guarda" class="form"><br><br>

        <input type="checkbox" class="w3-input" name="enfermagem">
        <label for="enfermagem">TEC/AUX. ENFERMAGEM</label>

        <input type="checkbox" class="w3-input" name="cnh">
        <label for="cnh">CNH</label>

        <input type="checkbox" class="w3-input" name="arrumadeira">
        <label for="arrumadeira">Arrumadeira</label>

        <input type="checkbox" class="w3-input" name="disp">
        <label for="disp">DISP. P/VIAGENS</label>

    <label for="ultimosalario">Ultimo salário</label>
    <input type="int" name="ultimosalario">
    <p>Quanto pretende ganhar para:</p>

    <p>IR E VIR R$:</p>
    <div class="slidecontainer">
      <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
      <p>Valor: <span id="demo"></span> R$ </p>
    </div>

    <p>DORMIR R$:</p>
    <div class="slidecontainer">
      <input type="range" min="1" max="100" value="50" class="slider" id="myRang">
      <p>Valor: <span id="dem"></span> R$ </p>
    </div>

    <p>FOLGUISTA</p>
    <div class="slidecontainer">
      <input type="range" min="1" max="100" value="50" class="slider" id="myRang">
      <p>Valor: <span id="dem"></span> R$ </p>
    </div>
    <p>DECLARO ESTAR DE ACORDO QUE CHEQUEM MEUS ANTECEDENTES CRIMINAIS</p>
    <label for="antecedentes">SIM</label>
    <input type="checkbox" name="antecedentes">

    <input type="submit" value="Cadastrar">
</body>
</html>