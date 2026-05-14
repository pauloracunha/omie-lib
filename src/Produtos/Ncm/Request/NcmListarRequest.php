<?php

namespace OmieLib\Produtos\Ncm\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\ListaNCM;
use OmieLib\Produtos\Ncm\NCMJsonClient;
use OmieLib\Produtos\Ncm\Response\NcmConsultarResponse;
use OmieLib\Produtos\Ncm\Response\NcmListarResponse;

/**
 * Listagem de NCM.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>CODIGO - Código do NCM.<BR>DESCRICAO - Nome do NCM.<BR>
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element string $cCodigo Código do NCM.<BR>No formato 9999.99.99<BR>
 * @pw_element string $cDescricao Descrição do NCM.
 * @pw_complex ncmListarRequest
 */
class NcmListarRequest{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem os resultados da página por:<BR>CODIGO - Código do NCM.<BR>DESCRICAO - Nome do NCM.<BR>
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é Decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Código do NCM.<BR>No formato 9999.99.99<BR>
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do NCM.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
