<?php

namespace OmieLib\Produtos\Cupomfiscalincluir\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Caixa;
use OmieLib\Produtos\Cupomfiscalincluir\Categorias;
use OmieLib\Produtos\Cupomfiscalincluir\CfeSat;
use OmieLib\Produtos\Cupomfiscalincluir\Cheque;
use OmieLib\Produtos\Cupomfiscalincluir\Cupom;
use OmieLib\Produtos\Cupomfiscalincluir\CupomFiscalIncluirJsonClient;
use OmieLib\Produtos\Cupomfiscalincluir\CupomIdent;
use OmieLib\Produtos\Cupomfiscalincluir\Departamentos;
use OmieLib\Produtos\Cupomfiscalincluir\Det;
use OmieLib\Produtos\Cupomfiscalincluir\Ecf;
use OmieLib\Produtos\Cupomfiscalincluir\Emissor;
use OmieLib\Produtos\Cupomfiscalincluir\Fechamento;
use OmieLib\Produtos\Cupomfiscalincluir\FormasPag;
use OmieLib\Produtos\Cupomfiscalincluir\ICMS;
use OmieLib\Produtos\Cupomfiscalincluir\Imposto;
use OmieLib\Produtos\Cupomfiscalincluir\ListaProcessados;
use OmieLib\Produtos\Cupomfiscalincluir\Lote_validade;
use OmieLib\Produtos\Cupomfiscalincluir\NFe;
use OmieLib\Produtos\Cupomfiscalincluir\Nfce;
use OmieLib\Produtos\Cupomfiscalincluir\NfceCanc;
use OmieLib\Produtos\Cupomfiscalincluir\NfceInut;
use OmieLib\Produtos\Cupomfiscalincluir\OutrasInf;
use OmieLib\Produtos\Cupomfiscalincluir\PIX;
use OmieLib\Produtos\Cupomfiscalincluir\POS;
use OmieLib\Produtos\Cupomfiscalincluir\Pag;
use OmieLib\Produtos\Cupomfiscalincluir\PagIdent;
use OmieLib\Produtos\Cupomfiscalincluir\Parcelas;
use OmieLib\Produtos\Cupomfiscalincluir\Prod;
use OmieLib\Produtos\Cupomfiscalincluir\ProdIdent;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Rps;
use OmieLib\Produtos\Cupomfiscalincluir\Sat;
use OmieLib\Produtos\Cupomfiscalincluir\SatCanc;
use OmieLib\Produtos\Cupomfiscalincluir\Servicos;
use OmieLib\Produtos\Cupomfiscalincluir\TEF;
use OmieLib\Produtos\Cupomfiscalincluir\Total;
use OmieLib\Produtos\Cupomfiscalincluir\TotalRps;

/**
 * Incluir Nota Fiscal Consumidor Eletrônica (NFC-e).
 *
 * @pw_element emissor $emissor Identificação do Emissor do Cupom Fiscal.
 * @pw_element nfce $nfce Identificação da NFC-e.
 * @pw_element nfceCanc $nfceCanc Dados do cancelamento da NFC-e.
 * @pw_element caixa $caixa Identificação do caixa.
 * @pw_element NFe $NFe Informações da Nota Fiscal Consumidor Eletrônico.
 * @pw_element cupomIdent $cupomIdent Identificação dos envolvidos no cupom fiscal (cliente,vendedor,usuário).
 * @pw_element formasPagArray $formasPag Formas de pagamento.
 * @pw_element departamentosArray $departamentos Distribuição por Departamentos.<BR>Preenchimento Opcional.
 * @pw_element categoriasArray $categorias Distribuição por Categorias.<BR>Preenchimento Opcional.
 * @pw_element servicosArray $servicos Informações dos Itens de serviço.
 * @pw_complex cfIncluirNfceRequest
 */
class CfIncluirNfceRequest{
	/**
	 * Identificação do Emissor do Cupom Fiscal.
	 *
	 * @var Emissor
	 */
	public Emissor $emissor;
	/**
	 * Identificação da NFC-e.
	 *
	 * @var Nfce
	 */
	public Nfce $nfce;
	/**
	 * Dados do cancelamento da NFC-e.
	 *
	 * @var NfceCanc
	 */
	public NfceCanc $nfceCanc;
	/**
	 * Identificação do caixa.
	 *
	 * @var Caixa
	 */
	public Caixa $caixa;
	/**
	 * Informações da Nota Fiscal Consumidor Eletrônico.
	 *
	 * @var NFe
	 */
	public NFe $NFe;
	/**
	 * Identificação dos envolvidos no cupom fiscal (cliente,vendedor,usuário).
	 *
	 * @var CupomIdent
	 */
	public CupomIdent $cupomIdent;
	/**
	 * Formas de pagamento.
	 *
	 * @var FormasPag[]
	 */
	public array $formasPag;
	/**
	 * Distribuição por Departamentos.<BR>Preenchimento Opcional.
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Distribuição por Categorias.<BR>Preenchimento Opcional.
	 *
	 * @var Categorias[]
	 */
	public array $categorias;
	/**
	 * Informações dos Itens de serviço.
	 *
	 * @var Servicos[]
	 */
	public array $servicos;
}
