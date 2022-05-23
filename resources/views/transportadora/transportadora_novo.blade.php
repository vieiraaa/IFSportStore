@extends('template')

@section('conteudo')
        <div id="cadTransp" style="padding-top: 15px;">

            <div class="container">
                <div class="row">

                    <div class="col-2">
                    </div>

                    <div class="col-8">
                        <form method="post" action="{{ route('transportadoras_novo') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="cnpj" class="form-label">CNPJ:</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj">
                            </div>


                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP:</label>
                                <input type="text" class="form-control" id="cep" name="cep"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="logradouro" class="form-label">Logradouro:</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro">
                            </div>

                            <div class="mb-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro">
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="estado" class="form-label">Estado</label>
                                    <select id="estado" name="estado" class="form-select">
                                        <option value="0">Informe seu estado: </option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Minas Gerais</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="PR">Paraná</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                    </select>
                                </div>
                                <div class="col">

                                    <label for="cidade" class="form-label">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade"
                                        placeholder="Cidade">

                                </div>
                            </div>
                            <div class="mb-3 form-check">
                            </div>

                            <button type="submit" class="btn btn-warning" value="Enviar">Cadastrar Transportadora</button>
                        </form>
                    </div>

                    <div class="col-2">
                    </div>

                </div>
            </div>


        </div>
@endsection
