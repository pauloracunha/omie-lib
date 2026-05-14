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
 * Dados da aba "Observações" do Item do Pedido de Vendas.
 *
 * @pw_element string $obs_item Observações do item (elas não serão exibidas na Nota Fisca, mas serão impressas no pedido de vendal).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Item do Pedido de Venda.
 * @pw_complex observacao
 */
class Observacao{
	/**
	 * Observações do item (elas não serão exibidas na Nota Fisca, mas serão impressas no pedido de vendal).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Item do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $obs_item;
}
