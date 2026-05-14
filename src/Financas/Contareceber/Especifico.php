<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Repetição específica.
 *
 * @pw_element integer $repetir_a_cada Informe aqui o intervalo em dias entre cada vencimento do lançamento que será cadastrado.<BR><BR>Exemplo:<BR>Caso informe uma quantidade de 10 dias, será cadastrado um lançamento com vencimento a cada 10 dias.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $repetir_por Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
 * @pw_complex especifico
 */
class Especifico{
	/**
	 * Informe aqui o intervalo em dias entre cada vencimento do lançamento que será cadastrado.<BR><BR>Exemplo:<BR>Caso informe uma quantidade de 10 dias, será cadastrado um lançamento com vencimento a cada 10 dias.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $repetir_a_cada;
	/**
	 * Informe aqui a quantidade de parcelas que serão cadastradas com um limite de até 120 repetições.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $repetir_por;
}
