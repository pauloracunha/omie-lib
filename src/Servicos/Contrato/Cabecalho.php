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
 * Cabeçalho do Contrato de Serviços
 *
 * @pw_element integer $nCodCtr Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntCtr Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
 * @pw_element integer $nCodCli Código do cliente a que se refere o contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNumCtr Número do contrato de serviços.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $cCodSit Código da situação do contrato de serviços.<BR>Pode ser:<BR>00 - Em Elaboração<BR>10 - Ativo <BR>90 - Suspenso <BR>99 - Cancelado
 * @pw_element string $dVigInicial Data da vigência inicial do contrato de serviços.
 * @pw_element string $dVigFinal Data de vigência final do contrato de serviços.
 * @pw_element integer $nDiaFat Dia de faturamento.
 * @pw_element decimal $nValTotMes Valor total mensal do contrato de serviços.<BR>(Calculado automaticamente)
 * @pw_element string $cTipoFat Tipo de Faturamento do Contrato.<BR>Pode ser:<BR>01 - Todo Mês (mensal)<BR>02 - A cada 2 meses (bimestral)<BR>03 - A cada 3 meses (trimestral)<BR>06 - A cada 6 meses (semestral)<BR>12 - A cada 12 meses (anual)
 * @pw_complex cabecalho
 */
class Cabecalho{
	/**
	 * Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntCtr;
	/**
	 * Código do cliente a que se refere o contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCli;
	/**
	 * Número do contrato de serviços.<BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumCtr;
	/**
	 * Código da situação do contrato de serviços.<BR>Pode ser:<BR>00 - Em Elaboração<BR>10 - Ativo <BR>90 - Suspenso <BR>99 - Cancelado
	 *
	 * @var string
	 */
	public string $cCodSit;
	/**
	 * Data da vigência inicial do contrato de serviços.
	 *
	 * @var string
	 */
	public string $dVigInicial;
	/**
	 * Data de vigência final do contrato de serviços.
	 *
	 * @var string
	 */
	public string $dVigFinal;
	/**
	 * Dia de faturamento.
	 *
	 * @var integer
	 */
	public int $nDiaFat;
	/**
	 * Valor total mensal do contrato de serviços.<BR>(Calculado automaticamente)
	 *
	 * @var decimal
	 */
	public float $nValTotMes;
	/**
	 * Tipo de Faturamento do Contrato.<BR>Pode ser:<BR>01 - Todo Mês (mensal)<BR>02 - A cada 2 meses (bimestral)<BR>03 - A cada 3 meses (trimestral)<BR>06 - A cada 6 meses (semestral)<BR>12 - A cada 12 meses (anual)
	 *
	 * @var string
	 */
	public string $cTipoFat;
}
