<?php

namespace OmieLib\Servicos\Contratotpfat\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratotpfat\Cadastros;
use OmieLib\Servicos\Contratotpfat\ContratoTipoFaturamentoJsonClient;
use OmieLib\Servicos\Contratotpfat\Response\TfCtrListarResponse;

/**
 * Solicitação da listagem de tipo de faturamento de contrato.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex tfCtrListarRequest
 */
class TfCtrListarRequest{
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
