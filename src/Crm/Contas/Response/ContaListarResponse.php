<?php

namespace OmieLib\Crm\Contas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\CRM_CONTAS_PESQUISA;
use OmieLib\Crm\Contas\CRM_CONTAS_RESPOSTA;
use OmieLib\Crm\Contas\Cadastros;
use OmieLib\Crm\Contas\Caracteristicas;
use OmieLib\Crm\Contas\ContasJsonClient;
use OmieLib\Crm\Contas\Contatos;
use OmieLib\Crm\Contas\Endereco;
use OmieLib\Crm\Contas\Identificacao;
use OmieLib\Crm\Contas\InformacoesAdicionais;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Tags;
use OmieLib\Crm\Contas\Telefone_email;

/**
 * Resposta da solicitação da listagem de Contas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex contaListarResponse
 */
class ContaListarResponse{
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
}
