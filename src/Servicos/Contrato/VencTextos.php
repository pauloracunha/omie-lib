<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Vencimento e Textos NFS-e
 *
 * @pw_element string $cTpVenc Tipo de Vencimento.<BR><BR>Pode ser:<BR>001-Número de dias após faturar.<BR>002-Fixar dia do mês (1 a 31).<BR>
 * @pw_element integer $nDias Número de Dias para a gerar o contas a receber
 * @pw_element integer $nDiaFixo Dia de vencimento fixo para a gerar o contas a receber
 * @pw_element string $cProxMes Define se o vencimento ocorrerá somente no mês seguinte.
 * @pw_element string $cAntecipar Define se deve antecipar o vencimento ao considerar apenas dias úteis
 * @pw_element string $cPostergar Postergar Sábados, Domingos e Feriados Nacionais
 * @pw_element string $cAdPeriodo Adicionar o período de referência associado ao faturamento
 * @pw_element string $cAdContrato Adicionar o "Nº do Contrato" à descrição dos serviços na NFS-e
 * @pw_element string $cAdVenc Adicionar o vencimento da parcela à descrição dos serviços na NFS-e
 * @pw_element string $cCodPerRef Período de Referência - Código do período de referência para o faturamento.<BR><BR>Pode ser:<BR>001 Mês do faturamento<BR>002 Mês Anterior ao faturamento<BR>003 Mês Posterior ao faturamento<BR>004 Período Anterior ao faturamento<BR>005 Período Posterior ao faturamento<BR>006 Período Anterior específico<BR>007 Número da Parcela<BR>008 Período Posterior específico<BR>009 Período Atual específico
 * @pw_element integer $cDiaIni Dia Inicial - Dia para a data inicial do período de referência associado ao faturamentDia Inicial
 * @pw_element integer $cDiaFim Dia Final - Dia para a data final do período de referência associado ao faturamento
 * @pw_complex vencTextos
 */
class VencTextos{
	/**
	 * Tipo de Vencimento.<BR><BR>Pode ser:<BR>001-Número de dias após faturar.<BR>002-Fixar dia do mês (1 a 31).<BR>
	 *
	 * @var string
	 */
	public string $cTpVenc;
	/**
	 * Número de Dias para a gerar o contas a receber
	 *
	 * @var integer
	 */
	public int $nDias;
	/**
	 * Dia de vencimento fixo para a gerar o contas a receber
	 *
	 * @var integer
	 */
	public int $nDiaFixo;
	/**
	 * Define se o vencimento ocorrerá somente no mês seguinte.
	 *
	 * @var string
	 */
	public string $cProxMes;
	/**
	 * Define se deve antecipar o vencimento ao considerar apenas dias úteis
	 *
	 * @var string
	 */
	public string $cAntecipar;
	/**
	 * Postergar Sábados, Domingos e Feriados Nacionais
	 *
	 * @var string
	 */
	public string $cPostergar;
	/**
	 * Adicionar o período de referência associado ao faturamento
	 *
	 * @var string
	 */
	public string $cAdPeriodo;
	/**
	 * Adicionar o "Nº do Contrato" à descrição dos serviços na NFS-e
	 *
	 * @var string
	 */
	public string $cAdContrato;
	/**
	 * Adicionar o vencimento da parcela à descrição dos serviços na NFS-e
	 *
	 * @var string
	 */
	public string $cAdVenc;
	/**
	 * Período de Referência - Código do período de referência para o faturamento.<BR><BR>Pode ser:<BR>001 Mês do faturamento<BR>002 Mês Anterior ao faturamento<BR>003 Mês Posterior ao faturamento<BR>004 Período Anterior ao faturamento<BR>005 Período Posterior ao faturamento<BR>006 Período Anterior específico<BR>007 Número da Parcela<BR>008 Período Posterior específico<BR>009 Período Atual específico
	 *
	 * @var string
	 */
	public string $cCodPerRef;
	/**
	 * Dia Inicial - Dia para a data inicial do período de referência associado ao faturamentDia Inicial
	 *
	 * @var integer
	 */
	public int $cDiaIni;
	/**
	 * Dia Final - Dia para a data final do período de referência associado ao faturamento
	 *
	 * @var integer
	 */
	public int $cDiaFim;
}
