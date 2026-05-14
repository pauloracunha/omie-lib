<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Informe aqui as Deduções para o ISS.
 *
 * @pw_element string $cFormaDeducao Tipo de dedução. Informe 'P' para Percentual ou 'V' para Valor.
 * @pw_element decimal $nPercDeducao Percentual de dedução.
 * @pw_element decimal $nValorDeducao Valor da Dedução.
 * @pw_element string $cTipoDeduducao Tipo da Dedução. Informe  '1' para  Materiais ou 2 para Sub-Empreitada
 * @pw_element string $cNFReferencia Nota Fiscal de Referência.
 * @pw_element string $cCnpjFornecedor CPF ou CNPJ do Fornecedor
 * @pw_element decimal $nValorTotNfRef Valor total NF de Referência
 * @pw_element decimal $nQuantMateriais Quantidade de Material
 * @pw_element string $cDescMateriais Descrição do material.
 * @pw_complex DeducoesIss
 */
class DeducoesIss{
	/**
	 * Tipo de dedução. Informe 'P' para Percentual ou 'V' para Valor.
	 *
	 * @var string
	 */
	public string $cFormaDeducao;
	/**
	 * Percentual de dedução.
	 *
	 * @var decimal
	 */
	public float $nPercDeducao;
	/**
	 * Valor da Dedução.
	 *
	 * @var decimal
	 */
	public float $nValorDeducao;
	/**
	 * Tipo da Dedução. Informe  '1' para  Materiais ou 2 para Sub-Empreitada
	 *
	 * @var string
	 */
	public string $cTipoDeduducao;
	/**
	 * Nota Fiscal de Referência.
	 *
	 * @var string
	 */
	public string $cNFReferencia;
	/**
	 * CPF ou CNPJ do Fornecedor
	 *
	 * @var string
	 */
	public string $cCnpjFornecedor;
	/**
	 * Valor total NF de Referência
	 *
	 * @var decimal
	 */
	public float $nValorTotNfRef;
	/**
	 * Quantidade de Material
	 *
	 * @var decimal
	 */
	public float $nQuantMateriais;
	/**
	 * Descrição do material.
	 *
	 * @var string
	 */
	public string $cDescMateriais;
}
