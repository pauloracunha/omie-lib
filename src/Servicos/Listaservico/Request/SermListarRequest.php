<?php

namespace OmieLib\Servicos\Listaservico\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Listaservico\Cadastros;
use OmieLib\Servicos\Listaservico\ListaServicoMunicipioJsonClient;
use OmieLib\Servicos\Listaservico\Response\SermListarResponse;

/**
 * Solicitação da Lista de Serviço no Município.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $cCodServMun Código do Serviço no Município.
 * @pw_element string $cCodServLC116 Código do Serviço da LC116.
 * @pw_complex sermListarRequest
 */
class SermListarRequest{
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
	 * Código do Serviço no Município.
	 *
	 * @var string
	 */
	public string $cCodServMun;
	/**
	 * Código do Serviço da LC116.
	 *
	 * @var string
	 */
	public string $cCodServLC116;
}
