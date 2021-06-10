<?php
    <div class="col-sm-4">
        <div class="thumbnail">
                        <img src="imagens/cadastro.png" alt="Baba" width="400" height="300" onclick="document.getElementById('id01').style.display='block'">
                        <!--modal-->
                        <div class="w3-container">
                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <header class="w3-container ">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    </header>
                                    <div class="w3-container">
                                        <p>
                                            <h2 class="w3-center">Forms</h2>
                                            <div class="w3-row-padding ">
                                                <div id="corpoform">
                                                    <form class="w3-container w3-card-4" method="POST" action="processa.php">

                                                        <h2>Dados Pessoais</h2>
                                                        <div id="cab1">
                                                            <div class="w3-row">
                                                                <label for="indica">INDICAÇÃO</label>
                                                                <input type="text" name="indica" class="w3-input"><br><br>

                                                                <div class="w3-half">
                                                                    <h6>Disponibilidade:</h6>
                                                                    <input type="checkbox" class="w3-check" name="dorm">
                                                                    <label for="dorm">Dormir</label><br>
                                                                    <input type="checkbox" class="w3-check" name="iv">
                                                                    <label for="iv">Ir e Vir</label><br>
                                                                    <input type="checkbox" class="w3-check" name="folg">
                                                                    <label for="folg">Folguista</label><br>
                                                                    <input type="checkbox" class="w3-check" name="not">
                                                                    <label for="not">Noturno</label>
                                                                </div>

                                                                <div class="w3-half">
                                                                    <h6>Plus:</h6>
                                                                    <input type="checkbox" class="w3-check" name="enfermagem">
                                                                    <label for="enfermagem">TEC/AUX. ENFERMAGEM</label><br>
                                                                    <input type="checkbox" class="w3-check" name="cnh">
                                                                    <label for="cnh">CNH</label><br>
                                                                    <input type="checkbox" class="w3-check" name="arrumadeira">
                                                                    <label for="arrumadeira">Arrumadeira</label><br>
                                                                    <input type="checkbox" class="w3-check" name="disp">
                                                                    <label for="disp">DISP. P/VIAGENS</label><br>
                                                                </div>
                                                            </div>
                                                            <hr><br><br>
                                                        </div>

                                                        <div id="cap2">
                                                            <div class="w3-row">
                                                                <label for="indica">INDICAÇÃO</label>
                                                                <input type="text" name="indica" class="w3-input"><br>

                                                                <div>
                                                                    <h6>Categoria Profissional:</h6>
                                                                    <input type="checkbox" class="w3-check" name="mot">
                                                                    <label for="mot">Motorista</label><br>
                                                                    <input type="checkbox" class="w3-check" name="caseiro">
                                                                    <label for="caseiro">Caseiro</label><br><br>
                                                                </div>

                                                                <div>
                                                                    <label for="out">Outros</label>
                                                                    <input type="text" name="out" class="w3-input"><br>
                                                                </div>

                                                                <div>
                                                                    <h6>Disponibilidade:</h6>
                                                                    <input type="checkbox" class="w3-check" name="dorm">
                                                                    <label for="dorm">Dormir</label><br>
                                                                    <input type="checkbox" class="w3-check" name="disp">
                                                                    <label for="disp">DISP. P/VIAGENS</label><br>
                                                                    <input type="checkbox" class="w3-check" name="cnh">
                                                                    <label for="cnh">CNH</label><br>
                                                                    <input type="checkbox" class="w3-check" name="fs">
                                                                    <label for="fs">Fins de semana</label>
                                                                    <hr><br><br>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="cab3">
                                                            <div class="w3-row">
                                                                <label for="indica">INDICAÇÃO</label>
                                                                <input type="text" name="indica" class="w3-input"><br><br>

                                                                <h6>Disponibilidade:</h6>
                                                                <div class="w3-half">
                                                                    <input type="checkbox" class="w3-check" name="dom">
                                                                    <label for="dom">Domestica</label><br>
                                                                    <input type="checkbox" class="w3-check" name="dia">
                                                                    <label for="dia">Diarista</label><br>
                                                                    <input type="checkbox" class="w3-check" name="arr">
                                                                    <label for="arr">Arrumadeira</label><br>
                                                                    <input type="checkbox" class="w3-check" name="coz">
                                                                    <label for="coz">Cozinheiro(a)</label><br><br>
                                                                </div>

                                                                <div class="w3-half">
                                                                    <h6>Disponibilidade:</h6>
                                                                    <input type="checkbox" class="w3-check" name="dorm">
                                                                    <label for="dorm">Dormir</label><br>
                                                                    <input type="checkbox" class="w3-check" name="iv">
                                                                    <label for="iv">Ir e Vir</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr><br><br>

                                                        <label for="nome">Nome completo:</label><br>
                                                        <input type="text" class="w3-input" name="nome" value=""><br><br>

                                                        <label for="idade">Idade:</label><br>
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

                                                        <label for="civil">Zona:</label>
                                                        <select class="w3-input" name="civil">
                                                            <option value="NULO"></option>
                                                            <option value="ZN">Norte</option>
                                                            <option value="ZS">Sul</option>
                                                            <option value="ZL">Leste</option>
                                                            <option value="ZO">Oeste</option>
                                                        </select><br><br>

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
                                                            <label for="idadeF">Idade:</label>
                                                            <input class="w3-input" type="number" name="idadeF">
                                                        </div>

                                                        <label for="guarda">Com quem ficam:</label>
                                                        <input type="text" name="guarda" class="w3-input"><br><br>

                                                        <div class="w3-row">
                                                            <h2>Quanto pretende ganhar para:</h2>
                                                            <p>IR E VIR R$:</p>
                                                            <div class="slidecontainer">
                                                                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                                                <p>Valor: <span id="demo"></span> R$ </p>
                                                                <p>DORMIR R$:</p>
                                                                <input type="range" min="1" max="100" value="50" class="slider" id="myRang">
                                                                <p>Valor: <span id="dem"></span> R$ </p>
                                                                <p>Diarista R$:</p>
                                                                <input type="range" min="1" max="100" value="50" class="slider" id="myRan">
                                                                <p>Valor: <span id="de"></span> R$ </p>
                                                            </div>
                                                        </div>

                                                        <input class="w3-input" type="submit" value="Cadastrar"><br><br>

                                                    </form>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    <footer class="w3-container">
                                        <p>fim do form</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
?>