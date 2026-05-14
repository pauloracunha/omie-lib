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
 * Solicitação do Importação de CT-e.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>GeradorCT-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>Maquina01<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de CT-e instalados, ele deve indicar: "01" e "02" ou "10" e "20" ou ainda informar o Serial do HD da máquina.
 * @pw_element string $cChaveCte Chave de acesso do CT-e
 * @pw_element string $cXmlCte Xml do CT-e a ser importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>' para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5Cte".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $cMd5Cte MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
 * @pw_element string $cCategoria Código da Categoria para geração do título no financeiro.
 * @pw_element integer $nContaCorrente Id da Conta Corrente no Omie para a geração do título no financeiro.
 * @pw_element boolean $lNaoGerarCR Não gerar título de contas a receber para o CT-e. <BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Receber no financeiro.<BR>false - Gera o ítulo de Contas a Receber no financeiro.<BR><BR>O padrão é false.
 * @pw_element integer $nVendedor Código do Vendedor para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nProjeto Código do Projeto para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nCliente Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element string $cObs Observações do CT-e para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_element string $pis_cst Código da Situação Tributária do PIS.
 * @pw_element decimal $pis_aliquota Alíquota do PIS.
 * @pw_element string $cofins_cst Código da Situação Tributária do COFINS.
 * @pw_element decimal $cofins_aliquota Alíquota do COFINS.
 * @pw_element departamentosArray $departamentos Distribuição por Departamentos.<BR>Preenchimento Opcional.
 * @pw_complex cteImportarRequest
 */
class CteImportarRequest{
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
	 * Xml do CT-e a ser importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>' para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5Cte".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $cXmlCte;
	/**
	 * MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
	 *
	 * @var string
	 */
	public string $cMd5Cte;
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
	 * Não gerar título de contas a receber para o CT-e. <BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Receber no financeiro.<BR>false - Gera o ítulo de Contas a Receber no financeiro.<BR><BR>O padrão é false.
	 *
	 * @var boolean
	 */
	public bool $lNaoGerarCR;
	/**
	 * Código do Vendedor para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nVendedor;
	/**
	 * Código do Projeto para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nProjeto;
	/**
	 * Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCliente;
	/**
	 * Observações do CT-e para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cObs;
	/**
	 * Código da Situação Tributária do PIS.
	 *
	 * @var string
	 */
	public string $pis_cst;
	/**
	 * Alíquota do PIS.
	 *
	 * @var decimal
	 */
	public float $pis_aliquota;
	/**
	 * Código da Situação Tributária do COFINS.
	 *
	 * @var string
	 */
	public string $cofins_cst;
	/**
	 * Alíquota do COFINS.
	 *
	 * @var decimal
	 */
	public float $cofins_aliquota;
	/**
	 * Distribuição por Departamentos.<BR>Preenchimento Opcional.
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
}
