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
 * Dados da Aba "Itens da Venda" do Pedido de Venda.
 *
 * @pw_element ide $ide Identificação do Item do Pedido de Vendas.<BR>Preenchimento Obrigatório.
 * @pw_element produto $produto Identificação do Produto do Item do Pedido de Vendas.<BR>Preenchimento Obrigatório.
 * @pw_element observacao $observacao Dados da aba "Observações" do Item do Pedido de Vendas.<BR>Preenchimento Opcional.
 * @pw_element inf_adic $inf_adic Dados da aba "Informações Adicionais" do Item do Pedido de Vendas.<BR>Preenchimento Opcional.
 * @pw_element imposto $imposto Informações referentes aos impostos do Item do Pedido de Vendas.<BR>Preenchimento Opcional.<BR><BR>Essa estrutura deve ser preenchida quando os dados dos impostos devem ser respeitados tais como foram enviados na API.<BR><BR>Caso essa estrutura não seja enviada, o Omie irá identificar a regra de imposto que melhor se ajusta as condições da venda realizada.<BR>Para utilizar essa opção esteja seguro de que as regras e cenários de impostos estejam cadastrados corretamente no Omie. As infomações preenchidas serão decorrentes dos dados configurados.<BR><BR><BR>
 * @pw_element rastreabilidade $rastreabilidade Dados da rastreabilidade do produto.
 * @pw_element combustivel $combustivel Detalhamento específico de Combustível.
 * @pw_element tributavel $tributavel Unidade, Quantidade, Valor e EAN tributáveis do item do pedido.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_complex det
 */
class Det{
	/**
	 * Identificação do Item do Pedido de Vendas.<BR>Preenchimento Obrigatório.
	 *
	 * @var Ide
	 */
	public Ide $ide;
	/**
	 * Identificação do Produto do Item do Pedido de Vendas.<BR>Preenchimento Obrigatório.
	 *
	 * @var Produto
	 */
	public Produto $produto;
	/**
	 * Dados da aba "Observações" do Item do Pedido de Vendas.<BR>Preenchimento Opcional.
	 *
	 * @var Observacao
	 */
	public Observacao $observacao;
	/**
	 * Dados da aba "Informações Adicionais" do Item do Pedido de Vendas.<BR>Preenchimento Opcional.
	 *
	 * @var Inf_adic
	 */
	public Inf_adic $inf_adic;
	/**
	 * Informações referentes aos impostos do Item do Pedido de Vendas.<BR>Preenchimento Opcional.<BR><BR>Essa estrutura deve ser preenchida quando os dados dos impostos devem ser respeitados tais como foram enviados na API.<BR><BR>Caso essa estrutura não seja enviada, o Omie irá identificar a regra de imposto que melhor se ajusta as condições da venda realizada.<BR>Para utilizar essa opção esteja seguro de que as regras e cenários de impostos estejam cadastrados corretamente no Omie. As infomações preenchidas serão decorrentes dos dados configurados.<BR><BR><BR>
	 *
	 * @var Imposto
	 */
	public Imposto $imposto;
	/**
	 * Dados da rastreabilidade do produto.
	 *
	 * @var Rastreabilidade
	 */
	public Rastreabilidade $rastreabilidade;
	/**
	 * Detalhamento específico de Combustível.
	 *
	 * @var Combustivel
	 */
	public Combustivel $combustivel;
	/**
	 * Unidade, Quantidade, Valor e EAN tributáveis do item do pedido.
	 *
	 * @var Tributavel
	 */
	public Tributavel $tributavel;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
}
