<?php

namespace OmieLib\Produtos\Cte\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\ConhecimentoTransporteJsonClient;
use OmieLib\Produtos\Cte\Departamentos;
use OmieLib\Produtos\Cte\ItensFatura;
use OmieLib\Produtos\Cte\ItensFaturaLote;
use OmieLib\Produtos\Cte\NfeEncontradas;
use OmieLib\Produtos\Cte\Request\CteAverbacaoRequest;
use OmieLib\Produtos\Cte\Request\CteCCRequest;
use OmieLib\Produtos\Cte\Request\CteCancelarRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirFatRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarLoteRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarRequest;
use OmieLib\Produtos\Cte\Request\CteImportarRequest;
use OmieLib\Produtos\Cte\Request\CteListarNFeRequest;
use OmieLib\Produtos\Cte\Request\CteStatusFaturaRequest;

/**
 * Response do Status da Fatura importada.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>GeradorCT-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>Maquina01<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de CT-e instalados, ele deve indicar: "01" e "02" ou "10" e "20" ou ainda informar o Serial do HD da máquina.
 * @pw_element string $cChaveCte Chave de acesso do CT-e
 * @pw_element integer $nCliente Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element string $cCategoria Código da Categoria para geração do título no financeiro.
 * @pw_element integer $nContaCorrente Id da Conta Corrente no Omie para a geração do título no financeiro.
 * @pw_element integer $nVendedor Código do Vendedor para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nValorCte Valor do CT-e.
 * @pw_element integer $nIdFaturamento ID do faturamento do grupo de CT-es.
 * @pw_element string $dVencimento Data de Exclusão.
 * @pw_element string $dEmi Data de emissão inicial.
 * @pw_element string $hEmi Hora de emissão inicial.
 * @pw_element integer $nQtdeCte Quantidade de CTe importadas
 * @pw_element string $cExcluido Indica se está excluido.
 * @pw_element string $dExclusao Data de Exclusão.
 * @pw_element string $cStatus Status da Fatura.&nbsp;
 * @pw_complex cteStatusFaturaResponse
 */
class CteStatusFaturaResponse{
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
	 * Chave de acesso do CT-e
	 *
	 * @var string
	 */
	public string $cChaveCte;
	/**
	 * Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCliente;
	/**
	 * Código da Categoria para geração do título no financeiro.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Id da Conta Corrente no Omie para a geração do título no financeiro.
	 *
	 * @var integer
	 */
	public int $nContaCorrente;
	/**
	 * Código do Vendedor para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nVendedor;
	/**
	 * Valor do CT-e.
	 *
	 * @var decimal
	 */
	public float $nValorCte;
	/**
	 * ID do faturamento do grupo de CT-es.
	 *
	 * @var integer
	 */
	public int $nIdFaturamento;
	/**
	 * Data de Exclusão.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Data de emissão inicial.
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Hora de emissão inicial.
	 *
	 * @var string
	 */
	public string $hEmi;
	/**
	 * Quantidade de CTe importadas
	 *
	 * @var integer
	 */
	public int $nQtdeCte;
	/**
	 * Indica se está excluido.
	 *
	 * @var string
	 */
	public string $cExcluido;
	/**
	 * Data de Exclusão.
	 *
	 * @var string
	 */
	public string $dExclusao;
	/**
	 * Status da Fatura.&nbsp;
	 *
	 * @var string
	 */
	public string $cStatus;
}
