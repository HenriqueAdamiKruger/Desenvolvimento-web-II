<?php

class FormularioRegioes {
    private $idRegiao;

    public function FormularioRegioes($idRegiao = null){
        $this->idRegiao = $idRegiao;

        if((isset($_POST['id-regiao']) || isset($_POST['id-regiao-alteracao'])) && isset($_POST['nome-regiao']))
        {    
            $conn = new Conexao();
            
            if(isset($_POST['id-regiao-alteracao']) && !empty($_POST['id-regiao-alteracao'])) 
            {
                $conn->getConn()->prepare("UPDATE REGIAO SET DescricaoRegiao = '" . $_POST["nome-regiao"] . "' WHERE IDRegiao = " . $_POST["id-regiao-alteracao"])->execute();
                header('Location: http://localhost/provaI_desenv_webII/');
            } 

            else
            {
                $conn->getConn()->prepare("INSERT INTO REGIAO (IDRegiao, DescricaoRegiao) VALUES (" . $_POST["id-regiao"] . ", '" . $_POST["nome-regiao"] . "')")->execute();
                header('Location: http://localhost/provaI_desenv_webII/');
            }
        }
    }

	public function __toString() {
        $conn = new Conexao();
        
        $html = "";

        if(!is_null($this->idRegiao))
        {
            $sql = $conn->getSelect('SELECT IDRegiao, DescricaoRegiao FROM regiao WHERE IDRegiao = ' . $this->idRegiao);

            $form = new Form(null, null, 'POST', null);
            
            $form->addContent(new Input('id-regiao-alteracao', 'id-regiao-alteracao', 'ID da Região', 'number', $sql[0]['IDRegiao'], true));
            $form->addContent(new Input('nome-regiao', 'nome-regiao', 'Descrição da Região', 'text', $sql[0]['DescricaoRegiao']));
            $form->addContent(new Button('Alterar', 'submit', 'btn btn-dark'));
            
            $html .= new Div('row float-center', $form);
        } 

        else 
        {
            $form = new Form(null, null, 'POST', null);

            $form->addContent(new Input('id-regiao', 'id-regiao', 'ID da Região', 'number', null));
            $form->addContent(new Input('nome-regiao', 'nome-regiao', 'Descrição da Região', 'text', null));
            $form->addContent(new Button('Cadastrar', 'submit', 'btn btn-dark'));

            $html .= new Div('row float-center', $form);
        }

        $html .= new Div('row', new Div('float-right', new HyperLink('Voltar', '?', 'btn btn-dark')));

		return $html;
	}
}