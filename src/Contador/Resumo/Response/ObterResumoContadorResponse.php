<?php

namespace OmieLib\Contador\Resumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Resumo\ListaFechamentoContabil;
use OmieLib\Contador\Resumo\Request\ObterResumoContadorRequest;
use OmieLib\Contador\Resumo\ResumoPainelContadorJsonClient;

/**
 * Resposta da solicitação do resumo do painel do contador.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element listaFechamentoContabilArray $listaFechamentoContabil Exibe as informações do fechamento contábil.
 * @pw_complex ObterResumoContadorResponse
 */
class ObterResumoContadorResponse{
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
	/**
	 * Exibe as informações do fechamento contábil.
	 *
	 * @var ListaFechamentoContabil[]
	 */
	public array $listaFechamentoContabil;
}
