<?php

namespace OmieLib\Geral\Paises;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Paises\Request\PaisListarRequest;
use OmieLib\Geral\Paises\Response\PaisListarResponse;

/**
 * Lista de Paises.
 *
 * @pw_element string $cCodigo Código do País.
 * @pw_element string $cDescricao Descrição do País.
 * @pw_element string $cCodigoISO Código ISO do País.
 * @pw_complex lista_paises
 */
class Lista_paises{
	/**
	 * Código do País.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do País.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código ISO do País.
	 *
	 * @var string
	 */
	public string $cCodigoISO;
}
