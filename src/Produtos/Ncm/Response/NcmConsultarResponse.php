<?php

namespace OmieLib\Produtos\Ncm\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\ListaNCM;
use OmieLib\Produtos\Ncm\NCMJsonClient;
use OmieLib\Produtos\Ncm\Request\NcmConsultarRequest;
use OmieLib\Produtos\Ncm\Request\NcmListarRequest;

/**
 * Resposta da solicitação de consulta de um NCM.
 *
 * @pw_element string $cCodigo Código do NCM.<BR>No formato 9999.99.99<BR>
 * @pw_element string $cEX EX
 * @pw_element string $cDescricao Descrição do NCM.
 * @pw_complex ncmConsultarResponse
 */
class NcmConsultarResponse{
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
