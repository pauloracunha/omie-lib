<?php

namespace OmieLib\Produtos\Cupomfiscalincluir\Response;

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
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Rps;
use OmieLib\Produtos\Cupomfiscalincluir\Sat;
use OmieLib\Produtos\Cupomfiscalincluir\SatCanc;
use OmieLib\Produtos\Cupomfiscalincluir\Servicos;
use OmieLib\Produtos\Cupomfiscalincluir\TEF;
use OmieLib\Produtos\Cupomfiscalincluir\Total;
use OmieLib\Produtos\Cupomfiscalincluir\TotalRps;

/**
 * Resposta da inclusão do Cupom RPS.
 *
 * @pw_element integer $idCupom Identificação do cupom fiscal.
 * @pw_element string $cCodStatus Código do status de processamento do cupom fiscal.<BR><BR>Se retornar 0 indica que o cupom foi processado com sucesso.<BR><BR>Se retornar um valor maior que zero indica o código do erro gerado.<BR><BR>
 * @pw_element string $cDesStatus Descrição do status de processamento.<BR><BR>Caso ocorra erro, retorna a descrição do erro gerado.<BR><BR>
 * @pw_complex cfIncluirRpsResponse
 */
class CfIncluirRpsResponse{
	/**
	 * Identificação do cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idCupom;
	/**
	 * Código do status de processamento do cupom fiscal.<BR><BR>Se retornar 0 indica que o cupom foi processado com sucesso.<BR><BR>Se retornar um valor maior que zero indica o código do erro gerado.<BR><BR>
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento.<BR><BR>Caso ocorra erro, retorna a descrição do erro gerado.<BR><BR>
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
