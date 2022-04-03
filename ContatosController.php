<?php

class ContatosController extends Controller
{

    public function listar()
    {
        $contatos = Contato::all();
        return $this->view('agenda', ['contatos' => $contatos]);
    }
    
    public function criar()
    {
        return $this->view('formulario');
    }

    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $contato = Contato::find($id);

        return $this->view('formulario', ['contato' => $contato]);
    }

    public function salvar()
    {   
        $contato           = new Contato;
        $contato->nome     = $this->request->nome;
        $contato->email    = $this->request->email;
        $contato->senha    = $this->request->senha;
        $contato->ativo    = $this->request->ativo;
        $contato->update_date = $this->request->update_date;
        date_default_timezone_set('America/Recife');
        $contato->update_date = date('Y-m-d H:i:s');
        $contato->update_date = date('Y-m-d H:i:s');
    
        if ($contato->save()) {
            return $this->listar();
        }
    }
    
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $contato           = Contato::find($id);
        $contato->nome     = $this->request->nome;
        $contato->email    = $this->request->email;
        $contato->senha    = $this->request->senha;
        $contato->ativo    = $this->request->ativo;
        $contato->update_date = $this->request->update_date;
        date_default_timezone_set('America/Recife');
        $contato->update_date = date('Y-m-d H:i:s');
        
        $contato->save();

        return $this->listar();
    }

    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $contato = Contato::remove($id);
        return $this->listar();
    }
        
}