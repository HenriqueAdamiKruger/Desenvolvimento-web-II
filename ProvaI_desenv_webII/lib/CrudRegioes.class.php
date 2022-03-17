<?php

class CrudRegioes {
    private $title;

    public function CrudRegioes($title){
        $this->title = $title;
    }

	public function __toString() {
        $conn = new Conexao();

        $html = "";

        $tableHead = new THead('');

        $tableBody = new TBody('');

        $sql = $conn->getSelect('SELECT IDRegiao, DescricaoRegiao FROM regiao');

        $thContent = new TR('');
        
        $thContent->addElement(new TH('text-center', 'Handle'));
        $thContent->addElement(new TH('text-center', 'Nome'));
        $thContent->addElement(new TH('text-center', 'Processos'));
        
        $tableHead->addElement($thContent);

        foreach($sql as $row)
        {
            $trContent = new TR('');

            $trContent->addElement(new TD('text-center', $row['IDRegiao']));

            $trContent->addElement(new TD('text-center', $row['DescricaoRegiao']));
            
            $trContent->addElement(new TD('text-center', 
                                   new HyperLink('Editar', '?action=alterar&id=' . $row['IDRegiao'], 'btn btn-dark'), 
                                   new HyperLink('Excluir', '?action=deletar&id=' . $row['IDRegiao'], 'btn btn-dark')));

            $tableBody->addElement($trContent);
        }

        $html .= new Table('', 'table table-dark', $tableHead, $tableBody, null);

        $html .= new Div('row', new Div('float-left', new HyperLink('Nova Região', '?action=cadastrar', 'btn btn-dark')));

		return $html;
	}
}