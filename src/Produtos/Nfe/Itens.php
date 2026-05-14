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
 * Itens da Nota Fiscal.
 *
 * @pw_element integer $nSequencia Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
 * @pw_element integer $nIdProduto ID do produto.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado, fará a pesquisa do produto de acordo com os dados do XML da NF-e.
 * @pw_element string $cCategoria Código da Categoria.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lNaoGerarTitulo Não gerar título de contas a pagar ou receber para a NF-e.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Pagar ou Receber no financeiro.<BR>false - Gera o ítulo de Contas a Pagar ou Receber no financeiro.<BR><BR>O padrão é true.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_element boolean $lNaoMovEstoque Não movimentar o estoque.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a movimentação do estoque.<BR>false - Gera o movimentação do estoque.<BR><BR>O padrão é true.<BR><BR>Prevalece a informa
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Assumirá o local padrão de estoque caso não informado.
 * @pw_complex itens
 */
class Itens{
	/**
	 * Número da Sequencia.<BR><BR>Preenchimento obrigatório na Estrutura Itens. Para ItensXml apenas quando for informada a tag lote_validade.<BR><BR>Para os itens da NF identifica qual o item do XML se refere.<BR><BR>Para as parcelas da NF identifica o número da parcela.<BR><BR>Para os lançamentos no Conta Corrente indentifica o lançamento que será gerado.<BR><BR>Permite sequencial de 1 a 999.
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * ID do produto.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado, fará a pesquisa do produto de acordo com os dados do XML da NF-e.
	 *
	 * @var integer
	 */
	public int $nIdProduto;
	/**
	 * Código da Categoria.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Não gerar título de contas a pagar ou receber para a NF-e.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Pagar ou Receber no financeiro.<BR>false - Gera o ítulo de Contas a Pagar ou Receber no financeiro.<BR><BR>O padrão é true.
	 *
	 * @var boolean
	 */
	public bool $lNaoGerarTitulo;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
	/**
	 * Não movimentar o estoque.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a movimentação do estoque.<BR>false - Gera o movimentação do estoque.<BR><BR>O padrão é true.<BR><BR>Prevalece a informa
	 *
	 * @var boolean
	 */
	public bool $lNaoMovEstoque;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Assumirá o local padrão de estoque caso não informado.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
