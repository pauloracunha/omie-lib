<?php

namespace OmieLib\Geral\Tiposanexo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposanexo\ListaTipoAnexo;
use OmieLib\Geral\Tiposanexo\Request\ListarTipoAnexoRequest;
use OmieLib\Geral\Tiposanexo\TiposAnexoCadastroJsonClient;

/**
 * Listar de tipos de documentos anexos.
 *
 * @pw_element listaTipoAnexoArray $listaTipoAnexo Lista de tipos de anexos.
 * @pw_complex ListarTipoAnexoResponse
 */
class ListarTipoAnexoResponse{
	/**
	 * Lista de tipos de anexos.
	 *
	 * @var ListaTipoAnexo[]
	 */
	public array $listaTipoAnexo;
}
