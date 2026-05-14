<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Detalhes da NF referenciada.
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
 * @pw_element string $indPresenca Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>9 -Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $indIntermediario Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cnpjIntermediario CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $identIntermediario Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
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
	 * Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>9 -Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $indPresenca;
	/**
	 * Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $indIntermediario;
	/**
	 * CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cnpjIntermediario;
	/**
	 * Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $identIntermediario;
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
