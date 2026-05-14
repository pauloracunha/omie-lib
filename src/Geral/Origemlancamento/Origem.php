<?php

namespace OmieLib\Geral\Origemlancamento;

use OmieLib\Common\OmieFail;

/**
 * Origens de lançamentos.
 *
 * @pw_element string $codigo Código da origem.
 * @pw_element string $descricao Descrição da origem.
 * @pw_complex origem
 */
class Origem{
	/**
	 * Código da origem.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição da origem.
	 *
	 * @var string
	 */
	public string $descricao;
}
