<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Registro do movimento de ajuste de estoque mínimo
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não for preenchido assumirá o local do estoque padrão.
 * @pw_element string $cod_int Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencha esse campo apenas se não tiver preenchido o campo "id_prod".
 * @pw_element integer $id_prod Código do produto.
 * @pw_element decimal $quan_min Novo valor para quantidade mínima no estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_complex estoque_mov_ajuste_estoque_minimo
 */
class Estoque_mov_ajuste_estoque_minimo{
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não for preenchido assumirá o local do estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencha esse campo apenas se não tiver preenchido o campo "id_prod".
	 *
	 * @var string
	 */
	public string $cod_int;
	/**
	 * Código do produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Novo valor para quantidade mínima no estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $quan_min;
}
