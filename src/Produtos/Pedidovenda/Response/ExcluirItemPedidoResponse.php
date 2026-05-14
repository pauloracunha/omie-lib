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
 * Resposta da solicitação de exclusão no Pedido de Venda.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $codigo_item_integracao Código de Integração do Item do Pedido de Venda.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codigo_item ID do Item do Pedido.<BR>Preenchimento automático, gerado internamente pelo Omie.
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for "0" significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que "0" ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag "codigo_status" descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag "codigo_status".
 * @pw_complex excluirItemPedidoResponse
 */
class ExcluirItemPedidoResponse{
	/**
	 * ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
	/**
	 * Código de Integração do Item do Pedido de Venda.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codigo_item_integracao;
	/**
	 * ID do Item do Pedido.<BR>Preenchimento automático, gerado internamente pelo Omie.
	 *
	 * @var integer
	 */
	public int $codigo_item;
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
