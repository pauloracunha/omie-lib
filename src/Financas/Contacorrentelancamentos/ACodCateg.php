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
 * Rateio de categorias
 *
 * @pw_element string $cCodCateg Código da categoria
 * @pw_element decimal $nValor Valor da categoria
 * @pw_element decimal $nPerc Percentual da categoria
 * @pw_complex aCodCateg
 */
class ACodCateg{
	/**
	 * Código da categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Valor da categoria
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Percentual da categoria
	 *
	 * @var decimal
	 */
	public float $nPerc;
}
