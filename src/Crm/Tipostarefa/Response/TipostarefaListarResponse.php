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
 * Resposta da solicitação da listagem de tipos de tarefas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os tipos de tarefa.
 * @pw_complex tipostarefaListarResponse
 */
class TipostarefaListarResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Lista os tipos de tarefa.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
