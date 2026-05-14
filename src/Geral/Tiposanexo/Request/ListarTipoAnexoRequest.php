<?php

namespace OmieLib\Geral\Tiposanexo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposanexo\ListaTipoAnexo;
use OmieLib\Geral\Tiposanexo\Response\ListarTipoAnexoResponse;
use OmieLib\Geral\Tiposanexo\TiposAnexoCadastroJsonClient;

/**
 * Listar Tipos de Anexos
 *
 * @pw_element string $codigo Código do Tipo de Anexo.
 * @pw_complex ListarTipoAnexoRequest
 */
class ListarTipoAnexoRequest{
	/**
	 * Código do Tipo de Anexo.
	 *
	 * @var string
	 */
	public string $codigo;
}
