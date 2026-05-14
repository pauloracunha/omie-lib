<?php

namespace OmieLib\Crm\Contatos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\CRM_CONTATOS_PESQUISA;
use OmieLib\Crm\Contatos\CRM_CONTATOS_RESPOSTA;
use OmieLib\Crm\Contatos\Cadastros;
use OmieLib\Crm\Contatos\ContatosJsonClient;
use OmieLib\Crm\Contatos\Endereco;
use OmieLib\Crm\Contatos\Identificacao;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;
use OmieLib\Crm\Contatos\Telefone_email;

/**
 * Solicitação da listagem de contatos.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $exibir_obs Exibir as observações do contato (S/N).<BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element integer $filtrar_por_conta Filtrar os contatos pelo código da conta.<BR><BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'nCod' do método 'ListarContas'  da API<BR>/api/v1/crm/contas/<BR>para obter essa informação
 * @pw_complex contatoListarRequest
 */
class ContatoListarRequest{
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
	 * Exibir as observações do contato (S/N).<BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_obs;
	/**
	 * Filtrar os contatos pelo código da conta.<BR><BR>Preenchimento Opcional.<BR><BR>Utilize a tag 'nCod' do método 'ListarContas'  da API<BR>/api/v1/crm/contas/<BR>para obter essa informação
	 *
	 * @var integer
	 */
	public int $filtrar_por_conta;
}
