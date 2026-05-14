<?php

namespace OmieLib\Crm\Oportunidades\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Cadastros;
use OmieLib\Crm\Oportunidades\Concorrentes;
use OmieLib\Crm\Oportunidades\Envolvidos;
use OmieLib\Crm\Oportunidades\FasesStatus;
use OmieLib\Crm\Oportunidades\Identificacao;
use OmieLib\Crm\Oportunidades\Lista_papeis;
use OmieLib\Crm\Oportunidades\Lista_tickets;
use OmieLib\Crm\Oportunidades\Observacoes;
use OmieLib\Crm\Oportunidades\OportunidadesJsonClient;
use OmieLib\Crm\Oportunidades\OutrasInf;
use OmieLib\Crm\Oportunidades\PrevisaoTemp;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Tarefas;
use OmieLib\Crm\Oportunidades\Ticket;

/**
 * Resposta da solicitação da listagem de oportunidades.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_element lista_papeisArray $lista_papeis Lista de Papeis
 * @pw_element lista_ticketsArray $lista_tickets Lista de descrições dos títulos.
 * @pw_complex opListarResponse
 */
class OpListarResponse{
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
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
	/**
	 * Lista de Papeis
	 *
	 * @var Lista_papeis[]
	 */
	public array $lista_papeis;
	/**
	 * Lista de descrições dos títulos.
	 *
	 * @var Lista_tickets[]
	 */
	public array $lista_tickets;
}
