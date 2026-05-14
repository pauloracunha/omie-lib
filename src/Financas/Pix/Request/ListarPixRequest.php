<?php

namespace OmieLib\Financas\Pix\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\CInfo;
use OmieLib\Financas\Pix\ListaPix;
use OmieLib\Financas\Pix\ListaStatusPix;
use OmieLib\Financas\Pix\PIXJsonClient;
use OmieLib\Financas\Pix\Response\CancelarPixResponse;
use OmieLib\Financas\Pix\Response\GerarPixResponse;
use OmieLib\Financas\Pix\Response\GerarQrCodePixResponse;
use OmieLib\Financas\Pix\Response\ListarPixResponse;
use OmieLib\Financas\Pix\Response\ListarStatusPixResponse;
use OmieLib\Financas\Pix\Response\ObterPixResponse;
use OmieLib\Financas\Pix\Response\ObterStatusPixResponse;

/**
 * Solicitação da listagem de detalhes do PIX.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $dEmissaoDe Filtrar pela data de emissão - de.
 * @pw_element string $dEmissaoAte Filtrar pela data de emissão - Ate.
 * @pw_element string $cStatus Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
 * @pw_complex ListarPixRequest
 */
class ListarPixRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Filtrar pela data de emissão - de.
	 *
	 * @var string
	 */
	public string $dEmissaoDe;
	/**
	 * Filtrar pela data de emissão - Ate.
	 *
	 * @var string
	 */
	public string $dEmissaoAte;
	/**
	 * Status do PIX.<BR><BR>Pode ser:<BR><BR>LIQUIDADO<BR>CANCELADO<BR>REGISTRADO
	 *
	 * @var string
	 */
	public string $cStatus;
}
