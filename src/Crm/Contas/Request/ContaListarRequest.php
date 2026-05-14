<?php

namespace OmieLib\Crm\Contas\Request;

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
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;
use OmieLib\Crm\Contas\Tags;
use OmieLib\Crm\Contas\Telefone_email;

/**
 * Solicitação da listagem de Contas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $cDoc Número do Documento: CNPJ ou CPF.
 * @pw_complex contaListarRequest
 */
class ContaListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Número do Documento: CNPJ ou CPF.
	 *
	 * @var string
	 */
	public string $cDoc;
}
