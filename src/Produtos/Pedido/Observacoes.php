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
 * Dados da Aba "Observações" do Pedido de Venda.
 *
 * @pw_element string $obs_venda Observações da venda (elas não serão exibidas na Nota Fiscal).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Pedido de Venda.<BR>
 * @pw_complex observacoes
 */
class Observacoes{
	/**
	 * Observações da venda (elas não serão exibidas na Nota Fiscal).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Pedido de Venda.<BR>
	 *
	 * @var string
	 */
	public string $obs_venda;
}
