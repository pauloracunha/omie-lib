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
 * Informações sobre o frete
 *
 * @pw_element decimal $valor_frete Valor do Frete.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $valor_seguro Valor do Seguro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $outras_despesas Outras Despesas Acessórias.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_complex frete_simul
 */
class Frete_simul{
	/**
	 * Valor do Frete.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $valor_frete;
	/**
	 * Valor do Seguro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $valor_seguro;
	/**
	 * Outras Despesas Acessórias.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $outras_despesas;
}
