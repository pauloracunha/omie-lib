<?php

namespace OmieLib\Geral\Origempedido;

use OmieLib\Common\OmieFail;

/**
 * Solicitação da listagem de origens de pedido.
 *
 * @pw_element string $codigo Código da origem.
 * @pw_complex origem_ped_listar_request
 */
class Origem_ped_listar_request{
	/**
	 * Código da origem.
	 *
	 * @var string
	 */
	public string $codigo;
}
