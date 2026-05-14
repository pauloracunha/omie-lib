<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Repetição do lançamento.
 *
 * @pw_element string $antecipar Antecipar data de vencimento.<BR><BR>Indica que a data de vencimento será antecipada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
 * @pw_element string $postergar Postergar data de vencimento.<BR><BR>Indica que a data de vencimento será postergada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
 * @pw_element mensal $mensal Repetição mensal.<BR>Informe aqui os detalhes da repetição mensal do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
 * @pw_element semanal $semanal Repetição semanal.<BR>Informe aqui os detalhes da repetição semanal do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
 * @pw_element especifico $especifico Repetição específica.<BR>Informe aqui os detalhes da repetição específica do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
 * @pw_complex repeticao
 */
class Repeticao{
	/**
	 * Antecipar data de vencimento.<BR><BR>Indica que a data de vencimento será antecipada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $antecipar;
	/**
	 * Postergar data de vencimento.<BR><BR>Indica que a data de vencimento será postergada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $postergar;
	/**
	 * Repetição mensal.<BR>Informe aqui os detalhes da repetição mensal do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
	 *
	 * @var Mensal
	 */
	public Mensal $mensal;
	/**
	 * Repetição semanal.<BR>Informe aqui os detalhes da repetição semanal do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
	 *
	 * @var Semanal
	 */
	public Semanal $semanal;
	/**
	 * Repetição específica.<BR>Informe aqui os detalhes da repetição específica do lançamento.<BR><BR>É obrigatório o preenchimento de apenas umas das tags: <BR>mensal<BR>semanal<BR>especifico
	 *
	 * @var Especifico
	 */
	public Especifico $especifico;
}
