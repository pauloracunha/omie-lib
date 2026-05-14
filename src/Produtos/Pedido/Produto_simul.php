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
 * Informações do produto para simulação dos impostos.
 *
 * @pw_element integer $codigo_produto ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
 * @pw_element string $codigo_produto_integracao Código de integração do Produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "codigo_produto".<BR>
 * @pw_element integer $codigo_item_integracao Código de Integração do Item do Pedido de Venda.<BR><BR>Preenchimento Opcional.<BR><BR>Informe a identificação do Item do Pedido.
 * @pw_element decimal $quantidade Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_element decimal $valor_unitario Valor Únitário<BR>Preenchimento Obrigatório.
 * @pw_element decimal $valor_desconto Valor do Desconto<BR>Preenchimento Opcional
 * @pw_complex produto_simul
 */
class Produto_simul{
	/**
	 * ID do Produto.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Código de integração do Produto.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "codigo_produto".<BR>
	 *
	 * @var string
	 */
	public string $codigo_produto_integracao;
	/**
	 * Código de Integração do Item do Pedido de Venda.<BR><BR>Preenchimento Opcional.<BR><BR>Informe a identificação do Item do Pedido.
	 *
	 * @var integer
	 */
	public int $codigo_item_integracao;
	/**
	 * Quantidade<BR>Preenchimento obrigatório.<BR><BR>No método de devolução de pedido:<BR>Preenchimento é opcional<BR>Caso não seja preenchida será feita a devolução integral do produto.
	 *
	 * @var decimal
	 */
	public float $quantidade;
	/**
	 * Valor Únitário<BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor_unitario;
	/**
	 * Valor do Desconto<BR>Preenchimento Opcional
	 *
	 * @var decimal
	 */
	public float $valor_desconto;
}
