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
 * Informe os detalhes do Cupom/RPS
 *
 * @pw_element integer $numero Número do cupom.<BR><BR>Preenchimento obrigatório.<BR><BR>
 * @pw_element string $serie Série do Cupom.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $dEmi Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element string $hEmi Hora da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element totalRps $totalRps Total do cupom RPS.
 * @pw_element string $cTipoAcao Ação para o faturamento de serviços.<BR><BR>Essa tag é deve ser apenas na inclusão de cupons fiscais com itens de serviço quando a tag 'servicos' estiver preenchida. <BR><BR>Indica se as ordens de serviço faturadas para o cupom ou rps serão geradas de forma agrupada ou individual.<BR><BR>'AGRUPADO' (Default).<BR>'AGRUPADO-SALAO-PARCEIRO'<BR>'INDIVIDUAL'
 * @pw_complex rps
 */
class Rps{
	/**
	 * Número do cupom.<BR><BR>Preenchimento obrigatório.<BR><BR>
	 *
	 * @var integer
	 */
	public int $numero;
	/**
	 * Série do Cupom.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $serie;
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
	 * Total do cupom RPS.
	 *
	 * @var TotalRps
	 */
	public TotalRps $totalRps;
	/**
	 * Ação para o faturamento de serviços.<BR><BR>Essa tag é deve ser apenas na inclusão de cupons fiscais com itens de serviço quando a tag 'servicos' estiver preenchida. <BR><BR>Indica se as ordens de serviço faturadas para o cupom ou rps serão geradas de forma agrupada ou individual.<BR><BR>'AGRUPADO' (Default).<BR>'AGRUPADO-SALAO-PARCEIRO'<BR>'INDIVIDUAL'
	 *
	 * @var string
	 */
	public string $cTipoAcao;
}
