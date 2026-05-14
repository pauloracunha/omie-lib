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
 * Outras NF-e, NFC-e ou SAT relacionadas
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
 * @pw_element string $nrChave Chave da NF-e, NFC-e ou SAT relacionada
 * @pw_complex nrNF
 */
class NrNF{
	/**
	 * Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Chave da NF-e, NFC-e ou SAT relacionada
	 *
	 * @var string
	 */
	public string $nrChave;
}
