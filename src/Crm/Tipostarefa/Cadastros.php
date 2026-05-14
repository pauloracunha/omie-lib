<?php

namespace OmieLib\Crm\Tipostarefa;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaAlterarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaConsultarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaExcluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaIncluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaListarRequest;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaAlterarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaConsultarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaExcluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaIncluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaListarResponse;

/**
 * Lista os tipos de tarefa.
 *
 * @pw_element integer $nIdTipoTarefa Id do Tipo de Tarefa
 * @pw_element string $cDescricao Descrição para o tipo de tarefa
 * @pw_element integer $nMinutos Duração padrão (em minutos) da tarefa
 * @pw_element string $cSyncCalend Indica se deve sincronizar com o calendário.<BR><BR>Valores possíveis:<BR><BR>S - Sim<BR>N - Não
 * @pw_complex cadastros
 */
class Cadastros{
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
