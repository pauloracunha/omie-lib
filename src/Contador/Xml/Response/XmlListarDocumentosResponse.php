<?php

namespace OmieLib\Contador\Xml\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Xml\DocumentosEncontrados;
use OmieLib\Contador\Xml\DocumentosFiscaisJsonClient;
use OmieLib\Contador\Xml\Request\XmlListarDocumentosRequest;

/**
 * Resposta da solicitação de listagem de XMLs de Documentos Fiscais.
 *
 * @pw_element integer $nIdProduto Id único do produto/serviço
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element documentosEncontradosArray $documentosEncontrados Lista de XMLs dos documentos encontrados.
 * @pw_complex xmlListarDocumentosResponse
 */
class XmlListarDocumentosResponse{
	/**
	 * Id único do produto/serviço
	 *
	 * @var integer
	 */
	public int $nIdProduto;
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de XMLs dos documentos encontrados.
	 *
	 * @var DocumentosEncontrados[]
	 */
	public array $documentosEncontrados;
}
