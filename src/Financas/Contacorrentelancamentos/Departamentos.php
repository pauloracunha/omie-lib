<?php

namespace OmieLib\Financas\Contacorrentelancamentos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;

/**
 * Distribuição por departamento do lançamento do conta corrente
 *
 * @pw_element string $cCodDep Código do departamento.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element decimal $nValDep Valor do departamento
 * @pw_element decimal $nPerDep Percentual do departamento
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * Código do departamento.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodDep;
	/**
	 * Valor do departamento
	 *
	 * @var decimal
	 */
	public float $nValDep;
	/**
	 * Percentual do departamento
	 *
	 * @var decimal
	 */
	public float $nPerDep;
}
