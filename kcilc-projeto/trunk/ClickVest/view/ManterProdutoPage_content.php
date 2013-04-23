<?php 
include 'view/Topo_content.php';

$fachada = Fachada::getInstance();
$produtos = $fachada->cadastroProduto()->listar();

?>
<div class="limite">

            <table>
                <tr>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Valor</td>
                    <td>Ações</td>
                </tr>
                <?php foreach ($produtos as $produto){?>
                <tr>
                    <td><?php echo $produto->getDescricao();?></td>
                    <td><?php echo $produto->getQuantidadeEstoque();?></td>
                    <td><?php echo $produto->getValor();?></td>
                    <td><a href="<?php echo Proxy::page(AtualizarProdutoPage::$NM_PAGINA, array(Proxy::encrypt('id')=>$produto->getId()));?>">Editar</a> <a href="<?php echo Proxy::action(RemoverProdutoAction::$NM_ACTION, array(Proxy::encrypt('id')=>$produto->getId()));?>">Remover</a></li></td>
                </tr>
                <tr>
               <?php 
                   $fotos = $fachada->cadastroFotoProduto() -> buscarPorProduto($produto->getId()); 
                   foreach ($fotos as $foto){
               ?>
                    <td colspan="4"><img src="img/<?php echo $foto->getNomeArquivo()?>" width="200" height="200" /></td>
               <?php 
                   }
               ?>
                </tr>
                <?php }?>
            </table>

<?php 
	include 'view/rodape.php';
?>

</div>
