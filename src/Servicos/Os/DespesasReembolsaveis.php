<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Despesas reembolsáveis.
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
