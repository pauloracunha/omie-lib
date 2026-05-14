<?php

namespace OmieLib\Servicos\Contratotpfat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratotpfat\Cadastros;
use OmieLib\Servicos\Contratotpfat\ContratoTipoFaturamentoJsonClient;
use OmieLib\Servicos\Contratotpfat\Request\TfCtrListarRequest;

/**
 * Resposta da solicitação de tipo de faturamento de contrato.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os tipos de faturamento de contrato.
 * @pw_complex tfCtrListarResponse
 */
class TfCtrListarResponse{
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
	 * Lista os tipos de faturamento de contrato.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
