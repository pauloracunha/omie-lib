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
 * Resposta da inclusão do tipo de tarefa
 *
 * @pw_element integer $nIdTipoTarefa Id do Tipo de Tarefa
 * @pw_element string $cCodStatus Código do status
 * @pw_element string $cDescStatus Descrição do status
 * @pw_complex tipostarefaAlterarResponse
 */
class TipostarefaAlterarResponse{
	/**
	 * Id do Tipo de Tarefa
	 *
	 * @var integer
	 */
	public int $nIdTipoTarefa;
	/**
	 * Código do status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
