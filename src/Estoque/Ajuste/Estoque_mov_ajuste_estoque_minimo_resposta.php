<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Status de resposta para o ajuste de estoque mínimo
 *
 * @pw_element string $codigo_status Código do status de resposta do ajuste de estoque mínimo
 * @pw_element string $descricao_status Descrição do status de resposta do ajuste de estoque mínimo
 * @pw_complex estoque_mov_ajuste_estoque_minimo_resposta
 */
class Estoque_mov_ajuste_estoque_minimo_resposta{
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
}
