<?php

namespace OmieLib\Crm\Contatos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\CRM_CONTATOS_PESQUISA;
use OmieLib\Crm\Contatos\CRM_CONTATOS_RESPOSTA;
use OmieLib\Crm\Contatos\Cadastros;
use OmieLib\Crm\Contatos\ContatosJsonClient;
use OmieLib\Crm\Contatos\Endereco;
use OmieLib\Crm\Contatos\Identificacao;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Telefone_email;

/**
 * Resposta da solicitação da listagem de contatos.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex contatoListarResponse
 */
class ContatoListarResponse{
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
