<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Informações referente ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e a tag [tipo] for diferente de 'ENT' (entrada).
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do lote para o produto.<BR><BR>Preenchimento obrigatório quando o produto possui controle de lote.
 * @pw_element string $cNumLote Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
 * @pw_element string $cCodAgreg Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.
 * @pw_element string $dDataFab Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
 * @pw_element string $dDataVal Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e a tag [tipo] for diferente de 'ENT' (entrada).
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do lote para o produto.<BR><BR>Preenchimento obrigatório quando o produto possui controle de lote.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
	/**
	 * Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
	 *
	 * @var string
	 */
	public string $cNumLote;
	/**
	 * Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $cCodAgreg;
	/**
	 * Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
	 *
	 * @var string
	 */
	public string $dDataFab;
	/**
	 * Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [tipo] for 'ENT' (entrada) e a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $dDataVal;
}
