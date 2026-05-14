<?php

namespace OmieLib\Crm\Tipostarefa\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipostarefa\Cadastros;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaAlterarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaConsultarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaExcluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaIncluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaListarResponse;
use OmieLib\Crm\Tipostarefa\TiposTarefaJsonClient;

/**
 * Solicitação da consulta de tipo de tarefa
 *
 * @pw_element integer $nIdTipoTarefa Id do Tipo de Tarefa
 * @pw_complex tipostarefaConsultarRequest
 */
class TipostarefaConsultarRequest{
	/**
	 * Id do Tipo de Tarefa
	 *
	 * @var integer
	 */
	public int $nIdTipoTarefa;
}
