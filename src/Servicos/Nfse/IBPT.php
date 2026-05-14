<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados do IBPT.
 *
 * @pw_element string $CodigoNBS Código NBS.
 * @pw_element decimal $nValorEstadualIBPT Valor do IBPT - Estadual.
 * @pw_element decimal $nValorFederalIBPT Valor do IBPT - Federal.
 * @pw_element decimal $nValorMunicipalIBPT Valor do IBPT - Municipal.
 * @pw_element decimal $nAliqEstadualIBPT Alíquota do IBPT - Estadual.
 * @pw_element decimal $nAliqFederalIBPT Alíquota do IBPT - Federal.
 * @pw_element decimal $nAliqMunicipalIBPT Alíquota do IBPT - Municipal.
 * @pw_element string $cFonteIBPT Fonte do IBPT.
 * @pw_element string $cChaveIBPT Chave do IBPT.
 * @pw_complex IBPT
 */
class IBPT{
	/**
	 * Código NBS.
	 *
	 * @var string
	 */
	public string $CodigoNBS;
	/**
	 * Valor do IBPT - Estadual.
	 *
	 * @var decimal
	 */
	public float $nValorEstadualIBPT;
	/**
	 * Valor do IBPT - Federal.
	 *
	 * @var decimal
	 */
	public float $nValorFederalIBPT;
	/**
	 * Valor do IBPT - Municipal.
	 *
	 * @var decimal
	 */
	public float $nValorMunicipalIBPT;
	/**
	 * Alíquota do IBPT - Estadual.
	 *
	 * @var decimal
	 */
	public float $nAliqEstadualIBPT;
	/**
	 * Alíquota do IBPT - Federal.
	 *
	 * @var decimal
	 */
	public float $nAliqFederalIBPT;
	/**
	 * Alíquota do IBPT - Municipal.
	 *
	 * @var decimal
	 */
	public float $nAliqMunicipalIBPT;
	/**
	 * Fonte do IBPT.
	 *
	 * @var string
	 */
	public string $cFonteIBPT;
	/**
	 * Chave do IBPT.
	 *
	 * @var string
	 */
	public string $cChaveIBPT;
}
