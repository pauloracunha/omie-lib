<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Informações adicionais da conta
 *
 * @pw_element integer $nNumFunc Número de Funcionários
 * @pw_element string $nFaixaFat Faixa de Faturamento
 * @pw_element string $cCnae CNAE Principal
 * @pw_element string $cRegTrib Regime Tributário
 * @pw_complex informacoesAdicionais
 */
class InformacoesAdicionais{
	/**
	 * Número de Funcionários
	 *
	 * @var integer
	 */
	public int $nNumFunc;
	/**
	 * Faixa de Faturamento
	 *
	 * @var string
	 */
	public string $nFaixaFat;
	/**
	 * CNAE Principal
	 *
	 * @var string
	 */
	public string $cCnae;
	/**
	 * Regime Tributário
	 *
	 * @var string
	 */
	public string $cRegTrib;
}
