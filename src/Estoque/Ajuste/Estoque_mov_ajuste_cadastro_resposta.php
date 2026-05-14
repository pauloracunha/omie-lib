<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Status de Resposta para o Ajuste de Estoque
 *
 * @pw_element string $codigo_status Código do status de resposta do ajuste de estoque mínimo
 * @pw_element string $descricao_status Descrição do status de resposta do ajuste de estoque mínimo
 * @pw_element integer $id_movest ID do Movimento de Ajuste de Estoque (Original)
 * @pw_element integer $id_ajuste ID do Movimento de Ajuste de Estoque
 * @pw_complex estoque_mov_ajuste_cadastro_resposta
 */
class Estoque_mov_ajuste_cadastro_resposta{
	/**
	 * Código do status de resposta do ajuste de estoque mínimo
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status de resposta do ajuste de estoque mínimo
	 *
	 * @var string
	 */
	public string $descricao_status;
	/**
	 * ID do Movimento de Ajuste de Estoque (Original)
	 *
	 * @var integer
	 */
	public int $id_movest;
	/**
	 * ID do Movimento de Ajuste de Estoque
	 *
	 * @var integer
	 */
	public int $id_ajuste;
}
