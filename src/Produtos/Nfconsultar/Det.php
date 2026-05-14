<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Detalhes dos itens da Nota Fiscal.
 *
 * @pw_element prod $prod TAG de grupo do detalhamento de Produtos e Serviços da NF-e
 * @pw_element nfProdInt $nfProdInt Informações de Integração dos itens da NF
 * @pw_element itemPedido $itemPedido Dados do Item do Pedido de Venda
 * @pw_element rastreabilidade $rastreabilidade Dados específicos para rastreabilidade do produto
 * @pw_complex det
 */
class Det{
	/**
	 * TAG de grupo do detalhamento de Produtos e Serviços da NF-e
	 *
	 * @var Prod
	 */
	public Prod $prod;
	/**
	 * Informações de Integração dos itens da NF
	 *
	 * @var NfProdInt
	 */
	public NfProdInt $nfProdInt;
	/**
	 * Dados do Item do Pedido de Venda
	 *
	 * @var ItemPedido
	 */
	public ItemPedido $itemPedido;
	/**
	 * Dados específicos para rastreabilidade do produto
	 *
	 * @var Rastreabilidade
	 */
	public Rastreabilidade $rastreabilidade;
}
