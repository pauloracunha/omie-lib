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
 * Dados dos Itens da NF-e.
 *
 * @pw_element string $cProdXml Código do produto no XML da NF-e.<BR>Essa informação está localizada na tag "cProd" do XML da NF-e, ela é utilizada para identificar o produto no XML.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $nIdProdutoXml ID do produto no Omie que será vinculado ao produto informado na tag "cProdXml".<BR><BR>Preenchimento obrigatório.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_element integer $nSequencia Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
 * @pw_complex itensXml
 */
class ItensXml{
	/**
	 * Código do produto no XML da NF-e.<BR>Essa informação está localizada na tag "cProd" do XML da NF-e, ela é utilizada para identificar o produto no XML.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $cProdXml;
	/**
	 * ID do produto no Omie que será vinculado ao produto informado na tag "cProdXml".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $nIdProdutoXml;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
	/**
	 * Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
	 *
	 * @var integer
	 */
	public int $nSequencia;
}
