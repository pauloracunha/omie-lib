<?php

namespace OmieLib\Produtos\Ncm\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\ListaNCM;
use OmieLib\Produtos\Ncm\NCMJsonClient;
use OmieLib\Produtos\Ncm\Response\NcmConsultarResponse;
use OmieLib\Produtos\Ncm\Response\NcmListarResponse;

/**
 * Consulta um NCM.
 *
 * @pw_element string $cCodigo Código do NCM.<BR>No formato 9999.99.99<BR>
 * @pw_complex ncmConsultarRequest
 */
class NcmConsultarRequest{
	/**
	 * Código do NCM.<BR>No formato 9999.99.99<BR>
	 *
	 * @var string
	 */
	public string $cCodigo;
}
