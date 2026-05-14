<?php

namespace OmieLib\Geral\Paises\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Paises\Lista_paises;
use OmieLib\Geral\Paises\PaisesCadastroJsonClient;
use OmieLib\Geral\Paises\Request\PaisListarRequest;

/**
 * Resposta da listagem de Paises.
 *
 * @pw_element lista_paisesArray $lista_paises Lista de Paises.
 * @pw_complex paisListarResponse
 */
class PaisListarResponse{
	/**
	 * Lista de Paises.
	 *
	 * @var Lista_paises[]
	 */
	public array $lista_paises;
}
