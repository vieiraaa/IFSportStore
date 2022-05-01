@extends('template')

@section('cad_transp')
<div id="cadTransp" style="padding-top: 15px;">

        <div class="container">
            <div class="row">

              <div class="col-2">
              </div>

              <div class="col-8">
                <form>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">CNPJ:</label>
                      <input type="cnpj" class="form-control" id="cnpj">
                    </div>

                    
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">CEP:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
          
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
                                    <input type="cnpj" class="form-control" id="exampleInputPassword1">
                                  </div>
          
                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Bairro:</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
          
                                    <div class="row mb-3">
          
                                      <div class="col">
                                          <label for="exampleInputPassword1" class="form-label">Número:</label>
                                        <input type="text" class="form-control" placeholder="Número do local:">
                                      </div>
          
                                      <div class="col">
                                          <label for="exampleInputPassword1" class="form-label">Complemento:</label>
                                        <input type="text" class="form-control" placeholder="Complemento:">
                                      </div>
                                    </div>
          
                                    <div class="row mb-3">
                                    <div class="col">
                                      <label for="inputState" class="form-label">Estado</label>
                                      <select id="inputState" class="form-select">
                                      <option value="0">Informe seu estado: </option>
                                      <option value="0">Acre</option>
                                      <option value="1">Alagoas</option>
                                      <option value="2">Amazonas</option>
                                      <option value="3">Amapá</option>
                                      <option value="4">Bahia</option>
                                      <option value="5">Ceará</option>
                                      <option value="6">Distrito Federal</option>
                                      <option value="7">Espírito Santo</option>
                                      <option value="8">Goiás</option>
                                      <option value="9">Maranhão</option>
                                      <option value="10">Minas Gerais</option>
                                      <option value="11">Mato Grosso do Sul</option>
                                      <option value="12">Mato Grosso</option>
                                      <option value="13">Pará</option>
                                      <option value="14">Paraíba</option>
                                      <option value="15">Pernambuco</option>
                                      <option value="16">Piauí</option>
                                      <option value="17">Paraná</option>
                                      <option value="18">Rio de Janeiro</option>
                                      <option value="19">Rio Grande do Norte</option>
                                      <option value="20">Rondônia</option>
                                      <option value="21">Roraima</option>
                                      <option value="22">Rio Grande do Sul</option>
                                      <option value="23">Santa Catarina</option>
                                      <option value="24">Sergipe</option>
                                      <option value="25">São Paulo</option>
                                      <option value="26">Tocantins</option>
                                  </select>
                                      </select>
                                  </div>
                                  <div class="col">
                                      
                                      <label for="exampleInputPassword1" class="form-label">Cidade:</label>
                                      <input type="cidade" class="form-control" placeholder="Cidade">
                                  
                                  </div>
                                  </div>
                                  <div class="mb-3 form-check">
                  </div>

                      <button type="submit" class="btn btn-warning">Cadastrar Fornecedor</button>
                    </form>
              </div>

              <div class="col-2">
              </div>

            </div>
          </div>


    </div>

@endsection

@section('cad_forn')
<div id="cadForn" style="padding-top: 15px;">

          <div class="container">
              <div class="row">

                <div class="col-2">
                </div>

                <div class="col-8">
                  <form>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">CNPJ:</label>
                        <input type="cnpj" class="form-control" id="cnpj">
                      </div>

                      
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">CEP:</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
            
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
                                      <input type="cnpj" class="form-control" id="exampleInputPassword1">
                                    </div>
            
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Bairro:</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                      </div>
            
                                      <div class="row mb-3">
            
                                        <div class="col">
                                            <label for="exampleInputPassword1" class="form-label">Número:</label>
                                          <input type="text" class="form-control" placeholder="Número do local:">
                                        </div>
            
                                        <div class="col">
                                            <label for="exampleInputPassword1" class="form-label">Complemento:</label>
                                          <input type="text" class="form-control" placeholder="Complemento:">
                                        </div>
                                      </div>
            
                                      <div class="row mb-3">
                                      <div class="col">
                                        <label for="inputState" class="form-label">Estado</label>
                                        <select id="inputState" class="form-select">
                                        <option value="0">Informe seu estado: </option>
                                        <option value="0">Acre</option>
                                        <option value="1">Alagoas</option>
                                        <option value="2">Amazonas</option>
                                        <option value="3">Amapá</option>
                                        <option value="4">Bahia</option>
                                        <option value="5">Ceará</option>
                                        <option value="6">Distrito Federal</option>
                                        <option value="7">Espírito Santo</option>
                                        <option value="8">Goiás</option>
                                        <option value="9">Maranhão</option>
                                        <option value="10">Minas Gerais</option>
                                        <option value="11">Mato Grosso do Sul</option>
                                        <option value="12">Mato Grosso</option>
                                        <option value="13">Pará</option>
                                        <option value="14">Paraíba</option>
                                        <option value="15">Pernambuco</option>
                                        <option value="16">Piauí</option>
                                        <option value="17">Paraná</option>
                                        <option value="18">Rio de Janeiro</option>
                                        <option value="19">Rio Grande do Norte</option>
                                        <option value="20">Rondônia</option>
                                        <option value="21">Roraima</option>
                                        <option value="22">Rio Grande do Sul</option>
                                        <option value="23">Santa Catarina</option>
                                        <option value="24">Sergipe</option>
                                        <option value="25">São Paulo</option>
                                        <option value="26">Tocantins</option>
                                    </select>
                                        </select>
                                    </div>
                                    <div class="col">
                                        
                                        <label for="exampleInputPassword1" class="form-label">Cidade:</label>
                                        <input type="cidade" class="form-control" placeholder="Cidade">
                                    
                                    </div>
                                    </div>
                                    <div class="mb-3 form-check">
                    </div>

                        <button type="submit" class="btn btn-warning">Cadastrar Fornecedor</button>
                      </form>
                </div>

                <div class="col-2">
                </div>

              </div>
            </div>


      </div>

