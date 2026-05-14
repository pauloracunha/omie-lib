<?php

namespace OmieLib\Geral\Anexo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Anexo\DocumentoAnexoJsonClient;
use OmieLib\Geral\Anexo\Info;
use OmieLib\Geral\Anexo\ListaAnexos;
use OmieLib\Geral\Anexo\Request\DocConsultarAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocExcluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocIncluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocListarAnexosRequest;
use OmieLib\Geral\Anexo\Request\DocObterAnexoRequest;

/**
 * Resposta da listagem de anexos de um título do Contas a Receber.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaAnexosArray $listaAnexos Lista de anexos do título do contas a receber encontrados.
 * @pw_complex docListarAnexosResponse
 */
class DocListarAnexosResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de anexos do título do contas a receber encontrados.
	 *
	 * @var ListaAnexos[]
	 */
	public array $listaAnexos;
}
