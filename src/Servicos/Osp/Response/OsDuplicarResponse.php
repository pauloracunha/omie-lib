<?php

namespace OmieLib\Servicos\Osp\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\ListaOS;
use OmieLib\Servicos\Osp\OrdemServicoFaturamentoJsonClient;
use OmieLib\Servicos\Osp\Request\OsAssociarCodIntRequest;
use OmieLib\Servicos\Osp\Request\OsCancelarRequest;
use OmieLib\Servicos\Osp\Request\OsDuplicarRequest;
use OmieLib\Servicos\Osp\Request\OsFaturarRequest;
use OmieLib\Servicos\Osp\Request\OsObterRequest;
use OmieLib\Servicos\Osp\Request\OsReenviarRequest;
use OmieLib\Servicos\Osp\Request\OsValidarRequest;

/**
 * Resposta da solicitação de duplicação da Ordem de Serviço.
 *
 * @pw_element string $cCodIntOS Código de Integração da Ordem de Serviço
 * @pw_element integer $nCodOS Código do Pedido de Venda
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex osDuplicarResponse
 */
class OsDuplicarResponse{
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
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