@endsection

@section('cad_end')
<div id="cadEnd" style="padding-top: 15px;">

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">CEP:</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Bairro:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>

                          <div class="row mb-3">

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Número:</label>
                              <input type="text" class="form-control" placeholder="Número do local:">
                            </div>

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Complemento:</label>
                              <input type="text" class="form-control" placeholder="Complemento:">
                            </div>
                          </div>

                          <div class="row mb-3">
                          <div class="col">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select">
                            <option value="0">Informe seu estado: </option>
                            <option value="0">Acre</option>
                            <option value="1">Alagoas</option>
                            <option value="2">Amazonas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Bahia</option>
                            <option value="5">Ceará</option>
                            <option value="6">Distrito Federal</option>
                            <option value="7">Espírito Santo</option>
                            <option value="8">Goiás</option>
                            <option value="9">Maranhão</option>
                            <option value="10">Minas Gerais</option>
                            <option value="11">Mato Grosso do Sul</option>
                            <option value="12">Mato Grosso</option>
                            <option value="13">Pará</option>
                            <option value="14">Paraíba</option>
                            <option value="15">Pernambuco</option>
                            <option value="16">Piauí</option>
                            <option value="17">Paraná</option>
                            <option value="18">Rio de Janeiro</option>
                            <option value="19">Rio Grande do Norte</option>
                            <option value="20">Rondônia</option>
                            <option value="21">Roraima</option>
                            <option value="22">Rio Grande do Sul</option>
                            <option value="23">Santa Catarina</option>
                            <option value="24">Sergipe</option>
                            <option value="25">São Paulo</option>
                            <option value="26">Tocantins</option>
                        </select>
                            </select>
                        </div>
                        <div class="col">
                            
                            <label for="exampleInputPassword1" class="form-label">Cidade:</label>
                            <input type="cidade" class="form-control" placeholder="Cidade">
                        
                        </div>
                        </div>

                        <div class="mb-3 form-check">
  
                          <button type="submit" class="btn btn-warning">Cadastrar endereço</button>
                        </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>

@endsection

@section('cadastro')
<div id="Cadastro" style="padding-top: 15px;">

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>
                        <div class="mb-2">
                          <label for="nome_cliente" class="form-label">Nome completo:</label>
                          <input type="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Exemplo: João da Silva">
                        </div>

                        <div class="mb-2">
                          <label for="telefone_cliente" class="form-label">Telefone:</label>
                          <input type="telefone" class="form-control" id="telefone" placeholder="Exemplo: (00) 00000-00)">
                        </div>
                        
                        <div class="mb-2">
                            <label for="email_cliente" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Exemplo: joaosilva@mail.com.br">
                          </div>
                          
                        <div class="mb-2">
                            <label for="senha_cliente" class="form-label">Senha:</label>
                            <input type="senha" class="form-control" id="inputPassword6" >
  
                          </div>

                        <div class="mb-2 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Lembrar de mim?</label>
                        </div>
                        

                        <button type="submit" class="btn btn-warning">Cadastrar</button>
                      </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">CEP:</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Bairro:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>

                          <div class="row mb-3">

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Número:</label>
                              <input type="text" class="form-control" placeholder="Número do local:">
                            </div>

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Complemento:</label>
                              <input type="text" class="form-control" placeholder="Complemento:">
                            </div>
                          </div>

                          <div class="row mb-3">
                          <div class="col">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select">
                            <option value="0">Informe seu estado: </option>
                            <option value="0">Acre</option>
                            <option value="1">Alagoas</option>
                            <option value="2">Amazonas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Bahia</option>
                            <option value="5">Ceará</option>
                            <option value="6">Distrito Federal</option>
                            <option value="7">Espírito Santo</option>
                            <option value="8">Goiás</option>
                            <option value="9">Maranhão</option>
                            <option value="10">Minas Gerais</option>
                            <option value="11">Mato Grosso do Sul</option>
                            <option value="12">Mato Grosso</option>
                            <option value="13">Pará</option>
                            <option value="14">Paraíba</option>
                            <option value="15">Pernambuco</option>
                            <option value="16">Piauí</option>
                            <option value="17">Paraná</option>
                            <option value="18">Rio de Janeiro</option>
                            <option value="19">Rio Grande do Norte</option>
                            <option value="20">Rondônia</option>
                            <option value="21">Roraima</option>
                            <option value="22">Rio Grande do Sul</option>
                            <option value="23">Santa Catarina</option>
                            <option value="24">Sergipe</option>
                            <option value="25">São Paulo</option>
                            <option value="26">Tocantins</option>
                        </select>
                            </select>
                        </div>
                        <div class="col">
                            
                            <label for="exampleInputPassword1" class="form-label">Cidade:</label>
                            <input type="cidade" class="form-control" placeholder="Cidade">
                        
                        </div>
                        </div>

                        <div class="mb-3 form-check">
  
                          <button type="submit" class="btn btn-warning">Cadastrar endereço</button>
                        </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>

