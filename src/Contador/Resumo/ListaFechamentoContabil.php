<?php

namespace OmieLib\Contador\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Resumo\Request\ObterResumoContadorRequest;
use OmieLib\Contador\Resumo\Response\ObterResumoContadorResponse;

/**
 * Exibe as informações do fechamento contábil.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $cSituacao Período de Fechamento contábil.<BR><BR>Pode ser:<BR><BR>Semanal<BR>Mensal<BR>Quinzenal
 * @pw_element string $cAno Ano do fechamento contábil.
 * @pw_element string $cMes Mês do fechamento contábil.
 * @pw_element string $cLayout Layout do sistema contábil.
 * @pw_element string $dEmail Data do envio de e-mail do fechamento contábil.
 * @pw_element string $dBloqueado Data de bloqueio do fechamento contábil.
 * @pw_element string $uBloqueado Indica o usuário que realizou o bloqueio do fechameto contábil.
 * @pw_element string $cPeriodo Período de Fechamento contábil.<BR><BR>Pode ser:<BR><BR>Semanal<BR>Mensal<BR>Quinzenal
 * @pw_complex listaFechamentoContabil
 */
class ListaFechamentoContabil{
	/**
	 * Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInicio;
	/**
	 * Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataFim;
	/**
	 * Período de Fechamento contábil.<BR><BR>Pode ser:<BR><BR>Semanal<BR>Mensal<BR>Quinzenal
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Ano do fechamento contábil.
	 *
	 * @var string
	 */
	public string $cAno;
	/**
	 * Mês do fechamento contábil.
	 *
	 * @var string
	 */
	public string $cMes;
	/**
	 * Layout do sistema contábil.
	 *
	 * @var string
	 */
	public string $cLayout;
	/**
	 * Data do envio de e-mail do fechamento contábil.
	 *
	 * @var string
	 */
	public string $dEmail;
	/**
	 * Data de bloqueio do fechamento contábil.
	 *
	 * @var string
	 */
	public string $dBloqueado;
	/**
	 * Indica o usuário que realizou o bloqueio do fechameto contábil.
	 *
	 * @var string
	 */
	public string $uBloqueado;
	/**
	 * Período de Fechamento contábil.<BR><BR>Pode ser:<BR><BR>Semanal<BR>Mensal<BR>Quinzenal
	 *
	 * @var string
	 */
	public string $cPeriodo;
}
