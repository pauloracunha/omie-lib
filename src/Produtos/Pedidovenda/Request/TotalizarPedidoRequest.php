<?php

namespace OmieLib\Produtos\Pedidovenda\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Itens;
use OmieLib\Produtos\Pedidovenda\Lote_validade;
use OmieLib\Produtos\Pedidovenda\PedidoVendaJsonClient;
use OmieLib\Produtos\Pedidovenda\Response\AdicionarPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\AlterarItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItensPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\IncluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\TotalizarPedidoResponse;

/**
 * Realiza a totalização do pedido de venda.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
 * @pw_complex totalizarPedidoRequest
 */
class TotalizarPedidoRequest{
	/**
	 * ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
}
