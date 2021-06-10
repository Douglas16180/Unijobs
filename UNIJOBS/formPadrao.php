<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" alt="text/css" href="style/estilo.css">

<script type="text/javascript">
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
        document.getElementById('ibge').value = ("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
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
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

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

<script>

    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");

    var sliderb = document.getElementById("myRang");
    var output = document.getElementById("dem");

    var sliderc = document.getElementById("myRan");
    var output = document.getElementById("de");

    output.innerHTML = slider.value;
    output.innerHTML = sliderb.value;
    output.innerHTML = sliderc.value;


    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    sliderb.oninput = function() {
      output.innerHTML = this.value;
    }
    slider.oninputc = function() {
      output.innerHTML = this.value;
    }
</script>

<body>
    <div class="w3-container">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <p>
                        <h2 class="w3-center">Forms</h2>
                        <div class="w3-row-padding ">
                            <div id="corpoform">
                                <form class="w3-container w3-card-4" method="POST" action="processa.php">

                                    <h2>Dados Pessoais</h2>                                 

                                                                    
                                    
                                    <label for="nome">Nome completo:</label><br>
                                    <input type="text" class="w3-input" name="nome" value=""><br><br>

                                    <label for="idade">Data de Nascimento:</label><br>
                                    <input type="date" class="w3-input" name="idade" value=""><br><br>

                                    <label for="civil">Estado Civil:</label>
                                    <select class="w3-input" name="civil">
                                        <option value="Casado">Casado</option>
                                        <option value="Solteiro">Solteiro</option>
                                    </select><br><br>

                                    <div class="w3-half">
                                        <label for="tel">Telefone:</label>
                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="tel"><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <label for="cel">Celular:</label>
                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="cel"><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <label for="rec">Contato para recado:</label>
                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="rec">
                                    </div>

                                    <div class="w3-half">
                                        <label for="recname">Falar com:</label>
                                        <input type="text" name="recname" class="w3-input"><br><br>
                                    </div>

                                    <label for="email">Email</label>
                                    <input type="email" placeholder="nome@exemplo.com" name="email" class="w3-input"><br><br>

                                    <label>Cep:
                                        <input class="w3-input" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"></label><br><br>

                                    <div class="w3-half">
                                        <label>Rua:
                                            <input class="w3-input" name="rua" type="text" id="rua" size="60" /></label><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <label>Bairro:
                                            <input class="w3-input" name="bairro" type="text" id="bairro" size="40" /></label><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <label>Cidade:
                                            <input class="w3-input" name="cidade" type="text" id="cidade" size="40" /></label><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <label>Estado:
                                            <input class="w3-input" name="uf" type="text" id="uf" size="2" /></label><br><br>
                                    </div>

                                    <label for="escolaridade">Grau de escolaridade:</label>
                                    <select name="escolaridade" class="w3-input">
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
                                    <select name="fumante" class="w3-input">
                                        <option value="NULO"></option>
                                        <option value="fuma">Sim</option>
                                        <option value="Nfuma">Não</option>
                                    </select><br><br>

                                    <div class="w3-half">
                                        <p>Filhos:</p>
                                        <input class="w3-radio" type="radio" name="filho" value="FilhosS">
                                        <label for="filho">Sim</label>
                                        <input class="w3-radio" type="radio" name="filho" value="FilhosN">
                                        <label for="filho">Não</label><br><br>
                                    </div>

                                    <div class="w3-half">
                                        <p>Se "SIM":</p>
                                        <label for="quantF">Quantos:</label>
                                        <input class="w3-input" type="number" name="quantF">
                                    </div>

                                    <label for="guarda">Com quem ficam:</label>
                                    <input type="text" name="guarda" class="w3-input"><br><br>

                                    <label for="ultimosalario">Ultimo salário</label>
                                    <input class= w3-input type="int" name="ultimosalario">
                                    
                                    <br>

                                    <input class="w3-input" type="submit" value="Cadastrar"><br><br>
                                    
                                </form>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>