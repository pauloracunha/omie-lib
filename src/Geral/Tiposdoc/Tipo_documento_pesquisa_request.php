<?php

namespace OmieLib\Geral\Tiposdoc;

use OmieLib\Common\OmieFail;

/**
 * Pesquisa do tipo de documento
 *
 * @pw_element string $codigo Código para o Tipo de Documento
 * @pw_complex tipo_documento_pesquisa_request
 */
class Tipo_documento_pesquisa_request{
	/**
	 * Código para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $codigo;
}
