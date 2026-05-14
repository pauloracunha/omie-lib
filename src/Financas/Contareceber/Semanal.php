<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Repetição semanal.
 *
 * @pw_element string $repetir_dia_semana Informe o dia da semana que será o vencimento do lançamento.<BR><BR>Pode ser:<BR><BR>domingo<BR>segunda<BR>terca<BR>quarta<BR>quinta<BR>sexta<BR>sabado<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $repetir_por Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
 * @pw_complex semanal
 */
class Semanal{
	/**
	 * Informe o dia da semana que será o vencimento do lançamento.<BR><BR>Pode ser:<BR><BR>domingo<BR>segunda<BR>terca<BR>quarta<BR>quinta<BR>sexta<BR>sabado<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $repetir_dia_semana;
	/**
	 * Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $repetir_por;
}
