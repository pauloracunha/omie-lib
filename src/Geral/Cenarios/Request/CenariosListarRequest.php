<?php

namespace OmieLib\Geral\Cenarios\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\CenariosEncontrados;
use OmieLib\Geral\Cenarios\CenariosImpostosJsonClient;
use OmieLib\Geral\Cenarios\Impostos;
use OmieLib\Geral\Cenarios\Response\CenariosImpostosListarResponse;
use OmieLib\Geral\Cenarios\Response\CenariosListarResponse;

/**
 * Solicitação de listagem de Cenários de Impostos.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados.
 * @pw_complex cenariosListarRequest
 */
class CenariosListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
}
