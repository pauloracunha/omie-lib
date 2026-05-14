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
 * Outras notas modelo 1/1A relacionadas
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
 * @pw_element string $nrNumero Número da NF relacionada
 * @pw_element string $nrSerie Série da NF relacionada
 * @pw_element string $nrDtEmissao Data de emissão da NF relacionada
 * @pw_element string $nrCnpjCpf CNPJ/CPF do emitente da NF relacionada
 * @pw_element string $nrUF Unidade federativa do emitente da NF relacionada
 * @pw_complex nrModelo1_1A
 */
class NrModelo1_1A{
	/**
	 * Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Número da NF relacionada
	 *
	 * @var string
	 */
	public string $nrNumero;
	/**
	 * Série da NF relacionada
	 *
	 * @var string
	 */
	public string $nrSerie;
	/**
	 * Data de emissão da NF relacionada
	 *
	 * @var string
	 */
	public string $nrDtEmissao;
	/**
	 * CNPJ/CPF do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrCnpjCpf;
	/**
	 * Unidade federativa do emitente da NF relacionada
	 *
	 * @var string
	 */
	public string $nrUF;
}
