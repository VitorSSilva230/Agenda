<head>
    <link href="css/formulario.css" rel="stylesheet">
</head>
<body>
<div class="container">
    
    <form action="?controller=ContatosController&<?php echo isset($contato->id) ? "method=atualizar&id={$contato->id}" : "method=salvar"; ?>" method="post" >
        <div class="card">
            
            <div class="card-header">
                <span class="card-title">Cadastrar</span>
            </div>
            
            <div class="card-body">
            </div>
           
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nome:</label>
                <input type="text" class="form-control col-sm-8" name="nome" 
                placeholder="Ex: Vitor Santos da Silva" id="nome" required value="<?php
                echo isset($contato->nome) ? $contato->nome : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Email:</label>
                <input type="email" class="form-control col-sm-8" 
                placeholder="Ex: vitorsantos@gmail.com" name="email" id="email" required value="<?php
                echo isset($contato->email) ? $contato->email : null;
                ?>" />
            </div>
            
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right senha">Senha:</label>
                <input class="form-control col-sm-8" name="senha" 
                placeholder="*******" id="senha" type="password" minlength="4"
                maxlength="8" size="8" required value="<?php
                echo isset($contato->senha) ? $contato->senha : null;
                ?>" />
                <i class="fas fa-eye" onclick="mostrarSenha() "></i> 
            </div>   
            
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Status:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input name="ativo" value="s" type="radio" checked > Ativo
                        </label>
                    </div>
                
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input name="ativo" type="radio" value="n" <?php echo isset ($Contato->ativo) =='n' ? 'checked' : ''?> > Inativo
                        </label>
                    </div>
                </div>
            </div>
          
            <div class="card-footer">
                <input  type="hidden" name="id" id="id" value="<?php echo isset($contato->id) ? $contato->id : null; ?>" />
                <button class="btn salvar" type="submit">Salvar</button>
                <a class="btn btn-danger" href="?controller=ContatosController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
    <img class="img" src="img/notebook.png">
</div>

</body>
<div>
     <script>
                
        function mostrarSenha() {
            var temp = document.getElementById("senha");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
                    
        </script>

</div>
       
               