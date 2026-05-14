<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Detalhes da NF referenciada
 *
 * @pw_element string $cChaveRef Chave da NF-e (ou NFC-e ou SAT) Relacionada.
 * @pw_element string $nNFRef Número da Nota Fiscal<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
 * @pw_element string $cSerieRef Série da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
 * @pw_element string $dtEmissaoRef Data de emissão da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
 * @pw_element string $cnpjEmitRef CNPJ da Emitente da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
 * @pw_element string $cUfRef Estado do Emitente da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
 * @pw_element string $nNfPR Número da Nota Fiscal relacionada do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $cSeriePR Série da NF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $dtEmissaoPR Data de emissão da NF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $cnpjPR CNPJ/CPF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $InscrEstPR Inscrição Estadual do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $cUfPR Estado do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
 * @pw_element string $nCOORef Número do COO - Contador de Ordem de Operação.<BR><BR>Cupom Fiscal Relacionado
 * @pw_element string $nECFRef Número de Ordem Sequencial do ECF.
 * @pw_element nrProdutorRuralArray $nrProdutorRural Outras notas de produtor rural relacionadas
 * @pw_element nrNFArray $nrNF Outras NF-e, NFC-e ou SAT relacionadas
 * @pw_element nrCupomFiscalArray $nrCupomFiscal Outros cupons fiscais relacionados
 * @pw_element nrModelo1_1AArray $nrModelo1_1A Outras notas modelo 1/1A relacionadas
 * @pw_element string $cSigNFRef Manter o sigilo da NF-e referenciada.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Preenchimento opcional.
 * @pw_complex nfRelacionada
 */
class NfRelacionada{
	/**
	 * Chave da NF-e (ou NFC-e ou SAT) Relacionada.
	 *
	 * @var string
	 */
	public string $cChaveRef;
	/**
	 * Número da Nota Fiscal<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
	 *
	 * @var string
	 */
	public string $nNFRef;
	/**
	 * Série da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
	 *
	 * @var string
	 */
	public string $cSerieRef;
	/**
	 * Data de emissão da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
	 *
	 * @var string
	 */
	public string $dtEmissaoRef;
	/**
	 * CNPJ da Emitente da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
	 *
	 * @var string
	 */
	public string $cnpjEmitRef;
	/**
	 * Estado do Emitente da NF Referenciada.<BR><BR>Nota Fiscal Relacionada Modelo 1/1A
	 *
	 * @var string
	 */
	public string $cUfRef;
	/**
	 * Número da Nota Fiscal relacionada do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $nNfPR;
	/**
	 * Série da NF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $cSeriePR;
	/**
	 * Data de emissão da NF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $dtEmissaoPR;
	/**
	 * CNPJ/CPF do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $cnpjPR;
	/**
	 * Inscrição Estadual do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $InscrEstPR;
	/**
	 * Estado do Produtor Rural.<BR><BR>Nota Fiscal Relacionada do Produtor Rural
	 *
	 * @var string
	 */
	public string $cUfPR;
	/**
	 * Número do COO - Contador de Ordem de Operação.<BR><BR>Cupom Fiscal Relacionado
	 *
	 * @var string
	 */
	public string $nCOORef;
	/**
	 * Número de Ordem Sequencial do ECF.
	 *
	 * @var string
	 */
	public string $nECFRef;
	/**
	 * Outras notas de produtor rural relacionadas
	 *
	 * @var NrProdutorRural[]
	 */
	public array $nrProdutorRural;
	/**
	 * Outras NF-e, NFC-e ou SAT relacionadas
	 *
	 * @var NrNF[]
	 */
	public array $nrNF;
	/**
	 * Outros cupons fiscais relacionados
	 *
	 * @var NrCupomFiscal[]
	 */
	public array $nrCupomFiscal;
	/**
	 * Outras notas modelo 1/1A relacionadas
	 *
	 * @var NrModelo1_1A[]
	 */
	public array $nrModelo1_1A;
	/**
	 * Manter o sigilo da NF-e referenciada.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cSigNFRef;
}
