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
 * Retorno com o detalhe do item com a simulação de impostos
 *
 * @pw_element integer $codigo_cenario_impostos_item Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
 * @pw_element produto_simul_resp $produto_simul_resp Informações do produto para simulação de impostos
 * @pw_element imposto $imposto Informações referentes aos impostos do Item do Pedido de Vendas.<BR>Preenchimento Opcional.<BR><BR>Essa estrutura deve ser preenchida quando os dados dos impostos devem ser respeitados tais como foram enviados na API.<BR><BR>Caso essa estrutura não seja enviada, o Omie irá identificar a regra de imposto que melhor se ajusta as condições da venda realizada.<BR>Para utilizar essa opção esteja seguro de que as regras e cenários de impostos estejam cadastrados corretamente no Omie. As infomações preenchidas serão decorrentes dos dados configurados.<BR><BR><BR>
 * @pw_complex det_simul_resp
 */
class Det_simul_resp{
	/**
	 * Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos_item;
	/**
	 * Informações do produto para simulação de impostos
	 *
	 * @var Produto_simul_resp
	 */
	public Produto_simul_resp $produto_simul_resp;
	/**
	 * Informações referentes aos impostos do Item do Pedido de Vendas.<BR>Preenchimento Opcional.<BR><BR>Essa estrutura deve ser preenchida quando os dados dos impostos devem ser respeitados tais como foram enviados na API.<BR><BR>Caso essa estrutura não seja enviada, o Omie irá identificar a regra de imposto que melhor se ajusta as condições da venda realizada.<BR>Para utilizar essa opção esteja seguro de que as regras e cenários de impostos estejam cadastrados corretamente no Omie. As infomações preenchidas serão decorrentes dos dados configurados.<BR><BR><BR>
	 *
	 * @var Imposto
	 */
	public Imposto $imposto;
}
