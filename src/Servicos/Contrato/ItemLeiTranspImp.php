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
 * Lei de Transparência dos Impostos
 *
 * @pw_element decimal $aliqFederal Alíquota da Carga Tributária Aprox. Federal
 * @pw_element decimal $aliqEstadual Alíquota Carga Trib. Aprox. Estadual
 * @pw_element decimal $aliMunicipal Alíquota Carga Trib. Aprox. Municipal
 * @pw_element string $chave Chave do IBPT
 * @pw_element string $fonte Fonte do IBPT
 * @pw_complex itemLeiTranspImp
 */
class ItemLeiTranspImp{
	/**
	 * Alíquota da Carga Tributária Aprox. Federal
	 *
	 * @var decimal
	 */
	public float $aliqFederal;
	/**
	 * Alíquota Carga Trib. Aprox. Estadual
	 *
	 * @var decimal
	 */
	public float $aliqEstadual;
	/**
	 * Alíquota Carga Trib. Aprox. Municipal
	 *
	 * @var decimal
	 */
	public float $aliMunicipal;
	/**
	 * Chave do IBPT
	 *
	 * @var string
	 */
	public string $chave;
	/**
	 * Fonte do IBPT
	 *
	 * @var string
	 */
	public string $fonte;
}
