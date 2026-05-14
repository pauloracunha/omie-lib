<?php

namespace OmieLib\Servicos\Osp\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\ListaOS;
use OmieLib\Servicos\Osp\OrdemServicoFaturamentoJsonClient;
use OmieLib\Servicos\Osp\Response\OsAssociarCodIntResponse;
use OmieLib\Servicos\Osp\Response\OsCancelarResponse;
use OmieLib\Servicos\Osp\Response\OsDuplicarResponse;
use OmieLib\Servicos\Osp\Response\OsFaturarResponse;
use OmieLib\Servicos\Osp\Response\OsObterResponse;
use OmieLib\Servicos\Osp\Response\OsReenviarResponse;
use OmieLib\Servicos\Osp\Response\OsValidarResponse;

/**
 * Solicitação de cancelamento da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código do Pedido de Venda
 * @pw_element string $cCancelarNfse Indica se havará o cancelamento da NFS-e na prefeitura (S/N).<BR><BR>Default "S".<BR><BR>Preenchimento opcional.
 * @pw_complex osCancelarRequest
 */
class OsCancelarRequest{
	/**
	 * Código de Integração da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Código do Pedido de Venda
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Indica se havará o cancelamento da NFS-e na prefeitura (S/N).<BR><BR>Default "S".<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cCancelarNfse;
}
