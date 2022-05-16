<div class="col-1"></div>
    <div class="col-10">
                 
                  
    <div class="row">

        <div class="col">
            <div>
                      
                  <img src="{{ $produto->caminho }}" width="500" alt="teste">
                

            </div>
        </div>

        <div class="col">
                
                ID do produto: {{ $produto->id }} <br>
                {{ $produto->nome }}
                <br>
                Descrição: {{ $produto->descricao }}
                <br><br>
                 R$: {{ $produto->valor }}

                      
            <button type="submit" class="btn btn-primary">Comprar agora</button>
            <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
        </div>
    </div>
    
<div class="col-1"></div>
