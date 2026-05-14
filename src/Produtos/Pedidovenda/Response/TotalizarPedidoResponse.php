<?php

namespace OmieLib\Produtos\Pedidovenda\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Itens;
use OmieLib\Produtos\Pedidovenda\Lote_validade;
use OmieLib\Produtos\Pedidovenda\PedidoVendaJsonClient;
use OmieLib\Produtos\Pedidovenda\Request\AdicionarPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\AlterarItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItensPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\IncluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\TotalizarPedidoRequest;

/**
 * Resposta da totalização do pedido de venda.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for "0" significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que "0" ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag "codigo_status" descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag "codigo_status".
 * @pw_complex totalizarPedidoResponse
 */
class TotalizarPedidoResponse{
	/**
	 * ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
	/**
	 * Código do status do processamento.<BR>Se o retorno for "0" significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que "0" ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag "codigo_status" descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag "codigo_status".
	 *
	 * @var string
	 */
	public string $descricao_status;
}
