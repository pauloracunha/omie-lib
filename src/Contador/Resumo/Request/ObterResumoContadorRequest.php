<?php

namespace OmieLib\Contador\Resumo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Resumo\ListaFechamentoContabil;
use OmieLib\Contador\Resumo\Response\ObterResumoContadorResponse;
use OmieLib\Contador\Resumo\ResumoPainelContadorJsonClient;

/**
 * Solicitação do resumo do painel do contador.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_complex ObterResumoContadorRequest
 */
class ObterResumoContadorRequest{
	/**
	 * Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInicio;
	/**
	 * Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataFim;
}
