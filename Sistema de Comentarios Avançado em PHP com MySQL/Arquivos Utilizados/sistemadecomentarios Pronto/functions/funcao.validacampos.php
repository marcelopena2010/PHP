<?php
    function validaCampos(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $site = $_POST['site'];
        $comentario = $_POST['comentario'];
        $enviar_btn = $_POST['enviar_btn'];
        
        $data_comentario = date("d/m/Y");
        $hora_comentario = date("H:i");
        
        if($enviar_btn){
            if(empty($nome)){
                $erro = 'Nome';
            }elseif(empty($email)){
                $erro = 'E-mail';
            }elseif(empty($comentario)){
                $erro = 'Comentario';
            }else{
                if(mysql_connect('localhost', 'root', '')){
                    if(mysql_select_db('sistema_comentarios')){
                        $consulta = "INSERT INTO comentarios VALUES(NULL, '$nome', '$email', '$site', '$comentario', '$data_comentario', '$hora_comentario')";
                        if(!mysql_query($consulta)){
                            echo '<span class="erro">Erro ao Inserir os Dados no Banco de Dados.</span>';
                        }else{
                            echo '<span class="sucesso">Comentario Enviado com Sucesso!<br />
                                    <a href="http://localhost/sistemadecomentarios/">Clique Aqui e Visualize Seu Comentario</a>
                            </span>';
                            
                        }
                    }
                }
            }
        }
        
        if(isset($erro)){
            echo '<span class="erro">Por Favor Preencha o Campo '.$erro.'</span>';
        }
    }
?>