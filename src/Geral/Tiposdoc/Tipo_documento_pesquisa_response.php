<?php

namespace OmieLib\Geral\Tiposdoc;

use OmieLib\Common\OmieFail;

/**
 * Resposta da pesquisa,
 *
 * @pw_element tipo_documento_cadastroArray $tipo_documento_cadastro Cadastro de tipos de documentos
 * @pw_complex tipo_documento_pesquisa_response
 */
class Tipo_documento_pesquisa_response{
	/**
	 * Cadastro de tipos de documentos
	 *
	 * @var Tipo_documento_cadastro[]
	 */
	public array $tipo_documento_cadastro;
}
