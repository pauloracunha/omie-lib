<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Informações dos itens que serão devolvidos.
 *
 * @pw_element integer $codigo_produto ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
 * @pw_element decimal $quantidade Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_complex itens
 */
class Itens{
	/**
	 * ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
	 *
	 * @var decimal
	 */
	public float $quantidade;
}
