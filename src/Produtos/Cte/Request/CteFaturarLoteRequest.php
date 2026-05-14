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
 * Solicitação do faturamento em lote de um grupo de CT-es.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>GeradorCT-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu o CT-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR><BR>Maquina01<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de CT-e instalados, ele deve indicar: "01" e "02" ou "10" e "20" ou ainda informar o Serial do HD da máquina.
 * @pw_element integer $nIdFaturamentoLote Id do faturamento. <BR><BR>Para indicar o início de um novo lote envie 0 (zero) nesse campo.<BR><BR>Como resposta você receberá o nIdFaturamento gerado pelo Omie automaticamente.<BR><BR>Nos próximos envios informe o nIdFaturamento recebido para adicionar novos CTes ao lote.<BR><BR>Para concluir o envio de CTes e gerar a fatura do lote informe "S" na tag cConcluirFatura.<BR><BR>Na última chamada desse método você pode enviar apenas a tag cConcluirFatura. Opcionalmente, você pode enviar os CTes restantes.
 * @pw_element string $cConcluirFatura Concluir o faturamento. <BR><BR>Indica que o envio de CTes está concluído para o lote e que pode realizar o faturamento do mesmo.<BR><BR>Possíveis valores:<BR><BR>S - Sim, encerra o processo de envio de CTes e realiza o faturamento. Nesse momento, você deve informar as tags CNPJCliente, cCategoria, nContaCorrente, dVencimento e nValorFatura e complementar com as tags cNumeroFatura e departamentos, se necessário.<BR><BR>N - Não, indica que uma lista de CTes deve ser adicionada ao lote. As tags cCategoria, nContaCorrente, dVencimento, nValorFatura, cNumeroFatura e departamentos não devem ser ser informadas.
 * @pw_element string $CNPJCliente CNPJ do Cliente.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $cCategoria Código da Categoria para geração do título no financeiro.
 * @pw_element integer $nContaCorrente Id da Conta Corrente no Omie para a geração do título no financeiro.
 * @pw_element string $dVencimento Data de Exclusão.
 * @pw_element decimal $nValorFatura Valor da Fatura.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $cNumeroFatura Número da Fatura.
 * @pw_element string $cListaChavesCTes Lista de chave de CTes. <BR><BR>As chaves devem ser informadas com o separador | (carácter pipe).
 * @pw_element itensFaturaLoteArray $itensFaturaLote Itens da Fatura.
 * @pw_element departamentosArray $departamentos Distribuição por Departamentos.<BR>Preenchimento Opcional.
 * @pw_element integer $nCliente Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
 * @pw_complex cteFaturarLoteRequest
 */
class CteFaturarLoteRequest{
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
	 * Id do faturamento. <BR><BR>Para indicar o início de um novo lote envie 0 (zero) nesse campo.<BR><BR>Como resposta você receberá o nIdFaturamento gerado pelo Omie automaticamente.<BR><BR>Nos próximos envios informe o nIdFaturamento recebido para adicionar novos CTes ao lote.<BR><BR>Para concluir o envio de CTes e gerar a fatura do lote informe "S" na tag cConcluirFatura.<BR><BR>Na última chamada desse método você pode enviar apenas a tag cConcluirFatura. Opcionalmente, você pode enviar os CTes restantes.
	 *
	 * @var integer
	 */
	public int $nIdFaturamentoLote;
	/**
	 * Concluir o faturamento. <BR><BR>Indica que o envio de CTes está concluído para o lote e que pode realizar o faturamento do mesmo.<BR><BR>Possíveis valores:<BR><BR>S - Sim, encerra o processo de envio de CTes e realiza o faturamento. Nesse momento, você deve informar as tags CNPJCliente, cCategoria, nContaCorrente, dVencimento e nValorFatura e complementar com as tags cNumeroFatura e departamentos, se necessário.<BR><BR>N - Não, indica que uma lista de CTes deve ser adicionada ao lote. As tags cCategoria, nContaCorrente, dVencimento, nValorFatura, cNumeroFatura e departamentos não devem ser ser informadas.
	 *
	 * @var string
	 */
	public string $cConcluirFatura;
	/**
	 * CNPJ do Cliente.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $CNPJCliente;
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
	 * Data de Exclusão.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Valor da Fatura.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $nValorFatura;
	/**
	 * Número da Fatura.
	 *
	 * @var string
	 */
	public string $cNumeroFatura;
	/**
	 * Lista de chave de CTes. <BR><BR>As chaves devem ser informadas com o separador | (carácter pipe).
	 *
	 * @var string
	 */
	public string $cListaChavesCTes;
	/**
	 * Itens da Fatura.
	 *
	 * @var ItensFaturaLote[]
	 */
	public array $itensFaturaLote;
	/**
	 * Distribuição por Departamentos.<BR>Preenchimento Opcional.
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Código do Cliente para geração do título no financeiro.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCliente;
}
