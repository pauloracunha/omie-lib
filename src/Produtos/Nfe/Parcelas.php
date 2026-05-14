<?php

namespace OmieLib\Produtos\Nfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Request\NfeCancelarRequest;
use OmieLib\Produtos\Nfe\Request\NfeExcluirRequest;
use OmieLib\Produtos\Nfe\Request\NfeImportarRequest;
use OmieLib\Produtos\Nfe\Request\NfeListarRequest;
use OmieLib\Produtos\Nfe\Response\NfeCancelarResponse;
use OmieLib\Produtos\Nfe\Response\NfeExcluirResponse;
use OmieLib\Produtos\Nfe\Response\NfeImportarResponse;
use OmieLib\Produtos\Nfe\Response\NfeListarResponse;

/**
 * Informações complementares das Parcelas da NF-e.
 *
 * @pw_element integer $nSequencia Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
 * @pw_element decimal $nValorParcela Valor do Documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $dDataVencimento Data do documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $cTipoDocumento Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
 * @pw_element string $cCategoria Código da Categoria.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nContaCorrente Id da Conta Corrente.<BR><BR>Preenchimento opcional.
 * @pw_element string $nsu Número Sequencial Único - NSU<BR><BR>Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Preenchimento opcional.
 * @pw_element string $cObs Observações.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nProjeto Id do projeto.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nVendedor Id do Vendedor.<BR><BR>Preenchimento opcional.
 * @pw_element string $dDataEntrada Data de Entrada da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Formato: dd/mm/aaaa
 * @pw_element string $dDataPrevisao Data de Previsão do título de contas a pagar/receber.<BR><BR>Preenchimento Obrigatório.<BR><BR>Formato: dd/mm/aaaa
 * @pw_complex parcelas
 */
class Parcelas{
	/**
	 * Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Valor do Documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $nValorParcela;
	/**
	 * Data do documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $dDataVencimento;
	/**
	 * Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
	 *
	 * @var string
	 */
	public string $cTipoDocumento;
	/**
	 * Código da Categoria.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Id da Conta Corrente.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nContaCorrente;
	/**
	 * Número Sequencial Único - NSU<BR><BR>Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nsu;
	/**
	 * Observações.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cObs;
	/**
	 * Id do projeto.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nProjeto;
	/**
	 * Id do Vendedor.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nVendedor;
	/**
	 * Data de Entrada da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Formato: dd/mm/aaaa
	 *
	 * @var string
	 */
	public string $dDataEntrada;
	/**
	 * Data de Previsão do título de contas a pagar/receber.<BR><BR>Preenchimento Obrigatório.<BR><BR>Formato: dd/mm/aaaa
	 *
	 * @var string
	 */
	public string $dDataPrevisao;
}
