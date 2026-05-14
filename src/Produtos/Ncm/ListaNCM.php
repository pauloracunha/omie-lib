<?php

namespace OmieLib\Produtos\Ncm;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\Request\NcmConsultarRequest;
use OmieLib\Produtos\Ncm\Request\NcmListarRequest;
use OmieLib\Produtos\Ncm\Response\NcmConsultarResponse;
use OmieLib\Produtos\Ncm\Response\NcmListarResponse;

/**
 * Lista de NCM.
 *
 * @pw_element string $cCodigo Código do NCM.<BR>No formato 9999.99.99<BR>
 * @pw_element string $cEX EX
 * @pw_element string $cDescricao Descrição do NCM.
 * @pw_complex listaNCM
 */
class ListaNCM{
	/**
	 * Código do NCM.<BR>No formato 9999.99.99<BR>
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * EX
	 *
	 * @var string
	 */
	public string $cEX;
	/**
	 * Descrição do NCM.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
