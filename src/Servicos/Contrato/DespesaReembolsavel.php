<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Despesa reembolsável
 *
 * @pw_element string $cAcaoReemb Ação para o reembolso, pode ser: <BR><BR>I - Inclusão<BR>A - Alteração<BR>E - Exclusão
 * @pw_element integer $nCodReemb ID do Reembolso
 * @pw_element string $dDataReemb Data do reembolso
 * @pw_element decimal $nValorReemb Valor do Reembolso
 * @pw_element string $cDescReemb Descrição do reembolso
 * @pw_element string $cRecorrenteReemb Indica se o reembolso é recorrente. [S/N]
 * @pw_complex despesaReembolsavel
 */
class DespesaReembolsavel{
	/**
	 * Ação para o reembolso, pode ser: <BR><BR>I - Inclusão<BR>A - Alteração<BR>E - Exclusão
	 *
	 * @var string
	 */
	public string $cAcaoReemb;
	/**
	 * ID do Reembolso
	 *
	 * @var integer
	 */
	public int $nCodReemb;
	/**
	 * Data do reembolso
	 *
	 * @var string
	 */
	public string $dDataReemb;
	/**
	 * Valor do Reembolso
	 *
	 * @var decimal
	 */
	public float $nValorReemb;
	/**
	 * Descrição do reembolso
	 *
	 * @var string
	 */
	public string $cDescReemb;
	/**
	 * Indica se o reembolso é recorrente. [S/N]
	 *
	 * @var string
	 */
	public string $cRecorrenteReemb;
}
