<?php

namespace OmieLib\Geral\Tiposdoc;

use OmieLib\Common\OmieFail;

/**
 * Pesquisa um tipo de documento por código
 *
 * @pw_element string $codigo Código para o Tipo de Documento
 * @pw_complex tipo_documento_consultar
 */
class Tipo_documento_consultar{
	/**
	 * Código para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $codigo;
}
