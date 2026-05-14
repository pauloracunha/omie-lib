<?php

namespace OmieLib\Crm\Tipostarefa\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipostarefa\Cadastros;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaAlterarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaConsultarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaExcluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaIncluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaListarRequest;
use OmieLib\Crm\Tipostarefa\TiposTarefaJsonClient;

/**
 * Cadastro do tipo de tarefa
 *
 * @pw_element integer $nIdTipoTarefa Id do Tipo de Tarefa
 * @pw_element string $cDescricao Descrição para o tipo de tarefa
 * @pw_element integer $nMinutos Duração padrão (em minutos) da tarefa
 * @pw_element string $cSyncCalend Indica se deve sincronizar com o calendário.<BR><BR>Valores possíveis:<BR><BR>S - Sim<BR>N - Não
 * @pw_complex tipostarefaConsultarResponse
 */
class TipostarefaConsultarResponse{
	/**
	 * Id do Tipo de Tarefa
	 *
	 * @var integer
	 */
	public int $nIdTipoTarefa;
	/**
	 * Descrição para o tipo de tarefa
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Duração padrão (em minutos) da tarefa
	 *
	 * @var integer
	 */
	public int $nMinutos;
	/**
	 * Indica se deve sincronizar com o calendário.<BR><BR>Valores possíveis:<BR><BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cSyncCalend;
}
