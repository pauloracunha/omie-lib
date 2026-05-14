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
 * Dados do item do Pedido de Vendas para simulação dos impostos.
 *
 * @pw_element integer $codigo_cenario_impostos_item Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
 * @pw_element produto_simul $produto_simul Informações do produto para simulação dos impostos.
 * @pw_complex det_simul
 */
class Det_simul{
	/**
	 * Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos_item;
	/**
	 * Informações do produto para simulação dos impostos.
	 *
	 * @var Produto_simul
	 */
	public Produto_simul $produto_simul;
}
