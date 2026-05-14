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
 * Despesas reembolsáveis
 *
 * @pw_element string $cCodCategReemb Código da categoria para reembolso
 * @pw_element despesaReembolsavelArray $despesaReembolsavel Despesa reembolsável
 * @pw_complex despesasReembolsaveis
 */
class DespesasReembolsaveis{
	/**
	 * Código da categoria para reembolso
	 *
	 * @var string
	 */
	public string $cCodCategReemb;
	/**
	 * Despesa reembolsável
	 *
	 * @var DespesaReembolsavel[]
	 */
	public array $despesaReembolsavel;
}
