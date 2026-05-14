<?php

namespace OmieLib\Geral\Origemlancamento;

use OmieLib\Common\OmieFail;

/**
 * Solicitação da listagem de origens de lançamentos.
 *
 * @pw_element string $codigo Código da origem.
 * @pw_complex origem_lanc_listar_request
 */
class Origem_lanc_listar_request{
	/**
	 * Código da origem.
	 *
	 * @var string
	 */
	public string $codigo;
}
