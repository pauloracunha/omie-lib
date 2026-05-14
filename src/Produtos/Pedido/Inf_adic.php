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
 * Dados da aba "Informações Adicionais" do Item do Pedido de Vendas.
 *
 * @pw_element decimal $peso_liquido Peso Líquido (Kg).<BR>Preenchimento Opcional.
 * @pw_element decimal $peso_bruto Peso Bruto (Kg).<BR>Preenchimento Opcional.
 * @pw_element string $numero_pedido_compra Número do Pedido de Compra.<BR>Preenchimento Opcional.
 * @pw_element integer $item_pedido_compra Item do Pedido de Compra.<BR>Preenchimento Opcional.<BR>
 * @pw_element string $dados_adicionais_item Informações para a Nota Fiscal.<BR>Preenchimento Opcional.
 * @pw_element string $nao_movimentar_estoque Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
 * @pw_element string $nao_gerar_financeiro Não gerar conta a receber para este item.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(Informe "S" para ativar essa opção).
 * @pw_element string $codigo_categoria_item Código da Categoria do item.<BR><BR>Preenchimento opcional.
 * @pw_element string $codigo_beneficio_fiscal Código do Benefício Fiscal.
 * @pw_element string $numero_fci Número da FCI (Ficha de Conteúdo de Importação)
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codigo_cenario_impostos_item Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
 * @pw_element string $nao_somar_total Não somar este item no total da NF-e
 * @pw_complex inf_adic
 */
class Inf_adic{
	/**
	 * Peso Líquido (Kg).<BR>Preenchimento Opcional.
	 *
	 * @var decimal
	 */
	public float $peso_liquido;
	/**
	 * Peso Bruto (Kg).<BR>Preenchimento Opcional.
	 *
	 * @var decimal
	 */
	public float $peso_bruto;
	/**
	 * Número do Pedido de Compra.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $numero_pedido_compra;
	/**
	 * Item do Pedido de Compra.<BR>Preenchimento Opcional.<BR>
	 *
	 * @var integer
	 */
	public int $item_pedido_compra;
	/**
	 * Informações para a Nota Fiscal.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $dados_adicionais_item;
	/**
	 * Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
	 *
	 * @var string
	 */
	public string $nao_movimentar_estoque;
	/**
	 * Não gerar conta a receber para este item.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(Informe "S" para ativar essa opção).
	 *
	 * @var string
	 */
	public string $nao_gerar_financeiro;
	/**
	 * Código da Categoria do item.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codigo_categoria_item;
	/**
	 * Código do Benefício Fiscal.
	 *
	 * @var string
	 */
	public string $codigo_beneficio_fiscal;
	/**
	 * Número da FCI (Ficha de Conteúdo de Importação)
	 *
	 * @var string
	 */
	public string $numero_fci;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos_item;
	/**
	 * Não somar este item no total da NF-e
	 *
	 * @var string
	 */
	public string $nao_somar_total;
}
