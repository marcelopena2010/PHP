<?php
class sistemaArquivo{
    public $name_arquivo;
    public $type_arquivo;
    public $size_arquivo;
    public $enviar_arquivo;

    public function enviaArquivo(){
        $this->name_arquivo = $_FILES['arquivo']['name'];
        $this->type_arquivo = $_FILES['arquivo']['type'];
        $this->size_arquivo = $_FILES['arquivo']['size'];
        $this->enviar_arquivo = $_POST['enviar_arquivo'];

        $tipos_de_arquivos_aceitos = '.exe, .txt, .doc';

        if($this->enviar_arquivo){
            if((substr_count($this->name_arquivo, '.jpg') == 1) || (substr_count($this->name_arquivo, '.txt')) || (substr_count($this->name_arquivo, '.zip'))){
                if($this->size_arquivo <= 5000000){
                       if(mysql_connect('localhost', 'root', '')){
                            if(mysql_select_db('uploadArquivos')){
                                if(mysql_query("INSERT INTO arquivos VALUES (NULL, '$this->name_arquivo', 'http://localhost/uploaddearquivocomphpemysql/uploads/".$this->name_arquivo."')")){
                                    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $this->name_arquivo)){
                                        echo '<strong>Upload Realizado com Sucesso!</strong><br />';
                                        echo '<strong><a href="http://localhost/uploaddearquivocomphpemysql/uploads/'.$this->name_arquivo.'">Link Para Download do Arquivo: http://localhost/uploaddearquivocomphpemysql/uploads/'.$this->name_arquivo.'</a></strong>';
                                    }else{
                                        $erro = 'Não foi possivel enviar o arquivo';
                                    }
                                }else{
                                    $erro = 'Erro ao Inserir os Dados no Banco de Dados';
                                }
                            }else{
                                $erro = 'A base de dados informada não invalida';
                            }
                        }else{
                            $erro = 'Não Foi possivel se conectar com o Banco de Dados';
                        }
                    }
                }else{
                    $erro = 'Somente SÃ£o Permetidos Arquivos com no Maximo 5MB';
                }
            }else{
                $erro = 'O arquivo NÃ£o Possui o Formato Correto, Certifiquise de que o arquivo possui uma dessas extensÃµes: '.$tipos_de_arquivos_aceitos;
            }

            if(isset($erro)){
                echo $erro;
            }
        }
}
?>
<?php
           $obj = new sistemaArquivo();
           $obj->enviaArquivo();
?>