@endsection

@section('cadastro_usu')
<div id="Cadastro" style="padding-top: 15px;">

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>
                        <div class="mb-2">
                          <label for="nome_cliente" class="form-label">Nome completo:</label>
                          <input type="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Exemplo: João da Silva">
                        </div>

                        <div class="mb-2">
                          <label for="telefone_cliente" class="form-label">Telefone:</label>
                          <input type="telefone" class="form-control" id="telefone" placeholder="Exemplo: (00) 00000-00)">
                        </div>
                        
                        <div class="mb-2">
                            <label for="email_cliente" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Exemplo: joaosilva@mail.com.br">
                          </div>
                          
                        <div class="mb-2">
                            <label for="senha_cliente" class="form-label">Senha:</label>
                            <input type="senha" class="form-control" id="inputPassword6" >
  
                          </div>

                        <div class="mb-2 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Lembrar de mim?</label>
                        </div>
                        

                        <button type="submit" class="btn btn-warning">Cadastrar</button>
                      </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">CEP:</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Bairro:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>

                          <div class="row mb-3">

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Número:</label>
                              <input type="text" class="form-control" placeholder="Número do local:">
                            </div>

                            <div class="col">
                                <label for="exampleInputPassword1" class="form-label">Complemento:</label>
                              <input type="text" class="form-control" placeholder="Complemento:">
                            </div>
                          </div>

                          <div class="row mb-3">
                          <div class="col">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="inputState" class="form-select">
                            <option value="0">Informe seu estado: </option>
                            <option value="0">Acre</option>
                            <option value="1">Alagoas</option>
                            <option value="2">Amazonas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Bahia</option>
                            <option value="5">Ceará</option>
                            <option value="6">Distrito Federal</option>
                            <option value="7">Espírito Santo</option>
                            <option value="8">Goiás</option>
                            <option value="9">Maranhão</option>
                            <option value="10">Minas Gerais</option>
                            <option value="11">Mato Grosso do Sul</option>
                            <option value="12">Mato Grosso</option>
                            <option value="13">Pará</option>
                            <option value="14">Paraíba</option>
                            <option value="15">Pernambuco</option>
                            <option value="16">Piauí</option>
                            <option value="17">Paraná</option>
                            <option value="18">Rio de Janeiro</option>
                            <option value="19">Rio Grande do Norte</option>
                            <option value="20">Rondônia</option>
                            <option value="21">Roraima</option>
                            <option value="22">Rio Grande do Sul</option>
                            <option value="23">Santa Catarina</option>
                            <option value="24">Sergipe</option>
                            <option value="25">São Paulo</option>
                            <option value="26">Tocantins</option>
                        </select>
                            </select>
                        </div>
                        <div class="col">
                            
                            <label for="exampleInputPassword1" class="form-label">Cidade:</label>
                            <input type="cidade" class="form-control" placeholder="Cidade">
                        
                        </div>
                        </div>

                        <div class="mb-3 form-check">
  
                          <button type="submit" class="btn btn-warning">Cadastrar endereço</button>
                        </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>

@endsection

@section('cad_Cat')
<div class="container_cadCat" style="padding: 20px;">
          <div class="row">
            
            <div class="col" style="background-color: rgb(73, 73, 73); color: wheat;">
              <b>Cadastro de Categoria: </b>
            </div>
          </div>
        </div>
@endsection

@section('login')
<div id="Login" style="padding-top: 15px;">

            <div class="container">
                <div class="row">

                  <div class="col-2">
                  </div>

                  <div class="col-8">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Senha:</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar de mim?</label>
                          </div>
  
                          <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </form>
                  </div>

                  <div class="col-2">
                  </div>

                </div>
              </div>

            

        </div>
@endsection
