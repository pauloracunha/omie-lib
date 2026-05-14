<?php

namespace OmieLib\Geral\Tiposanexo;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposanexo\Request\ListarTipoAnexoRequest;
use OmieLib\Geral\Tiposanexo\Response\ListarTipoAnexoResponse;

/**
 * Lista de tipos de anexos.
 *
 * @pw_element string $codigo Código do Tipo de Anexo.
 * @pw_element string $descricao Descrição do Tipo de Anexo.
 * @pw_complex listaTipoAnexo
 */
class ListaTipoAnexo{
	/**
	 * Código do Tipo de Anexo.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição do Tipo de Anexo.
	 *
	 * @var string
	 */
	public string $descricao;
}
