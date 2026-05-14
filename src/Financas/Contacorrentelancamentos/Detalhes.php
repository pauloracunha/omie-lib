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
 * Detalhes do lançamento na conta corrente
 *
 * @pw_element string $cCodCateg Código da categoria
 * @pw_element aCodCategArray $aCodCateg Rateio de categorias
 * @pw_element string $cTipo Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento <BR>BOL - Boleto <BR>CRT - Cartão <BR>CHQ - Cheque <BR>CON - Convênios <BR>CRE - Crediário <BR>DRF - DARF <BR>DAS - DAS <BR>DEB - Débito em conta <BR>DIN - Dinheiro <BR>DOC - DOC <BR>GUIA - Guia de Recolhimento <BR>PROT - Protesto <BR>REC - Recibo <BR>RPA - RPA <BR>TED - TED <BR>TRA - Transferência <BR>99999 - Outros
 * @pw_element string $cNumDoc Número do Documento.
 * @pw_element integer $nCodCliente Código de Cliente / Favorecido.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cObs Observações.
 * @pw_complex detalhes
 */
class Detalhes{
	/**
	 * Código da categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Rateio de categorias
	 *
	 * @var ACodCateg[]
	 */
	public array $aCodCateg;
	/**
	 * Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento <BR>BOL - Boleto <BR>CRT - Cartão <BR>CHQ - Cheque <BR>CON - Convênios <BR>CRE - Crediário <BR>DRF - DARF <BR>DAS - DAS <BR>DEB - Débito em conta <BR>DIN - Dinheiro <BR>DOC - DOC <BR>GUIA - Guia de Recolhimento <BR>PROT - Protesto <BR>REC - Recibo <BR>RPA - RPA <BR>TED - TED <BR>TRA - Transferência <BR>99999 - Outros
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Número do Documento.
	 *
	 * @var string
	 */
	public string $cNumDoc;
	/**
	 * Código de Cliente / Favorecido.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCliente;
	/**
	 * Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProjeto;
	/**
	 * Observações.
	 *
	 * @var string
	 */
	public string $cObs;
}
