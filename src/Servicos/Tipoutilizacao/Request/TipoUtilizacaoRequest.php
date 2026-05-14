<?php

namespace OmieLib\Servicos\Tipoutilizacao\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipoutilizacao\Cadastros;
use OmieLib\Servicos\Tipoutilizacao\Response\TipoUtilizacaoResponse;
use OmieLib\Servicos\Tipoutilizacao\ServicoTipoUtilizacaoJsonClient;

/**
 * Solicitação da listagem de tipo de utilização do serviço (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex tipoUtilizacaoRequest
 */
class TipoUtilizacaoRequest{
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
