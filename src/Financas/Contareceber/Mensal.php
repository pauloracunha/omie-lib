<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Repetição mensal.
 *
 * @pw_element integer $repetir_todo_dia Informe aqui o dia do mês em que cadá lançamento irá vencer .<BR><BR>Exemplo:<BR>Caso informe dia 30, será cadastrado um lançamento com vencimento para o dia 30 de cada mês.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $repetir_por Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
 * @pw_complex mensal
 */
class Mensal{
	/**
	 * Informe aqui o dia do mês em que cadá lançamento irá vencer .<BR><BR>Exemplo:<BR>Caso informe dia 30, será cadastrado um lançamento com vencimento para o dia 30 de cada mês.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $repetir_todo_dia;
	/**
	 * Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $repetir_por;
}
