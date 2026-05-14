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
 * Solicitação da Inutilização da Nota Fiscal Consumidor Eletrônica (NFC-e).
 *
 * @pw_element emissor $emissor Identificação do Emissor do Cupom Fiscal.
 * @pw_element nfceInut $nfceInut Identificação da inutilização da NFC-e.
 * @pw_complex cfInutilizarNfceRequest
 */
class CfInutilizarNfceRequest{
	/**
	 * Identificação do Emissor do Cupom Fiscal.
	 *
	 * @var Emissor
	 */
	public Emissor $emissor;
	/**
	 * Identificação da inutilização da NFC-e.
	 *
	 * @var NfceInut
	 */
	public NfceInut $nfceInut;
}
