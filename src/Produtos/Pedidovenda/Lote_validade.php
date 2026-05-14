<?php

namespace OmieLib\Produtos\Pedidovenda;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Request\AdicionarPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\AlterarItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItensPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\IncluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\TotalizarPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Response\AdicionarPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\AlterarItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItensPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\IncluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\TotalizarPedidoResponse;

/**
 * Informações referentes ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do Lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do Lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
}
