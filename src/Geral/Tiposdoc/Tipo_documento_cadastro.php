<?php

namespace OmieLib\Geral\Tiposdoc;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de tipos de documentos
 *
 * @pw_element string $codigo Código para o Tipo de Documento
 * @pw_element string $descricao Descrição para o Tipo de Documento
 * @pw_complex tipo_documento_cadastro
 */
class Tipo_documento_cadastro{
	/**
	 * Código para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $descricao;
}
