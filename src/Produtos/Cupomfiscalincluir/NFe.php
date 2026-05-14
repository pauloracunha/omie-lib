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
 * Informações da Nota Fiscal Consumidor Eletrônico.
 *
 * @pw_element string $nNF Número da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.<BR><BR>
 * @pw_element string $serie Série do Cupom.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $chNFe Chave de Acesso da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $tpAmb Ambiente.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>H-Homologação.<BR>P-Produção.
 * @pw_element string $tpEmis Tipo de emissão da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>1 - Emissão normal.<BR>9 - Emissão em contingência.
 * @pw_element string $cTipoAcao Ação para o faturamento de serviços.<BR><BR>Essa tag é deve ser apenas na inclusão de cupons fiscais com itens de serviço quando a tag 'servicos' estiver preenchida. <BR><BR>Indica se as ordens de serviço faturadas para o cupom ou rps serão geradas de forma agrupada ou individual.<BR><BR>'AGRUPADO' (Default).<BR>'AGRUPADO-SALAO-PARCEIRO'<BR>'INDIVIDUAL'
 * @pw_element string $dEmi Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element string $hEmi Hora da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element boolean $lCanc Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
 * @pw_element detArray $det Itens do cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element outrasInf $outrasInf Outras informações do cupom fiscal.
 * @pw_element total $total Totais do cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_complex NFe
 */
class NFe{
	/**
	 * Número da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.<BR><BR>
	 *
	 * @var string
	 */
	public string $nNF;
	/**
	 * Série do Cupom.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $serie;
	/**
	 * Chave de Acesso da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $chNFe;
	/**
	 * Ambiente.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>H-Homologação.<BR>P-Produção.
	 *
	 * @var string
	 */
	public string $tpAmb;
	/**
	 * Tipo de emissão da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>1 - Emissão normal.<BR>9 - Emissão em contingência.
	 *
	 * @var string
	 */
	public string $tpEmis;
	/**
	 * Ação para o faturamento de serviços.<BR><BR>Essa tag é deve ser apenas na inclusão de cupons fiscais com itens de serviço quando a tag 'servicos' estiver preenchida. <BR><BR>Indica se as ordens de serviço faturadas para o cupom ou rps serão geradas de forma agrupada ou individual.<BR><BR>'AGRUPADO' (Default).<BR>'AGRUPADO-SALAO-PARCEIRO'<BR>'INDIVIDUAL'
	 *
	 * @var string
	 */
	public string $cTipoAcao;
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
