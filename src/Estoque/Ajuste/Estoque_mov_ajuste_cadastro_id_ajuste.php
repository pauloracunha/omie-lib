<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * ID do Registro do Ajuste de Estoque
 *
 * @pw_element integer $id_ajuste ID do Movimento de Ajuste de Estoque
 * @pw_complex estoque_mov_ajuste_cadastro_id_ajuste
 */
class Estoque_mov_ajuste_cadastro_id_ajuste{
	/**
	 * ID do Movimento de Ajuste de Estoque
	 *
	 * @var integer
	 */
	public int $id_ajuste;
}
