<?php

namespace OmieLib\Produtos\Cte\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\ConhecimentoTransporteJsonClient;
use OmieLib\Produtos\Cte\Departamentos;
use OmieLib\Produtos\Cte\ItensFatura;
use OmieLib\Produtos\Cte\ItensFaturaLote;
use OmieLib\Produtos\Cte\NfeEncontradas;
use OmieLib\Produtos\Cte\Response\CteAverbacaoResponse;
use OmieLib\Produtos\Cte\Response\CteCCResponse;
use OmieLib\Produtos\Cte\Response\CteCancelarResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirFatResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarLoteResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarResponse;
use OmieLib\Produtos\Cte\Response\CteImportarResponse;
use OmieLib\Produtos\Cte\Response\CteListarNFeResponse;
use OmieLib\Produtos\Cte\Response\CteStatusFaturaResponse;

/**
 * Solicitação da exclusão do faturamento de um grupo de CT-es.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>GeradorCT-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>Maquina01<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de CT-e instalados, ele deve indicar: "01" e "02" ou "10" e "20" ou ainda informar o Serial do HD da máquina.
 * @pw_element integer $nIdFaturamento ID do faturamento do grupo de CT-es.
 * @pw_complex cteExcluirFatRequest
 */
class CteExcluirFatRequest{
	/**
	 * Nome do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>GeradorCT-e
	 *
	 * @var string
	 */
	public string $cAppNome;
	/**
	 * Versão do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>1.02.01
	 *
	 * @var string
	 */
	public string $cAppVersao;
	/**
	 * Identificação do aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>Maquina01<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de CT-e instalados, ele deve indicar: "01" e "02" ou "10" e "20" ou ainda informar o Serial do HD da máquina.
	 *
	 * @var string
	 */
	public string $cAppId;
	/**
	 * ID do faturamento do grupo de CT-es.
	 *
	 * @var integer
	 */
	public int $nIdFaturamento;
}
