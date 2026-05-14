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
 * Lançamentos no Conta Corrente relacionados a Nota Fiscal.
 *
 * @pw_element integer $nSequencia Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
 * @pw_element string $cNaturezaDocumento Natureza do Documento.<BR><BR>Preenchimento Obrigatório.<BR><BR>Pode ser:<BR>P - Pagar<BR>R - Receber
 * @pw_element decimal $nValorDocumento Valor do Documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $dDataDocumento Data do documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $cTipoDocumento Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
 * @pw_element string $cCategoria Código da Categoria.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nContaCorrente Id da Conta Corrente.<BR><BR>Preenchimento opcional.
 * @pw_element string $cOrigem Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
 * @pw_element string $cObs Observações.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nProjeto Id do projeto.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nVendedor Id do Vendedor.<BR><BR>Preenchimento opcional.
 * @pw_complex lancamentos
 */
class Lancamentos{
	/**
	 * Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Natureza do Documento.<BR><BR>Preenchimento Obrigatório.<BR><BR>Pode ser:<BR>P - Pagar<BR>R - Receber
	 *
	 * @var string
	 */
	public string $cNaturezaDocumento;
	/**
	 * Valor do Documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $nValorDocumento;
	/**
	 * Data do documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $dDataDocumento;
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
	 * Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
	 *
	 * @var string
	 */
	public string $cOrigem;
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
}
