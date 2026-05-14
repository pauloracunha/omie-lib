<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element clientes_cadastroArray $clientes_cadastro Cadastro reduzido de produtos
 * @pw_complex clientes_lote_request
 */
class Clientes_lote_request{
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Cadastro reduzido de produtos
	 *
	 * @var Clientes_cadastro[]
	 */
	public array $clientes_cadastro;
}
