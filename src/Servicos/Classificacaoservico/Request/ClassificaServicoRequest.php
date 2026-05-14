<?php

namespace OmieLib\Servicos\Classificacaoservico\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Classificacaoservico\Cadastros;
use OmieLib\Servicos\Classificacaoservico\ClassificacaoServicoJsonClient;
use OmieLib\Servicos\Classificacaoservico\Response\ClassificaServicoResponse;

/**
 * Solicitação da listagem de classificações do serviço (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex classificaServicoRequest
 */
class ClassificaServicoRequest{
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
}
