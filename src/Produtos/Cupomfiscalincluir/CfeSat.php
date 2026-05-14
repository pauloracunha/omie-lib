<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Informações do Cupom Fiscal - SAT.
 *
 * @pw_element string $nCFe Número do cupom fiscal ou <BR>Número do Extrato do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>
 * @pw_element string $chCFe Chave de Acesso do CF-e-SAT.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $tpAmb Ambiente.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>H-Homologação.<BR>P-Produção.
 * @pw_element string $dEmi Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element string $hEmi Hora da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element boolean $lCanc Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
 * @pw_element detArray $det Itens do cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element outrasInf $outrasInf Outras informações do cupom fiscal.
 * @pw_element total $total Totais do cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_complex cfeSat
 */
class CfeSat{
	/**
	 * Número do cupom fiscal ou <BR>Número do Extrato do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>
	 *
	 * @var string
	 */
	public string $nCFe;
	/**
	 * Chave de Acesso do CF-e-SAT.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $chCFe;
	/**
	 * Ambiente.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>H-Homologação.<BR>P-Produção.
	 *
	 * @var string
	 */
	public string $tpAmb;
	/**
	 * Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Hora da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var string
	 */
	public string $hEmi;
	/**
	 * Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var boolean
	 */
	public bool $lCanc;
	/**
	 * Itens do cupom fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var Det[]
	 */
	public array $det;
	/**
	 * Outras informações do cupom fiscal.
	 *
	 * @var OutrasInf
	 */
	public OutrasInf $outrasInf;
	/**
	 * Totais do cupom fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var Total
	 */
	public Total $total;
}
