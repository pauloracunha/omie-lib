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
 * Solicitação de validação da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código do Pedido de Venda
 * @pw_complex osValidarRequest
 */
class OsValidarRequest{
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
}
